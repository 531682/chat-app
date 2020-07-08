<header>
    <p class="title">
        Enter Chatbox
    </p>
</header>

<div class="username">
    <form method="post" action="index.php">
        <div class="form-container form-short <?php if (count($errors) != 0) { echo 'error'; } ?> ">
            <input type="text" class="message-form" placeholder="Nickname" name="username" required autocomplete="off">
            <button type="submit" name="set_username"><img class="send-img" src="img/send-icon.png"></button>
        </div>
    </form>

    <?php if (count($errors) != 0) : ?>
        <div class="errorText">
            This nickname already exists. Try another
        </div>
    <?php endif ?>
</div>

<p class="username-description">
Here’s some information about this chat.
Could be anything actually. Like, it’s soo
cool! Oh my god, it’s amazing! Nothing 
beats this chat. Like, you can talk and 
other people talk back at ya! 
</p>


<footer></footer>