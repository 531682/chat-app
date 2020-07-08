<?php 

if (!isset($_SESSION)){
    session_start();
  }

$db_host = "";
$db_user = "";
$db_pass = "";
$db_name = "";

$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$errors = array(); 

if (isset($_GET['logout'])) {
    $username = $_SESSION['username'];
    $sql = "DELETE FROM `user` WHERE name='$username'";
    mysqli_query($db, $sql);
    session_destroy();
    unset($_SESSION['username']);
}

if (isset($_POST['set_username'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
  
    if (empty($username)) { array_push($errors, "Username is required"); }
  
    $user_check_query = "SELECT * FROM user WHERE name='$username' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) {
      if ($user['name'] === $username) {
        array_push($errors, "Username already exists");
      }
    }
  
    if (count($errors) == 0) {
  
        $query = "INSERT INTO user (name) VALUES ('$username')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['user_login'] = true;
        include("chat.php");
    } else {
        unset($_SESSION['username']);
        $_SESSION['user_login'] = false;
    }
}

if (isset($_POST['message-sent'])) {
    $sender =   $_SESSION['username'];
    $receiver = $_GET['room'];
    $message =  mysqli_real_escape_string($db, $_POST['message']);
    $time = date("h:i");

    $sql = "INSERT INTO `message` (`id`, `sender`, `message`, `receiver`, `time`) VALUES (NULL, '$sender', '$message', '$receiver', '$time')";
    mysqli_query($db, $sql);

    $message = '';
    unset($_POST['message-sent']);

}