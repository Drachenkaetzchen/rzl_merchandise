<?php
$items = array();

$item = new Item();
$item->setName("RaumZeitLabor T-Shirt");
$item->setDescription("Das Super RZL Shirt");
$item->setImage("tshirt.jpg");
$item->addSizePrice(new SizePrice("XXL", 15.90));
$item->addSizePrice(new SizePrice("XL", 14.90));
$item->addSizePrice(new SizePrice("L", 13.90));
$item->addSizePrice(new SizePrice("M", 12.90));
$item->addSizePrice(new SizePrice("S", 11.90));

$items[] = $item;


$item = new Item();
$item->setName("RZL LabCoat");
$item->setDescription(	"Das Pflichtprogramm für jeden Laboraten! Ein bestickter Labcoat, der auch " .
						"wunderbar für Ätzsessions geeignet ist. Die Bestickung wird von Unicorn oder Inte ".
						"mittels unserer Stickmaschine vorgenommen." );
$item->setImage("labcoat.jpg");
$item->addSizePrice(new SizePrice("XXL", 15.90));
$item->addSizePrice(new SizePrice("XL", 14.90));
$item->addSizePrice(new SizePrice("L", 13.90));
$item->addSizePrice(new SizePrice("M", 12.90));
$item->addSizePrice(new SizePrice("S", 11.90));

$items[] = $item;
