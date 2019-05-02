<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    
<head>
	<title>Sistema de tienda</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="login-box">
		<img class="avatar" src="<?=base_url()?>/assets/img/logo.png" alt="logo de manuel">
		<h1>Login Here</h1>
		<form id="login" action="<?= base_url('Login/index')?>" class="form-horizontal" method="POST">
			<!-- Usuario -->
			<label for="usuario">Usuario</label>
			<input type="text" name="usuario" placeholder="Ingresa el usuario">

			<!-- Password -->
			<label for="password">Password</label>
			<input type="password" name="password" placeholder="Ingresa tu contraseña">

			<input type="submit" value="Log in">

			<a href="#">A olvidado su contraseña</a><br>
			<a href="<?= base_url('Registro')?>">Desea crear una cuenta</a>
        </form>
    </div>
</body>
</html>

<style>
	body {
		margin: 0;
		padding: 0;
		background: url(<?=base_url()?>/assets/img/bg.jpeg) no-repeat center top;
		background-size: cover;
		font-family: sans-serif;
		height: 100vh;
	}

	.login-box {
		width: 320px;
		height: 420px;
		background: #000;
		color: #fff;
		top: 50%;
		left: 50%;
		position: absolute;
		transform: translate(-50%, -50%);
		box-sizing: border-box;
		padding: 70px 30px;
	}

	.login-box .avatar {
		width: 100px;
		height: 100px;
		border-radius: 50%;
		position: absolute;
		top: -50px;
		left: calc(50% - 50px);
	}

	.login-box h1 {
		margin: 0;
		padding: 0 0 20px;
		text-aling: center;
		font-size: 22px;
	}

	.login-box label{
		margin: 0;
		padding: 0;
		font-weight: bold;
		display: block;
	}

	.login-box input {
		width: 100%;
		margin-bottom: 20px;
	}

	.login-box input[type="text"], 
	.login-box input[type="password"] {
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;
    }

	.login-box input[type="submit"] {
		border: none;
		outline: none;
		height: 40px;
		background: #b80f22;
		color: #fff;
		font-size: 18px;
		border-radius: 20px;
	}

	.login-box a {
		text-decoration: none;
		font-size: 12px;
		line-height: 20px;
		color: darkgrey;
	}

	.login-box a:hover {
		color: #fff;
	}
</style>