<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Editar Noticias</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico">
    </head>
    <body>
        <div class="container">
            <?php require 'header.php'; ?>
            <div class="container-fluid row col-md-8 col-md-offset-2">
                <!--Cambiar el método una vez el proyecto esté completo-->
                <form class = "form-group" action="acciones/salvar_noticia.php" method="GET">
                    <?php
                    require 'modelos/NoticiaDAO.php';
                    $id_noticia = $_GET['id_noticia'];
                    $noticia = NoticiaDAO::buscarPorId($id_noticia);
                    echo '
                    <input type="hidden" id="id_noticia" name="id_noticia" value="' . $noticia->getId() . '">
                        <div class="form-group input-group">
                            <span class="input-group-addon">Título de la noticia:</span>
                            <input id="titulo" name="titulo" type="text" class="form-control" value="' . utf8_encode($noticia->getTitulo()) . '">
                        </div>

                        <div class="form-group input-group">
                            <span class="input-group-addon">Autor de la noticia:</span>
                            <input id="autor" name="autor" type="text" class="form-control" value="' . utf8_encode($noticia->getAutor()) . '">
                        </div>

                        <div class="form-group">
                            <textarea id="contenido" name="contenido" class="form-control" rows="15">' . utf8_encode($noticia->getContenido()) . '</textarea>
                        </div>';
                    ?>
                    <input type="submit" class="publicar btn btn-primary" value="Guardar cambios">
                </form>
            </div>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>	
    </body>
</html>