<?php
$items = array();

$item = new Item();
$item->setName("LabCoat");
$item->setDescription(	"Das Pflichtprogramm für jeden Laboranten! Ein bestickter Labcoat aus reiner ".
                        "Baumwolle, der auch wunderbar für Ätzsessions geeignet ist. Die Bestickung wird ".
                        "von unseren Fachkräften Unicorn, silsha oder Inte mittels unserer programmierbaren Stickmaschine ".
                        "vorgenommen.\n\nDas RaumZeitLabor empfiehlt: Vor der Bestellung am Besten die ".
                        "passende Größe vor Ort ausprobieren!" );
$item->setImage("labcoat.jpg");
$item->addSizePrice(new SizePrice("64", 35.00));
$item->addSizePrice(new SizePrice("62", 35.00));
$item->addSizePrice(new SizePrice("60", 35.00));
$item->addSizePrice(new SizePrice("58", 35.00));
$item->addSizePrice(new SizePrice("56", 35.00));
$item->addSizePrice(new SizePrice("54", 35.00));
$item->addSizePrice(new SizePrice("52", 35.00));
$item->addSizePrice(new SizePrice("50", 35.00));
$item->addSizePrice(new SizePrice("48", 35.00));
$item->addSizePrice(new SizePrice("46", 35.00));
$item->addSizePrice(new SizePrice("44", 35.00));

$items[] = $item;

$item = new Item();
$item->setName("T-Shirt");
$item->setDescription(	"Das offizielle RaumZeitLabor T-Shirt, passend zu jeder Gelegenheit. " .
                        "Der Verkaufsschlager jetzt zum Sonderpreis!\n\nAuf Wunsch mit eigenem " .
                        "Schriftzug.");
$item->setImage("tshirt.jpg");
$item->addSizePrice(new SizePrice("XXL", 20.00));
$item->addSizePrice(new SizePrice("XL", 20.00));
$item->addSizePrice(new SizePrice("L", 20.00));
$item->addSizePrice(new SizePrice("M", 20.00));
$item->addSizePrice(new SizePrice("S", 20.00));

$items[] = $item;

$item = new Item();
$item->setName("Hemd");
$item->setDescription(	"Auch Nerds müssen mal raus an die frische Luft - und wenns gleichzeitig schick " .
                        "aussehen soll, gibt es dafür das Hemd. Die Bestickung wird von unseren Fachkräften " .
                        "Unicorn oder Inte mittels unserer programmierbaren Stickmaschine vorgenommen.");
$item->setImage("hemd.jpg");
$item->addSizePrice(new SizePrice("XXL", 25.00));
$item->addSizePrice(new SizePrice("XL", 25.00));
$item->addSizePrice(new SizePrice("L", 25.00));
$item->addSizePrice(new SizePrice("M", 25.00));
$item->addSizePrice(new SizePrice("S", 25.00));

$items[] = $item;

$item = new Item();
$item->setName("Zipper");
$item->setDescription(	"Wer mag es nicht, das flauschige Allwetterkleidungsstück für den Nerd von heute. " .
                        "\n\nAuf Wunsch mit eigenem Schriftzug.");
$item->setImage("zipper.jpg");
$item->addSizePrice(new SizePrice("XXL", 35.00));
$item->addSizePrice(new SizePrice("XL", 35.00));
$item->addSizePrice(new SizePrice("L", 35.00));
$item->addSizePrice(new SizePrice("M", 35.00));
$item->addSizePrice(new SizePrice("S", 35.00));

$items[] = $item;

$item = new Item();
$item->setName("Laser-Foo");
$item->setDescription(	"Diverse Gegenstände, die wir erfolgreich einer Laserbehandlung unterzogen haben.");
$item->setImage("pfannenwender.jpg");
$item->addSizePrice(new SizePrice("Pfannenwender mit Logo", 5.00));
$item->addSizePrice(new SizePrice("Minecraft-Spaten", 5.00));

$items[] = $item;

$item = new Item();
$item->setName("Schürze");
$item->setDescription(	"Es soll auch Nerds geben, die sich in die Küche trauen. Das wollen wir natürlich " .
                        "unterstützen! Die Bestickung wird von unseren Fachkräften Unicorn oder Inte mittels " .
                        "unserer programmierbaren Stickmaschine vorgenommen.");
$item->setImage("schuerze.jpg");
$item->addSizePrice(new SizePrice("XXL", 20.00));
$item->addSizePrice(new SizePrice("XL", 20.00));
$item->addSizePrice(new SizePrice("L", 20.00));
$item->addSizePrice(new SizePrice("M", 20.00));
$item->addSizePrice(new SizePrice("S", 20.00));

$items[] = $item;

$item = new Item();
$item->setName("Bausatz usbasp");
$item->setDescription(	"Der usbasp-Bausatz mit allen benötigten Bauteilen. Must-have für den Einstieg in die Atmel-".
		"Programmierung. Mehr Info unter " .
		'<a target="_blank" href="http://rzl.so/wiki/usbasp">rzl.so/wiki/usbasp</a>');
$item->setImage("usbasp.jpg");
$item->addSizePrice(new SizePrice("Standardkit", 10.00));
$item->addSizePrice(new SizePrice("Mit schwarzer Platine", 12.00));

$items[] = $item;

$item = new Item();
$item->setName("Bausatz ISP-Adapter");
$item->setDescription(	"Ein einfacher Adapter, der die Adaptierung von 10-poligem ISP-Konnektor auf 6-poligen erlaubt." .
		"Die einzelnen Pins sind auch als Stiftleiste herausgeführt. Inklusive 30cm langem 6-pol Flachbandkabel und den " .
		"benötigten Steckern. Mehr Info unter ".
		'<a target="_blank" href="http://rzl.so/wiki/ISP-Adapter">rzl.so/wiki/ISP-Adapter</a>');
$item->setImage("isp-adapter.jpg");
$item->addSizePrice(new SizePrice("Standardkit", 4.00));

$items[] = $item;

$targetMails = array("vorstand@raumzeitlabor.de", "mail@oliverknapp.de", "felicitus@felicitus.org");
