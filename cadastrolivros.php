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
			<ul class="">
            	<li><a href="#">Cadastrar novo livro</a></li>
            </ul>
		</aside>
		<div role="main" class="col-md-8"><br>
			<form action="cadastrolivros.php" method="post" align="right">
				<input type="text" name="txtSearch" id="txtSearch" class="text text-default">
				<input type="submit" name="btnSearch" value="Pesquisar" class="btn btn-default">
                <input type="submit" name="btnReset" value="Limpar Pesquisa" class="btn btn-default onclick="window.location.href('minha_url.html');">

			</form>

			<br />

          		<table width="100%" border="3">
				  <tbody>
					<tr>
					  <th scope="col">Código</th>
					  <th scope="col">Livro</th>
					  <th scope="col">Autor</th>
					  <th scope="col">Categoria</th>
					  <th scope="col">Editar</th>
					  <th scope="col">Excluir</th>
					</tr>

					<?php
					function pesquisarLivro(){
						$pesquisa = $_POST['txtSearch'];
						$queryPesquisar = mysql_query("SELECT * FROM livros WHERE codigo = '$pesquisa' or livro = '$pesquisa' or autor = '$pesquisa' or categoria = '$pesquisa'");
						$row = mysql_num_rows($queryPesquisar);
						if ($row == 0) {
							echo "<tr>Nenhum resultado encontrado</tr>";
						} else {
							while ($resultado=mysql_fetch_array($queryPesquisar)){
								echo "<tr><td>" . $resultado["codigo"] . "</td>
										  <td>" . $resultado["livro"] . "</td>
										  <td>" . $resultado["autor"] . "</td>
										  <td>" . $resultado["categoria"] . "</td>
										  <td>Editar</td>
										  <td>Excluir</td>";
							}
						}
					}

					function carregarLivros(){
						/* Buscar livros no banco */
						$queryCarregar = mysql_query("select * from livros");
							/* Enquanto houver dados na tabela, escrever... */
							while ($resultado=mysql_fetch_array($queryCarregar)){
								$codigo = $resultado["codigo"];
								echo "<tr><td>" . $resultado["codigo"] . "</td>
										  <td>" . $resultado["livro"] . "</td>
										  <td>" . $resultado["autor"] . "</td>
										  <td>" . $resultado["categoria"] . "</td>
										  <td>Editar</td>
										  <td><a href=\"deletarlivro.php?id=$codigo\">Excluir</td>";
							}
										}


							function editarLivro(){
							}

										if (isset($_POST['btnDelete'])){
											excluirLivro();
										}

										if (isset($_POST['btnSearch'])){
												pesquisarlivro();
											} else {
												carregarLivros();
										}
		?>
				  </tr>
				</tbody>
			 </table>
    		</div>
		</div>
	</body>
</html>
