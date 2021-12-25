<?php require_once 'controllers/authController.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Nocturnal</title>
    <link rel="icon" href="bluesphere.jpg">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="txt-center shead">Nocturnal</h1>
    <p class="txt-center caption">Peer into the stars</p>
    <div class="fdiv">
        <form action="login.php" method="post" autocomplete="on">
            <h1 class="txt-center">Login</h1>

            <?php if(count($errors) > 0):  ?>
                    <div class="alert">
                        <?php foreach($errors as $error): ?>
                         <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                
            <div class="fgrp">
                <label for="username">Username or Email<br></label>
                <input type="text" name="username" class="fctrl" placeholder="Enter your username or email">
            </div>
            <div class="fgrp">
                <label for="password"><br>Password<br></label>
                <input type="password" name="password" class="fctrl" placeholder="Enter your password">
            </div>
            <div>
                <br><button type="login" name="loginBtn" class="btn">Login</button>
            </div>
            <p class="txt-center">Not yet a member? <a href="registration.php" class="login-link">Sign Up</a></p>                  
        </form>
    </div>
</body>
</html>