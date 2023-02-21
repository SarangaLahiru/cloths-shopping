<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="register.css">

</head>
<body>
<div class="box log">
        <h2>Sign In</h2>
        <form action="register.inc.php" method="POST">
            
            <div class="frm-g">
                <input type="email" placeholder="E-mail" name="email">
            </div>
            <div class="frm-g">
                <input type="password" placeholder="Password" name="pass">
            </div>
            
            <div class="frm-g">
                <input type="submit" value="Sign Up" name="btn1">
            </div>
            <p>Don't have an account?<a href="register.php">Sign Up</a></p>
        </form>
        
    </div>
</body>
</html>