<?php
namespace app\model;

class Users extends Model
{
    //поля совпадают с БД
	public $id;
	public $name;
	public $login;
    public $pass;

    protected $tableName = 'users';
    
    public function __construct($name, $discription, $price) {
        parent::__construct();
        $this->name = $name;
        $this->login = $login;
        $this->pass = $pass;
    }
}