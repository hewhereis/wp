<?php
/**
 * Created by PhpStorm.
 * User: Neessy
 * Date: 2019-03-07
 * Time: 15:31
 */
include 'header.html';
if(strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'],'zh') !== false){
    include 'home-zh.html';
}else{
    include 'home.html';
}