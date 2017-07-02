<?php
/**
*
* posting.php [Lithuanian]
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
	'ADD_ATTACHMENT'	=> 'Failų prikabinimas',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Jeigu norite prikabinti vieną ar daugiau failų, užpildykite formą žemiau.',
	'ADD_FILE'	=> 'Prikabinti failą',
	'ADD_POLL'	=> 'Apklausos kūrimas',
	'ADD_POLL_EXPLAIN'	=> 'Jeigu nenorite, kad jūsų temą turėtų apklausą, palikite šiuos laikus tuščius.',
	'ALREADY_DELETED'	=> 'Atsiprašome, tačiau šis pranešimas jau ištrintas.',
	'ATTACH_DISK_FULL'	=> 'Nepakanka laisvos vietos diske.',
	'ATTACH_QUOTA_REACHED'	=> 'Atsiprašome, tačiau buvo pasiekta diskusijų lentos kvota.',
	'ATTACH_SIG'	=> 'Pridėti parašą (parašus galite keisti per vartotojo valdymo pultą)',
	'BBCODE_A_HELP'	=> 'Failo įtraukimas į pranešimą: [attachment=]failopavadinimas.gal[/attachment]',
	'BBCODE_B_HELP'	=> 'Paryškintas tekstas: [b]tekstas[/b]',
	'BBCODE_C_HELP'	=> 'Kodo rodymas: [code]kodas[/code]',
	'BBCODE_D_HELP'	=> 'Flash failas: [flash=plotis,aukštis]http://url[/flash]',
	'BBCODE_F_HELP'	=> 'Šrifto dydis: [size=85]mažas tekstas[/size]',
	'BBCODE_IS_OFF'	=> '%sBBKodas%s yra <em>IŠJUNGTAS</em>',
	'BBCODE_IS_ON'	=> '%sBBKodas%s yra <em>ĮJUNGTAS</em>',
	'BBCODE_I_HELP'	=> 'Pasviręs tekstas: [i]tekstas[/i]',
	'BBCODE_L_HELP'	=> 'Sąrašas: [list][*]tekstas[/list]',
	'BBCODE_LISTITEM_HELP'	=> 'Sąrašo elementas: [*]tekstas',
	'BBCODE_O_HELP'	=> 'Surūšiuotas sąrašas: pavyzdžiui [list=1][*]Pirmas elementas[/list] arba [list=a][*]Elementas a[/list]',
	'BBCODE_P_HELP'	=> 'Paveikslėlio įkėlimas: [img]http://vieta_iki_paveikslėlio[/img]',
	'BBCODE_Q_HELP'	=> 'Cituojamas tekstas: [quote]tekstas[/quote]',
	'BBCODE_S_HELP'	=> 'Šrifto spalva: [color=red]tekstas[/color]  Pastaba: taip pat galite naudoti ir color=#FF0000',
	'BBCODE_U_HELP'	=> 'Pabrauktas tekstas: [u]tekstas[/u]',
	'BBCODE_W_HELP'	=> 'URL įtraukimas: [url]http://url[/url] arba [url=http://url]Tekstas apie URL[/url]',
	'BBCODE_Y_HELP'	=> 'Sąrašas: įtraukti elementą į sąrašą',
	'BUMP_ERROR'	=> 'Jūs negalite taip greitai rašyti kito pranešimo.',
	'CANNOT_DELETE_REPLIED'	=> 'Jūs galite ištrinti tik tuos pranešimus į kuriuos nėra atsakyta.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Šis pranešimas buvo užrakintas. Jus nebegalite jo redaguoti.',
	'CANNOT_EDIT_TIME'	=> 'Jūs nebegalite redaguoti arba ištrinti šio pranešimo.',
	'CANNOT_POST_ANNOUNCE'	=> 'Jūs negalite kurti svarbių temų.',
	'CANNOT_POST_STICKY'	=> 'Jūs negalite kurti dažnų temų.',
	'CHANGE_TOPIC_TO'	=> 'Pakeisti temos tipą į',
	'CLOSE_TAGS'	=> 'Uždaryti žymes',
	'CURRENT_TOPIC'	=> 'Dabartinė tema',
	'DELETE_FILE'	=> 'Ištrinti failą',
	'DELETE_MESSAGE'	=> 'Ištrinti žinutę',
	'DELETE_MESSAGE_CONFIRM'	=> 'Ar tikrai norite ištrinti šią žinutę?',
	'DELETE_OWN_POSTS'	=> 'Atsiprašome, bet jūs galite trinti tik savo pranešimus.',
	'DELETE_POST_CONFIRM'	=> 'Ar tikrai norite ištrinti šį pranešimą?',
	'DELETE_POST_WARN'	=> 'Jeigu ištrinsite, gražinti pranešimo nebebus įmanoma',
	'DISABLE_BBCODE'	=> 'Išjungti BBKodą',
	'DISABLE_MAGIC_URL'	=> 'Išjungti automatinį URL adresų apdorojimą',
	'DISABLE_SMILIES'	=> 'Išjungti šypsenėles',
	'DISALLOWED_CONTENT'	=> 'Siuntimas nutrūko, kadangi siunčiamas failas yra kenkėjiškas.',
	'DISALLOWED_EXTENSION'	=> '%s yra neleistina failo galūnė.',
	'DRAFT_LOADED'	=> 'Juodraštis užkrautas į pranešimo rašymo lauką. Dabar galite baigti savo pranešimą.<br />Juodraštis bus ištrintas kai tik išsiųsite pranešimą.',
	'DRAFT_LOADED_PM'	=> 'Juodraštis užkrautas į žinutės rašymo lauką. Dabar galite baigti savo asmeninę žinutę.<br />Juodraštis bus ištrintas kai tik išsiųsite asmeninę žinutę.',
	'DRAFT_SAVED'	=> 'Juodraštis sėkmingai išsaugotas.',
	'DRAFT_TITLE'	=> 'Juodraščio pavadinimas',
	'EDIT_REASON'	=> 'Pranešimo redagavimo priežastis',
	'EMPTY_FILEUPLOAD'	=> 'Įkeltas failas yra tuščias.',
	'EMPTY_MESSAGE'	=> 'Įrašykite žinutės tekstą.',
	'EMPTY_REMOTE_DATA'	=> 'Failas neįkeltas, pabandykite įkelti failą rankiniu būdu.',
	'FLASH_IS_OFF'	=> '[flash] yra <em>IŠJUNGTAS</em>',
	'FLASH_IS_ON'	=> '[flash] yra <em>ĮJUNGTAS</em>',
	'FLOOD_ERROR'	=> 'Jūs negalite taip greitai rašyti kito pranešimo.',
	'FONT_COLOR'	=> 'Šrifto spalva',
	'FONT_COLOR_HIDE'	=> 'Paslėpti šrifto spalvą',
	'FONT_HUGE'	=> 'Milžiniškas',
	'FONT_LARGE'	=> 'Didelis',
	'FONT_NORMAL'	=> 'Normalus',
	'FONT_SIZE'	=> 'Šrifto dydis',
	'FONT_SMALL'	=> 'Mažas',
	'FONT_TINY'	=> 'Smulkus',
	'GENERAL_UPLOAD_ERROR'	=> 'Nepavyko prikabinti failo prie %s.',
	'IMAGES_ARE_OFF'	=> '[img] yra <em>IŠJUNGTAS</em>',
	'IMAGES_ARE_ON'	=> '[img] yra <em>ĮJUNGTAS</em>',
	'INVALID_FILENAME'	=> '%s yra neleistinas failo pavadinimas.',
	'LOAD'	=> 'Užkrauti',
	'LOAD_DRAFT'	=> 'Užkrauti juodraštį',
	'LOAD_DRAFT_EXPLAIN'	=> 'Čia galite pasirinkti juodraštį, kurį galėsite tęsti. Dabartinis pranešimas bus atšauktas, visas dabartinio pranešimo turinys bus ištrintas. Juodraščius galite peržiūrėti, redaguoti ir trinti per vartotojo valdymo pultą.',
	'LOGIN_EXPLAIN_BUMP'	=> 'Norėdami priminti apie temas šiame forume, turite prisijungti.',
	'LOGIN_EXPLAIN_DELETE'	=> 'Norėdami trinti pranešimus šiame forume, turite prisijungti.',
	'LOGIN_EXPLAIN_POST'	=> 'Norėdami rašyti pranešimus į šį forumą, turite prisijungti.',
	'LOGIN_EXPLAIN_QUOTE'	=> 'Norėdami cituoti pranešimus šiame forume, turite prisijungti.',
	'LOGIN_EXPLAIN_REPLY'	=> 'Norėdami rašyti atsakymus temose šiame forume, turite prisijungti.',
	'MAX_FONT_SIZE_EXCEEDED'	=> 'Jūs galite naudoti tik šriftą, kurio dydis neviršija %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> 'Jūsų flash failai gali būti ne didesni nei %1$d pikselių aukščio.',
	'MAX_FLASH_WIDTH_EXCEEDED'	=> 'Jūsų flash failai gali būti ne platesni nei %1$d pikselių pločio.',
	'MAX_IMG_HEIGHT_EXCEEDED'	=> 'Jūsų paveikslėliai negali būti didesni nei %1$d pikselių aukščio.',
	'MAX_IMG_WIDTH_EXCEEDED'	=> 'Jūsų paveikslėliai negali būti platesni nei %1$d pikselių pločio.',
	'MESSAGE_BODY_EXPLAIN'	=> 'Čia galite įrašyti savo žinutę, kuris turi būti ne didesnis nei <strong>%d</strong> simboliai(ių).',
	'MESSAGE_DELETED'	=> 'Ši žinutė sėkmingai ištrinta.',
	'MORE_SMILIES'	=> 'Rodyti daugiau šypsenėlių',
	'NOTIFY_REPLY'	=> 'Perspėti mane, kai bus parašytas atsakymas',
	'NOT_UPLOADED'	=> 'Failo įkelti nepavyko.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Jūs negalite ištrinti egzistuojančių apklausos atsakymų variantų.',
	'NO_PM_ICON'	=> 'AŽ ikonos nėra',
	'NO_POLL_TITLE'	=> 'Jūs turite įrašyti apklausos pavadinimą.',
	'NO_POST'	=> 'Pasirinkto pranešimo nėra.',
	'NO_POST_MODE'	=> 'Nepasirinktas rašymo režimas.',
	'PARTIAL_UPLOAD'	=> 'Failas įkeltas tik dalinai.',
	'PHP_SIZE_NA'	=> 'Prikabintas failas per didelis.<br />Nepavyko nustatyti maksimalaus leistino failų dydžio konfigūraciniame PHP faile php.ini.',
	'PHP_SIZE_OVERRUN'	=> 'Prikabintas failas per didelis. Maksimalus leistinas failo dydis yra %1$d %2$s.<br />Taip nustatyta konfigūraciniame faile php.ini.',
	'PLACE_INLINE'	=> 'Įtraukti į pranešimą',
	'POLL_DELETE'	=> 'Ištrinti apklausą',
	'POLL_FOR'	=> 'Tęsti apklausą',
	'POLL_FOR_EXPLAIN'	=> 'Niekada nesibaigiančiai apklausai įrašykite 0 arba palikite tuščią.',
	'POLL_MAX_OPTIONS'	=> 'Atsakymų variantų skaičius vartotojui',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Kiek atsakymų variantų gali pasirinkti kiekvienas vartotojas.',
	'POLL_OPTIONS'	=> 'Apklausos atsakymų variantai',
	'POLL_OPTIONS_EXPLAIN'	=> 'Kiekvieną atsakymo variantą rašykite naujoje eilutėje. Iš viso galite įrašyti iki <strong>%d</strong> atsakymų variantų.',
	'POLL_OPTIONS_EDIT_EXPLAIN'	=> 'Kiekvieną atsakymo variantą rašykite naujoje eilutėje. Iš viso galite įrašyti iki <strong>%d</strong> atsakymų variantų. Jeigu pridėsite arba ištrinsite nors vieną atsakymo variantą, balsai bus skaičiuojami iš naujo.',
	'POLL_QUESTION'	=> 'Apklausos klausimas',
	'POLL_TITLE_TOO_LONG'	=> 'Apklausos pavadinimas turi būti trumpesnis nei 100 simbolių.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Apdorotas apklausos pavadinimas yra per ilgas. Ištrinkite BBKodą arba šypsenėles.',
	'POLL_VOTE_CHANGE'	=> 'Leisti pakeisti savo balsą',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Jeigu įjungta, vartotojams bus leista pakeisti savo balsą.',
	'POSTED_ATTACHMENTS'	=> 'Prikabinti failai',
	'POST_APPROVAL_NOTIFY'	=> 'Jūs būsite informuotas, kai pranešimas bus patvirtintas.',
	'POST_CONFIRMATION'	=> 'Pranešimo patvirtinimas',
	'POST_CONFIRM_EXPLAIN'	=> 'Šios diskusijos apsaugotos nuo automatinio pranešimų rašymo, todėl turite įvesti patvirtinimo kodą. Kodą galite matyti paveikslėlyje apačioje. Jeigu blogai matote arba dėl kitų priežasčių negalite jo perskaityti, susisiekite su %sdiskusijų administratoriumi%s.',
	'POST_DELETED'	=> 'Pranešimas sėkmingai ištrintas.',
	'POST_EDITED'	=> 'Pranešimas sėkmingai pakeistas.',
	'POST_EDITED_MOD'	=> 'Pranešimas sėkmingai pakeistas, tačiau prieš tai kai jis bus parodytas viešai, pranešimą turi patvirtinti moderatorius.',
	'POST_GLOBAL'	=> 'Labai svarbi',
	'POST_ICON'	=> 'Pranešimo piktograma',
	'POST_NORMAL'	=> 'Standartinė',
	'POST_REVIEW'	=> 'Pranešimo peržiūra',
	'POST_REVIEW_EDIT'	=> 'Pranešimo peržiūra',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Kol redagavote savo pranešimą, kažkas kitas jį pakeitė. Geriau būtų, kad peržiūrėtumėte dabartinę ir savo pranešimo versijas dar kartą.',
	'POST_REVIEW_EXPLAIN'	=> 'Kol rašėte savo pranešimą, šioje temoje atsirado bent dar vienas naujas pranešimas. Geriau būtų, kad peržiūrėtumėte temą ir savo pranešimą dar kartą.',
	'POST_STORED'	=> 'Pranešimas sėkmingai išsiųstas.',
	'POST_STORED_MOD'	=> 'Pranešimas sėkmingai išsiųstas, tačiau prieš tai kai jis bus parodytas vietai, pranešimas turi būti patvirtintas moderatoriaus.',
	'POST_TOPIC_AS'	=> 'Temos tipas',
	'PROGRESS_BAR'	=> 'Progreso indikatorius',
	'QUOTE_DEPTH_EXCEEDED'	=> 'Jūs galite naudoti tik %1$d citatas citatose.',
	'SAVE'	=> 'Išsaugoti',
	'SAVE_DATE'	=> 'Išsaugota',
	'SAVE_DRAFT'	=> 'Išsaugoti juodraštį',
	'SAVE_DRAFT_CONFIRM'	=> 'Įsidėmėkite, kad išsaugotas juodraštis gali turėti tik pavadinimą ir pranešimo tekstą, visi kiti elementai bus ištrinti. Ar tikrai norite išsaugoti juodraštį?',
	'SMILIES'	=> 'Šypsenėlės',
	'SMILIES_ARE_OFF'	=> 'Šypsenėlės yra <em>IŠJUNGTOS</em>',
	'SMILIES_ARE_ON'	=> 'Šypsenėlės yra <em>ĮJUNGTOS</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'	=> 'Dažnos/Svarbios temos laiko limitas',
	'STICK_TOPIC_FOR'	=> 'Dažnos temos laiko limitas',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Niekada nesibaigiančiai dažnai/svarbiai temai įrašykite 0 arba palikite tuščią. Įsidėmėkite, kad šis skaičius yra susietas su pranešimo data.',
	'STYLES_TIP'	=> 'Pastaba: stilius galite taikyti ir pasirinktam tekstui.',
	'TOO_FEW_CHARS'	=> 'Jūsų pranešimas yra per trumpas.',
	'TOO_FEW_CHARS_LIMIT'	=> 'Jūsų pranešime yra %1$d simboliai(ių). Mažiausiai turi būti %2$d simboliai(ių).',
	'TOO_FEW_POLL_OPTIONS'	=> 'Privalote įrašyti bent du apklausos atsakymų variantus.',
	'TOO_MANY_ATTACHMENTS'	=> 'Daugiau failų prikabinti negalima. %d yra maksimumas.',
	'TOO_MANY_CHARS'	=> 'Jūsų pranešimas per ilgas.',
	'TOO_MANY_CHARS_POST'	=> 'Jūsų pranešime yra %1$d simbolių. Tačiau maksimalus leistinas simbolių skaičius yra %2$d.',
	'TOO_MANY_CHARS_SIG'	=> 'Jūsų parašas sudarytas iš %1$d simbolių. Tačiau maksimalus leistinas simbolių skaičius yra %2$d.',
	'TOO_MANY_POLL_OPTIONS'	=> 'Jūs įrašėte per daug apklausos atsakymų variantų.',
	'TOO_MANY_SMILIES'	=> 'Jūsų pranešime yra per daug šypsenėlių. Maksimalus leistinas šypsenėlių skaičius yra %d.',
	'TOO_MANY_URLS'	=> 'Jūsų pranešime yra per daug nuorodų. Maksimalus leistinas nuorodų skaičius yra %d.',
	'TOO_MANY_USER_OPTIONS'	=> 'Jūs negalite nurodyti daugiau atsakymų variantų vienam vartotojui nei jų yra iš viso.',
	'TOPIC_BUMPED'	=> 'Jūs sėkmingai priminėte apie temą.',
	'UNAUTHORISED_BBCODE'	=> 'Jūs negalite naudoti tam tikrų BBKodų: %s.',
	'UNGLOBALISE_EXPLAIN'	=> 'Norėdami pakeisti temos būseną iš labai svarbios į paprastą, turite pasirinkti forumą, kuriame ji bus rodoma.',
	'UPDATE_COMMENT'	=> 'Atnaujinti komentarą',
	'URL_INVALID'	=> 'URL adresas, kurį įrašėte, yra neteisingas.',
	'URL_NOT_FOUND'	=> 'Failas, kurį nurodėte, neegzistuoja.',
	'URL_IS_OFF'	=> '[url] yra <em>IŠJUNGTAS</em>',
	'URL_IS_ON'	=> '[url] yra <em>ĮJUNGTAS</em>',
	'USER_CANNOT_BUMP'	=> 'Jūs negalite priminti apie temas šiame forume.',
	'USER_CANNOT_DELETE'	=> 'Jūs negalite trinti pranešimų šiame forume.',
	'USER_CANNOT_EDIT'	=> 'Jūs negalite redaguoti pranešimų šiame forume.',
	'USER_CANNOT_REPLY'	=> 'Jūs negalite atsakinėti šiame forume.',
	'USER_CANNOT_FORUM_POST'	=> 'Jūs negalite rašyti pranešimų šiame forume, kadangi to neleidžia daryti forumo tipas.',
	'VIEW_MESSAGE'	=> '%sPeržiūrėti savo nusiųstą pranešimą%s',
	'VIEW_PRIVATE_MESSAGE'	=> '%sPeržiūrėti savo nusiųstą privačią žinutę%s',
	'WRONG_FILESIZE'	=> 'Failas yra per didelis. Maksimalus leistinas dydis yra %1d %2s.',
	'WRONG_SIZE'	=> 'Paveikslėlis turi būti bent %1$d pikselių pločio, %2$d pikselių aukščio bei ne didesnis kaip %3$d pikselių pločio ir %4$d pikselių aukščio. Nusiųstas paveikslėlis yra %5$d pikselių pločio ir %6$d pikselių aukščio.',
));

?>