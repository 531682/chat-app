<main class="chat" id="chat">

<?php 

    if (isset($_GET['room'])) {
        $room = $_GET['room'];
        $sql = "SELECT * FROM message WHERE receiver = '$room' ORDER BY id DESC";
        $result = mysqli_query($db, $sql);

        while ($row = $result->fetch_assoc()){
            ?>
            <div class="message-row">
                <div class="message <?php if ($row['sender']== $_SESSION['username']) { echo "message-sent"; } else { echo "message-received"; } ?>">
                    <p class="message-sender"><?php if ($row['sender'] == $_SESSION['username']) { echo "You"; } else { echo $row['sender']; }?></p>
                    <p class="message-time">said @ <?php echo $row['time']; ?></p>
                    <p class="message-content"><?php echo $row['message']; ?></p>
                </div>
            </div>
            <?php
        }

    }

?>

</main>