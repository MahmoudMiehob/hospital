<?php

include "header.php" ;

?>

<table>
    <th>الرقم</th>
    <th>الاسم</th>
    <th>البريد الالكتروني</th>
    <th>التاريخ</th>


<?php

$host      = 'localhost' ;
$user      = 'root'      ;
$password  = ''          ;
$dbname    =  'hospital'     ;


$conn = mysqli_connect($host ,$user , $password ,$dbname) ;


$read_date = $conn->query ("SELECT * FROM patients") ;

foreach($read_date as $data){

    echo "<tr><td>" . $data['id'] . "</td>" . "<td>" . $data['name'] . "</td><td>" . $data['email'] . "</td><td>" . $data['date'] . "</td></tr>";
}

 echo "</table>" ;

?>