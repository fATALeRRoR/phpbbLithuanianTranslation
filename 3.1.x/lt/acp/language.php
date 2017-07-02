<?php
/**
*
* acp_language.php [Lithuanian]
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
	'ACP_FILES'	=> 'Administratoriaus pulto kalbos failai',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Čia galite įdiegti/ištrinti kalbų paketus. Pagrindinė kalba pažymėta žvaigždute (*).',
	'EMAIL_FILES'	=> 'El. pašto šablonai',
	'FILE_CONTENTS'	=> 'Failo turinys',
	'FILE_FROM_STORAGE'	=> 'Failas iš saugyklos katalogo',
	'HELP_FILES'	=> 'Pagalbos failai',
	'INSTALLED_LANGUAGE_PACKS'	=> 'Įdiegti kalbų paketai',
	'INVALID_LANGUAGE_PACK'	=> 'Pasirinktas kalbos paketas yra netinkamas. Patikrinkite kalbos paketą ir, jeigu reikia, dar kartą įkelkite jį į serverį.',
	'INVALID_UPLOAD_METHOD'	=> 'Pasirinktas įkėlimo būdas yra netinkamas. Pasirinkite kitą įkėlimo būdą.',
	'LANGUAGE_DETAILS_UPDATED'	=> 'Kalbos aprašymas atnaujintas sėkmingai.',
	'LANGUAGE_ENTRIES'	=> 'Kalbos įrašai',
	'LANGUAGE_ENTRIES_EXPLAIN'	=> 'Čia galite pakeisti esamus kalbos paketo įrašus arba išversti dar neišverstus.<br /><strong>PASTABA:</strong> Kai pakeisite kalbos failus, pakeitimai bus išsaugoti atskirame kataloge, iš kur turėsite juos atsisiųsti. Vartotojai nematys pakeitimų kol jūs neatnaujinsite kalbos failų savo serveryje (juos įkeliant).',
	'LANGUAGE_FILES'	=> 'Pagrindiniai kalbos failai',
	'LANGUAGE_KEY'	=> 'Kalbos raktas',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Kalbos paketas jau įdiegtas.',
	'LANGUAGE_PACK_DELETED'	=> '<strong>%s</strong> kalbos paketas ištrintas sėkmingai. Visi vartotojai, naudojantys šią kalbą, nuo šiol naudos pagrindinę diskusijų kalbą.',
	'LANGUAGE_PACK_DETAILS'	=> 'Kalbos paketo aprašymas',
	'LANGUAGE_PACK_INSTALLED'	=> '<strong>%s</strong> kalbos paketas sėkmingai įdiegtas.',
	'LANGUAGE_PACK_CPF_UPDATE'	=> 'Papildomų aprašo laukų vertimo žodžiai buvo nukopijuoti iš pagrindinės kalbos. Išverskite juos, jeigu reikia.',
	'LANGUAGE_PACK_ISO'	=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'	=> 'Vietinis pavadinimas',
	'LANGUAGE_PACK_NAME'	=> 'Pavadinimas',
	'LANGUAGE_PACK_NOT_EXIST'	=> 'Pasirinktas kalbos paketas neegzistuoja.',
	'LANGUAGE_PACK_USED_BY'	=> 'Naudojamas (įskaitant robotus)',
	'LANGUAGE_VARIABLE'	=> 'Kalbos kintamasis',
	'LANG_AUTHOR'	=> 'Kalbos paketo autorius',
	'LANG_ENGLISH_NAME'	=> 'Angliškas pavadinimas',
	'LANG_ISO_CODE'	=> 'ISO kodas',
	'LANG_LOCAL_NAME'	=> 'Vietinis pavadinimas',
	'MISSING_LANGUAGE_FILE'	=> 'Trūksta kalbos failo: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Trūksta kalbos kintamųjų',
	'MODS_FILES'	=> 'MOD`ų kalbos failai',
	'NO_FILE_SELECTED'	=> 'Jūs nenurodėte kalbos failo.',
	'NO_LANG_ID'	=> 'Jūs nenurodėte kalbos paketo.',
	'NO_REMOVE_DEFAULT_LANG'	=> 'Jūs negalite pašalinti pagrindinės diskusijų kalbos.<br />Jeigu norite pašalinti šį kalbos paketą, iš pradžių pakeiskite diskusijų pagrindinės kalbos nustatymą.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Neįdiegtų kalbų paketų nėra',
	'REMOVE_FROM_STORAGE_FOLDER'	=> 'Ištrinti iš saugyklos katalogo',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Pasirinkite atsisiuntimo formatą',
	'SUBMIT_AND_DOWNLOAD'	=> 'Įvesti ir atsisiųsti failą',
	'SUBMIT_AND_UPLOAD'	=> 'Įvesti ir įkelti failą',
	'THOSE_MISSING_LANG_FILES'	=> '%s kalbos kataloge trūksta šių kalbos failų',
	'THOSE_MISSING_LANG_VARIABLES'	=> '<strong>%s</strong> kalbos pakete trūksta šių kalbos kintamųjų',
	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Neįdiegti kalbų paketai',
	'UNABLE_TO_WRITE_FILE'	=> 'Nepavyko įrašyti failo į %s.',
	'UPLOAD_COMPLETED'	=> 'Failas įkeltas sėkmingai.',
	'UPLOAD_FAILED'	=> 'Dėl nežinomų priežasčių failo siuntimas nutrūko. Jums gali prireikti atnaujinti failą patiems.',
	'UPLOAD_METHOD'	=> 'Įkėlimo būdas',
	'UPLOAD_SETTINGS'	=> 'Įkėlimo nustatymai',
	'WRONG_LANGUAGE_FILE'	=> 'Pasirinktas kalbos failas yra neteisingas.',
));

?>