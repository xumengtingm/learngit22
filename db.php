<?php
namespace  db\ccc ;
use  db\ccc;

error_reporting(E_ALL ^ E_DEPRECATED);
class DB{

    public $ip;//mysql服务器地址
    public $username;//mysql的用户名
    public $pwd;//mysql 密码
    public $dbname;//mysql选择的数据库

    function __construct($ip,$username,$pwd,$dbname){
        $this->ip = $ip;
        $this->username = $username;
        $this->pwd = $pwd;
        $this->dbname = $dbname;
        //实例化时调用连接数据库方法
        $this->connect();

    }

    public function connect(){
        //连接数据库
        mysql_connect($this->ip, $this->username, $this->pwd);
        mysql_select_db($this->dbname);
        mysql_query('set names utf8');
    }



    public function add($sql){

        $ret = mysql_query($sql);

        if($ret){
            return true;
        }else{
            return false;
        }
    }

    public function del($table, $column,$value){
        $sql = "DELETE FROM $table WHERE $column = $value";
        $ret = mysql_query($sql);
        if($ret){
            return true;
        }else{
            return false;
        }
    }

    public function select($sql){
        $ret = mysql_query($sql);
        $data =array();
        while ($arr = mysql_fetch_assoc($ret)) {
            $data[] = $arr;
        }

        return $data;
    }

    public function update($sql){
        $ret = mysql_query($sql);
        if($ret){
            return true;
        }else{
            return false;
        }
    }


}
