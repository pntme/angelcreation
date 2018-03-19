<?php
require("connection.php");
$tbl_name="admin"; 
 $postdata = file_get_contents("php://input");
 $request = json_decode($postdata);
 $Email = $request->Email;
 $Pass = $request->password;
 $sql="SELECT * FROM $tbl_name WHERE (name = '$Email') AND (Password = '$Pass')";
 $result = mysqli_query($connection, $sql);
 if (mysqli_num_rows($result) == 0) {
    echo 0;
 }
 else{
    echo 1;
 }
?>