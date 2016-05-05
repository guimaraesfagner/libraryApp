<?php
	include_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Autenticando usuário >> LibraryApp</title>
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
	<!-- javascript for autentication -->
	<script type="text/javascript">
		function loginsuccessfully() {
			setTimeout("window.location='painel.php'" , 3000);
		}
		function loginfailed(){
    window.alert("Senha inválida. Tente novamente.");
    window.location="logout.php";

    }
    //	setTimeout("window.location='login.php'", 5000);
	</script>
  </head>
	<body>
		<?php
			$login = $_POST['login'];
			$password = $_POST['password'];
			$sql = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$password'") or die(mysql_error());
			$row = mysql_num_rows($sql);
			if ($row > 0) {
				session_start();
				$_SESSION['login']=$_POST['login'];
				$_SESSION['password']=$_POST['password'];
        echo "<br />";
        echo "<br />";
        echo "<br />";
        echo "<br />";
        echo "<center>Seja Bem vindo $login ! Aguarde o redirecionamento para o sistema.</center>";
				echo "<script>loginsuccessfully()</script>";
			} else {
        echo "<br />";
        echo "<br />";
        echo "<br />";
        echo "<br />";
				echo "<script>loginfailed()</script>";
			}
		?>
	</body>
</html>
