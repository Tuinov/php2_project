<?php
namespace app\model;

class Products extends DbModel
{
    //поля совпадают с БД
	public $id;
	public $name;
	public $discription;
    public $price;

    // public $properties = [
    //     'id' => false,
    //     'name' => '',
    //     'discription' => '',
    //     'price' => ''
    // ]

    public static function getTableName() {
        return 'products';
    }

    public function __construct($name = null, $discription = null, $price = null) {
        
        $this->name = $name;
        $this->discription = $discription;
        $this->price = $price;
    }


}