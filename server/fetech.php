	<?php
require("connection.php");
 $tbl_name="product";   
 $postdata = file_get_contents("php://input");
 $request = json_decode($postdata);
 $cat_id = $request->cat_id;
 $sql = "select * from $tbl_name WHERE cat_id=$cat_id";
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
        echo json_encode($arrayd);
    }
 
?>