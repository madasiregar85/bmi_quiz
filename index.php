<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact2" style="background-image: url('images/BANNER copy.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="contact2-form validate-form" action="index.php" method="post">
					<span class="contact2-form-title">
						BODY MASS INDEKS
					</span>

					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<span>Berat Anda (Kg)</span>
						<input class="input2" type="text" name="berat" value="<?php if(!empty($_POST['berat'])){ echo $_POST['berat']; }?>" required>
						<!-- <span class="focus-input2" data-placeholder="Berat Anda (Kg)"></span> -->
					</div>

					<div class="wrap-input2 validate-input" >
						<span>Tinggi anda (cm)</span>
						<input class="input2" type="text" name="tinggi" value="<?php if(!empty($_POST['tinggi'])){ echo $_POST['tinggi']; }?>" required>
						<!-- <span class="focus-input2" data-placeholder="Tinggi Anda (m)"></span> -->
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Message is required">
						<span>Hasil</span>
						<?php
				if(!empty($_POST['hitung'])) { 
			    $berat = $_POST['berat'];
			    $tinggi = $_POST['tinggi'];

			    function bmi($berat,$tinggi) {
			        $bmi = $berat/($tinggi*$tinggi);
			        return $bmi;
			    }   

			    $bmi = bmi($berat,$tinggi);

			    if ($bmi <= 18.5) {
			        $output = "UNDERWEIGHT";
			        } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
			        $output = "NORMAL WEIGHT";
			        } else if ($bmi > 24.9 AND $bmi<=29.9) {
			        $output = "OVERWEIGHT";
			        } else if ($bmi > 30.0) {
			        $output = "OBESE";
			    }
			    
				echo "Your BMI value is  " . $bmi . "<br> and you are : "; 
			    echo "$output";
			    
			}
			?>			
			
					
				</form>
			</div>
			<div class="container-login100-form-btn">
						 <button class="login100-form-btn" type="submit" name="hitung" value="hitung"> HITUNG BMI
							

							</button>
					</div>

		</div>
	</div>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>
