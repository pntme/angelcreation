<?php
 require("connection.php");
 $tbl_name="product";  
 $postdata = file_get_contents("php://input");
 $request = json_decode($postdata);
 $name = $request->name;
 $desc = $request->desc;
 $cat_id = $request->catid;
 $sql = "INSERT INTO $tbl_name(prod_name,prod_desc,cat_id)VALUES('$name', '$desc', '$cat_id')";
 $result = mysqli_query($connection, $sql);
 echo 1;
?>