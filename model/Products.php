<?php
namespace app\model;

class Products extends Model
{
    //поля совпадают с БД
	public $id;
	public $name;
	public $discription;
    public $price;

    protected $tableName = 'products';

    public function __construct($name, $discription, $price) {
        parent::__construct();
        $this->name = $name;
        $this->discription = $discription;
        $this->price = $price;
    }


}