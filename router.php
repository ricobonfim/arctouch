<?php
    //error_reporting(0);

    include 'autoloader.php';

    try {
        $className = (isset($_GET['className']) ? $_GET['className'] : 'Movies') . 'Controller';
        $controller = new $className();

        $methodName = isset($_GET['methodName']) && method_exists($controller, $_GET['methodName']) ? $_GET['methodName'] : 'index';
        
        $parameters = isset($_GET['parameters']) ? $_GET['parameters'] : null;

        $controller->$methodName($parameters);
        
    } catch (Error $e) {
        echo '<pre>';
        var_dump($e);
        echo '</pre>';
        exit();
        (new ErrorController())->PageNotFound();
    } catch (Exception $e) {
        (new ErrorController())->PageNotFound();
    }

?>  