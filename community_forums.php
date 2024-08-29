<?php
require_once('header.php');
require_once('login-to-access.php');
?>

<body>
<main>
    <h2>Community Forums</h2>
    <section class="forums">
        <h3>Discussion Boards</h3>
        <ul>
            <li><a href="https://generalfitnessfr.com/">General Fitness</a></li>
            <li><a href="https://www.health.com/weight-loss/30-simple-diet-and-fitness-tips">Diet Tips</a></li>
            <li><a href="https://www.forbes.com/health/fitness/workout-schedule/">Workout Routines</a></li>
            <li><a href="https://www.futurefit.co.uk/blog/gym-motivational-quotes/">Motivation</a></li>
        </ul>
    </section>
    
    <section class="user-profiles">
        <h3>User Profiles</h3>
        <p>Create a profile, ask questions, share tips, and interact with others.</p>
        <a href="signup.php" class="btn">Create Profile</a>
    </section>
    
    <section class="events">
        <h3>Events</h3>
        <p>Join fitness challenges, online events, or meetups.</p>
        <a href="view_event.php" class="btn">View Events</a>
    </section>
</main>

<footer>
    <p>&copy; 2024 Fitness Tracker. All rights reserved.</p>
</footer>
</body>
</html>
