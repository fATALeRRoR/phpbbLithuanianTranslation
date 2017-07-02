<?php
/**
*
* help_bbcode.php [Lithuanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2009 phpBB Group
* @author 2009-06-03 - Vilius Šumskas
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
		1	=> 'Įžanga',
	),
	array(
		0	=> 'Kas yra BBKodas?',
		1	=> 'BBKodas - tai specialus kodas labai primenantis HTML. Globaliai BBKodą gali išjungti/įjungti administratorius. Jeigu BBKodas įjungtas, paprasti vartotojai gali jį įjungti ir išjungti per savo nustatymus, arba tiesiog kiekvieno pranešimo rašymo metu. Skirtumas tarp BBKodo ir HTML yra tas, kad BBKodas rašomas tarp [ ir ] skliaustų, o HTML tarp &lt; ir &gt;. Jis suteikia papildomą apsaugą ir kontrolę, kad į diskusijas nepatektų nereikalingas HTML kodas, kuris gali sudarkyti dizainą, struktūrą ir t.t. Priklausomai nuo to, kokį šabloną naudojate, BBKodo rašymą gali palengvinti mygtukai esantys virš pranešimo rašymo formos. Nežiūrint į tai, šis gidas vis tiek jums gali praversti.',
	),
	array(
		0	=> '--',
		1	=> 'Teksto formavimas',
	),
	array(
		0	=> 'Kaip rašyti paryškintai, pasvirusiomis raidėmis, arba pabrauktai',
		1	=> 'BBKodas turi žymenis, kurie leis greitai keisti pradinį teksto stilių. Tai daroma taip: <ul><li>Norėdami paryškinti, apskliauskite savo tekstą taip <strong>[b][/b]</strong>, pvz.: <br /><br /><strong>[b]</strong>Labas<strong>[/b]</strong><br /><br />taps <strong>Labas</strong></li><li>Norėdami pabraukti, naudokite <strong>[u][/u]</strong>, pavyzdžiui:<br /><br /><strong>[u]</strong>Labas rytas<strong>[/u]</strong><br /><br />taps <span style="text-decoration: underline">Labas rytas</span></li><li>Norėdami rašyti pasvirusiomis raidėmis, naudokite <strong>[i][/i]</strong>, pvz.:<br /><br />Tai yra <strong>[i]</strong>puiku!<strong>[/i]</strong><br /><br />taps Tai yra <i>puiku!</i></li></ul>',
	),
	array(
		0	=> 'Kaip pakeisti teksto spalvą ar dydį',
		1	=> 'Norėdami keisti teksto spalvą ar dydį naudokite šiuos žymenis. Atsiminkite, kad kaip atrodys galutinis tekstas priklauso nuo vartotojo naudojamos naršyklės ir operacinės sistemos: <ul><li>Spalvos keitimui naudojami <strong>[color=][/color]</strong>. Galite įrašyti angliškus spalvų pavadinimus (pvz.: red, blue, yellow, ir t.t.) arba šešioliktainius spalvų kodus, pvz.: #FFFFFF, #000000. Pavyzdžiui, aprašyti raudoną tekstą galima taip:<br /><br /><strong>[color=red]</strong>Labas!<strong>[/color]</strong><br /><br />arba taip<br /><br /><strong>[color=#FF0000]</strong>Labas!<strong>[/color]</strong><br /><br />Abiem atvejais gausite <span style="color:red">Labas!</span></li><li>Teksto dydis keičiamas panašiu būdu, panaudojant žymenis <strong>[size=][/size]</strong>. Galutinis tekstas priklauso nuo vartotojo naudojamo šablono, tačiau rekomenduojamas skaitinis formatas, kur skaičius atitinka teksto dydį procentais, pradedant 20 (labai mažas) baigiant 200 (labai didelis). Pavyzdžiui:<br /><br /><strong>[size=30]</strong>MAŽAS<strong>[/size]</strong><br /><br />bus <span style="font-size:30%;">MAŽAS</span><br /><br />o pavyzdžiui:<br /><br /><strong>[size=200]</strong>MILŽINIŠKAS!<strong>[/size]</strong><br /><br />taps <span style="font-size:200%;">MILŽINIŠKAS!</span></li></ul>',
	),
	array(
		0	=> 'Ar galiu kombinuoti teksto formavimo žymenis vieną su kitu?',
		1	=> 'Taip, beabejo galite. Pavyzdžiui norėdami atkreipti kieno nors dėmesį galite parašyti:<br /><br /><strong>[size=150][color=red][b]</strong>PAŽIŪRĖKITE Į MANE!<strong>[/b][/color][/size]</strong><br /><br />tai atrodys taip <span style="color:red;font-size:250%;"><strong>PAŽIŪRĖKITE Į MANE!</strong></span><br /><br />Tačiau nerekomenduojame taip rašyti viso teksto! Tai pat įsitikinkite, kad žymenys uždaryti teisingai. Tarkim šis pavyzdys nėra teisingas:<br /><br /><strong>[b][u]</strong>Taip yra blogai<strong>[/b][/u]</strong>',
	),
	array(
		0	=> '--',
		1	=> 'Citavimas ir fiksuoto dydžio tekstas',
	),
	array(
		0	=> 'Teksto citavimas atsakymuose',
		1	=> 'Yra du būdai, kaip galima cituoti tekstą: su autoriaus vardu arba be jo.<ul><li>Kai paspaudžiate mygtuką "Cituoti", galite pastebėti, kad citatos tekstas apskliaudžiamas <strong>[quote=&quot;&quot;][/quote]</strong> žymenimis. Čia galite nurodyti citatos autorių, ar bet ką kitą, ką tik norite. Pavyzdžiui, norėdami pacituoti gabalą Jono pranešimo rašykite taip:<br /><br /><strong>[quote=&quot;Jonas&quot;]</strong>Jono tekstas<strong>[/quote]</strong><br /><br />Prieš citatą sistema automatiškai pridės žodžius "Jonas rašė". Įsidėmėkite, kad vardą <strong>turite</strong> rašyti dvigubose kabutėse &quot;&quot; - jos būtinos.</li><li>Antruoju būdu galite cituoti daugiau nei vieno autoriaus pranešimą. Tiesiog kiekvieną citatą apskliauskite <strong>[quote][/quote]</strong> žymenimis. Tokiu būdu sistema kiekvieną tokį teksto gabalą rodys citatos bloke.</li></ul>',
	),
	array(
		0	=> 'Fiksuoto dydžio tekstas',
		1	=> 'Jeigu jums reikia parašyti gabalą kodo ar šiaip kokį tekstą, kuris turi būti fiksuoto dydžio, galite naudoti <strong>[code][/code]</strong>, pvz.:<br /><br /><strong>[code]</strong>echo &quot;Čia yra kodas&quot;;<strong>[/code]</strong><br /><br />Žymenys <strong>[code][/code]</strong> parodo tekstą taip, kaip jis buvo parašytas. Taip pat galite įjungti PHP kodo spalvinimą pasinaudoję <strong>[code=php][/code]</strong>. Šis būdas yra rekomenduojamas kai į savo pranešimus įtraukiate PHP programinio kodo pavyzdžius, nes tada lengviau juos skaityti.',
	),
	array(
		0	=> '--',
		1	=> 'Sąrašai',
	),
	array(
		0	=> 'Nesutvarkytas sąrašas',
		1	=> 'BBKodas turi dviejų tipų sąrašus, sutvarkytus ir nesutvarkytus. Jie beveik tokie patys kaip ir jų HTML atitikmenys. Nesutvarkyto sąrašo punktai išdėstomi vienas po kito ir kiekvienas pažymimas tašku. Tai padaroma panaudojus žymenis <strong>[list][/list]</strong> ir kiekvieną punktą sąraše pradedant rašyti simboliais <strong>[*]</strong>. Pavyzdžiui, jūsų mėgstamiausių spalvų sąrašą galite aprašyti taip:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Raudona<br /><strong>[*]</strong>Mėlyna<br /><strong>[*]</strong>Geltona<br /><strong>[/list]</strong><br /><br />Realiai pranešimas atrodys taip:<ul><li>Raudona</li><li>Mėlyna</li><li>Geltona</li></ul>',
	),
	array(
		0	=> 'Sutvarkytas sąrašas',
		1	=> 'Sutvarkytuose sąrašuose galite pasirinkti kaip numeruoti punktus. <strong>[list=1][/list]</strong> žymi skaičiais, o <strong>[list=a][/list]</strong> raidėmis sunumeruotą sąrašą. Kaip ir nesutvarkytuose sąrašuose kiekvienas punktas pradedamas rašyti simboliais <strong>[*]</strong>. Pavyzdžiui:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Nueiti į parduotuvę<br /><strong>[*]</strong>Nupirkti naują kompiuterį<br /><strong>[*]</strong>Keikti kompiuterį kai jis sulūš<br /><strong>[/list]</strong><br /><br />sugeneruos tokį sąrašą:<ol style="list-style-type: decimal;"><li>Nueiti į parduotuvę</li><li>Nupirkti naują kompiuterį</li><li>Keikti kompiuterį kai jis sulūš</li></ol>O štai pavyzdžiui toks BBKodas:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Pirmas galimas atsakymas<br /><strong>[*]</strong>Antras galimas atsakymas<br /><strong>[*]</strong>Trečias galimas atsakymas<br /><strong>[/list]</strong><br /><br />atrodys taip:<ol style="list-style-type: lower-alpha"><li>Pirmas galimas atsakymas</li><li>Antras galimas atsakymas</li><li>Trečias galimas atsakymas</li></ol>',
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
	array(
		0	=> '--',
		1	=> 'Nuorodos',
	),
	array(
		0	=> 'Nuorodos į kitą puslapį',
		1	=> 'phpBB BBKode yra keletas būdų kaip galima sukurti nuorodas į kitus puslapius.<ul><li>Pirmasis būdas: naudokite žymenis <strong>[url=][/url]</strong>; viskas ką įrašysite po = ženklo, pavirs į nuorodą. Pavyzdžiui, norėdami sukurti nuorodą į phpBB.com, galite rašyti taip:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Aplankykite phpBB!<strong>[/url]</strong><br /><br />Realiai tai atrodys maždaug taip: <a href="http://www.phpbb.com/">Aplankykite phpBB!</a> Galite pastebėti, kad puslapis atsidaro arba tame pačiame, arba naujame lange, priklausomai kaip nustatyta jūsų naršyklė.</li><li>Jeigu jums reikia parodyti patį URL adresą paprasčiausiai rašykite taip:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Tokiu būdu gausite <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>Taip pat phpBB turi tokią galimybę kaip <i>Automatinės nuorodos</i>, kuri kiekvieną žodį bent kiek panašų į URL paverčia nuoroda. Jums nereikia rašyti jokių žymenų ir net nereikia nuorodos pradžioje parašyti http://. Pavyzdžiui, pranešime parašius www.phpbb.com, automatiškai gausite nuorodą į <a href="http://www.phpbb.com/">www.phpbb.com</a>.</li><li>Tos pačios taisyklės galioja ir el. pašto adresams. Jūs galite naudoti arba specialius žymenis:<br /><br /><strong>[email]</strong>niekas@adresas.tld<strong>[/email]</strong><br /><br />kuris automatiškai pavirsta į <a href="mailto:niekas@adresas.tld">niekas@adresas.tld</a> arba galite tiesiog parašyti niekas@adresas.tld ir automatiškai gauti tą patį efektą.</li></ul>Kaip ir kitus BBKodo žymenimis, URL adresais galite apskliausti bet kuriuos kitus žymenis, tokius kaip <strong>[img][/img]</strong> (žiūrėkite tolesnę pastraipą), <strong>[b][/b]</strong> ir t.t. Svarbiausia, kad visi žymenys būtų uždaryti teisingai. Pavyzdžiui:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />uždaryti <span style="text-decoration: underline">neteisingai</span>.',
	),
	array(
		0	=> '--',
		1	=> 'Paveikslėlių rodymas',
	),
	array(
		0	=> 'Paveikslėlio rodymas pranešime',
		1	=> 'phpBB BBKodo pagalba galite į savo pranešimus įtraukti paveikslėlius. Naudojant šį žymenį reikia atsiminti du dalykus: pirma; dauguma vartotojų nemėgsta daugybės paveikslėlių pranešimuose, ir antra; paveikslėlis turi būti Internete (jis negali būti jūsų kompiuteryje, nebent žinoma jūsų kompiuteris yra kartu ir Interneto serveris!). Norėdami parodyti paveikslėlį, turite panaudoti žymenis <strong>[img][/img]</strong> ir tarp jų įrašyti paveikslėlio adresą. Pavyzdžiui:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br />Kaip jau buvo rašyta ankščiau, galite pridėti dar ir žymenis <strong>[url][/url]</strong>, pvz.:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />sugeneruos:<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>',
	),
	array(
		0	=> 'Prikabinto failo rodymas pranešime',
		1	=> 'Nuo šiol, pasinaudoję naujais BBKodo žymenimis <strong>[attachment=][/attachment]</strong>, prie kiekvieno pranešimo galite prikabinti failus. Tai galite padaryti tik tada, jeigu diskusijų administratorius įjungė tokią galimybę bei suteikė jums tam reikalingas teises. Pranešimo rašymo lange rasite išsiskleidžiantį meniu (ir mygtuką šalia), iš kurio galite pasirinkti kuriuos failus arba paveikslėlius rodyti tiesiai pranešime.',
	),
	array(
		0	=> '--',
		1	=> 'Kita',
	),
	array(
		0	=> 'Ar galiu naudoti savo žymenis?',
		1	=> 'Jeigu esate administratorius ir turite tam reikalingas teises, per Individualių BBKodų meniu galite sukurti savo BBKodo žymenis.',
	),
);

?>