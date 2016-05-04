<?php
  include_once 'connection.php';
  include_once 'session.php';
?>

    <script language='JavaScript" type="text/javascript'>
        decisao = confirm('Tem certeza que deseja excluir este livro? \n A operação não poderá ser desfeita.'));
          if (decisao) {
          <?php
            $id = $_GET['id'];
            $querydeletar = mysql_query("delete from livros where codigo = '$id'");
            if ($querydeletar){
                   header("Location: ".$_SERVER['HTTP_REFERER']."");
            } else {
                   die (mysql_error());
            }
            ?>
        } else {
          <?php
            header("Location: ".$_SERVER['HTTP_REFERER']."");
          ?>
        }
    </script>
