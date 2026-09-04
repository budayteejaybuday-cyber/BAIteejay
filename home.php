<!DOCTYPE html>
<?php
$fullname   = $_POST["fullname"];
$mypassword = $_POST["myPassword"];
$myemail    = $_POST["myEmail"];
$mystatus   = $_POST["status"];
$mynumber   = $_POST["number"];
$birthdate  = $_POST["birthdate"];
$gender     = $_POST["gender"];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Back</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="title">Welcome Back!</div>
        <div class="form">
            <p><strong>Full Name:</strong> <?= htmlspecialchars($fullname) ?></p>
            <p><strong>Password:</strong> <?= htmlspecialchars($mypassword) ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($myemail) ?></p>
            <p><strong>Birthdate:</strong> <?= htmlspecialchars($birthdate) ?></p>
            <p><strong>Number:</strong> <?= htmlspecialchars($mynumber) ?></p>
            <p><strong>Gender:</strong> <?= htmlspecialchars($gender) ?></p>
            <p><strong>Status:</strong> <?= htmlspecialchars($mystatus) ?></p>
            <h4>Hello: <?= htmlspecialchars($fullname) ?></h4>
            <h4>Welcome Back Ga: <?= htmlspecialchars($fullname) ?>!</h4>
        </div>
    </div>
</body>
</html>