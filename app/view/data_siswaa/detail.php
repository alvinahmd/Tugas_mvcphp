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
<div  style="margin-left:50px; margin-right:50px;" class="mt-5">
    <div class="row">
      <div class="col-6">
<table style="width:80rem;" class="table table-bordered " id="myTable">
          <thead>
            <tr  class="text-center">
              <th style="background-color:#071952; color : white; font: size 10px;" scope="col">Nama</th>
              <th style="background-color:#071952; color : white; font: size 10px;" scope="col">Jenis Kelamin</th>
              <th style="background-color:#071952; color : white; font: size 10px;" scope="col">Alamat</th>
              <th style="background-color:#071952; color : white; font: size 10px;" scope="col">Info</th>
            </tr>
          </thead>
          <tbody >
              <tr class="text-center" style="background-color:#071952;">
                <td style="background-color:#071952; color : white; font: size 10px;">
                <?= $data['data_siswaa']['nama'];?>
                </td>
                <td style="background-color:#071952; color : white; font: size 10px;">
                <?= $data['data_siswaa']['jenis_kelamin'];?>
                </td>
                <td style="background-color:#071952; color : white; font: size 10px;">
                <?= $data['data_siswaa']['alamat'];?>
                </td>
                <td style="background-color:#071952; color : white; font: size 10px;">
                <a href="<?= LINK_URL;?>/data_siswaa"style="text-decoration:none; color: white"
                    class="btn btn-primary">Kembali</a>
                </td>
              </tr>
          </tbody>
        </table>
      </div></div></div>
</body>
</html>