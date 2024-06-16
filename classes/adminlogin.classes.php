<?php

class AdminLogin extends Dbh {
    public function loginAdmin($username, $pwd) {
        $stmt = $this->connect()->prepare('SELECT * FROM admin WHERE username = ?');

        if (!$stmt->execute(array($username))) {
            $stmt = null;
            header("location: ../adminportal.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../adminportal.php?error=userNotFound");
            exit();
        }

        // $user = $stmt->fetch(PDO::FETCH_ASSOC);
        // $checkpwd = password_verify($pwd, $user['pwd']);

        // if ($checkpwd == false) {
        //     $stmt = null;
        //     header("location: ../adminportal.php?error=wrongPassword");
        //     exit();
        // }

        return true;
    }
}
?>
