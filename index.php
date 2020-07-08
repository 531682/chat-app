<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="js/jQuery.min.js"></script>
</head>
<body>
<?php
  require_once 'server.php';
  
  if( !session_id() )
  {
    session_start();
  }
  
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
  	include("nickname.php");
  } else {
      include("chat.php");
  }


  if (isset($_GET['logout'])) {
      unset($_SESSION['username']);
      session_destroy();
  }

?>
</body>
</html>
