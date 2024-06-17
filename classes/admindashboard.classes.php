<?php

class AdminDasboard extends Dbh {
    public function countStudents() {
        $stmt = $this->connect()->prepare('SELECT COUNT(*) FROM admin');

        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../adminportal.php?error=stmtfailed");
            exit();
        }

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $count = $result['count'];

        return $count;
    }
}
?>
