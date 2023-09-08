<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hALAMAN <?= $data['judul']; ?></title>
</head>
<style>
    body {
      background-color: #0E2954;
    }
</style>
<body>
<div style="margin-left:50px; margin-right:50px;" class="">
        <div class="mt-5">
            <div class="col-lg-6">
                <?php Flasher::flash(); ?>
            </div>
        <div class="col-6">
        <button style="margin-bottom:20px; background-color: #071952; color: white;" type="button" class="btn border" data-bs-toggle="modal" data-bs-target="#exampleModal"
          data-bs-whatever="@getbootstrap">
          Tambah Data Jurusan
        </button>
                <h3 style="color:white;margin-bottom:20px">Data Kompetensi Keahlian</h3>
               
                <table style="width:80rem;" class="table table-bordered col-12" id="myTable">
          <tbody>
          <?php foreach ($data['jurusan'] as $jurusan) : ?>
          <tr>
                <td style="background-color:#071952; color:white;">
                  <?= $jurusan['jurusan']; ?>
                </td>
                <td class="col-3" style="text-align:center;background-color:#071952;">
                        <a style="margin-left:5px;" href="<?= LINK_URL; ?>/jurusan/hapus/<?= $jurusan['id']; ?>" class="btn btn-danger" onclick="return confirm('yakin?');">hapus</a>
                        <a style="margin-left:5px;" href="<?= LINK_URL; ?>/jurusan/ubah/<?= $jurusan['id']; ?>" class="btn btn-success tampilModalUbah3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?=$jurusan['id'];?>">ubah</a>
                    <?php endforeach;?>
                
                    </td>
              </tr>

                </tbody>
                </table>
                </div>
        </div>
    </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 style="color: black" class="modal-title fs-5" id="exampleModalLabel">Tambah Data Kopetensi Keahlian</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="<?= LINK_URL; ?>/jurusan/tambah" method="POST">
                    <input type="hidden" name="id" id="id">
                      <div class="mb-3" style="color: black">
                        <label for="recipient-name" class="col-form-label">Kopetensi Keahlian</label>
                        <input type="text" class="form-control" required name="jurusan">
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                  </div>
                  </form>
                </div>
             </div>
            </div>
        </div>
    </div>
</body>
</html>