<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hospital</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="main">
        <div class="logo">
            <img src="image/hospital2.jpg" alt="hospital">
            <p>مستشفى الشّفاء</p>
        </div>
        <div class="book">
            <p>أهلا وسهلا بكم</p>
            <form action="index.php" method="post">
               <input type="text" placeholder="أدخل الاسم" name="name" Autocomlete=off/><br>
               <input type="text" placeholder="أدخل البريد الالكتروني" name="email" /><br>
               <input type="date" name="date" /><br>
               <input type="submit" value="احجز الان" name="send" /><br>
            </form>

            <?php

                $host      = 'localhost' ;
                $user      = 'root'      ;
                $password  = ''          ;
                $dbname    = 'hospital'  ;

                
                $conn = mysqli_connect($host ,$user , $password ,$dbname) ;


                if(isset($_POST ['send'] )){

                    $query = "INSERT INTO patients(name , email , date ) VALUE (' $_POST[name] ' , '$_POST[email]' , '$_POST[date]')" ;
                    $result= mysqli_query($conn , $query) ;
                    
                }

            ?>
        </div>
    </div>  
</body>
</html>