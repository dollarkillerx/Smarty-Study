<?php
/**
 * Created by PhpStorm.
 * User: DollarKiller
 * Date: 2019/1/17
 * Time: 下午 09:21
 */
require './vendor/autoload.php';

$module = $_GET['m'] ?? 'User';
$action = $_GET['a'] ?? 'User';
$action = strtolower($action);

$module = 'Controllers\\' . ucfirst(strtolower($module)) . 'Controller';

$controller = new $module;

$controller->$action();