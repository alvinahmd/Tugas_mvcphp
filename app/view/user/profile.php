<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman  <?= $data['judul'] ?></title>
</head>
<style>
    body {
        background: rgb(79,142,143);
        background: -moz-linear-gradient(90deg, rgba(79,142,143,1) 24%, rgba(37,171,88,0.8575805322128851) 85%);
        background: -webkit-linear-gradient(90deg, rgba(79,142,143,1) 24%, rgba(37,171,88,0.8575805322128851) 85%);
        background: linear-gradient(90deg, rgba(79,142,143,1) 24%, rgba(37,171,88,0.8575805322128851) 85%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#4f8e8f",endColorstr="#25ab58",GradientType=1);
        color: white;
    }
</style>
<body>
    <div class="container mt-3">
        <div class="text-center">
            <h1>Halaman profile</h1>
            <img src="../img/botak.png" alt="Responsive image" class="rounded">
            <p>
                Halo, nama saya <?= $data['nama'] ?>, saya seorang<?= $data['pekerjaan']?>
            </p>
        </div>

    </div>
</body>
</html>