<?php
$con=mysqli_connect("localhost","knidcore_admin","Flatrone2241","knidcore_mandiri");
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = mysqli_query($con,"SELECT * FROM tbl_produk WHERE id=".$_GET['id']."");
$row=mysqli_fetch_assoc($query);
?>
<div class="ht__bradcaump__area" style="background-color: #000;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title"><?= $row['nama_produk']; ?></h2>
                    <nav class="bradcaump-content">
                        <a class="breadcrumb_item" href="<?= base_url()."w_home"; ?>">Home</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb_item active">Product</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="maincontent bg--white pt--80 pb--55" style="background-color: black; color: #fff">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="wn__single__product">
                    <div class="row">
                        <div class="col-lg-3 col-12">
                            <div class="wn__fotorama__wrapper">
                                <div class="fotorama wn__fotorama__action" data-nav="thumbs">
                                <?php 
                                if (!empty($row['gambar'])) {
                                    $json = json_decode($row['gambar']); 
                                    for ($i=0; $i < count($json); $i++) { 
                                ?>
                                        <a href="#"><img src="<?= base_url().'assets/img/produk/'.$json[$i];?>" alt=""></a>
                                <?php } } else { echo '-'; } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <form action="<?= base_url('w_product/keranjang');?>" method="post">
                                <div class="product__info__main">
                                    <h1><?= $row['nama_produk']; ?></h1>
                                    <div class="product-reviews-summary d-flex">
                                        <ul class="rating-summary d-flex">
                                            <li><i class="zmdi zmdi-star-outline"></i></li>
                                            <li><i class="zmdi zmdi-star-outline"></i></li>
                                            <li><i class="zmdi zmdi-star-outline"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star-outline"></i></li>
                                            <li class="off"><i class="zmdi zmdi-star-outline"></i></li>
                                        </ul>
                                    </div>
                                    <div class="price-box">
                                        <span><?= buatRupiah($row['harga']); ?></span>
                                        <!-- <input type="hidden" name="harga" id="harga" value="<?= $row['harga']; ?>"> -->
                                        <input type="hidden" name="kode_transaksi" value="<?= date('Ymd') ?>ID<?= $this->session->userdata("id_user"); ?>">
                                        <input type="hidden" name="id_user" value="<?= $this->session->userdata("id_user"); ?>">
                                        <input type="hidden" name="id_produk" value="<?= $row['id']; ?>">
                                        <input type="hidden" name="date_add" value="<?= date('Y-m-d H:m:i'); ?>">
                                        <input type="hidden" name="status" value="0">
                                        <?php 
                                        if($row['diskon']==0){
                                            echo "<div><small><i><font style='font-family:roboto; color:#fff;'> normal price</font></i></small></div>";
                                        }else{
                                            ?>
                                            <div style="text-decoration: line-through;"><?= buatRupiah($row['diskon']); ?></div>
                                        <?php } ?>
                                    </div>
                                    <div class="box-tocart d-flex">
                                        <div class="product-addto-links clearfix">
                                            <a class="compare" onClick="window.location.reload();"></a>
                                        </div>
                                    </div>
                                    <div class="product-share">
                                        <ul>
                                            <li class="categories-title">Share :</li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-twitter icons"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-tumblr icons"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-facebook icons"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-social-linkedin icons"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="product__info__detailed">
                                <div class="pro_details_nav nav justify-content-start" role="tablist">
                                    <a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab" style="color: #fff">Details</a>
                                </div>
                                <div class="tab__container">
                                    <!-- Start Single Tab Content -->
                                    <div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
                                        <div class="description__attribute">
                                            <p style="color: #fff"><?= $row['deskripsi'];?></p>
                                        </div>
                                    </div>
                                    <!-- End Single Tab Content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>