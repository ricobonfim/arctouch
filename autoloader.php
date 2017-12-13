<?php 

spl_autoload_register(function ($className) {

    $layers = array(
        array(
            'folder' => 'controllers/',
            'sufix' => 'Controller',
        ),
        array(
            'folder' => 'model/repositories/',
            'sufix' => 'Repository',
        ),
    );

    $layerData = array_filter($layers, function($layerData) use($className) {
        if (strstr($className, $layerData['sufix'])) {
            return true;
        }
    });
    $layerData = array_pop($layerData);

    $classFolder = $layerData['folder'];
    
    $classPath = "{$classFolder}{$className}.php";

    require_once $classPath;
});

?>