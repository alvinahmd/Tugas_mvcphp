<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'] ?></title>
</head>
<body>
<div class="hero-image" style="height: 100%;">
  <div class="hero-text">
    <h1 style="font-style: Georgia; color: #fff; font-size:50px;">SMKN 2 TRENGGALEK</h1>
    <p>Rekayasa Perangkat Lunak</p>
    <a href="<?= BASE_URL; ?>/jurusan">Kopetensi Keahlian</a>
  </div>
  <div class="hero-exclusions">
    <a href="#popup1">
      <p class="exclusions" style="font-size: 20px;color:black">*click here for details</p>
    </a>
  </div>

  <div id="popup1" class="overlay">
    <div class="popup">
      <a class="close" href="#">&times;</a>
      <div class="content">
        <br><br>
        <h2>About SMKN 2 Trenggalek</h2>
        <h1 style="font: size 10px;">
            Sejarah
        </h1>
        <br><br>
        SMK Negeri 2 Trenggalek berdiri tanggal 21 Mei 2004. Menurut SK Bupati Trenggalek no. 275 tahun 2004 tentang pendidikan SMKN 2 Trenggalek, SMKN 2 Trenggalek awalnya bernama SMK Kecil di SMPN 5 Trenggalek. Gedung yang dimiliki dulu adalah Bekas SDN...
        <br><br>
        <h1 style="font: size 5px;">
            Visi dan Misi
        </h1>
        Visi Terwujudnya sekolah unggul yang peduli dan berbudaya lingkungan Misi Meningkatkan penghayatan dan pengamalan terhadap ajaran agama yang dianut. Menciptakan suasana akademik yang kondusif. Menyiapkan sumber daya pendidikan yang berkualitas dan bermanfaat bagi pengembangan potensi peserta didik. Menyelenggarakan proses pembelajaran
        <br><br><br>
      </div>
    </div>
  </div>
  <!--lightbox style popup goes here-->
</div>
<!-- Background image -->
</body>
</html>
<style>
    
    body,
html {
  height: 100%;
  margin: 0;
}

h1 {
  font-family: Georgia;
  font-weight: bold;
  font-style: italic;
  margin: 10px;
  text-shadow: 2px 2px #000;
}

p {
  font-family: Georgia;
  font-style: italic;
  text-shadow: 1px 1px #000;
}

.exclusions {
  font-family: Georgia;
  font-size: 10pt;
  letter-spacing: 1px;
  text-shadow: none;
  font-style: normal;
}

.hero-image {
  background-image:
   linear-gradient(to bottom, rgba(25, 80, 165, 0.90), rgba(51, 124,202, 0.50)),
   url("img/smk.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-exclusions {
  position: fixed;
  text-align: center;
  top: 88%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text a {
  border-radius: 10px;
  border: none;
  outline: 0;
  display: inline-block;
  padding: 12px 35px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  border: 5px solid black;
  margin-left: -1px;
  margin-top: 5%;
  font-size: 8pt;
  letter-spacing: 5px;
  font-weight: bold;
  font-family: Geogia;
  font-syle: italic;
}

.hero-text a:hover {
  background-color: transparent;
  color: white;
  border: 5px solid black;
  text-shadow: 2px 2px #000;
}

/*start of popup*/
.exclusions {
  font-family: Georgia;
  font-size: 8px;
  letter-spacing: 1px;
  text-shadow: none;
  font-style: normal;
}

.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255, 255, 255, 0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

/*.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: #06D85F;
}*/

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 2px;
  width: 60%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Georgia, sans-serif;
  font-style: italic;
}

.popup .close {
  position: fixed;
  top: 90px;
  left: 50%;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #a6a6a6;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
  padding-top: 30px;
}

@media screen and (max-width: 700px) {
  .box {
    width: 70%;
  }
  .popup {
    width: 70%;
  }
}

/* unvisited link */
a:link {
  color: #fff;
  text-decoration: none;
}

/* visited link */
a:visited {
  color: #fff;
}

/* mouse over link */
a:hover {
  color: #ccc;
  text-decoration: none;
}

/* selected link */
a:active {
  color: #fff;
}

</style>