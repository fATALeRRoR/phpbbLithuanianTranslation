<?php
/**
*
* captcha_qa [English]
*
* @package language
* @version $Id: captcha_qa.php 9966 2009-08-12 15:12:03Z Kellanved $
* @copyright (c) 2009 phpBB Group
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
	'CAPTCHA_QA'				=> 'K&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Šis klausimas skirtas apsisaugoti nuo automatizuotų formas užpildančių internetinių šiukšlių robotų.',
	'CONFIRM_QUESTION_WRONG'	=> 'Neteisingai atsakėte užduotą klausimą.',

	'QUESTION_ANSWERS'			=> 'Atsakymai',
	'ANSWERS_EXPLAIN'			=> 'Įrašykite galimus atsakymus į klausimą, po vieną į eilutę.',
	'CONFIRM_QUESTION'			=> 'Klausimas',

	'ANSWER'					=> 'Atsakymas',
	'EDIT_QUESTION'				=> 'Keisti klausimą',
	'QUESTIONS'					=> 'Klausimai',
	'QUESTIONS_EXPLAIN'			=> 'Kiekvienoje formoje, kur įjungėte K&amp;A priedą, vartotojams bus užduotas vienas iš klausimų nurodytų čia. Norėdami naudoti šį priedą, turi įrašyti bent vieną klausimą pagrindine diskusijų lentos kalba. Šie klausimai turi būti lengvi jūsų auditorijai, tačiau tuo pat metu ir sunkūs, kad jų negalėtų atsakyti robotas pasinaudojęs Google™ paieška. Geriausi rezultatai pasiekiami naudojant daug reguliariai besikeičiančių klausimų. Jeigu jūsų klausimai reikalauja atsakymo, kuriame svarbūs skyrybos ženklai, didžiosios ir mažosios raidės, bei tarpai, įjunkite griežtą tikrinimo režimą.',
	'QUESTION_DELETED'			=> 'Klausimas ištrintas',
	'QUESTION_LANG'				=> 'Kalba',
	'QUESTION_LANG_EXPLAIN'		=> 'Kalba, kuria parašytas klausimas ir atsakymas.',
	'QUESTION_STRICT'			=> 'Griežtas tikrinimas',
	'QUESTION_STRICT_EXPLAIN'	=> 'Jeigu įjungsite šį nustatymą, bus tikrinamos didžiosios ir mažosios raidės, tarpai, bei skyrybos ženklai.',

	'QUESTION_TEXT'				=> 'Klausimas',
	'QUESTION_TEXT_EXPLAIN'		=> 'Klausimas, kuris bus užduotas vartotojui.',

	'QA_ERROR_MSG'				=> 'Užpildykite visus laukus ir įrašykite bent vieną atsakymą.',
	'QA_LAST_QUESTION'			=> 'Kol priedas aktyvus visų klausimų ištrinti nepavyks.',
));

?>