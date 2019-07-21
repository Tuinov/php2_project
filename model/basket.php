<?php
namespace app\model;

class Basket extends Model
{
    //поля совпадают с БД
	public $id;
	public $session_id;
	public $product_id;
    

    protected $tableName = 'basket';


}