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
<h1>Redovisning av kursmomenten</h1>

<h2>Kursmoment 1: Kom igång med Objektorienterad PHP</h2>

<p>I det första kursmomentet ska man ladda ner en webbmall, kallad Anax, som därefter ska granskas och ändras för att passa kursen och kursmomentet. Koden laddas ner ifrån Github och utgångspunkten blir den så kallade me-sidan som det hänvisas till i uppgiften.<br> Ett par förändringar behövdes göras i koden och namnet Anax ska bytas ut till något eget, jag väljer att byta till web, dvs "web-base".Ett reguljärt uttryck användes för att säkert ändra på alla ställen där ANAX/Anax/anax finns till WEB/Web/web<br><br> <b>find -name \* -exec sed -i "s/pattern/newpattern/g" {} \;</b>.<br><br> Nu är ordet "ANAX/Anax/anax" utbytt i katalogstrukturen eller filerna. Kodbasen ligger i katalogen web-base och för kursmoment i katalogen kmom01. Därefter anpassas webmallen på samma sätt som i exempeluppgiften. Bland annat ändras stilmallen. Jag implementerar en ny meny med ett eget utseende. Koden skriver jag i vi alt. gedit. För att överföra filer använder jag mig av det rekomenderade programmet Filezilla. Guiden som följer med kursmomentet gav en välbehövlig repition av språket php (att man använder punkt(.) där man skulle förvänta sig plus(+) för att addera text är bra att bli påmind om, men annars var det inga stora överraskningar. Strukturen i Anax-webbmall blev jag förvirrad av i starten. Jag har visserligen arbetat med php-kod som är strukturerad på liknade sätt men det tog ett tag att komma in i hur strukturen ser ut. Då hade jag bra hjälp av texten som förklarade Anax. I från början tyckte jag att delar av koden kunde flyttas men efter hand faller det mesta på plats under övningens gång. Implementeringen av source.php var lite strulig eftersom jag fick ändra namn på stilmallen. Filen source.php ligger även insluten i en stiliserad div-tag. Avslutningsvis för jag säga att jag lärt mig en hel del och att få en mall att anpassa ger nyttig träning i hur kod ska struktureras.</p>

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
