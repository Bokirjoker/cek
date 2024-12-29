<!DOCTYPE html>
<html lang="en">
<head>
	<title>ROBOPRAGMA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Robot88
				</span>
				<span class="login100-form-title p-b-41">
					Masukan ID
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="aktivasi.php" method="post">

					<div class="wrap-input100 validate-input" data-validate = "Masukan ID" >
						<input class="input100" type="text" name="username" placeholder="Masukan ID" required>
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>
					<div class="wrap-input100 validate-input">
						<select class="input100" name="game">
							<?php $options = array('Pragmatic', 'PGSoft', 'Nolimit');
							foreach ($options as $game) {
								$selected = @$_POST['game'] == $game ? ' selected="selected"' : '';
								echo '<option value="' . $game . '"' . $selected . '>' . $game . '</option>';
							}?>
						</select>
					</div>
					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" name="submit" value="submit">
							Aktivasi
						</button>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>