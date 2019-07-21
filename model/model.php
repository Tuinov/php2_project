<?php
namespace app\model;
use app\interfaces\IModel;
use app\engine\Db;

abstract class Model implements IModel
{   
    protected $tableName = '';
    protected $db;


    public function __construct() {
        $this->db = Db::getInstance();
    }

    public function getOne($id) {
        $sql = "SELECT * FROM {$this->tableName} WHERE id = :id";
        return $this->db->queryOne($sql, ['id' => $id]);
    }

    public function getAll() {
        $sql ="SELECT * FROM {$this->tableName}";
        return $this->db->queryAll($sql);
    }

    // создаёт массив с собственными св-ми
    public function selfProperty(){
        $arr = [];
        foreach($this as $key => $value) {
            $arr[$key] = $value;
        }
        // вырезает 2-4 значение
        $arr1 = array_slice($arr, 1, 3);
        return $arr1;
    }

    public function insert(){
        $param = $this->selfProperty();
        var_dump($param);

        $sql = "INSERT INTO {$this->tableName} (`name`, `discription`, `price`) VALUES (NULL, 'шляпа', 'женская хлопковая', '45')";
        return $this->db->execute($sql);

        //execute
        //$this->id = "lastID";
    }

    public function update() {

    }

    public function delete() {

    }
} 