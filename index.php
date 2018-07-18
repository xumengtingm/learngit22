<?php
namespace  index;
use  index as bbb;

/**
 * Created by PhpStorm.
 * User: xu
 * Date: 2018/5/14
 * Time: 8:44
 */

define('ROOT_PATH',dirname(__FILE__));
//require_once (ROOT_PATH.'/controller/'.$_GET['c'].'.php');
//include ('./view.php');
require_once './autoLoad.php';
$res = new bbb/$_GET['c'];
$res->$_GET['a']();