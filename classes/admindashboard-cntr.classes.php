<?php 

class AdminDashboardCntr {
    private $allstudents;
    private $allusers;

    public function studentCount() {
        $this->allstudents = $this->studentTotal();
        return $this->allstudents;
    }

    private function studentTotal() {
        $admindashboard = new AdminDasboard();
        return $admindashboard->countStudents();
    }
}
?>
