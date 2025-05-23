<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome PHP </title>
</head>

<body>
    <?php
    // PHP form data collect from user
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // Using GET method
    $name = $_GET['name'];
    $email = $_GET['email'];

    ?>
    <h1>Welcome <?php echo $name; ?></h1>
    <p>Your email address is: <?php echo $email; ?></p>

    <?php
    echo var_dump($_GET);
    ?>

</body>

</html>