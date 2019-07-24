<?php
namespace app\model;

class Basket extends DbModel	
{
    //поля совпадают с БД
	public $id;
	public $session_id;
	public $product_id;
   

    public static function getTableName() {
        return 'basket';
    }

    // public static function getBasket() {
     
    // }


}