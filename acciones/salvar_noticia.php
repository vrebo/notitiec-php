<?php

require '../modelos/NoticiaDAO.php';

$id_noticia = $_GET['id_noticia'];
$titulo = utf8_decode($_GET['titulo']);
$contenido = utf8_decode($_GET['contenido']);
$fechaPublicacion = date('Y-m-d');
//$fechaPublicacion->format('Y-m-d');
$autor = utf8_decode($_GET['autor']);

$noticia = new Noticia($id_noticia, $titulo, $contenido, $fechaPublicacion, $autor);
NoticiaDAO::salvarNoticia($noticia);

header("Location:../noticias.php");
exit;