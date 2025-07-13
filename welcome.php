<?php
// Get Form Data
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];


// validate the data
if (empty($name) || empty($email) || empty($age)):
    echo "Please fill out all fields";
else:
    // email validation
    if (!filter_var($email, )):
        echo "Invalid email format";
    else:
        echo "<h1>Welcome, $name!</h1>";
        echo "<p>Your email is: $email</p>";
        echo "<p>Your age is: $age</p>";
    endif;
endif;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome PHP </title>
</head>

<body>

    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>

</body>

</html>