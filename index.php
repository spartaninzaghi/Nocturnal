<?php require_once 'controllers/authController.php';

if (!isset($_SESSION['id'])) {
    header('location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Nocturnal</title>
    <link rel="icon" href="bluesphere.jpg">
    <link rel="stylesheet" href="style.css">    
</head>

<body>
    <h1 class="txt-center shead">Nocturnal</h1>
    <p class="txt-center caption">Peer into the stars</p>
    
    <div class="fdiv">
        <?php if(isset($_SESSION['message'])): ?>
            <div class="alert <?php echo $_SESSION['alert']; ?>">
                <?php 
                echo $_SESSION['message'];
                unset ($_SESSION['message']);
                unset ($_SESSION['alert']);
                ?>
            </div>
        <?php endif; ?>

        <h2 class="welcome">Welcome, <?php echo $_SESSION['username']; ?></h2>
    
        <a href="index.php?logout=1" style="color: white; font-family: Georgia; text-decoration: none;">logout</a>

        <?php if(!$_SESSION['verified']): ?>
          <div class="alert">
            You need to verify your acount.
            Sign in to your email account and click on the 
            verification link we just emailed you.
            <strong><?php echo $_SESSION['email']; ?></strong>
           </div>
        <?php endif; ?>

        <?php if($_SESSION['verified']): ?>
        <button class="btn">I am verified!</div>
        <?php endif; ?>
    </div>
</body>
</html>