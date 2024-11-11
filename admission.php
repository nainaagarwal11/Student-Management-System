<?php
$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);
$sql="SELECT * from admission";
$result=mysqli_query($data,$sql);


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
</head>
<body>
<?php
include 'admin_sidebar.php';
?>
<div class="content">
    <center>
    <h1>Applied for Admission</h1>
    <br>
    <table border="3px">
        <tr>
            <th style="padding:20px; font-size:15px;">First name</th>
            <th style="padding:20px; font-size:15px;">Last name</th>
            <th style="padding:20px; font-size:15px;">Gender</th>
            <th style="padding:20px; font-size:15px;">Father's name</th>
            <th style="padding:20px; font-size:15px;">Mother's name</th>
            <th style="padding:20px; font-size:15px;">Email</th>
            <th style="padding:20px; font-size:15px;">Phone</th>
            <th style="padding:20px; font-size:15px;">Message</th>
</tr>
<?php
while($info=$result->fetch_assoc())
{
?>
<tr>
    <td style= "padding:20px;"><?php echo "{$info['firstname']}"; ?></td>
    <td style= "padding:20px;"><?php echo "{$info['lastname']}"; ?></td>
    <td style= "padding:20px;"><?php echo "{$info['gender']}"; ?></td>
    <td style= "padding:20px;"><?php echo "{$info['fathername']}"; ?></td>
    <td style= "padding:20px;"><?php echo "{$info['mothername']}"; ?></td>
    <td style= "padding:20px;"><?php echo "{$info['email']}"; ?></td>
    <td style= "padding:20px;"><?php echo "{$info['phone']}"; ?></td>
    <td style= "padding:20px;"><?php echo "{$info['message']}"; ?></td>
</tr>
<?php
}
?>
</table>
</center>
</div>   
</body>
</html>