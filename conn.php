
<?php

$ip = "localhost";
$lg="root";
 $pass="admin"; 
 $db="php"; 
 $conn=mysqli_connect($ip,$lg,$pass,$db);

  if($conn){
    echo "ok" ;
}else{
    echo "error";
}



  ?>




