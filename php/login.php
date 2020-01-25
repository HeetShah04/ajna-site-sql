
    <?php
    $username =$_POST['username'];
    $password=$_POST['password'];
    if($username=='admin' && $password=='admin'){
        header("Location:../home.php");

    }else{
        echo "Invalid Crediantials";
    }
?>