<?php

class AdminLogin extends Dbh {
    public function checkUser($username, $pwd) {
        $stmt = $this->connect()-> prepare('SELECT * FROM audatabase WHERE username = ? AND pwd = ?;');

        if (!$stmt->execute(array($username, $pwd))) {
            $stmt = null;
            header ("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck = false;
        if ($stmt->rowCount() > 0) {
            $resultCheck = false;
        }
        else {
            $resultCheck = true;
        }

        return $resultCheck;
    }

    public function loginAdmin($username, $pwd) {
        $stmt = $this->connect()-> prepare('SELECT * FROM audatabase WHERE username = ? AND pwd = ?;');

        if (!$stmt->execute(array($username, $pwd))) {
            $stmt = null;
            header ("location: ../adminportal.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../adminportal.php?error=userNotFound");
            exit();
        }

        $dhbpwd = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkpwd = password_verify($pwd, $dhbpwd[0]['pwd']);

        if ($checkpwd == false) {
            $stmt = null;
            header("location: ../adminportal.php?error=wrongPassword");
            exit();
        }

        return true;
    }
}