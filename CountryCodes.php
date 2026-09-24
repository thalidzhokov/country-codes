<?php

/**
 * Class CountryCodes
 *
 * @author Albert Thalidzhokov
 * @link https://github.com/thalidzhokov/country-codes
 */
class CountryCodes
{
    /**
     * @var string
     */
    public static $language = 'en';

    /**
     * @var array
     */
    public static $countries = array();

    /**
     * @var array
     */
    public static $continents = array(
        'AF' => array(
            'continentCode' => 'AF',
            'ru' => array('continent' => 'Африка'),
            'en' => array('continent' => 'Africa'),
        ),
        'AN' => array(
            'continentCode' => 'AN',
            'ru' => array('continent' => 'Антарктика'),
            'en' => array('continent' => 'Antarctica'),
        ),
        'AS' => array(
            'continentCode' => 'AS',
            'ru' => array('continent' => 'Азия'),
            'en' => array('continent' => 'Asia'),
        ),
        'EU' => array(
            'continentCode' => 'EU',
            'ru' => array('continent' => 'Европа'),
            'en' => array('continent' => 'Europe'),
        ),
        'NA' => array(
            'continentCode' => 'NA',
            'ru' => array('continent' => 'Северная Америка'),
            'en' => array('continent' => 'North America'),
        ),
        'OC' => array(
            'continentCode' => 'OC',
            'ru' => array('continent' => 'Океания'),
            'en' => array('continent' => 'Oceania'),
        ),
        'SA' => array(
            'continentCode' => 'SA',
            'ru' => array('continent' => 'Южная Америка'),
            'en' => array('continent' => 'South America'),
        ),
    );

    /**
     * @var array
     */
    public static $emojiMapping = array(
        'A' => '&#x1F1E6;',
        'B' => '&#x1F1E7;',
        'C' => '&#x1F1E8;',
        'D' => '&#x1F1E9;',
        'E' => '&#x1F1EA;',
        'F' => '&#x1F1EB;',
        'G' => '&#x1F1EC;',
        'H' => '&#x1F1ED;',
        'I' => '&#x1F1EE;',
        'J' => '&#x1F1EF;',
        'K' => '&#x1F1F0;',
        'L' => '&#x1F1F1;',
        'M' => '&#x1F1F2;',
        'N' => '&#x1F1F3;',
        'O' => '&#x1F1F4;',
        'P' => '&#x1F1F5;',
        'Q' => '&#x1F1F6;',
        'R' => '&#x1F1F7;',
        'S' => '&#x1F1F8;',
        'T' => '&#x1F1F9;',
        'U' => '&#x1F1FA;',
        'V' => '&#x1F1FB;',
        'W' => '&#x1F1FC;',
        'X' => '&#x1F1FD;',
        'Y' => '&#x1F1FE;',
        'Z' => '&#x1F1FF;',
    );

    /**
     * @var array
     */
    private static $_countriesByLanguages = array();

    /**
     * @var array
     */
    private static $_supportedFields = array(
        'alpha2',
        'alpha3',
        'numeric',
        'isd',
        'continentCode',
        'continent',
        'country',
        'countryFull',
        'emoji',
    );

    /**
     * @var array
     *
     * Language code => [
     *     Continent code => [
     *         'continentCode' => (string),
     *         'continent' => (string)
     *     ],
     *     ...
     * ],
     * ...
     */
    private static $_continentsByLanguages = array();

    /**
     * @var array
     */
    private static $_supportedContinents = array(
        'AF',
        'AN',
        'AS',
        'EU',
        'NA',
        'OC',
        'SA',
    );

    /**
     * @param string $language
     * @return array
     */
    static function _continentsByLanguage($language = '')
    {
        $continentsByLanguage = array();

        if (empty($language) || !is_string($language)) {
            $language = self::$language;
        }

        foreach (self::$continents as $continentKey => $continent) {

            foreach ($continent as $fieldKey => $field) {

                if (is_array($field) && $fieldKey === $language) {

                    foreach ($field as $key => $value) {
                        $continent[$key] = $value;
                    }
                }

                if (is_array($field)) {
                    unset($continent[$fieldKey]);
                }
            }

            $continentsByLanguage[$language][$continentKey] = $continent;
        }

        self::$_continentsByLanguages[$language] = $continentsByLanguage[$language];

        return self::$_continentsByLanguages[$language];
    }

    /**
     * @param string $language
     * @return array
     */
    static function _countriesByLanguage($language = '')
    {
        self::init();
        $language = !empty($language) && is_string($language)
            ? $language
            : self::$language;
        $continentsByLanguage = !empty(self::$_continentsByLanguages[$language])
            ? self::$_continentsByLanguages[$language]
            : self::_continentsByLanguage($language);
        $countriesByLanguage = array();

        foreach (self::$countries as $countryKey => $country) {

            foreach ($country as $fieldKey => $field) {

                if (is_array($field) && $fieldKey === $language) {

                    foreach ($field as $key => $value) {
                        $country[$key] = $value;
                    }
                }

                if (is_string($field) && $fieldKey === 'continentCode') {
                    $continentCode = $field;
                    $country = $country + $continentsByLanguage[$continentCode];
                }

                if (is_array($field)) {
                    unset($country[$fieldKey]);
                }
            }

            // Add emoji
            $country['emoji'] = self::getEmojiByAlpha2($country['alpha2']);

            $countriesByLanguage[$language][$countryKey] = $country;
        }

        self::$_countriesByLanguages[$language] = $countriesByLanguage[$language];

        return self::$_countriesByLanguages[$language];
    }

    /**
     * @param string $alpha2
     * @return string
     */
    public static function getEmojiByAlpha2($alpha2 = '')
    {
        self::init();
        $rtn = '';
        $excludedAlpha2 = array(
            'AB',
            'OS'
        );

        if (!empty($alpha2) && is_string($alpha2) && strlen($alpha2) === 2 && !empty(self::$countries[$alpha2]) && !in_array($alpha2, $excludedAlpha2)) {
            $rtn = strtr($alpha2, self::$emojiMapping);
        }

        return $rtn;
    }

    /**
     * @param string $alpha3
     * @return string
     */
    public static function getEmojiByAlpha3($alpha3 = '')
    {
        $rtn = '';

        if (!empty($alpha3) && is_string($alpha3) && strlen($alpha3) === 3) {

            switch ($alpha3) {
                case 'ENG':
                    $rtn = '&#x1F3F4;&#xE0067;&#xE0062;&#xE0065;&#xE006E;&#xE0067;&#xE007F;';
                    break;
                case 'WLS':
                case 'WAL':
                    $rtn = '&#x1F3F4;&#xE0067;&#xE0062;&#xE0077;&#xE006C;&#xE0073;&#xE007F;';
                    break;
                case 'SCT':
                case 'SCO':
                    $rtn = '&#x1F3F4;&#xE0067;&#xE0062;&#xE0073;&#xE0063;&#xE0074;&#xE007F;';
                    break;
                case 'NIR':
                    $rtn = '';
                    break;
                default:
                    $countriesArray = self::get('alpha3', 'alpha2');

                    if (isset($countriesArray[$alpha3])) {
                        $rtn = self::getEmojiByAlpha2($countriesArray[$alpha3]);
                    }

                    break;
            }
        }

        return $rtn;
    }

    /**
     * A repeated key keeps every value instead of overwriting the previous one.
     *
     * @param array $result
     * @param array $repeated
     * @param string $key
     * @param mixed $value
     */
    private static function _addToResult(&$result, &$repeated, $key, $value)
    {
        if (!array_key_exists($key, $result)) {
            $result[$key] = $value;

            return;
        }

        if (empty($repeated[$key])) {
            $result[$key] = array($result[$key]);
            $repeated[$key] = true;
        }

        $result[$key][] = $value;
    }

    /**
     * @param string $keyField field for the array of countries, set it to null if you want array without named indices
     * @param string $requestedField name of the field to be fetched in value part of array
     * @param string $language
     * @return array contained key => value pairs of the requested key and field
     */
    public static function get($keyField = 'alpha2', $requestedField = 'country', $language = '')
    {
        $language = !empty($language) && is_string($language)
            ? $language
            : self::$language;
        $countries = !empty(self::$_countriesByLanguages[$language]) && is_array(self::$_countriesByLanguages[$language])
            ? self::$_countriesByLanguages[$language]
            : self::_countriesByLanguage($language);

        if (!in_array($keyField, self::$_supportedFields)) {
            $keyField = Null;
        }

        if (!in_array($requestedField, self::$_supportedFields)) {
            $requestedField = 'country';
        }

        $result = array();
        $repeated = array();

        foreach ($countries as $countryKey => $country) {

            if ($keyField) {
                self::_addToResult($result, $repeated, $country[$keyField], $country[$requestedField]);
            } else {
                $result[] = $country[$requestedField];
            }
        }

        return $result;
    }

    /**
     * @param string $keyField field for the array of countries, set it to null if you want array without named indices
     * @param array $requestedFields array of name of the fields to be fetched in value part of array
     * @param string $language
     * @return array contained key => value pairs of the requested key and field
     */
    public static function get2($keyField = 'alpha2', $requestedFields = array('alpha3', 'country'), $language = '')
    {
        $language = !empty($language) && is_string($language)
            ? $language
            : self::$language;
        $countries = !empty(self::$_countriesByLanguages[$language]) && is_array(self::$_countriesByLanguages[$language])
            ? self::$_countriesByLanguages[$language]
            : self::_countriesByLanguage($language);

        if (!in_array($keyField, self::$_supportedFields)) {
            $keyField = Null;
        }

        if (!empty($requestedFields) && is_array($requestedFields)) {

            foreach ($requestedFields as $index => $field) {

                if (!in_array($field, self::$_supportedFields)) {
                    unset($requestedFields[$index]);
                }
            }
        } else {
            $requestedFields = array('alpha3', 'country');
        }

        $result = array();
        $repeated = array();

        foreach ($countries as $countryKey => $country) {
            $tmp = array();

            foreach ($requestedFields as $field) {
                $tmp[$field] = $country[$field];
            }

            if ($keyField) {
                self::_addToResult($result, $repeated, $country[$keyField], $tmp);
            } else {
                $result[] = $tmp;
            }
        }

        return $result;
    }

    /**
     * @param string $keyField field for the array of countries, set it to null if you want array without named indices
     * @param string $requestedField name of the field to be fetched in value part of array
     * @param string $continentCode code of continent to use as filter
     * @param string $language
     * @return array contained key => value pairs of the requested key and field
     * Works exactly as get() above
     * But takes an extra param to enable filtering by continent
     */
    public static function getByContinent($keyField = 'alpha2', $requestedField = 'country', $continentCode = '', $language = '')
    {
        $language = !empty($language) && is_string($language)
            ? $language
            : self::$language;
        $countries = !empty(self::$_countriesByLanguages[$language]) && is_array(self::$_countriesByLanguages[$language])
            ? self::$_countriesByLanguages[$language]
            : self::_countriesByLanguage($language);

        if (!in_array($keyField, self::$_supportedFields)) {
            $keyField = Null;
        }

        if (!in_array($requestedField, self::$_supportedFields)) {
            $requestedField = 'country';
        }

        if (!in_array($continentCode, self::$_supportedContinents)) {
            $continentCode = Null;
        }

        $result = array();
        $repeated = array();

        foreach ($countries as $countryKey => $country) {

            if ($keyField) {

                if ($continentCode) {

                    if ($country['continentCode'] === $continentCode) {
                        self::_addToResult($result, $repeated, $country[$keyField], $country[$requestedField]);
                    }
                } else {
                    self::_addToResult($result, $repeated, $country[$keyField], $country[$requestedField]);
                }
            } else {

                if ($continentCode) {

                    if ($country['continentCode'] == $continentCode) {
                        $result[] = $country[$requestedField];
                    }
                } else {
                    $result[] = $country[$requestedField];
                }
            }
        }

        return $result;
    }

    public static function init()
    {
        if (!empty(self::$countries)) {
            return;
        }

        $raw = file_get_contents(__DIR__ . '/CountryCodes.jsonc');

        if ($raw === false) {
            throw new RuntimeException('Cannot read CountryCodes.jsonc');
        }

        $raw = preg_replace('/^\s*\/\/.*$/m', '', $raw);
        $countries = json_decode($raw, true);

        if (!is_array($countries)) {
            throw new RuntimeException('Invalid CountryCodes.jsonc');
        }

        self::$countries = $countries;
    }
}
