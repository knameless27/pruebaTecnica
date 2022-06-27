<?php 

include('config.php');
$id = $_GET['id'];
$sql = "DELETE FROM clientes WHERE id='".$id."'";
mysqli_query($con, $sql);

header("location:index.php");

?>