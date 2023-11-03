<?php

define('PATH_DIR', 'http://localhost:8888/tp-02/');
require_once('controller/Controller.php');
require_once('library/RequirePage.php');
require_once __DIR__.'/vendor/autoload.php';
require_once('library/Twig.php');

$url = isset($_SERVER['PATH_INFO'])? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : '/';

if ($url == '/')
{
    require_once('controller/ControllerHome.php');
    $controller = new ControllerHome;
    echo $controller->index(); 
}
else
{
    $requestURL = $url[0];
    $requestURL = ucfirst($requestURL);
    $controllerPath = __DIR__."/controller/Controller".$requestURL.".php";

    if(file_exists($controllerPath))
    {
        require_once( $controllerPath);
        $controllerName = 'Controller'.$requestURL;
        $controller = new $controllerName;

        if (isset($url[1]) && $url[1] != '')
        {
            $method = $url[1];

            if (method_exists($controller, $method))
            {
                if(isset($url[2])) 
                {
                    $value = $url[2];
    
                    if ($value != '') echo $controller->$method($value);
                    else echo $controller->$method();
                }
                else 
                {
                    echo $controller->$method();
                }
            }
            else
            {
                require_once('controller/ControllerHome.php');
                $controller = new ControllerHome;
                echo $controller->error('404'); 
            }
        }
        else 
        {
            echo $controller->index();
        }
    }
    else
    {
        require_once('controller/ControllerHome.php');
        $controller = new ControllerHome;
        echo $controller->error('404'); 
    }
}

?>
