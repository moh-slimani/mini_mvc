<?php


class Users
{

    /**
     * Users constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
        require APP . 'views/users/index.php';
    }

    public function show($id, $p2 = null)
    {
        print_r($id);
        echo '<br>';
        echo $p2;
    }
}
