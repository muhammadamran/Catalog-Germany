<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-7 col-lg-2">
                <div class="logo">
                    <a href="<?php echo base_url()."w_home"; ?>">
                        <img src="<?php echo base_url().'assets/img/logo/'.$data->logo;?>" class="logo-tp" alt="logo images">
                        <!-- <font style="color: #ffff; font-size:small;"><b><?php echo $data->nama_perusahaan; ?></b></font> -->
                    </a>
                </div>
            </div>
            <div class="col-lg-8 d-none d-lg-block">
                <nav class="mainmenu__nav">
                    <ul class="meninmenu d-flex justify-content-start">
                        <li class="drop with--one--item"><a href="<?php echo base_url()."w_home"; ?>">Home</a></li>
                        <li class="drop"><a href="#">Atasan</a>
                            <div class="megamenu mega03">
                                <ul class="item item03">
                                    <li class="title">KEMEJA</li>
                                    <li><a href="<?php echo base_url()."w_shop/kemeja_pos"; ?>">Kemeja POS Giro</a></li>
                                    <li><a href="<?php echo base_url()."w_shop/kemeja_bumn"; ?>">Kemeja BUMN</a></li>
                                    <li><a href="<?php echo base_url()."w_shop/kemeja_kantor"; ?>">Kemeja Kantor</a></li>
                                </ul>
                                <ul class="item item03">
                                    <li class="title">KAOS</li>
                                    <li><a href="<?php echo base_url()."w_shop/kaos"; ?>">Kaos</a></li>
                                </ul>
                                <ul class="item item03">
                                    <li class="title">JAKET</li>
                                    <li><a href="<?php echo base_url()."w_shop/jaket_pos"; ?>">Jaket POS</a></li>
                                    <li><a href="<?php echo base_url()."w_shop/jaket_bumn"; ?>">Jaket BUMN</a></li>
                                    <li><a href="<?php echo base_url()."w_shop/jaket_olahraga"; ?>">Jaket Olahraga</a></li>
                                    <li><a href="<?php echo base_url()."w_shop/jaket_gunung"; ?>">Jaket Gunung</a></li>
                                </ul>
                                <ul class="item item03">
                                    <li class="title">POLO</li>
                                    <li><a href="<?php echo base_url()."w_shop/polo_pos"; ?>">Polo Shirt Wesel POS</a></li>
                                    <li><a href="<?php echo base_url()."w_shop/polo_bumn"; ?>">Polo Shirt BUMN</a></li>
                                    <li><a href="<?php echo base_url()."w_shop/polo_pgm"; ?>">Polo Shirt PGM</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="drop"><a href="#">Bawahan</a>
                            <div class="megamenu mega01">
                                <ul class="item item01">
                                    <li class="title">Celana</li>
                                    <li><a href="<?php echo base_url()."w_shop/celana_jeans"; ?>">Celana Jeans</a></li>
                                    <li><a href="<?php echo base_url()."w_shop/celana_chino"; ?>">Celana Chino</a></li>
                                    <li><a href="<?php echo base_url()."w_shop/celana_olahraga"; ?>">Celana Olahraga</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="drop"><a href="#">Aksesories</a>
                            <div class="megamenu mega02">
                                <ul class="item item02">
                                    <li class="title">Topi</li>
                                    <li><a href="<?php echo base_url()."w_shop/topi_pos"; ?>">Topi POS</a></li>
                                    <li><a href="<?php echo base_url()."w_shop/topi_bumn"; ?>">Topi BUMN</a></li>
                                    <li><a href="<?php echo base_url()."w_shop/topi_pgm"; ?>">Topi PGM</a></li>
                                </ul>
                                <ul class="item item02">
                                    <li class="title">Souvenir</li>
                                    <li><a href="<?php echo base_url()."w_shop/souve_tag"; ?>">Name TAG</a></li>
                                    <li><a href="<?php echo base_url()."w_shop/souve_card"; ?>">ID Card</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="<?php echo base_url()."w_tentangkami"; ?>">Tentang Kami</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-8 col-sm-8 col-5 col-lg-2">
                <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                    <!-- <li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun"></span></a> -->
                    <!-- <li class="notifikasi"><a href="<?php echo base_url()."w_love"; ?>"></a></li> -->
                    <!-- <li class="wishlist"><a href="<?php echo base_url()."w_love"; ?>"></a></li> -->
                    <?php
                    $con=mysqli_connect("localhost","root","","db_seragampos");
                    if (mysqli_connect_errno())
                    {
                        echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }
                    // $query = mysqli_query($con,"SELECT * FROM tbl_keranjang WHERE id=".$_GET['id']."");
                    $sesi_ker = $this->session->userdata("id_user");
                    $query = mysqli_query($con,"SELECT * FROM tbl_keranjang WHERE id_user='$sesi_ker' AND status='0' ORDER BY id ");
                    $rowker=mysqli_fetch_assoc($query);

                    $query = mysqli_query($con,"SELECT a.id,a.kode_transaksi,a.id_user,a.id_produk,a.catatan,a.jumlah,a.harga,a.status,a.date_add,a.size,
                                                       b.id_user,b.email,b.nama_depan,b.nama_belakang,b.no_hp,b.username,b.password,b.image,b.role,b.status,b.created_at,
                                                       c.id,c.nama_produk,c.kd_kategori,c.deskripsi,c.cover,c.gambar,c.status,c.harga,c.berat,c.stok,c.diskon,c.created_at 
                                                       FROM tbl_keranjang a 
                                                       JOIN tbl_users b 
                                                       ON a.id_user=b.id_user 
                                                       JOIN tbl_produk c 
                                                       ON a.id_produk=c.id 
                                                       WHERE a.id_user='$sesi_ker' AND a.status='0' 
                                                       ORDER BY a.id ");
                    $rowker1=mysqli_fetch_assoc($query);

                    $querycount = mysqli_query($con,"SELECT COUNT(a.id) AS jumlah_ker,a.id,a.kode_transaksi,a.id_user,a.id_produk,a.catatan,a.jumlah,a.harga,a.status,a.date_add,a.size,
                                                            b.id_user,b.email,b.nama_depan,b.nama_belakang,b.no_hp,b.username,b.password,b.image,b.role,b.status,b.created_at,
                                                            c.id,c.nama_produk,c.kd_kategori,c.deskripsi,c.cover,c.gambar,c.status,c.harga,c.berat,c.stok,c.diskon,c.created_at 
                                                            FROM tbl_keranjang a 
                                                            JOIN tbl_users b 
                                                            ON a.id_user=b.id_user 
                                                            JOIN tbl_produk c 
                                                            ON a.id_produk=c.id 
                                                            WHERE a.id_user='$sesi_ker' AND a.status='0' 
                                                            ORDER BY a.id ");
                    $rowker2=mysqli_fetch_assoc($querycount);

                    $queryjumker = mysqli_query($con,"SELECT id_produk, SUM(harga) AS jumlah_harga_ker
                                                      FROM tbl_keranjang 
                                                      WHERE id_user='$sesi_ker' AND status='0'
                                                      ORDER BY id ");
                    $rowker3=mysqli_fetch_assoc($queryjumker);
                    
                    $querytransaksi = mysqli_query($con,"SELECT COUNT(*) AS jumnotif FROM tbl_notif WHERE id_user='$sesi_ker'");
                    $rowtransaksi=mysqli_fetch_assoc($querytransaksi);
                    
                    ?>
                    <!-- NOTIF -->
                    <li class="notif"><a class="notif_active" data-toggle="modal" title="Notifikasi" href="#notif"><span class="product_notif"><?= $rowtransaksi['jumnotif']; ?></span></a> </li>
                    <!-- END NOTIF -->
                    <!-- KERANGJANG -->
                    <li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun"><?= $rowker2['jumlah_ker']; ?></span></a>
                        <!-- Start Shopping Cart -->
                        <div class="block-minicart minicart__active">
                            <div class="minicart-content-wrapper">
                                <div class="micart__close">
                                    <span>Tutup</span>
                                </div>
                                <div class="items-total d-flex justify-content-between">
                                    <span><?= $rowker2['jumlah_ker']; ?> items</span>
                                    <span>Total Harga</span>
                                </div>
                                <div class="total_amount text-right">
                                    <span><?= buatRupiah($rowker3['jumlah_harga_ker']); ?></span>
                                </div>
                                <div class="mini_action checkout">
                                    <?php if($rowker) { ?>
                                        <a class="checkout__btn" href="<?php echo base_url()."w_checkout"; ?>">Beli (<?= $rowker2['jumlah_ker']; ?>)</a>
                                    <?php }else{ ?>
                                        <h5>Tidak Ada Produk Yang Dipesan</h5>
                                    <?php } ?>
                                </div>
                                <div class="single__items">
                                    <div class="miniproduct">
                                        <!-- VIEW KERANJANG -->
                                        <?php
                                        $query = mysqli_query($con,"SELECT a.id AS idker,a.kode_transaksi,a.id_user,a.id_produk,a.catatan,a.jumlah,a.harga,a.status,a.date_add,a.size,
                                                                            b.id,b.nama_produk,b.kd_kategori,b.deskripsi,b.cover,b.gambar,b.status,b.harga,b.berat,b.stok,b.diskon,b.created_at
                                                                    FROM tbl_keranjang a JOIN tbl_produk b
                                                                    ON a.id_produk=b.id
                                                                    WHERE a.id_user='$sesi_ker' AND a.status='0' 
                                                                    ORDER BY idker ");

                                        if(mysqli_num_rows($query)>0){
                                            while($rowkerview = mysqli_fetch_array($query))
                                            {
                                        ?>
                                        <div class="item01 d-flex">
                                            <div class="thumb">
                                                <a href="product-details.html">
                                                    <img src="<?php echo base_url().'assets/img/produk/cover/'.$rowkerview['cover'];?>" alt="product images">
                                                    <!-- <img src="<?php echo base_url('mode/images/product/sm-img/1.jpg');?>" alt="product images"> -->
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h6><a href="product-details.html"><?= $rowkerview['nama_produk'];?></a></h6>
                                                <span class="prize"><?= buatRupiah($rowkerview['harga']);?></span>
                                                <div class="product_prize d-flex justify-content-between">
                                                    <span class="qun">Qty: <?= $rowkerview['jumlah'];?></span>
                                                    <span class="qun">Size: <?= $rowkerview['size'];?></span>
                                                    <ul class="d-flex justify-content-end">
                                                        <li>
                                                            <a href="<?= base_url('w_product/hapus/'.$rowkerview['idker']);?>" title="Hapus Item (<?= $rowkerview['idker'];?>)">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END VIEW KERANJANG -->
                                        <?php } } mysqli_close($con); ?>
                                    </div>
                                </div>
                                <!-- <div class="mini_action cart">
                                    <a class="cart__btn" href="cart.html">View and edit cart</a>
                                </div> -->
                            </div>
                        </div>
                        <!-- End Shopping Cart -->
                    </li>
                    <!-- END KERANJANG -->
                    <li class="setting__bar__icon"><a class="setting__active" href="#"></a>
                        <div class="searchbar__content setting__block">
                            <div class="content-inner">
                                <?php if ($this->session->userdata("role")==NULL) { ?>
                                <div class="switcher-currency">
                                    <strong class="label switcher-label">
                                        <span>SIGN IN / CREATE AN ACCOUNT</span>
                                    </strong>
                                    <div class="switcher-options">
                                        <div class="switcher-currency-trigger">
                                            <div class="setting__menu">
                                                <span><a data-toggle="modal" title="Sign In" href="#login">Sign In</a></span>
                                                <span><a data-toggle="modal" title="Create An Account" href="#daftar">Create An Account</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if ($this->session->userdata("role")== 'Member') { ?>
                                <div class="switcher-currency">
                                    <strong class="label switcher-label">
                                        <span>My Account</span>
                                    </strong>
                                    <div class="switcher-options">
                                        <div class="switcher-currency-trigger">
                                            <div class="setting__menu">
                                                <span><a href="#"><?php echo $this->session->userdata("nama_depan");?> <?php echo $this->session->userdata("nama_belakang");?></a></span>
                                                <span><a href="<?php echo base_url()?>w_home/logout" title="Log Out">Log Out</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if ($this->session->userdata("role")== 'Superadmin') { ?>
                                <div class="switcher-currency">
                                    <strong class="label switcher-label">
                                        <span>My Account</span>
                                    </strong>
                                    <div class="switcher-options">
                                        <div class="switcher-currency-trigger">
                                            <div class="setting__menu">
                                                <span><a href="#"><?php echo $this->session->userdata("nama_depan");?> <?php echo $this->session->userdata("nama_belakang");?></a></span>
                                                <span><a href="<?php echo base_url()?>home" target="_blank" title="Home">Admin LTE</a></span>
                                                <span><a href="<?php echo base_url()?>w_home/logout" title="Log Out">Log Out</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if ($this->session->userdata("role")== 'Admin') { ?>
                                <div class="switcher-currency">
                                    <strong class="label switcher-label">
                                        <span>My Account</span>
                                    </strong>
                                    <div class="switcher-options">
                                        <div class="switcher-currency-trigger">
                                            <div class="setting__menu">
                                                <span><a href="#"><?php echo $this->session->userdata("nama_depan");?> <?php echo $this->session->userdata("nama_belakang");?></a></span>
                                                <span><a href="<?php echo base_url()?>home" target="_blank" title="Home">Admin LTE</a></span>
                                                <span><a href="<?php echo base_url()?>w_home/logout" title="Log Out">Log Out</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Start Mobile Menu -->
        <div class="row d-none">
            <div class="col-lg-12 d-none">
                <nav class="mobilemenu__nav">
                    <ul class="meninmenu">
                        <li><a href="<?php echo base_url()."w_home"; ?>">Home</a></li>
                        <li><a href="#">Atasan</a>
                            <ul>
                                <li><a href="<?php echo base_url()."w_shop/kemeja"; ?>">Kemeja</a>
                                    <ul>
                                        <li><a href="<?php echo base_url()."w_shop/kemeja_pos"; ?>">Kemeja POS Giro</a></li>
                                        <li><a href="<?php echo base_url()."w_shop/kemeja_bumn"; ?>">Kemeja BUMN</a></li>
                                        <li><a href="<?php echo base_url()."w_shop/kemeja_kantor"; ?>">Kemeja Kantor</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url()."w_shop/kaos"; ?>">Kaos</a></li>
                                <li><a href="<?php echo base_url()."w_shop/jaket"; ?>">Jaket</a>
                                    <ul>
                                        <li><a href="<?php echo base_url()."w_shop/jaket_pos"; ?>">Jaket POS</a></li>
                                        <li><a href="<?php echo base_url()."w_shop/jaket_bumn"; ?>">Jaket BUMN</a></li>
                                        <li><a href="<?php echo base_url()."w_shop/jaket_olahraga"; ?>">Jaket Olahraga</a></li>
                                        <li><a href="<?php echo base_url()."w_shop/jaket_gunung"; ?>">Jaket Gunung</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url()."w_shop/polo"; ?>">Polo</a>
                                    <ul>
                                        <li><a href="<?php echo base_url()."w_shop/polo_pos"; ?>">Polo Shirt Wesel POS</a></li>
                                        <li><a href="<?php echo base_url()."w_shop/polo_bumn"; ?>">Polo Shirt BUMN</a></li>
                                        <li><a href="<?php echo base_url()."w_shop/polo_pgm"; ?>">Polo Shirt PGM</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Bawahan</a>
                            <ul>
                                <li><a href="<?php echo base_url()."w_shop/celana"; ?>">Celana</a>
                                    <ul>
                                        <li><a href="<?php echo base_url()."w_shop/celana_jeans"; ?>">Celana Jeans</a></li>
                                        <li><a href="<?php echo base_url()."w_shop/celana_chino"; ?>">Celana Chino</a></li>
                                        <li><a href="<?php echo base_url()."w_shop/celana_olahraga"; ?>">Celana Olahraga</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Aksesories</a>
                            <ul>
                                <li><a href="<?php echo base_url()."w_shop/topi"; ?>">Topi</a>
                                    <ul>
                                        <li><a href="<?php echo base_url()."w_shop/topi_pos"; ?>">Topi POS</a></li>
                                        <li><a href="<?php echo base_url()."w_shop/topi_bumn"; ?>">Topi BUMN</a></li>
                                        <li><a href="<?php echo base_url()."w_shop/topi_pgm"; ?>">Topi PGM</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url()."w_shop/souve"; ?>">Souvenir</a>
                                    <ul>
                                        <li><a href="<?php echo base_url()."w_shop/souve_tag"; ?>">Name TAG</a></li>
                                        <li><a href="<?php echo base_url()."w_shop/souve_card"; ?>">ID Card</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url()."w_tentangkami"; ?>">Tentang Kami</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End Mobile Menu -->
        <div class="mobile-menu d-block d-lg-none">
        </div>
        <!-- Mobile Menu -->	
    </div>		
</header>
<div class="box-search-content search_active block-bg close__top">
	<form id="search_mini_form" class="minisearch" action="#">
		<div class="field__search">
			<input type="text" placeholder="Cari disini...">
			<div class="action">
				<a href="#"><i class="zmdi zmdi-search"></i></a>
			</div>
		</div>
	</form>
	<div class="close__wrap">
		<span>close</span>
	</div>
</div>