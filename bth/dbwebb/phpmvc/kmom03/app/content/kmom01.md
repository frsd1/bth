#Kursmoment 3 - Bygg ett eget tema

##Inledning
I Detta moment stötte jag på en hel del nyheter. Att Less är mer än en stylesheet fick man lära sig och hur man arbetar med Less och att koden kan förkompileras på serverna var intressanta nyheter i detta moment. Startstäckan var ganska lång eftersom jag hade problem med att flytta över css-koden till Less. Efter validering av koden löste sig en del men jag har fortfarande problem med att få style.php att uppdatera till  att köra aktuella less-filer. Vilket gör att jag hela tiden dubbelkollar. Något som blir aningens tidkrävande men med  firebug  fungerar det.
##Sammanfattning
**CSS-ramverk i allmänhet och vilka tidigare erfarenheter**<br />
Jag har inga tidigare erfarenheter av CSS-ramverk och jag fick skriva några egna CSS-filer för att först förstå hur variabler används i Less. Jag arbetade i jsfiddle.net för att se hur man kan strukturera sin less med variabler. Detta kändes aningens komplicerat i början men jag hittade några tutorials på nätet som förklarade varibler i less. Där hittade jag även exempel på hur man använder funktioner och for-loopar i less. Det finns alltså mycket att lära när det gäller Less. Dock känner jag att jag bara har skrapat på ytan. Att organisera stilmallar med hjälp av programmering känns såklart helt rätt. Om man jämför med ett programmeringspråk är det väldigt fria tyglar i stilmallerna, detta kan Less styra upp. Arbetet med stilmallarna tog en del tid men med hjälp av valdering så fick jag ordning på dem.

<br />**Vad tycker du om LESS, lessphp och Semantic.gs?**<br />
LESS är som sagt intressant och nytt. Lessphp var intressant att läsa om och modellen efterliknar de vanliga stora kompilatorberoende språken. Lessphp gör på detta sättet en validering av koden, vilket förbättrar koden avsevärt.
Semantic.gs, även det helt nytt, känns helt rätt att arbeta med. Det blir väldigt smidigt att organisera regionerna i Less, fördelen blir att förändringar skrivs i Less-filen. Mer kod i Less och mindre html på php-sidan. Detta gör det enkelt att anpassa sidan till olika skärmstorleker eftersom man kan skriva villkoren för sidans responsivitet i en less-fil.

<br />**Vad tycker du om gridbaserad layout, vertikalt och horisontellt?**<br />
När man har läst på om Less är det självklart att flytta mer kod till stylesheeten. Det blir effektivt och lättarbetat att anpassa layouten i en Lessfil.  

<br />**Har du några kommentarer om Font Awesome, Bootstrap, Normalize?**<br />
I avsnitt om Font Awesome i övningen får man en bra sammanfattning varför man ska använda Font Awesome. Skalbara ikoner som enkelt implementeras är tidsbesparande och är som sagt skalbara. Detta effektiviserar helt klart arbete. Istället för att man använder sig av statiska bilder.
Att använda Normalize verkar vara perfekt. Såvida det fungerar så att sidan ser lika ut på de olika webbläsarna. Bootstrap var intressant att titta på och jämföra strukturen i bootstrap med vad som är byggt i övning. 
 
<br />**Beskriv ditt tema, hur tänkte du när du gjorde det, gjorde du några utsvävningar?**<br />
Mitt tema utgår från övningens upplägg.  Därefter arbetade jag med lessfilen, responsive.less, så att att temat skulle visas på ett så responsivt sätt som möjligt. Det har tre brytpunkter och tydliggörs med hjälp av en bild i div-taggen main.
<br />
**Antog du utmaningen som extra uppgift?**<br />
Jag har inte tittat på denna uppgift. För mig var det mycket nytt i uppgiften, detta får jag titta på senare.



#Kursmoment 2 - Kontroller och Modeller

##Sammanfattning

I detta moment fick jag verkligen titta djupt i Anax-mvc. Och titta igen eftersom det trassla till sig. Men först skulle man arbeta med Composer. För installationen av Composer använde jag mig av terminalfönstret enligt uppgiften. Därefter skedde installationen smidigt och enkelt. Sedan installerades och validerades phpmvc/comment. Den beskrivning som fanns för uppgiften var tillräcklig för installationen.<br /><br />
Kommentatorsystemet kom enkelt på plats efter att jag genomfört början av uppgiften. Packagist var intressant att söka i och i dess enkla användargränssnitt hittar man många paket både stor och små som löser enkla kodningsproblem. Ett paket som jag ska försöka testa under kursmoment 4 är doctrine/orm, men det finns fler andra mindre som jag ska försöka implementera i Anax/mvc.
För att få kommentatorsystemet på plats behövde jag titta i forumet eftersom jag hade svårt med att få kommentatorsystemet att fungera på enskilda sidor. Jag har läst igenom filstrukturen i mvc många gånger och skrivit upp flödet. Detta gav en större förståelse för mvc.<br />
En vital del i mvc/php är session där objektet sparas så som jag förstår det. När det blev klart för mig hur detta fungerade i flödet blev det enklare att förstå hur dispatchar fungerar ihop med en controller när sidan laddas (frontcontroller laddas). Och att dispatchar kan kopplas samman med en enskilda routers. Detta gav en förklaring på hur kommentarer per router fungerade. Vilket gav ett fungerande kommentatorsystem där kopplingen mellan router och dispatcher ger en koppling till enskilda sidor.Detta blev en nyttig uppgift för att förstå mvc-systemet. Efter att skrivit kod med trait och studerat trait i mvc börjar det hela falla på plats.<br /> <br />
Till sist implementerade jag gravatar och så att kommentarmenyn är stängd från början förutom kommentarsboxen. Klickar man på denna visas hela kommentarsystemet. Detta sker med hjälpa av en javascript/jquery kod. Kontroll av e-post och http adress sker med hjälp av html 5 komponenter för input. Detta finns inte i det ursprungliga phpmvc/comment paketet men är ett smidigt sätt för validering på clientsidan.
<br />
phpmvc/comment  är ett enkelt skelett som uppgiften skulle bygga vidare så svagheterna kan vara det som skulle lösas i uppgiften.


#Kursmoment 1 - PHP-baserade och MVC-inspirerade ramverk

##Inledning
I detta kursmoment ska man bekanta sig med ramverket för kursen , Anax-mvc, och därefter göra några justeringar så det fungerar på sin egen webbplats enligt specifikationen i uppgiften.  
 
##Sammanfattning
Det var mycket nytt för mig i detta kursmoment men även moment/programvaror jag arbetat med tidigare. Jag tänker då på versionshanteringen och att skriva i markdown vilket är väldigt praktiskt och tidsbesparande, (skriver en del i Latex för övrigt). Min uppfattning av Anax-MVC är positivt eftersom "var sak på sin plats" flyttat fram ett steg till ifrån Anax-base i OOPHP-kursen.<br> I artikeln *Objektorienterade konstruktioner för ramverk med PHP* fick jag en bra och snabb sammanfatting över vad jag ska titta extra. Eftersom jag programmerar i Java/C# var vissa begrepp bekanta andra inte. *PHP the right way* fick jag en enkel och lärorika sammanfattning av hur jag ska strukturera min kod då den blir mer omfattande.<br><br> Jag läser även kursen OOPHP och därför har jag en bra grund när jag läste koden i katalogstrukturen för Anax-MVC. I OOPHP-kursen ändrar man namn på Anax-base till något eget. Detta gjorde jag även här, men det fungerade icke för mig. Det var bara att börja om med Anax-mvc. Det var även en del tidsödande strul med implementeringen av source.php men annars flöt det på smidigt. Förutom vad som skulle genomföras enligt uppgiften ändrade jag lite i css-filen så att bland annat menyn fick en annan färgsättning.<br>För utvecklingen av program och dokumentation arbetar jag i vi och Gedit och på min laptop har jag en installation av Ubuntu. Filöverföringsprogrammet Filezilla, som du rekommenderar, använder jag för att flytta filer till BTH's server. Avslutningsvis laddade jag upp filerna till Github. Här snubblade jag till eftersom när jag hämtade hem Anax-MVC så fick jag med en .git-katalogen. Denna katalog tog jag inte bort och då jag skulle överföra till Github fanns i katalogstrukturen <b>två</b>.git kataloger. Jag fick lägga lite tid på att förstå vad som var fel då Git klagade och inte ville överföra katalogstrukturen till Github. När detta var löst placerade jag en regler i filen .gitignore. I filen har jag regeln <b>\*.\*~</b> vilket låter Github ignorera de temporära filerna i ubuntu.   

