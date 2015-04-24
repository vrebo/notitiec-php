<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Noticias</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico">
    </head>
    <body>
        <div class="container">
            <?php require 'header.php'; ?>
            <div class="container">
                <div class="row">
                    <?php
                    require 'modelos/NoticiaDAO.php';
                    $listaNoticias = NoticiaDAO::getNoticias();
                    foreach ($listaNoticias as $noticia) {
                        echo
                        '<div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="thumbnail">
                                <div class = "caption">';
                        echo "<h3>" . utf8_encode($noticia->getTitulo()) . " </h3>";
                        echo "<h4>Subtítlo de la noticia</h4>";
                        echo "<p>" . utf8_encode($noticia->getContenido()) . "</p>";
                        echo "<h5>" . utf8_encode($noticia->getAutor() . " " . $noticia->getFechaPublicacion()) . "</h5>";

                        echo '
                            <a href="form_edicion.php?id_noticia=' . $noticia->getId() . '" class="btn btn-primary">Editar</a>
                            <a href="acciones/eliminar_noticia.php?id_noticia=' . $noticia->getId() . '" class="btn btn-danger">Eliminar</a>
                            </div>
                        </div>
                    </div>';
                    }
                    ?>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3>Título de la noticia</h3>
                                <h4>Subtítlo de la noticia</h4>
                                <p>Contenido de la noticia...
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam ullam rerum, necessitatibus deleniti enim eveniet explicabo dolor vero unde impedit voluptas, quod quis quaerat nulla ut laudantium dignissimos, voluptatibus sunt.			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam ullam rerum, necessitatibus deleniti enim eveniet explicabo dolor vero unde impedit voluptas, quod quis quaerat nulla ut laudantium dignissimos, voluptatibus sunt.</p>
                                <h5>autor... y fecha de publicacion</h5>
                                <button class="btn btn-primary">Editar</button>
                                <a href="#delete" class="btn btn-danger" data-toggle="modal">Eliminar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>	
    </body>
</html>
