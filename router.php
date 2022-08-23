<?php
/*
require('config.php');
echo 'Abriu o router.php<br>';
$url = $_SERVER['REQUEST_URI'];
echo BASE_PATH . '<br> ';
echo $url;
*/

require('config.php');
require HELPERS_FOLDER. 'autoloaders.php';

$url = $_SERVER['REQUEST_URI'];
$urlClean = str_replace(BASE_PATH, '',$url);

$urlArray = explode('/',$urlClean);

if(isset($urlArray[0]) &&
    $urlArray[0] != '' &&
    isset($urlArray[1]) &&
    $urlArray[1] != '')
    {
    $controller = $urlArray[0].'Controller';
    $action = $urlArray[1];
} else {
    echo 'Endereço da API Inválido';
    die;
}


if(file_exists(CONTROLLERS_FOLDER.$controller.'.php')){
    $obj = new $controller();
    if(method_exists($obj, $action)){
        $obj->$action();
        die;
    }
}

echo 'Endereco da API invalido!';

?>