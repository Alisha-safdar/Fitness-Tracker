<?php
require_once('header.php');
require_once('login-to-access.php');
?>
    <main>
        <section class="event-details">
            <h2>Event Title</h2>
            <p class="event-date">Date: August 25, 2024</p>
            <p class="event-time">Time: 10:00 AM</p>
            <p class="event-description">
                This is where the event description goes. It should provide a detailed overview of what the event is about, including any important information for attendees.
            </p>
        </section>

        <section class="event-discussion">
            <h3>Discussion</h3>
            <div class="comment">
                <p><strong>User1:</strong> This event looks great! Can't wait to join.</p>
                <p><small>Posted on August 20, 2024</small></p>
            </div>
            <div class="comment">
                <p><strong>User2:</strong> Will there be any online streaming available?</p>
                <p><small>Posted on August 21, 2024</small></p>
            </div>
        </section>

        <section class="add-comment">
            <h3>Add a Comment</h3>
            <form action="successful.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" rows="4" required></textarea>
                
                <button type="submit">Post Comment</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Fitness Tracker. All rights reserved.</p>
    </footer>
</body>
</html>
