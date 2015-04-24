<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Noticia
 *
 * @author vrebo
 */
class Noticia {

    private $id;
    private $titulo;
    private $contenido;
    private $fechaPublicacion;
    private $autor;

    public function Noticia($id, $titulo, $contenido, $fechaPublicacion, $autor) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->fechaPublicacion = $fechaPublicacion;
        $this->autor = $autor;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setContenido($contenido) {
        $this->contenido = $contenido;
    }

    public function setfechaPublicacion($fechaPublicacion) {
        $this->fechaPublicacion = $fechaPublicacion;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getId(){
        return $this->id;
    }
    
    public function getTitulo(){
        return $this->titulo;
    }
    
    public function getContenido(){
        return $this->contenido;
    }
    
    public function getFechaPublicacion(){
        return $this->fechaPublicacion;
    }
    
    public function getAutor(){
        return $this->autor;
    }
    
}