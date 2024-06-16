<?php 

include "adminlogin.classes.php";

class AdminLoginContr {
    private $username;
    private $pwd;

    public function __construct($username, $pwd) {
        $this->username = $username;
        $this->pwd = $pwd;
    }

    public function LOGINADMIN() {
        if ($this->emptyInput() == false) {
            header("location: ../adminportal.php?error=emptyInput");
            exit();
        }

        if ($this->invalidUsername() == false) {
            header("location: ../adminportal.php?error=invalidUsername");
            exit();
        }

        if ($this->accMatch() == false) {
            header("location: ../adminportal.php?error=accountNotFound");
        }

        $this->loginAdmin($this->username, $this->pwd);

        header("location: ../index.php?login=success");
        exit();

    }

    private function emptyInput() {
        $result = true;

        if(empty($this->username) || empty($this->pwd)) {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }

    private function invalidUsername() {
        $result = false;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }

    private function accMatch () {
        $adminlogin = new AdminLogin();
        $result = false;

        if (!$adminlogin->checkUser($this->username, $this->pwd)) {
            $result = true;
        }
        else {
            $result = false;
        }

        return $result;
    }

}

