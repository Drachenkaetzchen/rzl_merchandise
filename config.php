<?php
$items = array();

$item = new Item();
$item->setName("LabCoat");
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

$item = new Item();
$item->setName("T-Shirt");
$item->setDescription(	"Das offizielle RaumZeitLabor T-Shirt, passend zu jeder Gelegenheit. " .
                        "Der Verkaufsschlager jetzt zum Sonderpreis!");
$item->setImage("tshirt.jpg");
$item->addSizePrice(new SizePrice("XXL", 15.90));
$item->addSizePrice(new SizePrice("XL", 14.90));
$item->addSizePrice(new SizePrice("L", 13.90));
$item->addSizePrice(new SizePrice("M", 12.90));
$item->addSizePrice(new SizePrice("S", 11.90));

$items[] = $item;

$item = new Item();
$item->setName("Hemd");
$item->setDescription(	"Auch Nerds müssen mal raus - und wenns schick aussehen soll, gibt es dafür das Hemd.");
$item->setImage("hemd.jpg");
$item->addSizePrice(new SizePrice("XXL", 15.90));
$item->addSizePrice(new SizePrice("XL", 14.90));
$item->addSizePrice(new SizePrice("L", 13.90));
$item->addSizePrice(new SizePrice("M", 12.90));
$item->addSizePrice(new SizePrice("S", 11.90));

$items[] = $item;

$item = new Item();
$item->setName("Hoodie");
$item->setDescription(	"Wer mag es nicht, das flauschige Allwetterkleidungsstück für den Durchschnittsnerd.");
$item->setImage("hoodie.jpg");
$item->addSizePrice(new SizePrice("XXL", 15.90));
$item->addSizePrice(new SizePrice("XL", 14.90));
$item->addSizePrice(new SizePrice("L", 13.90));
$item->addSizePrice(new SizePrice("M", 12.90));
$item->addSizePrice(new SizePrice("S", 11.90));

$items[] = $item;

$item = new Item();
$item->setName("Laser-Foo");
$item->setDescription(	"Diverse Gegenstände, die wir erfolgreich einer Laserbehandlung unterzogen haben.");
$item->setImage("pfannenwender.jpg");
$item->addSizePrice(new SizePrice("Pfannenwender mit Logo", 5.90));
$item->addSizePrice(new SizePrice("Minecraft-Spaten", 4.90));

$items[] = $item;

$item = new Item();
$item->setName("Schürze");
$item->setDescription(	"Es soll auch Nerds geben, die sich in die Küche trauen. Das wollen wir natürlich " .
                        "unterstützen!");
$item->setImage("schuerze.jpg");
$item->addSizePrice(new SizePrice("XXL", 15.90));
$item->addSizePrice(new SizePrice("XL", 14.90));
$item->addSizePrice(new SizePrice("L", 13.90));
$item->addSizePrice(new SizePrice("M", 12.90));
$item->addSizePrice(new SizePrice("S", 11.90));

$items[] = $item;


$targetMails = array("vorstand@raumzeitlabor.de", "mail@oliverknapp.de");
