
<?php
include "validation.php";
include "db.inc.php";

if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $repass=$_POST['repass'];

    if(emptyInput($name,$email,$pass,$repass)){
        header('location:register.php?err=emptyinput');
    }
    else if(invalidName($name)){
        header('location:register.php?err=invalidName');
    }
    else if(invalidPass($pass,$repass)){
        header('location:register.php?err=invalidpass');
    }
    else{
        register($conn,$name,$email,$pass);
    }
}


?>
<?php
function register($conn,$name,$email,$pass){
    $sql="INSERT INTO customers(username,email,password) VALUE (?,?,?)";
    $stmt=mysqli_stmt_init($conn);
    if(mysqli_stmt_prepare($stmt,$sql)){
        mysqli_stmt_bind_param($stmt,"sss",$name,$email,$pass);
        mysqli_stmt_execute($stmt);
        header('location:register.php?err=Succesful');


    }
    else{
        header('location:register.php?err=Unsuccesful');

    }
}
?>
<?php
if(isset($_POST['btn1'])){
   
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    

    if(emptyInput1($email,$pass)){
        header('location:register.php?err=emptyinput');
    }
   
    else{
        login($conn,$email,$pass);
    }
}

function login($conn,$email,$pass){
    $sql="SELECT*FROM customers WHERE email=?";
    $stmt=mysqli_stmt_init($conn);
    if(mysqli_stmt_prepare($stmt,$sql)){
        mysqli_stmt_bind_param($stmt,"s",$email);
        mysqli_stmt_execute($stmt);

        $data=mysqli_stmt_get_result($stmt);

        if($row=mysqli_fetch_assoc($data)){
            session_start();
            $_SESSION['user_name']=$row['username'];
            $_SESSION['user_email']=$row['email'];
            if($row['password']==$pass){
                header('location:register.php?err=welcome');

            }
        }

    }
}
?>