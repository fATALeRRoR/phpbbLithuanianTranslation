<?php
/**
*
* memberlist.php [Lithuanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2009 phpBB Group
* @author 2009-12-21 - Vilius Šumskas
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

if (empty($lang) || !is_array($lang))
{
	$lang = array();
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

$lang = array_merge($lang, array(
	'ABOUT_USER'	=> 'Aprašas',
	'ACTIVE_IN_FORUM'	=> 'Aktyviausias forumas',
	'ACTIVE_IN_TOPIC'	=> 'Aktyviausia tema',
	'ADD_FOE'	=> 'Įtraukti į priešų sąrašą',
	'ADD_FRIEND'	=> 'Įtraukti į draugų sąrašą',
	'AFTER'	=> 'Po',
	'ALL'	=> 'Visi',
	'BEFORE'	=> 'Prieš',
	'CC_EMAIL'	=> 'Siųsti šio el. laiško kopiją sau.',
	'CONTACT_USER'	=> 'Susisiekimas su',
	'DEST_LANG'	=> 'Kalba',
	'DEST_LANG_EXPLAIN'	=> 'Pasirinkite reikiamą kalbą (jeigu tokia yra) žinutės adresatui.',
	'EMAIL_BODY_EXPLAIN'	=> 'Šis laiškas bus išsiųstas kaip paprastas tekstas, todėl nenaudokite HTML ar BBKodo. Jūsų el. pašto adresas bus nurodytas kaip atgalinis šio laiško adresas.',
	'EMAIL_DISABLED'	=> 'Atsiprašome, tačiau visos el. pašto funkcijos išjungtos.',
	'EMAIL_SENT'	=> 'El. laiškas išsiųstas.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Šis laiškas bus išsiųstas kaip paprastas tekstas, todėl nenaudokite HTML ar BBKodo. Atsiminkite, kad duomenys apie temą bus įtraukti į laišką. Jūsų el. pašto adresas bus nurodytas kaip atgalinis šio laiško adresas.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Jūs turite įrašyti teisingą adresato el. pašto adresą.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Jūs turite parašyti laišką, kurį norite išsiųsti.',
	'EMPTY_MESSAGE_IM'	=> 'Jūs turite įrašyti žinutę, kurią norite išsiųsti.',
	'EMPTY_NAME_EMAIL'	=> 'Jūs turite įvesti adresato vardą.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Jūs turite nurodyti el. pašto temos pavadinimą.',
	'EQUAL_TO'	=> 'Lygus',
	'FIND_USERNAME_EXPLAIN'	=> 'Naudokite šią formą, jeigu norite rasti tam tikrą dalyvį. Visų laukų užpildyti nebūtina. Galite naudoti simbolį * kuris atitinka dalines reikšmės. Datas įrašykite <kbd>YYYY-MM-DD</kbd> formatu, pvz.: <samp>2004-02-29</samp>.',
	'FLOOD_EMAIL_LIMIT'	=> 'Šiuo metu jūs negalite siųsti kito el. laiško. Pabandykite vėliau.',
	'GROUP_LEADER'	=> 'Grupės lyderis',
	'HIDE_MEMBER_SEARCH'	=> 'Paslėpti dalyvių paiešką',
	'IM_ADD_CONTACT'	=> 'Įtraukti į kontaktų sąrašą',
	'IM_AIM'	=> 'Norėdami naudotis šia paslauga turite įdiegti AOL Instant Messenger.',
	'IM_AIM_EXPRESS'	=> 'AIM Express',
	'IM_DOWNLOAD_APP'	=> 'Atsisiųsti aplikaciją',
	'IM_ICQ'	=> 'Atsiminkite, kad vartotojas gali būti pasirinkęs negauti žinučių iš nepažįstamų.',
	'IM_JABBER'	=> 'Atsiminkite, kad vartotojas gali būti pasirinkęs negauti žinučių iš nepažįstamų.',
	'IM_JABBER_SUBJECT'	=> 'Tai yra automatinė žinutė. Neatsakinėkite į ją! Žinutė nuo vartotojo %1$s iš %2$s.',
	'IM_MESSAGE'	=> 'Jūsų žinutė',
	'IM_MSNM'	=> 'Norėdami naudotis šia paslauga turite įdiegti Windows Messenger.',
	'IM_MSNM_BROWSER'	=> 'Jūsų naršyklė nemoka naudotis šia paslauga.',
	'IM_MSNM_CONNECT'	=> 'Jūs nesate prisijungę prie MSNM tinklo.\\nNorėdami tęsti, turite prisijungti.',
	'IM_NAME'	=> 'Jūsų vardas',
	'IM_NO_DATA'	=> 'Šis vartotojas neįvedė jokių kontaktinių duomenų.',
	'IM_NO_JABBER'	=> 'Atsiprašome, ši diskusijų lenta nepalaiko tiesioginių žinučių siuntimo Jabber vartotojams. Jums reikia įdiegti Jabber klientą į savo kompiuterį, jeigu norite susisiekti su vartotoju viršuje.',
	'IM_RECIPIENT'	=> 'Adresatas',
	'IM_SEND'	=> 'Siųsti žinutę',
	'IM_SEND_MESSAGE'	=> 'Siųsti žinutę',
	'IM_SENT_JABBER'	=> 'Jūsų žinutė vartotojui %1$s sėkmingai išsiųsta.',
	'IM_USER'	=> 'Siųsti žinutę',
	'LAST_ACTIVE'	=> 'Paskutinį kartą prisijungė',
	'LESS_THAN'	=> 'Mažiau nei',
	'LIST_USER'	=> '1 vartotojas',
	'LIST_USERS'	=> '%d vartotojai(ų)',
	'LOGIN_EXPLAIN_LEADERS'	=> 'Norėdami peržiūrėti komandos sąrašą, turite prisijungti.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Norėdami peržiūrėti diskusijų dalyvių sąrašą, turite prisijungti.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Norėdami ieškoti vartotojų, turite prisijungti.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Norėdami peržiūrėti vartotojų aprašymus, turite prisijungti.',
	'MORE_THAN'	=> 'Daugiau nei',
	'NO_EMAIL'	=> 'Jums neleidžiama siųsti el. laiškų šiam vartotojui.',
	'NO_VIEW_USERS'	=> 'Jūs neturite teisių peržiūrėti diskusijų dalyvių sąrašo arba aprašymų.',
	'ORDER'	=> 'Eilė',
	'OTHER'	=> 'Kiti',
	'POST_IP'	=> 'Rašo iš IP adreso/domeno',
	'REAL_NAME'	=> 'Adresato vardas',
	'RECIPIENT'	=> 'Adresatas',
	'REMOVE_FOE'	=> 'Išbraukti iš priešų sąrašo',
	'REMOVE_FRIEND'	=> 'Išbraukti iš draugų sąrašo',
	'SELECT_MARKED'	=> 'Pasirinkti pažymėtus',
	'SELECT_SORT_METHOD'	=> 'Pasirinkti rūšiavimo būdą',
	'SEND_AIM_MESSAGE'	=> 'Siųsti žinutę AIM tinklu',
	'SEND_ICQ_MESSAGE'	=> 'Siųsti žinutę ICQ tinklu',
	'SEND_IM'	=> 'Greitosios žinutės',
	'SEND_JABBER_MESSAGE'	=> 'Siųsti žinutę Jabber tinklu',
	'SEND_MESSAGE'	=> 'Žinutė',
	'SEND_MSNM_MESSAGE'	=> 'Siųsti žinutę MSNM/WLM tinklu',
	'SEND_YIM_MESSAGE'	=> 'Siųsti žinutę YIM tinklu',
	'SORT_EMAIL'	=> 'El. paštą',
	'SORT_LAST_ACTIVE'	=> 'Paskutinio prisijungimo datą',
	'SORT_POST_COUNT'	=> 'Pranešimų skaičių',
	'USERNAME_BEGINS_WITH'	=> 'Vartotojo vardas prasideda iš',
	'USER_ADMIN'	=> 'Administruoti vartotoją',
	'USER_BAN'	=> 'Blokuoti',
	'USER_FORUM'	=> 'Vartotojo statistika',

	'USER_LAST_REMINDED'	=> array(
		'0'	=> 'Neišsiųstas nei vienas priminimas',
		'1'	=> 'Išsiųstas(i) %1$d priminimas(i)<br />» %2$s',
	),

	'USER_ONLINE'	=> 'Prisijungęs',
	'USER_PRESENCE'	=> 'Buvimas diskusijose',
	'VIEWING_PROFILE'	=> 'Aprašo peržiūra - %s',
	'VISITED'	=> 'Paskutinį kartą prisijungė',
	'WWW'	=> 'Interneto puslapis',
));

?>