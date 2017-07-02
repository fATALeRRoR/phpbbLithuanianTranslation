<?php
/**
*
* acp_bots.php [Lithuanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group
* @author 2007-10-18 - Vilius Šumskas
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
	'BOTS'	=> 'Robotų valdymas',
	'BOTS_EXPLAIN'	=> '“Robotai”, “vorai” arba “šliaužikai” yra automatiniai klientai, kuriuos dažniausiai naudoja paieškos varikliai, kad atnaujintų savo duomenų bazes. Kadangi jie retai gerai veikia su sesijomis, jie gali iškreipti lankytojų skaičių, padidinti sistemos apkrovimą ir kartais neteisingai suindeksuoti puslapius. Čia galite aprašyti specialų vartotojo tipą ir išspręsti šias problemas.',
	'BOT_ACTIVATE'	=> 'Įjungti',
	'BOT_ACTIVE'	=> 'Robotas įjungtas',
	'BOT_ADD'	=> 'Pridėti robotą',
	'BOT_ADDED'	=> 'Naujas robotas sėkmingai pridėtas.',
	'BOT_AGENT'	=> 'Roboto žymės',
	'BOT_AGENT_EXPLAIN'	=> 'Žodis ar šiaip simboliai atitinkantys roboto naršyklę. Leidžiamos ir dalinės reikšmės.',
	'BOT_DEACTIVATE'	=> 'Išjungti',
	'BOT_DELETED'	=> 'Robotas sėkmingai ištrintas.',
	'BOT_EDIT'	=> 'Robotų redagavimas',
	'BOT_EDIT_EXPLAIN'	=> 'Čia galite pridėti arba redaguoti esamus robotus. Galite aprašyti juos naršyklės atpažinimo simboliais ir/arba vienu ar daugiau IP adresų (arba adresų intervalu). Tačiau būkite atsargūs. Taip pat galite nurodyti koks stilius ir kalba bus rodoma robotui. Nustatę robotams paprastą stilių sumažinsite tinklo srauto sunaudojimą. Neužmirškite specialiai Robotų grupei nustatyti reikiamų teisių.',
	'BOT_LANG'	=> 'Roboto kalba',
	'BOT_LANG_EXPLAIN'	=> 'Kalba pateikiama robotui jam naršant.',
	'BOT_LAST_VISIT'	=> 'Paskutinis apsilankymas',
	'BOT_IP'	=> 'Roboto IP adresas',
	'BOT_IP_EXPLAIN'	=> 'Leidžiamos ir dalinės reikšmės. Adresus atskirkite kableliu.',
	'BOT_NAME'	=> 'Roboto vardas',
	'BOT_NAME_EXPLAIN'	=> 'Naudojamas tik jūsų reikmėms.',
	'BOT_NAME_TAKEN'	=> 'Toks vartotojo vardas jau yra, todėl paskirti robotui jo negalima.',
	'BOT_NEVER'	=> 'Niekada',
	'BOT_STYLE'	=> 'Roboto stilius',
	'BOT_STYLE_EXPLAIN'	=> 'Diskusijų lentos stilius, kurį naudos robotas.',
	'BOT_UPDATED'	=> 'Robotas sėkmingai atnaujintas.',
	'ERR_BOT_AGENT_MATCHES_UA'	=> 'Roboto žymės, kurias aprašėte, labai panašios į vieną jau esančių robotų. Prašome tiksliau apibūdinti šį robotą.',
	'ERR_BOT_NO_IP'	=> 'IP adresai, kuriuos įrašėte, yra neteisingi arba nepavyko išrišti internetinio vardo.',
	'ERR_BOT_NO_MATCHES'	=> 'Turite nurodyti bent roboto žymes arba IP adresą.',
	'NO_BOT'	=> 'Roboto su tokiu ID nėra.',
	'NO_BOT_GROUP'	=> 'Nepavyko rasti specialios robotų grupės.',
));

?>