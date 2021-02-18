<?php echo $this->session->flashdata('notif_login_berhasil')?>
<?php echo $this->session->flashdata('notif_login_gagal')?>
<?php echo $this->session->flashdata('notif_create_account')?>
<?php echo $this->session->flashdata('notif_logout')?>
<?php echo $this->session->flashdata('notif_email')?>
<?php echo $this->session->flashdata('notif_keranjang')?>
<?php echo $this->session->flashdata('notif_hapus_keranjang')?>
<!-- SLIDER -->
<style type="text/css">
    /* Background Image */
    .bg-image--1 {
        background-image: url(mode/images/bg/1.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center; 
    }
    .bg-image--2 {
      background-image: url(images/bg/2.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center; 
  }
  .bg-image--3 {
      background-image: url(images/bg/3.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center; 
  }
  .bg-image--4 {
      background-image: url(images/bg/4.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center; 
  }
  .bg-image--5 {
      background-image: url(images/bg/5.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center; 
  }
  .bg-image--6 {
      background-image: url(images/bg/6.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center; 
  }
  .bg-image--7 {
      background-image: url(images/bg/7.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center; 
  }
  .bg-image--8 {
      background-image: url(images/bg/8.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center; 
  }
  .bg-image--9 {
      background-image: url(images/bg/9.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center; 
  }

</style>
<div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
    <!-- Start Single Slide -->
    <div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider__content">
                        <div class="contentbox">
                            <h2>Buy <span>your </span></h2>
                            <h2>favourite <span>Product </span></h2>
                            <h2>from <span>Here </span></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Single Slide -->
</div>
<!-- END SLIDER -->
<!-- NEW PRODUCT -->
<section class="wn__product__area brown--color pt--80  pb--30" style="background-color: #000; color: #fff">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__title text-center">
                    <h2 class="title__be--2">New <span class="color--theme">Product</span></h2>
                    <p>View new product from <b><?php echo $data2->nama_perusahaan ?></p></b>
                </div>
            </div>
        </div>
        <div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">
            <?php
            $con=mysqli_connect("localhost","knidcore_admin","Flatrone2241","knidcore_mandiri");
            if (mysqli_connect_errno())
            {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            $result = mysqli_query($con,"SELECT * FROM tbl_produk WHERE kd_kategori='1'");

            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){ 
            ?>
                <div class="product product__style--3">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product__thumb">
                            <?php echo"<a class='first__img' href='w_product/index?id=$row[id]'>";?><img src="<?php echo base_url().'assets/img/produk/cover/'.$row['cover'];?>" alt="product image"></a>
                            <?php echo" <a class='second__img animation1' href='w_product/index?id=$row[id]'>";?><img src="<?php echo base_url('assets/img/produk/cover/dua.png');?>" alt="product image"></a>
                        </div>
                        <div class="product__content content--center">
                            <h4><a href="single-product.html"><?php echo $row['nama_produk']; ?></a></h4>
                            <ul class="prize d-flex">
                                <li><?php echo buatRupiah($row['harga']); ?></li>
                                <?php 
                                if($row['diskon']==0){
                                    echo "<li><small><i><font style='font-family:roboto; color:#fff;'> normal price</font></i></small></li>";
                                }else{ ?>
                                    <li class="old_prize"><?php echo buatRupiah($row['diskon']); ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php } } mysqli_close($con); ?>
        </div>
    </div>
</section>
<!-- END NEW PRODUCT -->

<!-- VIEW ALL PRODUCT -->
<section class="wn__product__area brown--color pt--80  pb--30" style="background-color: #000; color: #fff">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__title text-center">
                    <h2 class="title__be--2">All <span class="color--theme">Product</span></h2>
                    <p>View all product from <b><?php echo $data2->nama_perusahaan ?></p></b>
                </div>
            </div>
        </div>
        <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg" style="background-color: #000; color: #fff">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 order-1 order-lg-2">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
                                    <div class="shop__list nav justify-content-center" role="tablist">
                                        <a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab__container">
                            <div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
                                <div class="row">
                                    <!-- Start Single Product -->
                                    <?php
                                    $con=mysqli_connect("localhost","knidcore_admin","Flatrone2241","knidcore_mandiri");
                                    if (mysqli_connect_errno())
                                    {
                                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                    }
                                    $result = mysqli_query($con,"SELECT * FROM tbl_produk WHERE kd_kategori='6'");

                                    if(mysqli_num_rows($result)>0){
                                        while($row = mysqli_fetch_array($result)){ 
                                    ?>
                                    <div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="product__thumb">
                                            <?php echo"<a class='first__img' href='w_product/index?id=$row[id]'>";?><img src="<?php echo base_url().'assets/img/produk/cover/'.$row['cover'];?>" alt="product image"></a>
                                            <?php echo" <a class='second__img animation1' href='w_product/index?id=$row[id]'>";?><img src="<?php echo base_url().'assets/img/produk/cover/'.$row['cover'];?>" alt="product image"></a>
                                        </div>
                                        <div class="product__content content--center">
                                            <h4><a href="single-product.html"><?php echo $row['nama_produk']; ?></a></h4>
                                            <ul class="prize d-flex">
                                                <li><?php echo buatRupiah($row['harga']); ?></li>
                                                <?php 
                                                if($row['diskon']==0){
                                                    echo "<li><small><i><font style='font-family:roboto; color:#fff;'> normal price</font></i></small></li>";
                                                }else{ ?>
                                                    <li class="old_prize"><?php echo buatRupiah($row['diskon']); ?></li>
                                                <?php } ?>
                                            </ul>
                                            <div class="product__hover--content">
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } } mysqli_close($con); ?>
                                    <!-- End Single Product -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END VIEW ALL PRODUCT -->