<?php

require '../modelos/NoticiaDAO.php';

$titulo = $_GET['titulo'];
$contenido = $_GET['contenido'];
$fechaPublicacion = date('Y-m-d');
//$fechaPublicacion->format('Y-m-d');
$autor = $_GET['autor'];


$noticia = new Noticia($id, $titulo, $contenido, $fechaPublicacion, $autor);
NoticiaDAO::altaNoticia($noticia);

header("Location:../noticias.php");
exit;