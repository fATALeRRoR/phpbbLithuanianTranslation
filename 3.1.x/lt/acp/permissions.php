<?php
/**
*
* acp_permissions.php [Lithuanian]
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '		<p>Teisių valdymas yra labai tikslus ir sugrupuotas į keturis pagrindinius skyrius, kurie yra:</p>

		<h2>Globalios teisės</h2>
		<p>Šios teisės valdo priėjimą visoje diskusijų lentoje. Toliau jos dalinamos į vartotojų teises, grupių teises, administratorių teises ir globalių moderatorių teises.</p>

		<h2>Forumo teisės</h2>
		<p>Šios teisės valdo priėjimą forumo lygyje. Toliau jos dalinamos į forumo teises, forumo moderatorių teises, vartotojų forumo teises ir grupių forumo teises.</p>

		<h2>Teisių rolės</h2>
		<p>Šios teisės naudojamos teisių paketų sukūrimui, kuriuos vėliau galima priskirti vartotojams ar grupėms pagal atliekamą rolę. Standartinės rolės turėtų tikti tiek didelei, tiek mažai diskusijų lentai, tačiau, jeigu reikia, kiekviename iš keturių skyrių, galite roles pridėti/keisti/ištrinti.</p>

		<h2>Teisių vykdymas</h2>
		<p>Čia galite pamatyti kaip bus vykdomos priskirtos vartotojų, moderatorių (lokalių ar globalių), administratorių ar forumų teisės.</p>
	
		<br />

		<p>Daugiau informacijos apie tai, kaip nustatyti ir valdyti phpBB3 diskusijų lentos teises, žiūrėkite <a href="https://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Greitojo gido 1.5 skyriuje</a>.</p>
	',
	'ACL_NEVER'	=> 'Niekada',
	'ACL_SET'	=> 'Teisių nustatymas',
	'ACL_SET_EXPLAIN'	=> 'Teisės yra pagrįstos paprasta <samp>TAIP</samp>/<samp>NE</samp> sistema. Jeigu nenorite, kad kuri nors teisė būtų paveldima iš kitų teisių lygių, nustatykite norimą teisę į <samp>NIEKADA</samp>. Jeigu nenorite vartotojui aprašyti tam tikros teisės, pasirinkite <samp>NE</samp>. Tokiu atveju, jeigu kuriame nors kitame lygyje ši teisę bus įjungta, ji bus paveldėta. Visų pažymėtų objektų (su varnele priešais juos) teisės bus nukopijuotos.',
	'ACL_SETTING'	=> 'Teisė',
	'ACL_TYPE_A_'	=> 'Administravimo teisės',
	'ACL_TYPE_F_'	=> 'Forumo teisės',
	'ACL_TYPE_M_'	=> 'Moderavimo teisės',
	'ACL_TYPE_U_'	=> 'Vartotojo teisės',
	'ACL_TYPE_GLOBAL_A_'	=> 'Administravimo teisės',
	'ACL_TYPE_GLOBAL_U_'	=> 'Vartotojo teisės',
	'ACL_TYPE_GLOBAL_M_'	=> 'Globalaus moderavimo teisės',
	'ACL_TYPE_LOCAL_M_'	=> 'Forumo moderavimo teisės',
	'ACL_TYPE_LOCAL_F_'	=> 'Forumo teisės',
	'ACL_NO'	=> 'Ne',
	'ACL_VIEW'	=> 'Teisių rodymas',
	'ACL_VIEW_EXPLAIN'	=> 'Čia galite matyti kaip vykdomos nustatytos vartotojo/grupės teisės. Raudonas kvadratas pažymi, kad vartotojas/grupė neturi tokios teisės, o žalias kvadratas - kad vartotojas/grupė turi tokią teisę.',
	'ACL_YES'	=> 'Taip',
	'ACP_ADMINISTRATORS_EXPLAIN'	=> 'Čia vartotojams ir grupėms galite priskirti administravimo teises. Visi vartotojai turintys administravimo teises galės matyti administratoriaus valdymo pultą.',
	'ACP_FORUM_MODERATORS_EXPLAIN'	=> 'Čia vartotojams ir grupėms galite priskirti forumo moderavimo teises. Norėdami duoti vartotojui teises į forumą, aprašyti globalaus moderavimo teises arba administravimo teises, naudokitės tam skirtu puslapiu.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'	=> 'Čia galite keisti kurie vartotojai ir grupės gali prieiti prie forumo. Norėdami paskirti moderatorius ar administratorius, naudokitės tam skirtu puslapiu.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'	=> 'Čia galite kopijuoti forumo teises iš vieno forumo į kitą ar kelis kitus forumus.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'	=> 'Čia vartotojams ir grupėms galite priskirti globalaus moderavimo teises. Šie moderatoriai yra tokie patys kaip ir paprasti moderatoriai išskyrus tai, kad jie turi priėjimą prie kiekvieno forumo diskusijose.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'	=> 'Čia grupėms galite nustatyti forumo teises.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'	=> 'Čia grupėms galite nustatyti globalias teises - vartotojo teises, globalaus moderavimo teises ir administravimo teises. Vartotojo teisės apima tokias galimybes kaip avatarų naudojimas, asmeninių žinučių siuntimas ir t.t.; globalaus moderavimo teisės apima tokias galimybes kaip pranešimų patvirtinimas, temų valdymas, blokų valdymas ir t.t. ir galiausiai administravimo teisės apima tokias sritis kaip teisių keitimas, BBKodų aprašymas, forumų valdymas ir t.t. Individualių vartotojų teisės turėtų būti keičiamos tik retais atvejais. Pirmenybė visada teikiama vartotojų paskyrimui į grupes ir po to teisių paskyrimui toms grupėms.',
	'ACP_ADMIN_ROLES_EXPLAIN'	=> 'Čia galite valdyti administravimo teisių roles. Rolės tai galiojančios teisės, jeigu pakeisite rolę, teisės objektui turinčiam tą rolę irgi pasikeis.',
	'ACP_FORUM_ROLES_EXPLAIN'	=> 'Čia galite valdyti forumo teisių roles. Rolės tai galiojančios teisės, jeigu pakeisite rolę, teisės objektui turinčiam tą rolę irgi pasikeis.',
	'ACP_MOD_ROLES_EXPLAIN'	=> 'Čia galite valdyti moderavimo teisių roles. Rolės tai galiojančios teisės, jeigu pakeisite rolę, teisės objektui turinčiam tą rolę irgi pasikeis.',
	'ACP_USER_ROLES_EXPLAIN'	=> 'Čia galite valdyti vartotojo teisių roles. Rolės tai galiojančios teisės, jeigu pakeisite rolę, teisės objektui turinčiam tą rolę irgi pasikeis.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'	=> 'Čia vartotojams galite nustatyti forumo teises.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'	=> 'Čia vartotojams galite nustatyti globalias teises - vartotojo teises, globalaus moderavimo teises ir administravimo teises. Vartotojo teisės apima tokias galimybes kaip avatarų naudojimas, asmeninių žinučių siuntimas ir t.t.; globalaus moderavimo teisės apima tokias galimybes kaip pranešimų patvirtinimas, temų valdymas, blokų valdymas ir t.t. ir galiausiai administravimo teisės apima tokias sritis kaip teisių keitimas, BBKodų aprašymas, forumų valdymas ir t.t. Individualių vartotojų teisės turėtų būti keičiamos tik retais atvejais. Norėdami pakeisti šiuos nustatymus dideliam vartotojų skaičiui visada naudokite grupių teisių sistemą. Pirmenybė visada teikiama vartotojų paskyrimui į grupes ir po to teisių paskyrimui toms grupėms.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'	=> 'Čia galite peržiūrėti vartotojams/grupėms galiojančias administravimo teises.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Čia galite peržiūrėti vartotojams/grupėms galiojančias globalaus moderavimo teises.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'	=> 'Čia galite peržiūrėti vartotojams/grupėms galiojančias forumo teises.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Čia galite peržiūrėti vartotojams/grupėms galiojančias forumo moderavimo teises.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'	=> 'Čia galite peržiūrėti vartotojams/grupėms galiojančias vartotojo teises.',
	'ADD_GROUPS'	=> 'Grupių pridėjimas',
	'ADD_PERMISSIONS'	=> 'Pridėti teises',
	'ADD_USERS'	=> 'Vartotojų pridėjimas',
	'ADVANCED_PERMISSIONS'	=> 'Išplėstinės teisės',
	'ALL_GROUPS'	=> 'Pažymėti visas grupes',
	'ALL_NEVER'	=> 'Visos <samp>NIEKADA</samp>',
	'ALL_NO'	=> 'Visos <samp>NE</samp>',
	'ALL_USERS'	=> 'Pažymėti visus vartotojus',
	'ALL_YES'	=> 'Visos <samp>TAIP</samp>',
	'APPLY_ALL_PERMISSIONS'	=> 'Išsaugoti visas teises',
	'APPLY_PERMISSIONS'	=> 'Išsaugoti teises',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Šiam objektui nustatytos teisės ir rolės galios tik jam pačiam ir tik visiems pažymėtiems objektams.',
	'AUTH_UPDATED'	=> 'Teisės pakeistos.',
	'COPY_PERMISSIONS_CONFIRM'	=> 'Ar tikrai norite tęsti šią operaciją? Atsiminkite, kad tai perrašys visas egzistuojančias pasirinktų forumų teises.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Forumas iš kurio norite nukopijuoti teises.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'	=> 'Forumai į kuriuos norite nukopijuoti teises.',
	'COPY_PERMISSIONS_FROM'	=> 'Kopijuoti teses iš',
	'COPY_PERMISSIONS_TO'	=> 'Kopijuoti teises į',
	'CREATE_ROLE'	=> 'Sukurti rolę',
	'CREATE_ROLE_FROM'	=> 'Naudoti nustatymus iš…',
	'CUSTOM'	=> 'Individualus…',
	'DEFAULT'	=> 'Standartinė',
	'DELETE_ROLE'	=> 'Ištrinti rolę',
	'DELETE_ROLE_CONFIRM'	=> 'Ar tikrai norite ištrinti šią rolę? Objektai, kuriems paskirta ši rolė, <strong>nepraras</strong> savo teisių nustatymų.',
	'DISPLAY_ROLE_ITEMS'	=> 'Parodyti objektus, kurie naudoja šią rolę',
	'EDIT_PERMISSIONS'	=> 'Keisti teises',
	'EDIT_ROLE'	=> 'Keisti rolę',
	'GROUPS_NOT_ASSIGNED'	=> 'Šiai rolei nepaskirta jokia grupė',
	'LOOK_UP_GROUP'	=> 'Grupės paieška',
	'LOOK_UP_USER'	=> 'Vartotojo paieška',
	'MANAGE_GROUPS'	=> 'Grupių valdymas',
	'MANAGE_USERS'	=> 'Vartotojų valdymas',
	'NO_AUTH_SETTING_FOUND'	=> 'Neaprašyti teisių nustatymai.',
	'NO_ROLE_ASSIGNED'	=> 'Rolė nenustatyta…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Nustatydami šią rolę nepakeisite teisių dešinėje. Jeigu norite ištrinti/išjungti visas teises naudokitės nuoroda “Visos <samp>NE</samp>”.',
	'NO_ROLE_AVAILABLE'	=> 'Rolių nėra',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Įrašykite rolės pavadinimą.',
	'NO_ROLE_SELECTED'	=> 'Tokios rolės nėra.',
	'NO_USER_GROUP_SELECTED'	=> 'Jūs nepasirinkote jokio vartotojo ar grupės.',
	'ONLY_FORUM_DEFINED'	=> 'Jūs pasirinkote tik forumą. Prašome dar pasirinkti bent vieną vartotoją ar grupę.',
	'PERMISSION_APPLIED_TO_ALL'	=> 'Teisės ir rolė bus pritaikyta visiems pažymėtiems objektams',
	'PLUS_SUBFORUMS'	=> '+Subforumai',
	'REMOVE_PERMISSIONS'	=> 'Ištrinti teises',
	'REMOVE_ROLE'	=> 'Ištrinti rolę',
	'RESULTING_PERMISSION'	=> 'Galutinė teisė',
	'ROLE'	=> 'Rolė',
	'ROLE_ADD_SUCCESS'	=> 'Rolė sukurta sėkmingai.',
	'ROLE_ASSIGNED_TO'	=> 'Vartotojai/Grupės paskirtos rolei %s',
	'ROLE_DELETED'	=> 'Rolė ištrinta sėkmingai.',
	'ROLE_DESCRIPTION'	=> 'Rolės aprašymas',
	'ROLE_ADMIN_FORUM'	=> 'Forumo administratorius',
	'ROLE_ADMIN_FULL'	=> 'Pilnas administravimas',
	'ROLE_ADMIN_STANDARD'	=> 'Standartinis administratorius',
	'ROLE_ADMIN_USERGROUP'	=> 'Vartotojų ir grupių administratorius',
	'ROLE_FORUM_BOT'	=> 'Roboto tipo priėjimas',
	'ROLE_FORUM_FULL'	=> 'Pilnas priėjimas',
	'ROLE_FORUM_LIMITED'	=> 'Ribotas priėjimas',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Ribotas priėjimas + Apklausos',
	'ROLE_FORUM_NOACCESS'	=> 'Priėjimo nėra',
	'ROLE_FORUM_ONQUEUE'	=> 'Moderavimo eilė',
	'ROLE_FORUM_POLLS'	=> 'Standartinis priėjimas + Apklausos',
	'ROLE_FORUM_READONLY'	=> 'Tik skaitymui',
	'ROLE_FORUM_STANDARD'	=> 'Standartinis priėjimas',
	'ROLE_FORUM_NEW_MEMBER'	=> 'Naujai registruoto vartotojo priėjimas',
	'ROLE_MOD_FULL'	=> 'Pilnas moderavimas',
	'ROLE_MOD_QUEUE'	=> 'Eilės moderatorius',
	'ROLE_MOD_SIMPLE'	=> 'Paprastas moderatorius',
	'ROLE_MOD_STANDARD'	=> 'Standartinis moderatorius',
	'ROLE_USER_FULL'	=> 'Visos galimybės',
	'ROLE_USER_LIMITED'	=> 'Ribotos galimybės',
	'ROLE_USER_NOAVATAR'	=> 'Be avataro',
	'ROLE_USER_NOPM'	=> 'Be asmeninių žinučių',
	'ROLE_USER_STANDARD'	=> 'Standartinės galimybės',
	'ROLE_USER_NEW_MEMBER'	=> 'Naujai registruoto vartotojo galimybės',
	'ROLE_DESCRIPTION_ADMIN_FORUM'	=> 'Gali valdyti forumus ir forumo teisių nustatymus.',
	'ROLE_DESCRIPTION_ADMIN_FULL'	=> 'Turi priėjimą prie visų šios diskusijų lentos administravimo funkcijų.<br />Nerekomenduojama.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'	=> 'Turi priėjimą prie daugelio administravimo funkcijų, tačiau negali naudotis serverio ir sistemos įrankiais.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'	=> 'Gali valdyti grupes ir vartotojus: keisti jų teises, nustatymus, valdyti blokus ir rangus.',
	'ROLE_DESCRIPTION_FORUM_BOT'	=> 'Ši rolė rekomenduojama robotams ir paieškos vorams.',
	'ROLE_DESCRIPTION_FORUM_FULL'	=> 'Gali naudotis visomis forumo galimybėmis įskaitant svarbių ir dažnų temų rašymu. Taip pat jiems negalioja apsauga nuo per didelio srauto.<br />Nerekomenduojama normaliems vartotojams.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'	=> 'Gali naudotis kai kuriomis forumo galimybėmis, bet negali prikabinti failų ar nurodyti pranešimo piktogramų.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Toks pats kaip Ribotas priėjimas, tik dar gali kurti ir apklausas.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'	=> 'Negali nei matyti, nei prieiti prie forumo.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'	=> 'Gali naudotis daugeliu forumo galimybių įskaitant prikabintus failus, bet jų pranešimai ir temos turi būti patvirtintos moderatoriaus.',
	'ROLE_DESCRIPTION_FORUM_POLLS'	=> 'Toks pats kaip Standartinis priėjimas, tik dar gali kurti ir apklausas.',
	'ROLE_DESCRIPTION_FORUM_READONLY'	=> 'Gali skaityti forumą, tačiau negali kurti naujų temų ar atsakinėti į kitus pranešimus.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'	=> 'Gali naudotis daugeliu forumo galimybių įskaitant prikabintus failus ir savų temų trynimą, bet negali užrakinti savo temų ar kurti apklausų.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'	=> 'Rolė specialiai naujai registruotų vartotojų grupei; joje yra <samp>NIEKADA</samp> teisių, kad nauji vartotojai negalėtų naudotis tam tikromis diskusijų lentos galimybėmis.',
	'ROLE_DESCRIPTION_MOD_FULL'	=> 'Gali naudotis visomis moderavimo galimybėmis įskaitant vartotojų blokavimą.',
	'ROLE_DESCRIPTION_MOD_QUEUE'	=> 'Gali naudotis tik moderavimo eile pranešimų patvirtinimui ir redagavimui.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'	=> 'Gali atlikti tik paprastus temų veiksmus. Negali siųsti perspėjimų ar naudoti moderavimo eilės.',
	'ROLE_DESCRIPTION_MOD_STANDARD'	=> 'Gali naudoti daugelį moderavimo įrankių, bet negali blokuoti vartotojų ar keisti pranešimo autorių.',
	'ROLE_DESCRIPTION_USER_FULL'	=> 'Gali naudoti visas galimas forumo vartotojų galimybes įskaitant savo vartotojo vardo keitimą ar apsaugos nuo per didelio srauto nepaisymą.<br />Nerekomenduojama.',
	'ROLE_DESCRIPTION_USER_LIMITED'	=> 'Gali naudoti kai kurias vartotojo galimybes. Neleidžiami prikabinti failai, el. laiškai ir greitosios žinutes.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'	=> 'Turi ribotas galimybes ir negali turėti avataro.',
	'ROLE_DESCRIPTION_USER_NOPM'	=> 'Turi ribotas galimybes ir negali naudoti asmeninių žinučių.',
	'ROLE_DESCRIPTION_USER_STANDARD'	=> 'Gali naudoti daugelį, bet ne visas vartotojo galimybes. Pavyzdžiui negali keisti savo vartotojo vardo ar nepaisyti apsaugos nuo per didelio srauto.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'	=> 'Rolė specialiai naujai registruotų vartotojų grupei; joje yra <samp>NIEKADA</samp> teisių, kad nauji vartotojai negalėtų naudotis tam tikromis diskusijų lentos galimybėmis.',
	'ROLE_DESCRIPTION_EXPLAIN'	=> 'Galite įrašyti trumpą aprašymą ką daro ši rolė arba kam ji reikalinga. Tekstas, kurį čia įrašysite, bus rodomas ir teisių puslapyje.',
	'ROLE_DESCRIPTION_LONG'	=> 'Rolės aprašymas yra per ilgas. Jis turi būti ne ilgesnis kaip 4000 simbolių.',
	'ROLE_DETAILS'	=> 'Rolės aprašymas',
	'ROLE_EDIT_SUCCESS'	=> 'Rolė pakeista sėkmingai.',
	'ROLE_NAME'	=> 'Rolės pavadinimas',
	'ROLE_NAME_ALREADY_EXIST'	=> 'Rolė <strong>%s</strong> šiam teisių tipui jau egzistuoja.',
	'ROLE_NOT_ASSIGNED'	=> 'Rolė dar nepaskirta.',
	'SELECTED_FORUM_NOT_EXIST'	=> 'Pasirinktas(i) forumas(ai) neegzistuoja.',
	'SELECTED_GROUP_NOT_EXIST'	=> 'Pasirinkta(os) grupė(ės) neegzistuoja.',
	'SELECTED_USER_NOT_EXIST'	=> 'Pasirinktas(i) vartotojas(ai) neegzistuoja.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Forumas, kurį čia pasirinksite, apims ir visus subforumus.',
	'SELECT_ROLE'	=> 'Pasirinkite rolę…',
	'SELECT_TYPE'	=> 'Pasirinkite tipą',
	'SET_PERMISSIONS'	=> 'Nustatyti teises',
	'SET_ROLE_PERMISSIONS'	=> 'Nustatyti rolės teises',
	'SET_USERS_PERMISSIONS'	=> 'Nustatyti vartotojų teises',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Nustatyti vartotojų teises forumuose',
	'TRACE_DEFAULT'	=> 'Standartiškai kiekvienos teisės reikšmė yra <samp>NE</samp> (nenustatyta). Tokiu būdu teisę galima pakeisti iš kitų lygių.',
	'TRACE_FOR'	=> 'Tiriama',
	'TRACE_GLOBAL_SETTING'	=> '%s (globali)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Kaip ir paskutinė teisių suma, grupės teisės reikšmė yra <samp>NIEKADA</samp>, todėl išlaikoma senoji reikšmė.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Kaip ir paskutinė teisių suma, grupės teisės reikšmė šiame forume yra <samp>NIEKADA</samp>, todėl išlaikoma senoji reikšmė.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Grupės teisės reikšmė yra <samp>NIEKADA</samp> ir tampa naująja sumine reikšme, kadangi ji dar nebuvo nustatyta (t.y. jos reikšmė buvo <samp>NE</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Grupės teisės reikšmė šiame forume yra <samp>NIEKADA</samp> ir tampa naująja sumine reikšme, kadangi ji dar nebuvo nustatyta (t.y. jos reikšmė buvo <samp>NE</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Grupės teisės reikšmė yra <samp>NIEKADA</samp>, ji pakeičia suminę <samp>TAIP</samp> reikšmę į <samp>NIEKADA</samp> reikšmę šiam vartotojui.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Grupės teisės reikšme šiame forume yra <samp>NIEKADA</samp>, ji pakeičia suminę <samp>TAIP</samp> reikšmę į <samp>NIEKADA</samp> reikšmę šiam vartotojui.',
	'TRACE_GROUP_NO'	=> 'Šios grupės teisės reikšmė yra <samp>NE</samp>, todėl išlaikoma senoji suminė reikšmė.',
	'TRACE_GROUP_NO_LOCAL'	=> 'Šios grupės teisės reikšmė šiame forume yra <samp>NE</samp>, todėl išlaikoma senoji suminė reikšmė.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Grupės teisės reikšmė yra <samp>TAIP</samp>, tačiau, kadangi suminė reikšmė yra <samp>NIEKADA</samp>, ji negali būti pakeista.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Grupės teisės reikšmė šiame forume yra <samp>TAIP</samp>, tačiau, kadangi suminė reikšmė yra <samp>NIEKADA</samp>, ji negali būti pakeista.',
	'TRACE_GROUP_YES_TOTAL_NO'	=> 'Grupės teisės reikšmė yra <samp>TAIP</samp> ir tampa naująja sumine reikšme, kadangi ji dar nebuvo nustatyta (t.y. jos reikšmė buvo <samp>NE</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Grupės teisės reikšmė šiame forume yra <samp>TAIP</samp> ir tampa naująja sumine reikšme, kadangi ji dar nebuvo nustatyta (t.y. jos reikšmė buvo <samp>NE</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'	=> 'Kaip ir suminė reikšmė, grupės teisės reikšmė yra <samp>TAIP</samp>, taigi išlaikoma senoji suminė reikšmė.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Kaip ir suminė reikšmė, grupės teisės reikšmė šiame forume yra <samp>TAIP</samp>, taigi išlaikoma senoji suminė reikšmė.',
	'TRACE_PERMISSION'	=> 'Teisės paveldėjimas - %s',
	'TRACE_RESULT'	=> 'Tyrimo rezultatas',
	'TRACE_SETTING'	=> 'Ištirti teisės paveldėjimą',
	'TRACE_USER_GLOBAL_YES_TOTAL_YES'	=> 'Kaip ir suminė reikšmė, nepriklausomos forumo vartotojo teisės reikšmė yra <samp>TAIP</samp>, taigi išlaikoma senoji suminė reikšmė. %sIštirti globalų teisių paveldėjimą%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'	=> 'Nepriklausomos forumo vartotojo teisės reikšmė yra <samp>TAIP</samp>, ji pakeičia lokalią suminę reikšmę <samp>NIEKADA</samp>. %sIštirti globalų teisių paveldėjimą%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Nepriklausomos forumo vartotojo teisės reikšmė yra <samp>NIEKADA</samp> ir neįtakoja lokalios teisės. %sIštirti globalų teisių paveldėjimą%s',
	'TRACE_USER_FOUNDER'	=> 'Vartotojas yra steigėjas, todėl visos administravimo teisių reikšmės yra <samp>TAIP</samp>.',
	'TRACE_USER_KEPT'	=> 'Vartotojo teisės reikšmė yra <samp>NE</samp>, todėl išlaikoma senoji suminė reikšmė.',
	'TRACE_USER_KEPT_LOCAL'	=> 'Vartotojo teisės reikšmė šiame forume yra <samp>NE</samp>, todėl išlaikoma senoji suminė reikšmė.',
	'TRACE_USER_NEVER_TOTAL_NEVER'	=> 'Kaip ir paskutinė teisių suma, vartotojo teisės reikšmė yra <samp>NIEKADA</samp>, todėl išlaikoma senoji reikšmė.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Kaip ir paskutinė teisių suma, vartotojo teisės reikšmė šiame forume yra <samp>NIEKADA</samp>, todėl išlaikoma senoji reikšmė.',
	'TRACE_USER_NEVER_TOTAL_NO'	=> 'Vartotojo teisės reikšmė yra <samp>NIEKADA</samp> ir tampa naująja sumine reikšme, kadangi ji buvo nustatyta į NE.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'	=> 'Vartotojo teisės reikšmė šiame forume yra <samp>NIEKADA</samp> ir tampa naująja sumine reikšme, kadangi ji buvo nustatyta į NE.',
	'TRACE_USER_NEVER_TOTAL_YES'	=> 'Vartotojo teisės reikšmė yra <samp>NIEKADA</samp>, ji pakeičia suminę reikšmę <samp>TAIP</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'	=> 'Vartotojo teisės reikšmė šiame forume yra <samp>NIEKADA</samp>, ji pakeičia suminę reikšmę <samp>TAIP</samp>.',
	'TRACE_USER_NO_TOTAL_NO'	=> 'Kaip ir suminė reikšmė, vartotojo teisės reikšmė yra <samp>NE</samp>, taigi suminė reikšmė tampa <samp>NIEKADA</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'	=> 'Kaip ir suminė reikšmė, vartotojo teisės reikšmė šiame forume yra <samp>NE</samp>, taigi suminė reikšmė tampa <samp>NIEKADA</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'	=> 'Vartotojo teisės reikšmė yra <samp>TAIP</samp>, tačiau, kadangi suminė reikšmė yra <samp>NIEKADA</samp>, ji negali būti pakeista.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'	=> 'Vartotojo teisės reikšmė šiame forume yra <samp>TAIP</samp>, tačiau, kadangi suminė reikšmė yra <samp>NIEKADA</samp>, ji negali būti pakeista.',
	'TRACE_USER_YES_TOTAL_NO'	=> 'Vartotojo teisės reikšmė yra <samp>TAIP</samp> ir tampa naująja sumine reikšme, kadangi ji buvo nustatyta į <samp>NE</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'	=> 'Vartotojo teisės reikšmė šiame forume yra <samp>TAIP</samp> ir tampa naująja sumine reikšme, kadangi ji buvo nustatyta į <samp>NE</samp>.',
	'TRACE_USER_YES_TOTAL_YES'	=> 'Kaip ir suminė reikšmė, vartotojo teisės reikšmė yra <samp>TAIP</samp>, taigi išlaikoma senoji suminė reikšmė.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'	=> 'Kaip ir suminė reikšmė, vartotojo teisės reikšmė šiame forume yra <samp>TAIP</samp>, taigi išlaikoma senoji suminė reikšmė.',
	'TRACE_WHO'	=> 'Kas',
	'TRACE_TOTAL'	=> 'Suma',
	'USERS_NOT_ASSIGNED'	=> 'Šiai rolei nepaskirtas joks vartotojas',
	'USER_IS_MEMBER_OF_DEFAULT'	=> 'yra šių pagrindinių grupių narys',
	'USER_IS_MEMBER_OF_CUSTOM'	=> 'yra šių individualių grupių narys',
	'VIEW_ASSIGNED_ITEMS'	=> 'Rodyti paskirtus objektus',
	'VIEW_LOCAL_PERMS'	=> 'Vietinės teisės',
	'VIEW_GLOBAL_PERMS'	=> 'Globalios teisės',
	'VIEW_PERMISSIONS'	=> 'Rodyti teises',
	'WRONG_PERMISSION_TYPE'	=> 'Pasirinkote neteisingą teisių tipą.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Blogas teisių formatas. phpBB negali jų teisingai apdoroti.',
));

?>