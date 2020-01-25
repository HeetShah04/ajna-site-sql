<?php
require_once 'dbconfig.php';

$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,"project");

$sql="select MAX(id) 'id' from  employee_data";
$result = mysqli_query($conn,$sql);

while($result1 =mysqli_fetch_assoc($result))
{
	$cnt = $result1['id'];
	echo $cnt;
}
 $cnt = $cnt + 1;

 $img = $_POST['image'];
 $folderPath = "upload/";

 $image_parts = explode(";base64,", $img);
 $image_type_aux = explode("image/", $image_parts[0]);
 $image_type = $image_type_aux[1];

 $image_base64 = base64_decode($image_parts[1]);
  $fileName = $cnt . '.jpeg';
  
    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);
  
    print_r($fileName);

$first_name=$_POST['firstname'];
$last_name=$_POST['lastname'];
$mobile_no=$_POST['mobileno'];
$email=$_POST['email'];
$address=$_POST['address'];
$sql1="INSERT INTO employee_data(first_name,last_name,mobile_no,email,address,image) VALUES('$first_name','$last_name','$mobile_no','$email','$address','$file')";
if(mysqli_query($conn,$sql1))
	{
		header("Location: ../data.php");
	}
	else
	{
		echo "Error";
    }
    mysqli_close($conn);
?>