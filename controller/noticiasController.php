<?php

require_once ('./config/conexion.php');

class noticasController extends Conexion {


}
// recibir por post 
// titulo, descripcion, imagen

$noticia = new Noticia(titulo, descripcion, imagen);

$conexion->insert($noticia);


?>