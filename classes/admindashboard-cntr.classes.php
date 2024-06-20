<?php 

class AdminDashboardCntr {
    private $allstudents;
    private $allusers;
    private $currentLoginAdmin;

    public function studentCount() {
        $this->allstudents = $this->studentTotal();
        return $this->allstudents;
    }

    public function adminNameLogin() {
        $this->currentLoginAdmin = $this->adminName();
        return $this->currentLoginAdmin;
    }

    private function studentTotal() {
        $admindashboard = new AdminDashboard();
        return $admindashboard->countStudents();
    }

    private function adminName() {
        $adminName = new AdminDashboard();
        return$adminName->adminName();
    }
}
?>
