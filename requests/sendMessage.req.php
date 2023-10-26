<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get Vars
    $email = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL);
    $sub = filter_var($_POST['sub'], FILTER_SANITIZE_STRING);
    $msg = filter_var($_POST['msg'], FILTER_SANITIZE_STRING);

    // Instantiate Login Controler class
    include_once "../classes/sendMessage.class.php";
    include_once "../classes/sendMessagecontrol.class.php";

    // Create New Class
    $sendMessage = new SendMessageCont($email, $sub, $msg);

    echo $sendMessage->sendMessage();
}