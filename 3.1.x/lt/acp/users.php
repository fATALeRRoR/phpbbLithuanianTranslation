<?php
/**
*
* acp_users.php [Lithuanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2012 phpBB Group
* @author 2012-09-07 - Vilius Šumskas
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
	'ADMIN_SIG_PREVIEW'	=> 'Parašo peržiūra',
	'AT_LEAST_ONE_FOUNDER'	=> 'Jūs negalite pakeisti šio steigėjo į normalų vartotoją. Diskusijose turi būti bent vienas steigėjas. Jeigu norite pakeisti šio vartotojo steigėjo statusą, iš pradžių paskirkite steigėjo pareigas kitam vartotojui.',
	'BAN_ALREADY_ENTERED'	=> 'Toks blokas jau egzistuoja. Blokuojamų vartotojų sąrašas nebuvo atnaujintas.',
	'BAN_SUCCESSFUL'	=> 'Įrašas sėkmingai įtrauktas į blokuojamų sąrašą.',
	'CANNOT_BAN_ANONYMOUS'	=> 'Jūs negalite blokuoti svečio. Svečių teises galite valdyti per Teisių modulį.',
	'CANNOT_BAN_FOUNDER'	=> 'Jūs negalite blokuoti diskusijų steigėjo vartotojo vardo.',
	'CANNOT_BAN_YOURSELF'	=> 'Jūs negalite blokuoti savęs.',
	'CANNOT_DEACTIVATE_BOT'	=> 'Jūs negalite išjungti robotų vartotojų vardų. Tiesiog išjunkite jį robotų puslapyje.',
	'CANNOT_DEACTIVATE_FOUNDER'	=> 'Jūs negalite išjungti diskusijų steigėjo vartotojo vardo.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Jūs negalite išjungti savo vartotojo vardo.',
	'CANNOT_FORCE_REACT_BOT'	=> 'Jūs negalite paprašyti aktyvuoti robotų vartotojų vardų. Tiesiog išjunkite jį robotų puslapyje.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Jūs negalite paprašyti aktyvuoti diskusijų steigėjo vartotojo vardo.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Jūs negalite paprašyti aktyvuoti savo vartotojo vardo.',
	'CANNOT_REMOVE_ANONYMOUS'	=> 'Jūs negalite ištrinti svečio vartotojo vardo.',
	'CANNOT_REMOVE_YOURSELF'	=> 'Jūs negalite ištrinti savo vartotojo vardo.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Jūs negalite padaryti ignoruojamų vartotojų diskusijų steigėjais.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Prieš paskiriant vartotojus diskusijų steigėjais, reikia juos aktyvuoti. Tik aktyvuoti vartotojai gali būti diskusijų steigėjais.',
	'CONFIRM_EMAIL_EXPLAIN'	=> 'Užpildykite šį lauką tik tada, jeigu keičiate vartotojo el. pašto adresą.',
	'DELETE_POSTS'	=> 'Ištrinti pranešimus',
	'DELETE_USER'	=> 'Ištrinti vartotoją',
	'DELETE_USER_EXPLAIN'	=> 'Ištrynę vartotoją grąžinti jo nebegalėsite. Neperskaitytos šio vartotojo asmeninės žinutės siųstos kitiems vartotojams taip pat bus ištrintos.',
	'FORCE_REACTIVATION_SUCCESS'	=> 'Paprašėte dar kartą aktyvuoti vartotojo vardą sėkmingai.',
	'FOUNDER'	=> 'Steigėjas',
	'FOUNDER_EXPLAIN'	=> 'Diskusijų steigėjai turi visas administravimo teises ir negali būti užblokuoti, ištrinti arba kaip nors kitaip pakeisti kitų vartotojų, kurie neturi steigėjo statuso.',
	'GROUP_APPROVE'	=> 'Patvirtinti narį',
	'GROUP_DEFAULT'	=> 'Padaryti pagrindine grupe',
	'GROUP_DELETE'	=> 'Pašalinti narį iš grupės',
	'GROUP_DEMOTE'	=> 'Pažeminti pareigose grupės lyderį',
	'GROUP_PROMOTE'	=> 'Paskelbti grupės lyderiu',
	'IP_WHOIS_FOR'	=> '%s IP adreso informacija',
	'LAST_ACTIVE'	=> 'Paskutinį kartą prisijungė',
	'MOVE_POSTS_EXPLAIN'	=> 'Pasirinkite forumą, į kurį norite perkelti visus šio vartotojo pranešimus.',
	'NO_SPECIAL_RANK'	=> 'Neturi specialaus rango',
	'NO_WARNINGS'	=> 'Perspėjimų neturi.',
	'NOT_MANAGE_FOUNDER'	=> 'Jūs bandote keisti vartotoją, kuris turi diskusijų steigėjo statusą. Tik kiti steigėjai turi tokią teisę.',
	'QUICK_TOOLS'	=> 'Greitieji įrankiai',
	'REGISTERED'	=> 'Užsiregistravo',
	'REGISTERED_IP'	=> 'Užsiregistravo iš IP adreso',
	'RETAIN_POSTS'	=> 'Palikti pranešimus',
	'SELECT_FORM'	=> 'Duomenų pasirinkimas',
	'SELECT_USER'	=> 'Vartotojo pasirinkimas',
	'USER_ADMIN'	=> 'Vartotojo valdymas',
	'USER_ADMIN_ACTIVATE'	=> 'Aktyvuoti vartotojo vardą',
	'USER_ADMIN_ACTIVATED'	=> 'Vartotojo vardas aktyvuotas sėkmingai.',
	'USER_ADMIN_AVATAR_REMOVED'	=> 'Vartotojo avataras sėkmingai ištrintas.',
	'USER_ADMIN_BAN_EMAIL'	=> 'Blokuoti pagal el. pašto adresą',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'El. pašto adresas užblokuotas per vartotojo valdymo pultą',
	'USER_ADMIN_BAN_IP'	=> 'Blokuoti pagal IP adresą',
	'USER_ADMIN_BAN_IP_REASON'	=> 'IP adresas užblokuotas per vartotojo valdymo pultą',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Vartotojo vardas užblokuotas per vartotojo valdymo pultą',
	'USER_ADMIN_BAN_USER'	=> 'Blokuoti pagal vartotojo vardą',
	'USER_ADMIN_DEACTIVATE'	=> 'Išjungti vartotojo vardą',
	'USER_ADMIN_DEACTIVED'	=> 'Vartotojo vardas išjungtas sėkmingai.',
	'USER_ADMIN_DEL_ATTACH'	=> 'Ištrinti visus prikabintus failus',
	'USER_ADMIN_DEL_AVATAR'	=> 'Ištrinti avatarą',
	'USER_ADMIN_DEL_OUTBOX'	=> 'Išvalyti siunčiamų AŽ katalogą',
	'USER_ADMIN_DEL_POSTS'	=> 'Ištrinti visus pranešimus',
	'USER_ADMIN_DEL_SIG'	=> 'Ištrinti parašą',
	'USER_ADMIN_EXPLAIN'	=> 'Čia galite keisti duomenis apie vartotojus ir kai kuriuos specifinius jų nustatymus.',
	'USER_ADMIN_FORCE'	=> 'Dar kartą paprašyti aktyvuoti vartotojo vardą',
	'USER_ADMIN_LEAVE_NR'	=> 'Pašalinti iš Naujai registruotų',
	'USER_ADMIN_MOVE_POSTS'	=> 'Perkelti visus pranešimus',
	'USER_ADMIN_SIG_REMOVED'	=> 'Vartotojo parašas ištrintas sėkmingai.',
	'USER_ATTACHMENTS_REMOVED'	=> 'Visi vartotojo prikabinti failai ištrinti sėkmingai.',
	'USER_AVATAR_NOT_ALLOWED'	=> 'Avataras nerodomas, nes avatarai buvo uždrausti.',
	'USER_AVATAR_UPDATED'	=> 'Vartotojo avataro duomenys pakeisti sėkmingai.',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Dabartinis avataras nerodomas, nes šis avatarų tipas buvo uždrautas.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Papildomi aprašo laukai',
	'USER_DELETED'	=> 'Vartotojas sėkmingai ištrintas.',
	'USER_GROUP_ADD'	=> 'Įtraukti vartotoją į grupę',
	'USER_GROUP_NORMAL'	=> 'Normalios grupės, kuriose šis vartotojas yra narys',
	'USER_GROUP_PENDING'	=> 'Grupės, kuriose vartotojo narystė dar nepatvirtinta',
	'USER_GROUP_SPECIAL'	=> 'Specialios grupės, kuriose šis vartotojas yra narys',
	'USER_LIFTED_NR'	=> 'Vartotojas sėkmingai pašalintas iš naujai registruotų vartotojų grupės.',
	'USER_NO_ATTACHMENTS'	=> 'Prikabintų failų nėra.',
	'USER_NO_POSTS_TO_DELETE'	=> 'Vartotojas neturi pranešimų, kuriuos galima būtų išsaugoti arba ištrinti.',
	'USER_OUTBOX_EMPTIED'	=> 'Vartotojo siunčiamų asmeninių žinučių katalogas sėkmingai išvalytas.',
	'USER_OUTBOX_EMPTY'	=> 'Vartotojo siunčiamų asmeninių žinučių katalogas jau buvo tuščias.',
	'USER_OVERVIEW_UPDATED'	=> 'Vartotojo duomenys atnaujinti.',
	'USER_POSTS_DELETED'	=> 'Visi vartotojo pranešimai ištrinti sėkmingai.',
	'USER_POSTS_MOVED'	=> 'Vartotojo pranešimai sėkmingai perkelti į nurodytą forumą.',
	'USER_PREFS_UPDATED'	=> 'Vartotojo nustatymai atnaujinti.',
	'USER_PROFILE'	=> 'Vartotojo aprašas',
	'USER_PROFILE_UPDATED'	=> 'Vartotojo aprašas atnaujintas.',
	'USER_RANK'	=> 'Vartotojo rangas',
	'USER_RANK_UPDATED'	=> 'Vartotojo rangas pakeistas.',
	'USER_SIG_UPDATED'	=> 'Vartotojo parašas atnaujintas sėkmingai.',
	'USER_WARNING_LOG_DELETED'	=> 'Duomenų nėra. Greičiausiai registro įrašas buvo ištrintas.',
	'USER_TOOLS'	=> 'Pagrindiniai įrankiai',
));

?>