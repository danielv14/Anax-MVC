Redovisning
====================================

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