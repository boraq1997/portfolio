<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Get Vars
    $email = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL);
    $sub = filter_var($_POST['sub'], FILTER_SANITIZE_STRING);
    $msg = filter_var($_POST['msg'], FILTER_SANITIZE_STRING);

    $errors = array();
    if (empty($email)) {echo 'EMAIL_ERROR';}
    else if (empty($sub)) {echo 'SUB_ERROR';}
    else if (empty($msg)) {echo 'MESSAGE_ERROR';}
    else {
        $headers = 'From: ' . $email . '\r\n';
        $myEmail = 'boraqnz@gmail.com';
        $sub = $sub;
        mail($myEmail, $sub, $msg, $headers);

        $email = '';
        $sub = '';
        $msg = '';
        echo 'SUCCESS';
    }
}