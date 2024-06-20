<?php 

class AdminLoginContr {
    private $username;
    private $pwd;

    public function __construct($username, $pwd) {
        $this->username = $username;
        $this->pwd = $pwd;
    }

    public function loginAdmin() {
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
            exit();
        }

        session_start();
        $_SESSION["username"] = $this->username;

        header("location: ../admin.php?login=success");
        exit();
    }

    private function emptyInput() {
        return !empty($this->username) && !empty($this->pwd);
    }

    private function invalidUsername() {
        return preg_match("/^[a-zA-Z0-9]*$/", $this->username);
    }

    private function accMatch() {
        $adminlogin = new AdminLogin();
        return $adminlogin->loginAdmin($this->username, $this->pwd);
    }
}
?>
