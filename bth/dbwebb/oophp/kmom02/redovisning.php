<?php 
/**
 * This is a Anax pagecontroller.
 *
 */
// Include the essential config-file which also creates the $anax variable with its defaults.
include(__DIR__.'/config.php'); 

// Do it and store it all in variables in the Anax container.
$web['title'] = "Redovisning";


$web['main'] = <<<EOD
<article class="readable">
	<button id="button" onclick="showhide(1)">Moment 1</button>	
	<button id="button" onclick="showhide(2)">Moment 2</button>	

<div id='m1' class='flash'>
<p id='text' class='black'>
<h1>Redovisning av kursmomenten</h1>

<h2>Kursmoment 1: Kom igång med Objektorienterad PHP</h2>

<p>I det första kursmomentet ska man ladda ner en webbmall, kallad Anax, som därefter ska granskas och ändras för att passa kursen och kursmomentet. Koden laddas ner ifrån Github och utgångspunkten blir den så kallade me-sidan som det hänvisas till i uppgiften.<br> Ett par förändringar behövdes göras i koden och namnet Anax ska bytas ut till något eget, jag väljer att byta till web, dvs "web-base".Ett reguljärt uttryck används för att säkert ändra på alla ställen där ANAX/Anax/anax förekommer till WEB/Web/web<br><br> <b>find -name \* -exec sed -i "s/pattern/newpattern/g" {} \;</b>.<br><br> Nu är ordet "ANAX/Anax/anax" utbytt i katalogstrukturen och filerna. Kodbasen ligger i katalogen web-base och för kursmoment finns koden i katalogen kmom01. Därefter anpassas webmallen så den liknar exempeluppgiften. Bland annat förändras stilmallen. Jag implementerar en ny meny med ett eget utseende.<br>Jag arbetar i Ubuntu och skriver kod och dokumentation i vi alternativt Gedit. För att överföra filer använder jag mig av det rekomenderade programmet Filezilla. Guiden som följer med kursmomentet gav en välbehövlig repetition av språket php (att man använder punkt(.) där man skulle förvänta sig plus(+) för att addera text är bra att bli påmind om. Annars var det inga stora överraskningar. Strukturen i Anax-webbmall blev jag förvirrad av i starten. Jag har visserligen arbetat med php-kod som är strukturerad på liknade sätt men det tog ett tag att komma in i hur strukturen ser ut. Då hade jag bra hjälp av texten som förklarade Anax. I från början tyckte jag att delar av koden kunde flyttas men efter hand faller det mesta på plats under övningens gång. Implementeringen av source.php var lite strulig eftersom jag fick ändra namn på stilmallen för att det skulle fungera och att det skulle implementeras som en modul. Därefter laddar jag upp eller pushar mallen till Github. Detta blev ett bra tillfälle att titta lite djupare i Github. I filen .gitignore placerade jag en regel att git ska ignorera <b>*.*~</b> och då slipper jag uppladdningen av temporära filer.<br><br>    
Avslutningsvis tycker jag att detta var väldigt lärorikt för mig och strulet i Github gav mig välbehövlig repetition på Git. </p>
</div>

<div id='m2' class='flash' style:visibility="hidden">
<h1>Redovisning av kursmomenten</h1>

<h2>Kursmoment 2: Kom igång med Objektorienterad PHP</h2>

<h2>Sammanfattning</h2>
<p id='text' class='black'>
Detta kursmoment var väldigt givande eftersom jag använde session för objekt, något jag inte gjort tidigare. För att lösa övningen fick man spara informationen ifrån sidorna i en _session-variabel.  Java/C#/vb har jag programmerat i tidigare så jag känner till det objekt orienterade konceptet.<br> 
Jag hade stor användning av den rekommenderade övningen. Denna blev utgångspunkten till mitt program, tärningspelet 100. Den andra uppgiften kalendern startade jag på men får se det som något för kommande veckor. När övningen var avslutad började jag med att förändra koden så att den följer reglerna i tärningspelet 100. Därefter skapade jag en klass, CGameManager, som är den klass som pratar med användargränssnittet och med klassen CDiceHundred. I Användargränssnittet instansieras ett objekt av klassen CGameManager och därefter händer det mesta i klass CGameManager. Klassen CDiceHundred är en klass där information lagras och uträkning av ett kast sker. Användargränssnittet anropar return-funktioner ifrån CGameManager för att visa resultatet för användaren.<br><br> Efter ett anrop ifrån användargränsnittet till CGamemanager placeras CGamemanager-objektet i en Sessionvariabel för att hämtas vid nästa anrop, då webbsidan ladda om. <br>
Detta gav att programmerandet av CGameManager och CDiceHundred blev lite omständigt. Men som jag förstår det är detta poängen med att placera allt i EN session-variabel. Vilket gör att skriver man ett större program blir det mer lätthanterligt när man endast hanterar olika objekt av sina klasser i session-variabler.</p>
<ul>
	<li><a href='./dicehundred.php'>Spelet hundra</a></li>
</ul>
<br>	
</div>
<!---
css-kod
.readable {
    width: 72%;
		padding-top: 3px;
    padding-left: 5px;
    padding-right: 5px;
    padding-bottom: 1.1px;
    box-shadow: 1px 2px 2px 1px #888888;
}


<h2>Kmom02: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom03: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom04: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom05: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom06: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom07/10: ...</h2>

<p>Redovisningstext...</p>
--->

{$web['byline']}

</article>

EOD;

// Finally, leave it all to the rendering phase of Anax.
include(WEB_THEME_PATH);
