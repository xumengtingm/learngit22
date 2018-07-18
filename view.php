<?php
/**
 * Created by PhpStorm.
 * User: xu
 * Date: 2018/5/14
 * Time: 8:45
 */
namespace  view ;
use  view  as vvv;

class view {
    public function feach($file,$data){
        extract($data);
        include (ROOT_PATH.'/view/'.$file);
    }

}