<?php
/**
*
* acp_forums.php [Lithuanian]
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
	'AUTO_PRUNE_DAYS'	=> 'Automatinio valymo pranešimų senumas',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Dienų skaičius nuo paskutinio pranešimo kai tema bus ištrinta.',
	'AUTO_PRUNE_FREQ'	=> 'Automatinio valymo dažnumas',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Dienų skaičius tarp valymo vykdymo.',
	'AUTO_PRUNE_VIEWED'	=> 'Automatinio valymo pranešimų peržiūrėjimo senumas',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Dienų skaičius nuo paskutinio pranešimo peržiūrėjimo kai tema bus ištrinta.',
	'CONTINUE'	=> 'Tęsti',
	'COPY_PERMISSIONS'	=> 'Kopijuoti teises nuo',
	'COPY_PERMISSIONS_EXPLAIN'	=> 'Norėdami palengvinti teisių nustatymą naujam forumui galite kopijuoti teises nuo jau egzistuojančio forumo.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Kai sukursite forumą, jis turės tokias pačias teises kaip čia nurodėte. Jeigu nepasirinksite jokio forumo, naujai sukurtas forumas bus nematomas tol, kol jam nepaskirsite teisių.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Jeigu kopijuosite teises, forumas turės tokias pačias teises kaip ir forumas, kurį pasirinksite čia. Tai perrašys visas ankščiau tam forumui nustatytas teises. Jeigu čia nepasirinksite jokio forumo, bus išsaugotos senos teisės.',
	'COPY_TO_ACL'	=> 'Taip pat galite tiesiog %snustatyti naujas teises%s šiam forumui.',
	'CREATE_FORUM'	=> 'Sukurti naują forumą',
	'DECIDE_MOVE_DELETE_CONTENT'	=> 'Ištrinti turinį arba perkelti į forumą',
	'DECIDE_MOVE_DELETE_SUBFORUMS'	=> 'Ištrinti subforumus arba perkelti į forumą',
	'DEFAULT_STYLE'	=> 'Standartinis stilius',
	'DELETE_ALL_POSTS'	=> 'Ištrinti pranešimus',
	'DELETE_SUBFORUMS'	=> 'Ištrinti subforumus ir pranešimus',
	'DISPLAY_ACTIVE_TOPICS'	=> 'Įjungti aktyvias temas',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'	=> 'Jeigu įjungsite šį parametrą, visos šio forumo temos bus rodomos aktyvių temų sąraše.',
	'EDIT_FORUM'	=> 'Forumo redagavimas',
	'ENABLE_INDEXING'	=> 'Įjungti paieškos indeksą',
	'ENABLE_INDEXING_EXPLAIN'	=> 'Jeigu įjungsite šį parametrą, visi šio forumo pranešimai bus indeksuojami paieškai.',
	'ENABLE_POST_REVIEW'	=> 'Įjungti išankstinį pranešimų peržiūrėjimą',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Jeigu įjungsite šį parametrą, vartotojai galės peržiūrėti savo pranešimą prieš siunčiant, jeigu tuo metu temoje atsirado naujų kitų vartotojų pranešimų. Pokalbių forumuose išjunkite šį nustatymą.',
	'ENABLE_QUICK_REPLY'	=> 'Įjungti greituosius atsakymus',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Įjungia greituosius atsakymus šiame forume. Jeigu pagrindiniuose nustatymuose greitieji atsakymai yra išjungti, greitojo atsakymo laukas nebus rodomas. Jis bus rodomas tik tiems vartotojams, kurie turi teises rašyti į šį forumą.',
	'ENABLE_RECENT'	=> 'Rodyti aktyvias temas',
	'ENABLE_RECENT_EXPLAIN'	=> 'Jeigu įjungsite šį parametrą, visos šio forumo temos bus rodomos aktyvių temų sąraše.',
	'ENABLE_TOPIC_ICONS'	=> 'Įjungti temų piktogramas',
	'FORUM_ADMIN'	=> 'Forumų valdymas',
	'FORUM_ADMIN_EXPLAIN'	=> 'phpBB3 viskas paremta forumais. Kategorija yra tik specialus forumo tipas. Kiekvienas forumas gali turėti neribotą subforumų skaičių ir jūs galite kiekvienam atskirai nurodyti ar leisti jame rašyti pranešimus ar ne (t.y. ar forumas elgsis kaip seno tipo kategorija). Čia galite sukurti, keisti, ištrinti, užrakinti, atrakinti kiekvieną forumą. Taip pat čia rasite ir papildomas forumų valdymo galimybes. Jeigu pranešimų ar temų skaičius tapo netikslus, čia taip pat galite sinchronizuoti forumus. <strong>Kad nauji forumai būtų rodomi diskusijose, turite nukopijuoti arba nustatyti reikiamas teises.</strong>',
	'FORUM_AUTO_PRUNE'	=> 'Įjungti automatinį valymą',
	'FORUM_AUTO_PRUNE_EXPLAIN'	=> 'Išvalo forumą nuo temų aprašytų žemiau esančiais parametrais.',
	'FORUM_CREATED'	=> 'Forumas sėkmingai sukurtas.',
	'FORUM_DATA_NEGATIVE'	=> 'Valymo parametrai negali būti neigiami.',
	'FORUM_DESC_TOO_LONG'	=> 'Forumo aprašymas per ilgas. Jis turi būti ne ilgesnis nei 4000 simbolių.',
	'FORUM_DELETE'	=> 'Forumo trynimas',
	'FORUM_DELETE_EXPLAIN'	=> 'Forma apačioje leidžia ištrinti forumą. Jeigu forume galime rašyti, galėsite nurodyti, kur padėti visas forumo temas (ar forumus).',
	'FORUM_DELETED'	=> 'Forumas sėkmingai ištrintas.',
	'FORUM_DESC'	=> 'Aprašymas',
	'FORUM_DESC_EXPLAIN'	=> 'Galite naudoti ir HTML žymes.',
	'FORUM_EDIT_EXPLAIN'	=> 'Forma apačioje leis keisti forumą. Atsiminkite, kad moderavimo ir pranešimų skaičiaus teisės yra nustatomos kiekvienam vartotojui ir grupei atskirai per forumo teisių puslapį.',
	'FORUM_IMAGE'	=> 'Forumo paveikslėlis',
	'FORUM_IMAGE_EXPLAIN'	=> 'Papildomo forumo paveikslėlio kelias nuo pagrindinio phpBB katalogo.',
	'FORUM_IMAGE_NO_EXIST'	=> 'Nurodytas forumo paveikslėlis neegzistuoja',
	'FORUM_LINK_EXPLAIN'	=> 'Pilnas URL adresas (įskaitant protokolą, t.y. <samp>http://</samp>) nurodantis norimą puslapį, į kurį pateks vartotojas paspaudęs ant šio forumo nuorodos, pvz.: <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'	=> 'Skaičiuoti paspaudimų skaičių',
	'FORUM_LINK_TRACK_EXPLAIN'	=> 'Skaičiuoti kiek kartų buvo paspausta ant forumo nuorodos.',
	'FORUM_NAME'	=> 'Forumo pavadinimas',
	'FORUM_NAME_EMPTY'	=> 'Jūs turite įrašyti šio forumo pavadinimą.',
	'FORUM_PARENT'	=> 'Kurti forume',
	'FORUM_PASSWORD'	=> 'Forumo slaptažodis',
	'FORUM_PASSWORD_CONFIRM'	=> 'Patvirtinti forumo slaptažodį',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Įrašyti reikia tik tada, jeigu nurodytas forumo slaptažodis.',
	'FORUM_PASSWORD_EXPLAIN'	=> 'Nurodo forumo slaptažodį. Pirmenybę visada teikite teisių sistemai.',
	'FORUM_PASSWORD_UNSET'	=> 'Ištrinti forumo slaptažodį',
	'FORUM_PASSWORD_UNSET_EXPLAIN'	=> 'Jeigu norite ištrinti forumo slaptažodį, paspauskite čia.',
	'FORUM_PASSWORD_OLD'	=> 'Forumo slaptažodis naudoja seną šifravimo algoritmą ir turi būti pakeistas.',
	'FORUM_PASSWORD_MISMATCH'	=> 'Įrašyti slaptažodžiai nesutampa.',
	'FORUM_PRUNE_SETTINGS'	=> 'Forumo valymo nustatymai',
	'FORUM_RESYNCED'	=> 'Forumas “%s” sėkmingai sinchronizuotas',
	'FORUM_RULES_EXPLAIN'	=> 'Forumo taisyklės rodomos kiekviename forumo puslapyje.',
	'FORUM_RULES_LINK'	=> 'Nuoroda į forumo taisykles',
	'FORUM_RULES_LINK_EXPLAIN'	=> 'Čia galite įrašyti URL nuorodą į puslapį/pranešimą, kuriame yra forumo taisyklės. Šis nustatymas išjungs forumo taisyklių tekstinį laukelį.',
	'FORUM_RULES_PREVIEW'	=> 'Peržiūrėti forumo taisykles',
	'FORUM_RULES_TOO_LONG'	=> 'Forumo taisyklės turi būti ne ilgesnės kaip 4000 simbolių.',
	'FORUM_SETTINGS'	=> 'Forumo nustatymai',
	'FORUM_STATUS'	=> 'Forumo būsena',
	'FORUM_STYLE'	=> 'Forumo stilius',
	'FORUM_TOPICS_PAGE'	=> 'Temų viename puslapyje',
	'FORUM_TOPICS_PAGE_EXPLAIN'	=> 'Jeigu čia įrašytas ne nulis, standartinis temų viename puslapyje skaičius bus pakeistas šiuo skaičiumi.',
	'FORUM_TYPE'	=> 'Forumo tipas',
	'FORUM_UPDATED'	=> 'Forumo aprašymas pakeistas sėkmingai.',
	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'	=> 'Forumas, kurį norite pakeisti į nuorodą, turi subforumų. Prieš tai darydami perkelkite visus subforumus į kitą forumą, nes po to negalėsite jų matyti.',
	'GENERAL_FORUM_SETTINGS'	=> 'Pagrindiniai forumo nustatymai',
	'LINK'	=> 'Nuoroda',
	'LIST_INDEX'	=> 'Rodyti subforumą aukštesnio lygio forumo legendoje',
	'LIST_INDEX_EXPLAIN'	=> 'Rodo šį forumą kaip nuorodą aukštesnio lygio forumo pagrindiniame ir kituose puslapiuose, jeigu “Rodyti subforumus legendoje” nustatymas yra įjungtas aukštesnio lygio forume.',
	'LIST_SUBFORUMS'	=> 'Rodyti subforumus legendoje',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Rodo šio forumo subforumus kaip nuorodą forumo pagrindiniame ir kituose puslapiuose, jeigu jų  “Rodyti subforumą aukštesnio lygio forumo legendoje” nustatymas yra įjungtas.',
	'LOCKED'	=> 'Užrakintas',
	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Forumas, į kurį pasirinkote perkelti pranešimus, yra tam netinkamas. Pasirinkite kitą forumą.',
	'MOVE_POSTS_TO'	=> 'Perkelti pranešimus į',
	'MOVE_SUBFORUMS_TO'	=> 'Perkelti subforumus į',
	'NO_DESTINATION_FORUM'	=> 'Turinio perkėlimui nenurodėte forumo.',
	'NO_FORUM_ACTION'	=> 'Nenurodėte ką daryti su forumo turiniu.',
	'NO_PARENT'	=> 'Pirmame diskusijų puslapyje',
	'NO_PERMISSIONS'	=> 'Nekopijuoti teisių',
	'NO_PERMISSION_FORUM_ADD'	=> 'Jūs neturite teisių forumų kūrimui.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Jūs neturite teisių forumų trynimui.',
	'PARENT_IS_LINK_FORUM'	=> 'Forumas, kuriame nurodėte sukurti šį forumą, yra nuorodos tipo. Tokio tipo forumai negali turėti subforumu. Subforumus galite kurti tik paprasto forumo arba kategorijos tipo forumuose.',
	'PARENT_NOT_EXIST'	=> 'Forumas, kuriame kuriate subforumą, neegzistuoja.',
	'PRUNE_ANNOUNCEMENTS'	=> 'Valyti svarbias temas',
	'PRUNE_STICKY'	=> 'Valyti dažnas temas',
	'PRUNE_OLD_POLLS'	=> 'Valyti senas apklausas',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Ištrina temas su apklausomis, kurių pranešimai atitinka parametrus esančius aukščiau.',
	'REDIRECT_ACL'	=> 'Dabar galite %spakeisti šio forumo teises%s.',
	'SYNC_IN_PROGRESS'	=> 'Forumas sinchronizuojamas',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Sinchronizuojama tema %1$d/%2$d.',
	'TYPE_CAT'	=> 'Kategorija',
	'TYPE_FORUM'	=> 'Forumas',
	'TYPE_LINK'	=> 'Nuoroda',
	'UNLOCKED'	=> 'Atrakintas',
));

?>