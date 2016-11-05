<?php
 require("connection.php");
 $postdata = file_get_contents("php://input");
 $request = json_decode($postdata);
 $name = $request->name;
 $sql = "INSERT INTO $tbl_name(cat_name)VALUES('$name')";
 $result = mysqli_query($connection, $sql);
 echo 1;
?>