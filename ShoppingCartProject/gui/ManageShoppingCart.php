<?php include '..\controller\ManageShoppingCartController.php';
        if (isset($_GET['qtty']) and isset($_GET['addtoshoppingcart'])) {
                $qtty = $_GET['qtty'];
                $itemName = $_GET['addtoshoppingcart'];
        }else {
                $qtty = null;
                $itemName = null;
        }
        ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="header">
            <h1>Welcome!</h1>
        </div>
    
            
        <div id="nav">
        </div>
    

        <div id="section">
            <?php 
                    $lookUpItem = new ManageShoppingCartController();
                    $lookUpItem->printAllItemInShoppingCart();
            ?>
        </div>

        <div id="footer">
        Copyright © 2015, Leonardo Farinha, Robert Krall
        </div>
    </body>
</html>