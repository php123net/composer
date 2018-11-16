<?php
/**
 * Created by PhpStorm.
 * User: foven
 * Date: 2018/11/16
 * Time: 17:34
 */
namespace php123net\composer;

/**
 * HTTP请求操作类
 * Class Http
 * @package php123net\composer
 */
Class Http
{
    /**
     * GET请求
     * @param $url
     * @return bool|string
     */
    public static function requestByGet($url)
    {
        return file_get_contents($url);
    }
}