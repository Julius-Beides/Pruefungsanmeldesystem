# Prüfungsanmeldesystem
Dies ist ein Projekt für unsere Schule. Mit 
dieser Weboberfläche können sich Schüler für 
die Prüfungen der neuen Oberstufe anmelden.

Das hier genannte ist im Ordner `form`.
Die Seite besteht aus der Anmelde-Seite für Schüler 
und der Admin-Seite.

## Admin
In `admin.php` kann der Anmeldezeitraum 
freigeschaltet werden und die gespeicherten
Anmeldedaten können heruntergeladen werden als
CSV oder PDF.

## Prüfunsanmeldung
In ```index.php``` können die Schüler ihre Daten
eingeben und sich anmelden.

Wenn die Anmeldung gerade nicht offen ist, 
dann wird statt dem Formular eine entsprechende Meldung angezeit.

## Berechtigungen 
Noch ausständig!  
Die Zugriffsberechtigungen werden nicht von uns 
gemacht, sondern von Typo3 auf der Schulwebsite 
von dem Lehrer, der es installiert.

Es wäre am besten, wenn in der CSV-Datei noch der Name
gespeichert wird, unter dem der Schüler angemeldet ist.
Damit künnte man Missbrauch nachweisen.

<b>TODO.md beachten!</b>

## Grundgerüst
Wir haben außerdem eine Datei `grundgeruest.html` erstellt, in
der alle Eingabe-Elemente von Bootstrap enthalten sind.
Daraus kann man sich etwas zusammenbasteln.

# Scripting Engine
Im Ordner `scripting` gibt es noch etwas spezielles von Kempinger.

#### Befehle
Befehle werden generell mit `\[identifier=name#breite]` bezeichnet.  
Die Breite is von 0-12, wobei 12 die maximal verfügbare Breite ist.
<br><br><br>
##### Neue Zeile
> leere Zeile oder \[br]

##### Trennlinie
> --- oder \[hr]

##### Text 
> \[text=feldname#breite]

##### Textfeld
> \[textfield=feldname#breite]

##### Emailfeld
> \[email=feldname#breite]

##### Datum
> \[date=feldname#breite]

##### Zeitfeld
> \[time=feldname#breite]


