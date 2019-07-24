<?php
include '../engine/AutoLoad.php';
include '../config/config.php';

use app\model\Products;
use app\model\Users;
use app\engine\AutoLoad;
use app\engine\Db;


//автозагрузчик
spl_autoload_register([new AutoLoad, 'LoadClass']);


// $product1 = new Products('кофе', 'чёрный', 100);
// $product1->insert();

// $product2 = Products::getOne(2);
// var_dump($product1);
// $product1->delete();

// var_dump(get_class_methods($product2));


$controllerName = $_GET['c'] ?: 'product';
$actionName = $_GET['a'];

$controllerClass = CONTROLLER_NAMESPACE . ucfirst($controllerName) . 'Controller';
if(class_exists($controllerClass)) {
    $controller = new $controllerClass();

} else {
    echo 'ошибка GEt запроса';
}

$controller->runAction($actionName);









