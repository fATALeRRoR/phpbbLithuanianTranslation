<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @copyright (c) 2010-2013 Moxiecode Systems AB
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
	'PLUPLOAD_ADD_FILES'=> 'Pridėti failus',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'=> 'Pridėkite failus į įkėlimo eilę ir paspauskite pradžios mygtuką.',
	'PLUPLOAD_ALREADY_QUEUED'=> '%s jau yra eilėje.',
	'PLUPLOAD_CLOSE'			=> 'Uždaryti',
	'PLUPLOAD_DRAG'=> 'Vilkite failus čia.',
	'PLUPLOAD_DUPLICATE_ERROR'=> 'Failų dublikato klaida.',
	'PLUPLOAD_DRAG_TEXTAREA'=> 'Taip pat galite pridėti priedus, vilkdami ir numesdami juos pranešimo laukelyje.',
	'PLUPLOAD_ERR_INPUT'=> 'Nepavyko atidaryti įvesties srauto.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'=> 'Nepavyko perkelti įkelto failo.',
	'PLUPLOAD_ERR_OUTPUT'=> 'Nepavyko atidaryti išvesties srauto.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'=> 'Failas per didelis:',
	'PLUPLOAD_ERR_FILE_COUNT'=> 'Failų skaičiaus klaida.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'=> 'Netinkamas failo plėtinys:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'=> 'Vykdymo aplinkoje baigėsi laisvoji atmintis.',
	'PLUPLOAD_ERR_UPLOAD_URL'=> 'Įkėlimo URL gali būti neteisingas arba neegzistuoja.',
	'PLUPLOAD_EXTENSION_ERROR'=> 'Failo plėtinio klaida.',
	'PLUPLOAD_FILE'=> 'Failas: %s',
	'PLUPLOAD_FILE_DETAILS'=> 'Failas: %s, dydis: %d, maks. failo dydis: %d',
	'PLUPLOAD_FILENAME'=> 'Failo pavadinimas',
	'PLUPLOAD_FILES_QUEUED'=> 'Eilėje %d failai(-ų)',
	'PLUPLOAD_GENERIC_ERROR'=> 'Bendrinė klaida.',
	'PLUPLOAD_HTTP_ERROR'=> 'HTTP klaida.',
	'PLUPLOAD_IMAGE_FORMAT'=> 'Paveikslėlio formatas netinkamas arba nepalaikomas.',
	'PLUPLOAD_INIT_ERROR'=> 'Inicijavimo klaida.',
	'PLUPLOAD_IO_ERROR'=> 'I/O klaida.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'=> 'Saugos klaida.',
	'PLUPLOAD_SELECT_FILES'=> 'Pasirinkti failus',
	'PLUPLOAD_SIZE'=> 'Dydis',
	'PLUPLOAD_SIZE_ERROR'=> 'Failo dydžio klaida.',
	'PLUPLOAD_STATUS'=> 'Būsena',
	'PLUPLOAD_START_UPLOAD'=> 'Pradėti įkėlimą',
	'PLUPLOAD_START_CURRENT_UPLOAD'=> 'Pradėti eilės įkėlimą',
	'PLUPLOAD_STOP_UPLOAD'=> 'Sustabdyti įkėlimą',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'=> 'Sustabdyti dabartinį įkėlimą',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'=> 'Įkelta %d/%d failų',
));
