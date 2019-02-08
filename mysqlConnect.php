<?php
// These configurations MUST follow the 'config.inc.php' in 'phpMyAdmin' file
// Setup connection settings
$dbHost = "localhost";
$dbPort = 3307;
$dbName = "handsets";
$dbUsername = "root";
$dbPassword = "";

try {
    // Initiate connection
    $conn = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUsername, $dbPassword);
    // Add PHP Data Object (PDO) with error checking exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query the database
    $query = "SELECT * FROM product";
    if ($conn) {
        // Return the result in a variable
        $result = $conn->query($query);

        // Echo back results in the below format
        echo "<table>
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Unit Cost</th>
                    <th>Amount</th>
                    <th>Total Cost</th>
                    <th>Markup</th>
                    <th>Sell Each</th>
                    <th>Sell Price Total</th>
                    <th>Margin Per Piece</th>
                    <th>Margin Total</th>
                </thead>";
        // For every row, print it to the screen using the column name
        foreach($result as $row) {
            echo "<tr>
                    <td>" .$row['ID']. "</td>
                    <td>" .$row['Name']. "</td>
                    <td>" .$row['UnitCost']. "</td>
                    <td>" .$row['Amount']. "</td>
                    <td>" .$row['TotalCost']. "</td>
                    <td>" .$row['Markup']. "</td>
                    <td>" .$row['SellEach']. "</td>
                    <td>" .$row['SellPriceTotal']. "</td>
                    <td>" .$row['MarginPerPiece']. "</td>
                    <td>" .$row['MarginTotal']. "</td>
                    </tr>";
        }
        echo "</table>";
    } else {
        die("Ree");
    }
} catch (PDOException $error) {
    die("Connection Error: " . $error->getMessage());
}
?>