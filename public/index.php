<?php
include '../engine/AutoLoad.php';
include '../config/config.php';

use app\model\Products;
use app\model\Users;
use app\engine\AutoLoad;
use app\engine\Db;


//автозагрузчик
spl_autoload_register([new AutoLoad, 'LoadClass']);

$product1 = new Products('чай', 'цейлонский', 100);

var_dump($product1->getOne(2));
var_dump($product1->selfProperty());
var_dump($product1->insert());




