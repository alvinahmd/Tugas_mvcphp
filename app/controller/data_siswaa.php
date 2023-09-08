<?php
class data_siswaa extends Controller
{
    public function index()
    {
        $data['judul'] = "data_siswaa";
        $data['data_siswaa'] = $this->model("data_siswaa_model")->getAllDatasiswaa();
        $this->view('templates/header', $data);
        $this->view('data_siswaa/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id){
        $data['judul'] = "detail siswa";
        $data['data_siswaa'] = $this->model("data_siswaa_model")->getsiswaById($id);
        $this->view('templates/header', $data);
        $this->view('data_siswaa/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if ($this->model('data_siswaa_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('location: ' . LINK_URL . '/data_siswaa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location: ' .LINK_URL . '/data_siswaa');
            exit;
        }
    }
    public function hapus($id)
    {
        if ($this->model('data_siswaa_model')->hapusDataSiswa($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('location: ' . LINK_URL . '/data_siswaa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('location: ' .LINK_URL . '/data_siswaa');
            exit;
        }
    }
    public function getubah()
    {
        echo json_encode($this->model('data_siswaa_model')->getsiswaById($_POST['id']));
    }
    public function ubah()
    {
        if( $this->model('data_siswaa_model')->ubahDataSiswa($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . LINK_URL . '/data_siswaa');
            exit;
            } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . LINK_URL . '/data_siswaa');
            exit;
            }
    }
}
?>