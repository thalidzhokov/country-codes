<?php

require dirname(__DIR__) . '/CountryCodes.php';

$failures = 0;

function check($condition, $message)
{
    global $failures;

    if ($condition) {
        return;
    }

    $failures++;
    fwrite(STDERR, $message . PHP_EOL);
}

function sorted_copy($values)
{
    $copy = $values;
    sort($copy);

    return $copy;
}

check(count(CountryCodes::$countries) === 0, 'countries must stay empty until the first call');

$en = CountryCodes::get('alpha2', 'country', 'en');
$ru = CountryCodes::get('alpha2', 'country', 'ru');

check($en['FI'] === 'Finland', 'get() in English must return Finland');
check($ru['FI'] === 'Финляндия', 'get() in Russian must return Финляндия');
check($en['FI'] === 'Finland', 'English result must stay available after a Russian call');
check(count(CountryCodes::$countries) === 252, 'country count must be 252');
check(count($en) === 252 && count($ru) === 252, 'get() must return every country for both languages');

check($en['MK'] === 'North Macedonia', 'English name of MK');
check($ru['MK'] === 'Северная Македония', 'Russian name of MK');
check($en['XK'] === 'Kosovo' && $ru['XK'] === 'Косово', 'Kosovo must be present');
check(
    CountryCodes::$countries['AF']['ru']['countryFull'] === 'Исламский Эмират Афганистан',
    'Afghanistan full Russian name'
);
check(CountryCodes::$countries['SD']['numeric'] === '729', 'Sudan numeric code');
check($en['CZ'] === 'Czechia', 'Czechia short name');
check($en['CV'] === 'Cabo Verde', 'Cabo Verde short name');
check($en['LY'] === 'Libya', 'Libya short name');
check($en['MM'] === 'Myanmar', 'Myanmar short name');
check($en['TR'] === 'Türkiye', 'Türkiye short name');
check(CountryCodes::$countries['SZ']['ru']['country'] === 'Эсватини', 'Eswatini Russian name');
check(CountryCodes::$countries['TZ']['en']['countryFull'] === 'United Republic of Tanzania', 'Tanzania full English name');
check(CountryCodes::$continents['SA']['continentCode'] === 'SA', 'South America continent code');

foreach (array('BZ', 'GT', 'HN', 'SV', 'NI', 'CR', 'PA') as $code) {
    check(CountryCodes::$countries[$code]['continentCode'] === 'NA', $code . ' must be in North America');
}
foreach (array('CC', 'CX', 'IO') as $code) {
    check(CountryCodes::$countries[$code]['continentCode'] === 'AS', $code . ' must be in Asia');
}

$names = array(
    array('NP', 'ru', 'countryFull', 'Федеративная Демократическая Республика Непал'),
    array('HU', 'ru', 'countryFull', 'Венгрия'),
    array('FJ', 'ru', 'countryFull', 'Республика Фиджи'),
    array('NU', 'ru', 'countryFull', 'Ниуэ'),
    array('SH', 'en', 'country', 'Saint Helena, Ascension and Tristan da Cunha'),
    array('SH', 'ru', 'country', 'Святая Елена, Остров Вознесения, Тристан-да-Кунья'),
    array('MF', 'en', 'countryFull', 'Saint Martin (French part)'),
    array('FM', 'ru', 'countryFull', 'Федеративные Штаты Микронезии'),
    array('CI', 'en', 'country', "Côte d'Ivoire"),
    array('CI', 'ru', 'country', "Кот-д'Ивуар"),
    array('RE', 'en', 'country', 'Réunion'),
    array('SJ', 'ru', 'country', 'Шпицберген и Ян-Майен'),
);
foreach ($names as $name) {
    list($code, $lang, $field, $expected) = $name;
    check(CountryCodes::$countries[$code][$lang][$field] === $expected, $code . ' ' . $lang . '.' . $field . ' must be ' . $expected);
}

$isd = array(
    'FI' => '358',
    'CM' => '237',
    'BN' => '673',
    'BQ' => '599',
    'OS' => '7850',
    'CV' => '238',
    'LR' => '231',
    'GU' => '1671',
    'VI' => '1340',
    'CC' => '61',
    'PN' => '64',
    'BV' => '47',
);
foreach ($isd as $code => $expected) {
    check(CountryCodes::$countries[$code]['isd'] === $expected, $code . ' ISD must be ' . $expected);
}

$byIsd = CountryCodes::get('isd', 'alpha2');
$listed = 0;
foreach ($byIsd as $value) {
    $listed += is_array($value) ? count($value) : 1;
}
check($listed === 252, 'get(isd) must keep every country');
check($byIsd['93'] === 'AF', 'unique ISD must stay a string');
check(sorted_copy($byIsd['1']) === array('CA', 'PR', 'UM', 'US'), 'shared ISD 1');
check(sorted_copy($byIsd['358']) === array('AX', 'FI'), 'shared ISD 358');

CountryCodes::$language = 'ru';
check(CountryCodes::get('alpha2', 'country')['DE'] === 'Германия', 'default language must be used when the argument is omitted');
CountryCodes::$language = 'en';

$unknown = CountryCodes::get('alpha2', 'country', 'de');
check($unknown['FI'] === 'Finland', 'unknown language must fall back to English');
CountryCodes::$language = 'de';
check(CountryCodes::get('alpha2', 'country')['DE'] === 'Germany', 'unknown default language must fall back to English');
check(CountryCodes::getByContinent('alpha2', 'continent', 'SA')['BR'] === 'South America', 'unknown language must fall back for continent names');
CountryCodes::$language = 'en';

$de = CountryCodes::get2('alpha2', array('alpha3', 'country'), 'ru');
check($de['DE']['alpha3'] === 'DEU' && $de['DE']['country'] === 'Германия', 'get2() must accept a language');

$eu = CountryCodes::getByContinent('alpha2', 'country', 'EU', 'ru');
check(isset($eu['DE']) && $eu['DE'] === 'Германия' && isset($eu['XK']), 'getByContinent() must filter Europe and accept a language');
check(!isset($eu['BR']), 'Brazil must not be listed as Europe');
check(CountryCodes::getByContinent('alpha2', 'country', 'XX') === array(), 'unknown continent code must return an empty list');
check(count(CountryCodes::getByContinent('alpha2', 'country')) === 252, 'omitted continent must keep every country');
check(count(CountryCodes::getByContinent('alpha2', 'country', null)) === 252, 'null continent must keep every country');
check(CountryCodes::getByContinent('alpha2', 'country', 'eu') === CountryCodes::getByContinent('alpha2', 'country', 'EU'), 'continent code must be case-insensitive');
check(CountryCodes::getByContinent(null, 'alpha2', 'eu') === CountryCodes::getByContinent(null, 'alpha2', 'EU'), 'continent code must be case-insensitive without a key field');

$sa = CountryCodes::getByContinent('alpha2', 'continent', 'SA', 'en');
check(isset($sa['BR']) && $sa['BR'] === 'South America', 'South American countries must receive the continent name');

check(CountryCodes::getEmojiByAlpha2('ZW') === '&#x1F1FF;&#x1F1FC;', 'emoji for ZW');
check(CountryCodes::getEmojiByAlpha2('AB') === '' && CountryCodes::getEmojiByAlpha2('OS') === '', 'AB and OS have no emoji');
check(CountryCodes::getEmojiByAlpha2('XK') === '', 'XK has no emoji');
check(CountryCodes::getEmojiByAlpha2('zw') === '&#x1F1FF;&#x1F1FC;', 'emoji by alpha2 must be case-insensitive');
check(CountryCodes::getEmojiByAlpha3('zmb') === '&#x1F1FF;&#x1F1F2;', 'emoji by alpha3 must be case-insensitive');
check(CountryCodes::getEmojiByAlpha3('sco') === CountryCodes::getEmojiByAlpha3('SCO'), 'subdivision emoji must be case-insensitive');
check(!is_callable('CountryCodes::_countriesByLanguage') && !is_callable('CountryCodes::_continentsByLanguage'), 'internal methods must not be public');
check(
    CountryCodes::getEmojiByAlpha3('SCO') === '&#x1F3F4;&#xE0067;&#xE0062;&#xE0073;&#xE0063;&#xE0074;&#xE007F;',
    'Scotland emoji'
);
check(CountryCodes::getEmojiByAlpha3('FIN') === CountryCodes::getEmojiByAlpha2('FI'), 'emoji by alpha3 must match alpha2');

if ($failures > 0) {
    fwrite(STDERR, $failures . " failed" . PHP_EOL);
    exit(1);
}

echo "ok\n";
