<?php

require_once('model.php');
require_once('view.php');

$model = new Model();
$view = new View();

$mensaje = $model->getMensaje();

$view->mostrarMensaje($mensaje);


?>