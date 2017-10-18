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
	
	'CC_SENDER'				=> 'Siųsti šio el. laiško kopiją sau.',
	'CONTACT_ADMIN'			=> 'Susisiekimas su administratoriumi',
	
	'DEST_LANG'	=> 'Kalba',
	'DEST_LANG_EXPLAIN'	=> 'Pasirinkite reikiamą kalbą (jeigu tokia yra) žinutės adresatui.',
	
	'EDIT_PROFILE'			=> 'Redaguoti profilį',	
	
	'EMAIL_BODY_EXPLAIN'	=> 'Šis laiškas bus išsiųstas kaip paprastas tekstas, todėl nenaudokite HTML ar BBKodo. Jūsų el. pašto adresas bus nurodytas kaip atgalinis šio laiško adresas.',
	'EMAIL_DISABLED'	=> 'Atsiprašome, tačiau visos el. pašto funkcijos išjungtos.',
	'EMAIL_SENT'	=> 'El. laiškas išsiųstas.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Šis laiškas bus išsiųstas kaip paprastas tekstas, todėl nenaudokite HTML ar BBKodo. Atsiminkite, kad duomenys apie temą bus įtraukti į laišką. Jūsų el. pašto adresas bus nurodytas kaip atgalinis šio laiško adresas.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Jūs turite įrašyti teisingą adresato el. pašto adresą.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Jūs turite parašyti laišką, kurį norite išsiųsti.',
	'EMPTY_MESSAGE_IM'	=> 'Jūs turite įrašyti žinutę, kurią norite išsiųsti.',
	'EMPTY_NAME_EMAIL'	=> 'Jūs turite įvesti adresato vardą.',
	'EMPTY_SENDER_EMAIL'	=> 'Jūs turite nurodyti el. pašto adresą.',
	'EMPTY_SENDER_NAME'		=> 'Jūs turite nurodyti vardą.',	
	'EMPTY_SUBJECT_EMAIL'	=> 'Jūs turite nurodyti el. pašto temos pavadinimą.',
	'EQUAL_TO'	=> 'Lygus',
	
	'FIND_USERNAME_EXPLAIN'	=> 'Naudokite šią formą, jeigu norite rasti tam tikrą dalyvį. Visų laukų užpildyti nebūtina. Galite naudoti simbolį * kuris atitinka dalines reikšmės. Datas įrašykite <kbd>YYYY-MM-DD</kbd> formatu, pvz.: <samp>2004-02-29</samp>.',
	'FLOOD_EMAIL_LIMIT'	=> 'Šiuo metu jūs negalite siųsti kito el. laiško. Pabandykite vėliau.',
	
	'GROUP_LEADER'	=> 'Grupės lyderis',
	
	'HIDE_MEMBER_SEARCH'	=> 'Paslėpti dalyvių paiešką',
	
	'IM_ADD_CONTACT'	=> 'Įtraukti į kontaktų sąrašą',
	'IM_DOWNLOAD_APP'	=> 'Atsisiųsti aplikaciją',
	'IM_JABBER'	=> 'Atsiminkite, kad vartotojas gali būti pasirinkęs negauti žinučių iš nepažįstamų.',
	'IM_JABBER_SUBJECT'	=> 'Tai yra automatinė žinutė. Neatsakinėkite į ją! Žinutė nuo vartotojo %1$s iš %2$s.',
	'IM_MESSAGE'	=> 'Jūsų žinutė',
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
	'LIST_USERS'				=> array(
		1	=> '%d vartotojas(ų)',
		2	=> '%d vartotojai(ų)',
	),	
	'LOGIN_EXPLAIN_TEAM'		=> 'Norėdami peržiūrėti komandos sąrašą, turite prisijungti.',	
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Norėdami peržiūrėti diskusijų dalyvių sąrašą, turite prisijungti.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Norėdami ieškoti vartotojų, turite prisijungti.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Norėdami peržiūrėti vartotojų aprašymus, turite prisijungti.',
	
	'MANAGE_GROUP'			=> 'Valdyti grupę',	
	'MORE_THAN'	=> 'Daugiau nei',
	
	'NO_CONTACT_FORM'		=> 'Administratoriaus kontaktų forma yra išjungta.',
	'NO_CONTACT_PAGE'		=> 'Administratoriaus kontaktų puslapis yra išjungtas.',	
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
	'SENDER_EMAIL_ADDRESS'	=> 'Tavo el. pašto adresas',	
	'SENDER_NAME'			=> 'Tavo vardas',	
	'SEND_ICQ_MESSAGE'	=> 'Siųsti žinutę ICQ tinklu',
	'SEND_IM'	=> 'Greitosios žinutės',
	'SEND_JABBER_MESSAGE'	=> 'Siųsti žinutę Jabber tinklu',
	'SEND_MESSAGE'	=> 'Žinutė',
	'SEND_YIM_MESSAGE'	=> 'Siųsti žinutę YIM tinklu',
	'SORT_EMAIL'	=> 'El. paštą',
	'SORT_LAST_ACTIVE'	=> 'Paskutinio prisijungimo datą',
	'SORT_POST_COUNT'	=> 'Pranešimų skaičių',
	
	'USERNAME_BEGINS_WITH'	=> 'Vartotojo vardas prasideda iš',
	'USER_ADMIN'	=> 'Administruoti vartotoją',
	'USER_BAN'	=> 'Blokuoti',
	'USER_FORUM'	=> 'Vartotojo statistika',

	'USER_LAST_REMINDED'	=> array(
		0		=> 'Neišsiųstas nei vienas priminimas',
		1		=> '%1$d priminimas(ų) išsiųsti <br />» %2$s',
		2		=> '%1$d priminimai(ų) išsiųsti <br />» %2$s',		
	),
	'USER_ONLINE'	=> 'Prisijungęs',
	'USER_PRESENCE'	=> 'Buvimas diskusijose',
	'USERS_PER_PAGE'		=> 'Vartotojai per puslapį',	
	
	'VIEWING_PROFILE'	=> 'Aprašo peržiūra - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Žiūrėti Facebook profilį',
	'VIEW_SKYPE_PROFILE'	=> 'Žiūrėti Skype profilį',
	'VIEW_TWITTER_PROFILE'	=> 'Žiūrėti Twitter profilį',
	'VIEW_YOUTUBE_CHANNEL'	=> 'Žiūrėti YouTube kanalą',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Žiūrėti Google+ profilį',
));
