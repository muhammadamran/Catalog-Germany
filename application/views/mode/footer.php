		<hr>
		<section class="wn__newsletter__area" style="background-color: #c8a587;">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 offset-lg-5 col-md-12 col-12 ptb--150">
						<div class="section__title text-center">
							<h2 style="color: #000">Stay with us</h2>
						</div>
						<div class="newsletter__block text-center">
							<p>Subscribe to our newsletter now and keep up with the latest developments with new collections, the latest lookbooks and exclusive offers.</p>
							<form action="#">
								<div class="newsletter__box">
									<input type="email" placeholder="Enter your e-mail">
									<button>Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
			<div class="footer-static-top" style="background-color: #000; color: #fff">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer__widget footer__menu">
								<div class="ft__logo">
									<a href="<?php echo base_url()."w_home"; ?>">
										<img src="<?php echo base_url().'assets/img/logo/'.$data->logo;?>" class="footer-logo" alt="logo">
									</a>
									<p><?php echo $data->slogan; ?></p>
								</div>
								<hr>
								<br>
								<div class="footer__content">
									<div align="center">
										<label>Visit our social media below</label>
									</div>
									<ul class="social__net social__net--2 d-flex justify-content-center">
										<li><a href="#"><i class="bi bi-facebook"></i></a></li>
										<!-- <li><a href="<?php echo $data->link_fb; ?>" target="_blank"><img src="<?php echo base_url('mode/images/icons/facebook.png');?>" class="gambar-icon"></a></li> -->
										<li><a href="#"><i class="bi bi-google"></i></a></li>
										<!-- <li><a href="<?php echo $data->link_instagram; ?>" target="_blank"><img src="<?php echo base_url('mode/images/icons/instagram.png');?>" class="gambar-icon"></a></li> -->
										<li><a href="#"><i class="bi bi-twitter"></i></a></li>
										<!-- <li><a href="<?php echo $data->link_twitter; ?>" target="_blank"><img src="<?php echo base_url('mode/images/icons/twitter.png');?>" class="gambar-icon"></a></li> -->
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright__wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="copyright">
								<div class="copy__right__inner text-left">
									<p>Copyright <i class="fa fa-copyright"></i> 2021-<?php echo date('Y'); ?> <a href="mailto:amranhakimsiregar@gmail.com" target="_blank">Powered by. M x M | <?php echo $data->footer ?></a> All Rights Reserved</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<div id="quickview-wrapper">
			<!-- Modal -->
			<!-- NOTIF -->
			<div class="modal fade" id="notif" tabindex="-1" role="dialog">
		        <div class="modal-dialog modal__container_sign" role="document">
		            <div class="modal-content-xl">
		                <div class="modal-header modal__header">
		                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                </div>
		                <div class="modal-body">
		                    <div class="modal-product">
								<div class="container">
									<div class="row">
										<div class="col-lg-12 col-12">
											<div class="contact-form-wrap">
												<h2 class="contact__title">Notifikasi</h2>
												<table>
													<!-- <?php
													$con=mysqli_connect("localhost","knidcore_admin","Flatrone2241","knidcore_mandiri");
													if (mysqli_connect_errno())
													{
														echo "Failed to connect to MySQL: " . mysqli_connect_error();
													}
													$sesi_ker = $this->session->userdata("id_user");
													$query = mysqli_query($con,"SELECT a.id,a.id_user,a.id_transaksi,a.kode_transaksi,a.status,a.tanggal,
																				b.id_user,b.nama_depan,b.nama_belakang,
																				c.id_transaksi,c.kode_transaksi
																				FROM tbl_notif a 
																				JOIN tbl_users b
																				ON a.id_user=b.id_user
																				JOIN tbl_transaksi c
																				ON a.kode_transaksi=c.kode_transaksi
																				WHERE a.id_user='$sesi_ker'
																				ORDER BY a.id");
													$notif=mysqli_fetch_assoc($query);
													?>
													<thead>
														<tr>
															<th><?= $notif['kode_transaksi']; ?></th>
														</tr>
													</thead> -->
													<tbody>
														<?php
														$query = mysqli_query($con,"SELECT a.kode_transaksi,a.id_produk,a.jumlah,a.size,a.harga,a.catatan,a.status,a.date_add,
																					b.id AS idtrans,b.id_transaksi,b.id_user,b.kode_transaksi,b.alamat,b.kodepos,b.status_transaksi,
																					c.id_user,c.nama_depan,c.nama_belakang,
																					d.id,d.nama_produk,d.harga,d.diskon
																					FROM tbl_keranjang a
																					JOIN tbl_transaksi b 
																					ON a.kode_transaksi=b.id_transaksi 
																					JOIN tbl_users c 
																					ON c.id_user=b.id_user 
																					JOIN tbl_produk d 
																					ON a.id_produk=d.id 
																					WHERE b.id_user='$sesi_ker' GROUP BY b.kode_transaksi");

														if(mysqli_num_rows($query)>0){
															while($rownotif = mysqli_fetch_array($query))
															{
														?>
														<tr>
															<!-- <td>Silahkan lakukan pembayaran pada pemesanan dengan<br><b>No. Invoice <?= $rownotif['kode_transaksi']; ?></b></td> -->
															<td>
															<?php if($rownotif['status_transaksi']=1){?>
																Silahkan lakukan pembayaran pada pemesanan dengan<br><b>No. Invoice <?= $rownotif['kode_transaksi']; ?>
															<?php }elseif($rownotif['status_transaksi']=2){ ?>
																Pemesanan Dikonfirmasi & Pemesanan Sedang Diproses oleh SERAGAMPOS dengan<br><b>No. Invoice <?= $rownotif['kode_transaksi']; ?>
															<?php }elseif($rownotif['status_transaksi']=3){ ?>
																Pemesanan Dibatalkan oleh SERAGAMPOS dengan<br><b>No. Invoice <?= $rownotif['kode_transaksi']; ?>
															<?php }elseif($rownotif['status_transaksi']=4){ ?>
																Pemesanan Sedang Dikirim oleh SERAGAMPOS dengan<br><b>No. Invoice <?= $rownotif['kode_transaksi']; ?>
															<?php }elseif($rownotif['status_transaksi']=5){ ?>
																Pemesanan Selesai dengan<br><b>No. Invoice <?= $rownotif['kode_transaksi']; ?>
															<?php } ?>
															</td>
															<td><a class="btn-inv" href="<?= base_url('w_checkout/indexdinvoice?id=')?><?=$rownotif['idtrans'];?>" target="_blank">Lihat</a></td>
														</tr>
														<?php } } mysqli_close($con); ?>
													</tbody>	
												</table>
											</div>
										</div>
									</div>
								</div>
		                    </div>
		                </div>
		            </div>
		        </div>
			</div>
			<!-- END NOTIF -->
			<!-- LOGIN -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog">
		        <div class="modal-dialog modal__container_sign" role="document">
		            <div class="modal-content">
		                <div class="modal-header modal__header">
		                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                </div>
		                <div class="modal-body">
		                    <div class="modal-product">
								<div class="container">
									<div class="row">
										<div class="col-lg-12 col-12">
											<div class="contact-form-wrap">
												<h2 class="contact__title">Sign In</h2>
												<p>Please email name and password that you have created. </p>
												<form action="<?= base_url('w_home/aksi_login');?>" method="post">
													<div class="single-contact-form space-between">
														<input type="email" name="username" placeholder="Email*">
														<input type="password" name="password" placeholder="Password*">
													</div>
													<p>Please <font style="color:#caae8f"><a data-toggle="modal" title="Create An Account" href="#daftar"><b>CREATE AN ACCOUNT</b></a></font> If you don't have an account</p>
													<div class="contact-btn">
														<button type="submit" name="submit">Sign In</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
		                    </div>
		                </div>
		            </div>
		        </div>
			</div>
			<!-- END LOGIN -->
			<!-- DAFTAR -->
			<div class="modal fade" id="daftar" tabindex="-1" role="dialog">
		        <div class="modal-dialog modal__container_sign" role="document">
		            <div class="modal-content">
		                <div class="modal-header modal__header">
		                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                </div>
		                <div class="modal-body">
		                    <div class="modal-product">
								<div class="container">
									<div class="row">
										<div class="col-lg-12 col-12">
											<div class="contact-form-wrap">
												<h2 class="contact__title">Create An Account</h2>
												<p>Please Create Your Account here and will be active as a member to place an order. </p>
												<form action="<?= base_url('w_home/create_account');?>" method="post">
													<div class="single-contact-form space-between">
														<input type="text" name="nama_depan" placeholder="First Name*">
														<input type="text" name="nama_belakang" placeholder="Last Name*">
													</div>
													<div class="single-contact-form space-between">
														<input type="email" name="email" placeholder="Email*">
														<input type="text" name="no_hp" placeholder="No. Handphone*">
													</div>
													<div class="single-contact-form space-between">
														<input type="password" name="password" id="password" data-toggle="password" placeholder="Password*">
														<input type="password" name="password" id="konfirmasi_password" placeholder="Confirm Password*">
														<input type="hidden" name="role" value="Member">
														<input type="hidden" name="status" value="1">
														<input type="hidden" name="created_at" value="<?php echo date('Y-m-d h:m:i') ?>">
													</div>
													<div class="contact-btn">
														<p>Silahkan <font style="color:#caae8f"><a data-toggle="modal" title="Create An Account" href="#daftar"><b>SIGN IN</b></a></font> If you already have an account</p>
														<button type="submit">Create An Account</button>
													</div>
												</form>
											</div> 
											<div class="form-output">
												<p class="form-messege">
											</div>
										</div>
									</div>
								</div>
		                    </div>
		                </div>
		            </div>
		        </div>
			</div>
			<!-- END DAFTAR -->
			<?php
                $con=mysqli_connect("localhost","knidcore_admin","Flatrone2241","knidcore_mandiri");
                if (mysqli_connect_errno())
                {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $result = mysqli_query($con,"SELECT * FROM tbl_produk");
                
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_array($result))
                    {
            ?>
			<div class="modal fade" id="productmodal<?php echo $row['id'];?>" tabindex="-1" role="dialog">
		        <div class="modal-dialog modal__container" role="document">
		            <div class="modal-content">
		                <div class="modal-header modal__header">
		                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		                </div>
		                <div class="modal-body">
		                    <div class="modal-product">
								<div class="product__thumb">
									<a class="first__img" href="#"><img src="<?php echo base_url().'assets/img/produk/cover/'.$row['cover'];?>" alt="product image"></a>
									<!-- <a class="second__img animation1" href="#"><img src="<?php echo base_url('assets/img/produk/cover/dua.png');?>" alt="product image"></a> -->
								</div>
		                        <!-- <div class="product-images">
		                            <div class="main-image images">
		                                <img alt="big images" src="<?php echo base_url('mode/images/product/big-img/1.jpg');?>">
		                            </div>
		                        </div> -->
		                        <div class="product-info">
		                            <h1><?php echo $row['nama_produk'];?></h1>
		                            <div class="price-box-3">
		                                <div class="s-price-box">
		                                    <span class="new-price"><?php echo buatRupiah($row['harga']); ?></span>
											<?php 
											if($row['diskon']==0){
												echo "<span class='new-price'><small><i><font style='font-family:roboto; color:black;'> Harga Normal</font></i></small></span>";
											}else{
											?>
		                                    <span class="old-price"><?php echo buatRupiah($row['diskon']); ?></span>
											<?php } ?>
		                                </div>
		                            </div>
		                            <div class="quick-desc">
									<hr>
										<?php echo $row['deskripsi'];?>
		                            </div>
		                            <!-- <div class="select__color">
		                                <h2>Select color</h2>
		                                <ul class="color__list">
		                                    <li class="red"><a title="Red" href="#">Red</a></li>
		                                    <li class="gold"><a title="Gold" href="#">Gold</a></li>
		                                    <li class="orange"><a title="Orange" href="#">Orange</a></li>
		                                    <li class="orange"><a title="Orange" href="#">Orange</a></li>
		                                </ul>
		                            </div>
		                            <div class="select__size">
		                                <h2>Select size</h2>
		                                <ul class="color__list">
		                                    <li class="l__size"><a title="L" href="#">L</a></li>
		                                    <li class="m__size"><a title="M" href="#">M</a></li>
		                                    <li class="s__size"><a title="S" href="#">S</a></li>
		                                    <li class="xl__size"><a title="XL" href="#">XL</a></li>
		                                    <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
		                                </ul>
		                            </div> -->
		                            <div class="social-sharing">
		                                <div class="widget widget_socialsharing_widget">
		                                    <h3 class="widget-title-modal">Share this product</h3>
		                                    <ul class="social__net social__net--2 d-flex justify-content-start">
		                                        <li class="facebook"><a href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
		                                        <li class="linkedin"><a href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
		                                        <li class="pinterest"><a href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
		                                        <li class="tumblr"><a href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
		                                    </ul>
		                                </div>
		                            </div>
		                            <!-- <div class="addtocart-btn">
		                                <a href="#">Add to cart</a>
		                            </div> -->
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
            <?php } } mysqli_close($con); ?>
		</div>
	</div>
	<script src="<?php echo base_url('mode/js/vendor/jquery-3.2.1.min.js');?>"></script>
	<script src="<?php echo base_url('mode/js/popper.min.js');?>"></script>
	<script src="<?php echo base_url('mode/js/bootstrap.min.js');?>"></script>
	<script src="<?php echo base_url('mode/js/plugins.js');?>"></script>
	<script src="<?php echo base_url('mode/js/active.js');?>"></script>
	<!-- WhatsHelp.io widget -->
	<style>
	.mybuttonWA {
		margin:0;
		padding:0;
		text-align:center;
		position:fixed;
		bottom:111px;
		right: 35px;
		z-index: 999;
	}

	.buttonWA {
		font-size: 17px;
		color: #fff;
		background: #147916;
		padding: 10px;
		margin: 0;
		overflow: hidden;
		border-radius: 3px;
		text-decoration: none;
		border-block-color: blue;
		border: blanchedalmond;
		}

	.mybuttonWA .buttonWA:hover{
		background:#1e3135;
		color: #fff;
		}
	</style>
	<div class="mybuttonWA">
	<a class="buttonWA" href="https://api.whatsapp.com/send?phone=<?= $data->no_telpon;?>&amp;text=Hallo" rel="nofollow" target="_blank"><i class="fa fa-whatsapp"> </i> WhatsApp</a></div>
	<!-- <script type="text/javascript">
		(function () {
			var options = {
				whatsapp: "+628383XXXXXXX", // WhatsApp number
				call_to_action: "Message us", // Call to action
				position: "right", // Position may be 'right' or 'left'
			};
			var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
			var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
			s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
			var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
		})();
	</script> -->
	<!-- /WhatsHelp.io widget -->
	<!-- WHATSAPP -->
	<!--Jquery-->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
	<script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>
	<script>
		$(function() {
		$('#WAButton').floatingWhatsApp({
			phone: '1231231231',
			headerTitle: 'Chat with us on WhatsApp!',
			popupMessage: 'Hello, how can we help you?',
			showPopup: true, 
			buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
			position: "left"    
		});
		});
	</script> -->
	<!-- ADMINLTE -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script> -->
	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password").onchange = validatePassword;
			document.getElementById("konfirmasi_password").onchange = validatePassword;
		}

		function validatePassword(){
		var pass2=document.getElementById("konfirmasi_password").value;
		var pass1=document.getElementById("password").value;
		console.log(pass2);
		console.log(pass1);
		console.log(pass1!=pass2);
		
		if(pass1.length >= 6)
			document.getElementById("password").setCustomValidity('');
		else
			document.getElementById("password").setCustomValidity("Password Kurang dari 6 character");
		

		if(pass1!=pass2)
			document.getElementById("konfirmasi_password").setCustomValidity("Password Tidak Sama, Coba Lagi");
		else
			document.getElementById("konfirmasi_password").setCustomValidity('');
		}
	</script>
	<!-- PRELOADER -->
	<script>
	$(document).ready(function(){
	$(".preloader").fadeOut();
	})
	</script>
</body>
</html>