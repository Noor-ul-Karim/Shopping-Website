<?php

if(isset($_POST["itemid"])) $itemid=$_POST["itemid"]; else $itemid="";

include "connection.php";


      $query='DELETE FROM cart where item_id="'.$itemid.'"';
      $fetch=mysqli_query($dbc,$query) OR DIE ("QUERY ERROR".mysqli_error($dbc));
      $result=mysqli_fetch_array($fetch);
      header("Location:cart.php?message=deleted");
?>