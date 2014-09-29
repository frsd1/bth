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
<div id='m1' class='flash'>
<p id='text' class='black'>Hi this text should be replaced when page and DOM is loaded.</p>
</div>

<div id='m2' class='flash'>
<p id='text' class='black'>M is loaded.</p>
</div>
<h1>Redovisning av kursmomenten</h1>

<h2>Kursmoment 1: Kom igång med Objektorienterad PHP</h2>

<p>I det första kursmomentet ska man ladda ner en webbmall, kallad Anax, som därefter ska granskas och ändras för att passa kursen och kursmomentet. Koden laddas ner ifrån Github och utgångspunkten blir den så kallade me-sidan som det hänvisas till i uppgiften.<br> Ett par förändringar behövdes göras i koden och namnet Anax ska bytas ut till något eget, jag väljer att byta till web, dvs "web-base".Ett reguljärt uttryck används för att säkert ändra på alla ställen där ANAX/Anax/anax förekommer till WEB/Web/web<br><br> <b>find -name \* -exec sed -i "s/pattern/newpattern/g" {} \;</b>.<br><br> Nu är ordet "ANAX/Anax/anax" utbytt i katalogstrukturen och filerna. Kodbasen ligger i katalogen web-base och för kursmoment finns koden i katalogen kmom01. Därefter anpassas webmallen så den liknar exempeluppgiften. Bland annat förändras stilmallen. Jag implementerar en ny meny med ett eget utseende.<br>Jag arbetar i Ubuntu och skriver kod och dokumentation i vi alternativt Gedit. För att överföra filer använder jag mig av det rekomenderade programmet Filezilla. Guiden som följer med kursmomentet gav en välbehövlig repetition av språket php (att man använder punkt(.) där man skulle förvänta sig plus(+) för att addera text är bra att bli påmind om. Annars var det inga stora överraskningar. Strukturen i Anax-webbmall blev jag förvirrad av i starten. Jag har visserligen arbetat med php-kod som är strukturerad på liknade sätt men det tog ett tag att komma in i hur strukturen ser ut. Då hade jag bra hjälp av texten som förklarade Anax. I från början tyckte jag att delar av koden kunde flyttas men efter hand faller det mesta på plats under övningens gång. Implementeringen av source.php var lite strulig eftersom jag fick ändra namn på stilmallen för att det skulle fungera och att det skulle implementeras som en modul. Därefter laddar jag upp eller pushar mallen till Github. Detta blev ett bra tillfälle att titta lite djupare i Github. I filen .gitignore placerade jag en regel att git ska ignorera <b>*.*~</b> och då slipper jag uppladdningen av temporära filer.<br><br>    
Avslutningsvis tycker jag att detta var väldigt lärorikt för mig och strulet i Github gav mig välbehövlig repetition på Git. </p>

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
