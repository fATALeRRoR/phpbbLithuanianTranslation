<?php
/**
*
* search.php [Lithuanian]
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
	'ALL_AVAILABLE'	=> 'Visus įmanomus',
	'ALL_RESULTS'	=> 'Visi rezultatai',
	'DISPLAY_RESULTS'	=> 'Rodyti rezultatus kaip',
	'FOUND_SEARCH_MATCH'	=> 'Paieška rado %d atitikmenį',
	'FOUND_SEARCH_MATCHES'	=> 'Paieška rado %d atitikmenis(ų)',
	'FOUND_MORE_SEARCH_MATCHES'	=> 'Paieška rašo daugiau nei %d atitikmenų',
	'GLOBAL'	=> 'Labai svarbios temos',
	'IGNORED_TERMS'	=> 'Nepanaudoti žodžiai',
	'IGNORED_TERMS_EXPLAIN'	=> 'Šie žodžiai nebuvo naudojami paieškos užklausoje, nes yra per dažnai naudojami: <strong>%s</strong>.',
	'JUMP_TO_POST'	=> 'Rodyti pranešimą',
	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Jeigu norite ieškoti savo pranešimų, turite užsiregistruoti ir prisijungti.',
	'LOGIN_EXPLAIN_UNREADSEARCH'	=> 'Jeigu norite ieškoti neperskaitytų pranešimų, turite užsiregistruoti ir prisijungti.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Jeigu norite ieškoti naujų pranešimų nuo paskutinio jūsų prisijungimo, turite užsiregistruoti ir prisijungti.',
	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> 'Paieškoje įvedėte per daug žodžių. Įrašykite ne daugiau nei %1$d žodžių.',
	'NO_KEYWORDS'	=> 'Jūs turite įrašyti bent vieną žodį. Kiekvienas žodis turi būti bent iš %d simbolių ir ne ilgesnis nei %d simboliai neskaitant specialių paieškos ženklų.',
	'NO_RECENT_SEARCHES'	=> 'Paskutiniu metu nevykdyta jokia paieška.',
	'NO_SEARCH'	=> 'Atsiprašome, tačiau jūs neturite teisės naudotis paieškos sistema.',
	'NO_SEARCH_RESULTS'	=> 'Nerastas nei vienas atitikmuo.',
	'NO_SEARCH_TIME'	=> 'Atsiprašome, tačiau jūs negalite naudotis paieškos sistema šiuo metu. Pabandykite po kelių minučių.',
	'NO_SEARCH_UNREADS'	=> 'Atsiprašome, tačiau šioje lentoje neperskaitytų pranešimų paieška yra išjungta.',
	'WORD_IN_NO_POST'	=> 'Pranešimų nėra, kadangi žodžio <strong>%s</strong> nėra nei viename pranešime.',
	'WORDS_IN_NO_POST'	=> 'Pranešimų nėra, kadangi žodžių <strong>%s</strong> nėra nei viename pranešime.',
	'POST_CHARACTERS'	=> 'pranešimo simbolių',
	'RECENT_SEARCHES'	=> 'Paskutinės paieškos',
	'RESULT_DAYS'	=> 'Rodyti rezultatus iš paskutinių',
	'RESULT_SORT'	=> 'Rūšiuoti rezultatus pagal',
	'RETURN_FIRST'	=> 'Rodyti pirmus',
	'RETURN_TO_SEARCH_ADV'	=> 'Grįžti į išplėstinę paiešką',
	'SEARCHED_FOR'	=> 'Ieškota',
	'SEARCHED_TOPIC'	=> 'Ieškota temoje',
	'SEARCHED_QUERY'	=> 'Paieškos užklausa',
	'SEARCH_ALL_TERMS'	=> 'Ieškoti visų terminų arba naudoti užklausą',
	'SEARCH_ANY_TERMS'	=> 'Ieškoti bet kurio termino',
	'SEARCH_AUTHOR'	=> 'Autoriaus paieška',
	'SEARCH_AUTHOR_EXPLAIN'	=> 'Dalinėms reikšmėms naudokite *.',
	'SEARCH_FIRST_POST'	=> 'Pirmuose temos pranešimuose',
	'SEARCH_FORUMS'	=> 'Ieškoti forumuose',
	'SEARCH_FORUMS_EXPLAIN'	=> 'Pasirinkite forumą arba forumus kuriuose norite atlikti paiešką. Jeigu neišjungsite  “ieškoti subforumuose“ parametro apačioje, automatiškai bus ieškoma ir visuose subforumuose.',
	'SEARCH_IN_RESULTS'	=> 'Ieškoti tarp rezultatų',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Simbolis <strong>+</strong> parašytas priešais žodį reiškia kad tokio žodžio reikia ieškoti. Simbolis <strong>-</strong> parašytas priešais žodį reiškia kad tokio žodžio ieškoti nereikia. Jeigu ieškote tik vieno iš kelių žodžių, atskirkite juos simboliu <strong>|</strong>. Dalinėms reikšmėms naudokite *.',
	'SEARCH_MSG_ONLY'	=> 'Pranešimo tekste',
	'SEARCH_OPTIONS'	=> 'Paieškos nustatymai',
	'SEARCH_QUERY'	=> 'Paieškos užklausa',
	'SEARCH_SUBFORUMS'	=> 'Ieškoti subforumuose',
	'SEARCH_TITLE_MSG'	=> 'Pranešimo pavadinime ir tekste',
	'SEARCH_TITLE_ONLY'	=> 'Tik temų pavadinimuose',
	'SEARCH_WITHIN'	=> 'Ieškoti',
	'SORT_ASCENDING'	=> 'Mažėjančia tvarka',
	'SORT_AUTHOR'	=> 'Autorių',
	'SORT_DESCENDING'	=> 'Didėjančia tvarka',
	'SORT_FORUM'	=> 'Forumą',
	'SORT_POST_SUBJECT'	=> 'Pranešimo pavadinimą',
	'SORT_TIME'	=> 'Pranešimo laiką',
	'TOO_FEW_AUTHOR_CHARS'	=> 'Jūs turite įrašyti bent %d autoriaus vardo simbolius.',
));

?>