<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="box">

        <h2>Sign Up</h2>
        <form action="register.inc.php" method="POST">
            <div class="frm-g">
                <input type="text" placeholder="Username" name="name">
                
            </div>
            <div class="frm-g">
                <input type="email" placeholder="E-mail" name="email">
            </div>
            <div class="frm-g">
                <input type="password" placeholder="Password" name="pass">
            </div>
            <div class="frm-g">
                <input type="password" placeholder="Conform Password" name="repass">
            </div>
            <div class="frm-g">
                <input type="submit" value="Sign Up" name="btn">
            </div>
            <p>Already have an account?<a href="login.php">Sign In</a></p>
        </form>
        
    </div>
    
    
</body>
</html>