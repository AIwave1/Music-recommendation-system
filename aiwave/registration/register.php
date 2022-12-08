<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>AIWAVE Registration</title>
    <link rel="stylesheet" type="text/css" href="reg.css">
</head>

<body>
    <div class="blur"></div>
    <h1 id="Title">AIWAVE</h1>
    <div class="header">
        <h2>Register</h2>
        <form method="post" action="register.php">
            <?php include('errors.php'); ?>
            <div class="input-group">
                <label>Username</label><br>
                <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
            </div>
            <div class="input-group">
                <label>Email</label><br>
                <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
            </div>
            <div class="input-group">
                <label>Password</label><br>
                <input type="password" placeholder="Password" name="password_1">
            </div>
            <div class="input-group">
                <label>Confirm password</label><br>
                <input type="password" placeholder="Password" name="password_2">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="reg_user">Register</button>
            </div>
            <p>
                Already a member? <a href="login.php">Sign in</a>
            </p>
        </form>
    </div>


</body>

</html>