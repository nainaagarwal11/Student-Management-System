<!DOCTYPE html>
<html>
    <head>
        <title>Login page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<h1 style="text-align: center">LOGIN FORM</h1>
<center>
<div class="container">
    <div class="row">
        <div class="col-md-8">
        <img src="mps2.jpg">
        </div>
<div class="col-md-2">
<div class="form_deg">
<form action="login_check.php" method="POST">

<div>
<label class="login_name">Username</label>
<input type="text" value=" " name="username">
</div>

<div>
<label class="login_name">Password</label>
<input type="text" value=" " name="password">
</div>

<div>
<input class="btn btn-primary" type="submit"  value="login" name="submit">
</div>


</form>
</div>
</div>
</div>
</div>
</center>
</body>
</html>