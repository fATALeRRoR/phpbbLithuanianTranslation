<?php
/**
*
* groups.php [Lithuanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-04-08 - Vilius Šumskas
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
	'ALREADY_DEFAULT_GROUP'	=> 'Pasirinkta grupė jau yra jūsų pagrindinė grupė.',
	'ALREADY_IN_GROUP'	=> 'Jūs jau esate šios grupės narys.',
	'ALREADY_IN_GROUP_PENDING'	=> 'Jūs jau nusiuntėte prašymą prisijungti prie šios grupės.',
	'CANNOT_JOIN_GROUP'	=> 'Jūs negalite prisijungti prie šios grupės. Jūs galite prisijungti tik prie atviros ar visiškai atviros grupės.',
	'CANNOT_RESIGN_GROUP'	=> 'Jūs negalite atsijungti nuo šios grupės. Jūs galite atsijungti tik nuo atviros ar visiškai atviros grupės.',
	'CHANGED_DEFAULT_GROUP'	=> 'Pagrindinė grupė sėkmingai pakeista.',
	'GROUP_AVATAR'	=> 'Grupės avataras',
	'GROUP_CHANGE_DEFAULT'	=> 'Ar tikrai norite kad “%s” būtų jūsų pagrindinė grupė?',
	'GROUP_CLOSED'	=> 'Uždara',
	'GROUP_DESC'	=> 'Grupės aprašymas',
	'GROUP_HIDDEN'	=> 'Slapta',
	'GROUP_INFORMATION'	=> 'Grupės informacija',
	'GROUP_IS_CLOSED'	=> 'Tai - uždara grupė. Naujus narius priima tik grupės lyderis.',
	'GROUP_IS_FREE'	=> 'Tai - visiškai atvira grupė. Laukiami visi nauji nariai.',
	'GROUP_IS_HIDDEN'	=> 'Tai - slapta grupė. Tik šios grupės nariai gali matytį jos narių sąrašą.',
	'GROUP_IS_OPEN'	=> 'Tai - atvira grupė. Nauji nariai gali siųsti prašymą prisijungti.',
	'GROUP_IS_SPECIAL'	=> 'Tai - speciali grupė. Specialias grupes valdo tik diskusijų administratoriai.',
	'GROUP_JOIN'	=> 'Prisijungti prie grupės',
	'GROUP_JOIN_CONFIRM'	=> 'Ar tikrai norite prisijungti prie šios grupės?',
	'GROUP_JOIN_PENDING'	=> 'Siųsti prašymą prisijungti prie grupės',
	'GROUP_JOIN_PENDING_CONFIRM'	=> 'Ar tikrai norite siųsti prašymą prisijungti prie šios grupės?',
	'GROUP_JOINED'	=> 'Jūs sėkmingai prisijungėte prie pasirinktos grupės.',
	'GROUP_JOINED_PENDING'	=> 'Prašymas prisijungti prie grupės sėkmingai išsiųstas. Palaukite kol grupės lyderis patvirtins jūsų prašymą.',
	'GROUP_LIST'	=> 'Valdyti vartotojus',
	'GROUP_MEMBERS'	=> 'Grupės nariai',
	'GROUP_NAME'	=> 'Grupės pavadinimas',
	'GROUP_OPEN'	=> 'Atvira',
	'GROUP_RANK'	=> 'Grupės rangas',
	'GROUP_RESIGN_MEMBERSHIP'	=> 'Išeiti iš grupės',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> 'Ar tikrai norite išeiti iš pasirinktos grupės?',
	'GROUP_RESIGN_PENDING'	=> 'Išeiti iš grupės kurioje jūsų narystė dar nepatvirtinta',
	'GROUP_RESIGN_PENDING_CONFIRM'	=> 'Ar tikrai norite išeiti iš pasirinktos grupės, kurioje jūsų narystė dar nepatvirtinta?',
	'GROUP_RESIGNED_MEMBERSHIP'	=> 'Jūs sėkmingai atsijungėte nuo pasirinktos grupės.',
	'GROUP_RESIGNED_PENDING'	=> 'Jūs sėkmingai atsijungėte nuo pasirinktos grupės, kurioje jūsų narystė dar nebuvo patvirtinta.',
	'GROUP_TYPE'	=> 'Grupės tipas',
	'GROUP_UNDISCLOSED'	=> 'Slapta grupė',
	'FORUM_UNDISCLOSED'	=> 'Slapto(ų) forumo(ų) moderavimas',
	'LOGIN_EXPLAIN_GROUP'	=> 'Norėdami peržiūrėti detalesnę informaciją apie grupę turite prisijungti.',
	'NO_LEADERS'	=> 'Jūs nesate jokios grupės lyderis.',
	'NOT_LEADER_OF_GROUP'	=> 'Jūsų prašymo siuntimas neįvykdytas, nes jūs nesate pasirinktos grupės lyderis.',
	'NOT_MEMBER_OF_GROUP'	=> 'Jūsų prašymo siuntimas neįvykdytas, nes jūs nesate pasirinktos grupės narys arba jūsų narystė dar nepatvirtinta.',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> 'Jums neleidžiama išeiti iš jūsų pagrindinės grupės.',
	'PRIMARY_GROUP'	=> 'Pagrindinė grupė',
	'REMOVE_SELECTED'	=> 'Ištrinti pasirinktus',
	'USER_GROUP_CHANGE'	=> 'Iš “%1$s” grupės į “%2$s”',
	'USER_GROUP_DEMOTE'	=> 'Pažeminti pareigose grupės lyderį',
	'USER_GROUP_DEMOTE_CONFIRM'	=> 'Ar tikrai norite pažeminti pareigose grupės lyderį pasirinktoje grupėje?',
	'USER_GROUP_DEMOTED'	=> 'Grupės lyderis sėkmingai pažemintas pareigose.',
));

?>