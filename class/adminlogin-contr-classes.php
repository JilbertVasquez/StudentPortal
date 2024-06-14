<?php 

class AdminLoginContr {
    private $username;
    private $pwd;

    public function __construct($username, $pwd) {
        $this->username = $username;
        $this->pwd = $pwd;
    }

    public function emptyInput() {
        $result = true;

        if(empty($this->username) || empty($this->pwd)) {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }

    private function AccMatch () {
        $result = false;

        if ($this->checkUser($this->username, $this->pwd)) {
            $result = true;
        }
        else {
            $result = false;
        }

        return $result;
    }

}

