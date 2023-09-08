<?php
class data_guru extends Controller
{
    public function index()
    {
        $data['judul'] = "data_guru";
        $data['data_guru'] = $this->model("data_guru_model")->getAllDataGuru();
        $this->view('templates/header', $data);
        $this->view('data_guru/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id){
        $data['judul'] = "detail siswa";
        $data['data_guru'] = $this->model("data_guru_model")->getGuruById($id);
        $this->view('templates/header', $data);
        $this->view('data_guru/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if ($this->model('data_guru_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('location: ' . LINK_URL . '/data_guru');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location: ' .LINK_URL . '/data_guru');
            exit;
        }
    }
    public function hapus($id)
    {
        if ($this->model('data_guru_model')->hapusDataGuru($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('location: ' . LINK_URL . '/data_guru');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('location: ' .LINK_URL . '/data_guru');
            exit;
        }
    }
    public function getUbah()
    {
        echo json_encode($this->model('data_guru_model')->getGuruById($_POST['id']));
    }
    public function ubah()
    {
        if( $this->model('data_guru_model')->ubahDataGuru($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . LINK_URL . '/data_guru');
            exit;
            } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . LINK_URL . '/data_guru');
            exit;
            }
    }
}
?>