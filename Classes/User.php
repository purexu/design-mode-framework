<?php
/**
 * Created by PhpStorm.
 * User: 22876
 * Date: 2020/4/19
 * Time: 19:07
 */

namespace Classes;


class User
{
    public $id;
    public $name;
    public $mobile;
    public $regtime;

    protected $db;

    function __construct($id)
    {
        $this->db = new Database\Mysqli();
        $this->db->connect('127.0.0.1', 'root', 'root', 'test');
        $res = $this->db->query("select * from user limit 1");
        $data = $res->fetch_assoc();
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->mobile = $data['mobile'];
        $this->regtime = $data['regtime'];
    }

    function __destruct()
    {
        $this->db->query("update user set name = '{$this->name}', mobile = '{$this->mobile}'
        , regtime = '{$this->regtime}' where id = {$this->id} limit 1");
    }
}