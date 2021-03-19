<?php

include "connect.php" ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>full_website</title>
    <link rel="stylesheet" href="css/styls.css">
</head>
<body style="background : #128184">
    
    <div class="contianer">
     <h2 class="header">Register</h2>

     <form action="register.php" method="POST">   
           
           <div class="input">
                <label>Full_name</label> 
                <input type="text" name="name" require="require">  
                 
           </div>

           <div class="input">
                <label>user_name</label> 
                <input type="text" name="username" require="require">      
           </div>

           <div class="input">
                <label>Email</label> 
                <input type="email" name="email" require="require" >      
           </div>

           <div class="input">
                <label>password</label> 
                <input type="password" name="password" require="require">      
           </div>

           <div class="input">
                <label>re_password</label> 
                <input type="password_2" name="password_2" value="<?php $password_2  ?>">      
           </div>

           <div class="sorry">

           <?php include 'send.php' ?>
           
           </div> 

           <div>
                <button type="submit" class="btn" name="btn">Register</button>     
           </div>

           <p>
                have Aconunt ? <a href="login.php">login</a>
           </p>

           
        </form>
        </div>
                  
</body>
</html>