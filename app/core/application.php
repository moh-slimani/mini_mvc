<?php


class Application
{

    private $url_controller = null;
    private $url_action = null;
    private $url_params = null;

    /**
     * Application constructor.
     */
    public function __construct()
    {
        $this->urlSplitter();

        if (!$this->url_controller) {
            require APP . 'controllers/home_controller.php';
            $controller = new HomeController();
            $controller->index();
        } else if (file_exists(APP . 'controllers/' . $this->url_controller . '.php')) {
            require APP . 'controllers/' . $this->url_controller . '.php';
            $this->url_controller = new $this->url_controller();

            if (method_exists($this->url_controller, $this->url_action)) {

                if (!empty($this->url_params)) {
                    call_user_func_array(array($this->url_controller, $this->url_action), $this->url_params);
                } else {
                    $this->url_controller->{$this->url_action}();
                }

            } else {
                if ($this->url_action == null) {
                    $this->url_controller->index();
                } else {
                    //echo 'this methods does not exist';
                    header('Location:' . URL . 'problems');
                }
            }
        } else {
            //echo 'this controller does not exist';
            header('Location:' . URL . 'problems');
        }
    }

    /**
     *
     *
     */
    private function urlSplitter()
    {
        if (isset($_GET['url'])) {
            $url = trim($_GET['url']);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            $this->url_controller = $url[0];
            $this->url_action = isset($url[1]) ? $url[1] : null;

            unset($url[0], $url[1]);

            $url = array_values($url);

            $this->url_params = $url;
        }

    }
}
