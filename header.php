<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo '
<header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav1">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">SITVER</a>
            </div>

            <div class="collapse navbar-collapse" id="nav1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="noticias.php">Noticias</a></li>
                    <li><a href="form_alta.php">Crear Noticias</a></li>
                    <!--<li><a href="/Notitec/EditarNoticia">Editar Noticias</a></li>-->
                    <form action="" class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                                <input type="search" class="form-control" placeholder="Buscar">
                            </div>
                        </div>
                    </form>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Opciones <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="divider"></li>
                            <li><a href="index.php">Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
';