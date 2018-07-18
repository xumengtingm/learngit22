<?php

//include ('./db.php');
class index {
    public function action(){
        //连接数据库
        $res = new view(ROOT_PATH);
        $res->feach('index.php',array('data'=>''));
    }
    public function login(){
        //连接数据库
        $obj = new ddd\DB ('127.0.0.1','root','','test1');
        $name = $_POST['name'];
        $pwd = $_POST['pwd'];
        $sql = "select * from  user where name= '$name' && pwd = '$pwd'";
        $bol = $obj->select($sql);
       if($bol){
            echo "登录成功！";
        }else{
            echo ("用户名或密码输入错误！");
        }

    }
    public function zhuce(){
        $res = new ddd\view(ROOT_PATH);
        $res->feach('zhuce.php',array('data'=>''));
    }
    public function zhuce2(){
        $obj = new ddd\DB ('127.0.0.1','root','','test1');
        $name = $_POST['name'];
        $pwd = $_POST['pwd'];
        $pwds = $_POST['pwds'];


        $sql = "insert into user set name='$name',pwd='$pwd',pwds='$pwds'";

        $bol = $obj->add($sql);
        if($bol){
            echo "注册成功！";
        }else {
            echo("注册失败！");
            $res = new ddd\view(ROOT_PATH);
            $res->feach('zhuce.php',array('data'=>''));
        }



    }

}