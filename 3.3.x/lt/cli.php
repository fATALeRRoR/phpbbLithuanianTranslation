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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_APCU_CACHE_NOTICE'				=> 'APCu talpyklą reikia išvalyti per Administratoriaus valdymo pultą.',
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Nustatykite šią parinktį, jei konfigūracijos reikšmė keičiasi pernelyg dažnai, kad ją būtų galima efektyviai laikyti talpykloje.',
	'CLI_CONFIG_CURRENT'				=> 'Dabartinė konfigūracijos reikšmė; naudokite 0 ir 1 loginėms reikšmėms',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Konfigūracija %s sėkmingai ištrinta.',
	'CLI_CONFIG_NEW'					=> 'Nauja konfigūracijos reikšmė; naudokite 0 ir 1 loginėms reikšmėms',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Konfigūracija %s neegzistuoja',
	'CLI_CONFIG_OPTION_NAME'			=> 'Konfigūracijos parinkties pavadinimas',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Nustatykite šią parinktį, jei reikšmė turi būti spausdinama be naujos eilutės pabaigoje.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Didinimo reikšmė',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Konfigūracija %s sėkmingai padidinta',
	'CLI_CONFIG_SET_FAILURE'			=> 'Nepavyko nustatyti konfigūracijos %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Konfigūracija %s sėkmingai nustatyta',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Spausdina parengtų ir neparengtų cron užduočių sąrašą.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Paleidžia visas paruoštas cron užduotis.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Paleidžiamos užduoties pavadinimas',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Pateikia visų įdiegtų ir galimų perkėlimų sąrašą.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Atnaujina duomenų bazę taikydamas perkėlimus.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Atšaukti perkėlimą.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Ištrina konfigūracijos parinktį',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Išjungia nurodytą plėtinį.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Įjungia nurodytą plėtinį.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Randa perkėlimus, nuo kurių nepriklauso kiti.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Pataiso forumų ir modulių medžio struktūrą.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Gauna konfigūracijos parinkties reikšmę',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Didina konfigūracijos parinkties skaičio reikšmę',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Pateikia visų plėtinių sąrašą duomenų bazėje ir failų sistemoje.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Aplinkos pavadinimas.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Paleisti saugiu režimu (be plėtinių).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Paleisti apvalkalą.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Išvalo nurodytą plėtinį.',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Pateikia teksto, kurį galima apdoroti iš naujo, tipų sąrašą.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Galimi apdorojimo moduliai:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Apdoroja iš naujo saugomą tekstą naudodamas dabartinius text_formatter servisus.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Apdorotino teksto tipas. Palikite tuščią, jei norite apdoroti viską.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Neišsaugoti jokių pakeitimų; tik rodyti, kas būtų padaryta',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_FORCE_BBCODE'	=> 'Iš naujo apdoroti visus BBKodus be išimties. Atkreipkite dėmesį, kad anksčiau išjungti BBKodai bus perskaityti, įjungti ir visapusiškai atvaizduoti.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Mažiausias apdorotino įrašo ID',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Aukščiausias apdorotino įrašo ID',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Apytikris vienu metu apdorojamų įrašų skaičius',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Pradėti apdorojimą nuo paskutinio vykdymo sustojimo vietos',

	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'			=> 'Perskaičiuoja vartotojų lentelės stulpelį user_email_hash.',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Nustato parinkties reikšmę tik jei senoji sutampa su dabartine',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Nustato konfigūracijos parinkties reikšmę',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Ištrinti visas esamas miniatiūras.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Sukurti visas trūkstamas miniatiūras.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Atkurti visas miniatiūras.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Patikrinti, ar forumas yra atnaujintas.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Tikrinamo plėtinio pavadinimas (jei all, tikrinami visi plėtiniai)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Paleisti tikrinimo komandą su talpykla.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Paleisti komandą pasirenkant tikrinti tik stabilias arba nestabilias versijas.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Atnaujina pasenusias slaptažodžių maigas naudodamas bcrypt.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" turi būti nustatyta kaip "stable" arba "unstable".',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Aktyvuoti (arba deaktyvuoti) vartotojo paskyrą.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Aktyvuojamos paskyros vartotojo vardas.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Deaktyvuoti vartotojo paskyrą',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Vartotojas jau yra aktyvus.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Vartotojas jau yra neaktyvus.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Pridėti naują vartotoją.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Naujojo vartotojo vardas',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Naujojo vartotojo slaptažodis',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Naujojo vartotojo el. pašto adresas',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Siųsti paskyros aktyvavimo el. laišką naujam vartotojui (pagal numatytuosius nustatymus nesiunčiamas)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Ištrinti vartotojo paskyrą.',
	'CLI_DESCRIPTION_USER_DELETE_ID'			=> 'Ištrinti vartotojų paskyras pagal ID.',
	'CLI_DESCRIPTION_USER_DELETE_ID_OPTION_ID'	=> 'Trinamo(-ų) vartotojo(-ų) ID',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Trinamo vartotojo vardas',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Ištrinti visus vartotojo pranešimus. Be šios parinkties vartotojo pranešimai bus išsaugoti.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Iš naujo sutvarkyti vartotojų vardus.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Nepavyko išjungti plėtinio %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Plėtinys %s sėkmingai išjungtas',
	'CLI_EXTENSION_DISABLED'			=> 'Plėtinys %s nėra įjungtas',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Nepavyko įjungti plėtinio %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Plėtinys %s sėkmingai įjungtas',
	'CLI_EXTENSION_ENABLED'				=> 'Plėtinys %s jau yra įjungtas',
	'CLI_EXTENSION_NOT_EXIST'			=> 'Plėtinys %s neegzistuoja',
	'CLI_EXTENSION_NAME'				=> 'Plėtinio pavadinimas',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Nepavyko išvalyti plėtinio %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Plėtinys %s sėkmingai išvalytas',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Nepavyko atnaujinti plėtinio %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Plėtinys %s sėkmingai atnaujintas',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Plėtinių nerasta.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'Plėtinio %s negalima įjungti.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Galimas',
	'CLI_EXTENSIONS_DISABLED'			=> 'Išjungtas',
	'CLI_EXTENSIONS_ENABLED'			=> 'Įjungtas',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Forumų ir modulių medžio struktūra sėkmingai pataisyta.',
	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Visi el. pašto maišos sėkmingai perskaičiuoti.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Pasenusios slaptažodžių maišos sėkmingai atnaujintos į bcrypt.',

	'CLI_MIGRATION_NAME'					=> 'Perkėlimo pavadinimas, įskaitant vardų sritį (naudokite priekinius pasvirtuosius brūkšnius, kad išvengtumėte problemų).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Galimi perkėlimai',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Įdiegti perkėlimai',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Rodyti tik galimus perkėlimus',
	'CLI_MIGRATIONS_EMPTY'                  => 'Perkėlimų nėra.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Apdorojama iš naujo %1$s (diapazonas %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Apdorojama iš naujo %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Apdorojimas iš naujo baigtas sėkmingai',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) ištrinta.',
	'CLI_THUMBNAIL_DELETING'	=> 'Miniatiūrų trynimas',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) praleista.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) sugeneruota.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Miniatiūrų generavimas',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Visos miniatiūros sėkmingai atnaujintos.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Visos miniatiūros sėkmingai ištrintos.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Nėra miniatiūrų, kurias reikia generuoti.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Nėra miniatiūrų, kurias reikia trinti.',

	'CLI_USER_ADD_SUCCESS'		=> 'Vartotojas %s sėkmingai pridėtas.',
	'CLI_USER_DELETE_CONFIRM'	=> 'Ar tikrai norite ištrinti "%s"? [y/N]',
	'CLI_USER_DELETE_ID_CONFIRM'	=> 'Ar tikrai norite ištrinti vartotojų ID ‘%s’? [y/N]',
	'CLI_USER_DELETE_ID_SUCCESS'	=> 'Vartotojų ID sėkmingai ištrinti.',
	'CLI_USER_DELETE_ID_START'		=> 'Trinami vartotojai pagal ID',
	'CLI_USER_DELETE_NONE'			=> 'Nė vienas vartotojas nebuvo ištrintas pagal vartotojo ID.',
	'CLI_USER_RECLEAN_START'	=> 'Vartotojų vardų tvarkymas iš naujo',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'Tvarkymas baigtas. Nereikėjo tvarkyti jokių vartotojų vardų.',
		1	=> 'Tvarkymas baigtas. Sutvarkytas %d vartotojo vardas.',
		2	=> 'Tvarkymas baigtas. Sutvarkyti %d vartotojų vardai.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Pasirinktinai galite nurodyti cron užduoties pavadinimą, kad paleistumėte tik tą konkrečią cron užduotį.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Aktyvuoti vartotojo paskyrą arba deaktyvuoti paskyrą naudojant parinktį <info>--deactivate</info>.
Norėdami pasirinktinai siųsti aktyvavimo el. laišką vartotojui, naudokite parinktį <info>--send-email</info>.',
	'CLI_HELP_USER_ADD'			=> 'Komanda <info>%command.name%</info> prideda naują vartotoją:
Jei ši komanda paleidžiama be parinkčių, būsite paprašyti jas įvesti.
Norėdami pasirinktinai siųsti el. laišką naujam vartotojui, naudokite parinktį <info>--send-email</info>.',
	'CLI_HELP_USER_RECLEAN'		=> 'Ši funkcija patikrina visus saugomus vartotojų vardus ir užtikrina, kad saugomos ir sutvarkytos jų versijos. Sutvarkyti vartotojų vardai yra didžiosios/mažosios raidės nejautrūs, NFC normalizuoti ir konvertuoti į ASCII.',
));
