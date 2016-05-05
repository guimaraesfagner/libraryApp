<?php
	include_once 'connection.php';
	include_once 'session.php';
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
		<script type="text/javascript">
		function limparCampos()
		{
				document.getElementById('txtLivro').value = "";
				document.getElementById('txtAutor').value = "";
				document.getElementById('txtCategoria').value = "";

		}
		</script>
		<?php
			$id = $_GET['id'];
			$queryPesquisar = mysql_query("SELECT * FROM livros WHERE codigo = '$id'");
			$dados = mysql_fetch_array($queryPesquisar);
			$row = mysql_num_rows($queryPesquisar);
		/*	echo "Quantas linhas: $row";
			if ($row <> '1') {
				echo "Algum erro ocorreu";
			} else { */

			// }

		 function editarLivro(){
			 $codigo = $_POST['txtCodigo'];
			 $livro = $_POST['txtLivro'];
			 $autor = $_POST['txtAutor'];
			 $categoria = $_POST['txtCategoria'];
			 $queryAtualizar = mysql_query("UPDATE livros SET livro = '$livro', autor = '$autor', categoria = '$categoria' WHERE livros.codigo = $codigo") or die(mysql_error);
			 if (mysql_affected_rows() > 0){
				 echo "<script language=\"Javascript\">
							 window.alert('Livro alterado com sucesso!');
							 window.location=\"cadastrolivros.php\";
						 </script>";

				} else {
				  die ('Não foi possivel inserir no banco: ' . mysql_error());
					header("Location: cadastrolivros.php");
			 }
		 }
		?>
		<!-- Title bar -->

					<nav class="navbar navbar-inverse" role="navigation">
						<div class="container">
									<p class="navbar-text">Cadastro de Livros :: LibraryApp</p>
											<ul class="nav navbar-nav navbar-right" >
															<li><a href="logout.php">Sair</a></li>
											</ul>
						</div>

				</nav>
		<!-- Banner -->
		<div class="container">
				 <div class="banner">
					 <img src="img/logo_sb.png" class="img-responsive" alt="AppLibrary - Escola Santa Bárbara">
				 </div>
				 <nav class="navbar navbar-inverse" role="navigation">
					 <div class="menu">
							 <p class="navbar-text">Cadastro de livros </p><br>
					 </div>
				 </nav>
			 <div class="row">
			 <aside role="complementary" class="col-md-3"><br>
				 <ul class="list-group">
								 <li><a href="cadastrolivros.php" class="list-group-item">Listar Livros</a></li>
								 <li><a href="cadastrarlivro.php" class="list-group-item">Cadastrar novo Livro</a></li>
				</ul>
			 </aside>

			 		<form name="formEditarLivro"action="editarlivro.php" method="POST">
						<div role="main" class="col-md-8" class="form-group row">
							<label for="lblCodigo"></label>
							<input type="hidden" name="txtCodigo" class="form-control" value="<?php echo $dados["codigo"]; ?>">
						<p>
							<label for="lblLivro">Titulo do livro</label>
							<input type="text" name="txtLivro" id="txtLivro" class="form-control" value="<?php echo $dados["livro"]; ?>">
					</p><p>
							<label for=lblAutor>Autor</label>
							<input type="text" name="txtAutor" id="txtAutor" class="form-control" value="<?php echo $dados["autor"]; ?>">
					</p><p>
							<label for="lblCategoria">Categoria</label>
							<input type="text" name="txtCategoria" id="txtCategoria" class="form-control" value="<?php echo $dados["categoria"] ?>">
					</p><p>
							<input type="submit" name="btnEditLivro"  value="Salvar Alterações" class="btn">
							<input type="button" name="btnLimparCampos" value="Limpar Campos" onclick="limparCampos()" class="btn btn-secondary">
					</p>
				 </div>
		 </form>

		 <?php
		 		if (isset($_POST['btnEditLivro'])){
					editarLivro();

				}
			?>
			<div id="logoFooter" class="col-md-offset-3 col-md-3"></div>
	</body>
</html>
