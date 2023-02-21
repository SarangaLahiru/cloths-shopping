<?php
session_start();


if(isset($_POST['cart'])){
    $cart_arr=array(
        "name" =>$_POST['item'],
        "price"=>$_POST['price'],
        "image"=>$_POST['image'],
        "quantity"=>$_POST['quantity']
    );
    $_SESSION['cart_item'][]=$cart_arr;
    //unset ($_SESSION['cart_item']);

    header("location:rest2.home.user.php");
    
    $count=count($_SESSION['cart_item']);
    
}

if(isset($_POST['btn1'])){

    foreach($_SESSION['cart_item'] as $key => $value){

        if($_POST['item1']==$value['name']){
            unset($_SESSION['cart_item'][$key]);
            $_SESSION['cart_item']=array_values($_SESSION['cart_item']);
            header("location:user.cart.profile.php");
        }
    }
}

if(isset($_POST['itemdis'])){
    session_start();
    $_SESSION['item_name']=$_POST['item'];
    $_SESSION['item_image']=$_POST['image1'];
    $_SESSION['item_image_cart']=$_POST['image'];
    $_SESSION['item_dis']=$_POST['dis'];
    header("location:product.details.php");
    
}


?>