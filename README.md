
## 1 Features
Mit diesem Joomla-Plugin können Widgets vom Service www.fussball.de auf eine einfache Art in Joomla-Artikel eingefügt werden.

## 2 Vorraussetzungen
Das Plugin kann nur korrekt funktionieren wenn Sie folgende Vorraussetzungen erfüllen:
* Joomla Version 3.X
* Ein Benutzeraccount bei www.fussball.de besitzen
* Sie ein Widget unter www.fussball.de eingerichtet haben

Anmerkung:
Wie Sie ein Widget einrichten können Sie unter folgendem Artikel nachlesen:
* http://www.fussball.de/newsdetail/tipps-fuer-webmaster-so-baue-ich-widgetsein/-/article-id/101716#!/section/news-detail
* http://portal.dfbnet.org/fileadmin/content/downloads/Kurzanleitung_fuer_Widget_Generierung.pdf

## 3 Installation
Bitte erstellen Sie vor der Installation eine Datensicherung Ihrer Webseite / Joomla-Installation. Sollte es zu Kompatibilitätsproblemen kommen, so übernehmen wir hierfür keine Haftung.

Erweiterungen --> Erweiterungen

Wählen Sie die Datei 'plg_content_fussballergebnisse.zip' mit Hilfe des Joomla-Installers aus, die Installation erfolgt anschließend automatisch.
Sie müssen nun noch das entsprechende Plugin in Joomla aktivieren. Dieses Vorgehenist in der Joomla-Dokumentation beschrieben.

## 4 Verwendung
Wenn Sie ein passendes Widget für Ihre Bedürfnisse auf www.fussball.de angelegt haben wurde Ihnen ein sogenannter "Website-Schlüssel" erstellt welcher einmalig für dieses Widget zur Identifizierung dient.
Öffnen Sie den gewünschten Joomla-Artikel in welchem nun das Widget eingebunden werden soll. Im Texteditor von Joomla brauchen Sie nun nur noch an der gewünschten Stelle folgenden Code eingeben:

{fussballergebnisse WEBSITE-SCHLÜSSEL}

Ersetzen Sie "WEBSITE-SCHLÜSSEL" durch den Code den Sie auf www.fussball.de zugewiesen bekommen haben. 
Beispiel:

"{fussballergebnisse 0123456789000000VS541L4FVUJRR6C2}" .

Speichern Sie den Artikel anschließend in Joomla und laden Sie die gewünschte Seite neu. Nun sollte statt dem Code das Widget von Fussball.de geladen werden.

Achtung:
Dieses Plugin funktioniert nur solange Fussball.de diesen Service in der jetzigen Form anbietet. In jedem Fall müssen Sie ein Konto bei Fussball.de erstellen.
Dieses Plugin macht es lediglich einfacher das Widget korrekt in die eigene Joomla-Webseite einzubinden!
