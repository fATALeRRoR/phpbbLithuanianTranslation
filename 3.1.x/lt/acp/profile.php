<?php
/**
*
* acp_profile.php [Lithuanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2012 phpBB Group
* @author 2012-09-07 - Vilius Šumskas
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
	'ADDED_PROFILE_FIELD'	=> 'Papildomas laukas prie aprašo sėkmingai pridėtas.',
	'ALPHA_ONLY'	=> 'Tik raidės ir skaičiai',
	'ALPHA_SPACERS'	=> 'Raidės, skaičiai ir specialieji simboliai',
	'ALWAYS_TODAY'	=> 'Visada rodyti dabartinę datą',
	'BOOL_ENTRIES_EXPLAIN'	=> 'Dabar įrašykite savo reikšmes',
	'BOOL_TYPE_EXPLAIN'	=> 'Nurodykite tipą, daug pasirinkimų (checkbox) ar vieną iš daugelio pasirinkimų (radio). Daug pasirinkimų bus rodoma tik tada, jeigu toks pasirinkimų tipas vartotojui įjungtas. Tokiu atveju bus naudojama <strong>antroji</strong> kalba. Vieno iš daugelio pasirinkimas bus rodomas bet kokiu atveju.',
	'CHANGED_PROFILE_FIELD'	=> 'Papildomas aprašo laukas sėkmingai pakeistas.',
	'CHARS_ANY'	=> 'Bet kokie simboliai',
	'CHECKBOX'	=> 'Daug pasirinkimų',
	'COLUMNS'	=> 'Stulpeliai',
	'CP_LANG_DEFAULT_VALUE'	=> 'Standartinė reikšmė',
	'CP_LANG_EXPLAIN'	=> 'Lauko aprašymas',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Lauko aprašymas, kuris bus rodomas vartotojui.',
	'CP_LANG_NAME'	=> 'Lauko pavadinimas, kuris bus rodomas vartotojui',
	'CP_LANG_OPTIONS'	=> 'Nustatymai',
	'CREATE_NEW_FIELD'	=> 'Sukurti naują lauką',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Egzistuoja bent vienas neišverstas papildomas aprašo laukas. Teisingą informaciją galite įvesti paspaudę ant nuorodos “Išversti”.',
	'DEFAULT_ISO_LANGUAGE'	=> 'Pagrindinė kalba [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'Šis aprašo laukas yra neišverstas pagrindinėje kalboje.',
	'DEFAULT_VALUE'	=> 'Standartinė reikšmė',
	'DELETE_PROFILE_FIELD'	=> 'Ištrinti aprašo lauką',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Ar tikrai norite ištrinti aprašo lauką?',
	'DISPLAY_AT_PROFILE'	=> 'Rodyti vartotojo valdymo pulte',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'Vartotojas galės pakeisti šio lauko duomenis per vartotojo valdymo pultą.',
	'DISPLAY_AT_REGISTER'	=> 'Rodyti registracijos metu',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Jeigu įjungsite šį nustatymą, laukas bus rodomas registracijos metu.',
	'DISPLAY_ON_VT'	=> 'Rodyti temoje',
	'DISPLAY_ON_VT_EXPLAIN'	=> 'Jeigu įjungsite šį nustatymą, laukas bus rodomas temoje mini-apraše.',
	'DISPLAY_PROFILE_FIELD'	=> 'Viešai rodyti aprašo lauką',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'Šis laukas bus rodomas visur, kur yra įjungta per diskusijų apkrovimo nustatymus. Jeigu išjungsite šį nustatymą, laukas nebebus rodomas temų puslapiuose, aprašuose ir dalyvių sąraše.',
	'DROPDOWN_ENTRIES_EXPLAIN'	=> 'Čia įrašykite meniu punktus. Kiekvieną punktą reikia rašyti naujoje eilutėje.',
	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Atsiminkite, kad galite pakeisti punktų tekstą ir gale pridėti naujus punktus. Nerekomenduojama pridėti naujus punktus per vidurį, kadangi esamiems vartotojams gali būti priskirti neteisingi punktai. Tas pats gali atsitikti jeigu punktus pašalinsite iš vidurio. Ištrynus punktus iš galo, visiems reikiamiems vartotojams bus priskirta standartinė reikšmė.',
	'EMPTY_FIELD_IDENT'	=> 'Neįrašytas lauko vidinis pavadinimas',
	'EMPTY_USER_FIELD_NAME'	=> 'Įrašykite lauko pavadinimą',
	'ENTRIES'	=> 'Punktai',
	'EVERYTHING_OK'	=> 'Viskas tvarkoje',
	'FIELD_BOOL'	=> 'Pasirinkimas iš dviejų punktų (Taip/Ne)',
	'FIELD_DATE'	=> 'Data',
	'FIELD_DESCRIPTION'	=> 'Lauko aprašymas',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Lauko aprašymas, kuris bus rodomas vartotojui.',
	'FIELD_DROPDOWN'	=> 'Išsiskleidžiantis meniu',
	'FIELD_IDENT'	=> 'Lauko vidinis pavadinimas',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'Toks lauko vidinis pavadinimas jau egzistuoja. Pasirinkite kitokį pavadinimą.',
	'FIELD_IDENT_EXPLAIN'	=> 'Šis laukas naudojamas aprašo lauko identifikacijai duomenų bazėje ir šablonuose.',
	'FIELD_INT'	=> 'Skaičiai',
	'FIELD_LENGTH'	=> 'Įvedimo dėžutės ilgis',
	'FIELD_NOT_FOUND'	=> 'Tokio aprašo lauko nėra.',
	'FIELD_STRING'	=> 'Vienos eilutės tekstinis laukelis',
	'FIELD_TEXT'	=> 'Ilgas tekstas',
	'FIELD_TYPE'	=> 'Lauko tipas',
	'FIELD_TYPE_EXPLAIN'	=> 'Vėliau jūs negalėsite pakeisti lauko tipo.',
	'FIELD_VALIDATION'	=> 'Lauko patikrinimas',
	'FIRST_OPTION'	=> 'Pirmas punktas',
	'HIDE_PROFILE_FIELD'	=> 'Paslėpti aprašo lauką',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Paslėpti aprašo lauką nuo kitų vartotojų išskyrus patį vartotoją, moderatorius ir administratorius, kurie galės matyti šį lauką. Jeigu aprašo lauko rodymas vartotojo valdymo pulte išjungtas, vartotojas negalės matyti ar keisti šio lauko. Tai galės daryti tik administratoriai.',
	'INVALID_CHARS_FIELD_IDENT'	=> 'Lauko vidinis pavadinimas gali būti sudarytas tik iš mažųjų a-z raidžių ir _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Lauko vidinis pavadinimas negali būti ilgesnis nei 17 simbolių',
	'ISO_LANGUAGE'	=> 'Kalba [%s]',
	'LANG_SPECIFIC_OPTIONS'	=> 'Specifiniai kalbos nustatymai [<strong>%s</strong>]',
	'MAX_FIELD_CHARS'	=> 'Maksimalus simbolių skaičius',
	'MAX_FIELD_NUMBER'	=> 'Aukščiausias leidžiamas skaičius',
	'MIN_FIELD_CHARS'	=> 'Minimalus simbolių skaičius',
	'MIN_FIELD_NUMBER'	=> 'Žemiausias leidžiamas skaičius',
	'NO_FIELD_ENTRIES'	=> 'Neaprašyti punktai',
	'NO_FIELD_ID'	=> 'Nenurodytas lauko id.',
	'NO_FIELD_TYPE'	=> 'Nenurodytas lauko tipas.',
	'NO_VALUE_OPTION'	=> 'Punktas, kuris nebus užskaitytas',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Jeigu šis laukas privalomas ir vartotojas pasirinkt šį punktą, bus parodoma klaida.',
	'NUMBERS_ONLY'	=> 'Tik skaičiai (0-9)',
	'PROFILE_BASIC_OPTIONS'	=> 'Pagrindiniai nustatymai',
	'PROFILE_FIELD_ACTIVATED'	=> 'Aprašo laukas sėkmingai įjungtas.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Aprašo laukas sėkmingai išjungtas.',
	'PROFILE_LANG_OPTIONS'	=> 'Specifiniai kalbos nustatymai',
	'PROFILE_TYPE_OPTIONS'	=> 'Specifiniai aprašo tipo nustatymai',
	'RADIO_BUTTONS'	=> 'Vienas iš daugelio pasirinkimų',
	'REMOVED_PROFILE_FIELD'	=> 'Aprašo laukas sėkmingai ištrintas.',
	'REQUIRED_FIELD'	=> 'Privalomas laukas',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Priversti vartotoją arba administratorių užpildyti lauką. Jeigu aprašo lauko rodymas registracijos metu yra išjungtas, užpildyti jį reikės tik kai vartotojas redaguoja savo aprašą.',
	'ROWS'	=> 'Eilutės',
	'SAVE'	=> 'Išsaugoti',
	'SECOND_OPTION'	=> 'Antras punktas',
	'SHOW_NOVALUE_FIELD'	=> 'Rodyti lauką, jeigu nepasirinkta jokia reikšmė',
	'SHOW_NOVALUE_FIELD_EXPLAIN'	=> 'Nurodo, ar rodyti aprašo lauką, jeigu neprivalomiems laukams nepasirinkta jokia reikšmė, arba privalomuose laukuose reikšmė dar nebuvo pasirinkta.',
	'STEP_1_EXPLAIN_CREATE'	=> 'Čia galite įrašyti pagrindinius naujo aprašo lauko parametrus. Ši informacija būtina antram aprašo lauko kūrimo žingsniui, kur galėsite nurodyti likusius parametrus.',
	'STEP_1_EXPLAIN_EDIT'	=> 'Čia galite keisti pagrindinius aprašo lauko parametrus. Kai kuriuos parametrus gali tekti pakeisti antrajame žingsnyje.',
	'STEP_1_TITLE_CREATE'	=> 'Aprašo lauko kūrimas',
	'STEP_1_TITLE_EDIT'	=> 'Aprašo lauko keitimas',
	'STEP_2_EXPLAIN_CREATE'	=> 'Čia galite aprašyti kai kuriuos pagrindinius parametrus.',
	'STEP_2_EXPLAIN_EDIT'	=> 'Čia galite pakeisti kai kuriuos pagrindinius parametrus.<br /><strong>Atsiminkite, kad pakeisti aprašo laukai neįtakos jau užpildytų laukų.</strong>',
	'STEP_2_TITLE_CREATE'	=> 'Specifiniai aprašo tipo nustatymai',
	'STEP_2_TITLE_EDIT'	=> 'Specifiniai aprašo tipo nustatymai',
	'STEP_3_EXPLAIN_CREATE'	=> 'Kadangi jūsų diskusijų lentoje įdiegta daugiau nei viena kalba, turite užpildyti ir likusius kalbų parametrus. Aprašo laukas su kitomis kalbomis veiks tik tada, jeigu užpildysite jo parametrus ir kitose kalbose.',
	'STEP_3_EXPLAIN_EDIT'	=> 'Kadangi jūsų diskusijų lentoje įdiegta daugiau nei viena kalba, turite pakeisti arba užpildyti ir likusius kalbų parametrus. Aprašo laukas su kitomis kalbomis veiks tik tada, jeigu užpildysite jo parametrus ir kitose kalbose.',
	'STEP_3_TITLE_CREATE'	=> 'Likę kalbų parametrai',
	'STEP_3_TITLE_EDIT'	=> 'Kalbų parametrai',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Įrašykite frazę, kurią standartiškai norite rodyti laukelyje. Jeigu norite kad laukelis būtų tuščias, palikite šį parametrą tuščią.',
	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Įrašykite tekstą, kurį standartiškai norite rodyti laukelyje. Jeigu norite kad laukelis būtų tuščias, palikite šį parametrą tuščią.',
	'TRANSLATE'	=> 'Išversti',
	'USER_FIELD_NAME'	=> 'Lauko pavadinimas, kuris bus rodomas vartotojui',
	'VISIBILITY_OPTION'	=> 'Matomumo nustatymai',
));

?>