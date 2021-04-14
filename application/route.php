<?php
class Route
{
    public static function start()
    {
        $controller_name = 'main';
        $action_name = 'index';
        $routes = $_SERVER['REQUEST_URI'];
        
        // if (!empty($routes))
        // {
        //     $controller_name=$routes;
        // }
       
        
        $model_name = 'model_'.$controller_name;
        $controller_name = 'controller_'.$controller_name;
        $action_name = 'action_'.$action_name;
        
        
        //model
        $model_file = strtolower($model_name) . '.php';
        $model_path = "models/" .$model_file;
        
        if (file_exists($model_path)) {
            include $model_path;
            echo('does this work?');
        }
        
        //controller
        $controller_file = strtolower($controller_name).'.php';
        echo('contr='.$controller_file.'<br>');
        $controller_path = "controllers/" . $controller_file;
        echo('contrpath='.$controller_path.'<br>');
        echo('dir='.__DIR__);
        if (file_exists($controller_path)) {
            include $controller_path;
            echo('works');
        }
        echo('     ???    '. $controller_path);
        echo(' doesnt');

        // } else {
        //     Route::errorPage404();
        // }
        //controller create
        $controller = new $controller_name;
        if(method_exists($controller,$action))
        {
            $controller->$action();
        }


        
    }
    //  static function  errorPage404()
    //     {
    //         echo(' ne rabotaet');
    //         $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
    //         header('HTTP/1.1 404 Not Found');
    //         header("Status: 404 Not Found");
    //         header('Location:' . $host . '404');
    //     }
}