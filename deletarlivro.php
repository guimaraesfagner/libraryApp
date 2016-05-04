<?php
  include_once 'connection.php';
  include_once 'session.php';
?>

      <?php
        $id = $_GET['id'];
        $querydeletar = mysql_query("delete from livros where codigo = '$id'");
        if ($querydeletar){
          header("Location: ".$_SERVER['HTTP_REFERER']."");

        } else {
          header("Location: ".$_SERVER['HTTP_REFERER']."");
        }
      ?>
