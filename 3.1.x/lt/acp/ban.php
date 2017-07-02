<?php
/**
*
* acp_ban.php [Lithuanian]
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
	'1_HOUR'	=> '1 valanda',
	'30_MINS'	=> '30 minučių',
	'6_HOURS'	=> '6 valandos',
	'ACP_BAN_EXPLAIN'	=> 'Čia galite blokuoti vartotojus pagal vardus, IP adresus ar el. pašto adresą. Tokiu būdu galite neleisti vartotojui prieiti prie bet kurios diskusijų dalies. Jeigu pageidaujate, galite įrašyti trumpą (maksimaliai 3000 simbolių) blokavimo priežastį. Ji bus įrašyta į administratorių veiksmų registrą. Taip pat galite nurodyti blokavimo ilgumą. Pasirinkę <span style="text-decoration: underline;">Iki -&gt;</span> ir įrašę datą <kbd>YYYY-MM-DD</kbd> formatu, galite netgi nurodyti datą, kada turi baigtis blokavimo periodas.',
	'BAN_EXCLUDE'	=> 'Išskirti iš blokuojamų sąrašo',
	'BAN_LENGTH'	=> 'Blokavimo ilgumas',
	'BAN_REASON'	=> 'Blokavimo priežastis',
	'BAN_GIVE_REASON'	=> 'Blokavimo priežastis rodoma vartotojui',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Blokuojamų sąrašas sėkmingai atnaujintas.',
	'BANNED_UNTIL_DATE'	=> 'iki %s',
	'BANNED_UNTIL_DURATION'	=> '%1$s (iki %2$s)',
	'EMAIL_BAN'	=> 'Vieno ar daugiau el. pašto adresų blokavimas',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Įjunkite šį nustatymą norėdami išskirti įrašytą el. pašto adresą iš visų blokuojamų adresų.',
	'EMAIL_BAN_EXPLAIN'	=> 'Norėdami įrašyti daugiau nei vieną el. pašto adresą, kiekvieną jų rašykite naujoje eilutėje. Dalinėms reikšmėms aprašyti naudokite simbolį *, pvz.: <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp> ir t.t.',
	'EMAIL_NO_BANNED'	=> 'Blokuojamų el. pašto adresų nėra',
	'EMAIL_UNBAN'	=> 'El. pašto adresų atblokavimas arba išskirtų ištrynimas',
	'EMAIL_UNBAN_EXPLAIN'	=> 'Jūs galite atblokuoti (arba ištrinti išskirtus) keletą el. pašto adresų vienu metu. Tai galite padaryti pasinaudoję klaviatūra ar pele ir surinkę teisingą kombinaciją jūsų kompiuteriui ir naršyklei. Išskirti el. pašto adresai yra paryškinti.',
	'IP_BAN'	=> 'Vieno ar daugiau IP adresų blokavimas',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Įjunkite šį nustatymą norėdami išskirti įrašytą IP adresą iš visų blokuojamų adresų.',
	'IP_BAN_EXPLAIN'	=> 'Norėdami įrašyti daugiau nei vieną IP adresą, kiekvieną jų rašykite naujoje eilutėje. Norėdami nurodyti IP adresų intervalą, atskirkite juos brūkšneliu (-). Dalinėms reikšmėms aprašyti naudokite “*”.',
	'IP_HOSTNAME'	=> 'IP adresai arba internetiniai vardai',
	'IP_NO_BANNED'	=> 'Blokuojamų IP adresų nėra',
	'IP_UNBAN'	=> 'IP adresų atblokavimas arba išskirtų ištrynimas',
	'IP_UNBAN_EXPLAIN'	=> 'Jūs galite atblokuoti (arba ištrinti išskirtus) keletą IP adresų vienu metu. Tai galite padaryti pasinaudoję klaviatūra ar pele ir surinkę teisingą kombinaciją jūsų kompiuteriui ir naršyklei. Išskirti IP adresai yra paryškinti.',
	'LENGTH_BAN_INVALID'	=> 'Data turi būti <kbd>YYYY-MM-DD</kbd> formatu.',
	'OPTIONS_BANNED'	=> 'Užblokuoti',
	'OPTIONS_EXCLUDED'	=> 'Išskirti',
	'PERMANENT'	=> 'Amžinas',
	'UNTIL'	=> 'Iki',
	'USER_BAN'	=> 'Vieno ar daugiau vartotojo vardo blokavimas',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Įjunkite šį nustatymą norėdami išskirti įrašytą vartotojo vardą iš visų blokuojamų adresų.',
	'USER_BAN_EXPLAIN'	=> 'Norėdami įrašyti daugiau nei vieną vartotojo vardą, kiekvieną jų rašykite naujoje eilutėje. Norėdami automatiškai pridėtą vieną ar daugiau vartotojų vardų naudokite nuorodą <span style="text-decoration: underline;">Surasti dalyvį</span>.',
	'USER_NO_BANNED'	=> 'Blokuojamų vartotojų vardų nėra',
	'USER_UNBAN'	=> 'Vartotojų vardų atblokavimas arba išskirtų ištrynimas',
	'USER_UNBAN_EXPLAIN'	=> 'Jūs galite atblokuoti (arba ištrinti išskirtus) keletą vartotojų vardų vienu metu. Tai galite padaryti pasinaudoję klaviatūra ar pele ir surinkę teisingą kombinaciją jūsų kompiuteriui ir naršyklei. Išskirti vartotojų vardai yra paryškinti.',
));

?>