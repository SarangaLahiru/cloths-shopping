<?php
include "cart.information.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/user.cart.profile.css">
    <link rel="stylesheet" href="./rest2.css">
    <link rel="stylesheet" href="product.details.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="contact">
       <div class="call">
        
        <p><i class="fa fa-phone" aria-hidden="true"></i>Call us: +9477582165</p>
       </div>
       <div class="call">
        
        <p><i class="fa fa-envelope" aria-hidden="true"></i>Call us: example2gmail.com</p>
       </div>
    </div>
    <header>

        <h2>Organic</h2>
        <div class="search">
            <input type="text"  id='search1' placeholder="Search for products...">
            <a href=""><i class="fa fa-search"></i></a>
        </div>
        <div id="cart">
            <a href=""><i class="fa fa-heart"><sup>0</sup></i></a>
            <a href=""><i class="fa fa-shopping-cart"><sup><?=$count=count($_SESSION['cart_item'])?></sup></i></a>
            <a href="login.php"><i class="fa fa-user"></i></a>
        </div>


    </header>
    <div class="header">
        <h2>organic</h2>
        <li><a href="rest2.home.user.php">Home</a></li>
        <li><a href="">Procuts</a>
        <ul class="sub">
            <div class="box">
                <li>food</li>
                <li><a href="">Home</a></li>
            <li><a href="">Home</a></li>
            <li><a href="">Home</a></li>
            <li><a href="">Home</a></li>
            </div>
            <div class="box">
                <li>food</li>
                <li><a href="">Home</a></li>
            <li><a href="">Home</a></li>
            <li><a href="">Home</a></li>
            <li><a href="">Home</a></li>
            </div>
            <div class="box">
                <li>food</li>
                <li><a href="">Home</a></li>
            <li><a href="">Home</a></li>
            <li><a href="">Home</a></li>
            <li><a href="">Home</a></li>
            </div>
        </ul>
        </li>
        <li><a href="">Blog</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
     
    </div>

    <div class="box">

        <div class="img">
            <?=$_SESSION['item_image']?>
        </div>
        <div class="dis">
            <h2><?=$_SESSION['item_name']?></h2>
            <p><?=$_SESSION['item_dis']?></p>

            <form action="cart.information.php" method="POST">
            <input id="btn" type="submit" value="Add Cart"  name="cart">
            <input type="hidden" value=" <?=$_SESSION['item_image_cart']?>" name="image">
            <input type="number" value="1" name="quantity">
            <input type="hidden" value="25" name="price">
            <input type="hidden" value="<?=$_SESSION['item_name']?>" name="item">
            </form>
        </div>
    </div>
   
</body>
</html>