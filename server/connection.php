<?php
 //  $host="localhost"; 
 // $username='root';  
 // $password='';
 // $db_name='bags';
 $host="localhost"; 
 $username='adarsh123';  
 $password='s4s6wcP}53*g';
 $db_name='bags';
 $connection =mysqli_connect("$host", "$username", "$password" ,"$db_name") or die("cannot connect"); 
 if($connection){
 
 }else{
 	die('Could not connect: ' . mysqli_error());
 }
 

 ?>
 