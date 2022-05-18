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
													<input type="email" class="form-control" name="email" placeholder="Email Adresiniz">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="gsm" placeholder="Gsm Adresiniz">
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<input type="radio" name="gender" value="0">Kadın<br>
													<input type="radio" name="gender" value="1">Erkek<br>
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<select name="courses" class="form-control">
														<option> Ders Seçiniz</option>
														<option value="Php"> Php</option>
														<option value="Java"> Java</option>
														<option value="CSS"> CSS</option>

													</select>
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<textarea name="description" class="form-control" rows="5" cols="70"></textarea>
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Formu Kaydet" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>

									<table class="table table-hover table-dark">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">First</th>
												<th scope="col">Last</th>
												<th scope="col">Handle</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Mark</td>
												<td>Otto</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Jacob</td>
												<td>Thornton</td>
												<td>@fat</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td colspan="2">Larry the Bird</td>
												<td>@twitter</td>
											</tr>
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


	try {
		$db = new PDO("mysql:host=localhost;dbname=uygulama-form;charset=UTF8", "root", "");
		echo "Bağlantı Başarılı...";
	} catch (PDOException $e) {
		echo $e->getMessage();
	}


	$nameSurname = $_POST["nameSurname"];
	$email 		= $_POST["email"];
	$gsm 		= $_POST["gsm"];
	$gender 	= $_POST["gender"];
	$courses 	= $_POST["courses"];
	$description = $_POST["description"];

	$save = $db->prepare("INSERT INTO forms SET
	nameSurname =:nameSurname,
	email 		=:email,
	gsm			=:gsm,
	gender		=:gender,
	courses		=:courses,
	description	=:description
	");

	$insert = $save->execute(array(
		"nameSurname" 	=> $nameSurname,
		"email"			=> $email,
		"gsm"			=> $gsm,
		"gender"		=> $gender,
		"courses"		=> $courses,
		"description"	=> $description
	));

	if ($insert) {
		echo "Form Kaydedildi.";
	} else {
		echo "Hata Var";
	}





	include("footer.php");
	?>