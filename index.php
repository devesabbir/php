<?php


?>

<!DOCTYPE html>
<html>

<head></head>

<body>

    <!-- The PHP superglobals $_GET and $_POST are used to collect form-data. -->

    <h1>PHP - A Simple HTML Form</h1>
    <!-- <form action="welcome.php" method="POST">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form> -->

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>

    <div>
        <?php
        // test input data
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            echo "" . $name . "</br>" . $email . "";
        } else if ($_SERVER[""] !== "POST") {
            echo "<p>This method is not allowed!</p>";

        }
        ?>
    </div>
</body>

</html>

</html>