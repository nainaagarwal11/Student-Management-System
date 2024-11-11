<?php
error_reporting(0);
session_start();
session_destroy();
if($_SESSION['message'])
{
    $message=$_SESSION['message'];
    echo "<script type='text/javascript'> 
    alert('$message');
    </script>";
}

?>
<!doctype html>
<html>
    <head>
          <title>Student Management System</title>
          <link rel="stylesheet" type="text/css" href="style.css">
          <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav>  
    <label class="logo">Modern Public School</label>                 
    <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Contact</a></li>
        <li><a href="">Admission</a></li>
        <li><a href="login.php" class="btn btn-success">Login</a></li>
</ul>
</nav>
<div class="section1">
    <label class="img_text">We Teach Students With Care</label>
    <img class="main_img" src="School Buildng - Copy.jpg">
    
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class="logo_img" src="mps3.jpg">
        </div>
        <div class="col-md-8">
            <h1>Welcome to MODERN PUBLIC SCHOOL</h1>
            <p>Modern Public School Najibabad is a senior secondary school located in Bijnour district of Uttar Pradesh. The school is affiliated with Central Board of Secondary Education with affiliation number 2130352.The school was founded in the year 1989 and the first day of opening of school was 7th January 2005 12 AM.The school is located in Najibabad in Bijnour district of Uttar Pradesh. You can call Modern Public School Najibabad on 9897718009 for any concern related to the school.</p>
        </div>  

    </div>
</div>
 <center>
    <h1>Our Teachers</h1>
 </center>
 <div class="container">
    <div class="row">
         <div class="col-md-4">
         <img class="teacher" src="teacher1.jpg">
         <p>The staff at this establishment are courteous and prompt at providing any assistance</p>
         </div>
         <div class="col-md-4">
         <img class="teacher" src="teacher2.jpg">
         <p>The faculties are dedicated towards their respective subjects and put in alot of efforts to achieve goals</p>
         </div>
         <div class="col-md-4">
         <img class="teacher" src="teacher1.jpg">
         <p>Known for providing top services in the school/public school categories</p>
         </div>
    </div>
</div>
<center>
    <h1>Our Courses</h1>
 </center>
 <div class="container">
    <div class="row">
         <div class="col-md-4">
         <img class="teacher" src="2.jpg">
         <p style="text-align: center">Arts</p>
         </div>
         <div class="col-md-4">
         <img class="teacher" src="science.jpg">
         <p style="text-align: center">Science</p>
         </div>
         <div class="col-md-4">
         <img class="teacher" src="1.png">
         <p style="text-align: center">Commerce<p>
         </div>
    </div>
</div>
<center>
    <h1 style="color:red">ADMISSION FORM</h1>
</center>
<div align="center" class="admission_form">
<form action="data_check.php" method="POST">

<div>
<label class="label_name">First name</label>
<input class="input_deg" type="text" value=" " name="firstname">
</div>

<div>
<label class="label_name">Last name</label>
<input class="input_deg" type="text" value=" " name="lastname">
</div>

<div>
<label class="label_name">Gender</label>
 <input class="input_deg" type="text" value=" " name="gender">
</div>

<div>
<label class="label_name">Father's name</label>
<input class="input_deg" type="text" value=" " name="fathername">
</div>

<div>
<label class="label_name">Mother's name</label>
<input class="input_deg" type="text" value=" " name="mothername">
</div>

<div>
<label class="label_name">Email-id</label>
<input class="input_deg" type="email" value=" " name="email" placeholder="abc@gmail.com">
</div>

<div>
<label class="label_name">Phone no.:</label> 
<input class="input_deg" type="phone" value=" " name="phone">
</div>

<div>
<label class="label_name">Message:</label>
<textarea rows="5" cols="25" name="message"></textarea>
</div>

<div>
<input class="btn btn-primary" id="submit" type="submit" value="apply" name="apply">
</div>

 
</form>
</div>
<footer>
    <h1>All @ copyright reserved by NAINA AGARWAL</h1>
</footer>

</body>
</html>
