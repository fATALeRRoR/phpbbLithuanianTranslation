<?php
/**
*
* acp_search.php [Lithuanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2013 phpBB Group
* @author 2013-10-20 - Vilius Šumskas
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
	'ACP_SEARCH_INDEX_EXPLAIN'	=> 'Čia galite valdyti paieškos indeksą. Kadangi dažniausiai naudosite tik vieną paieškos indekso saugojimo būdą, visus nenaudojamus ištrinkite. Jeigu pakeisite paieškos nustatymus (pvz.: minimalų/maksimalų simbolių skaičių), patartina sukurti indeksą iš naujo.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'	=> 'Čia galite nurodyti kokiu būdu bus saugomas paieškos indeksas. Galite aprašyti įvairius nustatymus, kurie įtakos, kiek resursų pareikalaus pranešimų rašymas ir paieškos vykdymas. Kai kurie iš šių nustatymų galioja visiems indekso saugojimo būdams.',
	'COMMON_WORD_THRESHOLD'	=> 'Žodžių dažnumas',
	'COMMON_WORD_THRESHOLD_EXPLAIN'	=> 'Žodžiai, kurių yra didesniame procente pranešimų, bus laikomi kaip dažni. Tokie žodžiai bus ignoruojami paieškos užklausose. Norėdami išjungti šį nustatymą įrašykite nulį. Galioja tik tada, jeigu iš viso yra daugiau nei 100 pranešimų. Jeigu norite, kad dažni žodžiai būtų nustatyti iš naujo, turite perkurti paieškos indeksą.',
	'CONFIRM_SEARCH_BACKEND'	=> 'Ar tikrai norite pakeisti paieškos indekso saugojimo būdą? Tai padarę turėsite sukurti indeksą iš naujo. Jeigu neplanuojate grįžti prie ankstesnio saugojimo būdo, galėsite ištrinti seną indeksą, kad atlaisvintumėte sistemos resursus.',
	'CONTINUE_DELETING_INDEX'	=> 'Tęsti ankstesnį indekso trynimo procesą',
	'CONTINUE_DELETING_INDEX_EXPLAIN'	=> 'Pradėtas indekso trynimo procesas. Norėdami pasiekti paieškos indekso puslapį turėsite jį baigti arba nutraukti.',
	'CONTINUE_INDEXING'	=> 'Tęsti ankstesnį indeksavimo procesą',
	'CONTINUE_INDEXING_EXPLAIN'	=> 'Pradėtas indeksavimo procesas. Norėdami pasiekti paieškos indekso puslapį turėsite jį baigti arba nutraukti.',
	'CREATE_INDEX'	=> 'Sukurti indeksą',
	'DELETE_INDEX'	=> 'Ištrinti indeksą',
	'DELETING_INDEX_IN_PROGRESS'	=> 'Vykdomas indekso trynimo procesas',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Paieškos saugojimo serveris dabar valo savo indeksą. Tai gali užtrukti kelias minutes.',
	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'MySQL viso teksto paieškos būdas gali būti naudojamas tik su MySQL4 ir vėlesne versija.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'	=> 'MySQL viso teksto indeksas gali būti naudojamas tik su MyISAM arba InnoDB tipo lentelėmis. Norėdami naudoti viso teksto indeksą su InnoDB tipo lentelėmis jums reikia turėti MySQL 5.6.4 ar vėlesnę versiją.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'	=> 'Iš viso suindeksuota pranešimų',
	'FULLTEXT_MYSQL_MBSTRING'	=> 'Ne lotyniškų UTF-8 simbolių palaikymas pasinaudojant mbstring:',
	'FULLTEXT_MYSQL_PCRE'	=> 'Ne lotyniškų UTF-8 simbolių palaikymas pasinaudojant PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'	=> 'Jeigu PCRE nepalaiko unikodinių simbolių, paieška bandys naudoti mbstring modulio reguliarias išraiškas.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'	=> 'Jeigu norite ieškoti ne tik lotyniškų simbolių, PCRE turi palaikyti unikodinius simbolius, kas įmanoma tik PHP 4.4, 5.1 ir vėlesnėse versijose.',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Žodžiai, sudaryti bent iš tiek simbolių, bus indeksuojami paieškai. Jūs arba jūsų diskusijų lentos talpinimo tiekėjas gali pakeisti šį nustatymą tik MySQL konfigūracijoje.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Žodžiai. sudaryti iš maksimaliai tiek simbolių, bus indeksuojami paieškai. Jūs arba jūsų diskusijų lentos talpinimo tiekėjas gali pakeisti šį nustatymą tik MySQL konfigūracijoje.',
	'GENERAL_SEARCH_SETTINGS'	=> 'Pagrindiniai paieškos nustatymai',
	'GO_TO_SEARCH_INDEX'	=> 'Eiti į paieškos indekso puslapį',
	'INDEX_STATS'	=> 'Indekso statistika',
	'INDEXING_IN_PROGRESS'	=> 'Vykdomas indeksavimo procesas',
	'INDEXING_IN_PROGRESS_EXPLAIN'	=> 'Paieškos saugojimo serveris dabar indeksuoja visus diskusijų pranešimus. Priklausomai nuo jūsų diskusijų dydžio, tai gali užtrukti nuo kelių minučių iki kelių valandų.',
	'LIMIT_SEARCH_LOAD'	=> 'Paieškos puslapio sistemos apkrovimo riba',
	'LIMIT_SEARCH_LOAD_EXPLAIN'	=> 'Jeigu per 1 minutę, sistemos apkrovimas bus didesnis nei ši reikšmė, paieškos puslapis bus išjungtas. 1.0 reiškia, kad vienas procesorius apkrautas ~100%. Tai veikia tik ant serverių, kuriuose įdiegta UNIX tipo operacinė sistema.',
	'MAX_SEARCH_CHARS'	=> 'Maksimalus indeksuojamų simbolių skaičius',
	'MAX_SEARCH_CHARS_EXPLAIN'	=> 'Žodžiai, sudaryti iš maksimaliai tiek simbolių, bus indeksuojami paieškai.',
	'MAX_NUM_SEARCH_KEYWORDS'	=> 'Maksimalus žodžių skaičius',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'	=> 'Maksimalus žodžių skaičius, kurių vienu metu gali ieškoti vartotojas. Jeigu nenorite riboti paieškomų žodžių skaičiaus, įrašykite 0.',
	'MIN_SEARCH_CHARS'	=> 'Minimalus indeksuojamų simbolių skaičius',
	'MIN_SEARCH_CHARS_EXPLAIN'	=> 'Žodžiai, sudaryti bent iš tiek simbolių, bus indeksuojami paieškai.',
	'MIN_SEARCH_AUTHOR_CHARS'	=> 'Minimalus autoriaus vardo simbolių skaičius',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'	=> 'Ieškodami pagal autorių vartotojai turės įrašyti bent tiek simbolių. Jeigu autoriaus vartotojo vardas yra trumpesnis nei ši reikšmė, vartotojai galės ieškoti pagal pilną autoriaus vardą.',
	'PROGRESS_BAR'	=> 'Progreso juosta',
	'SEARCH_GUEST_INTERVAL'	=> 'Svečių paieškos apsauga nuo per didelio srauto',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'	=> 'Sekundžių skaičius, kurį tarp vykdomų paieškų turi laukti svečiai. Jeigu vienas svečias vykdo paiešką, kiti turi palaukti, kol baigsis šis laiko intervalas.',
	'SEARCH_INDEX_CREATE_REDIRECT'	=> 'Suindeksuoti visi pranešimai iki pranešimo, kurio id %1$d. Iš viso suindeksuota %2$d pranešimai(ų).<br />Vidutiniškai per sekundę suindeksuojami(a) %3$.1f pranešimai(ų).<br />Indeksavimo procesas tęsiamas…',
	'SEARCH_INDEX_DELETE_REDIRECT'	=> 'Visi pranešimai iki pranešimo, kurio id %1$d buvo ištrinti iš paieškos indekso.<br />Indekso trynimo procesas tęsiamas…',
	'SEARCH_INDEX_CREATED'	=> 'Visi diskusijų pranešimai sėkmingai suindeksuoti.',
	'SEARCH_INDEX_REMOVED'	=> 'Paieškos indeksas sėkmingai ištrintas.',
	'SEARCH_INTERVAL'	=> 'Vartotojų paieškos apsauga nuo per didelio srauto',
	'SEARCH_INTERVAL_EXPLAIN'	=> 'Sekundžių skaičius, kurį tarp vykdomų paieškų turi laukti vartotojas. Šis intervalas yra atskiras kiekvienam vartotojui.',
	'SEARCH_STORE_RESULTS'	=> 'Paieškos rezultatų kešavimo ilgumas',
	'SEARCH_STORE_RESULTS_EXPLAIN'	=> 'Tiek sekundžių bus kešuojamis paieškos rezultatai. Jeigu nenorite kešuoti paieškos rezultatų, įrašykite 0.',
	'SEARCH_TYPE'	=> 'Paieškos indekso saugojimo būdas',
	'SEARCH_TYPE_EXPLAIN'	=> 'phpBB leidžia pasirinkti, kokį paieškos indekso saugojimo būdą naudoti pranešimų turiniui. Standartiškai bus naudojama phpBB nuosava viso teksto paieška.',
	'SWITCHED_SEARCH_BACKEND'	=> 'Jūs perjungėte paieškos indekso saugojimo būdą. Jeigu norite naudoti naująjį būdą, įsitikinkite, kad sukurtas paieškos indeksas.',
	'TOTAL_WORDS'	=> 'Iš viso suindeksuota žodžių',
	'TOTAL_MATCHES'	=> 'Iš viso suindeksuota žodžių ir pranešimų sąryšių',
	'YES_SEARCH'	=> 'Įjungti paieškos įrankius',
	'YES_SEARCH_EXPLAIN'	=> 'Įjungia paieškos įrankius įskaitant ir narių paiešką.',
	'YES_SEARCH_UPDATE'	=> 'Įjungti viso teksto atnaujinimą',
	'YES_SEARCH_UPDATE_EXPLAIN'	=> 'Pranešimų rašymo metu bus atnaujintas viso teksto indeksas. Jeigu paieška išjungta, šis nustatytas neturės reikšmės.',
));

?>