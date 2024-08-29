<?php
require_once('header.php');
require_once('login-to-access.php');
?>


<body class="workout-logs-body">
    <main class="workout-logs-main">
        <h2 class="workout-logs-title">Workout Logs</h2>
        <form action="in_future.php" method="post">
            <label class="workout-logs-label" for="exercise">Exercise Type:</label>
            <select class="workout-logs-select" id="exercise" name="exercise" required>
            <option value="">Select an exercise type</option>
                <option value="Running">Running</option>
                <option value="Cycling">Cycling</option>
                <option value="Swimming">Swimming</option>
                <option value="Weightlifting">Weightlifting</option>
                <option value="Yoga">Yoga</option>
                <option value="Pilates">Pilates</option>
                <option value="Hiking">Hiking</option>
                <option value="Elliptical">Elliptical</option>
                <option value="Rowing">Rowing</option>
                <option value="Jump Rope">Jump Rope</option>
            </select>

            <label class="workout-logs-label" for="duration">Duration (minutes):</label>
            <input class="workout-logs-input" type="number" name="duration" id="duration" required>

            <label class="workout-logs-label" for="calories">Calories Burned:</label>
            <input class="workout-logs-input" type="number" name="calories" id="calories" required>

            <label class="workout-logs-label" for="notes">Notes:</label>
            <textarea class="workout-logs-textarea" name="notes"></textarea>

            <button class="workout-logs-button" type="submit">Log Workout</button>
        </form>
    </main>

    <footer class="workout-logs-footer">
        <p>&copy; 2024 Fitness Tracker. All rights reserved.</p>
    </footer>
</body>

</html>
