<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $data->nama_perusahaan; ?> | &copy; Offical Website </title>
	<link rel="shortcut icon" href="<?= base_url().'assets/img/logo/'.$data->logo;?>">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 
	<link rel="stylesheet" href="<?= base_url('mode/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?= base_url('mode/css/plugins.css');?>">
	<link rel="stylesheet" href="<?= base_url('mode/style.css');?>">
	<link rel="stylesheet" href="<?= base_url('mode/css/custom.css');?>">
	<script src="<?= base_url('mode/js/vendor/modernizr-3.5.0.min.js');?>"></script>
	<!-- PRELOADER -->
  <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
  <!-- HITUNG -->
</head>
<style>
.logo-tp {
	width: 70%;
	height: auto;
	padding: 5px 5px 5px 5px;
	position: relative;
}

@media screen and (max-width: 750px) {
  #slide{
	width: 100%;
	min-height: 269px;
  } 
}

.gambar-icon {
    width: 80%;
    height: auto;
}

.footer-logo {
	width: 50%;
	height: auto;
	padding: 5px 5px 5px 5px;
	position: relative;
}
/* PRELOADER */
.preloader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background-color: #000;
}
.preloader .loading {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
}

/* BACKGROUND ANIMATED */
.hero {
  background-color: transparent;
  position: relative;
  height: 130vh;
  overflow: hidden;
}

.cube {
  position: absolute;
  top: 80vh;
  left: 45vw;
  width: 10px;
  height: 10px;
  border: solid 1px #c8a587;;
  transform-origin: top left;
  transform: scale(0) rotate(0deg) translate(-50%, -50%);
  -webkit-animation: cube 12s ease-in forwards infinite;
          animation: cube 12s ease-in forwards infinite;
}
.cube:nth-child(2n) {
  border-color: #c8a58770;
}
.cube:nth-child(2) {
  -webkit-animation-delay: 2s;
          animation-delay: 2s;
  left: 25vw;
  top: 40vh;
}
.cube:nth-child(3) {
  -webkit-animation-delay: 4s;
          animation-delay: 4s;
  left: 75vw;
  top: 50vh;
}
.cube:nth-child(4) {
  -webkit-animation-delay: 6s;
          animation-delay: 6s;
  left: 90vw;
  top: 10vh;
}
.cube:nth-child(5) {
  -webkit-animation-delay: 8s;
          animation-delay: 8s;
  left: 10vw;
  top: 85vh;
}
.cube:nth-child(6) {
  -webkit-animation-delay: 10s;
          animation-delay: 10s;
  left: 50vw;
  top: 10vh;
}

@-webkit-keyframes cube {
  from {
    transform: scale(0) rotate(0deg) translate(-50%, -50%);
    opacity: 1;
  }
  to {
    transform: scale(20) rotate(960deg) translate(-50%, -50%);
    opacity: 0;
  }
}

@keyframes cube {
  from {
    transform: scale(0) rotate(0deg) translate(-50%, -50%);
    opacity: 1;
  }
  to {
    transform: scale(20) rotate(960deg) translate(-50%, -50%);
    opacity: 0;
  }
}
/* CSS OTHERS */
.subtotal {
  padding:0px 10px 15px 10px;
}

.nilai-subtotal {
  border:initial;
  color:#333;
  font-size:22px;
  font-weight:600;
  line-height:1.42857;
  margin:0 0 3px;
  font-family:"Poppins", sans-serif;
}
/* BUTTON */
.kelas-beli {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: 2px solid #333;
  box-shadow: none;
  color: #333;
  display: inline-block;
  font-family: Poppins,Arial,Helvetica,sans-serif;
  font-size: 12px;
  font-weight: 700;
  line-height: 34px;
  padding: 2px 20px 0;
  text-shadow: none;
  text-transform: uppercase;
  transition: all 0.4s ease 0s; 
}

.kelas:hover {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border-color: #c8a587;
  color: #c8a587; 
}

.logo-inv {
	height: auto;
	padding: 5px 5px 5px 5px;
  position: relative;
}

.upper { 
  text-transform: uppercase; 
}

.lower { 
  text-transform: lowercase; 
}

.cap   { 
  text-transform: capitalize; 
}

.small { 
  font-variant:   small-caps; 
}

.btn-inv {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: 2px solid #333;
  box-shadow: none;
  color: #333;
  display: inline-block;
  font-family: Poppins,Arial,Helvetica,sans-serif;
  font-size: 12px;
  font-weight: 700;
  line-height: 34px;
  padding: 2px 20px 0;
  text-shadow: none;
  text-transform: uppercase;
  transition: all 0.4s ease 0s; 
}

.modal-content-xl {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: .3rem;
    outline: 0;
    width: max-content;
}
</style>
<?php
function buatRupiah($angka){
	$hasil = "USD$. " . number_format($angka);
	return $hasil;
}
?>
<div class="preloader" align="center" style="color: #fff">
	<div class="loading">
		<img src="<?= base_url().'assets/img/logo/'.$data->logo;?>" width="100">
		<br>
		<p><b><font style="font-family: 'Poppins', sans-serif;"><?= $data->nama_perusahaan; ?> </font><font style="font-family: 'Poppins', sans-serif;">&nbsp;</font>...</b></p>
	</div>
</div>
<body id="WAButton">
	<div class="wrapper" id="wrapper">