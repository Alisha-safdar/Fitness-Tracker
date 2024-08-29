<?php
require_once('header.php');
require_once('login-to-access.php');
?>

    <main>
        <section id="progress-summary">
            <h2>Your Progress</h2>
            <div class="progress-container">
                <div class="progress-item">
                    <h3>Workouts Completed</h3>
                    <p>10 / 30</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 33%;"></div>
                    </div>
                </div>

                <div class="progress-item">
                    <h3>Calories Consumed</h3>
                    <p>1500 / 2000 kcal</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 75%;"></div>
                    </div>
                </div>

                <div class="progress-item">
                    <h3>Weight Loss Goal</h3>
                    <p>5 kg / 10 kg</p>
                    <div class="progress-bar">
                        <div class="progress" style="width: 50%;"></div>
                    </div>
                </div>
            </div>
        </section>

        <section id="progress-details">
            <h2>Detailed Progress</h2>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Workout</th>
                        <th>Calories Burned</th>
                        <th>Weight (kg)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2024-08-18</td>
                        <td>Cardio</td>
                        <td>300 kcal</td>
                        <td>70</td>
                    </tr>
                    <tr>
                        <td>2024-08-19</td>
                        <td>Strength</td>
                        <td>400 kcal</td>
                        <td>69.5</td>
                    </tr>
                    <!-- More rows as needed -->
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Fitness Tracker. All rights reserved.</p>
    </footer>
</body>
</html>
