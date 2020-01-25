<?php
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,"project");
$name=$_GET['first_name'];
$sql="SELECT * FROM employee_data WHERE first_name='$name'";
$data =mysqli_query($conn,$sql);
?>