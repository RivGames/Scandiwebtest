<?php

namespace base\core;

//use Valitron\Validator;
use base\core\Db;

abstract class Model
{
    protected object $pdo;
    protected $table;
    protected $pk = 'id';//primary key
    public array $attributes = [];
    public array $errors = [];
    public array $rules = [];

    public function __construct()
    {
        $this->pdo = Db::getInstance();
    }

    public function load($data)
    {
        foreach ($this->attributes as $name => $value) {
            if (isset($data[$name])) {
                $this->attributes[$name] = $data[$name];
            }
        }
    }
//    public function validate($data)
//    {
//        $v = new Validator($data);
//        $v->rules($this->rules);
//        if($v->validate()){
//            return true;
//        }
//        $this->errors = $v->errors();
//        return false;
//    }

//    public function getErrors()
//    {
//        $errors = '<ul>';
//        foreach($this->errors as $error){
//            foreach ($error as $item){
//                $errors .= '<li>'.$item.'</li>';
//            }
//        }
//        $errors .= '</ul>';
//        $_SESSION['error'] = $errors;
//    }

//    public function save($table)
//    {
////        $tbl = $this->query($table);
//        $tbl = $this
//        foreach ($this->attributes as $name => $value) {
//            $tbl->$name = $value;
//        }
//
////        return \R::store($tbl);
//    }
    public function insertIntoMany($data)
    {
        $sql = ("INSERT INTO products (name,sku,price,weight,size,height,width,length) 
                VALUES (:name, :sku, :price, :weight, :size, :height, :width, :lenght)");
//        $st = $this->pdo->prepare($sql);
//        foreach ($this->attributes as $name => $value) {
//            $st->bindValue(":{$name}", $value, PDO::PARAM_INT);
//        }
//        $st = $this->pdo->bindValue($this->attributes);
//        $this->pdo->execute($st);
        $this->pdo->bindValue($sql,$this->attributes);
    }

    public function query($sql)
    {
        return $this->pdo->execute($sql);
    }

    public function findAll()
    {
        $sql = "SELECT * FROM {$this->table}";
        return $this->pdo->query($sql);
    }

    public function findOneBy($by, $on)
    {
        $sql = "SELECT * FROM {$this->table} WHERE $by = $on";
        return $this->pdo->query($sql);
    }

    public function findOne($id, $field = '')
    {
        $field = $field ?: $this->pk;
        $sql = "SELECT * FROM {$this->table} WHERE $field = ? LIMIT 1";
        return $this->pdo->query($sql, [$id]);
    }

    public function findBySql($sql, $params = [])
    {
        return $this->pdo->query($sql, $params);
    }

    public function findLike($str, $field, $table = '')
    {
        $table = $table ?: $this->table;
        $sql = "SELECT * FROM $table WHERE $field LIKE ? ";
        return $this->pdo->query($sql, ['%' . $str . '%']);
    }
}