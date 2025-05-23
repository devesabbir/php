<?php
include 'data.php'; // Assuming data.php contains the $users array

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>User List</title>
    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;

        }

        .user-card {
            flex-grow: 1;
            flex-basis: calc(32% - 20px);
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            max-width: calc(32% - 20px);

        }

        .user-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .user-avatar {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }

        .user-name {
            font-size: 1.5rem;
            margin: 10px 0 5px;
        }

        .user-email {
            color: #666;
            margin-bottom: 10px;
        }

        .user-role {
            display: inline-block;
            padding: 3px 8px;
            background-color: #f0f0f0;
            border-radius: 4px;
            font-size: 0.8rem;
        }
    </style>

</head>

<body>
    <?php include 'header.php'; ?>
    <h5>User List:</h5>


    <section class="card-container">
        <?php foreach ($users as $user): ?>
            <?php if (strtolower($user['role']) == "admin"): ?>
                <div style="background-color: red;" class="user-card">
                    <img class="user-avatar" src="<?php echo $user['avatar']; ?>" alt="Avatar"
                        style="width: 50px; height: 50px;">
                    <h6 class="user-name"><?php echo $user['name']; ?></h6>
                    <p class="user-email">Email: <?php echo $user['email']; ?></p>
                    <p class="user-role">Role: <?php echo $user['role']; ?></p>
                </div>
            <?php elseif (strtolower($user['role']) == "author"): ?>
                <div style="background-color: orange;" class="user-card">
                    <img class="user-avatar" src="<?php echo $user['avatar']; ?>" alt="Avatar"
                        style="width: 50px; height: 50px;">
                    <h6 class="user-name"><?php echo $user['name']; ?></h6>
                    <p class="user-email">Email: <?php echo $user['email']; ?></p>
                    <p class="user-role">Role: <?php echo $user['role']; ?></p>
                </div>
            <?php else: ?>
                <div style="background-color: gray;" class="user-card">
                    <img class="user-avatar" src="<?php echo $user['avatar']; ?>" alt="Avatar"
                        style="width: 50px; height: 50px;">
                    <h6 class="user-name"><?php echo $user['name']; ?></h6>
                    <p class="user-email">Email: <?php echo $user['email']; ?></p>
                    <p class="user-role">Role: <?php echo $user['role']; ?></p>
                </div>
            <?php endif; ?>

        <?php endforeach; ?>
    </section>



    <?php include __DIR__ . '/footer.php'; ?>
</body>

</html>