<?php include 'connect.php' ; 
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>login page</title>
    <link rel="stylesheet" href="css/styls.css">

</head>

<body style="background : #128184">


    <div class="contianer">
    <div class="header">  
        <h2>login_page</h2>
    </div>
    <form action="login.php" method="POST">
            <div class="input">
                <label>username</label> 
                <input type="text" name="username" require="require" value="<?php  $username ?>">      
            </div>

            <div class="input">
                <label>password</label> 
                <input type="password" name="password" require="require" value="<?php  $password ?>">      
            </div>
            
            <div class="sorry">

                <?php include 'send.php' ?>
                
            </div> 
            <button type="submit" class="btn" name="lgn">login</button>    

            <p>
            Not have Aconunt ? <a href="register.php">siginUp</a>
            </p> 
  </form>
  </div>  
</body>
</html>