
<!DOCTYPE html>
<html lang="en">
<head>
<title>Login V1</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="<?=base_url()?>assets/images/icon-256x256.png" />

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v1/vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v1/vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v1/vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v1/vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v1/css/util.css">
<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v1/css/main.css">

<meta name="robots" content="noindex, follow">
</head>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">
<div>
<img src="<?=base_url()?>assets/images/icon-256x256.png" style="height: 300px ; width: auto" alt="IMG">
</div>
<form class="login100-form validate-form" action="<?=base_url()?>login/check_login" method="post">
<span class="login100-form-title">
Member Login
</span>
<div class="wrap-input100 validate-input" data-validate="Username is required">
<input class="input100" type="text" name="username" placeholder="Username">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-envelope" aria-hidden="true"></i>
</span>
</div>
<div class="wrap-input100 validate-input" data-validate="Password is required">
<input class="input100" type="password" name="password" placeholder="Password">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-lock" aria-hidden="true"></i>
</span>
</div>
<div class="container-login100-form-btn">
<button class="login100-form-btn">
Login
</button>
</div>

<br><br><br><br><br>


</form>
</div>
</div>
</div>

<script src="https://colorlib.com/etc/lf/Login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v1/vendor/bootstrap/js/popper.js"></script>
<script src="https://colorlib.com/etc/lf/Login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v1/vendor/select2/select2.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v1/vendor/tilt/tilt.jquery.min.js"></script>
<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script src="https://colorlib.com/etc/lf/Login_v1/js/main.js"></script>

</body>
</html>
