<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Nocturnal</title>
    <link rel="icon" href="bluesphere.jpg">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <h1 class="txt-center shead">Nocturnal</h1>
    <p class="txt-center caption">Peer into the stars</p>
    <div class="fdiv">
        <form action="registration.php" method="post" autocomplete="on">
            <h1 class="txt-center">Register</h1>

            <?php if(count($errors) > 0): ?>
                <div class="alert">
                    <?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?> 

            <div class="fgrp">
                <label for="username">Username<br></label>
                <input type="text" name="username" value = "<?php echo $username; ?>" class="fctrl" placeholder="Enter your username">
            </div>
            <div class="fgrp">
                <label for="email"><br>Email<br></label>
                <input type="email" name="email" value = "<?php echo $email; ?>" class="fctrl" placeholder="Enter your email">
            </div>
            <div class="fgrp">
                <label for="passwod"><br>Password<br></label>
                <input type="password" name="password" class="fctrl" placeholder="Enter your password">
            </div>
            <div class="fgrp">
                <label for="passwordConf"><br>Confirm Password<br></label>
                <input type="password" name="passwordConf" class="fctrl" placeholder="Confirm your password">
            </div>
            <div>
                <br><button type="submit" name="regBtn" class="btn">Sign Up</button>
            </div>
            <p class="txt-center">Already a member? <a href="login.php" class="login-link">Sign In</a></p>                  
        </form>
    </div>
</body>
</html>