<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}

$mysqli = new mysqli("localhost", "desig579_harshit", "Harshit@123", "desig579_aiwave");

// checking for connection
if ($mysqli->connect_errno) {
    die('Connect Error (' . $mysqli->connect_errno . ')' . $mysqli->connect_error);
}

// SQL query to select data from database
// $sql = "Select* FROM userdata ORDER BY score DESC"
$sql = "SELECT * FROM users 
WHERE username='$username' email='$email'";
$result = $mysqli->query($sql);
$mysqli->close();
?>



<!DOCTYPE html>
<html>

<head>
    <title>AIWAVE</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
    <div class="blur"></div>

    <div class="header">
        <h1>Aiwave</h1>

        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])): ?>
        <p id="welcome">Welcome <strong>
                <?php echo $_SESSION['username']; ?>
            </strong></p>
        <p id="logbtn"> <a id="logoutBtn" href="../index.html?logout='1'">logout</a> </p>
        <?php endif ?>
    </div>
    <div class="content">
        <table>
            <tr>
                <th>Username</th>
                <th>Email</th>
            </tr>

            <?php
            while ($rows = $result->fetch_assoc()) {
            ?>

            <tr>
                <td>
                    <?php echo $rows['username']; ?>
                </td>
                <td>
                    <?php echo $rows['email']; ?>
                </td>
            </tr>

            <?php

            }

            ?>




        </table>



    </div>

</body>

</html>