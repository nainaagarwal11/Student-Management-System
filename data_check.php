<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);
if($data==false)
{
    die("connection error");
}
if(isset($_POST['apply']))
{
    $data_firstname=$_POST['firstname'];
    $data_lastname=$_POST['lastname'];
    $data_gender=$_POST['gender'];
    $data_fathername=$_POST['fathername'];
    $data_mothername=$_POST['mothername'];
    $data_email=$_POST['email'];
    $data_phone=$_POST['phone'];
    $data_message=$_POST['message'];

    $sql="INSERT INTO admission(firstname,lastname,gender,fathername,mothername,email,phone,message) VALUES ('$data_firstname','$data_lastname','$data_gender','$data_fathername','$data_mothername','$data_email','$data_phone','$data_message')";
    $result=mysqli_query($data,$sql);
    if($result)
    {
        $_SESSION['message']="your application sent successfully";
        header("location:index.php");
    }
    else{
        echo "Apply Failed";
    }


}











?>