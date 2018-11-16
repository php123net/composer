<?php
/**
 * Created by PhpStorm.
 * User: foven
 * Date: 2018/11/16
 * Time: 17:49
 */
require __DIR__ . '/vendor/autoload.php';

var_dump(strlen(\php123net\composer\Http::requestByGet('http://github.com')));