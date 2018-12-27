<?php
header("content-type:text/html;charset=utf-8");
include_once 'vendor/autoload.php';

$p = new Person();
$p->show();

$m = new Model();
$m->findAll();