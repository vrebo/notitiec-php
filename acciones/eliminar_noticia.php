<?php

require '../modelos/NoticiaDAO.php';

$id_noticia = $_GET['id_noticia'];

NoticiaDAO::eliminarNoticia($id_noticia);

header("Location:../noticias.php");
exit;
