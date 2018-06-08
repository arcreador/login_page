<?php include("server.php");
    //if user is not logged in, thay can not access this page
    if(empty($_SESSION['username'])) {
        header('location: login.php');
    }
?>
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
        <h2>Home page</h2>
    </div>

    <div class="content">
        <?php if(isset($_SESSION['SUCCESS']):) ?>
            <div class="error success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                </h3>
            </div>
        <?php endif ?>

        <?php if(isset($_SESSION['username'])): ?>
            <p>Welcome<strong><?php echo $_SESSION['username']; ?><strong></a>
            <p><a href="index.php?logout='1'" style="color: red">Logout</a></p>
        <?php endif ?>
    </div>           
    
</body>
</html>