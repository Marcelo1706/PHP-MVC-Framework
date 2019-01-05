<?php

/**
 * Class vistaNoEnc
 * Clase encargada de administrar los errores 404 del servidor
 */
class vistaNoEnc
{
    /**
     * @var $model : Contiene el modelo necesario para la interfaz
     * @var $controller : Contiene el controlador de la interfaz
     */
    private $model;
    private $controller;

    /**
     * vistaNoEnc constructor.
     * @param $controller
     * @param $model
     *
     * Se cargan el modelo y el controlador de la interfaz dentro de las propiedades correspondientes
     */
    function __construct($controller, $model)
    {
        $this->controller = $controller;
        $this->model = $model;
    }
    /**
     *  Función que administra el modelo y el controlador de la vista
     */
    public function index()
    {
        $title = 'Error 404 | ';
        require_once 'Inclusiones/header.php';
        require_once 'Vistas/paginas/error.php';
        require_once 'Inclusiones/header.php';
    }
}

?>
