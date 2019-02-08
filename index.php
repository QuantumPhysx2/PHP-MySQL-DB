<?php
include ("mysqlAdd.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="BLACKBIRD Technology">
        <meta name="description" content="BLACKBIRD Technology">
        <meta name="keywords" content="Products">
        <meta name="theme-color" content="#0e0e0e">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <title>Margin Calculator</title>
    </head>

    <body>
        <div class="container">
            <div class="input-form">
                <form role="form" action="mysqlAdd.php" method="POST">
                    <div class="section-1">
                        <label for="product">Handset</label>
                        <label for="unitCost">Initial Cost</label>
                        <label for="amount">How Many</label>
                        <label for="totalCost">Total Cost</label>
                        <label for="markUp">Markup</label>
                        <label for="sellEach">Sell Each</label>
                        <label for="sellPriceTotal">Sell Price Total</label>
                        <label for="marginPerPiece">Margin Per Piece</label>
                        <label for="marginTotal">Margin Total</label>
                    </div>

                    <div class="section-2">
                        <select id="product" name="PRODUCT">
                            <option disabled selected>Select:</option>
                            <option value="Yealink t42s">Yealink t42s</option>
                            <option value="Yealink t46s">Yealink t46s</option>
                            <option value="Yealink Cordless">Yealink Cordless</option>
                            <option value="Yealink DSS">Yealink DSS</option>
                            <option value="Yealink Extension">Yealink Extension</option>
                            <option value="PRO 4 Sim Calls">PRO 4 Sim Calls</option>
                            <option value="PRO 8 Sim Calls">PRO 8 Sim Calls</option>
                            <option value="PRO 16 Sim Calls">PRO 16 Sim Calls</option>
                            <option value="PRO 32 Sim Calls">PRO 32 Sim Calls</option>
                            <option value="PRO 64 Sim Calls">PRO 64 Sim Calls</option>
                            <option value="PRO 128 Sim Calls">PRO 128 Sim Calls</option>
                            <option value="PRO 256 Sim Calls">PRO 256 Sim Calls</option>
                            <option value="PRO 512 Sim Calls">PRO 512 Sim Calls</option>
                            <option value="PRO 1024 Sim Calls">PRO 1024 Sim Calls</option>
                            <option value="Enterprise 32 Sim Calls">Enterprise 32 Sim Calls</option>
                        </select>
                        <input type="number" id="unitCost" name="UNITCOST" min="0" step=".01" required>
                        <input type="number" id="amount" name="AMOUNT" min="0" required>
                        <input type="number" id="totalCost" name="TOTALCOST" min="0" step=".01" required>
                        <input type="number" id="markUp" name="MARKUP" min="0" step=".01" required>
                        <input type="number" id="sellEach" name="SELLEACH" min="0" step=".01" required>
                        <input type="number" id="sellPriceTotal" name="SELLPRICETOTAL" min="0" step=".01" required>    
                        <input type="number" id="marginPerPiece" name="MARGINPERPIECE" min="0" step=".01" required>
                        <input type="number" id="marginTotal" name="MARGINTOTAL" min="0" step=".01" required>
                    </div>
                    <button type="submit" name="ADD">Add Handset</button>
                </form>
            </div>

            <div class="register-form">
                <form method="POST">
                    <label for="usernamne">Username</label>
                    <input id="username" name="USERNAME" type="text" required>

                    <label for="password">Password</label>
                    <input id="password" name="PASSWORD" type="password" required>

                    <button type="submit">Login</button>
                    <p>Don't have an account? <a href="#">Register</a></p>
                </form>
            </div>

            <div class="result">
                <?php
                include_once "mysqlConnect.php";
                ?>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="main.js"></script>
    </body>
</html>