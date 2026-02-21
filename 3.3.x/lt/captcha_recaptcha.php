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
	'RECAPTCHA_LANG'	=> 'lt', // Find the language/country code on https://developers.google.com/recaptcha/docs/language - If no code exists for your language you can use "en" or leave the string empty
	'RECAPTCHA_NOT_AVAILABLE'	=> 'Norėdami naudoti reCaptcha priedą turite užsiregistruoti <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a> puslapyje.',
	'CAPTCHA_RECAPTCHA'			=> 'reCaptcha v2',
	'CAPTCHA_RECAPTCHA_V3'		=> 'reCaptcha v3',
	'RECAPTCHA_INCORRECT'	=> 'Vaizdinio patvirtinimo kodas, kurį įrašėte, yra neteisingas',
	'RECAPTCHA_NOSCRIPT'				=> 'Įjunkite JavaScript savo naršyklėje, kad pamatytumėte.',	
	'RECAPTCHA_INVISIBLE'				=> 'Šis CAPTCHA iš tikrųjų yra nematomas. Norėdami patikrinti ar jis veikia, dešiniame apatiniame puslapio kampe turėtų pasirodyti maža piktograma.',
	'RECAPTCHA_V3_LOGIN_ERROR_ATTEMPTS'	=> 'Viršijote leistiną prisijungimo bandymų skaičių.<br>Be vartotojo vardo ir slaptažodžio jūsų sesijai autentifikuoti bus naudojamas nematomas reCAPTCHA v3.',

	'RECAPTCHA_PUBLIC'				=> 'Svetainės raktas',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Jūsų svetainės reCAPTCHA raktas. Raktus galite gauti iš <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Naudokite reCAPTCHA v2 &gt; Nematomo reCAPTCHA ženklelio tipą.',
	'RECAPTCHA_V3_PUBLIC_EXPLAIN'	=> 'Jūsų svetainės reCAPTCHA raktas. Raktus galite gauti iš <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Naudokite reCAPTCHA v3.',
	'RECAPTCHA_PRIVATE'				=> 'Slaptasis raktas',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Jūsų slaptasis reCAPTCHA raktas. Raktus galite gauti iš <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Naudokite reCAPTCHA v2 &gt; Nematomo reCAPTCHA ženklelio tipą.',
	'RECAPTCHA_V3_PRIVATE_EXPLAIN'	=> 'Jūsų slaptasis reCAPTCHA raktas. Raktus galite gauti iš <a href="https://www.google.com/recaptcha">www.google.com/recaptcha</a>. Naudokite reCAPTCHA v3.',

	'RECAPTCHA_V3_DOMAIN'			=> 'Užklausos domenas',
	'RECAPTCHA_V3_DOMAIN_EXPLAIN'	=> 'Domenas iš kurio gauti scenarijų ir naudoti tikrinant užklausą.<br>Naudokite <samp>recaptcha.net</samp> kai <samp>google.com</samp> neprieinamas.',

	'RECAPTCHA_V3_METHOD'				=> 'Užklausos metodas',
	'RECAPTCHA_V3_METHOD_EXPLAIN'		=> 'Metodas naudojamas tikrinant užklausą.<br>Išjungtos parinktys neprieinamos jūsų sąrankoje.',
	'RECAPTCHA_V3_METHOD_CURL'			=> 'cURL',
	'RECAPTCHA_V3_METHOD_POST'			=> 'POST',
	'RECAPTCHA_V3_METHOD_SOCKET'		=> 'Socket',

	'RECAPTCHA_V3_THRESHOLD_DEFAULT'			=> 'Numatytasis slenkstis',
	'RECAPTCHA_V3_THRESHOLD_DEFAULT_EXPLAIN'	=> 'Naudojamas kai netaikomas nė vienas iš kitų veiksmų.',
	'RECAPTCHA_V3_THRESHOLD_LOGIN'				=> 'Prisijungimo slenkstis',
	'RECAPTCHA_V3_THRESHOLD_POST'				=> 'Pranešimų slenkstis',
	'RECAPTCHA_V3_THRESHOLD_REGISTER'			=> 'Registracijos slenkstis',
	'RECAPTCHA_V3_THRESHOLD_REPORT'				=> 'Raportavimo slenkstis',
	'RECAPTCHA_V3_THRESHOLDS'					=> 'Slenksčiai',
	'RECAPTCHA_V3_THRESHOLDS_EXPLAIN'			=> 'reCAPTCHA v3 grąžina balą (<samp>1.0</samp> labai tikėtina, kad tai geras sąveika, <samp>0.0</samp> labai tikėtina, kad tai botas). Čia galite nustatyti minimalų balą kiekvienam veiksmui.',
	'EMPTY_RECAPTCHA_V3_REQUEST_METHOD'			=> 'reCAPTCHA v3 reikia žinoti, kurį prieinamą metodą norite naudoti tikrinant užklausą.',
	
	'RECAPTCHA_EXPLAIN'	=> 'Norėdami apsisaugoti nuo automatinių formų užpildymo mes reikalaujame, kad patvirtintumėte, jog esate žmogus.',	
));
