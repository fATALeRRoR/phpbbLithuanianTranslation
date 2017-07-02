<?php
/**
*
* acp_prune.php [Lithuanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2009 phpBB Group
* @author 2009-12-21 - Vilius Šumskas
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
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Čia galite ištrinti arba išjungti jūsų diskusijų vartotojus. Vartotojų vardai gali būti atrinkti daugeliu būdų; pagal pranešimų skaičių, paskutinę veiklą ir t.t. Kad sumažintume atrintų vartotoų vardų skaičių, kiekvienas iš šių kriterijų gali būti apjungtas su kitų. Pavyzdžiui, galite išvalyti vartotojus, kurie iki 2002-01-01 neparašė jokio pranešimo ir su mažiau nei 10 pranešimų. Taip pat galite nenaudoti filtrų ir įrašyti vartotojus tiesiai į tekstinį laukelį apačioje (po vieną vartotojo vardą eilutėje). Naudokitės šiuo įrankiu atsargiai! Grąžinti ištrintų vartotojų nebebus įmanoma.',
	'DEACTIVATE_DELETE'	=> 'Išjungti ar ištrinti',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Pasirinkite ar išjungti, ar visiškai ištrinti vartotojus. Atsiminkite, kad negalėsite jų grąžinti!',
	'DELETE_USERS'	=> 'Ištrinti',
	'DELETE_USER_POSTS'	=> 'Ištrinti išvalytų vartotojų pranešimus',
	'DELETE_USER_POSTS_EXPLAIN'	=> 'Ištrina visus ištrintų vartotojų pranešimus. Jeigu vartotojai išjungiami, šis nustatymas neturi reikšmės.',
	'JOINED_EXPLAIN'	=> 'Įrašykite datą <kbd>YYYY-MM-DD</kbd> formatu.',
	'LAST_ACTIVE_EXPLAIN'	=> 'Įrašykite datą <kbd>YYYY-MM-DD</kbd> formatu. Norėdami ištrinti vartotojus, kurie niekada nebuvo prisijungę, įrašykite <kbd>0000-00-00</kbd>. <em>Prieš</em> ir <em>Po</em> sąlygos bus ignoruojamos.',
	'PRUNE_USERS_LIST'	=> 'Vartotojai, kurie bus išvalyti',
	'PRUNE_USERS_LIST_DELETE'	=> 'Su pasirinktais kriterijais bus ištrinti šie vartotojai.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Su pasirinktais kriterijais bus išjungti šie vartotojai.',
	'SELECT_USERS_EXPLAIN'	=> 'Čia galite įrašyti vartotojų vardus. Jeigu įrašysite, nebus atsižvelgta į kriterijus viršuje. Diskusijų steigėjai negali būti ištrinti.',
	'USER_DEACTIVATE_SUCCESS'	=> 'Pasirinkti vartotojai sėkmingai išjungti.',
	'USER_DELETE_SUCCESS'	=> 'Pasirinkti vartotojai sėkmingai ištrinti.',
	'USER_PRUNE_FAILURE'	=> 'Vartotojų, atitinkančių pasirinktus kriterijus, nėra.',
	'WRONG_ACTIVE_JOINED_DATE'	=> 'Įrašyta data yra neteisinga, ją reiškia įrašyti <kbd>YYYY-MM-DD</kbd> formatu.',
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> 'Čia galite ištrinti visas temas, kuriose nebuvo apsilankyta ir nėra pranešimų jūsų nurodytą dienų skaičių. Jeigu neįrašysite jokio skaičiaus, bus ištrintos visos temos. Standartiškai, nebus ištrintos dažnos ir svarbios temos, ir temos, kuriose dar vyksta apklausa.',
	'FORUM_PRUNE'	=> 'Forumo valymas',
	'NO_PRUNE'	=> 'Išvalytų forumų nėra.',
	'SELECTED_FORUM'	=> 'Pasirinktas forumas',
	'SELECTED_FORUMS'	=> 'Pasirinkti forumai',
	'POSTS_PRUNED'	=> 'Išvalyti pranešimai',
	'PRUNE_ANNOUNCEMENTS'	=> 'Valyti svarbias temas',
	'PRUNE_FINISHED_POLLS'	=> 'Valyti pasibaigusias apklausas',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Ištrina temas, kuriose apklausos jau pasibaigė.',
	'PRUNE_FORUM_CONFIRM'	=> 'Ar tikrai norite išvalyti pasirinktus forumus su šiais nustatymais? Jeigu ištrinsite, grąžinti išvalytų temų ir pranešimų nebebus įmanoma.',
	'PRUNE_NOT_POSTED'	=> 'Dienų skaičius nuo paskutinio pranešimo',
	'PRUNE_NOT_VIEWED'	=> 'Dienų skaičius nuo paskutinio temos peržiūrėjimo',
	'PRUNE_OLD_POLLS'	=> 'Valyti senas apklausas',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Ištrina temas, kurių apklausose nebuvo balsuota keletą dienų.',
	'PRUNE_STICKY'	=> 'Valyti dažnas temas',
	'PRUNE_SUCCESS'	=> 'Forumai išvalyti sėkmingai.',
	'TOPICS_PRUNED'	=> 'Išvalytos temos',
));

?>