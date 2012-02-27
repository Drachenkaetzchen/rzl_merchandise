<?php
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

require_once("SizePrice.php");
require_once("Item.php");
require_once("config.php");

/**
 * Contains the list of items to order. All orders are contained within the "item" key, and each subentry
 * contains the item and it's size as well as the order amount.
 */
$orderItems = array();

foreach ($_REQUEST["item"] as $key => $value) {
	if ($value !== "") {
		$orderItems[] = array("name" => str_pad($key, 30), "amount" => str_pad($value,4));
	}
}

$variables = array();
$variables["name"] = $_REQUEST["name"];
$variables["email"] = $_REQUEST["email"];
$variables["comments"] = $_REQUEST["comments"];
$variables["items"] = $orderItems;

$twig->display('ordercomplete.html', $variables);

$mailtext = $twig->render('mailtemplate.txt', $variables);

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=utf-8\r\n";
$headers .="Content-Transfer-Encoding: 8bit";

// targetMails is defined in config.php, gets appended with the order person's mail
$targetMails[] = $_REQUEST["email"];

mail($targetMails, "RZL-Merchandise-Shop Bestellung", $mailtext, $headers);