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
	'APPROVE'								=> 'Patvirtinti',
	'ATTACHMENT'	=> 'Prikabintas failas',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Failų prikabinimo galimybė yra išjungta.',
	
	'BOOKMARK_ADDED'	=> 'Tema sėkmingai pažymėta.',
	'BOOKMARK_ERR'	=> 'Pažymėti temos nepavyko. Bandykite dar kartą.',
	'BOOKMARK_REMOVED'	=> 'Tema sėkmingai atžymėta.',
	'BOOKMARK_TOPIC'	=> 'Pažymėti temą',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Atžymėti temą',
	'BUMPED_BY'	=> 'Paskutinį kartą priminė %1$s %2$s.',
	'BUMP_TOPIC'	=> 'Priminti apie temą',
	
	'CODE'	=> 'Kodas',
	
	'DELETE_TOPIC'	=> 'Ištrinti temą',
	'DELETED_INFORMATION'	=> 'Deleted by %1$s on %2$s',
	'DISAPPROVE'					=> 'Nepatvirtinti',	
	'DOWNLOAD_NOTICE'	=> 'Jūs neturite teisės peržiūrėti failų, kurie yra prikabinti prie šio pranešimo.',
	
	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Paskutinį kartą redagavo %2$s %3$s, redaguota %1$d kartą(us).',
		2	=> 'Paskutinį kartą redagavo %2$s %3$s, redaguota %1$d kartą(us).',
	),
	'EMAIL_TOPIC'	=> 'Siųsti temos nuorodą draugui el. paštu',
	'ERROR_NO_ATTACHMENT'	=> 'Pasirinktas failas buvo ištrintas.',
	
	'FILE_NOT_FOUND_404'	=> 'Failas <strong>%s</strong> neegzistuoja.',
	'FORK_TOPIC'	=> 'Kopijuoti temą',
	'FULL_EDITOR'	=> 'Pilnas redaktorius',
	
	'LINKAGE_FORBIDDEN'	=> 'Jūs neturite teisės peržiūrėti, atsisiųsti arba jungtis prie šio puslapio.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Jums buvo pranešta apie naujus pranešimus šioje temoje. Norėdami juos pamatyti, turite prisijungti.',
	'LOGIN_VIEWTOPIC'	=> 'Norėdami peržiūrėti šią temą, turite užsiregistruoti ir prisijungti.',
	
	'MAKE_ANNOUNCE'	=> 'Pakeisti tipą į “Svarbi!”',
	'MAKE_GLOBAL'	=> 'Pakeisti tipą į “Labai svarbi!”',
	'MAKE_NORMAL'	=> 'Pakeisti tipą į “Standartinė tema”',
	'MAKE_STICKY'	=> 'Pakeisti tipą į “Dažna tema”',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Jūs galite pasirinkti <strong>%d</strong> variantą',
		2	=> 'Jūs galite pasirinkti iki <strong>%d</strong> variantus',
	),	
	'MISSING_INLINE_ATTACHMENT'	=> 'Prikabintas failas <strong>%s</strong> nebepasiekiamas',
	'MOVE_TOPIC'	=> 'Perkelti temą',
	
	'NO_ATTACHMENT_SELECTED'	=> 'Jūs nepasirinkote failo.',
	'NO_NEWER_TOPICS'	=> 'Naujesnių temų šiame forume nėra.',
	'NO_OLDER_TOPICS'	=> 'Senesnių temų šiame forume nėra.',
	'NO_UNREAD_POSTS'	=> 'Naujų neskaitytų pranešimų šioje temoje nėra.',
	'NO_VOTE_OPTION'	=> 'Jūs turite pasirinkti bent vieną atsakymo variantą.',
	'NO_VOTES'	=> 'Balsų nėra',
	
	'POLL_ENDED_AT'	=> 'Apklausa baigėsi %s',
	'POLL_RUN_TILL'	=> 'Apklausa baigsis %s',
	'POLL_VOTED_OPTION'	=> 'Jūs atidavėte balsą už šį atsakymo variantą',
	'POST_DELETED_RESTORE'	=> 'This post has been deleted. It can be restored.',	
	'PRINT_TOPIC'	=> 'Spausdinti',
	
	'QUICK_MOD'	=> 'Greitieji įrankiai',
	'QUICKREPLY'	=> 'Greitasis atsakymas',
	'QUOTE'	=> 'Cituoti',
	
	'REPLY_TO_TOPIC'	=> 'Atsakyti į temą',
	'RESTORE'				=> 'Atstatyti',
	'RESTORE_TOPIC'			=> 'Atstatyti temą',	
	'RETURN_POST'	=> '%sGrįžti į pranešimą%s',
	
	'SUBMIT_VOTE'	=> 'Balsuoti',
	
	'TOPIC_TOOLS'			=> 'Topic tools',	
	'TOTAL_VOTES'	=> 'Viso balsų',
	
	'UNLOCK_TOPIC'	=> 'Atrakinti temą',
	
	'VIEW_INFO'	=> 'Detalus pranešimo aprašymas',
	'VIEW_NEXT_TOPIC'	=> 'Kita tema',
	'VIEW_PREVIOUS_TOPIC'	=> 'Ankstesnė tema',
	'VIEW_RESULTS'	=> 'Rodyti rezultatus',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d pranešimas',
		2	=> '%d pranešimai(ų)',
	),
	'VIEW_UNREAD_POST'	=> 'Pirmas neskaitytas pranešimas',
	'VOTE_SUBMITTED'	=> 'Jūsų balsas įskaičiuotas.',
	'VOTE_CONVERTED'	=> 'Konvertuotose apklausose keisti balsų negalima.',
));
