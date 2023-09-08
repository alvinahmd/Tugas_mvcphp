<?php
class User extends Controller{
    public function index(){
        $data['judul'] = "User";
        $this->view("templates/header", $data);
        $this->view("user/index", $data);
        $this->view("templates/footer", $data);
        
    }
    public function profile($name = "Alvin ", $pekerjaan = " Frontend Devs") {
        $data['judul'] = "User";
        $data['nama'] = $name;
        $data['pekerjaan'] = $pekerjaan;
        
        $this->view("templates/header", $data);
        $this->view("User/profile", $data);
        $this->view("templates/footer", $data);
        
    }
}
?>