<?php

class Footer{
    public function createFooter(){
        $headerHtml ='
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
                        $headerHtml .= '<a href="#"><img class = "profile"src="image/user.png"></a>';
                    }else{
                        $headerHtml .= '<a href="#"><button class="login_button">Login</button></a>';
                        
                    }
                $headerHtml .='
                </div>
                <div class="cart_container">
                    <img src="image/cart.png" class="cart">
                </div>
            </div>
        </header>';

        echo $headerHtml;
    }
    
}
?>