<?php
    $when = mktime();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POC1 - Dhruv Prajapati</title>
    <link href="./css/main.css?me=<?php echo("$when")?>;" rel="stylesheet">

</head>

<body>

    <main>
        <h1>Race INFO</h1>
        <!-- <h2>Who is a racer??</h2> -->
        <button id="getRiders">See Full List</button>
        <div id="riders"></div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js?me=<?php echo("$when")?>" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./js/main.js?me=<?php echo("$when")?>"></script>

</body>

</html>
