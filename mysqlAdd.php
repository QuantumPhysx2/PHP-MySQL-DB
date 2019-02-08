<?php
// These configurations MUST follow the 'config.inc.php' in 'phpMyAdmin' file
// Setup connection settings
$dbHost = "localhost";
$dbPort = 3307;
$dbName = "handsets";
$dbUsername = "root";
$dbPassword = "";

// If state of button is in POST
if (isset($_POST["ADD"])) {
    try {
        // Initiate connection
        $conn = new PDO("mysql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUsername, $dbPassword);
    } catch (PDOException $error) {
        echo "Connection Error: " . $error->getMessage();
        exit();
    }

    // Get values from inputs
    $product = $_POST["PRODUCT"];
    $unitCost = $_POST["UNITCOST"];
    $amount = $_POST["AMOUNT"];
    $totalCost = $_POST["TOTALCOST"];
    $markup = $_POST["MARKUP"];
    $sellEach = $_POST["SELLEACH"];
    $sellPriceTotal = $_POST["SELLPRICETOTAL"];
    $marginPerPiece = $_POST["MARGINPERPIECE"];
    $marginTotal = $_POST["MARGINTOTAL"];

    // Create a query
    // NOTE: Remove quotations with columns and table name!! Will not work otherwise
    $query = "INSERT INTO product (Name, UnitCost, Amount, TotalCost, Markup, SellEach, SellPriceTotal, MarginPerPiece, MarginTotal) VALUES (:PRODUCT, :UNITCOST, :AMOUNT, :TOTALCOST, :MARKUP, :SELLEACH, :SELLPRICETOTAL, :MARGINPERPIECE, :MARGINTOTAL)";
    // Tell our connection to prepare for a query
    $result = $conn->prepare($query);
    // Grab the inputs and insert that query
    $insert = $result->execute(array(":PRODUCT"=>$product, ":UNITCOST"=>$unitCost, ":AMOUNT"=>$amount, ":TOTALCOST"=>$totalCost, ":MARKUP"=>$markup, ":SELLEACH"=>$sellEach, ":SELLPRICETOTAL"=>$sellPriceTotal, ":MARGINPERPIECE"=>$marginPerPiece, ":MARGINTOTAL"=>$marginTotal));

    if ($insert) {
        // Return to this location on success or fail
        header("Location: index.php");
        die();
    } else {
        echo "Data Insertion Error";
        header("Location: index.php");
        die();
    }
}
?>