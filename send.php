<?php

include 'connect.php' ;

if(isset($_POST['btn'])){


$name           = mysqli_real_escape_string($conn , $_POST['name'])       ;
$username       = mysqli_real_escape_string($conn , $_POST['username'])   ;
$email          = mysqli_real_escape_string($conn , $_POST['email'])      ;
$password_1      = mysqli_real_escape_string($conn , $_POST['password'])   ;
$password_2     = mysqli_real_escape_string($conn , $_POST['password_2']) ;




if ($_POST['password'] !== $_POST['password_2']){

    echo "password not match" ;
    
}

if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['name'])) {
 
    echo "يرجى ملء كافة الحقول";
   } else {
    
    $query = "INSERT INTO register(name,username,email,password)
     VALUE ('$_POST[name]','$_POST[username]','$_POST[email]','$_POST[password]')";
     mysqli_query($conn , $query) ;
    

    $_SESSION [ 'username'] = $username ;
    $_SESSION [ 'success']  = "register successfull" ; 
    header('Location: home.php');

}
}


// ****************************************************************************************


if(isset($_POST['lgn'])){

    $username       = mysqli_real_escape_string($conn , $_POST['username'])   ;
    $password       = mysqli_real_escape_string($conn , $_POST['password'])   ;



    if (empty($_POST['username']) || empty($_POST['password'])) {
 
        echo "يرجى ملء كافة الحقول";
       } else {
    
        $query = "SELECT * FROM register WHERE username = '$username' AND password = '$password' ";
        $result = mysqli_query($conn , $query) ;


         $read_date = $conn->query("SELECT * FROM register") ;

         foreach ($read_date as $data){
    
   
          if ($data['password'] != $_POST['password'] || $data['username'] != $_POST['username'])
          {
          echo "هناك خطأ في اسم المستخدم او كلمة السر";
          } else {
 
 
          $_SESSION [ 'username'] = $username ;
          $_SESSION [ 'success']  = "register successfull" ; 
          header('Location: home.php');}
   
          }
}  
}
?>