<?php

/**
 * Description of NoticiaDAO
 *
 * @author vrebo
 */
require 'DatabaseHelper.php';
require 'Noticia.php';

class NoticiaDAO {

    public static function getNoticias() {
        $listaNoticias = array();
        $conn = DatabaseHelper::abrirConexion();
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM noticia";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $listaNoticias[] = new Noticia(
                    $row["id_noticia"], $row["titulo"], $row["contenido"], $row["fecha_publicacion"], $row["id_autor"]);
        }
        $conn->close();

        return $listaNoticias;
    }

    public static function altaNoticia($noticia) {
        $conn = DatabaseHelper::abrirConexion();
        $sql = "INSERT INTO noticia (titulo, contenido, fecha_publicacion, id_autor) VALUES ('"
                . $noticia->getTitulo() . "','"
                . $noticia->getContenido() . "','"
                . $noticia->getFechaPublicacion() . "','"
                . $noticia->getAutor() . "');";
        $result = $conn->query($sql);
        if ($result !== TRUE) {
            echo 'PROBLEMA AL INSERTAR UN REGISTRO';
        }
        $conn->close();
    }

    public static function buscarPorId($id_noticia) {
        $conn = DatabaseHelper::abrirConexion();
        $sql = "SELECT * FROM noticia WHERE id_noticia = " . $id_noticia . ";";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $noticia = new Noticia(
                    $row["id_noticia"], $row["titulo"], $row["contenido"], $row["fecha_publicacion"], $row["id_autor"]);
        }
        $conn->close();
        return $noticia;
    }

    public static function salvarNoticia($noticia) {
        $conn = DatabaseHelper::abrirConexion();
        $sql = "UPDATE noticia SET titulo = '" . $noticia->getTitulo()
                . "', contenido = '" . $noticia->getContenido()
                . "', id_autor = '" . $noticia->getAutor()
                . "' WHERE id_noticia = " . $noticia->getId() . ";";
        if ($conn->query($sql) === TRUE) {
            echo "Registro actualizado correctamente";
        } else {
            echo "Error actualizando registro: " . $conn->error;
        }
        $conn->close();
    }

    public static function eliminarNoticia($id_noticia) {
        $conn = DatabaseHelper::abrirConexion();
        $sql = "DELETE FROM noticia WHERE id_noticia = " . $id_noticia . ";";
        
        if ($conn->query($sql) === TRUE) {
            echo "Registro eliminado correctamente";
        } else {
            echo "Error eliminando registro: " . $conn->error;
        }
        $conn->close();
    }

}
