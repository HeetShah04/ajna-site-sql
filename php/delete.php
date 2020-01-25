<?php
require_once 'dbconfig.php';

$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,"project");
$id=$_GET['id'];
$sql="DELETE FROM employee_data WHERE id='$id'";
$data =mysqli_query($conn,$sql);
header("Location:../data.php");
?>