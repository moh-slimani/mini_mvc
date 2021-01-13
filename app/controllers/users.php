<?php


class Users extends Controller
{

    /**
     * Users constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('user');
    }

    public function index()
    {
        $users = $this->model->all();
        require APP . 'views/users/index.php';
    }

    public function show($id, $p2 = null)
    {
        $user = $this->model->find($id);

        echo $user->name;
    }
}
