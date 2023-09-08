<?php
class about extends Controller {
    public function index(){
        $data['judul'] = "about";
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('about/index');
        $this->view('templates/footer', $data);
    }
}
?>