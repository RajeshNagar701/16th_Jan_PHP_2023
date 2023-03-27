<?php
if(isset($_SESSION['uid']))
{
	echo "
		<script>
		window.location='index';
		</script>
		";
}
include_once('header.php');
?>

<!-- Contact -->
<section class="contact py-5">
	<div class="container py-lg-5">
		<h1 class="heading text-capitalize text-center">Login Us</h1>
		<h5 class="heading mb-5 text-center">Taxi Cab</h5>
		<div class="row agile-contact-form">
			
			<div class="col-md-12 mt-md-0 mt-4 contact-form-right">
				<div class="contact-form-top">
					<h3>Login Us</h3>
				</div>
				<div >
					<form action="" method="post" enctype="multipart/form-data">
						
						<input type="text" name="unm" placeholder="User Name" class="form-control" required=""><br>
						<input type="password" name="pass" placeholder="Password" class="form-control" required=""><br>
						
						
						<input type="submit" class="btn btn-warning" name="submit" value="Submit" class="btn1">
					</form>
				</div>
			</div>
		</div>
				<div class="row top mt-5">
					<div class="col-lg-4 mb-lg-0 mb-4 address-grid">
						<div class="row address-info">
							<div class="col-lg-3 col-sm-2 mb-sm-0 mb-3 address-left">
								<i class="fas fa-map-marker-alt"></i>
							</div>
							<div class="col-lg-9 col-sm-10 address-right text-left">
								<h6>Address</h6>
								<p> 3481 Jack Street Beverly Jack Hills<span> 90210 Block, USA </span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 mb-lg-0 mb-4 address-grid">
						<div class="row address-info">
							<div class="col-lg-3 col-sm-2 mb-sm-0 mb-3 address-left">
								<i class="fas fa-envelope-open"></i>
							</div>
							<div class="col-lg-9 col-sm-10 address-right text-left">
								<h6>Email</h6>
								<p>Email :
									<a href="mailto:example@email.com"> mail@example.com</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-lg-3 col-sm-2 mb-sm-0 mb-3 address-left">
								<i class="fas fa-phone"></i>
							</div>
							<div class="col-lg-9 col-sm-10 address-right text-left">
								<h6>Phone</h6>
								<p>Phone : 112 367 896 2449</p>
								<p>Fax : 112 367 896 2449</p>
								</p>
							</div>
						</div>
					</div>
				</div>
			
	</div>
</section>
<!-- //Contact -->
	
	<?php
include_once('footer.php');
?>