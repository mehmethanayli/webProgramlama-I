<?php

include("header.php");
?>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Uygulama Form</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row justify-content-center">

							<div class="col-lg-8">
								<div class="contact-wrap">
									<div id="form-message-warning" class="mb-4 w-100 text-center"></div>
									<div id="form-message-success" class="mb-4 w-100 text-center">
										Your message was sent, thank you!
									</div>
									<form action="" method="GET" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="number" min="0" max="100" class="form-control" name="vize" placeholder="Vize Notu">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="number" min="0" max="100" class="form-control" name="final" placeholder="Final Notu">
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Hesapla" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>


									<?php

									$vize 	= $_GET["vize"];
									$final 	= $_GET["final"];

									$not = ($vize * 0.3) + ($final * 0.7);

									if (@$not) { ?>
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" value="<?php echo $not; ?>" class="form-control" name="final" placeholder="Final Notu">
											</div>
										</div>



									<?php } ?>



								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php







	include("footer.php");
	?>