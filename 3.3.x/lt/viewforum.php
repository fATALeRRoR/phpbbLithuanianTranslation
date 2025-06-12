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
	'ACTIVE_TOPICS'	=> 'Aktyvios temos',
	'ANNOUNCEMENTS'	=> 'Svarbūs pranešimai',
	
	'FORUM_PERMISSIONS'	=> 'Forumo teisės',
	
	'ICON_ANNOUNCEMENT'	=> 'Svarbi',
	'ICON_STICKY'	=> 'Dažna',
	
	'LOGIN_NOTIFY_FORUM'	=> 'Jums buvo pranešta apie naujus pranešimus šiame forume. Norėdami juos pamatyti, turite prisijungti.',
	
	'MARK_TOPICS_READ'	=> 'Pažymėti visas temas kaip perskaitytas',
	
	'NEW_POSTS_HOT'	=> 'Yra naujų pranešimų [ Populiari ]',
	'NEW_POSTS_LOCKED'	=> 'Yra naujų pranešimų [ Užrakinta ]',
	'NO_NEW_POSTS_HOT'	=> 'Naujų pranešimų nėra [ Populiari ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Naujų pranešimų nėra [ Užrakinta ]',
	'NO_READ_ACCESS'	=> 'Jūs neturite teisės matyti ar skaityti temas šiame forume.',
	'NO_FORUMS_IN_CATEGORY'	=> 'Ši kategorija neturi jokių forumų.',
	'NO_UNREAD_POSTS_HOT'	=> 'Neperskaitytų pranešimų nėra [ Populiari ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Neperskaitytų pranešimų nėra [ Užrakinta ]',
	
	'POST_FORUM_LOCKED'	=> 'Forumas užrakintas',
	
	'TOPICS_MARKED'	=> 'Dabar visos temos šiame forume pažymėtos kaip perskaitytos.',
	
	'UNREAD_POSTS_HOT'	=> 'Yra neperskaitytų pranešimų [ Populiari ]',
	'UNREAD_POSTS_LOCKED'	=> 'Yra neperskaitytų pranešimų [ Užrakinta ]',
	
	'VIEW_FORUM'	=> 'Forumo rodymas',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d tema',
		2	=> '%d temų',
	),
	
));
