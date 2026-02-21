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
	'CONFIG_NOT_EXIST'					=> 'Konfigūracijos parametras "%s" netikėtai neegzistuoja.',

	'GROUP_NOT_EXIST'					=> 'Grupė "%s" netikėtai neegzistuoja.',

	'MIGRATION_APPLY_DEPENDENCIES'=> 'Taikomos %s priklausomybės.',
	'MIGRATION_DATA_DONE'				=> 'Įdiegti duomenys: %1$s; Laikas: %2$.2f sek.',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Diegiami duomenys: %1$s; Laikas: %2$.2f sek.',
	'MIGRATION_DATA_RUNNING'=> 'Diegiami duomenys: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'=> 'Migracija jau veiksmingai įdiegta (praleista): %s',
	'MIGRATION_EXCEPTION_ERROR'=> 'Užklausos metu kažkas nutiko ne taip ir buvo išmesta išimtis. Pakeitimai, atlikti prieš klaidą, buvo atšaukti kiek įmanoma, tačiau turėtumėte patikrinti forumą dėl klaidų.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'Migracijos "%1$s" neįmanoma įvykdyti, trūksta migracijos "%2$s".',
	'MIGRATION_NOT_INSTALLED'			=> 'Migracija "%s" nėra įdiegta.',
	'MIGRATION_NOT_VALID'=> '%s nėra tinkama migracija.',
	'MIGRATION_SCHEMA_DONE'				=> 'Įdiegta schema: %1$s; Laikas: %2$.2f sek.',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Diegiama schema: %1$s; Laikas: %2$.2f sek.',
	'MIGRATION_SCHEMA_RUNNING'=> 'Diegiama schema: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'Grąžinti duomenys: %1$s; Laikas: %2$.2f sek.',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Grąžinami duomenys: %1$s; Laikas: %2$.2f sek.',
	'MIGRATION_REVERT_DATA_RUNNING'=> 'Grąžinami duomenys: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Grąžinta schema: %1$s; Laikas: %2$.2f sek.',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Grąžinama schema: %1$s; Laikas: %2$.2f sek.',
	'MIGRATION_REVERT_SCHEMA_RUNNING'=> 'Grąžinama schema: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'=> 'Migracija yra neteisinga. Sąlygos tikrinimo pagalbinėje funkcijoje trūksta sąlygos.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'=> 'Migracija yra neteisinga. Sąlygos tikrinimo pagalbinėje funkcijoje trūksta tinkamo kviečiamo migracijos žingsnio.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'=> 'Migracija yra neteisinga. Nepavyko iškviesti pasirinktinės funkcijos.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'=> 'Migracija yra neteisinga. Rastas nežinomas migracijos įrankio tipas.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'=> 'Migracija yra neteisinga. Rastas neapibrėžtas migracijos įrankis.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'=> 'Migracija yra neteisinga. Rastas neapibrėžtas migracijos įrankio metodas.',

	'MODULE_ERROR'=> 'Kuriant modulį įvyko klaida: %s',
	'MODULE_EXISTS'=> 'Modulis jau egzistuoja: %s',
	'MODULE_EXIST_MULTIPLE'=> 'Keli moduliai su nurodytu pirminio modulio langname jau egzistuoja: %s. Bandykite naudoti before/after raktus, kad patikslintumėte modulio vietą.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'Trūksta reikiamo modulio informacijos failo: %2$s',
	'MODULE_NOT_EXIST'=> 'Reikiamas modulis neegzistuoja: %s',

	'PARENT_MODULE_FIND_ERROR'=> 'Nepavyko nustatyti pirminio modulio identifikatoriaus: %s',
	'PERMISSION_NOT_EXIST'				=> 'Leidimų parametras "%s" netikėtai neegzistuoja.',

	'ROLE_NOT_EXIST'					=> 'Leidimų vaidmuo "%s" netikėtai neegzistuoja.',	'ROLE_ASSIGNED_NOT_EXIST'			=> 'Leidimų vaidmuo priskirtas grupei "%1$s" netikėtai neegzistuoja. Vaidmens ID: "%2$s"',));
