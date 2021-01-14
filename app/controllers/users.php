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

    public function login()
    {
        if (isset($this->post->submit)) {
            $this->model->login($this->post);
        }

        require APP . 'views/_template/auth_header.php';
        require APP . 'views/users/login.php';
        require APP . 'views/_template/auth_footer.php';
    }


    public function logout()
    {
        $this->model->logout();

    }
}
