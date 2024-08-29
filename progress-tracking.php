<?php
require_once('header.php');
require_once('login-to-access.php');
?>

<main>
    <h2>Progress Tracking</h2>
    <section class="dashboard">
        <div class="container">
            <h1>Fitness Chart</h1>
            <table>
                <thead>
                    <tr>
                        <th>Exercise</th>
                        <th>Duration</th>
                        <th>Weight Loss</th>
                        <th>Muscle Gain</th>
                        <th>Notes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Running</td>
                        <td>5 km</td>
                        <td>~10 pounds</td>
                        <td>Minor leg muscle gain</td>
                        <td>High calorie burn</td>
                    </tr>
                    <tr>
                        <td>Cycling</td>
                        <td>10 km</td>
                        <td>~8 pounds</td>
                        <td>Moderate leg muscle gain</td>
                        <td>Good for cardiovascular health</td>
                    </tr>
                    <tr>
                        <td>Swimming</td>
                        <td>1 hour</td>
                        <td>~7 pounds</td>
                        <td>Full-body muscle gain</td>
                        <td>Low impact on joints</td>
                    </tr>
                    <tr>
                        <td>Weightlifting</td>
                        <td>Varies</td>
                        <td>Minimal</td>
                        <td>Gain ~5 pounds of muscle</td>
                        <td>Strength training</td>
                    </tr>
                    <tr>
                        <td>Yoga</td>
                        <td>1 hour</td>
                        <td>~3 pounds</td>
                        <td>Toning and flexibility</td>
                        <td>Improves mental well-being</td>
                    </tr>
                    <tr>
                        <td>Pilates</td>
                        <td>1 hour</td>
                        <td>~4 pounds</td>
                        <td>Core muscle gain</td>
                        <td>Enhances posture</td>
                    </tr>
                    <tr>
                        <td>Hiking</td>
                        <td>5 km</td>
                        <td>~7 pounds</td>
                        <td>Leg muscle gain</td>
                        <td>Great for endurance</td>
                    </tr>
                    <tr>
                        <td>Elliptical</td>
                        <td>1 hour</td>
                        <td>~6 pounds</td>
                        <td>Minor muscle gain</td>
                        <td>Low impact, high calorie burn</td>
                    </tr>
                    <tr>
                        <td>Rowing</td>
                        <td>1 hour</td>
                        <td>~8 pounds</td>
                        <td>Back and arm muscle gain</td>
                        <td>Full-body workout</td>
                    </tr>
                    <tr>
                        <td>Jump Rope</td>
                        <td>30 min</td>
                        <td>~10 pounds</td>
                        <td>Leg and core muscle gain</td>
                        <td>High intensity</td>
                    </tr>
                </tbody>
            </table>
        </div>
    <section class="goal-setting">
        <h3>Goal Setting</h3>
        <form action="successful.php" method="post">
            <label for="goal">Set a Goal:</label>
            <input type="text" name="goal" placeholder="e.g., Run a 5K, Lose 10 pounds" required>
            <button type="submit">Set Goal</button>
        </form>
    </section>

    </section>

    <section class="progress-redirect">
        <h3>Track Your Progress</h3>
        <p>Want to see a detailed view of your progress? Click the button below:</p>
        <a href="progress.php" class="button">View Your Progress</a>
    </section>

</main>

<footer>
    <p>&copy; 2024 Fitness Tracker. All rights reserved.</p>
</footer>
</body>
</html>
