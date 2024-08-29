<?php
require_once('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Fitness Tracker</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Fitness Tracker</h1>
        <nav>
            <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="workout-logs.php">Workout Logs</a></li>
                    <li><a href="diet-plans.php">Diet Plans</a></li>
                    <li><a href="progress-tracking.php">Progress Tracking</a></li>
                    <li><a href="community_forums.php">Community Forums</a></li>
                    <li><a href="about.php">About</a></li>
                <?php
                if (isset($_SESSION["id"])) {
                ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php
                } else {
                ?>
                    <li><a href="signup.php">Signup</a></li>
                    <li><a href="login.php">Login</a></li>
                <?php
                }
                ?>
            </ul>
        </nav>
    </header>
</body>

</html>