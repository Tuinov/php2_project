<?php
namespace app\model;

class Users extends DbModel
{
    //поля совпадают с БД
	public $id;
	public $name;
	public $login;
    public $pass;

    public static function getTableName() {
        return 'users';
    }
    
    public function __construct($name, $discription, $price) {
       
        $this->name = $name;
        $this->login = $login;
        $this->pass = $pass;
    }
}