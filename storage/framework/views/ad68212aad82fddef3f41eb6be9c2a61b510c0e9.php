<!DOCTYPE html>
<html>
<head>
	<title><?php echo e($title); ?></title>
	<!-- <link rel="shortcut icon" href="https://cepatpilih.com/image/logo.png"> -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
	<link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

</head>
<!-- <body style="background: url(img/bg.jpg); background-size: cover;"> -->
<body style="background-color: #4E944F; background-size: cover;">

	<div class="container">
		
        <div class="card" style="padding: 50px; height: 460px; width: 480px; margin: 0 auto; margin-top: 10%; background-color: #E9EFC0; box-shadow: 0px 0px 70px 5px rgba(0, 0, 0, 0.3); border-radius: 45px;">
            <h4 style="text-align: center; font-family: 'Poppins'; font-style: normal;" class="green-text"> <b>Selamat Datang</b></h4>
            <h4 style="text-align: center; font-family: 'Poppins'; font-style: normal;" class="green-text"> <b>KERUPUKTENGIRI.COM</b> </h4><br>
                <form method="POST">
                    <div class="input_field">
                        <!-- <label for="username">Username</label> -->
                        <input style="border: 1.5px solid #4E944F;box-sizing: border-box;border-radius: 30px; text-align: center; " id="username" placeholder="Username" type="text" name="username" required>
                    </div>
            
                    <div class="input_field " >
                        <!-- <label for="password">Password</label> -->
                        <input style="border: 1.5px solid #4E944F;box-sizing: border-box;border-radius: 30px; text-align: center;" id="password" placeholder="Password" type="password" name="password" required>
                    </div>
                    <input href="/home" type="submit" name="login" value="Masuk" class="btn" style=" border-radius: 30px; border: 1.5px solid #4E944F; background-color: #E9EFC0; width: 100%">
                </form>
        </div>

	</div>
</body>
</html><?php /**PATH D:\Perkuliahan\Mata Kuliah\Semester 4\l. PPLAM (PR)\Project\KerupukTenggiri-laravel\resources\views/indexlogin.blade.php ENDPATH**/ ?>