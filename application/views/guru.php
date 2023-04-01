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
    <h1 class="w3-jumbo"><b>Data Guru</b></h1>

  </div>
  


  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <button class="btn btn-success btn-sm"><a href="<?=base_url()?>guru/form_guru">Tambah</a></button>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    

<table class="table table-bordered text-center table-striped table-hover table-responsive">
	<tr class="success">
		<th>NO</th>
		<th>NAMA</th>
		<th>NO HP</th>
		<th>ALAMAT</th>
		<th>MATA PELAJARAN</th>
		<th>FOTO</th>
		<th>AKSI</th>

	</tr>
<?php

  // output data of each row
$no=0;
 foreach ($data_guru as $key => $value) {
 	
   $no++;

?>

	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $value->nama ?></td>
		<td><?php echo $value->no_hp ?></td>
		<td><?php echo $value->alamat ?></td>
		<td><?php echo $value->mata_pelajaran ?></td>
		<td><img src="<?=base_url()?>assets/images/<?php echo $value->foto ?>" style="height: 100px ; width: auto"></td>

		
		<td><button><a href="<?=base_url()?>guru/hapus/<?php echo $value->id; ?>">Hapus</a></button><br>
		<button><a href="<?=base_url()?>guru/edit/<?php echo $value->id; ?>">Edit</a></button></td>
	</tr>
	
	<?php 
		}
	?>

</table>


  </div>
  


<!-- End page content -->
</div>




</body>
</html>
