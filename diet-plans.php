<?php
require_once('header.php');
require_once('login-to-access.php');
?>

<main>
    <h2>Diet Plans</h2>
    <section class="meal-templates">
        <h3>Meal Plan Templates</h3>
        <ul>
            <li><a href="https://alsapakistan.com/articles/diet-plan-for-weight-loss/">Weight Loss Plan</a></li>
            <li><a href="https://www.eatingwell.com/article/8021744/meal-plan-to-gain-more-muscle/">Muscle Gain Plan</a></li>
        </ul>
    </section>

    <section class="custom-plan">
        <h3>Create Your Own Plan</h3>
        <form action="successful.php" method="post">
            <label for="meal-name">Meal Name:</label>
            <input type="text" name="meal-name" required>
            
            <label for="foods">Foods:</label>
            <textarea id="foods" name="foods" placeholder="List foods and portions"></textarea>
            
            <label for="calories">Calories:</label>
            <input type="number" name="calories" required>
            <br><br>
            <button type="submit">Save Plan</button>
        </form>
    </section>
</main>
    
<footer>
    <p>&copy; 2024 Fitness Tracker. All rights reserved.</p>
</footer>
</body>
</html>
