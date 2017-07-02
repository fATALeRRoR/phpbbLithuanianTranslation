<?php
/**
*
* acp_email.php [Lithuanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2011 phpBB Group
* @author 2011-07-15 - Vilius Šumskas
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
	'ACP_MASS_EMAIL_EXPLAIN'	=> 'Čia visiems savo vartotojams arba visiems tam tikros grupės vartotojams, <strong>kurie įsijungę nustatymą gauti el. laiškus</strong>, galite išsiųsti el. laišką. Administratoriui bus išsiųstas el. laiškas, kurio nematomos kopijos bus išsiųstos visiems nurodytiems adresatams. Standartiškai tokie el. laiškai vienu metu siunčiami 50 gavėjų. Jeigu siunčiate el. laišką didelei žmonių grupei, būkite kantrūs ir nepalikite šio puslapio, kol siuntimas nebus baigtas. Normalu, kad toks procesas užtruks ilgą laiko tarpą. Kai jis baigsis jums bus pranešta.',
	'ALL_USERS'	=> 'Visi vartotojai',
	'COMPOSE'	=> 'El. pašto siuntimas',
	'EMAIL_SEND_ERROR'	=> 'Siunčiant el. paštą įvyko viena ar daugiau klaidų. Platesnę informaciją apie klaidas rasite %sklaidų registre%s.',
	'EMAIL_SENT'	=> 'Laiškas sėkmingai išsiųstas.',
	'EMAIL_SENT_QUEUE'	=> 'Laiškas stovi laiškų eilėje.',
	'LOG_SESSION'	=> 'Įrašyti duomenis apie siuntimą į klaidų registrą',
	'SEND_IMMEDIATELY'	=> 'Siųsti tuojau pat',
	'SEND_TO_GROUP'	=> 'Siųsti grupei',
	'SEND_TO_USERS'	=> 'Siųsti vartotojams',
	'SEND_TO_USERS_EXPLAIN'	=> 'Jeigu čia įrašysite vartotojų vardus, grupė, kurią pasirinkote viršuje, nedalyvaus laiško gavime. Kiekvieną vartotojo vardą rašykite naujoje eilutėje.',
	'MAIL_BANNED'	=> 'Siųsti užblokuotiems vartotojams',
	'MAIL_BANNED_EXPLAIN'	=> 'Kai siunčiate laiškus grupei, čia galite pasirinkti, ar siųsti juos ir užblokuotiems grupės vartotojams.',
	'MAIL_HIGH_PRIORITY'	=> 'Svarbus',
	'MAIL_LOW_PRIORITY'	=> 'Žemas',
	'MAIL_NORMAL_PRIORITY'	=> 'Normalus',
	'MAIL_PRIORITY'	=> 'Laiško prioritetas',
	'MASS_MESSAGE'	=> 'Jūsų žinutė',
	'MASS_MESSAGE_EXPLAIN'	=> 'Atsiminkite, kad galite įrašyti tik paprastą tekstą. Visos žymės bus pašalintos prieš siuntimą.',
	'NO_EMAIL_MESSAGE'	=> 'Jūs turite įrašyti žinutę.',
	'NO_EMAIL_SUBJECT'	=> 'Jūs turite įrašyti žinutės temą.',
));

?>