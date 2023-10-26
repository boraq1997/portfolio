<?php 

class SendMessage {
    private $email;
    private $sub;
    private $msg;

    public function __construct($email, $sub, $msg) {
        $this->email = $email;
        $this->sub = $sub;
        $this->msg = $msg;
    }

    public function sendMessage() {
        $result;
        if ($this->emptyInput($this->email) == false) {
            $result = 'EMAIL_ERROR';
        }

        if ($this->emptyInput($this->sub) == false) {
            $result = 'SUB_ERROR';
        }

        if ($this->emptyInput($this->msg) == false) {
            $result = 'MESSAGE_ERROR';
        }

        if (empty($result)) {
            $this->sendEmail();
            $result = 'SUCCESS';
        }

        return $result;
    }

    private function sendEmail() {
        $myEmail = 'boraqnz@boraq.site';
        $headers = 'From: <'. $this->email .'>\r\n';
        $headers .= 'Replay-t: '. $this->email .'\r\n';
        $headers .= "Content-type: text/html\r\n";
        mail($myEmail, $this->sub, $this->msg, $headers);
    }

    private function emptyInput($input) {
        $result;
        if (empty($input)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }
}