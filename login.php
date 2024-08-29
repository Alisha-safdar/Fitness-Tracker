<?php

require_once('function.php');
require_once('session.php');

//login form
if (isset($_POST['submit'])) {

    $login = login($conn, $_POST);
    if ($login) {
        // If login is successful, set session variables
        $_SESSION['id'] = $login['id'];
        $_SESSION['email'] = $login['email'];

        header("location:index.php");
        exit();
    } else {
        echo '<script>alert("The user does not exist or the password is incorrect.");</script>';
    }
}
require_once('header.php')
?>

    <h1 style="text-align:center">Login to access full site.</h1>

    <main>

        <h2 style="text-align:center">Login to Your Account</h2>
        <section class="login-form">
            <form action="" method="post">
                <label for="email">Email:</label>
                <input type="email"  name="email" required>
                
                <label for="password">Password:</label>
                <input type="password" name="password" required>
                
                <button type="submit" name="submit">Login</button>
                <p>Don't have an account? <a href="signup.php">Sign up here</a>.</p>
                <br>
                
            </form>
            <h1 style="text-align:center">After login you will be redirected to <em>Home - Page</em></h1>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2024 Fitness Tracker. All rights reserved.</p>
    </footer>
</body>
</html>
