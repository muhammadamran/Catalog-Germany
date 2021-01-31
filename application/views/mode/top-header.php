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
                        <li><a href="<?php echo base_url()."w_shop"; ?>">Product</a></li>
                        <li><a href="<?php echo base_url()."w_tentangkami"; ?>">About Company</a></li>
                        <li><a href="#">|</a></li>
                        <li><a href="#"><?= $data->no_telpon; ?></a></li>
                        <li><a href="#"><?= $data->email; ?></a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-8 col-sm-8 col-5 col-lg-2">
                <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
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
                                                <span><a href="<?php echo base_url()?>home" target="_blank" title="Home">Admin Panel</a></span>
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
                        <li><a href="<?php echo base_url()."w_shop"; ?>">Product</a></li>
                        <li><a href="<?php echo base_url()."w_tentangkami"; ?>">About Company</a></li>
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