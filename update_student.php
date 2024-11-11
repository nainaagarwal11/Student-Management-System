<?php
$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);
$id=$_GET['student_id'];
$sql="SELECT * FROM user WHERE id='$id' ";
$result=mysqli_query($data,$sql);
$info=$result->fetch_assoc();

if(isset($_POST['Update']))
{
$user_name=$_POST['name'];
$user_phone=$_POST['phone'];
$user_email=$_POST['email'];
$user_password=$_POST['password'];
$query="UPDATE user SET username='$user_name', phone='$user_phone', email='$user_email', password='$user_password' WHERE id='$id' ";
$result2=mysqli_query($data,$query);
if($result2)
{
    header("location:view_student.php");
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
    <h1>Update Student</h1>
    <br>
<div class="div_deg">
<form action="#" method="POST">
<div>
    <label>Username</label>
    <input type="text" name="name" value="<?php  echo"{$info['username']}";  ?>" >
</div>
<div>
    <label>Phone</label>
    <input type="number" name="phone" value="<?php  echo"{$info['phone']}";  ?>" >
</div>
<div>
    <label>Email</label>
    <input type="Email" name="email" value="<?php  echo"{$info['email']}";  ?>" >
</div>
<div>
    <label>Password</label>
    <input type="text" name="password" value=" <?php  echo"{$info['password']}"; ?>" >
</div>
<div>
    <input type="submit" class="btn btn-primary" value="Update" name="Update">
</div>
</form>
<center>
</div>   
</body>
</html>