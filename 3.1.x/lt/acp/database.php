<?php
/**
*
* acp_database.php [Lithuanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2012 phpBB Group
* @author 2012-01-04 - Vilius Šumskas
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
	'ACP_BACKUP_EXPLAIN'	=> 'Čia galite padaryti visų savo phpBB duomenų atsarginę kopiją. Galite saugoti kopijos archyvą <samp>store/</samp> kataloge arba atsisiųsti į savo kompiuterį. Priklausomai nuo jūsų serverio konfigūracijos, archyvo failą galite suspausti įvairiais suspaudimo algoritmais.',
	'ACP_RESTORE_EXPLAIN'	=> 'Čia iš išsaugoto failo galite atstatyti savo phpBB duomenis. Jeigu serveris turi tokią galimybę, galite naudoti gzip arba bzip2 būdu suspaustą tekstinį failą, kuris bus automatiškai išarchyvuotas. <strong>DĖMESIO</strong> Tai perrašys visus esamus duomenis. Atstatymo procesas gali užtrukti, todėl, kol jis nebaigtas, jokiu būdu nepalikite šio puslapio. Atsarginės kopijos saugomos <samp>store/</samp> kataloge. phpBB supranta tik pačios pagamintas atsargines kopijas. Duomenų bazės atstatymas iš atsarginės kopijos, kurią pagamino ne phpBB, gali arba veikti, arba neveikti.',
	'BACKUP_DELETE'	=> 'Atsarginės kopijos failas sėkmingai ištrintas.',
	'BACKUP_INVALID'	=> 'Pasirinktas atsarginės kopijos failas yra netinkamas.',
	'BACKUP_OPTIONS'	=> 'Atsarginės kopijos nustatymai',
	'BACKUP_SUCCESS'	=> 'Atsarginės kopijos failas sėkmingai sukurtas.',
	'BACKUP_TYPE'	=> 'Atsarginės kopijos tipas',
	'DATABASE'	=> 'Duomenų bazės įrankiai',
	'DATA_ONLY'	=> 'Tik duomenys',
	'DELETE_BACKUP'	=> 'Ištrinti atsarginę kopiją',
	'DELETE_SELECTED_BACKUP'	=> 'Ar tikrai norite ištrinti pasirinktą atsarginę kopiją?',
	'DESELECT_ALL'	=> 'Nepažymėti nieko',
	'DOWNLOAD_BACKUP'	=> 'Atsisiųsti atsarginę kopiją',
	'FILE_TYPE'	=> 'Failo tipas',
	'FILE_WRITE_FAIL'	=> 'Įrašyti failo į saugojimo katalogą nepavyko.',
	'FULL_BACKUP'	=> 'Pilnas',
	'RESTORE_FAILURE'	=> 'Greičiausiai sugadintas atsarginės kopijos failas.',
	'RESTORE_OPTIONS'	=> 'Atstatymo nustatymai',
	'RESTORE_SELECTED_BACKUP'	=> 'Ar tikrai norite atstatyti pasirinktą atsarginę kopiją?',
	'RESTORE_SUCCESS'	=> 'Duomenų bazė sėkmingai atstatyta.<br /><br />Jūsų diskusijų lenta turėtų būti tokios pačios būsenos kaip ir prieš darant atsarginę kopiją.',
	'SELECT_ALL'	=> 'Pažymėti visas',
	'SELECT_FILE'	=> 'Failo pasirinkimas',
	'START_BACKUP'	=> 'Pradėti atsarginės kopijos darymą',
	'START_RESTORE'	=> 'Pradėti atstatymą',
	'STORE_AND_DOWNLOAD'	=> 'Išsaugoti ir atsisiųsti',
	'STORE_LOCAL'	=> 'Išsaugoti failą serveryje',
	'STRUCTURE_ONLY'	=> 'Tik struktūra',
	'TABLE_SELECT'	=> 'Lentelių pasirinkimas',
	'TABLE_SELECT_ERROR'	=> 'Turite pasirinkti bent vieną lentelę.',
));

?>