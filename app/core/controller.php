<?php


abstract class Controller
{
    public $model = null;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
    }

    public function loadMode($model)
    {
        require_once APP . 'models/' . $model . '.php';
        $this->model = new $model();
    }

}
