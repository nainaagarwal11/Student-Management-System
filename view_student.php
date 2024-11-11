<?php
error_reporting(0);
session_start();
$host="localhost";
$user="root";
$password="";
$db="schoolproject";
$data=mysqli_connect($host,$user,$password,$db);
$sql="SELECT * FROM user WHERE usertype='student' ";
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
    <h1>Student Data</h1>
    <?php
    if($_SESSION['message'])
    {
        echo $_SESSION['message'];
    }
    unset($_SESSION['message']);
    ?>
    <br>
    <table border="3px">
        <tr>
            <th style="padding:20px; font-size:20px;">Username</th>
            <th style="padding:20px; font-size:20px;">Phone</th>
            <th style="padding:20px; font-size:20px;">Email</th>
            <th style="padding:20px; font-size:20px;">Password</th>
            <th style="padding:20px; font-size:20px;">Delete</th>
            <th style="padding:20px; font-size:20px;">Update</th>
        </tr>
        <?php
        while($info=$result->fetch_assoc())
        {

        ?>
        <tr>
            <td style="padding:20px; background-color:plum;"><?php echo"{$info['username']}";?></td>
            <td style="padding:20px; background-color:plum;"><?php echo"{$info['phone']}";?></td>
            <td style="padding:20px; background-color:plum;"><?php echo"{$info['email']}";?></td>
            <td style="padding:20px; background-color:plum;"><?php echo"{$info['password']}";?></td>
            <td style="padding:20px; background-color:plum;"><?php echo"<a class='btn btn-danger' onClick=\" javaascript:return confirm('Are you sure you want to delete this?')\" href='delete.php?student_id={$info['id']}'>Delete</a>";?></td>
            <td style="padding:20px; background-color:plum;"><?php echo"<a class='btn btn-primary' href='update_student.php?student_id={$info['id']}'>Update</a>";?></td>
        </tr>
        <?php
        }
        ?>
</table>
    </center>
</div>
</body>
</html>