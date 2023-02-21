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
    <link rel="stylesheet" href="./rest2.search.css">
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
    <input id='search' type="text" placeholder="Search for products...">
    <a href="" id='searchicon'><i class="fa fa-search"></i></a>
</div>
<div id="cart">
    <a href=""><i class="fa fa-heart"><sup>0</sup></i></a>
    <a href="user.cart.profile.php"><i class="fa fa-shopping-cart"><sup><?=$count=count($_SESSION['cart_item']);?></sup></i></a>
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
<div class="items curr2">
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-1.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Banana</h4>
                    <p>$25.00 <del>$30.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Banana" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-1.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="A banana is an elongated, edible fruit  botanically a berry  produced by several kinds of large herbaceous flowering plants in the genus Musa. In some countries, bananas used for cooking may be called 'plantains', distinguishing them from dessert bananas." name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-1.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-2.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Tomamto</h4>
                    <p>$55.00 <del>$60.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Tomato" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-2.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="The tomato is the edible berry of the plant Solanum lycopersicum, commonly known as the tomato plant. The species originated in western South America, Mexico, and Central America. The Mexican Nahuatl word tomatl gave rise to the Spanish word tomate, from which the English word tomato derived." name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-2.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-3.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Orange</h4>
                    <p>$55.00 <del>$60.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Orange" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-3.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="Orange S.A., formerly France Télécom S.A. is a French multinational telecommunications corporation. It has 266 million customers worldwide and employs 89,000 people in France, and 59,000 elsewhere. In 2015, the group had revenue of €40 billion. The company's head office is located in the 15th arrondissement of Paris" name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-3.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
             <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-4.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Milk</h4>
                    <p>$85.00 <del>$90.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Milk" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="Milk is the liquid produced by the mammary glands of mammals, including humans. Breast milk is the preferred food for infants, as it is well-tolerated while their digestive tracts develop and mature. Dairy milk may be introduced at later ages if tolerated well" name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-5.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Grape</h4>
                    <p>$105.00 <del>$150.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Grape" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis. Grapes are a non-climacteric type of fruit, generally occurring in clusters. The cultivation of grapes began perhaps 8,000 years ago, and the fruit has been used as human food over history." name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-1.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Banana</h4>
                    <p>$25.00 <del>$30.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Banana" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-1.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="A banana is an elongated, edible fruit  botanically a berry  produced by several kinds of large herbaceous flowering plants in the genus Musa. In some countries, bananas used for cooking may be called 'plantains', distinguishing them from dessert bananas." name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-1.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-2.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Tomamto</h4>
                    <p>$55.00 <del>$60.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Tomato" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-2.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="The tomato is the edible berry of the plant Solanum lycopersicum, commonly known as the tomato plant. The species originated in western South America, Mexico, and Central America. The Mexican Nahuatl word tomatl gave rise to the Spanish word tomate, from which the English word tomato derived." name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-2.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-3.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Orange</h4>
                    <p>$55.00 <del>$60.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Orange" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-3.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="Orange S.A., formerly France Télécom S.A. is a French multinational telecommunications corporation. It has 266 million customers worldwide and employs 89,000 people in France, and 59,000 elsewhere. In 2015, the group had revenue of €40 billion. The company's head office is located in the 15th arrondissement of Paris" name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-3.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
             <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-4.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Milk</h4>
                    <p>$85.00 <del>$90.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Milk" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="Milk is the liquid produced by the mammary glands of mammals, including humans. Breast milk is the preferred food for infants, as it is well-tolerated while their digestive tracts develop and mature. Dairy milk may be introduced at later ages if tolerated well" name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-5.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Grape</h4>
                    <p>$105.00 <del>$150.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Grape" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis. Grapes are a non-climacteric type of fruit, generally occurring in clusters. The cultivation of grapes began perhaps 8,000 years ago, and the fruit has been used as human food over history." name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-4.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Milk</h4>
                    <p>$85.00 <del>$90.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Milk" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="Milk is the liquid produced by the mammary glands of mammals, including humans. Breast milk is the preferred food for infants, as it is well-tolerated while their digestive tracts develop and mature. Dairy milk may be introduced at later ages if tolerated well" name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-5.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Grape</h4>
                    <p>$105.00 <del>$150.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Grape" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis. Grapes are a non-climacteric type of fruit, generally occurring in clusters. The cultivation of grapes began perhaps 8,000 years ago, and the fruit has been used as human food over history." name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-3.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Orange</h4>
                    <p>$55.00 <del>$60.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Orange" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-3.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="Orange S.A., formerly France Télécom S.A. is a French multinational telecommunications corporation. It has 266 million customers worldwide and employs 89,000 people in France, and 59,000 elsewhere. In 2015, the group had revenue of €40 billion. The company's head office is located in the 15th arrondissement of Paris" name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-3.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
             <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-4.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Milk</h4>
                    <p>$85.00 <del>$90.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Milk" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="Milk is the liquid produced by the mammary glands of mammals, including humans. Breast milk is the preferred food for infants, as it is well-tolerated while their digestive tracts develop and mature. Dairy milk may be introduced at later ages if tolerated well" name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-5.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Grape</h4>
                    <p>$105.00 <del>$150.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Grape" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis. Grapes are a non-climacteric type of fruit, generally occurring in clusters. The cultivation of grapes began perhaps 8,000 years ago, and the fruit has been used as human food over history." name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-4.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Milk</h4>
                    <p>$85.00 <del>$90.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Milk" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="Milk is the liquid produced by the mammary glands of mammals, including humans. Breast milk is the preferred food for infants, as it is well-tolerated while their digestive tracts develop and mature. Dairy milk may be introduced at later ages if tolerated well" name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-5.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Grape</h4>
                    <p>$105.00 <del>$150.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Grape" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis. Grapes are a non-climacteric type of fruit, generally occurring in clusters. The cultivation of grapes began perhaps 8,000 years ago, and the fruit has been used as human food over history." name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-4.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Milk</h4>
                    <p>$85.00 <del>$90.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Milk" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="Milk is the liquid produced by the mammary glands of mammals, including humans. Breast milk is the preferred food for infants, as it is well-tolerated while their digestive tracts develop and mature. Dairy milk may be introduced at later ages if tolerated well" name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-5.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Grape</h4>
                    <p>$105.00 <del>$150.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Grape" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis. Grapes are a non-climacteric type of fruit, generally occurring in clusters. The cultivation of grapes began perhaps 8,000 years ago, and the fruit has been used as human food over history." name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-3.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Orange</h4>
                    <p>$55.00 <del>$60.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Orange" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-3.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="Orange S.A., formerly France Télécom S.A. is a French multinational telecommunications corporation. It has 266 million customers worldwide and employs 89,000 people in France, and 59,000 elsewhere. In 2015, the group had revenue of €40 billion. The company's head office is located in the 15th arrondissement of Paris" name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-3.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
             <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-4.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Milk</h4>
                    <p>$85.00 <del>$90.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Milk" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="Milk is the liquid produced by the mammary glands of mammals, including humans. Breast milk is the preferred food for infants, as it is well-tolerated while their digestive tracts develop and mature. Dairy milk may be introduced at later ages if tolerated well" name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-5.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Grape</h4>
                    <p>$105.00 <del>$150.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Grape" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis. Grapes are a non-climacteric type of fruit, generally occurring in clusters. The cultivation of grapes began perhaps 8,000 years ago, and the fruit has been used as human food over history." name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-3.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Orange</h4>
                    <p>$55.00 <del>$60.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Orange" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-3.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="Orange S.A., formerly France Télécom S.A. is a French multinational telecommunications corporation. It has 266 million customers worldwide and employs 89,000 people in France, and 59,000 elsewhere. In 2015, the group had revenue of €40 billion. The company's head office is located in the 15th arrondissement of Paris" name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-3.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
             <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-4.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Milk</h4>
                    <p>$85.00 <del>$90.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Milk" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="Milk is the liquid produced by the mammary glands of mammals, including humans. Breast milk is the preferred food for infants, as it is well-tolerated while their digestive tracts develop and mature. Dairy milk may be introduced at later ages if tolerated well" name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-5.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Grape</h4>
                    <p>$105.00 <del>$150.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Grape" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis. Grapes are a non-climacteric type of fruit, generally occurring in clusters. The cultivation of grapes began perhaps 8,000 years ago, and the fruit has been used as human food over history." name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-4.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Milk</h4>
                    <p>$85.00 <del>$90.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Milk" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="Milk is the liquid produced by the mammary glands of mammals, including humans. Breast milk is the preferred food for infants, as it is well-tolerated while their digestive tracts develop and mature. Dairy milk may be introduced at later ages if tolerated well" name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-5.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Grape</h4>
                    <p>$105.00 <del>$150.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Grape" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis. Grapes are a non-climacteric type of fruit, generally occurring in clusters. The cultivation of grapes began perhaps 8,000 years ago, and the fruit has been used as human food over history." name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-4.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Milk</h4>
                    <p>$85.00 <del>$90.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Milk" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="Milk is the liquid produced by the mammary glands of mammals, including humans. Breast milk is the preferred food for infants, as it is well-tolerated while their digestive tracts develop and mature. Dairy milk may be introduced at later ages if tolerated well" name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-5.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Grape</h4>
                    <p>$105.00 <del>$150.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Grape" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis. Grapes are a non-climacteric type of fruit, generally occurring in clusters. The cultivation of grapes began perhaps 8,000 years ago, and the fruit has been used as human food over history." name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-3.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Orange</h4>
                    <p>$55.00 <del>$60.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Orange" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-3.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="Orange S.A., formerly France Télécom S.A. is a French multinational telecommunications corporation. It has 266 million customers worldwide and employs 89,000 people in France, and 59,000 elsewhere. In 2015, the group had revenue of €40 billion. The company's head office is located in the 15th arrondissement of Paris" name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-3.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
             <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-4.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Milk</h4>
                    <p>$85.00 <del>$90.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Milk" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="Milk is the liquid produced by the mammary glands of mammals, including humans. Breast milk is the preferred food for infants, as it is well-tolerated while their digestive tracts develop and mature. Dairy milk may be introduced at later ages if tolerated well" name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-5.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Grape</h4>
                    <p>$105.00 <del>$150.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Grape" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis. Grapes are a non-climacteric type of fruit, generally occurring in clusters. The cultivation of grapes began perhaps 8,000 years ago, and the fruit has been used as human food over history." name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-4.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Milk</h4>
                    <p>$85.00 <del>$90.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Milk" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="Milk is the liquid produced by the mammary glands of mammals, including humans. Breast milk is the preferred food for infants, as it is well-tolerated while their digestive tracts develop and mature. Dairy milk may be introduced at later ages if tolerated well" name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-4.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-5.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Grape</h4>
                    <p>$105.00 <del>$150.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Grape" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis. Grapes are a non-climacteric type of fruit, generally occurring in clusters. The cultivation of grapes began perhaps 8,000 years ago, and the fruit has been used as human food over history." name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            <div class="item">

               <form action="cart.information.php" method="POST">

               <div class="img">
                    <img src="/myphp-1/New folder/grocery website/grocery website/images/product-5.png" alt="">
                    
                </div>
                <div class="dis">
                    <h4>Grape</h4>
                    <p>$105.00 <del>$150.00</del> </p>
                    <div class="btns">
                    <input id="btn" type="submit" value="Add Cart"  name="cart">
                    <input id="btn1" type="submit" value="View more"  name="itemdis">
                        
                    </div>
                    
                    <input type="number" value="1" name="quantity">
                    <input type="hidden" value="25" name="price">
                    <input type="hidden" value="Grape" name="item">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' width='100px' alt=''>" name="image">

                    <input type="hidden" value="A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis. Grapes are a non-climacteric type of fruit, generally occurring in clusters. The cultivation of grapes began perhaps 8,000 years ago, and the fruit has been used as human food over history." name="dis">
                    <input type="hidden" value="<img src='/myphp-1/New folder/grocery website/grocery website/images/product-5.png' alt=''>" name="image1">
                </div>
               </form>
               
            </div>
            
          
            
            
        </div>
        <script src="rest2.search.js"></script>
</body>
</html>