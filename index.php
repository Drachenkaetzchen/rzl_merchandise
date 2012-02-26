<?php
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

require_once("SizePrice.php");
require_once("Item.php");
require_once("config.php");

$twig->display('index.html', array("items" => $items));