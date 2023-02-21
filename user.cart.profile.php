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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./rest2.css">
    <link rel="stylesheet" href="./user.cart.profile.css">
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
            <input type="text" id='search1' placeholder="Search for products...">
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
    <div class="slider">


<div class="slides">

    <div class="slide curr user_cart">
        <div class="img">
            <img src="/myphp-1/New folder/grocery website/grocery website/top-view-assortment-vegetables-paper-bag.jpg" alt="">

        </div>
        <div class="dis">
           
            <h3>HELLO USER</h3>
            <h2>My CART</h2>
            <p>Enjoy your life with shopping,be health and be safe!</p>
            
       </div>
    </div>
    
    
</div>

</div>
<div class="cart">
    <table >
        <tr>
            <td></td>
            <td>PRODUCT</td>
            <td>QUANTITY</td>
            <td>PRICE</td>
            <td></td>

            
            
            
        </tr>

        <?php
           $total=0;
        if(isset($_SESSION['cart_item'])){
          
            
            foreach($_SESSION['cart_item'] as $key => $value){
                echo "
                <form action='cart.information.php' method='POST'>
                <tr>
                <td>".$value['image']."</td>
                <td>".$value['name']."</td>
                <td>".$value['quantity']."</td>
                <td style='color:green;'>$".$value['price']*$value['quantity']."</td>
                <td><input type='submit' value='Remove' name='btn1'></td>
                <input type='hidden' value='".$value['name']."' name='item1'>
            </tr>
            </form>
            
                
                ";
                $total+=$value['price']*$value['quantity'];
               
                

            }
           
        }
        ?>

    </table>

    <div class="total">
        
        <table>
            <tr>
                <td>Total Price :</td>
                <td> <b>$<?=$total?>.00</b> </td>
            </tr>
            <tr>
                <td>Discount :</td>
                <td style='color:red;'>$0.00</td>
            </tr>
            <tr>
                <td >Total :</td>
                <td style='color:green;'>$<?=$total?>.00</td>
            </tr>
            

            <tr>
                <td><img src="/myphp-1/New folder/grocery website/grocery website/images/paypal-logo-png.png" alt="" width="80px"></td>
                <td><img src="/myphp-1/New folder/grocery website/grocery website/images/Visa_Logo.png" alt="" width="50px"></td>
                <td><img src="/myphp-1/New folder/grocery website/grocery website/images/MasterCard_Logo.svg.png" alt="" width="50px"></td>
            </tr>
            <tr>
                <td colspan="3"><button>Make Purches</button></td>
            </tr>
        </table>
    </div>
</div>


</body>
</html>