<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LibraryApp - Cadastro de Livros - Login</title>
	<!-- Style -->
	<link href="css/style.css" rel="stylesheet">
    
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
	<nav class="navbar navbar-inverse" role="navigation">
		<p class="navbar-text">LibraryApp - Cadastro de Livros</p>
	</nav>
	
	<div id="loginform" class="container">
		<div class="banner"> 
			<img src="img/logo_sb.png"" class="img-responsive" alt="AppLibrary - Escola Santa Bárbara">
		</div>
		
		<div class="formulario">
			<form  action="login_auth.php" method="post" role="form">
			<div class="form-group">
				<label for="login">Login</label> <input type="text" class="form-control" name="login" placeholder="Digite seu login">
			</div>
			<div class="form-group">
				<label for="password">Senha</label> <input type="password" class="form-control" name="password" placeholder="Digite sua senha">
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox"> Mantenha-me conectado
				</label>
			</div>
			<button type="submit" class="btn btn-default">Entrar</button>
			</form>
		</div>
	</div>
		