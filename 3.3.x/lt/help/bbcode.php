<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'HELP_BBCODE_BLOCK_IMAGES'=> 'Paveikslėlių rodymas pranešimuose',
	'HELP_BBCODE_BLOCK_INTRO'=> 'Įvadas',
	'HELP_BBCODE_BLOCK_LINKS'=> 'Nuorodų kūrimas',
	'HELP_BBCODE_BLOCK_LISTS'=> 'Sąrašų kūrimas',
	'HELP_BBCODE_BLOCK_OTHERS'=> 'Kita',
	'HELP_BBCODE_BLOCK_QUOTES'=> 'Citatų ir pastovaus pločio teksto rodymas',
	'HELP_BBCODE_BLOCK_TEXT'=> 'Teksto formatavimas',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> 'Priedai dabar gali būti padėti bet kurioje pranešimo vietoje naudojant naują <strong>[attachment=][/attachment]</strong> BBCode žymą, jei priedo funkcija buvo įjungta forumo administratoriaus ir jei turite atitinkamus leidimus kurti priedus. Paskelbimo ekrane yra išskleidžiamasis laukelis (arba mygtukas), skirtas priedams įkelti tiesiogiai į tekstą.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'=> 'Priedų pridėjimas į pranešimą',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'phpBB BBCode apima žymą paveikslėliams įterpti į pranešimus. Dvi svarbios pastabos: daugelis vartotojų nemėgsta daug paveikslėlių pranešimuose, ir paveikslėlis, kurį rodote, turi jau būti prieinamas internete (jis negali egzistuoti tik jūsų kompiuteryje, nebent naudojate žiniatinklio serverį!). Norėdami rodyti paveikslėlį, apgaukite URL adresą, rodantį į paveikslėlį, <strong>[img][/img]</strong> žymomis. Pavyzdžiui:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Kaip minėta URL skyriuje, galite apgaubti paveikslėlį <strong>[url][/url]</strong> žyma, pvz.:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />sugeneruotų:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'=> 'Paveikslėlio įdėjimas į pranešimą',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBCode yra speciali HTML realizacija. Tai, ar galite naudoti BBCode savo pranešimuose forume, nustato administratorius. Be to, galite išjungti BBCode konkrečiame pranešime per paskelbimo formą. BBCode savo stiliumi panašus į HTML, tačiau žymos yra įterptos kvadratiniuose skliaustuose [ ir ], o ne &lt; ir &gt;, ir suteikia didesnę kontrolę, ką ir kaip kažkas rodoma. Priklausomai nuo naudojamo šablono, BBCode pridėjimą galite palengvinti per paspaudžiamus mygtukus virš pranešimo lauko. Net ir su šiais mygtukais galite šį vadovą rasti naudingą.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'=> 'Kas yra BBCode?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'phpBB BBCode palaiko kelis URL (Uniform Resource Indicator – vienodas išteklių žymiklis) kūrimo būdus.<ul><li>Pirmasis būdas naudoja žymą <strong>[url=][/url]</strong>; viskas, ką įrašysite po = ženklo, bus naudojama kaip URL. Pavyzdžiui, norėdami sukurti nuorodą į phpBB.com, galite naudoti:<br /><br /><strong>[url=https://www.phpbb.com/]</strong>Apsilankykite phpBB!<strong>[/url]</strong><br /><br />Taip sukursite šią nuorodą: <a href="https://www.phpbb.com/">Apsilankykite phpBB!</a> Atkreipkite dėmesį, kad nuoroda atsidarys tame pačiame arba naujame lange, priklausomai nuo vartotojo naršyklės nustatymų.</li><li>Jei norite, kad nuoroda būtų rodoma pati kaip tekstas, galite naudoti:<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />Tai sugeneruos šią nuorodą: <a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><li>Be to, phpBB turi funkciją, vadinamą <i>Magiškos nuorodos</i>: bet koks teisingo formato URL automatiškai taps nuoroda be jokių žymų ir net be „http://" priešdėlio. Pavyzdžiui, įvedus www.phpbb.com į žinutę, peržiūrint ji automatiškai taps <a href="http://www.phpbb.com/">www.phpbb.com</a>.</li><li>Tas pats taikoma ir el. pašto adresams. Galite nurodyti adresą tiesiogiai, pavyzdžiui:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />kas parodys <a href="mailto:no.one@domain.adr">no.one@domain.adr</a>, arba tiesiog įrašykite no.one@domain.adr žinutėje – ji bus automatiškai konvertuota peržiūrint.</li></ul>Kaip ir su visomis BBCode žymomis, galite apgaubti URL kitomis žymomis, pvz., <strong>[img][/img]</strong> (žr. kitą skyrių), <strong>[b][/b]</strong> ir pan. Kaip ir su formatavimo žymomis, jūs atsakote už taisyklingą žymų atidarymo ir uždarymo tvarką. Pavyzdžiui:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br /><span style="text-decoration: underline">nėra</span> teisinga ir tai gali lemti jūsų įrašo ištrynimą, todėl būkite atidūs.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'=> 'Nuorodos į kitą svetainę kūrimas',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> 'Antrasis sąrašo tipas — tvarkytas sąrašas — leidžia valdyti, kas rodoma prieš kiekvieną elementą. Norėdami sukurti skaitinį sąrašą, naudokite <strong>[list=1][/list]</strong>, o abėcėliniam sąrašui — <strong>[list=a][/list]</strong>. Kaip ir netvarkytame sąraše, elementai nurodomi naudojant <strong>[*]</strong>. Pavyzdžiui:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Eiti į parduotuvę<br /><strong>[*]</strong>Nusipirkti naują kompiuterį<br /><strong>[*]</strong>Sugrįžti namo<br /><strong>[/list]</strong><br /><br />bus sugeneruota:<ol style="list-style-type: decimal;"><li>Eiti į parduotuvę</li><li>Nusipirkti naują kompiuterį</li><li>Sugrįžti namo</li></ol>Abėcėliniam sąrašui naudokite:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Pirmasis galimas atsakymas<br /><strong>[*]</strong>Antrasis galimas atsakymas<br /><strong>[*]</strong>Trečiasis galimas atsakymas<br /><strong>[/list]</strong><br /><br />gausite<ol style="list-style-type: lower-alpha"><li>Pirmasis galimas atsakymas</li><li>Antrasis galimas atsakymas</li><li>Trečiasis galimas atsakymas</li></ol><br /><strong>[list=A]</strong><br /><strong>[*]</strong>Pirmasis galimas atsakymas<br /><strong>[*]</strong>Antrasis galimas atsakymas<br /><strong>[*]</strong>Trečiasis galimas atsakymas<br /><strong>[/list]</strong><br /><br />gausite<ol style="list-style-type: upper-alpha"><li>Pirmasis galimas atsakymas</li><li>Antrasis galimas atsakymas</li><li>Trečiasis galimas atsakymas</li></ol><br /><strong>[list=i]</strong><br /><strong>[*]</strong>Pirmasis galimas atsakymas<br /><strong>[*]</strong>Antrasis galimas atsakymas<br /><strong>[*]</strong>Trečiasis galimas atsakymas<br /><strong>[/list]</strong><br /><br />gausite<ol style="list-style-type: lower-roman"><li>Pirmasis galimas atsakymas</li><li>Antrasis galimas atsakymas</li><li>Trečiasis galimas atsakymas</li></ol><br /><strong>[list=I]</strong><br /><strong>[*]</strong>Pirmasis galimas atsakymas<br /><strong>[*]</strong>Antrasis galimas atsakymas<br /><strong>[*]</strong>Trečiasis galimas atsakymas<br /><strong>[/list]</strong><br /><br />gausite<ol style="list-style-type: upper-roman"><li>Pirmasis galimas atsakymas</li><li>Antrasis galimas atsakymas</li><li>Trečiasis galimas atsakymas</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'=> 'Numeruoto sąrašo kūrimas',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'BBCode palaiko du sąrašų tipus: netvarkytą ir tvarkytą. Jie iš esmės atitinka HTML ekvivalentus. Netvarkytame sąraše kiekvienas elementas rodomas iš eilės su ženkliuko simboliu. Norėdami sukurti netvarkytą sąrašą, naudokite <strong>[list][/list]</strong> ir apibrėžkite kiekvieną elementą su <strong>[*]</strong>. Pavyzdžiui, išvardijant mėgstamas spalvas:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Raudona<br /><strong>[*]</strong>Mėlyna<br /><strong>[*]</strong>Geltona<br /><strong>[/list]</strong><br /><br />Tai sugeneruotų:<ul><li>Raudona</li><li>Mėlyna</li><li>Geltona</li></ul><br />Taip pat galite nurodyti ženkliuko stilių naudodami <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong> arba <strong>[list=square][/list]</strong>.',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'=> 'Nenumeruoto sąrašo kūrimas',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> 'Jei esate šio forumo administratorius ir turite atitinkamus leidimus, galite pridėti papildomų BBCode žymų per Pasirinktinių BBCode žymų skyrių.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'=> 'Ar galiu pridėti savo žymas?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'Jei norite rodyti kodo fragmentą ar bet ką, kam reikalingas fiksuotas plotis, pvz., Courier tipo šriftas, apgaukite tekstą <strong>[code][/code]</strong> žymomis, pvz.:<br /><br /><strong>[code]</strong>echo &quot;Tai yra kodo pavyzdys&quot;;<strong>[/code]</strong><br /><br />Visas formatavimas naudotas <strong>[code][/code]</strong> žymose išlaikomas vėliau peržiūrint.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'=> 'Kodo ar fiksuoto pločio duomenų rodymas',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'Yra du būdai cituoti tekstą: su nuoroda arba be jos.<ul><li>Kai naudojate funkciją Citata atsakydami į pranešimą, pranešimo tekstas pridedamas į pranešimo langą, apgaubtą <strong>[quote=&quot;&quot;][/quote]</strong> bloku. Šis metodas leidžia cituoti nurodant šaltinį. Pvz., norėdami cituoti tekstą pono Blobby, rašytumėte:<br /><br /><strong>[quote=&quot;Blobby&quot;]</strong>Pono Blobby tekstas būtų čia<strong>[/quote]</strong><br /><br />Gautas tekstas automatiškai pridės &quot;Blobby rašė:&quot; prie tikrojo teksto. Atminkite, kad <strong>privalote</strong> įtraukti kabutes &quot;&quot; aplink cituojamą vardą, jos nėra neprivalomosios.</li><li>Antrasis metodas leidžia cituoti be nuorodos. Norėdami tai padaryti, apgaukite tekstą <strong>[quote][/quote]</strong> žymomis. Peržiūrint pranešimą, tekstas bus rodomas kaip citata.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'=> 'Teksto citavimas atsakymuose',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'BBCode apima žymas, leidžiančias greitai keisti pagrindinio teksto stilį. Tai pasiekiama šiais būdais: <ul><li>Norėdami paryškinti tekstą, apgaukite jį <strong>[b][/b]</strong>, pvz.: <br /><br /><strong>[b]</strong>Labas<strong>[/b]</strong><br /><br />taps <strong>Labas</strong></li><li>Pabraukimui naudokite <strong>[u][/u]</strong>, pavyzdžiui:<br /><br /><strong>[u]</strong>Labas rytas<strong>[/u]</strong><br /><br />taps <span style="text-decoration: underline">Labas rytas</span></li><li>Kursyvui naudokite <strong>[i][/i]</strong>, pvz.:<br /><br />Tai yra <strong>[i]</strong>puiku!<strong>[/i]</strong><br /><br />rodų Tai yra <i>puiku!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'=> 'Kaip kurti paryškintą, kursyvinį ir pabrauktą tekstą',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'Norėdami pakeisti teksto spalvą ar dydi, galite naudoti šias žymas. Atminkite, kad rezultatas priklauso nuo naršyklės ir sistemos: <ul><li>Teksto spalva keičiama apgaubiant ją <strong>[color=][/color]</strong>. Galite nurodyti atpažinstą spalvos pavadinimą (pvz., red, blue, yellow ir t. t.) arba šešiažnklį alternatyvą, pvz., #FFFFFF, #000000. Pavyzdžiui, norėdami sukurti raudoną tekstą:<br /><br /><strong>[color=red]</strong>Labas!<strong>[/color]</strong><br /><br />arba<br /><br /><strong>[color=#FF0000]</strong>Labas!<strong>[/color]</strong><br /><br />Abu variantai rodys <span style="color:red">Labas!</span></li><li>Teksto dydis keičiamas panašiu būdu naudojant <strong>[size=][/size]</strong>. Ši žyma priklauso nuo naudojamo šablono, tačiau rekomenduojamas formatas yra skaitmeninė reikšmė, nurodanti teksto dydi procentais: nuo 20 (labai mažas) iki 200 (labai didelis). Pavyzdžiui:<br /><br /><strong>[size=30]</strong>MAŽAS<strong>[/size]</strong><br /><br />paprastai bus <span style="font-size:30%;">MAŽAS</span><br /><br />tuo tarpu:<br /><br /><strong>[size=200]</strong>DIDELĖ!<strong>[/size]</strong><br /><br />bus <span style="font-size:200%;">DIDELĖ!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'=> 'Kaip pakeisti teksto spalvą arba dydį',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'Taip, žinoma, galite! Pavyzdžiui, norėdami atkreipti kieno nors dėmesį, galite rašyti:<br /><br /><strong>[size=200][color=red][b]</strong>ŽIŪRĖKITE Į MANE!<strong>[/b][/color][/size]</strong><br /><br />tai parodys <span style="color:red;font-size:200%;"><strong>ŽIŪRĖKITE Į MANE!</strong></span><br /><br />Nerekomenduojame rodyti daug tokio formato teksto! Atminkite, kad jūs, įrašo autorius, esate atsakingas už taisyklingą žymų uždarymą. Pavyzdžiui, šis variantas yra neteisingas:<br /><br /><strong>[b][u]</strong>Tai neteisinga<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'=> 'Ar galima derinti formatavimo žymas?',
));
