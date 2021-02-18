<!-- VIEW ALL PRODUCT -->
<section class="wn__product__area brown--color pt--80  pb--30" style="background-color: #000; color: #fff">
    <div class="container">
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