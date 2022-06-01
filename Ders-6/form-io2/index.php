<?php

include("header.php");
include("connect.php");

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

									<!--
										    1- İsim Soyisim
											2- Email 
											3- Telefon
											4- Cinsiyet
											5- Ders (Yazılım Mimarileri, Web Programlama, Sunucu İşletim Sistemleri)
											6- Notunuz
											-->
									<form action="" method="POST" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="nameSurname" placeholder="İsim Soyisim">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="email" placeholder="Email Adresiniz">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="gsm" placeholder="Gsm Numaranız">
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<input type="radio" value="0" name="gender">Erkek<br>
													<input type="radio" value="1" name="gender">Kadın<br>

												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<select name="courses" class="form-control">
														<option value="php">PHP</option>
														<option value="java">java</option>
														<option value="css">Css</option>
														<option selected>Lütfen bir kurs seçiniz.</option>
													</select>


												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<textarea name="description" class="form-control" cols="70" rows="10"></textarea>
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

									<table class="table table-sm table-dark">
										<thead>
											<tr>
												<th scope="col">İd</th>
												<th scope="col">İsim Soyisim</th>
												<th scope="col">Gsm</th>
												<th scope="col">Cinsiyet</th>
												<th scope="col">Kurslar</th>

											</tr>
										</thead>
										<tbody>
											<?php
											$formSorgu = $db->prepare("SELECT * FROM forms ORDER BY id ASC");
											$formSorgu->execute();

											while ($form = $formSorgu->fetch(PDO::FETCH_ASSOC)) {


											?>
												<tr>
													<th scope="row">
														<?php echo $form["id"]; ?>
													</th>
													<td>
														<?php echo $form["nameSurname"]; ?>
													</td>
													<td>
														<?php echo $form["gsm"]; ?>
													</td>
													<td>
														<?php echo ($form["gender"] == 2)   ? "Erkek " : "Kadın"; ?>
													</td>
													<td>
														<?php echo $form["courses"]; ?>
													</td>
												</tr>

											<?php } ?>

										</tbody>
									</table>


								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php


	$nameSurname 	= @$_POST["nameSurname"];
	$email 			= @$_POST["email"];
	$gsm 			= @$_POST["gsm"];
	$gender 		= @$_POST["gender"];
	$courses 		= @$_POST["courses"];
	$description 	= @$_POST["description"];

	$save = $db->prepare("INSERT INTO forms SET
	nameSurname =:nameSurname,
	email		=:email,
	gsm			=:gsm,
	gender		=:gender,
	courses		=:courses,
	description	=:description
	");

	$insert = $save->execute(
		array(
			"nameSurname" 	=> $nameSurname,
			"email"			=> $email,
			"gsm"			=> $gsm,
			"gender"		=> $gender,
			"courses"		=> $courses,
			"description"	=> $description
		)
	);


	if ($insert) {
		echo "Form Kaydedildi.";
	} else {
		echo "Hata Var";
	}




	include("footer.php");
	?>