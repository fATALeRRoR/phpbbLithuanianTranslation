<?php
/**
*
* help_faq.php [Lithuanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2013 phpBB Group
* @author 2013-10-20 - Vilius Šumskas
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
$help = array(
	array(
		0	=> '--',
		1	=> 'Prisijungimas ir registracija',
	),
	array(
		0	=> 'Kodėl aš negaliu prisijungti?',
		1	=> 'Gali būti keletas priežasčių kodėl taip yra. Iš pradžių įsitikinkite, kad įvedėte teisingą vartotojo vardą ir slaptažodį. Jeigu jie tikrai teisingi, susisiekite su diskusijų administratoriumi ir pasiteiraukite ar nebuvote išmestas iš diskusijų. Taip pat gali būti, kad iškilo kokių nors techninių bėdų ir puslapio savininkas turi jas ištaisyti.',
	),
	array(
		0	=> 'Kodėl aš iš viso turiu užsiregistruoti?',
		1	=> 'Ar galite rašyti pranešimus neužsiregistravę priklauso nuo diskusijų administratoriaus. Bet kuriuo atveju, užsiregistravus tampa prieinami papildomi dalykai, kuriais negali naudotis anoniminis dalyvis, tokie kaip avatarai, privačios žinutės, elektroninio pašto siuntimas draugam, prisijungimas į dalyvių grupes ir panašiai. Pati registracija užtrunka tik keletą minučių, todėl patartina tai padaryti.',
	),
	array(
		0	=> 'Kodėl kiekvieną kartą aš turiu vis iš naujo prisijungti?',
		1	=> 'Kai prisijungiate prie diskusijų pažymėkite varnelę ties <em>Prijungti mane automatiškai kiekvieno apsilankymo metu</em>. Jeigu to nepadarysite, jus paprasčiausiai atjungs, kai tik uždarysite savo Interneto naršyklės langą. Taip padaryta saugumo sumetimais, kad kitas asmuo negalėtų prisijungti iš jūsų kompiuterio pasinaudodamas jūsų vardu, todėl Interneto kavinėse, bibliotekose, universitetuose ir kitose viešose vietose patartina nežymėti minėtos varneles. Jeigu nematote minėto punkto, vadinasi diskusijų administratorius išjungė šią galimybę.',
	),
	array(
		0	=> 'Ar galima kaip nors paslėpti mano vartotojo vardą, kad jo nesimatytų dabar diskutuojančių dalyvių sąraše?',
		1	=> 'Vartotojo valdymo pulte, kortelėje “Diskusijų lentos nustatymai”, rasite nustatymą <em>Paslėpti mano būseną</em>. Jeigu jį įjungsite apie jūsų prisijungimus žinos tik administratoriai, moderatoriai ir jūs pats. Tapsite vienu iš paslėptų vartotojų.',
	),
	array(
		0	=> 'Pamečiau arba neatsimenu savo slaptažodžio!',
		1	=> 'Nepanikuokite! Kadangi slaptažodis sistemoje saugomas užkoduotas, jo gauti neįmanoma. Tačiau jį galima lengvai pasikeisti. Nueikite į prisijungimo langą ir paspauskite ant <em>Aš pamiršau savo slaptažodį</em> nuorodos. Toliau sekite nurodymus ekrane ir ne už ilgo vėl galėsite prisijungti.',
	),
	array(
		0	=> 'Aš užsiregistravau, tačiau negaliu prisijungti!',
		1	=> 'Iš pradžių patikrinkite ar tikrai įvedėte teisingą vartotojo vardą ir slaptažodį. Jeigu jie teisingi, galėjo atsitikti vienas iš dviejų dalykų. Galbūt diskusijų administratorius įjungė specialią apsaugos nuo vaikų funkciją (COPPA), o jūs registruodamiesi pasirinkote, kad jums dar nėra 13 metų. Tokiu atveju turite sekti nurodymus ekrane. Kai kurios diskusijų lentos reikalauja, kad jūsų vartotojo vardą ir slaptažodį aktyvuotų administratorius arba jūs pats. Informacija apie tai pateikiama registracijos metu. Ne už ilgo turite gauti el. laišką ir sekti nurodymais jame. Jeigu negavote el. laiško, greičiausiai nurodėte neteisingą el. pašto adresą arba jūsų pašto sistema pagalvojo, kad laiškas yra internetinė šiukšlė (spam). Priešingu atveju kreipkitės į diskusijų administratorių.',
	),
	array(
		0	=> 'Kažkada buvau užsiregistravęs, tačiau senai nerašiau į diskusijas, ir negaliu prisijungti. Ką daryti?!',
		1	=> 'Gali būti, kad diskusijų administratorius, dėl kokių nors priežasčių, ištrynė jūsų vartotojo vardą iš sistemos. Dažnai nieko neparašę arba ilgą laiką neaktyvūs vartotojai tiesiog pašalinami iš sistemos norint sumažinti duomenų bazės dydį. Jeigu taip įvyko, užsiregistruokite iš naujo ir aktyviau dalyvaukite diskusijose.',
	),
	array(
		0	=> 'Kas yra apsaugos nuo vaikų funkcija (COPPA)?',
		1	=> 'COPPA - yra Jungtinių Valstijų įstatymas, kuris reikalauja, jog puslapiai, kurie renka informaciją iš asmenų neturinčių 13 metų, turi tam turėti raštišką tėvų ar globėjų sutikimą. Jeigu nesate įsitikinę, kad tai galioja ir jums, kaip bandančiam užsiregistruoti, kreipkitės pagalbos į teisininką. Įsidėmėkite, kad phpBB Grupė neteikia jokių teisinių patarimų, išskyrus tuos, kurie išvardinti apačioje.',
	),
	array(
		0	=> 'Kodėl aš negaliu užsiregistruoti?',
		1	=> 'Gali būti, kad diskusijų administratorius užblokavo jūsų IP adresą arba uždraudė vartotojo vardą, kuriuo bandote užsiregistruoti. Taip pat jis galėjo apskritai išjungti registraciją. Jeigu norite sužinoti, kodėl taip buvo padaryta, susisiekite su diskusijų administratoriumi.',
	),
	array(
		0	=> 'Ką daro nuoroda “Ištrinti visus diskusijų sausainėlius”?',
		1	=> 'Nuoroda “Ištrinti visus diskusijų sausainėlius” ištrina visus phpBB programinės įrangos sukurtus sausainėlius, kuriuose saugoma visa autentifikacijos ir prisijungimo informacija. Jeigu diskusijų administratorius įjungė, jie taip pat teikia perskaitytų pranešimų sekimo funkciją. Kartais, jeigu turite bėdų su prisijungimu arba atsijungimu, sausainėlių ištrynimas gali pagelbėti.',
	),
	array(
		0	=> '--',
		1	=> '--',
	),
	array(
		0	=> '--',
		1	=> 'Vartotojo nustatymai ir parametrai',
	),
	array(
		0	=> 'Kaip pasikeisi savo nustatymus?',
		1	=> 'Visi jūsų nustatymai (jeigu esate užsiregistravęs) saugomi duomenų bazėje. Norėdami juos pakeisti, aplankykite vartotojo valdymo pultą; mygtuką beveik visada rasite viršutinėje puslapio dalyje. Ten rasite visus savo nustatymus.',
	),
	array(
		0	=> 'Neteisingas laikas!',
		1	=> 'Greičiausiai nesutampa laiko juostos. Tokiu atveju keliaukite į vartotojo valdymo pultą ir pasikeiskite savo laiko juostą, kad ji atitiktų vietovę, kurioje esate, pvz.: Londonas, Paryžius, Niujorkas, Sidnėjus ir t.t. Įsidėmėkite, kad keisti laiko juostas, kaip ir daugelį kitų nustatymų, gali tik registruoti vartotojai. Taigi jeigu dar neužsiregistravote, pats metas būtų tai padaryti.',
	),
	array(
		0	=> 'Pakeičiau laiko juostas, tačiau laikas vis tiek neteisingas!',
		1	=> 'Jeigu esate įsitikinę, kad teisingai nustatėte laiko juostą ir vasaros laiką, tada greičiausiai neteisingai nustatymas serverio laikrodis. Praneškite apie tai diskusijų administratoriui.',
	),
	array(
		0	=> 'Kalbų sąraše aš nerandu savo kalbos!',
		1	=> 'Greičiausiai jūsų norima kalba neįdiegta arba tiesiog niekas dar neišvertė šios diskusijų lentos į tą kalbą. Paprašykite diskusijų administratoriaus, kad jis įdiegtų jums reikiamą kalbą. Jeigu vertimas neegzistuoja, galite išversti patys. Daugiau informacijos rasite phpBB puslapyje (nuorodą rasite šio puslapio apačioje).',
	),
	array(
		0	=> 'Kaip įsidėti paveikslėlį prie savo vartotojo vardo?',
		1	=> 'Iš viso gali būti du paveikslėliai šalia vartotojo vardo. Pirmasis paveikslėlis yra susijęs su jūsų rangu. Dažniausiai tai būna žvaigždučių arba taškelių eilutė, kuri parodo kiek žinučių jūs esat parašę arba kokį statusą turite diskusijose. Antrasis dažniausiai didesnis paveikslėlis yra avataras. Dažniausiai jis būna unikalus. Avatarų galimybę ir būdą, kuriuo jie yra įkeliami, valdo diskusijų administratorius. Jeigu negalite jų naudoti, susisiekite su juo ir paklauskite kodėl avatarai buvo išjungti.',
	),
	array(
		0	=> 'Kas yra rangas ir kaip man jį pasikeisti?',
		1	=> 'Rangai žymi jūsų parašytų pranešimų skaičių. Taip pat specialiais rangais pažymimi ypatingi dalyviai, tokie kaip administratoriai ar moderatoriai. Jūs negalite tiesiogiai pakeisti rangų, kadangi juos nustato diskusijų administratorius. Nerašinėkite nereikalingų pranešimų vien tam, kad pakeltumėte savo rangą. Daugumoje diskusijų lentų toks elgesys yra netoleruojamas ir moderatoriai arba administratoriai tiesiog sumažins jūsų parašytų pranešimų skaičių.',
	),
	array(
		0	=> 'Kai paspaudžiu ant kurio nors vartotojo elektroninio pašto adreso, manęs paprašo prisijungti. Kodėl?',
		1	=> 'Tik registruoti vartotojai gali siųsti pranešimus kitiems vartotojams el. paštu, ir tik tuomet, jeigu diskusijų administratorius įjungė šią galimybę. Taip bandoma apsaugoti vartotojų el. pašto adresus nuo neteisingo naudojimo.',
	),
	array(
		0	=> '--',
		1	=> 'Rašymo veiksmai',
	),
	array(
		0	=> 'Kaip ką nors parašyti į diskusijas?',
		1	=> 'Norėdami sukurti naują temą arba parašyti pranešimą paspauskite ant atitinkamo mygtuko forumo arba temos lange. Prieš ką nors rašydami dažniausiai turite užsiregistruoti. Visų jūsų teisių sąrašas kiekviename forume ir temoje nurodytas ekrano apačioje. Pavyzdžiui: Jūs galite kurti naujas temas, Jūs galite dalyvauti apklausose ir t.t.',
	),
	array(
		0	=> 'Kaip redaguoti arba ištrinti pranešimą?',
		1	=> 'Jeigu nesate nei administratorius, nei moderatorius, galite redaguoti ir ištrinti tik savo pranešimus. Norėdami redaguoti pranešimą paspauskite redagavimo mygtuką virš atitinkamo pranešimo. Kartais tai galite padaryti tik per tam tikrą laiką nuo pranešimo parašymo. Jeigu kas nors jau atsakė į jūsų pranešimą, kiekvieną kartą po jo redagavimo apačioje matysite nedidelį teksto bloką, kuriame bus parašyta kiek kartų pranešimas buvo redaguotas ir kada. Šis blokas nebus rodomas jeigu pranešimą redagavo moderatorius arba administratorius, tačiau jie turi galimybę palikti žinutę, kodėl pranešimas buvo redaguotas. Taip pat reikėtų žinoti, kad paprasti vartotojai negali ištrinti pranešimo, jeigu į jį kas nors jau atsakė.',
	),
	array(
		0	=> 'Kaip prie savo pranešimų pridėti parašą?',
		1	=> 'Norėdami prie pranešimų pridėti parašą iš pradžių turite jį susikurti per vartotojo valdymo pultą. Kai tai padarysite, pranešimo rašymo formoje galite pažymėti varnelę šalia punkto <em>Pridėti parašą</em>. Taip pat galite pridėti parašą prie visų rašomų pranešimų. Tai galite padaryti įjungę atitinkamą nustatymą savo aprašyme. Net ir tokiu atveju parašo pridėjimą galimą išjungti atžymėjus varnelę šalia aukščiau minėto punkto pranešimo rašymo lange. ',
	),
	array(
		0	=> 'Kaip sukurti apklausą?',
		1	=> 'Kai pradedate naują temą (arba redaguojate naujos temos pirmąją žinutę), apačioje turėtumėte matyti kortelę “Apklausos kūrimas”. Jeigu jos nematote, vadinasi neturite teisių kurti apklausas. Iš pradžių įrašykite apklausos pavadinimą, toliau įrašykite bent du apklausos atsakymų variantus, už kuriuos balsuos apklausos dalyviai (kiekvieną atsakymo variantą reikia rašyti naujoje eilutėje). Taip pat, pasinaudoję parametru “Atsakymų variantų skaičius vartotojui”, galite nurodyti, kiek atsakymų variantų galės pasirinkti vartotojas apklausos metu, dienų skaičių, kiek tęsis apklausa (0 reiškia niekada nesibaigiančią apklausą) ir galiausiai galite nurodyti ar vartotojai galės atšaukti savo balsą ir dalyvauti apklausoje iš naujo.',
	),
	array(
		0	=> 'Kodėl negaliu pridėti daugiau apklausos atsakymų variantų?',
		1	=> 'Atsakymų variantų limitą nustato diskusijų administratorius. Susisiekite su juo, jeigu manote, kad jums reikia daugiau variantų nei leidžiama.',
	),
	array(
		0	=> 'Kaip redaguoti arba ištrinti apklausą?',
		1	=> 'Kaip ir pranešimus, apklausą gali redaguoti tik tas, kuris ją sukūrė, moderatoriai arba administratoriai. Norėdami redaguoti apklausą paspauskite redagavimo mygtuką šalia pirmo temos pranešimo. Ištrinti apklausą arba keisti apklausos atsakymų variantų skaičių galima tik tada, kol niekas nebalsavo. Priešingu atveju ištrinti arba redaguoti apklausą gali tik moderatoriai arba administratoriai. Tai saugo apklausą nuo nesąžiningo apklausos atsakymų variantų keitimo jai bevykstant.',
	),
	array(
		0	=> 'Kodėl negaliu patekti į kai kuriuos forumus?',
		1	=> 'Kai kurie forumai skirti tik tam tikroms vartotojų grupėms. Tik jos gali peržiūrėti, trinti ir rašyti į šiuos forumus. Grupes sudaro administratoriai arba moderatoriai, todėl dėl priėjimo prie šių specialių forumų turėtumėte kreiptis į juos.',
	),
	array(
		0	=> 'Kodėl negaliu prikabinti failų?',
		1	=> 'Teisės failų prikabinimui suteikiamos forumo, grupės arba vartotojo lygyje. Greičiausiai diskusijų administratorius neleidžia prikabinti failų tam tikrame forume arba gal tik tam tikros grupės gali juos prikabinti. Jeigu nesate dėl to tikras, susisiekite su diskusijų administratoriumi.',
	),
	array(
		0	=> 'Kodėl aš gavau perspėjimą?',
		1	=> 'Kiekvienas diskusijų administratorius savo puslapyje turi savo taisyklių sąrašą. Jeigu pažeisite nors vieną iš jų, galite gauti perspėjimą. Atsiminkite, kad tai diskusijų administratoriaus sprendimas ir phpBB Grupė neturi nieko bendro su dalinamais perspėjimais šiame puslapyje. Jeigu nesate tikras, kodėl gavote perspėjimą, susisiekite su diskusijų administratoriumi.',
	),
	array(
		0	=> 'Kaip raportuoti apie neteisingus pranešimus moderatoriui?',
		1	=> 'Jeigu diskusijų administratorius įjungė tokią galimybę, šalia kiekvieno pranešimo matysite raportavimo mygtuką. Paspauskite jį ir sekite nurodymus ekrane.',
	),
	array(
		0	=> 'Ką daro mygtukas “Išsaugoti” pranešimo rašymo lange?',
		1	=> 'Jis leidžia jums išsaugoti nebaigtus pranešimus ir vėliau tęsti jų rašymą. Norėdami pratęsti išsaugoto pranešimo rašymą apsilankykite vartotojo valdymo pulte.',
	),
	array(
		0	=> 'Kodėl mano pranešimas turi būti patvirtintas?',
		1	=> 'Gali būti, kad diskusijų administratorius nusprendė, jog kiekvienas pranešimas forume kuriame rašote turi būti patvirtintas. Taip pat gali būti, kad administratorius paskyrė jus grupei, kurios pranešimai turi būti patvirtinti. Daugiau informacijos gausite kreipdamiesi į diskusijų administratorių.',
	),
	array(
		0	=> 'Kaip priminti apie kurią nors mano temą?',
		1	=> 'Paspaudę nuorodą “Priminti apie temą” temos peržiūrėjimo puslapyje galite "priminti" apie temą kitiems diskusijų dalyviams. Visi pranešimai tokioje temoje bus pažymėti kaip neskaityti, o pati tema atsidurs pirmo forumo puslapio viršuje. Jeigu nuorodos nematote, gali būti, kad temų priminimas yra išjungtas arba nepasiektas laiko tarpas, nuo kuriuo leidžiama priminti apie temą. Apie temą taip pat galima priminti ir paprasčiausiai atsakant į ją, tačiau įsitikinkite, kad tai leidžia diskusijų taisyklės.',
	),
	array(
		0	=> '--',
		1	=> 'Teksto formavimas ir temų tipai',
	),
	array(
		0	=> 'Kas yra BBKodas?',
		1	=> 'BBKodas - tai specialus kodas labai primenantis HTML. Globaliai BBKodą gali išjungti/įjungti administratorius. Jeigu BBKodas įjungtas, paprasti vartotojai gali jį įjungti ir išjungti per savo nustatymus, arba tiesiog kiekvieno pranešimo rašymo metu. Skirtumas tarp BBKodo ir HTML yra tas, kad BBKodas rašomas tarp [ ir ] skliaustų, o HTML tarp &lt; ir &gt;. Daugiau informacijos apie BBKodą rasite gide, kuris pasiekiamas iš pranešimo rašymo puslapio.',
	),
	array(
		0	=> 'Ar galiu naudoti HTML?',
		1	=> 'Ne. Rašyti HTML kodų šioje diskusijų lentoje negalima. Daugelį teksto formavimo būdų, kuris pasiekiamas su HTML, galima įgyvendinti BBKodo pagalba.',
	),
	array(
		0	=> 'Kas yra šypsenėlės?',
		1	=> 'Šypsenėlės yra maži paveikslėliai, kurie trumpo kodo pagalba naudojami norint išreikšti jausmus, pvz.: :) yra laimingas, kai tuo tarpu :( yra liūdnas. Visą šypsenėlių sąrašą rasite pranešimo rašymo lange. Stenkitės nepersistengti, ir naudoti šypsenėles saikingai. Jos labai apsunkina pranešimo skaitymą, todėl moderatoriai išredaguos arba tiesiog ištrins jūsų pranešimą. Diskusijų administratorius taip pat turi galimybę nustatyti, kiek šypsenėlių galite panaudoti viename pranešime.',
	),
	array(
		0	=> 'Ar galiu į pranešimą įtraukti paveikslėlį?',
		1	=> 'Taip, jūs galite į savo pranešimą įtraukti paveikslėlį. Jeigu diskusijų administratorius įjungė tokią galimybę, paveikslėlį galite įkelti tiesiai iš savo kompiuterio. Priešingu atveju jums reikės nurodyti kelią iki paveikslėlio Internete, pvz.: http://www.pavyzdys.com/mano-paveikslėlis.gif. Jūs negalite nurodyti kelio į savo kompiuterį (nebent jis yra tuo pačiu ir Interneto serveris)! Taip pat negalite įtraukti paveikslėlio kuris yra už tam tikrų autentifikacijos mechanizmų, pvz.: hotmail arba yahoo pašto dėžučių, slaptažodžiais apsaugotų puslapių ir t.t. Norėdami įtraukti paveikslėlį naudokite BBKodo žymenį [img].',
	),
	array(
		0	=> 'Kas yra labai svarbūs pranešimai?',
		1	=> 'Labai svarbiuose pranešimuose būna svarbios informacijos, todėl kai tik galite, stenkitės juos perskaityti. Jie bus rodomi kiekvieno forumo viršuje ir jūsų vartotojo valdymo pulte. Teises rašyti labai svarbius pranešimus suteikia diskusijų administratorius.',
	),
	array(
		0	=> 'Kas yra svarbios temos?',
		1	=> 'Svarbiose temose būna svarbios informacijos, kuri aktuali forume, kuriame esate. Tokios temos rodomos forumo viršuje. Kaip ir labai svarbių pranešimų, tokių temų teises nustato diskusijų administratorius.',
	),
	array(
		0	=> 'Kas yra dažnos temos?',
		1	=> 'Dažnos temos rodomos žemiau svarbių temų, bet virš visų kitų temų. Jos taip pat dažnai būna svarbios, todėl stenkitės perskaityti jas, kai tik galite. Kaip ir labai svarbių pranešimų bei svarbių temų, teises kurti dažnas temas suteikia diskusijų administratorius.',
	),
	array(
		0	=> 'Kas yra užrakintos temos?',
		1	=> 'Tai tokios temos, kuriose vartotojai nebegali rašyti pranešimų ir dalyvauti apklausoje. Moderatoriai ar administratoriai gali rakinti temas dėl įvairių priežasčių. Taip pat, priklausomai nuo jums diskusijų administratoriaus suteiktų teisių, galite užrakinti savo temas.',
	),
	array(
		0	=> 'Kas yra temų piktogramos?',
		1	=> 'Temų piktogramos yra autoriaus pasirinktas paveikslėlis, kuris apibūdina temos turinį. Galimybę naudoti temų piktogramas nustato diskusijų administratorius.',
	),
	array(
		0	=> '--',
		1	=> 'Vartotojų lygiai ir grupės',
	),
	array(
		0	=> 'Kas yra administratoriai?',
		1	=> 'Administratoriai - tai žmonės, kuriems buvo suteikta aukščiausia valdžia visoje diskusijų lentoje. Šie žmonės gali kontroliuoti viską, pradedant vartotojų teisėmis, dalyvių pašalinimu ir baigiant vartotojų grupių ar moderatorių paskyrimu, priklausomai nuo to kokias jiems teises suteikė diskusijų įkūrėjas. Tas pats diskusijų įkūrėjas jiems gali suteikti pilnas moderatoriaus teises visuose forumuose.',
	),
	array(
		0	=> 'Kas yra moderatoriai?',
		1	=> 'Moderatoriai yra asmenys (arba grupė asmenų), kurie prižiūri diskusijas diena po dienos. Jie gali redaguoti arba trinti pranešimus, užrakinti, atrakinti, perkelti, ištrinti arba išskirti temas. Pagrinde moderatoriai prižiūri, kad dalyviai nenukryptų nuo temos, nesikeiktų ir kitaip nepažeidinėtų diskusijų taisyklių.',
	),
	array(
		0	=> 'Kas yra vartotojų grupės?',
		1	=> 'Kai kurie diskusijų dalyviai grupuojami į vartotojų grupes. Kiekvienas vartotojas gali priklausyti kelioms grupėms ir kiekvienai grupei gali būti priskiriamos skirtingos teisės. Tai labai palengvina administratorių darbą, nereikia keisti kiekvieno vartotojo teisių, galima tiesiog pakeisti teises visai grupei.',
	),
	array(
		0	=> 'Kur yra vartotojų grupės ir kaip prie jų prisijungti?',
		1	=> 'Visas vartotojų grupes galite pamatyti “Vartotojų grupės” kortelėje savo vartotojo valdymo pulte. Jeigu norite prie kurios nors prisijungti, jums tereikia paspausti atitinkamą mygtuką šalia grupės. Tačiau ne visos grupės yra atviros. Kai kurios reikalauja, kad jūsų kandidatūra būtų patvirtinta, kai kurios gali būtų uždarytos, o kai kurios apskritai paslėptus grupių sąraše. Jeigu grupė reikalauja jūsų kandidatūros patvirtinimo, paspaudę atitinkamą mygtuką išsiųsite prašymą grupės lyderiui. Jis gali jūsų paklausti, kodėl norite prisijungti prie pasirinktos grupės. Neįžeidinėkite grupės lyderio, jeigu jis atmetė jūsų kandidatūrą; greičiausiai jis tam turi rimtų priežasčių.',
	),
	array(
		0	=> 'Kaip tapti vartotojų grupės lyderiu?',
		1	=> 'Grupės lyderį dažniausiai paskiria diskusijų administratorius grupės kūrimo metu. Jeigu norite sukurti savo grupę, pirmas žmogus į kurį turite kreiptis yra būtent jis. Pabandykite išsiųsti jam asmeninę žinutę.',
	),
	array(
		0	=> 'Kodėl kai kurios grupės rodomos skirtinga spalva?',
		1	=> 'Kad grupės nariai būtų lengviau atpažįstami, diskusijų administratorius vartotojų grupei gali priskirti spalvą.',
	),
	array(
		0	=> 'Kas yra “Pagrindinė vartotojų grupė”?',
		1	=> 'Jeigu jūs esate daugiau nei vienos grupės narys, pagrindinė grupė apsprendžia, kokią spalvą ir rangą jums priskirti. Diskusijų administratorius gali suteikti teises pasikeisti savo pagrindinę vartotojų grupę per vartotojo valdymo pultą.',
	),
	array(
		0	=> 'Ką reiškia nuoroda “Komanda”?',
		1	=> 'Šiame puslapyje rasite visą diskusijose besidarbuojančią komandą įskaitant diskusijų administratorius ir moderatorius, bei forumus, kuriuos jie moderuoja.',
	),
	array(
		0	=> '--',
		1	=> 'Asmeninės žinutės',
	),
	array(
		0	=> 'Aš negaliu siųsti asmeninių žinučių!',
		1	=> 'Galimi trys atvejai; jūs neužsiregistravote ir/arba neprisijungėte, administratorius išjungė asmenines žinutes visoje diskusijų lentoje, arba tiesiog jis tiesiog išjungė šią galimybę jums. Daugiau informacijos jums suteiks pats diskusijų administratorius.',
	),
	array(
		0	=> 'Aš gaunu nepageidaujamas asmenines žinutes!',
		1	=> 'Norėdami užblokuoti tam tikro vartotojo asmenines žinutes sukurkite tam skirtą taisyklę savo vartotojo valdymo pulte. Jeigu nuo kurio nors vartotojo gaunate įžeidžiančias asmenines žinutes, susisiekite su diskusijų administratoriumi. Jis gali išjungti asmenines žinutes tokiems vartotojams.',
	),
	array(
		0	=> 'Aš gaunu nepageidaujamus laiškus ir internetines šiukšles (spam) į savo pašto dėžutę nuo kažkurio šių diskusijų dalyvio!',
		1	=> 'Apgailestaujame. El. laiškų siuntimo forma šioje diskusijų lentoje turi integruotą sekimo galimybę, todėl persiųskite pilną tokio laiško kopiją diskusijų administratoriui. Labai svarbu, kad laišką persiųstumėte su visomis antraštėmis (pageidautina kaip prikabintą failą), jog galima būtų atsekti kenkiantį vartotoją.',
	),
	array(
		0	=> '--',
		1	=> 'Draugai ir priešai',
	),
	array(
		0	=> 'Kas yra mano draugų ir priešų sąrašai?',
		1	=> 'Į šiuos sąrašus galite įtraukti kitus diskusijų dalyvius. Vartotojai, kurie yra įtraukti į jūsų draugų sąrašą, bus rodomi vartotojo valdymo pulte greitam susisiekimui. Jeigu naudojamas šablonas turi galimybę, pranešimai nuo tokių vartotojų bus paryškinti. Jeigu vartotojas yra įtrauktas į priešų sąrašą, jo pranešimai bus paslėpti.',
	),
	array(
		0	=> 'Kaip įtraukti/ištrinti vartotojus iš draugų ar priešų sąrašo?',
		1	=> 'Įtraukti vartotojus į savo sąrašą galite dviem būdais. Kiekvieno vartotojo aprašymo lange yra nuoroda, kurios pagalba galite įtraukti pasirinktą vartotoją į draugų arba priešų sąrašą. Taip pat, savo vartotojo valdymo pulte galite įtraukti dalyvius įrašydami jų vartotojų vardus. Tame pačiame puslapyje galite ištrinti vartotojus iš sąrašo.',
	),
	array(
		0	=> '--',
		1	=> 'Paieška forume',
	),
	array(
		0	=> 'Kaip ieškoti forume ar forumuose?',
		1	=> 'Paieškos laukelyje, kurį rasite pagrindiniame puslapyje, forumo arba temos puslapiuose, įrašykite ieškomą terminą. Galite naudotis ir išplėstine paieška, kurią rasite paspaudę ant nuorodos “Išplėstinė paieška” kiekvieno puslapio viršuje. Paieškos laukelių pozicijos priklauso ir nuo naudojamo stiliaus.',
	),
	array(
		0	=> 'Kodėl mano paieška nerado jokių rezultatų?',
		1	=> 'Jūsų paieška greičiausiai buvo neaiški, nes joje buvo per daug dažnai naudojamų žodžių, kurių phpBB3 neindeksuoja. Susiaurinkite paiešką ir naudokitės paieškos parametrai pasiekiamais per išplėstinės paieškos puslapį.',
	),
	array(
		0	=> 'Kodėl vykdant paiešką rodo tik tuščią puslapį!?',
		1	=> 'Jūsų paieška grąžino per daug rezultatų ir diskusijų serveris negalėjo jų apdoroti. Naudokitės “Išplėstine paieška” ir susiaurinkite savo paiešką.',
	),
	array(
		0	=> 'Kaip ieškoti diskusijų dalyvių?',
		1	=> 'Eikite į “Dalyvių sąrašo” puslapį ir paspauskite nuorodą “Surasti dalyvį”.',
	),
	array(
		0	=> 'Kaip surasti mano paties pranešimus ir temas?',
		1	=> 'Savo paties pranešimus galite rasti paspaudę ant “Peržiūrėti savo pranešimus” vartotojo valdymo pulte arba jūsų aprašymo puslapyje. Norėdami surasti savo temas, pasinaudokite išplėstine paieška ir nurodykite temos autorių.',
	),
	array(
		0	=> '--',
		1	=> 'Temų prenumeravimas ir žymėjimas',
	),
	array(
		0	=> 'Kuo skiriasi prenumeravimas ir žymėjimas?',
		1	=> 'phpBB3 temų žymėjimas yra beveik toks pats kaip ir puslapių žymėjimas naršyklėje. Įvykus pakeitimams, jūs negausite pranešimo, tačiau visada galėsite sugrįžti į tą temą. Priešingai, apie pasikeitimus prenumeruojamose temose ar forumuose jums bus pranešta jūsų nustatytu būdu.',
	),
	array(
		0	=> 'Kaip užsiprenumeruoti forumą arba temą?',
		1	=> 'Norėdami užsiprenumeruoti forumą paspauskite ant nuorodos “Užsisakyti forumą” forumo viduje. Norėdami užsiprenumeruoti temą atsakydami į temą pažymėkite atitinkamą varnelę arba paspauskite ant nuorodos “Užsisakyti temą” temos viduje.',
	),
	array(
		0	=> 'Kaip atsisakyti prenumeratos?',
		1	=> 'Norėdami atsisakyti prenumeratos eikite į vartotojo valdymo pultą ir pasinaudokite prenumeratų valdymo kortele.',
	),
	array(
		0	=> '--',
		1	=> 'Prikabinti failai',
	),
	array(
		0	=> 'Kokius failus galiu prikabinti šioje diskusijų lentoje?',
		1	=> 'Diskusijų administratorius gali leisti arba uždrausti tam tikrus failų tipus. Jeigu nesate tikri, kurie tipai leidžiami, susisiekite su diskusijų administratoriumi.',
	),
	array(
		0	=> 'Kaip surasti visus mano prikabintus failus?',
		1	=> 'Norėdami peržiūrėti savo prikabintų failų sąrašą eikite į vartotojo valdymo pultą ir pasinaudokite prikabintų failų valdymo kortele.',
	),
	array(
		0	=> '--',
		1	=> 'Informacija apie phpBB 3',
	),
	array(
		0	=> 'Kas parašė šią diskusijų lentą?',
		1	=> 'Šį programinės įrangos produktą (jo originalioje formoje) pagamino ir išleido <a href="https://www.phpbb.com/">phpBB Grupė</a>. Jis platinamas po GNU GPL licencija. Sekdami nuoroda rasite daugiau informacijos.',
	),
	array(
		0	=> 'Kodėl diskusijose nėra galimybės X?',
		1	=> 'Šį produktą sukūrė ir licencijavo phpBB Grupė. Jeigu tikrai manote, kad diskusijų lentoje trūksta kokios nors galimybės, apsilankykite <a href="https://www.phpbb.com/ideas/">phpBB Idėjų Centre</a>, kur galėsite balsuoti už jau pasiūlytas idėjas arba pasiūlyti savo.',
	),
	array(
		0	=> 'Su kuo turėčiau susisiekti dėl įžeidžiančios informacijos šioje diskusijų lentoje?',
		1	=> 'Bet kuris administratorius esantis “Komandos” puslapio sąraše turėtų tikti šiam dalykui. Jeigu negaunate atsakymo, turėtumėte susisiekti su domeno savininku (jam sužinoti turite atlikti <a href="http://www.google.com/search?q=whois">whois paiešką</a>) arba jeigu tai yra nemokamas servisas (pvz.: Yahoo!, free.fr, f2s.com ir t.t.), susisiekite su techninės pagalbos departamentu. Įsidėmėkite, kad phpBB Grupė <strong>visiškai nekontroliuoja</strong> ir negali kontroliuoti kur, kaip ir kokiu būdu naudojama ši diskusijų lenta. Nėra jokio tikslo susisiekti su phpBB Grupe dėl kokių nors teisinių priežasčių jeigu tai <strong>tiesiogiai neliečia</strong> phpBB.com puslapio arba phpBB programinės įrangos. Jeigu, vis dėlto, susisieksite su jais, dėl kokio nors <strong>trečių šalių</strong> šios diskusijų lentos panaudojimo, būkite pasirengę išgirsti trumpą arba išvis jokio atsakymą.',
	),
);

?>