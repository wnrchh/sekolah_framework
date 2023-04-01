<!DOCTYPE html>
<html lang="en">
<head>
<title>Data</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
</head>
<body>


 


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
  </div>
  <div class="w3-bar-block">
    <a href="<?=base_url()?>data" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="<?=base_url()?>siswa" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Siswa</a> 
    <a href="<?=base_url()?>guru" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Guru</a> 
    <a href="<?=base_url()?>karyawan" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Karyawan</a> 

   <a href="<?=base_url()?>login/log_out" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Log Out</a> 
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Form Edit Siswa</b></h1>

  </div>
  


  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <hr style="width:50px;border:5px solid red" class="w3-round">
    

<form action="<?=base_url()?>siswa/simpan_edit_siswa/<?=$data_siswa->id?>" method="post" enctype="multipart/form-data">

  <label for="nama">Nama:</label><br>
  <input type="text" id="nama" name="nama" value="<?=$data_siswa->nama?>"><br><br>

  <label for="jenis_kelamin">Jenis Kelamin:</label><br>
  <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="L" <?php echo $data_siswa->jenis_kelamin == 'L' ? 'checked' : '';?> > LAKI-LAKI <br>
  <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="P"<?php echo $data_siswa->jenis_kelamin == 'P' ? 'checked' : '';?>> PEREMPUAN<br><br>

  <label for="vegetarian">Vegetarian:</label><br>
  <input type="radio" id="vegetarian" name="vegetarian" value="Iya" <?php echo $data_siswa->vegetarian == 'Iya' ? 'checked' : '';?> > Iya <br>
  <input type="radio" id="vegetarian" name="vegetarian" value="Tidak" <?php echo $data_siswa->vegetarian == 'Tidak' ? 'checked' : '';?> > Tidak <br><br>

  <label for="nis">NIS:</label><br>
  <input type="text" id="nis" name="nis" value="<?=$data_siswa->nis?>"><br><br>

   <label for="tempat_lahir">Tempat Lahir:</label><br>
  <input type="text" id="tempat_lahir" name="tempat_lahir" value="<?=$data_siswa->tempat_lahir?>"><br><br>

  <label for="tanggal_lahir">Tanggal Lahir:</label><br>
  <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?=$data_siswa->tanggal_lahir?>"><br><br>

  <label for="alamat">Alamat:</label><br>
<textarea id="alamat" name="alamat" rows="5" > <?=$data_siswa->alamat?>   </textarea><br><br>

  <label for="kelas">Kelas:</label><br>
  <input type="text" id="kelas" name="kelas" value="<?=$data_siswa->kelas?>"><br><br>

  <label for="foto">Foto:</label><br>
  <img src="<?=base_url()?>assets/images/<?php echo $data_siswa->foto ?>" style="height: 100px ; width: auto">
  <input type="file" id="foto" name="foto"><br><br>


  <input type="submit" value="Submit" name="submit">
</form> 



  </div>
  


<!-- End page content -->
</div>




</body>
</html>



