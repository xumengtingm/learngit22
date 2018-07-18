<?php
/**
 * Created by PhpStorm.
 * User: xu
 * Date: 2018/5/12
 * Time: 11:50
 */
function __autoload($className){


      echo $className;
        require_once './'.$className.'.php';



}


