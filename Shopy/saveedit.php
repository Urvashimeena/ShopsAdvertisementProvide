<?php

require_once("./conn.php");

$query="UPDATE shop set " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE  shop_code=".$_POST["id"];
mysqli_query($conn, $query) 
?>
