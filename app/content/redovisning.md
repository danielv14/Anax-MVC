Redovisning
====================================

Kmom05: Bygg ut ramverket
------------------------------------------
###Reflektioner
Det var skönt att det här momentet inte var lika omfattande eller tidskrävande som det föregående momentet. I det stora hela har det gått väldigt bra och då jag under kursens gång har använt mig av GitHub redan för mitt Anax-MVC var det inte speciellt svårt att få till len separat repository för modulen. Tycker versionshantering i form av GitHub är guld värd fast jag är ensam utvecklare på mitt Anax-MVC repository. Kan tänka mig hur smidigt det är att ha GitHub som tillgång när man är flera utvecklare på samma projekt.
Det var intressant att läsa artiklarna om mot-reaktionen till de mer avancerade ramverken och se på ramverken från den ”andra sidan” där man eftersträvar enkelhet osv.     

För tillfället använder jag mig av programmet GitHub till Mac. Tycker att det är lite lättare att jobba med ett GUI än att använda mig av terminalen när jag commitar och pushar till mina repos. Har dock tidigare haft lite problem med det programmet då jag inte riktigt förstått sync-funktionen. När jag har lagt till kod i Anax-MVC och sen försökt att commita och synca koden till GitHub har min lokala kod återställts till den senaste pushen som ligger uppe på GitHub. Jag har tidigare inte fått någon kläm på programmets sync-funktion och den vanliga push-funktionen förrän detta momentet då jag kollade upp F.A.Q'n för programmet som jag insåg hur jag skulle göra för att pusha min kod. Tidigare har jag under kursens gång använt mig av min texteditors inbyggda GitHub funktioner men jag tror att jag kommer använda mig av GitHub för Mac hädanefter.

Hade stora problem av någon anledning när jag skulle skicka över momentet till studentservern. Trots att jag hade hela mappen med allt innehåll markerat och flyttade över den på studentservern så ville inte alla filer läggas upp. Detta trots att jag gjorde precis som jag gjort i de tidigare momenten. Vanligtvis använder jag mig av min texteditors inbyggda funktion att flytta filer till en remote server men då jag stötte på problem provade jag FileZilla istället och av någon konstig anledning fungerade det då.

###Var hittade du inspiration till ditt val av modul och var hittade du kodbasen som du använde?
Jag hade inte direkt någon specifik idé jag ville förverkliga när jag väl började med uppgiften utan det stod helt enkelt mellan de exempel som fanns listade. Var först inne på att att skapa en modul som hämtar RSS-flöde men jag jag provade på en  modul som visar flash-meddelanden. Dock skrapade jag den idén och gjorde ett Rss-flöde istället då jag fastnade lite med modulen för flash.
###Hur gick det att utveckla modulen och integrera i ditt ramverk?
Det gick bra att utveckla modulen och mycket kunde jag stödja mig på de moduler som redan finns i Anax-MVC för att få det att fungera. Hämtade mycket tips från CDatabase och CForm om hur jag skulle gå tillväga.
###Hur gick det att publicera paketet på Packagist?
Det gick förvånansvärt lätt att publicera paketet på Packagist faktiskt. Fick först klagomål om att ett namn inte bör innehålla stor bokstav så jag ändrade detta i min composer.json och således gick det att lägga upp paketet. Det var väldigt smidigt att man kunde koppla samman GitHub och Packagist så att paketet kan reflektera eventuella förändringar i kod man pushar till GitHub.
 
###Hur gick det att skriva dokumentationen och testa att modulen fungerar tillsammans med Anax-MVC?
Det gick bra att skriva dokumentationen, tittade mycket på hur dokumentationen gick till på Mos olika repon. Det gick även bra att testa modulen.

###Gjorde du extrauppgiften?
Det gjorde jag inte.

<hr>

Kmom04: Databasdrivna modeller
-----------------------------------------
###Reflektioner
Det här korsmomentet har känts som det svåraste och mest omfattande hittills och det tog verkligen mycket längre tid än vad som var utsatt. Fastnade både här och där med allt möjligt. Komplexiteten av Anax-MVC är inget jag riktigt än vant mig med, även om jag blir mer och mer bekväm med strukturen för varje kursmoment. 
Guiderna för denna kursen är inte lika utförliga som kurspaketets tidigare kurser vilket kan vara lite tufft ibland då man inte vet alla gånger vart koden hör hemma. Men det är väl kanske meningen att vi ska tänka lite mer själva och inte blint följa guiden. 

Hade stora problem att använda mig av composer för att installera det som behövdes för övningarna. Antecknade inte händelseförloppet speciellt noggrant då det verkligen var problem på problem och jag var ganska stressad och trodde inte att jag skulle hinna klart med uppgiften i tid. 
Men en del problem med composer handlade om att jag inte hade gjort en composer update och fick felmeddelanden om att det inte gick att hitta det namespace som anropades. Satt fast med det problemet väldigt länge och det var bara ett hinder av många under det här momentets gång. Skulle vilja säga att det mesta av det här momentet handlade om felsökning.

Fick felmeddelanden om att ”header redirect” inte fungerade som det skulle heller och vände mig efter ett tags felsökande utan resultat till forumet och läste om att det skulle kunna vara att verbose var påslaget i config-mysql filen som låg bakom problemet. Mycket riktigt var det så.

###Vad tycker du om formulärhantering som visas i kursmomentet?
Tycker det var väldigt smidigt när jag väl fick det att funka som det ska. Det tog lite tid i början att implementera det men när det väl var på plats gick det bra. Smidigt med validering av formulär även det kanske kan skötas med lite mer ”enkla” knep.

###Vad tycker du om databashanteringen som visas, föredrar du kanske traditionell SQL?
Även databashanteringen var smidig när den väl implementerades korrekt. Hade lite problem i början att få det att fungera men tillslut löste det sig. Jag är ju mer van med traditionella SQL queries så det var ju såklart lite ovant att hantera det på ett annat sätt. Det kändes väldigt smidigt med databashanteringen som introducerades i detta kursmoment även om det som sagt var ovant att inte skriva traditionell SQL.

###Gjorde du några vägval, eller extra saker, när du utvecklade basklassen för modeller?
Gjorde inga extra saker direkt då jag hade det tillräckligt svårt att hänga med i guiderna och få till grundfunktionaliteten. 

###Beskriv vilka vägval du gjorde och hur du valde att implementera kommentarer i databasen
Från början hade jag en egen fil som skötte visningen av kommentarer samt funktionen att lägga till nya kommentarer. Tyckte det var lättare att isolera den biten under tiden som jag jobbade med att få till kommentarsystemet kopplat till en databas. Efter att jag var nöjd med funktionaliteten flyttade jag över det till min index fil.
Annars gjorde jag ungefär som i uppgiften med användare. En tom model som ”extendar" CDatabaseModel och sen använder jag mig av CommentDbController på samma sätt som UsersController används.

###Gjorde du extrauppgiften?
Det gjorde jag inte.

<hr>



Kmom03: Bygg ett eget tema
--------------------------------------

### Reflektioner
Då var det tredje momentet klart och det var ett intressant och lärorikt sådant. Har tidigare inte kommit i kontakt med mycket av det som togs upp i momentet så det var mycket nytt att ta in. Men med guiden till hands gick det ändå bra att arbeta sig igenom momentet. 
Det vart många nya filer att hålla redo på, kanske främst .less filer och jag tycker att det ibland kan bli lite överväldigande med så många olika filer, men det är väl en vanesak kanske.    

Hade lite problem när jag skulle i guiden när jag skulle flytta CSS-kod till att bli till LESS. Fick inte min style att ladda överhuvudtaget. Provade att kommentera bort varje import enskilt i min style.less för att se i vilken fil problemet låg. Visade sig att det var min structure.less som bråkade. Det första som slog mig var att min font kanske ställde till problemet, vilket stämde. Efter att jag bytt font laddades all style in igen. Detta problemet uppstod dock innan all style för typografi flyttades över till en separat .less-fil.
Ett annat problem uppstod när jag arbetade med sidan för Font Awesome då mina ikoner inte ville visas. Jag hade helt enkelt bara skrivit lite fel i variabeln till font-mappen.

### Vad tycker du om CSS-ramverk i allmänhet och vilka tidigare erfarenheter har du av dem?
Jag har minimal erfarenhet av CSS-ramverk och om jag inte missminner mig använde jag ett CSS-ramverk någon gång under en gymnasiekurs jag hade i webbutveckling. Det kan dock bara ha varit en simpel CSS template också, jag minns inte riktigt. I varje fall har jag inte varit i kontakt med de mer avancerade ramverken.
Tycker rent allmänt att CSS-ramverk är väldigt smidigt. Mycket tid kan sparas genom att använda ett sådant, även om det är en inlärningskurva när man börjar använda ett ramverk.  Kanske inte speciellt smart att direkt hoppa på ett CSS-ramverk utan att kunna grunden i CSS dock.

### Vad tycker du om LESS, lessphp och Semantic.gs?
LESS gör det verkligen mer smidigt att arbeta med style. Äntligen kan man sätta variabler för exempelvis färger och mått och på så vis bara ändra färger i deklarationen av variabeln. Har tidigare bara sett någon tutorial-video om hur man skriver mer enklare kod med LESS. Tyckte då att det verkade väldigt bra och intressant och det var kul att få prova på det i ett kursmoment.
Lessphp var ett smidigt sätt att kompilera less-kod men jag kan inte yttra mig om hur lessphp står sig mot andra metoder att just kompilera less-kod. Semantic.gs var även det ett väldigt smidigt verktyg för att få till en mer korrekt layout. Kan ibland vara lite svårt att få till en bra och korrekt layout och jag har tidigare haft lite problem med float och dylikt vissa stunder. Semantic sköter det bra och på ett logiskt sätt. Väldigt bra att det är responsivt också. 

### Vad tycker du om gridbaserad layout, vertikalt och horisontellt?
Gridbaserad layout hjälper till och gör att en sida struktureras på korrekt sätt. Det är även till stor nytta när man ska anpassa en sida för mindre skärmar i form av exempelvis smartphones och surfplattor. Att kombinera de vertikal och horisontel gridbaserad layout gör att en sida kan se mer korrekt och strukturerad ut.
Det var intressant att läsa i en av artiklarna om den ”perfekta” storleken på font och om det magiska numret.


### Har du några kommentarer om Font Awesome, Bootstrap, Normalize?
Har tidigare inte använt mig av Font Awesome, men har vetat om det. Tycker det är ett väldigt bra verktyg för att använda sig av ikoner på en sida. Att dom är skalbara är också väldigt bra för att inte tala om hur många ikoner det finns att välja bland.
Bootstrap har jag också hört talas om tidigare och tycker att det verkar som ett väldigt kraftfullt verktyg att använda sig av. Det är väl en inkörningsperiod med Bootstrap som med mycket annat men jag skulle vilja försöka använda mig av det mer i framtiden. Likväl Font Awesome.

### Beskriv ditt tema, hur tänkte du när du gjorde det, gjorde du några utsvävningar?
Jag gjorde inte direkt några utsvävningar från de tema som presenteras i guiden. Temat har 3 stycken brytpunkter beroende på hur stor skärmytan är och grid-bakgrunden syns när man hovrar med musen över wrappern. Skulle vilja ha haft min navbar responsiv med en "hamburger menu” men det blev inte att jag försökte mig på det för att det var lite ont om tid.

### Antog du utmaningen som extra uppgift?
Det gjorde jag inte.

<hr>

Kmom02: Kontroller och modeller
------------------------------------

### Reflektioner
Det här momentet, precis som det förra, var krångligt och svårt att ta sig igenom för mig. Stötte på problem relativt snabbt som jag fastnade på väldigt länge osv. Hade stora problem väldigt länge med att ens validera composer. Fick error-meddelanden och förstod inte vad felet var då jag hade gjort exakt som i övningen. Det var inte förrän jag vände mig till forumet och sökte på om någon haft liknande problem som jag fick tipset om att skriva ”php composer validate” och inte bara ”composer validate”. Kanske borde ha förstått det från början, men men. Tog inte lång tid förrän nästa problem dök upp i form av ett slarvfel. Jag hade missat att skriva ”—no-dev” och skrev istället ”—nodev” när jag skulle göra ”composer install”. Det slarvfelet tog lite väl lång tid att ta sig förbi och för att skylla på något så kanske jag hade suttit med övningen för länge i sträck.

### Hur känns det att jobba med Composer?
I det stora hela måste jag säga att det ändå gick okej att jobba med Composer. Trots några problem här och där gick det relativt smidigt att installera och använda mig av Composer. Klart att det är ovant och konstigt att använda sig av det när det är så här pass nytt men jag tycker mig ändå förstå litegrann hur kraftfullt det är. Jag kan inte direkt kalla mig expert på att använda mig av kommandotolken/terminal, men jag tycker ändå att det gick bra.

### Vad tror du om de paket som finns i Packagist, är det något du kan tänka dig att använda och hittade du något spännande att inkludera i ditt ramverk?
Jag har inte djupdykt i utbudet av paket som finns på Packagist men det finns nog helt klart en uppsjö av spännande och bra paket som man skulle kunna inkludera i Anax. Paketet som integrerar Google Authenticator i ett php-projekt lät väldigt spännande. Hittade även ett paket som kunde hämta information från IMDb, tycker det var lite roligt men kanske inte något som passar sig i Anax riktigt.

### Hur var begreppen att förstå med klasser som kontroller som tjänster som dispatchas, fick du ihop allt?
Än så länge har jag stora relativt stora problem att hänga med i det hela. Mycket hittills i den här kursen har svårt att greppa och än är det frågetecken kvar. Kommer få repetera och studera Anax mer för att försöka greppa det hela.

### Hittade du svagheter i koden som följde med phpmvc/comment? Kunde du förbättra något?
En svaghet, som många redan tagit upp är ju validering av textfälten en svaghet. Man borde inte kunna skicka tomma kommentarer och exempelvis mail borde bara accepteras på korrekt sätt. Vidare hade ett spamfilter varit bra att ha samt möjligheten att kunna svara på en specifik kommentar.  

<hr>


 
Kmom01: PHP-baserade och MVC-inspirerade ramverk
------------------------------------
 
### Reflektioner
Ojojoj...vilket kursmoment. Tycker att det har varit väldigt omfattande med mycket nytt. Känslan är ungefär densamma, om inte något värre, som känslan som innfann sig efter förra kursens första moment. Då introducerades också ett Anax, dock inte lika avancerat.
Tycker att det har varit lite svårt att hänga med då koden är väldigt uppdelad och jag vet inte riktigt, till en början vart jag har alla delar. Detta är väl något man vänjer sig med ju mer man arbetar med ramverket.        

Det gick bra att jobba igenom guiden även om det fortfarande är många frågetecken i mitt huvud.   
Stötte på ett problem när jag skulle implementera källkodsvisningen på min sida. Fick felmeddelanden om att jag hade placerat namespace på fel ställe fast jag uppenbarligen inte hade det då jag hade placerat det precis innan classen. Hade dock inte klonat hela Source som guiden instruerade och efter att jag gjort det, för att försäkra mig om att allt skulle bli rätt, så försvann självklart mitt problem. Vet inte riktigt vad som var fel men det löste sig alltså.        
    
Hade väldiga problem först med .htaccess och snygga länkar att fungera på studentservern. Först kopierades .htaccess alls över till studentservern då filen är dold i Coda. Upptäckte det när jag försökte kolla på sourcen till .htaccess att jag fick error om att filen inte fanns. Googlade på .htaccess och Coda och upptäckte att man kunde visa "osynliga" filer med en inställning. Tack vare att filen var synlig gick det att flytta över den till studentservern men det fungerade fortfarande inte. Tittade i forumet och andra studenters filer och kom tillslut fram till en lösning.         

Har skapat ett konto på GitHub med ambitionen att använda mig av det unders kursens gång. Tyvärr så blev det lite mardrömsaktigt när jag försökte lägga upp det färdiga momentet där. På något vis försvann mina "me-filer" lokalt och de återfanns inte heller på GitHub. Jag hade inte heller gjort en aktuell backup mer än från ett skede då jag hade en egen style på sidan. Således fick jag i princip göra om guiden för att skapa en egen me-sida igen. Efter att jag gjort klart uppgiften igen och lagt backups lite här och där och blivit lite mer bekväm med GitHub lyckades jag tillslut få upp det dit utan problem.

### Vilken utvecklingsmiljö använder du?
+ Mac OS X 10.10
+ Coda 2 (både som editor of för att föra över filer)
+ MAMP
+ Pixelmator (om exempelvis en logga behöver göras)
+ Använder i vanliga fall Safari men har även Firefox och Chrome för testning

Trivs väldigt bra med Coda än så länge. Kan strukturerar arbetsflödet väldigt bra med olika projekt som representerar varje moment och har hittils gjort så i kurspaketets tidigare kurser. Det gör att det är väldigt smidigt att hoppa mellan momenten om så skulle behövas. Visserligen är inte Coda unikt med att kunna hantera projekt. Uppladdningen till skolservern kan även Coda sköta, vilket är väldigt smidigt.    
Verkar som att Sublime Text är väldgt populärt dock, kanske borde prova på det någon gång.          

Har även tillgång till Internet Explorer genom Bootcamp men har aldrig använt mig av den webbläsaren för utveckling.


### Är du bekant med ramverk sedan tidigare?
Jag är inte bekant med något ramverk sen tidigare, om man inte nämner Anax från förra kursen. Det är mycket nytt att ta in och försöka förstå men det ska nog gå bra tillslut. Har hört talas om ramverk som Wordpress med det är inget jag kollat närmare på direkt.

### Är du sedan tidigare bekant med de avancerade begrepp som introducerades?
De avancerade begreppen är nya för mig och än så länge är det lite svårt att hänga med, men som tidigare sagt så släpper nog det efter ett tag. Som har tagits upp under momentets gång så har ramverk en hög ingångströskel och det samma kan man väl kanske säga om de mer avancerade begreppen också. 

### Din uppfattning om Anax, och speciellt Anax-MVC?
Min uppfattning just nu är att jag står inför ett mer avancerat Anax än det arbetat med tidigare, men som samtidigt har mer möjligheter och kanske till och med är mer "korrekt". Just nu känns det väldigt rörigt men jag bemöter det med inställningen att det kommer släppa med tiden. Lite svårt just nu att hålla koll på alla filer då det är väldigt uppdelat och strukturerat. Men det har ju sina fördelar det med, det blir väldigt organiserat. "Var sak har sin plats" ungefär.