<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Devcorps</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="deskapp2-master/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="deskapp2-master/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="deskapp2-master/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="deskapp2-master/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="deskapp2-master/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="deskapp2-master/src/plugins/jquery-steps/jquery.steps.css">
	<link rel="stylesheet" type="text/css" href="deskapp2-master/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<img src="deskapp2-master/vendors/images/deskapp-logo.svg" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					
			</div>
		</div>
	</div>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="deskapp2-master/vendors/images/register-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
				<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{
  
  echo "<script>alert('Invalid Details');</script>";

}

}

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	
	<link rel="stylesheet" href="deskapp2-master/css/font-awesome.min.css">
	<link rel="stylesheet" href="deskapp2-master/css/bootstrap.min.css">
	<link rel="stylesheet" href="deskapp2-master/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="deskapp2-master/css/bootstrap-social.css">
	<link rel="stylesheet" href="deskapp2-master/css/bootstrap-select.css">
	<link rel="stylesheet" href="deskapp2-master/css/fileinput.min.css">
	<link rel="stylesheet" href="deskapp2-master/css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="deskapp2-master/css/style.css">
</head>

<body>
	<div class="login-page bk-img" style="background-image: url(img/background.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-md-offset-3">
						<h1 class="text-left text-bold mt-4x">Admin Login</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								<form method="post">

									<label for="" class="text-uppercase text-sm">Your Username </label>
									<input type="text" placeholder="Username" name="username" class="form-control mb" required>

									<label for="" class="text-uppercase text-sm">Password</label>
									<input type="password" placeholder="Password" name="password" class="form-control mb" required>
									<button class="btn btn-primary btn-block" name="login" type="submit">LOGIN</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html Start -->
	<button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static">Launch modal</button>
	<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered max-width-400" role="document">
			<div class="modal-content">
				<div class="modal-body text-center font-18">
					<h3 class="mb-20">Form Submitted!</h3>
					<div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				</div>
				<div class="modal-footer justify-content-center">
					<a href="login.html" class="btn btn-primary">Done</a>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html End -->
	<!-- js -->
	<script src="deskapp2-master/vendors/scripts/core.js"></script>
	<script src="deskapp2-master/vendors/scripts/script.min.js"></script>
	<script src="deskapp2-master/vendors/scripts/process.js"></script>
	<script src="deskapp2-master/vendors/scripts/layout-settings.js"></script>
	<script src="deskapp2-master/src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="deskapp2-master/vendors/scripts/steps-setting.js"></script>
</body>

</html>