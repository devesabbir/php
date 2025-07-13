<?php

// Initialize variables
$name = $_POST['name'] ?? '';

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

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <?php
        // Display error message if name is empty\
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($name)) {
            echo "<span style='color: red;'>Name is required</span>";
        }

        ?>
        <br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <?php
        // Display error message if email is empty or invalid
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'] ?? '';
            if (empty($email)) {
                echo "<span style='color: red;'>Email is required</span>";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<span style='color: red;'>Invalid email format</span>";
            }
        }
        ?>
        <br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" min="1" max="100">
        <br><br>

        <input type="submit" value="Submit">
    </form>


</body>

</html>