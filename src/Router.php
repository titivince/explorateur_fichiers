<?php
namespace App;

use AltoRouter;


class Router {

    /**
     * @var string
     */
    private $viewPath;

    /**
     * @var AltoRouter
     */
    private $router;

    public function __construct(string $viewPath)
    {
        $this->viewPath = $viewPath;
        $this->router = new AltoRouter();
    }

    public function get(string $url, string $view, ?string $name = null): self
    {
        $this->router->map('GET', $url, $view, $name);
        return $this;
    }

    public function post(string $url, string $view, ?string $name = null): self
    {
        $this->router->map('POST', $url, $view, $name);
        return $this;
    }

    public function match(string $url, string $view, ?string $name = null): self
    {
        $this->router->map('POST|GET', $url, $view, $name);
        return $this;
    }

    public function url(string  $name, array $params=[])
    {
        return $this->router->generate($name, $params);
    }


    public function run(): self
    {
        $match = $this->router->match();
        $view = $match['target'] ?? 'e404';

        if ($view === 'page_register') try {
            ob_start();
            require $this->viewPath.DIRECTORY_SEPARATOR.'src/register.php';
            require $this->viewPath . DIRECTORY_SEPARATOR . 'page_register.php';
            require $this->viewPath . DIRECTORY_SEPARATOR . 'page_register_success.php';
            $content = ob_get_clean();
            require $this->viewPath . DIRECTORY_SEPARATOR . 'layout.php';
        } catch (\Exception $e) {
            echo $e;
            exit();}
        $params = $match['params'] ?? null;
        $src = substr($view, 5);
        $router = $this;
        //dd($this->viewPath.DIRECTORY_SEPARATOR.'src/'.$src.'.php');
        try {
            ob_start();
            require $this->viewPath.DIRECTORY_SEPARATOR.'src/'.$src.'.php';
            require $this->viewPath . DIRECTORY_SEPARATOR . $view . '.php';
            $content = ob_get_clean();
            //dd($content);
            require $this->viewPath . DIRECTORY_SEPARATOR . 'layout.php';
        } catch (\Exception $e) {
            echo $e;
            exit();
        }
        return $this;

    }

}