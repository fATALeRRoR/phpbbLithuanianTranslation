<?php
/**
*
* acp_groups.php [Lithuanian]
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
	'ACP_GROUPS_MANAGE_EXPLAIN'	=> 'Čia galite valdyti visas vartotojų grupes. Galite ištrinti, sukurti ir keisti egzistuojančias grupes. Taip pat galite pasirinkti grupių lyderius, atidaryti/paslėpti/uždaryti grupę ir nurodyti jos pavadinimą bei aprašymą.',
	'ADD_USERS'	=> 'Vartotojų pridėjimas',
	'ADD_USERS_EXPLAIN'	=> 'Čia galite į grupę įtraukti naujus vartotojus. Galite pasirinkti ar pasirinktiems vartotojams ši grupė bus pagrindinė. Taip pat galite padaryti juos grupės lyderiais. Kiekvieną vartotojo vardą rašykite naujoje eilutėje.',
	'COPY_PERMISSIONS'	=> 'Kopijuoti teises nuo',
	'COPY_PERMISSIONS_EXPLAIN'	=> 'Jeigu kopijuosite teises, grupė turės tokias pačias teises, kokias pasirinksite čia.',
	'CREATE_GROUP'	=> 'Sukurti naują grupę',
	'GROUPS_NO_MEMBERS'	=> 'Grupėje nėra narių',
	'GROUPS_NO_MODS'	=> 'Grupėje nėra lyderių',
	'GROUP_APPROVE'	=> 'Patvirtinti narį',
	'GROUP_APPROVED'	=> 'Patvirtinti narius',
	'GROUP_AVATAR'	=> 'Grupės avataras',
	'GROUP_AVATAR_EXPLAIN'	=> 'Šis paveikslėlis bus rodomas grupės valdymo puslapyje.',
	'GROUP_CLOSED'	=> 'Uždara',
	'GROUP_COLOR'	=> 'Grupės spalva',
	'GROUP_COLOR_EXPLAIN'	=> 'Nurodo kokia spalva turi būti rodomi grupes narių vartotojų vardai. Jeigu norite naudoti standartinę spalvą, palikite tuščią.',
	'GROUP_CONFIRM_ADD_USER'	=> 'Ar tikrai norite pridėti vartotoją %1$s į šią grupę?',
	'GROUP_CONFIRM_ADD_USERS'	=> 'Ar tikrai norite pridėti vartotojus %1$s į šią grupę?',
	'GROUP_CREATED'	=> 'Grupė sukurta sėkmingai.',
	'GROUP_DEFAULT'	=> 'Nustatyti grupę nariui kaip pagrindinę',
	'GROUP_DEFS_UPDATED'	=> 'Pakeista pagrindinė grupė pasirinktiems nariams.',
	'GROUP_DELETE'	=> 'Pašalinti narį iš grupės',
	'GROUP_DELETED'	=> 'Grupė ištrinta, o vartotojų pagrindinės grupės sėkmingai pakeistos.',
	'GROUP_DEMOTE'	=> 'Pažeminti pareigose grupės lyderį',
	'GROUP_DESC'	=> 'Grupės aprašymas',
	'GROUP_DETAILS'	=> 'Grupės aprašymas',
	'GROUP_EDIT_EXPLAIN'	=> 'Čia galite keisti egzistuojančią grupę. Galite keisti jos pavadinimą, aprašymą ir tipą (atvira, uždara, ir t.t.). Taip pat galite nurodyti kitus grupės nustatymus, tokius kaip spalva, rangas ir t.t. Pirmenybė teikiama čia padarytiems pakeitimams, o ne vartotojų nustatymams. Atsiminkite, kad grupės nariai gali turėti savo avatarą, nebent uždrausite tai per vartotojo teises.',
	'GROUP_ERR_USERS_EXIST'	=> 'Nurodytas vartotojas jau yra šios grupės narys.',
	'GROUP_FOUNDER_MANAGE'	=> 'Gali valdyti tik steigėjas',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Grupę valdyti galės tik diskusijų steigėjas. Grupės nariai vis tiek galės matyti grupę ir kitus grupės narius.',
	'GROUP_HIDDEN'	=> 'Slapta',
	'GROUP_LANG'	=> 'Grupės kalba',
	'GROUP_LEAD'	=> 'Grupės lyderiai',
	'GROUP_LEADERS_ADDED'	=> 'Nauji lyderiai pridėti į grupę sėkmingai.',
	'GROUP_LEGEND'	=> 'Rodyti grupę legendoje',
	'GROUP_LIST'	=> 'Dabartiniai nariai',
	'GROUP_LIST_EXPLAIN'	=> 'Tai visas dabartinių šios grupės narių sąrašas. Jeigu reikia, čia galite ištrinti (išskyrus specialias grupes) arba pridėti naujus narius.',
	'GROUP_MEMBERS'	=> 'Grupės nariai',
	'GROUP_MEMBERS_EXPLAIN'	=> 'Tai visas dabartinių šios grupės narių sąrašas. Atskiruose skyriuose galite matyti grupės lyderius, vartotojus, kurių narystė dar nepatvirtinta ir esamus narius. Iš čia galite valdyti kas yra šios grupės narys ir kokia jų rolė. Norėdami pašalinti lyderį, bet vis dar išlaikyti jį grupėje netrinkite jo, o pažeminkite pareigose. Panašiai, kad padaryti grupės narį lyderiu, galite paaukštinti esamą narį pareigose.',
	'GROUP_MESSAGE_LIMIT'	=> 'Grupės asmeninių žinučių skaičius kataloge',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Šis nustatymas bus naudojamas vietoj vartotojo lygio asmeninių žinučių skaičiaus kataloge nustatymo. Jeigu norite naudoti vartotojo lygio nustatymą, įrašykite 0.',
	'GROUP_MODS_ADDED'	=> 'Nauji lyderiai pridėti į grupę sėkmingai.',
	'GROUP_MODS_DEMOTED'	=> 'Grupės lyderiai pažeminti pareigose sėkmingai.',
	'GROUP_MODS_PROMOTED'	=> 'Grupės nariai paskelbti lyderiais sėkmingai.',
	'GROUP_NAME'	=> 'Grupės pavadinimas',
	'GROUP_NAME_TAKEN'	=> 'Toks grupės pavadinimas jau naudojamas. Įrašykite kitokį pavadinimą.',
	'GROUP_OPEN'	=> 'Atvira',
	'GROUP_PENDING'	=> 'Narystės patvirtinimo laukiantys vartotojai',
	'GROUP_MAX_RECIPIENTS'	=> 'Maksimalus asmeninės žinutės gavėjų skaičius',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Maksimalus leistinas gavėjų skaičius kiekvienoje asmeninėje žinutė. Jeigu įrašysite 0, bus naudojamas bendras lentos nustatymas.',
	'GROUP_OPTIONS_SAVE'	=> 'Grupės nustatymai',
	'GROUP_PROMOTE'	=> 'Paskelbti grupės lyderiu',
	'GROUP_RANK'	=> 'Grupės rangas',
	'GROUP_RECEIVE_PM'	=> 'Grupė gali gauti asmenines žinutes',
	'GROUP_RECEIVE_PM_EXPLAIN'	=> 'Atsiminkite, kad nežiūrint į šį nustatymą, paslėptos grupės negali gauti žinučių.',
	'GROUP_REQUEST'	=> 'Reikalauja patvirtinimo',
	'GROUP_SETTINGS_SAVE'	=> 'Grupės nustatymai',
	'GROUP_SKIP_AUTH'	=> 'Netaikyti grupės teisių grupės lyderiui',
	'GROUP_SKIP_AUTH_EXPLAIN'	=> 'Jeigu šis parametras įjungtas, grupės lyderis daugiau nebepaveldės grupės teisių.',
	'GROUP_TYPE'	=> 'Grupės tipas',
	'GROUP_TYPE_EXPLAIN'	=> 'Tai nurodo kas gali prisijungti ir matyti grupę.',
	'GROUP_UPDATED'	=> 'Grupės atnaujinta sėkmingai.',
	'GROUP_USERS_ADDED'	=> 'Nauji vartotojai pridėti prie grupės sėkmingai.',
	'GROUP_USERS_EXIST'	=> 'Pasirinkti vartotojai jau yra grupės nariai.',
	'GROUP_USERS_REMOVE'	=> 'Vartotojai pašalinti iš grupės, o jų pagrindinės grupės pakeistos sėkmingai.',
	'MAKE_DEFAULT_FOR_ALL'	=> 'Nustatyti grupę kaip pagrindinę visiems nariams',
	'MEMBERS'	=> 'Nariai',
	'NO_GROUP'	=> 'Nenurodyta grupė.',
	'NO_GROUPS_CREATED'	=> 'Grupių kol kas nėra.',
	'NO_PERMISSIONS'	=> 'Nekopijuoti teisių',
	'NO_USERS'	=> 'Jūs neįrašėte nei vieno vartotojo.',
	'NO_USERS_ADDED'	=> 'Nepridėtas nei vienas vartotojas.',
	'NO_VALID_USERS'	=> 'Jūs neįvedėte nei vieno vartotojo, su kuriuo galima atlikti šį veiksmą.',
	'SPECIAL_GROUPS'	=> 'Specialios grupės',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Tai specialios grupės, kurių negalima ištrinti arba tiesiogiai pakeisti. Tačiau jūs galite pridėti naujus vartotojus arba keisti pagrindinius nustatymus.',
	'TOTAL_MEMBERS'	=> 'Iš viso narių',
	'USERS_APPROVED'	=> 'Vartotojai patvirtinti sėkmingai.',
	'USER_DEFAULT'	=> 'Standartinis vartotojo',
	'USER_DEF_GROUPS'	=> 'Vartotojo aprašytos grupės',
	'USER_DEF_GROUPS_EXPLAIN'	=> 'Tai grupės, kurias sukūrėte jūs arba kitas diskusijų administratorius. Čia galite valdyti grupės narystę, keisti grupės nustatymus arba net ištrinti grupę.',
	'USER_GROUP_DEFAULT'	=> 'Padaryti pagrindine grupe',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Jeigu įjungsite šį parametrą, ši grupė taps visų pridėtų vartotojų pagrindine grupe.',
	'USER_GROUP_LEADER'	=> 'Padaryti grupės lyderiu',
));

?>