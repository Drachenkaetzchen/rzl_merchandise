# RZL-Merchandise-Shop

## Technik

Der Shop funktioniert ohne Datenbank. Alle Items werden in config.php definiert. Als Template-Engine kommt
[Twig](http://twig.sensiolabs.org/) zum Einsatz.

Es gibt 2 Klassen, welche den Shop definieren:

* Item: Definiert ein Item mit Name, Beschreibung und Bild
* SizePrice: Definiert die Größen mit dem jeweiligen Preis

Die Entscheidung für die Instanziierung von Objekten kommt daher, daß der Autor kein Array-Gefrickel mag und in
Verbindung mit Twig die Templates sehr kompakt gehalten werden können.