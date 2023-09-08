<?php
class jurusan extends Controller
{
    public function index()
    {
        $data['judul'] = "data_jurusan";
        $data['jurusan'] = $this->model("jurusan_model")->getAllDataJurusan();
        $this->view('templates/header', $data);
        $this->view('jurusan/index', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if ($this->model('jurusan_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('location: ' . LINK_URL . '/jurusan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location: ' .LINK_URL . '/jurusan');
            exit;
        }
    }
    public function hapus($id)
    {
        if ($this->model('jurusan_model')->hapusDataJurusan($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('location: ' . LINK_URL . '/jurusan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('location: ' .LINK_URL . '/jurusan');
            exit;
        }
    }
    public function getUbah()
    {
        echo json_encode($this->model('jurusan_model')->getJurusanById($_POST['id']));
    }
    public function ubah()
    {
        if( $this->model('jurusan_model')->ubahDataJurusan($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . LINK_URL . '/jurusan');
            exit;
            } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . LINK_URL . '/jurusan');
            exit;
            }
    }
}
?>