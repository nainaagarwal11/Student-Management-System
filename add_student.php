<?php
$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);
if(isset($_POST['add_student']))
{
$username=$_POST['name'];
$user_phone=$_POST['phone'];
$user_email=$_POST['email'];
$user_password=$_POST['password'];
$usertype="student";

$check="SELECT * from user WHERE username='$username' ";
$check_user=mysqli_query($data,$check);
$row_count=mysqli_num_rows($check_user);
if($row_count==1)
{
    echo"username already exist. Try another one";
}
else
{
$sql="INSERT INTO user(username,phone,email,usertype,password) VALUES ('$username','$user_phone','$user_email','$usertype','$user_password')";
$result=mysqli_query($data,$sql);
if($result)
{
    echo" <script type='text/javascript'> 
    alert('Data upload success');
    </script>";

}
else
{
    echo "upload failed";
}
}
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>admin dashboard</title>
        <link rel="stylesheet" type="text/css" href="admin.css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<style type="text/css">
    label
    {
        display:inline-block;
        text-align:right;
        width:100px;
        padding-top:10px;
        padding-bottom:10px;
    }
    .div_deg
    {
        background-color:plum;
        width:400px;
        padding-top:70px;
        padding-bottom:70px;
    }
    </style>
</head>
<body>
<?php
include 'admin_sidebar.php';
?>
<div class="content">
    <center>
    <h1>Add Student</h1>
<div class="div_deg">
<form action="" method="POST">
<div>
    <label>Username</label>
    <input type="text" value=" " name="name">
</div>
<div>
    <label>Email</label>
    <input type="Email" value=" " name="email">
</div>
<div>
    <label>Phone</label>
    <input type="number" value=" " name="phone">
</div>
<div>
    <label>Password</label>
    <input type="text" value=" " name="password">
</div>
<div>
    <input type="submit" class="btn btn-primary" value="Add student" name="add_student">
</div>
</form>
<center>
</div>
    
</body>
</html>