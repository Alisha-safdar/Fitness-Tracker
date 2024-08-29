<?php
require_once('function.php');
if (isset($_POST['submit'])) {
    $signup = signup($conn, $_POST);
    if ($signup) {
        header("location:login.php");
    }
}

require_once('header.php');
?>
<link href="styles.css" rel="stylesheet">
<main>
    <h1 style="text-align: center;">Welcome to our site</h1>
    
    <section class="signup-form">
 
        <form action="" method="POST">
        <h1 style="text-align: center;">Create Your Account</h1>
            <label for="username">Username:</label>
            <input type="text" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <br>
            <button type="submit" name="submit">Submit</button>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </section>
</main>
<footer>
    <p>&copy; 2024 Fitness Tracker. All rights reserved.</p>
</footer>
</body>
</html>