<?php include("server.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>user regitration system</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form method="post" action="login.php">
     <!-- display validation errors here -->
     <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit' name="register" class="btn">login</button>
        </div>
        <p>
            Not yet a a member? <a href="register.php">sing up</a>
        </p>
    </form>
</body>
</html>