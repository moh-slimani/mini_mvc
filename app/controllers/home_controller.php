<?php


class HomeController extends Controller
{


    /**
     * homecontroller constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->midleware();
    }


    public function index()
    {
        require APP . 'views/home/index.php';
    }
}
