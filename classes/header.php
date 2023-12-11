<?php

class Header{
    public function createHeader(){
        $headerHtml ='
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="CSS/header.css">
            <title>Document</title>
        </head>
        <body>
        <header>
            <div class="header_container">
                <div class="logo_container">
                    <img src="image/logo.png" class="header_logo">
                </div>
                <div class="nav_btns">
                    <ul class="button_list">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About US</a></li>
                        <li>
                            <a href="#">Product</a>
                            <ul class="product_dropDown">
                                <li><a href="#">product1</a></li>
                                <li><a href="#">product2</a></li>
                                <li><a href="#">product3</a></li>
                            </ul>
                        </li>
                        <li>
                        <a href="#">Academy</a>
                        <ul class="academy_dropDown">
                            <li><a href="#">academy1</a></li>
                            <li><a href="#">academy2</a></li>
                            <li><a href="#">academy3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contact US</a></li>
                    </ul>
                </div>
                <div class="login">';
                    if(isset($_SESSION['user'])){
                        $headerHtml .= '<a href="profile.php"><img class = "profile"src="image/user.png"></a>';
                    }else{
                        $headerHtml .= '<a href="login.php"><button class="login_button">Login</button></a>';
                        
                    }
                $headerHtml .='
                </div>
                <div class="cart_container">
                    <img src="image/cart.png" class="cart">
                </div>
            </div>
        </header>
        </body>
        </html>';

        echo $headerHtml;
    }
}


// require_once 'classes/database_conn.php';

// $dbConnection = new database();
// $conn = $dbConnection->getConnection();

//  $sessionManager = new SessionManager();
//     // $sessionManager->checkUserAuthentication();
//     // $sessionManager->logout();
?>