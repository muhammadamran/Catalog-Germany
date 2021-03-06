<?= $this->session->flashdata('notif_kritiksaran')?>
<div class="ht__bradcaump__area" style="background-color: #000;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bradcaump__inner text-center">
					<h2 class="bradcaump-title">About Company</h2>
					<nav class="bradcaump-content">
						<a class="breadcrumb_item" href="<?= base_url()."w_home"; ?>">Home</a>
						<span class="brd-separetor">/</span>
						<span class="breadcrumb_item active">About Company</span>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="wn_contact_area bg--white pt--80 pb--80">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-12">
				<div class="contact-form-wrap">
					<h2 class="contact__title">Criticism & Suggestions</h2>
					<form action="w_tentangkami/create" method="post">
						<div class="single-contact-form space-between">
							<input type="text" name="nama_depan" placeholder="Fist Name*">
							<input type="text" name="nama_belakang" placeholder="Last Name*">
						</div>
						<div class="single-contact-form space-between">
							<input type="email" name="email" placeholder="Email*">
						</div>
						<div class="single-contact-form">
							<input type="text" name="subject" placeholder="Subject*">
							<input type="hidden" name="created_at" value="<?= date('Y-m-d h:m:i') ?>">
						</div>
						<div class="single-contact-form message">
							<textarea name="pesan" placeholder="Write your criticism and suggestions here..."></textarea>
						</div>
						<div class="contact-btn">
							<button type="submit">Send</button>
						</div>
					</form>
				</div> 
				<div class="form-output">
					<p class="form-messege">
				</div>
			</div>
			<div class="col-lg-4 col-12 md-mt-40 sm-mt-40">
				<div class="wn__address">
					<h2 class="contact__title">Information Company</h2>
					<p><?= $data->slogan;?> </p>
					<div class="wn__addres__wreapper">
						<div class="single__address">
							<i class="icon-phone icons"></i>
							<div class="content">
								<span>Telephone:</span>
								<p><?= $data->no_telpon;?></p>
							</div>
						</div>
						<div class="single__address">
							<i class="icon-envelope icons"></i>
							<div class="content">
								<span>Email:</span>
								<p><?= $data->email;?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>