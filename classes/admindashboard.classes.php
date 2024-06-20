<?php

class AdminDashboard extends Dbh {
    public function countStudents() {
        $stmt = $this->connect()->prepare('SELECT COUNT(*) as count FROM admin');

        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../adminportal.php?error=stmtfailed");
            exit();
        }

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $count = $result['count'];

        return $count;
    }

    public function adminName() {
        session_start();
        $username = $_SESSION['username'];
        $stmt = $this->connect()->prepare('SELECT username FROM admin WHERE username = ?');

        if (!$stmt->execute(array($username))) {
            $stmt = null;
            header("location: ../adminportal.php?error=stmtfailed");
            exit();
        }

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $name = $result['username'];

        return $name;
    }
}
?>
