<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
	<title>регистрация</title>
	<link rel="stylesheet" href="style.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="wrapper">
 <form action="register.php" method="post">
 	<h1>Login</h1>
 	<div class="input-box">
 		<i class='bx bx-user'></i>
 		<input type="text" placeholder="Username" required>
 	</div>
 	<div class="input-box">
 		<i class='bx bxs-lock-alt'></i>
 	<input type="password" placeholder="password" required>
 </div>
 <div class="remember">
 	<label for=""> <input type="checkbox">remember</label>
 	<a href="">забыл пароль?</a>
 </div>

<button type="sumbit" class="btn">Регистрация</button>

<div class="register-link">
	<p>нету аккаунта?<a href="">Register</a></p>
</div>




</body>
</html>