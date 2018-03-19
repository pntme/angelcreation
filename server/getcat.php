<?php
 require("connection.php");
 $tbl_name="category";  
 $sql = "select * from $tbl_name";
 $total =0;
 $arrayd;
 $result = mysqli_query($connection, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
        $arrayd[] = $row;
        $total++;
    }
    if ($total == 0) {
        echo 0;
    } else {
         $page=$total/2;
         $final = array(
        "Product" => $arrayd
             );
         
        echo json_encode($arrayd);
    }
 
?>