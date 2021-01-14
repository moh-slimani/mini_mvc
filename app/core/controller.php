<?php


abstract class Controller
{
    public $model = null;
    public $post = null;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (!empty($post)) {
            $this->post = new stdClass();
            foreach ($post as $key => $value) {
                $this->post->$key = $value;
            }
        }
    }

    public function loadModel($model)
    {
        require_once APP . 'models/' . $model . '.php';
        $this->model = new $model();
    }

    public function midleware($check = "auth")
    {
        switch ($check) {
            case 'auth':
                if (!isset($_SESSION['is_loged_in']))
                    header('Location:' . URL . 'users/login');
                break;
        }
    }

}
