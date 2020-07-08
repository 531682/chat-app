<footer>
    <?php if (isset($_SESSION['username'])) : ?>
    <form method="post" action="index.php?room=<?php echo $_GET['room'];?>">
        <div class="form-container form-long">
            <input type="hidden" name="receiver" <?php echo $_GET['room']; ?>>
            <input type="text" name="message" class="message-form" placeholder="Type your message" autocomplete="off" required autofocus>
            <button type="submit" name="message-sent"><img class="send-img" src="img/send-icon.png"></button>
        </div>
    </form>
    <?php endif ?>
</footer>