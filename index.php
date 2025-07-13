<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Form validation</h1>

    <form action="welcome.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="1" max="100">
        <br><br>

        <input type="submit" value="Submit">
    </form>


</body>

</html>