<?php
/**
*
* acp_permissions_phpbb.php [Lithuanian]
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

	'permission_cat'	=> array(
		'actions'	=> 'Veiksmai',
		'content'	=> 'Turinys',
		'forums'	=> 'Forumai',
		'misc'	=> 'Kita',
		'permissions'	=> 'Teisės',
		'pm'	=> 'Asmeninės žinutės',
		'polls'	=> 'Apklausos',
		'post'	=> 'Pranešimai',
		'post_actions'	=> 'Pranešimų veiksmai',
		'posting'	=> 'Pranešimų rašymas',
		'profile'	=> 'Aprašas',
		'settings'	=> 'Nustatymai',
		'topic_actions'	=> 'Temų veiksmai',
		'user_group'	=> 'Vartotojai ir grupės',
	),


	'permission_type'	=> array(
		'u_'	=> 'Vartotojo teisės',
		'a_'	=> 'Administravimo teisės',
		'm_'	=> 'Moderavimo teisės',
		'f_'	=> 'Forumo teisės',

		'global'	=> array(
			'm_'	=> 'Globalaus moderavimo teisės',
		),

	),


	'acl_u_viewprofile'	=> array(
		'lang'	=> 'Gali peržiūrėti aprašus, narių ir dabar prisijungusių sąrašą',
		'cat'	=> 'profile',
	),


	'acl_u_chgname'	=> array(
		'lang'	=> 'Gali keisti savo vartotojo vardą',
		'cat'	=> 'profile',
	),


	'acl_u_chgpasswd'	=> array(
		'lang'	=> 'Gali keisti slaptažodį',
		'cat'	=> 'profile',
	),


	'acl_u_chgemail'	=> array(
		'lang'	=> 'Gali keisti el. pašto adresą',
		'cat'	=> 'profile',
	),


	'acl_u_chgavatar'	=> array(
		'lang'	=> 'Gali keisti avatarą',
		'cat'	=> 'profile',
	),


	'acl_u_chggrp'	=> array(
		'lang'	=> 'Gali keisti pagrindinę grupę',
		'cat'	=> 'profile',
	),


	'acl_u_attach'	=> array(
		'lang'	=> 'Gali prikabinti failus',
		'cat'	=> 'post',
	),


	'acl_u_download'	=> array(
		'lang'	=> 'Gali atsisiųsti failus',
		'cat'	=> 'post',
	),


	'acl_u_savedrafts'	=> array(
		'lang'	=> 'Gali išsaugoti juodraščius',
		'cat'	=> 'post',
	),


	'acl_u_chgcensors'	=> array(
		'lang'	=> 'Gali išjungti cenzūrą',
		'cat'	=> 'post',
	),


	'acl_u_sig'	=> array(
		'lang'	=> 'Gali naudoti parašą',
		'cat'	=> 'post',
	),


	'acl_u_sendpm'	=> array(
		'lang'	=> 'Gali siųsti asmenines žinutes',
		'cat'	=> 'pm',
	),


	'acl_u_masspm'	=> array(
		'lang'	=> 'Gali siųsti žinutes keletui vartotojų vienu metu',
		'cat'	=> 'pm',
	),


	'acl_u_masspm_group'	=> array(
		'lang'	=> 'Gali siųsti žinutes keletui grupių vienu metu',
		'cat'	=> 'pm',
	),


	'acl_u_readpm'	=> array(
		'lang'	=> 'Gali skaityti asmenines žinutes',
		'cat'	=> 'pm',
	),


	'acl_u_pm_edit'	=> array(
		'lang'	=> 'Gali redaguoti savo asmenines žinutes',
		'cat'	=> 'pm',
	),


	'acl_u_pm_delete'	=> array(
		'lang'	=> 'Gali ištrinti asmenines žinutes iš savo katalogų',
		'cat'	=> 'pm',
	),


	'acl_u_pm_forward'	=> array(
		'lang'	=> 'Gali persiųsti asmenines žinutes',
		'cat'	=> 'pm',
	),


	'acl_u_pm_emailpm'	=> array(
		'lang'	=> 'Gali persiųsti asmenines žinutes el. paštu',
		'cat'	=> 'pm',
	),


	'acl_u_pm_printpm'	=> array(
		'lang'	=> 'Gali spausdinti asmenines žinutes',
		'cat'	=> 'pm',
	),


	'acl_u_pm_attach'	=> array(
		'lang'	=> 'Gali prie asmeninių žinučių prikabinti failus',
		'cat'	=> 'pm',
	),


	'acl_u_pm_download'	=> array(
		'lang'	=> 'Gali iš asmeninių žinučių atsisiųsti prikabintus failus',
		'cat'	=> 'pm',
	),


	'acl_u_pm_bbcode'	=> array(
		'lang'	=> 'Gali asmeninėse žinutėse naudoti BBKodą',
		'cat'	=> 'pm',
	),


	'acl_u_pm_smilies'	=> array(
		'lang'	=> 'Gali asmeninėse žinutėse naudoti šypsenėles',
		'cat'	=> 'pm',
	),


	'acl_u_pm_img'	=> array(
		'lang'	=> 'Gali asmeninėse žinutėse naudoti [img] BBKodo žymenį',
		'cat'	=> 'pm',
	),


	'acl_u_pm_flash'	=> array(
		'lang'	=> 'Gali asmeninėse žinutėse naudoti [flash] BBKodo žymenį',
		'cat'	=> 'pm',
	),


	'acl_u_sendemail'	=> array(
		'lang'	=> 'Gali siųsti el. paštą',
		'cat'	=> 'misc',
	),


	'acl_u_sendim'	=> array(
		'lang'	=> 'Gali siųsti greitąsias žinutes',
		'cat'	=> 'misc',
	),


	'acl_u_ignoreflood'	=> array(
		'lang'	=> 'Gali nepaisyti apsaugos nuo per didelio pranešimų srauto',
		'cat'	=> 'misc',
	),


	'acl_u_hideonline'	=> array(
		'lang'	=> 'Gali paslėpti savo būseną',
		'cat'	=> 'misc',
	),


	'acl_u_viewonline'	=> array(
		'lang'	=> 'Gali matyti paslėptus prisijungusius vartotojus',
		'cat'	=> 'misc',
	),


	'acl_u_search'	=> array(
		'lang'	=> 'Gali ieškoti diskusijose',
		'cat'	=> 'misc',
	),


	'acl_f_list'	=> array(
		'lang'	=> 'Gali matyti forumą',
		'cat'	=> 'post',
	),


	'acl_f_read'	=> array(
		'lang'	=> 'Gali skaityti forumą',
		'cat'	=> 'post',
	),


	'acl_f_post'	=> array(
		'lang'	=> 'Gali kurti naujas temas',
		'cat'	=> 'post',
	),


	'acl_f_reply'	=> array(
		'lang'	=> 'Gali atsakinėti į pranešimus temose',
		'cat'	=> 'post',
	),


	'acl_f_icons'	=> array(
		'lang'	=> 'Gali naudoti temų/pranešimų piktogramas',
		'cat'	=> 'post',
	),


	'acl_f_announce'	=> array(
		'lang'	=> 'Gali kurti svarbias temas',
		'cat'	=> 'post',
	),


	'acl_f_sticky'	=> array(
		'lang'	=> 'Gali kurti dažnas temas',
		'cat'	=> 'post',
	),


	'acl_f_poll'	=> array(
		'lang'	=> 'Gali kurti apklausas',
		'cat'	=> 'polls',
	),


	'acl_f_vote'	=> array(
		'lang'	=> 'Gali dalyvauti apklausose',
		'cat'	=> 'polls',
	),


	'acl_f_votechg'	=> array(
		'lang'	=> 'Gali pakeisti savo balsą',
		'cat'	=> 'polls',
	),


	'acl_f_attach'	=> array(
		'lang'	=> 'Gali prikabinti failus',
		'cat'	=> 'content',
	),


	'acl_f_download'	=> array(
		'lang'	=> 'Gali atsisiųsti failus',
		'cat'	=> 'content',
	),


	'acl_f_sigs'	=> array(
		'lang'	=> 'Gali naudoti parašą',
		'cat'	=> 'content',
	),


	'acl_f_bbcode'	=> array(
		'lang'	=> 'Gali naudoti BBKodą',
		'cat'	=> 'content',
	),


	'acl_f_smilies'	=> array(
		'lang'	=> 'Gali naudoti šypsenėles',
		'cat'	=> 'content',
	),


	'acl_f_img'	=> array(
		'lang'	=> 'Gali naudoti [img] BBKodo žymenį',
		'cat'	=> 'content',
	),


	'acl_f_flash'	=> array(
		'lang'	=> 'Gali naudoti [flash] BBKodo žymenį',
		'cat'	=> 'content',
	),


	'acl_f_edit'	=> array(
		'lang'	=> 'Gali redaguoti savo pranešimus',
		'cat'	=> 'actions',
	),


	'acl_f_delete'	=> array(
		'lang'	=> 'Gali ištrinti savo pranešimus',
		'cat'	=> 'actions',
	),


	'acl_f_user_lock'	=> array(
		'lang'	=> 'Gali užrakinti savo temas',
		'cat'	=> 'actions',
	),


	'acl_f_bump'	=> array(
		'lang'	=> 'Gali priminti apie temas',
		'cat'	=> 'actions',
	),


	'acl_f_report'	=> array(
		'lang'	=> 'Gali raportuoti apie pranešimus',
		'cat'	=> 'actions',
	),


	'acl_f_subscribe'	=> array(
		'lang'	=> 'Gali užsiprenumeruoti forumą',
		'cat'	=> 'actions',
	),


	'acl_f_print'	=> array(
		'lang'	=> 'Gali spausdinti temas',
		'cat'	=> 'actions',
	),


	'acl_f_email'	=> array(
		'lang'	=> 'Gali siųsti temas el. paštu',
		'cat'	=> 'actions',
	),


	'acl_f_search'	=> array(
		'lang'	=> 'Gali ieškoti forume',
		'cat'	=> 'misc',
	),


	'acl_f_ignoreflood'	=> array(
		'lang'	=> 'Gali nepaisyti apsaugos nuo per didelio pranešimų srauto',
		'cat'	=> 'misc',
	),


	'acl_f_postcount'	=> array(
		'lang'	=> 'Didinti pranešimų skaičių<br /><em>Atsiminkite, kad šis nustatymas galioja tik naujiems pranešimams.</em>',
		'cat'	=> 'misc',
	),


	'acl_f_noapprove'	=> array(
		'lang'	=> 'Gali rašyti be patvirtinimo',
		'cat'	=> 'misc',
	),


	'acl_m_edit'	=> array(
		'lang'	=> 'Gali redaguoti pranešimus',
		'cat'	=> 'post_actions',
	),


	'acl_m_delete'	=> array(
		'lang'	=> 'Gali ištrinti pranešimus',
		'cat'	=> 'post_actions',
	),


	'acl_m_approve'	=> array(
		'lang'	=> 'Gali patvirtinti pranešimus',
		'cat'	=> 'post_actions',
	),


	'acl_m_report'	=> array(
		'lang'	=> 'Gali uždaryti ir ištrinti raportus',
		'cat'	=> 'post_actions',
	),


	'acl_m_chgposter'	=> array(
		'lang'	=> 'Gali keisti pranešimo autorių',
		'cat'	=> 'post_actions',
	),


	'acl_m_move'	=> array(
		'lang'	=> 'Gali perkelti temas',
		'cat'	=> 'topic_actions',
	),


	'acl_m_lock'	=> array(
		'lang'	=> 'Gali užrakinti temas',
		'cat'	=> 'topic_actions',
	),


	'acl_m_split'	=> array(
		'lang'	=> 'Gali išskirti temas',
		'cat'	=> 'topic_actions',
	),


	'acl_m_merge'	=> array(
		'lang'	=> 'Gali sujungti temas',
		'cat'	=> 'topic_actions',
	),


	'acl_m_info'	=> array(
		'lang'	=> 'Gali peržiūrėti pranešimo aprašymą',
		'cat'	=> 'misc',
	),


	'acl_m_warn'	=> array(
		'lang'	=> 'Gali dalinti perspėjimus<br /><em>Šis nustatymas veikia tik globaliai, o ne forumo lygyje.</em>',
		'cat'	=> 'misc',
	),


	'acl_m_ban'	=> array(
		'lang'	=> 'Gali valdyti blokuojamus vartotojus<br /><em>Šis nustatymas veikia tik globaliai, o ne forumo lygyje.</em>',
		'cat'	=> 'misc',
	),


	'acl_a_board'	=> array(
		'lang'	=> 'Gali keisti diskusijų lentos nustatymus/tikrinti ar yra naujų versijų',
		'cat'	=> 'settings',
	),


	'acl_a_server'	=> array(
		'lang'	=> 'Gali keisti serverio/bendravimo nustatymus',
		'cat'	=> 'settings',
	),


	'acl_a_jabber'	=> array(
		'lang'	=> 'Gali keisti Jabber nustatymus',
		'cat'	=> 'settings',
	),


	'acl_a_phpinfo'	=> array(
		'lang'	=> 'Gali peržiūrėti php nustatymus',
		'cat'	=> 'settings',
	),


	'acl_a_forum'	=> array(
		'lang'	=> 'Gali valdyti forumus',
		'cat'	=> 'forums',
	),


	'acl_a_forumadd'	=> array(
		'lang'	=> 'Gali kurti naujus forumus',
		'cat'	=> 'forums',
	),


	'acl_a_forumdel'	=> array(
		'lang'	=> 'Gali ištrinti forumus',
		'cat'	=> 'forums',
	),


	'acl_a_prune'	=> array(
		'lang'	=> 'Gali valyti forumus',
		'cat'	=> 'forums',
	),


	'acl_a_icons'	=> array(
		'lang'	=> 'Gali keisti temų/pranešimų piktogramas ir šypsenėles',
		'cat'	=> 'posting',
	),


	'acl_a_words'	=> array(
		'lang'	=> 'Gali keisti cenzūruojamus žodžius',
		'cat'	=> 'posting',
	),


	'acl_a_bbcode'	=> array(
		'lang'	=> 'Gali aprašyti BBKodo žymes',
		'cat'	=> 'posting',
	),


	'acl_a_attach'	=> array(
		'lang'	=> 'Gali keisti prikabintų failų nustatymus',
		'cat'	=> 'posting',
	),


	'acl_a_user'	=> array(
		'lang'	=> 'Gali valdyti vartotojus<br /><em>Taip pat parodo vartotojų naršykles dabar prisijungusių sąraše.</em>',
		'cat'	=> 'user_group',
	),


	'acl_a_userdel'	=> array(
		'lang'	=> 'Gali trinti/valyti vartotojus',
		'cat'	=> 'user_group',
	),


	'acl_a_group'	=> array(
		'lang'	=> 'Gali valdyti grupes',
		'cat'	=> 'user_group',
	),


	'acl_a_groupadd'	=> array(
		'lang'	=> 'Gali kurti naujas grupes',
		'cat'	=> 'user_group',
	),


	'acl_a_groupdel'	=> array(
		'lang'	=> 'Gali trinti grupes',
		'cat'	=> 'user_group',
	),


	'acl_a_ranks'	=> array(
		'lang'	=> 'Gali valdyti rangus',
		'cat'	=> 'user_group',
	),


	'acl_a_profile'	=> array(
		'lang'	=> 'Gali valdyti papildomus aprašo laukus',
		'cat'	=> 'user_group',
	),


	'acl_a_names'	=> array(
		'lang'	=> 'Gali valdyti draudžiamus vartotojų vardus',
		'cat'	=> 'user_group',
	),


	'acl_a_ban'	=> array(
		'lang'	=> 'Gali valdyti blokuojamus vartotojus',
		'cat'	=> 'user_group',
	),


	'acl_a_viewauth'	=> array(
		'lang'	=> 'Gali peržiūrėti teisių vykdymą',
		'cat'	=> 'permissions',
	),


	'acl_a_authgroups'	=> array(
		'lang'	=> 'Gali keisti teises atskiroms grupėms',
		'cat'	=> 'permissions',
	),


	'acl_a_authusers'	=> array(
		'lang'	=> 'Gali keisti teises atskiriems vartotojams',
		'cat'	=> 'permissions',
	),


	'acl_a_fauth'	=> array(
		'lang'	=> 'Gali keisti forumo teises',
		'cat'	=> 'permissions',
	),


	'acl_a_mauth'	=> array(
		'lang'	=> 'Gali keisti moderavimo teises',
		'cat'	=> 'permissions',
	),


	'acl_a_aauth'	=> array(
		'lang'	=> 'Gali keisti administravimo teises',
		'cat'	=> 'permissions',
	),


	'acl_a_uauth'	=> array(
		'lang'	=> 'Gali keisti vartotojo teises',
		'cat'	=> 'permissions',
	),


	'acl_a_roles'	=> array(
		'lang'	=> 'Gali valdyti roles',
		'cat'	=> 'permissions',
	),


	'acl_a_switchperm'	=> array(
		'lang'	=> 'Gali naudoti kitas teises',
		'cat'	=> 'permissions',
	),


	'acl_a_styles'	=> array(
		'lang'	=> 'Gali valdyti stilius',
		'cat'	=> 'misc',
	),


	'acl_a_viewlogs'	=> array(
		'lang'	=> 'Gali peržiūrėti registrą',
		'cat'	=> 'misc',
	),


	'acl_a_clearlogs'	=> array(
		'lang'	=> 'Gali valyti registrą',
		'cat'	=> 'misc',
	),


	'acl_a_modules'	=> array(
		'lang'	=> 'Gali valdyti modulius',
		'cat'	=> 'misc',
	),


	'acl_a_language'	=> array(
		'lang'	=> 'Gali valdyti kalbų paketus',
		'cat'	=> 'misc',
	),


	'acl_a_email'	=> array(
		'lang'	=> 'Gali masiškai siųsti el. laiškus',
		'cat'	=> 'misc',
	),


	'acl_a_bots'	=> array(
		'lang'	=> 'Gali valdyti robotus',
		'cat'	=> 'misc',
	),


	'acl_a_reasons'	=> array(
		'lang'	=> 'Gali valdyti raportų/blokavimo priežastis',
		'cat'	=> 'misc',
	),


	'acl_a_backup'	=> array(
		'lang'	=> 'Gali išsaugoti/atstatyti duomenų bazę',
		'cat'	=> 'misc',
	),


	'acl_a_search'	=> array(
		'lang'	=> 'Gali valdyti paieškos variklius ir jų nustatymus',
		'cat'	=> 'misc',
	),

));

?>