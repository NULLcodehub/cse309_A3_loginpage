<?php
$localhost='localhost';
$username='root';
$password='';
$db='info';

$conn=new mysqli($localhost,$username,$password,$db);

if($conn->connect_error){
    die("connection Error:".$conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $mail=$_POST['email'];
    $password=$_POST['Password'];
    $msg=$_POST['msg'];



    $sql="INSERT INTO login_table (Name,Email,Password,Massage) VALUES ('$name','$mail','$password','$msg')";
    $result=$conn->query($sql);

    if($result===TRUE){
        echo '<script>alert("Login Successfull")</script>';

    }else{
        echo "ERROR: ".mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>

