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
		<?php
		 function cadastrarLivro(){
			 $livro = $_POST['txtLivro'];
			 $autor = $_POST['txtAutor'];
			 $categoria = $_POST['txtCategoria'];
			 $inserir = mysql_query("insert into livros (livro, autor, categoria) values ('$livro','$autor','$categoria')") or die ('Não foi possivel inserir no banco: ' . mysql_error());;
			 if (inserir){
				 echo "<script language=\"Javascript\">
							 window.alert('Livro adicionado com sucesso!');
						 </script>";
			 } else {
				  die ('Não foi possivel inserir no banco: ' . mysql_error());
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

			 	<form name="formCadastrarLivro"action="cadastrarlivro.php" method="POST">
						<div role="main" class="col-md-8" class="form-group row">
						<br />
						<p>
							<label for="lblLivro">Titulo do livro</label>
							<input type="text" name="txtLivro" class="form-control">
					</p><p>
							<label for=lblAutor>Autor</label>
							<input type="text" name="txtAutor" class="form-control">
					</p><p>
							<label for="lblCategoria">Categoria</label>
							<input type="text" name="txtCategoria" class="form-control">
					</p><p>
							<input type="submit" name="btnAddLivro" value="Cadastrar" class="btn">
							<input type="submit" name="btnLimparCampos" value="Limpar Campos" onclick="document.formCadastrarLivro.reset()" class="btn btn-secondary">
					</p>
				 </div>
		 </form>
		 <?php
		 		if (isset($_POST['btnAddLivro'])){
					cadastrarLivro();

				}
			?>
			<div id="logoFooter" class="col-md-offset-3 col-md-3"></div>
	</body>
</html>
