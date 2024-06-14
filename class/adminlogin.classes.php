<?php

class AdminLogin extends Dbh {
    protected function checkUser($username, $pwd) {
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
}