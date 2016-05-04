<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$host = "localhost";
$user = "root";
$pass = "";
$banco = "libraryapp";
$conexao = mysql_connect($host, $user, $pass) or die ('Não foi possivel conectar: ' . mysql_error());
mysql_select_db($banco, $conexao) or die ('Não foi possivel conectar ao banco: ' . mysql_error());
?>

<?php
  session_start();
  if(!isset($_SESSION["login"]) || !isset($_SESSION["password"])) {
    header("Location: login.php");
    exit;
  } else {
    echo "<center> Logado com sucesso!!!</center>";
  }


 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cadastro de livros >> LibraryApp</title>
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
      <div class="container">
  		    <p class="navbar-text">LibraryApp - Cadastro de Livros</p>
            <ul class="nav navbar-nav navbar-right">
				        <li><a href="logout.php">Sair</a></li>
            </ul>
      </div>

    </nav>

  	<div class="container">
  		<div class="banner">
  			<img src="img/logo_sb.png" class="img-responsive" alt="AppLibrary - Escola Santa Bárbara">
  		</div>
      <nav class="navbar navbar-inverse" role="navigation">
        <div class="menu">
    		    <p class="navbar-text">  <!-- Nav bar with ('Cadastrar livros, Cadastrar alunos, Cadastrar professor, cadastrar bibliotecário, cadastrar administrador')! --></p>
        </div>
      </nav>




  </body>
</html>
