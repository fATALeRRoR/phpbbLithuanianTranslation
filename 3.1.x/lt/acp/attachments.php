<?php
/**
*
* acp_attachments.php [Lithuanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2012 phpBB Group
* @author 2012-09-06 - Vilius Šumskas
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Čia galite konfigūruoti pagrindinius prikabinamų failų ir jiems priskirtų specialių kategorijų nustatymus.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'	=> 'Čia galite pridėti, trinti, keisti arba išjungti išplėtimų grupes. Taip pat čia galite joms priskirti specialias kategorijas, keisti atsisiuntimo mechanizmą arba nurodyti piktogramą, kuri bus rodoma priešais prikabintą failą, kuris priklauso vienai ar kitai grupei.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'	=> 'Čia galite valdyti leistinus išplėtimus. Norėdami aktyvuoti čia esančius išplėtimus, turite naudotis išplėtimų grupių valdymo meniu. Mes tvirtai rekomenduojame neleisti skriptinimo kalbų išplėtimų (tokių kaip <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code> ir t.t.).',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Čia galite pamatyti visus prikabintus failus, kurie nepriklauso jokiam pranešimui. Taip dažniausiai atsitinka tada, kai vartotojas prikabina failą, bet nenusiunčia pranešimo. Jūs turite galimybę tokius failus ištrinti arba prikabinti juos prie egzistuojančių pranešimų. Norėdami prikabinti prie egzistuojančio pranešimo, turite žinoti jo ID numerį, kurį privalote nustatyti patys. Tokiu atveju galėsite prikabinti nusiųstą failą prie nurodyto pranešimo.',
	'ADD_EXTENSION'	=> 'Pridėti išplėtimą',
	'ADD_EXTENSION_GROUP'	=> 'Pridėti išplėtimų grupę',
	'ADMIN_UPLOAD_ERROR'	=> 'Klaida bandant prikabinti failą: “%s”.',
	'ALLOWED_FORUMS'	=> 'Leidžiama forumuose',
	'ALLOWED_FORUMS_EXPLAIN'	=> 'Leidimas failus su susietais išplėtimais prikabinti pažymėtuose (arba visuose) forumuose.',
	'ALLOWED_IN_PM_POST'	=> 'Leidžiama',
	'ALLOW_ATTACHMENTS'	=> 'Leisti prikabinti failus',
	'ALLOW_ALL_FORUMS'	=> 'Visuose forumuose',
	'ALLOW_IN_PM'	=> 'Leidžiama asmeniniame susirašinėjame',
	'ALLOW_PM_ATTACHMENTS'	=> 'Leisti prikabinti failus asmeninėse žinutėse',
	'ALLOW_SELECTED_FORUMS'	=> 'Tik forumuose pažymėtuose žemiau',
	'ASSIGNED_EXTENSIONS'	=> 'Susiję išplėtimai',
	'ASSIGNED_GROUP'	=> 'Susijusios išplėtimų grupės',
	'ATTACH_EXTENSIONS_URL'	=> 'Išplėtimai',
	'ATTACH_EXT_GROUPS_URL'	=> 'Išplėtimų grupės',
	'ATTACH_ID'	=> 'ID',
	'ATTACH_MAX_FILESIZE'	=> 'Maksimalus failo dydis',
	'ATTACH_MAX_FILESIZE_EXPLAIN'	=> 'Maksimalus kiekvieno failo dydis. Jeigu įvesite 0, failo dydis bus ribojamas tik jūsų PHP nustatymais.',
	'ATTACH_MAX_PM_FILESIZE'	=> 'Maksimalus failo dydis asmeniniame susirašinėjime',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Maksimalus kiekvieno failo dydis asmeniniame susirašinėjime, kur 0 reiškia nelimituotą dydį.',
	'ATTACH_ORPHAN_URL'	=> 'Pasimetę failai',
	'ATTACH_POST_ID'	=> 'Pranešimo ID',
	'ATTACH_QUOTA'	=> 'Visų prikabintų failų kvota',
	'ATTACH_QUOTA_EXPLAIN'	=> 'Maksimali visos diskusijų lentos failų naudojama disko vieta, kur 0 reiškia nelimituotą vietą.',
	'ATTACH_TO_POST'	=> 'Prikabinti failą prie pranešimo',
	'CAT_FLASH_FILES'	=> 'Flash failai',
	'CAT_IMAGES'	=> 'Paveikslėliai',
	'CAT_QUICKTIME_FILES'	=> 'Quicktime media failai',
	'CAT_RM_FILES'	=> 'RealMedia failai',
	'CAT_WM_FILES'	=> 'Windows Media failai',
	'CHECK_CONTENT'	=> 'Tikrinti prikabintus failus',
	'CHECK_CONTENT_EXPLAIN'	=> 'Kai kurias naršykles galima apgauti nurodant netikrą tipą siučiamiems failams. Šis parametras užtikrina, kad tokie failai būtų atmesti.',
	'CREATE_GROUP'	=> 'Sukurti naują grupę',
	'CREATE_THUMBNAIL'	=> 'Sukurti sumažintą paveikslėlį',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Kurti sumažintą paveikslėlį visose įmanomose situacijose.',
	'DEFINE_ALLOWED_IPS'	=> 'Leistinų IP/Internetinių adresų aprašymas',
	'DEFINE_DISALLOWED_IPS'	=> 'Neleistinų IP/Internetinių adresų aprašymas',
	'DOWNLOAD_ADD_IPS_EXPLAIN'	=> 'Norėdami įrašyti keletą skirtingų IP adresų arba Internetinių vardų, įrašykite juos į atskirą eilutę. Norėdami nurodyti IP adresų intervalą, atskirkite juos brūkšneliu (-). Dalinėms reikšmėms aprašyti naudokite “*”.',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Jūs galite ištrinti (arba pašalinti išskirtus) keletą IP adresų vienu metu. Tai galite padaryti pasinaudoję klaviatūra ar pele ir surinkę teisingą kombinaciją jūsų kompiuteriui ir naršyklei. Išskirti IP adresai žymimi mėlyna spalva.',
	'DISPLAY_INLINED'	=> 'Rodyti paveikslėlius pranešimuose',
	'DISPLAY_INLINED_EXPLAIN'	=> 'Jeigu nustatysite į Ne, paveikslėliai bus rodomi kaip nuorodos.',
	'DISPLAY_ORDER'	=> 'Prikabintų failų rodymo tvarka',
	'DISPLAY_ORDER_EXPLAIN'	=> 'Rūšiuoti prikabintus failus pagal laiką.',
	'EDIT_EXTENSION_GROUP'	=> 'Redaguoti išplėtimų grupę',
	'EXCLUDE_ENTERED_IP'	=> 'Įjunkite šį nustatymą norėdami išskirti įrašytus IP/Internetinius adresus.',
	'EXCLUDE_FROM_ALLOWED_IP'	=> 'Išskirti IP iš leistinų IP/Internetinių adresų',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Išskirti IP iš draudžiamų IP/Internetinių adresų',
	'EXTENSIONS_UPDATED'	=> 'Išplėtimai sėkmingai atnaujinti.',
	'EXTENSION_EXIST'	=> 'Išplėtimas %s jau egzistuoja.',
	'EXTENSION_GROUP'	=> 'Išplėtimų grupė',
	'EXTENSION_GROUPS'	=> 'Išplėtimų grupės',
	'EXTENSION_GROUP_DELETED'	=> 'Išplėtimų grupė sėkmingai ištrinta.',
	'EXTENSION_GROUP_EXIST'	=> 'Išplėtimų grupė %s jau egzistuoja.',
	'EXT_GROUP_ARCHIVES'	=> 'Archyvai',
	'EXT_GROUP_DOCUMENTS'	=> 'Dokumentai',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Failai, kuriuos galima atsisiųsti',
	'EXT_GROUP_FLASH_FILES'	=> 'Flash failai',
	'EXT_GROUP_IMAGES'	=> 'Paveikslėliai',
	'EXT_GROUP_PLAIN_TEXT'	=> 'Tekstiniai failai',
	'EXT_GROUP_QUICKTIME_MEDIA'	=> 'Quicktime Media failai',
	'EXT_GROUP_REAL_MEDIA'	=> 'RealMedia failai',
	'EXT_GROUP_WINDOWS_MEDIA'	=> 'Windows Media failai',
	'GO_TO_EXTENSIONS'	=> 'Eiti į išplėtimų valdymo langą',
	'GROUP_NAME'	=> 'Grupės pavadinimas',
	'IMAGE_LINK_SIZE'	=> 'Paveikslėlio nuorodos dimensijos',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Jeigu paveikslėlis didesnis nei šie dydžiai, rodyti paveikslėlį kaip tekstinę nuorodą. Norėdami išjungti, nustatykite šias reikšmės į 0px ir 0px.',
	'IMAGICK_PATH'	=> 'Kelias iki Imagemagick',
	'IMAGICK_PATH_EXPLAIN'	=> 'Pilnas kelias iki Imagemagick konvertavimo aplikacijos, pvz.: <samp>/usr/bin/</samp>.',
	'MAX_ATTACHMENTS'	=> 'Maksimalus prikabintų failų skaičius pranešime',
	'MAX_ATTACHMENTS_PM'	=> 'Maksimalus prikabintų failų skaičius žinutėje',
	'MAX_EXTGROUP_FILESIZE'	=> 'Maksimalus failo dydis',
	'MAX_IMAGE_SIZE'	=> 'Maksimalus paveikslėlio dydis',
	'MAX_IMAGE_SIZE_EXPLAIN'	=> 'Maksimalus prikabinamo paveikslėlio dydis. Norėdami išjungti dimensijų patikrinimą, nustatykite šias reikšmes į 0px ir 0px.',
	'MAX_THUMB_WIDTH'	=> 'Maksimalus sumažinto paveikslėlio plotis pikseliais',
	'MAX_THUMB_WIDTH_EXPLAIN'	=> 'Sugeneruoto sumažinto paveikslėlio plotis nebus didesnis nei nustatytas čia.',
	'MIN_THUMB_FILESIZE'	=> 'Minimalus sumažinto paveikslėlio failo dydis',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'Nekurti sumažintų paveikslėlių failams, kurių dydis yra mažesnis už nustatytąjį čia.',
	'MODE_INLINE'	=> 'Tekste',
	'MODE_PHYSICAL'	=> 'Fizinis',
	'NOT_ALLOWED_IN_PM'	=> 'Leidžiama tik pranešimuose',
	'NOT_ALLOWED_IN_PM_POST'	=> 'Neleidžiama',
	'NOT_ASSIGNED'	=> 'Nesusijęs',
	'NO_EXT_GROUP'	=> 'Nėra',
	'NO_EXT_GROUP_NAME'	=> 'Neįvestas grupės pavadinimas',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Nenurodyta išplėtimų grupė.',
	'NO_FILE_CAT'	=> 'Nėra',
	'NO_IMAGE'	=> 'Be paveikslėlio',
	'NO_THUMBNAIL_SUPPORT'	=> 'Sumažintų paveikslėlio galimybė yra išjungta. Šiai galimybei reikalingas GD PHP išplėtimas arba Imagemagick programinė įranga. Deja abu nerasti.',
	'NO_UPLOAD_DIR'	=> 'Nurodytas įkėlimo katalogas neegzistuoja.',
	'NO_WRITE_UPLOAD'	=> 'Nurodytas įkėlimo katalogas yra tik skaitymui. Pakeiskite katalogo teises, kad jūsų serveris galėtų į jį rašyti.',
	'ONLY_ALLOWED_IN_PM'	=> 'Leidžiama tik asmeninėse žinutėse',
	'ORDER_ALLOW_DENY'	=> 'Leisti',
	'ORDER_DENY_ALLOW'	=> 'Uždrausti',
	'REMOVE_ALLOWED_IPS'	=> 'Ištrinti arba pašalinti išskirtus <em>leistinus</em> IP/Internetinius adresus',
	'REMOVE_DISALLOWED_IPS'	=> 'Ištrinti arba pašalinti išskirtus <em>draudžiamus</em> IP/Internetinius adresus',
	'SEARCH_IMAGICK'	=> 'Ieškoti Imagemagick',
	'SECURE_ALLOW_DENY'	=> 'Leidžiamų/Draudžiamų sąrašas',
	'SECURE_ALLOW_DENY_EXPLAIN'	=> 'Kai įjungti saugūs atsisiuntimai, pakeisti leidžiamų/draudžiamų adresų sąrašo elgseną arba į <strong>baltąjį sąrašą</strong> (Leisti), arba į <strong>juodąjį sąrašą</strong> (Uždrausti).',
	'SECURE_DOWNLOADS'	=> 'Įjungti saugius atsisiuntimus',
	'SECURE_DOWNLOADS_EXPLAIN'	=> 'Jeigu šis nustatymas įjungtas, prikabintus failus galima atsisiųsti tik iš jūsų nustatytų IP/Internetinių adresų.',
	'SECURE_DOWNLOAD_NOTICE'	=> 'Saugūs atsisiuntimai yra išjungti. Visi nustatymai žemiau galioja tik įjungus saugius atsisiuntimus.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'	=> 'IP adresų sąrašas sėkmingai atnaujintas.',
	'SECURE_EMPTY_REFERRER'	=> 'Leisti tuščią šaltinį (referrer)',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Saugių atsisiuntimų veikimas yra paremtas adreso šaltiniu (referrer). Ar norite leisti atsisiuntimus toms naršyklėms, kuriose šaltinis tuščias?',
	'SETTINGS_CAT_IMAGES'	=> 'Paveikslėlio kategorijos nustatymai',
	'SPECIAL_CATEGORY'	=> 'Speciali kategorija',
	'SPECIAL_CATEGORY_EXPLAIN'	=> 'Specialių kategorijų pagalba, prikabinti failai pranešimuose vaizduojami skirtingai.',
	'SUCCESSFULLY_UPLOADED'	=> 'Sėkmingai nusiųsta.',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Išplėtimų grupė sėkmingai pridėta.',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Išplėtimų grupė sėkmingai atnaujinta.',
	'UPLOADING_FILES'	=> 'Failų siuntimas',
	'UPLOADING_FILE_TO'	=> 'Failas “%1$s” kabinamas prie pranešimo %2$d…',
	'UPLOAD_DENIED_FORUM'	=> 'Jūs neturite teisių siųsi failus į forumą “%s”.',
	'UPLOAD_DIR'	=> 'Saugojimo katalogas',
	'UPLOAD_DIR_EXPLAIN'	=> 'Kelias iki prikabintų failų saugojimo katalogo. Atsiminkite, kad jeigu pakeisite šį katalogą, jau egzistuojančius failus reikės nukopijuoti į jį patiems.',
	'UPLOAD_ICON'	=> 'Failo piktograma',
	'UPLOAD_NOT_DIR'	=> 'Nurodyta saugojimo vieta nėra katalogas.',
));

?>