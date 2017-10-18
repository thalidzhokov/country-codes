<?php

/**
 * Class CountryCodes
 *
 * @author Albert Thalidzhokov
 * @link https://github.com/thalidzhokov/country-codes
 * @version 1.0
 */
class CountryCodes
{

    /**
     * @var string
     */
    public static $language = 'en';

    /**
     * @var array
     *
     * ISO-3166-1 alpha-2 (string, 2 character) => [
     *     'alpha2'  => ISO-3166-1 alpha-2  (string, 2 characters),    https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
     *     'alpha3'  => ISO-3166-1 alpha-3  (string, 3 characters),    https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3
     *     'numeric' => ISO-3166-1 numeric  (numeric, 3 digits),       https://en.wikipedia.org/wiki/ISO_3166-1_numeric
     *     'isd' => Internatiguonal Subscriber Dialing code (numeric), https://en.wikipedia.org/wiki/List_of_country_calling_codes
     *     Language code (string, 2 characters) => [
     *             'name'      => (string),
     *             'fullName'  => (string),
     *             'continent' => (string),
     *             'location'  => (string)
     *         ]
     * ],
     * ...
     */
    public static $countries = array(
        'AB' =>
            array(
                'alpha2' => 'AB',
                'alpha3' => 'ABH',
                'numeric' => '895',
                'isd' => Null,
                'ru' =>
                    array(
                        'name' => 'Абхазия',
                        'fullName' => 'Республика Абхазия',
                        'continent' => 'Азия',
                        'location' => 'Закавказье',
                    ),
                'en' =>
                    array(
                        'name' => 'Abkhazia',
                        'fullName' => 'Abkhazia',
                        'continent' => 'Asia',
                        'location' => Null,
                    ),
            ),
        'AD' =>
            array(
                'alpha2' => 'AD',
                'alpha3' => 'AND',
                'numeric' => '020',
                'isd' => '376',
                'ru' =>
                    array(
                        'name' => 'Андорра',
                        'fullName' => 'Княжество Андорра',
                        'continent' => 'Европа',
                        'location' => 'Южная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Andorra',
                        'fullName' => 'Andorra',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'AE' =>
            array(
                'alpha2' => 'AE',
                'alpha3' => 'ARE',
                'numeric' => '784',
                'isd' => '971',
                'ru' =>
                    array(
                        'name' => 'ОАЭ',
                        'fullName' => 'Объединенные Арабские Эмираты',
                        'continent' => 'Азия',
                        'location' => 'Западная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'UAE',
                        'fullName' => 'United Arab Emirates',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'AF' =>
            array(
                'alpha2' => 'AF',
                'alpha3' => 'AFG',
                'numeric' => '004',
                'isd' => '93',
                'ru' =>
                    array(
                        'name' => 'Афганистан',
                        'fullName' => 'Переходное Исламское Государство Афганистан',
                        'continent' => 'Азия',
                        'location' => 'Южная часть Центральной Азии',
                    ),
                'en' =>
                    array(
                        'name' => 'Afghanistan',
                        'fullName' => 'Afghanistan',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'AG' =>
            array(
                'alpha2' => 'AG',
                'alpha3' => 'ATG',
                'numeric' => '028',
                'isd' => '1268',
                'ru' =>
                    array(
                        'name' => 'Антигуа и Барбуда',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Antigua and Barbuda',
                        'fullName' => 'Antigua and Barbuda',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'AI' =>
            array(
                'alpha2' => 'AI',
                'alpha3' => 'AIA',
                'numeric' => '660',
                'isd' => '1264',
                'ru' =>
                    array(
                        'name' => 'Ангилья',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Anguilla',
                        'fullName' => 'Anguilla',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'AL' =>
            array(
                'alpha2' => 'AL',
                'alpha3' => 'ALB',
                'numeric' => '008',
                'isd' => '355',
                'ru' =>
                    array(
                        'name' => 'Албания',
                        'fullName' => 'Республика Албания',
                        'continent' => 'Европа',
                        'location' => 'Южная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Albania',
                        'fullName' => 'Albania',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'AM' =>
            array(
                'alpha2' => 'AM',
                'alpha3' => 'ARM',
                'numeric' => '051',
                'isd' => '374',
                'ru' =>
                    array(
                        'name' => 'Армения',
                        'fullName' => 'Республика Армения',
                        'continent' => 'Азия',
                        'location' => 'Западная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Armenia',
                        'fullName' => 'Armenia',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'AO' =>
            array(
                'alpha2' => 'AO',
                'alpha3' => 'AGO',
                'numeric' => '024',
                'isd' => '244',
                'ru' =>
                    array(
                        'name' => 'Ангола',
                        'fullName' => 'Республика Ангола',
                        'continent' => 'Африка',
                        'location' => 'Центральная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Angola',
                        'fullName' => 'Angola',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'AQ' =>
            array(
                'alpha2' => 'AQ',
                'alpha3' => 'ATA',
                'numeric' => '010',
                'isd' => '672',
                'ru' =>
                    array(
                        'name' => 'Антарктида',
                        'fullName' => Null,
                        'continent' => 'Антарктика',
                        'location' => Null,
                    ),
                'en' =>
                    array(
                        'name' => 'Antarctica',
                        'fullName' => 'Antarctica',
                        'continent' => 'Antarctica',
                        'location' => 'Antarctica',
                    ),
            ),
        'AR' =>
            array(
                'alpha2' => 'AR',
                'alpha3' => 'ARG',
                'numeric' => '032',
                'isd' => '54',
                'ru' =>
                    array(
                        'name' => 'Аргентина',
                        'fullName' => 'Аргентинская Республика',
                        'continent' => 'Северная Америка',
                        'location' => 'Южная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Argentina',
                        'fullName' => 'Argentina',
                        'continent' => 'South America',
                        'location' => 'South America',
                    ),
            ),
        'AS' =>
            array(
                'alpha2' => 'AS',
                'alpha3' => 'ASM',
                'numeric' => '016',
                'isd' => '1684',
                'ru' =>
                    array(
                        'name' => 'Американское Самоа',
                        'fullName' => Null,
                        'continent' => 'Океания',
                        'location' => 'Полинезия',
                    ),
                'en' =>
                    array(
                        'name' => 'American Samoa',
                        'fullName' => 'American Samoa',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'AT' =>
            array(
                'alpha2' => 'AT',
                'alpha3' => 'AUT',
                'numeric' => '040',
                'isd' => '43',
                'ru' =>
                    array(
                        'name' => 'Австрия',
                        'fullName' => 'Австрийская Республика',
                        'continent' => 'Европа',
                        'location' => 'Западная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Austria',
                        'fullName' => 'Austria',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'AU' =>
            array(
                'alpha2' => 'AU',
                'alpha3' => 'AUS',
                'numeric' => '036',
                'isd' => '61',
                'ru' =>
                    array(
                        'name' => 'Австралия',
                        'fullName' => Null,
                        'continent' => 'Океания',
                        'location' => 'Австралия и Новая Зеландия',
                    ),
                'en' =>
                    array(
                        'name' => 'Australia',
                        'fullName' => 'Australia',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'AW' =>
            array(
                'alpha2' => 'AW',
                'alpha3' => 'ABW',
                'numeric' => '533',
                'isd' => '297',
                'ru' =>
                    array(
                        'name' => 'Аруба',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Aruba',
                        'fullName' => 'Aruba',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'AX' =>
            array(
                'alpha2' => 'AX',
                'alpha3' => 'ALA',
                'numeric' => '248',
                'isd' => '358',
                'ru' =>
                    array(
                        'name' => 'Эландские острова',
                        'fullName' => Null,
                        'continent' => 'Европа',
                        'location' => 'Северная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Åland Islands',
                        'fullName' => 'Åland Islands',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'AZ' =>
            array(
                'alpha2' => 'AZ',
                'alpha3' => 'AZE',
                'numeric' => '031',
                'isd' => '994',
                'ru' =>
                    array(
                        'name' => 'Азербайджан',
                        'fullName' => 'Республика Азербайджан',
                        'continent' => 'Азия',
                        'location' => 'Западная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Azerbaijan',
                        'fullName' => 'Azerbaijan',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'BA' =>
            array(
                'alpha2' => 'BA',
                'alpha3' => 'BIH',
                'numeric' => '070',
                'isd' => '387',
                'ru' =>
                    array(
                        'name' => 'Босния и Герцеговина',
                        'fullName' => Null,
                        'continent' => 'Европа',
                        'location' => 'Южная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Bosnia and Herzegovina',
                        'fullName' => 'Bosnia and Herzegovina',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'BB' =>
            array(
                'alpha2' => 'BB',
                'alpha3' => 'BRB',
                'numeric' => '052',
                'isd' => '1246',
                'ru' =>
                    array(
                        'name' => 'Барбадос',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Barbados',
                        'fullName' => 'Barbados',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'BD' =>
            array(
                'alpha2' => 'BD',
                'alpha3' => 'BGD',
                'numeric' => '050',
                'isd' => '880',
                'ru' =>
                    array(
                        'name' => 'Бангладеш',
                        'fullName' => 'Народная Республика Бангладеш',
                        'continent' => 'Азия',
                        'location' => 'Южная часть Центральной Азии',
                    ),
                'en' =>
                    array(
                        'name' => 'Bangladesh',
                        'fullName' => 'Bangladesh',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'BE' =>
            array(
                'alpha2' => 'BE',
                'alpha3' => 'BEL',
                'numeric' => '056',
                'isd' => '32',
                'ru' =>
                    array(
                        'name' => 'Бельгия',
                        'fullName' => 'Королевство Бельгии',
                        'continent' => 'Европа',
                        'location' => 'Западная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Belgium',
                        'fullName' => 'Belgium',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'BF' =>
            array(
                'alpha2' => 'BF',
                'alpha3' => 'BFA',
                'numeric' => '854',
                'isd' => '226',
                'ru' =>
                    array(
                        'name' => 'Буркина-Фасо',
                        'fullName' => Null,
                        'continent' => 'Африка',
                        'location' => 'Западная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Burkina Faso',
                        'fullName' => 'Burkina Faso',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'BG' =>
            array(
                'alpha2' => 'BG',
                'alpha3' => 'BGR',
                'numeric' => '100',
                'isd' => '359',
                'ru' =>
                    array(
                        'name' => 'Болгария',
                        'fullName' => 'Республика Болгария',
                        'continent' => 'Европа',
                        'location' => 'Восточная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Bulgaria',
                        'fullName' => 'Bulgaria',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'BH' =>
            array(
                'alpha2' => 'BH',
                'alpha3' => 'BHR',
                'numeric' => '048',
                'isd' => '973',
                'ru' =>
                    array(
                        'name' => 'Бахрейн',
                        'fullName' => 'Королевство Бахрейн',
                        'continent' => 'Азия',
                        'location' => 'Западная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Bahrain',
                        'fullName' => 'Bahrain',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'BI' =>
            array(
                'alpha2' => 'BI',
                'alpha3' => 'BDI',
                'numeric' => '108',
                'isd' => '257',
                'ru' =>
                    array(
                        'name' => 'Бурунди',
                        'fullName' => 'Республика Бурунди',
                        'continent' => 'Африка',
                        'location' => 'Восточная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Burundi',
                        'fullName' => 'Burundi',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'BJ' =>
            array(
                'alpha2' => 'BJ',
                'alpha3' => 'BEN',
                'numeric' => '204',
                'isd' => '229',
                'ru' =>
                    array(
                        'name' => 'Бенин',
                        'fullName' => 'Республика Бенин',
                        'continent' => 'Африка',
                        'location' => 'Западная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Benin',
                        'fullName' => 'Benin',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'BL' =>
            array(
                'alpha2' => 'BL',
                'alpha3' => 'BLM',
                'numeric' => '652',
                'isd' => Null,
                'ru' =>
                    array(
                        'name' => 'Сен-Бартельми',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Saint Barthélemy',
                        'fullName' => 'Saint Barthélemy',
                        'continent' => Null,
                        'location' => Null,
                    ),
            ),
        'BM' =>
            array(
                'alpha2' => 'BM',
                'alpha3' => 'BMU',
                'numeric' => '060',
                'isd' => '1441',
                'ru' =>
                    array(
                        'name' => 'Бермуды',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Северная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Bermuda',
                        'fullName' => 'Bermuda',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'BN' =>
            array(
                'alpha2' => 'BN',
                'alpha3' => 'BRN',
                'numeric' => '096',
                'isd' => '672',
                'ru' =>
                    array(
                        'name' => 'Бруней-Даруссалам',
                        'fullName' => Null,
                        'continent' => 'Азия',
                        'location' => 'Юго-Восточная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Brunei Darussalam',
                        'fullName' => 'Brunei Darussalam',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'BO' =>
            array(
                'alpha2' => 'BO',
                'alpha3' => 'BOL',
                'numeric' => '068',
                'isd' => '591',
                'ru' =>
                    array(
                        'name' => 'Боливия',
                        'fullName' => 'Многонациональное Государство Боливия',
                        'continent' => 'Северная Америка',
                        'location' => 'Южная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Bolivia',
                        'fullName' => 'Plurinational State of Bolivia',
                        'continent' => 'South America',
                        'location' => 'South America',
                    ),
            ),
        'BQ' =>
            array(
                'alpha2' => 'BQ',
                'alpha3' => 'BES',
                'numeric' => '535',
                'isd' => Null,
                'ru' =>
                    array(
                        'name' => 'Бонайре, Саба и Синт-Эстатиус',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Bonaire, Sint Eustatius and Saba',
                        'fullName' => 'Bonaire, Sint Eustatius and Saba',
                        'continent' => Null,
                        'location' => Null,
                    ),
            ),
        'BR' =>
            array(
                'alpha2' => 'BR',
                'alpha3' => 'BRA',
                'numeric' => '076',
                'isd' => '55',
                'ru' =>
                    array(
                        'name' => 'Бразилия',
                        'fullName' => 'Федеративная Республика Бразилия',
                        'continent' => 'Северная Америка',
                        'location' => 'Южная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Brazil',
                        'fullName' => 'Brazil',
                        'continent' => 'South America',
                        'location' => 'South America',
                    ),
            ),
        'BS' =>
            array(
                'alpha2' => 'BS',
                'alpha3' => 'BHS',
                'numeric' => '044',
                'isd' => '1242',
                'ru' =>
                    array(
                        'name' => 'Багамы',
                        'fullName' => 'Содружество Багамы',
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Bahamas',
                        'fullName' => 'Bahamas',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'BT' =>
            array(
                'alpha2' => 'BT',
                'alpha3' => 'BTN',
                'numeric' => '064',
                'isd' => '975',
                'ru' =>
                    array(
                        'name' => 'Бутан',
                        'fullName' => 'Королевство Бутан',
                        'continent' => 'Азия',
                        'location' => 'Южная часть Центральной Азии',
                    ),
                'en' =>
                    array(
                        'name' => 'Bhutan',
                        'fullName' => 'Bhutan',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'BV' =>
            array(
                'alpha2' => 'BV',
                'alpha3' => 'BVT',
                'numeric' => '074',
                'isd' => '61',
                'ru' =>
                    array(
                        'name' => 'Остров Буве',
                        'fullName' => Null,
                        'continent' => '',
                        'location' => 'Южный океан',
                    ),
                'en' =>
                    array(
                        'name' => 'Bouvet Island',
                        'fullName' => 'Bouvet Island',
                        'continent' => 'Antarctica',
                        'location' => 'Antarctica',
                    ),
            ),
        'BW' =>
            array(
                'alpha2' => 'BW',
                'alpha3' => 'BWA',
                'numeric' => '072',
                'isd' => '267',
                'ru' =>
                    array(
                        'name' => 'Ботсвана',
                        'fullName' => 'Республика Ботсвана',
                        'continent' => 'Африка',
                        'location' => 'Южная часть Африки',
                    ),
                'en' =>
                    array(
                        'name' => 'Botswana',
                        'fullName' => 'Botswana',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'BY' =>
            array(
                'alpha2' => 'BY',
                'alpha3' => 'BLR',
                'numeric' => '112',
                'isd' => '375',
                'ru' =>
                    array(
                        'name' => 'Беларусь',
                        'fullName' => 'Республика Беларусь',
                        'continent' => 'Европа',
                        'location' => 'Восточная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Belarus',
                        'fullName' => 'Belarus',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'BZ' =>
            array(
                'alpha2' => 'BZ',
                'alpha3' => 'BLZ',
                'numeric' => '084',
                'isd' => '501',
                'ru' =>
                    array(
                        'name' => 'Белиз',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Belize',
                        'fullName' => 'Belize',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'CA' =>
            array(
                'alpha2' => 'CA',
                'alpha3' => 'CAN',
                'numeric' => '124',
                'isd' => '1',
                'ru' =>
                    array(
                        'name' => 'Канада',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Северная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Canada',
                        'fullName' => 'Canada',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'CC' =>
            array(
                'alpha2' => 'CC',
                'alpha3' => 'CCK',
                'numeric' => '166',
                'isd' => '891',
                'ru' =>
                    array(
                        'name' => 'Кокосовые острова',
                        'fullName' => 'Кокосовые (Килинг) острова',
                        'continent' => 'Океания',
                        'location' => 'Индийский океан',
                    ),
                'en' =>
                    array(
                        'name' => 'Cocos Islands',
                        'fullName' => 'Cocos (Keeling) Islands',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'CD' =>
            array(
                'alpha2' => 'CD',
                'alpha3' => 'COD',
                'numeric' => '180',
                'isd' => '243',
                'ru' =>
                    array(
                        'name' => 'Демократическая Республика Конго',
                        'fullName' => 'Демократическая Республика Конго',
                        'continent' => 'Африка',
                        'location' => 'Центральная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Democratic Republic of the Congo',
                        'fullName' => 'Democratic Republic of the Congo',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'CF' =>
            array(
                'alpha2' => 'CF',
                'alpha3' => 'CAF',
                'numeric' => '140',
                'isd' => '236',
                'ru' =>
                    array(
                        'name' => 'ЦАР',
                        'fullName' => 'Центральноафриканская Респу́блика',
                        'continent' => 'Африка',
                        'location' => 'Центральная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'CAR',
                        'fullName' => 'Central African Republic',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'CG' =>
            array(
                'alpha2' => 'CG',
                'alpha3' => 'COG',
                'numeric' => '178',
                'isd' => '242',
                'ru' =>
                    array(
                        'name' => 'Конго',
                        'fullName' => 'Республика Конго',
                        'continent' => 'Африка',
                        'location' => 'Центральная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Congo',
                        'fullName' => 'Republic of the Congo',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'CH' =>
            array(
                'alpha2' => 'CH',
                'alpha3' => 'CHE',
                'numeric' => '756',
                'isd' => '41',
                'ru' =>
                    array(
                        'name' => 'Швейцария',
                        'fullName' => 'Швейцарская Конфедерация',
                        'continent' => 'Европа',
                        'location' => 'Западная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Switzerland',
                        'fullName' => 'Swiss Confederation',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'CI' =>
            array(
                'alpha2' => 'CI',
                'alpha3' => 'CIV',
                'numeric' => '384',
                'isd' => '225',
                'ru' =>
                    array(
                        'name' => 'Кот д\'Ивуар',
                        'fullName' => 'Республика Кот д\'Ивуар',
                        'continent' => 'Африка',
                        'location' => 'Западная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Cote d\'Ivoire',
                        'fullName' => 'Cote d\'Ivoire',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'CK' =>
            array(
                'alpha2' => 'CK',
                'alpha3' => 'COK',
                'numeric' => '184',
                'isd' => '682',
                'ru' =>
                    array(
                        'name' => 'Острова Кука',
                        'fullName' => Null,
                        'continent' => 'Океания',
                        'location' => 'Полинезия',
                    ),
                'en' =>
                    array(
                        'name' => 'Cook Islands',
                        'fullName' => 'Cook Islands',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'CL' =>
            array(
                'alpha2' => 'CL',
                'alpha3' => 'CHL',
                'numeric' => '152',
                'isd' => '56',
                'ru' =>
                    array(
                        'name' => 'Чили',
                        'fullName' => 'Республика Чили',
                        'continent' => 'Северная Америка',
                        'location' => 'Южная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Chile',
                        'fullName' => 'Chile',
                        'continent' => 'South America',
                        'location' => 'South America',
                    ),
            ),
        'CM' =>
            array(
                'alpha2' => 'CM',
                'alpha3' => 'CMR',
                'numeric' => '120',
                'isd' => '231',
                'ru' =>
                    array(
                        'name' => 'Камерун',
                        'fullName' => 'Республика Камерун',
                        'continent' => 'Африка',
                        'location' => 'Центральная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Cameroon',
                        'fullName' => 'Cameroon',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'CN' =>
            array(
                'alpha2' => 'CN',
                'alpha3' => 'CHN',
                'numeric' => '156',
                'isd' => '86',
                'ru' =>
                    array(
                        'name' => 'Китай',
                        'fullName' => 'Китайская Народная Республика',
                        'continent' => 'Азия',
                        'location' => 'Восточная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'China',
                        'fullName' => 'China',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'CO' =>
            array(
                'alpha2' => 'CO',
                'alpha3' => 'COL',
                'numeric' => '170',
                'isd' => '57',
                'ru' =>
                    array(
                        'name' => 'Колумбия',
                        'fullName' => 'Республика Колумбия',
                        'continent' => 'Северная Америка',
                        'location' => 'Южная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Colombia',
                        'fullName' => 'Colombia',
                        'continent' => 'South America',
                        'location' => 'South America',
                    ),
            ),
        'CR' =>
            array(
                'alpha2' => 'CR',
                'alpha3' => 'CRI',
                'numeric' => '188',
                'isd' => '506',
                'ru' =>
                    array(
                        'name' => 'Коста-Рика',
                        'fullName' => 'Республика Коста-Рика',
                        'continent' => 'Северная Америка',
                        'location' => 'Центральная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Costa Rica',
                        'fullName' => 'Costa Rica',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'CU' =>
            array(
                'alpha2' => 'CU',
                'alpha3' => 'CUB',
                'numeric' => '192',
                'isd' => '53',
                'ru' =>
                    array(
                        'name' => 'Куба',
                        'fullName' => 'Республика Куба',
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Cuba',
                        'fullName' => 'Cuba',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'CV' =>
            array(
                'alpha2' => 'CV',
                'alpha3' => 'CPV',
                'numeric' => '132',
                'isd' => '238',
                'ru' =>
                    array(
                        'name' => 'Кабо-Верде',
                        'fullName' => 'Республика Кабо-Верде',
                        'continent' => 'Африка',
                        'location' => 'Западная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Cape Verde',
                        'fullName' => 'Cape Verde',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'CW' =>
            array(
                'alpha2' => 'CW',
                'alpha3' => 'CUW',
                'numeric' => '531',
                'isd' => Null,
                'ru' =>
                    array(
                        'name' => 'Кюрасао',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Curaçao',
                        'fullName' => 'Curaçao',
                        'continent' => Null,
                        'location' => Null,
                    ),
            ),
        'CX' =>
            array(
                'alpha2' => 'CX',
                'alpha3' => 'CXR',
                'numeric' => '162',
                'isd' => '61',
                'ru' =>
                    array(
                        'name' => 'Остров Рождества',
                        'fullName' => Null,
                        'continent' => 'Азия',
                        'location' => 'Индийский океан',
                    ),
                'en' =>
                    array(
                        'name' => 'Christmas Island',
                        'fullName' => 'Christmas Island',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'CY' =>
            array(
                'alpha2' => 'CY',
                'alpha3' => 'CYP',
                'numeric' => '196',
                'isd' => '357',
                'ru' =>
                    array(
                        'name' => 'Кипр',
                        'fullName' => 'Республика Кипр',
                        'continent' => 'Азия',
                        'location' => 'Западная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Cyprus',
                        'fullName' => 'Cyprus',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'CZ' =>
            array(
                'alpha2' => 'CZ',
                'alpha3' => 'CZE',
                'numeric' => '203',
                'isd' => '420',
                'ru' =>
                    array(
                        'name' => 'Чехия',
                        'fullName' => 'Чешская Республика',
                        'continent' => 'Европа',
                        'location' => 'Восточная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Czech Republic',
                        'fullName' => 'Czech Republic',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'DE' =>
            array(
                'alpha2' => 'DE',
                'alpha3' => 'DEU',
                'numeric' => '276',
                'isd' => '49',
                'ru' =>
                    array(
                        'name' => 'Германия',
                        'fullName' => 'Федеративная Республика Германия',
                        'continent' => 'Европа',
                        'location' => 'Западная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Germany',
                        'fullName' => 'Germany',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'DJ' =>
            array(
                'alpha2' => 'DJ',
                'alpha3' => 'DJI',
                'numeric' => '262',
                'isd' => '253',
                'ru' =>
                    array(
                        'name' => 'Джибути',
                        'fullName' => 'Республика Джибути',
                        'continent' => 'Африка',
                        'location' => 'Восточная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Djibouti',
                        'fullName' => 'Djibouti',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'DK' =>
            array(
                'alpha2' => 'DK',
                'alpha3' => 'DNK',
                'numeric' => '208',
                'isd' => '45',
                'ru' =>
                    array(
                        'name' => 'Дания',
                        'fullName' => 'Королевство Дания',
                        'continent' => 'Европа',
                        'location' => 'Северная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Denmark',
                        'fullName' => 'Denmark',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'DM' =>
            array(
                'alpha2' => 'DM',
                'alpha3' => 'DMA',
                'numeric' => '212',
                'isd' => '1767',
                'ru' =>
                    array(
                        'name' => 'Доминика',
                        'fullName' => 'Содружество Доминики',
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Dominica',
                        'fullName' => 'Dominica',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'DO' =>
            array(
                'alpha2' => 'DO',
                'alpha3' => 'DOM',
                'numeric' => '214',
                'isd' => '1809',
                'ru' =>
                    array(
                        'name' => 'Доминиканская Республика',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Dominican Republic',
                        'fullName' => 'Dominican Republic',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'DZ' =>
            array(
                'alpha2' => 'DZ',
                'alpha3' => 'DZA',
                'numeric' => '012',
                'isd' => '213',
                'ru' =>
                    array(
                        'name' => 'Алжир',
                        'fullName' => 'Алжирская Народная Демократическая Республика',
                        'continent' => 'Африка',
                        'location' => 'Северная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Algeria',
                        'fullName' => 'Algeria',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'EC' =>
            array(
                'alpha2' => 'EC',
                'alpha3' => 'ECU',
                'numeric' => '218',
                'isd' => '593',
                'ru' =>
                    array(
                        'name' => 'Эквадор',
                        'fullName' => 'Республика Эквадор',
                        'continent' => 'Северная Америка',
                        'location' => 'Южная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Ecuador',
                        'fullName' => 'Ecuador',
                        'continent' => 'South America',
                        'location' => 'South America',
                    ),
            ),
        'EE' =>
            array(
                'alpha2' => 'EE',
                'alpha3' => 'EST',
                'numeric' => '233',
                'isd' => '372',
                'ru' =>
                    array(
                        'name' => 'Эстония',
                        'fullName' => 'Эстонская Республика',
                        'continent' => 'Европа',
                        'location' => 'Северная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Estonia',
                        'fullName' => 'Estonia',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'EG' =>
            array(
                'alpha2' => 'EG',
                'alpha3' => 'EGY',
                'numeric' => '818',
                'isd' => '20',
                'ru' =>
                    array(
                        'name' => 'Египет',
                        'fullName' => 'Арабская Республика Египет',
                        'continent' => 'Африка',
                        'location' => 'Северная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Egypt',
                        'fullName' => 'Egypt',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'EH' =>
            array(
                'alpha2' => 'EH',
                'alpha3' => 'ESH',
                'numeric' => '732',
                'isd' => '212',
                'ru' =>
                    array(
                        'name' => 'Западная Сахара',
                        'fullName' => Null,
                        'continent' => 'Африка',
                        'location' => 'Северная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Western Sahara',
                        'fullName' => 'Western Sahara',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'ER' =>
            array(
                'alpha2' => 'ER',
                'alpha3' => 'ERI',
                'numeric' => '232',
                'isd' => '291',
                'ru' =>
                    array(
                        'name' => 'Эритрея',
                        'fullName' => Null,
                        'continent' => 'Африка',
                        'location' => 'Восточная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Eritrea',
                        'fullName' => 'Eritrea',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'ES' =>
            array(
                'alpha2' => 'ES',
                'alpha3' => 'ESP',
                'numeric' => '724',
                'isd' => '34',
                'ru' =>
                    array(
                        'name' => 'Испания',
                        'fullName' => 'Королевство Испания',
                        'continent' => 'Европа',
                        'location' => 'Южная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Spain',
                        'fullName' => 'Spain',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'ET' =>
            array(
                'alpha2' => 'ET',
                'alpha3' => 'ETH',
                'numeric' => '231',
                'isd' => '251',
                'ru' =>
                    array(
                        'name' => 'Эфиопия',
                        'fullName' => 'Федеративная Демократическая Республика Эфиопия',
                        'continent' => 'Африка',
                        'location' => 'Восточная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Ethiopia',
                        'fullName' => 'Ethiopia',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'FI' =>
            array(
                'alpha2' => 'FI',
                'alpha3' => 'FIN',
                'numeric' => '246',
                'isd' => '238',
                'ru' =>
                    array(
                        'name' => 'Финляндия',
                        'fullName' => 'Финляндская Республика',
                        'continent' => 'Европа',
                        'location' => 'Северная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Finland',
                        'fullName' => 'Finland',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'FJ' =>
            array(
                'alpha2' => 'FJ',
                'alpha3' => 'FJI',
                'numeric' => '242',
                'isd' => '679',
                'ru' =>
                    array(
                        'name' => 'Фиджи',
                        'fullName' => 'Республика островов Фиджи',
                        'continent' => 'Океания',
                        'location' => 'Меланезия',
                    ),
                'en' =>
                    array(
                        'name' => 'Fiji',
                        'fullName' => 'Fiji',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'FK' =>
            array(
                'alpha2' => 'FK',
                'alpha3' => 'FLK',
                'numeric' => '238',
                'isd' => '500',
                'ru' =>
                    array(
                        'name' => 'Фолклендские острова (Мальвинские)',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Южная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Falkland Islands (Malvinas)',
                        'fullName' => 'Falkland Islands (Malvinas)',
                        'continent' => 'South America',
                        'location' => 'South America',
                    ),
            ),
        'FM' =>
            array(
                'alpha2' => 'FM',
                'alpha3' => 'FSM',
                'numeric' => '583',
                'isd' => '691',
                'ru' =>
                    array(
                        'name' => 'Микронезия, Федеративные Штаты',
                        'fullName' => 'Федеративные штаты Микронезии',
                        'continent' => 'Океания',
                        'location' => 'Микронезия',
                    ),
                'en' =>
                    array(
                        'name' => 'Micronesia, Federated States of',
                        'fullName' => 'Micronesia, Federated States of',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'FO' =>
            array(
                'alpha2' => 'FO',
                'alpha3' => 'FRO',
                'numeric' => '234',
                'isd' => '298',
                'ru' =>
                    array(
                        'name' => 'Фарерские острова',
                        'fullName' => Null,
                        'continent' => 'Европа',
                        'location' => 'Северная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Faroe Islands',
                        'fullName' => 'Faroe Islands',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'FR' =>
            array(
                'alpha2' => 'FR',
                'alpha3' => 'FRA',
                'numeric' => '250',
                'isd' => '33',
                'ru' =>
                    array(
                        'name' => 'Франция',
                        'fullName' => 'Французская Республика',
                        'continent' => 'Европа',
                        'location' => 'Западная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'France',
                        'fullName' => 'France',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'GA' =>
            array(
                'alpha2' => 'GA',
                'alpha3' => 'GAB',
                'numeric' => '266',
                'isd' => '241',
                'ru' =>
                    array(
                        'name' => 'Габон',
                        'fullName' => 'Габонская Республика',
                        'continent' => 'Африка',
                        'location' => 'Центральная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Gabon',
                        'fullName' => 'Gabon',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'GB' =>
            array(
                'alpha2' => 'GB',
                'alpha3' => 'GBR',
                'numeric' => '826',
                'isd' => '44',
                'ru' =>
                    array(
                        'name' => 'Соединенное Королевство',
                        'fullName' => 'Соединенное Королевство Великобритании и Северной Ирландии',
                        'continent' => 'Европа',
                        'location' => 'Северная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'United Kingdom',
                        'fullName' => 'United Kingdom',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'GD' =>
            array(
                'alpha2' => 'GD',
                'alpha3' => 'GRD',
                'numeric' => '308',
                'isd' => '1473',
                'ru' =>
                    array(
                        'name' => 'Гренада',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Grenada',
                        'fullName' => 'Grenada',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'GE' =>
            array(
                'alpha2' => 'GE',
                'alpha3' => 'GEO',
                'numeric' => '268',
                'isd' => '995',
                'ru' =>
                    array(
                        'name' => 'Грузия',
                        'fullName' => Null,
                        'continent' => 'Азия',
                        'location' => 'Западная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Georgia',
                        'fullName' => 'Georgia',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'GF' =>
            array(
                'alpha2' => 'GF',
                'alpha3' => 'GUF',
                'numeric' => '254',
                'isd' => '594',
                'ru' =>
                    array(
                        'name' => 'Французская Гвиана',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Южная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'French Guiana',
                        'fullName' => 'French Guiana',
                        'continent' => 'South America',
                        'location' => 'South America',
                    ),
            ),
        'GG' =>
            array(
                'alpha2' => 'GG',
                'alpha3' => 'GGY',
                'numeric' => '831',
                'isd' => '44',
                'ru' =>
                    array(
                        'name' => 'Гернси',
                        'fullName' => Null,
                        'continent' => 'Европа',
                        'location' => 'Северная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Guernsey',
                        'fullName' => 'Guernsey',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'GH' =>
            array(
                'alpha2' => 'GH',
                'alpha3' => 'GHA',
                'numeric' => '288',
                'isd' => '233',
                'ru' =>
                    array(
                        'name' => 'Гана',
                        'fullName' => 'Республика Гана',
                        'continent' => 'Африка',
                        'location' => 'Западная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Ghana',
                        'fullName' => 'Ghana',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'GI' =>
            array(
                'alpha2' => 'GI',
                'alpha3' => 'GIB',
                'numeric' => '292',
                'isd' => '350',
                'ru' =>
                    array(
                        'name' => 'Гибралтар',
                        'fullName' => Null,
                        'continent' => 'Европа',
                        'location' => 'Южная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Gibraltar',
                        'fullName' => 'Gibraltar',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'GL' =>
            array(
                'alpha2' => 'GL',
                'alpha3' => 'GRL',
                'numeric' => '304',
                'isd' => '299',
                'ru' =>
                    array(
                        'name' => 'Гренландия',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Северная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Greenland',
                        'fullName' => 'Greenland',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'GM' =>
            array(
                'alpha2' => 'GM',
                'alpha3' => 'GMB',
                'numeric' => '270',
                'isd' => '220',
                'ru' =>
                    array(
                        'name' => 'Гамбия',
                        'fullName' => 'Республика Гамбия',
                        'continent' => 'Африка',
                        'location' => 'Западная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Gambia',
                        'fullName' => 'Gambia',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'GN' =>
            array(
                'alpha2' => 'GN',
                'alpha3' => 'GIN',
                'numeric' => '324',
                'isd' => '224',
                'ru' =>
                    array(
                        'name' => 'Гвинея',
                        'fullName' => 'Гвинейская Республика',
                        'continent' => 'Африка',
                        'location' => 'Западная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Guinea',
                        'fullName' => 'Guinea',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'GP' =>
            array(
                'alpha2' => 'GP',
                'alpha3' => 'GLP',
                'numeric' => '312',
                'isd' => '590',
                'ru' =>
                    array(
                        'name' => 'Гваделупа',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Guadeloupe',
                        'fullName' => 'Guadeloupe',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'GQ' =>
            array(
                'alpha2' => 'GQ',
                'alpha3' => 'GNQ',
                'numeric' => '226',
                'isd' => '240',
                'ru' =>
                    array(
                        'name' => 'Экваториальная Гвинея',
                        'fullName' => 'Республика Экваториальная Гвинея',
                        'continent' => 'Африка',
                        'location' => 'Центральная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Equatorial Guinea',
                        'fullName' => 'Equatorial Guinea',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'GR' =>
            array(
                'alpha2' => 'GR',
                'alpha3' => 'GRC',
                'numeric' => '300',
                'isd' => '30',
                'ru' =>
                    array(
                        'name' => 'Греция',
                        'fullName' => 'Греческая Республика',
                        'continent' => 'Европа',
                        'location' => 'Южная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Greece',
                        'fullName' => 'Greece',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'GS' =>
            array(
                'alpha2' => 'GS',
                'alpha3' => 'SGS',
                'numeric' => '239',
                'isd' => '500',
                'ru' =>
                    array(
                        'name' => 'Южная Джорджия и Южные Сандвичевы острова',
                        'fullName' => Null,
                        'continent' => 'Антарктика',
                        'location' => 'Южный океан',
                    ),
                'en' =>
                    array(
                        'name' => 'South Georgia and the South Sandwich Islands',
                        'fullName' => 'South Georgia and the South Sandwich Islands',
                        'continent' => 'Antarctica',
                        'location' => 'Antarctica',
                    ),
            ),
        'GT' =>
            array(
                'alpha2' => 'GT',
                'alpha3' => 'GTM',
                'numeric' => '320',
                'isd' => '502',
                'ru' =>
                    array(
                        'name' => 'Гватемала',
                        'fullName' => 'Республика Гватемала',
                        'continent' => 'Северная Америка',
                        'location' => 'Центральная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Guatemala',
                        'fullName' => 'Guatemala',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'GU' =>
            array(
                'alpha2' => 'GU',
                'alpha3' => 'GUM',
                'numeric' => '316',
                'isd' => '1871',
                'ru' =>
                    array(
                        'name' => 'Гуам',
                        'fullName' => Null,
                        'continent' => 'Океания',
                        'location' => 'Микронезия',
                    ),
                'en' =>
                    array(
                        'name' => 'Guam',
                        'fullName' => 'Guam',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'GW' =>
            array(
                'alpha2' => 'GW',
                'alpha3' => 'GNB',
                'numeric' => '624',
                'isd' => '245',
                'ru' =>
                    array(
                        'name' => 'Гвинея-Бисау',
                        'fullName' => 'Республика Гвинея-Бисау',
                        'continent' => 'Африка',
                        'location' => 'Западная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Guinea-Bissau',
                        'fullName' => 'Guinea-Bissau',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'GY' =>
            array(
                'alpha2' => 'GY',
                'alpha3' => 'GUY',
                'numeric' => '328',
                'isd' => '592',
                'ru' =>
                    array(
                        'name' => 'Гайана',
                        'fullName' => 'Республика Гайана',
                        'continent' => 'Северная Америка',
                        'location' => 'Южная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Guyana',
                        'fullName' => 'Guyana',
                        'continent' => 'South America',
                        'location' => 'South America',
                    ),
            ),
        'HK' =>
            array(
                'alpha2' => 'HK',
                'alpha3' => 'HKG',
                'numeric' => '344',
                'isd' => '852',
                'ru' =>
                    array(
                        'name' => 'Гонконг',
                        'fullName' => 'Специальный административный регион Китая Гонконг',
                        'continent' => 'Азия',
                        'location' => 'Восточная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Hong Kong',
                        'fullName' => 'Hong Kong',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'HM' =>
            array(
                'alpha2' => 'HM',
                'alpha3' => 'HMD',
                'numeric' => '334',
                'isd' => '672',
                'ru' =>
                    array(
                        'name' => 'Остров Херд и острова Макдональд',
                        'fullName' => Null,
                        'continent' => 'Антарктика',
                        'location' => 'Индийский океан',
                    ),
                'en' =>
                    array(
                        'name' => 'Heard Island and McDonald Islands',
                        'fullName' => 'Heard Island and McDonald Islands',
                        'continent' => 'Antarctica',
                        'location' => 'Antarctica',
                    ),
            ),
        'HN' =>
            array(
                'alpha2' => 'HN',
                'alpha3' => 'HND',
                'numeric' => '340',
                'isd' => '504',
                'ru' =>
                    array(
                        'name' => 'Гондурас',
                        'fullName' => 'Республика Гондурас',
                        'continent' => 'Северная Америка',
                        'location' => 'Центральная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Honduras',
                        'fullName' => 'Honduras',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'HR' =>
            array(
                'alpha2' => 'HR',
                'alpha3' => 'HRV',
                'numeric' => '191',
                'isd' => '385',
                'ru' =>
                    array(
                        'name' => 'Хорватия',
                        'fullName' => 'Республика Хорватия',
                        'continent' => 'Европа',
                        'location' => 'Южная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Croatia',
                        'fullName' => 'Croatia',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'HT' =>
            array(
                'alpha2' => 'HT',
                'alpha3' => 'HTI',
                'numeric' => '332',
                'isd' => '509',
                'ru' =>
                    array(
                        'name' => 'Гаити',
                        'fullName' => 'Республика Гаити',
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Haiti',
                        'fullName' => 'Haiti',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'HU' =>
            array(
                'alpha2' => 'HU',
                'alpha3' => 'HUN',
                'numeric' => '348',
                'isd' => '36',
                'ru' =>
                    array(
                        'name' => 'Венгрия',
                        'fullName' => 'Венгерская Республика',
                        'continent' => 'Европа',
                        'location' => 'Восточная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Hungary',
                        'fullName' => 'Hungary',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'ID' =>
            array(
                'alpha2' => 'ID',
                'alpha3' => 'IDN',
                'numeric' => '360',
                'isd' => '62',
                'ru' =>
                    array(
                        'name' => 'Индонезия',
                        'fullName' => 'Республика Индонезия',
                        'continent' => 'Азия',
                        'location' => 'Юго-Восточная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Indonesia',
                        'fullName' => 'Indonesia',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'IE' =>
            array(
                'alpha2' => 'IE',
                'alpha3' => 'IRL',
                'numeric' => '372',
                'isd' => '353',
                'ru' =>
                    array(
                        'name' => 'Ирландия',
                        'fullName' => Null,
                        'continent' => 'Европа',
                        'location' => 'Северная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Ireland',
                        'fullName' => 'Ireland',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'IL' =>
            array(
                'alpha2' => 'IL',
                'alpha3' => 'ISR',
                'numeric' => '376',
                'isd' => '972',
                'ru' =>
                    array(
                        'name' => 'Израиль',
                        'fullName' => 'Государство Израиль',
                        'continent' => 'Азия',
                        'location' => 'Западная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Israel',
                        'fullName' => 'Israel',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'IM' =>
            array(
                'alpha2' => 'IM',
                'alpha3' => 'IMN',
                'numeric' => '833',
                'isd' => '44',
                'ru' =>
                    array(
                        'name' => 'Остров Мэн',
                        'fullName' => Null,
                        'continent' => 'Европа',
                        'location' => 'Северная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Isle of Man',
                        'fullName' => 'Isle of Man',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'IN' =>
            array(
                'alpha2' => 'IN',
                'alpha3' => 'IND',
                'numeric' => '356',
                'isd' => '91',
                'ru' =>
                    array(
                        'name' => 'Индия',
                        'fullName' => 'Республика Индия',
                        'continent' => 'Азия',
                        'location' => 'Южная часть Центральной Азии',
                    ),
                'en' =>
                    array(
                        'name' => 'India',
                        'fullName' => 'India',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'IO' =>
            array(
                'alpha2' => 'IO',
                'alpha3' => 'IOT',
                'numeric' => '086',
                'isd' => '246',
                'ru' =>
                    array(
                        'name' => 'Британская территория в Индийском океане',
                        'fullName' => Null,
                        'continent' => 'Океания',
                        'location' => 'Индийский океан',
                    ),
                'en' =>
                    array(
                        'name' => 'British Indian Ocean Territory',
                        'fullName' => 'British Indian Ocean Territory',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'IQ' =>
            array(
                'alpha2' => 'IQ',
                'alpha3' => 'IRQ',
                'numeric' => '368',
                'isd' => '964',
                'ru' =>
                    array(
                        'name' => 'Ирак',
                        'fullName' => 'Республика Ирак',
                        'continent' => 'Азия',
                        'location' => 'Западная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Iraq',
                        'fullName' => 'Iraq',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'IR' =>
            array(
                'alpha2' => 'IR',
                'alpha3' => 'IRN',
                'numeric' => '364',
                'isd' => '98',
                'ru' =>
                    array(
                        'name' => 'Иран',
                        'fullName' => 'Исламская Республика Иран',
                        'continent' => 'Азия',
                        'location' => 'Южная часть Центральной Азии',
                    ),
                'en' =>
                    array(
                        'name' => 'Iran',
                        'fullName' => 'Islamic Republic of Iran',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'IS' =>
            array(
                'alpha2' => 'IS',
                'alpha3' => 'ISL',
                'numeric' => '352',
                'isd' => '354',
                'ru' =>
                    array(
                        'name' => 'Исландия',
                        'fullName' => 'Республика Исландия',
                        'continent' => 'Европа',
                        'location' => 'Северная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Iceland',
                        'fullName' => 'Iceland',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'IT' =>
            array(
                'alpha2' => 'IT',
                'alpha3' => 'ITA',
                'numeric' => '380',
                'isd' => '39',
                'ru' =>
                    array(
                        'name' => 'Италия',
                        'fullName' => 'Итальянская Республика',
                        'continent' => 'Европа',
                        'location' => 'Южная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Italy',
                        'fullName' => 'Italy',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'JE' =>
            array(
                'alpha2' => 'JE',
                'alpha3' => 'JEY',
                'numeric' => '832',
                'isd' => '44',
                'ru' =>
                    array(
                        'name' => 'Джерси',
                        'fullName' => Null,
                        'continent' => 'Европа',
                        'location' => 'Северная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Jersey',
                        'fullName' => 'Jersey',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'JM' =>
            array(
                'alpha2' => 'JM',
                'alpha3' => 'JAM',
                'numeric' => '388',
                'isd' => '1876',
                'ru' =>
                    array(
                        'name' => 'Ямайка',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Jamaica',
                        'fullName' => 'Jamaica',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'JO' =>
            array(
                'alpha2' => 'JO',
                'alpha3' => 'JOR',
                'numeric' => '400',
                'isd' => '962',
                'ru' =>
                    array(
                        'name' => 'Иордания',
                        'fullName' => 'Иорданское Хашимитское Королевство',
                        'continent' => 'Азия',
                        'location' => 'Западная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Jordan',
                        'fullName' => 'Jordan',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'JP' =>
            array(
                'alpha2' => 'JP',
                'alpha3' => 'JPN',
                'numeric' => '392',
                'isd' => '81',
                'ru' =>
                    array(
                        'name' => 'Япония',
                        'fullName' => Null,
                        'continent' => 'Азия',
                        'location' => 'Восточная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Japan',
                        'fullName' => 'Japan',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'KE' =>
            array(
                'alpha2' => 'KE',
                'alpha3' => 'KEN',
                'numeric' => '404',
                'isd' => '254',
                'ru' =>
                    array(
                        'name' => 'Кения',
                        'fullName' => 'Республика Кения',
                        'continent' => 'Африка',
                        'location' => 'Восточная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Kenya',
                        'fullName' => 'Kenya',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'KG' =>
            array(
                'alpha2' => 'KG',
                'alpha3' => 'KGZ',
                'numeric' => '417',
                'isd' => '996',
                'ru' =>
                    array(
                        'name' => 'Киргизия',
                        'fullName' => 'Киргизская Республика',
                        'continent' => 'Азия',
                        'location' => 'Южная часть Центральной Азии',
                    ),
                'en' =>
                    array(
                        'name' => 'Kyrgyzstan',
                        'fullName' => 'Kyrgyzstan',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'KH' =>
            array(
                'alpha2' => 'KH',
                'alpha3' => 'KHM',
                'numeric' => '116',
                'isd' => '855',
                'ru' =>
                    array(
                        'name' => 'Камбоджа',
                        'fullName' => 'Королевство Камбоджа',
                        'continent' => 'Азия',
                        'location' => 'Юго-Восточная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Cambodia',
                        'fullName' => 'Cambodia',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'KI' =>
            array(
                'alpha2' => 'KI',
                'alpha3' => 'KIR',
                'numeric' => '296',
                'isd' => '686',
                'ru' =>
                    array(
                        'name' => 'Кирибати',
                        'fullName' => 'Республика Кирибати',
                        'continent' => 'Океания',
                        'location' => 'Микронезия',
                    ),
                'en' =>
                    array(
                        'name' => 'Kiribati',
                        'fullName' => 'Kiribati',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'KM' =>
            array(
                'alpha2' => 'KM',
                'alpha3' => 'COM',
                'numeric' => '174',
                'isd' => '269',
                'ru' =>
                    array(
                        'name' => 'Коморы',
                        'fullName' => 'Союз Коморы',
                        'continent' => 'Африка',
                        'location' => 'Восточная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Comoros',
                        'fullName' => 'Comoros',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'KN' =>
            array(
                'alpha2' => 'KN',
                'alpha3' => 'KNA',
                'numeric' => '659',
                'isd' => '1869',
                'ru' =>
                    array(
                        'name' => 'Сент-Китс и Невис',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Saint Kitts and Nevis',
                        'fullName' => 'Saint Kitts and Nevis',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'KP' =>
            array(
                'alpha2' => 'KP',
                'alpha3' => 'PRK',
                'numeric' => '408',
                'isd' => '850',
                'ru' =>
                    array(
                        'name' => 'Северная Корея',
                        'fullName' => 'Корейская Народно-Демократическая Республика',
                        'continent' => 'Азия',
                        'location' => 'Восточная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'North Korea',
                        'fullName' => 'Democratic People\'s Republic of Korea',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'KR' =>
            array(
                'alpha2' => 'KR',
                'alpha3' => 'KOR',
                'numeric' => '410',
                'isd' => '82',
                'ru' =>
                    array(
                        'name' => 'Корея',
                        'fullName' => 'Республика Корея',
                        'continent' => 'Азия',
                        'location' => 'Восточная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Korea',
                        'fullName' => 'Republic of Korea',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'KW' =>
            array(
                'alpha2' => 'KW',
                'alpha3' => 'KWT',
                'numeric' => '414',
                'isd' => '965',
                'ru' =>
                    array(
                        'name' => 'Кувейт',
                        'fullName' => 'Государство Кувейт',
                        'continent' => 'Азия',
                        'location' => 'Западная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Kuwait',
                        'fullName' => 'Kuwait',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'KY' =>
            array(
                'alpha2' => 'KY',
                'alpha3' => 'CYM',
                'numeric' => '136',
                'isd' => '1345',
                'ru' =>
                    array(
                        'name' => 'Острова Кайман',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Cayman Islands',
                        'fullName' => 'Cayman Islands',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'KZ' =>
            array(
                'alpha2' => 'KZ',
                'alpha3' => 'KAZ',
                'numeric' => '398',
                'isd' => '7',
                'ru' =>
                    array(
                        'name' => 'Казахстан',
                        'fullName' => 'Республика Казахстан',
                        'continent' => 'Азия',
                        'location' => 'Южная часть Центральной Азии',
                    ),
                'en' =>
                    array(
                        'name' => 'Kazakhstan',
                        'fullName' => 'Kazakhstan',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'LA' =>
            array(
                'alpha2' => 'LA',
                'alpha3' => 'LAO',
                'numeric' => '418',
                'isd' => '856',
                'ru' =>
                    array(
                        'name' => 'Лаос',
                        'fullName' => 'Лаосская Народно-Демократическая Республика',
                        'continent' => 'Азия',
                        'location' => 'Юго-Восточная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Laos',
                        'fullName' => 'Lao People\'s Democratic Republic',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'LB' =>
            array(
                'alpha2' => 'LB',
                'alpha3' => 'LBN',
                'numeric' => '422',
                'isd' => '961',
                'ru' =>
                    array(
                        'name' => 'Ливан',
                        'fullName' => 'Ливанская Республика',
                        'continent' => 'Азия',
                        'location' => 'Западная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Lebanon',
                        'fullName' => 'Lebanon',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'LC' =>
            array(
                'alpha2' => 'LC',
                'alpha3' => 'LCA',
                'numeric' => '662',
                'isd' => '1758',
                'ru' =>
                    array(
                        'name' => 'Сент-Люсия',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Saint Lucia',
                        'fullName' => 'Saint Lucia',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'LI' =>
            array(
                'alpha2' => 'LI',
                'alpha3' => 'LIE',
                'numeric' => '438',
                'isd' => '423',
                'ru' =>
                    array(
                        'name' => 'Лихтенштейн',
                        'fullName' => 'Княжество Лихтенштейн',
                        'continent' => 'Европа',
                        'location' => 'Западная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Liechtenstein',
                        'fullName' => 'Liechtenstein',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'LK' =>
            array(
                'alpha2' => 'LK',
                'alpha3' => 'LKA',
                'numeric' => '144',
                'isd' => '94',
                'ru' =>
                    array(
                        'name' => 'Шри-Ланка',
                        'fullName' => 'Демократическая Социалистическая Республика Шри-Ланка',
                        'continent' => 'Азия',
                        'location' => 'Южная часть Центральной Азии',
                    ),
                'en' =>
                    array(
                        'name' => 'Sri Lanka',
                        'fullName' => 'Sri Lanka',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'LR' =>
            array(
                'alpha2' => 'LR',
                'alpha3' => 'LBR',
                'numeric' => '430',
                'isd' => '231',
                'ru' =>
                    array(
                        'name' => 'Либерия',
                        'fullName' => 'Республика Либерия',
                        'continent' => 'Африка',
                        'location' => 'Западная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Liberia',
                        'fullName' => 'Liberia',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'LS' =>
            array(
                'alpha2' => 'LS',
                'alpha3' => 'LSO',
                'numeric' => '426',
                'isd' => '266',
                'ru' =>
                    array(
                        'name' => 'Лесото',
                        'fullName' => 'Королевство Лесото',
                        'continent' => 'Африка',
                        'location' => 'Южная часть Африки',
                    ),
                'en' =>
                    array(
                        'name' => 'Lesotho',
                        'fullName' => 'Lesotho',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'LT' =>
            array(
                'alpha2' => 'LT',
                'alpha3' => 'LTU',
                'numeric' => '440',
                'isd' => '370',
                'ru' =>
                    array(
                        'name' => 'Литва',
                        'fullName' => 'Литовская Республика',
                        'continent' => 'Европа',
                        'location' => 'Северная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Lithuania',
                        'fullName' => 'Lithuania',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'LU' =>
            array(
                'alpha2' => 'LU',
                'alpha3' => 'LUX',
                'numeric' => '442',
                'isd' => '352',
                'ru' =>
                    array(
                        'name' => 'Люксембург',
                        'fullName' => 'Великое Герцогство Люксембург',
                        'continent' => 'Европа',
                        'location' => 'Западная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Luxembourg',
                        'fullName' => 'Luxembourg',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'LV' =>
            array(
                'alpha2' => 'LV',
                'alpha3' => 'LVA',
                'numeric' => '428',
                'isd' => '371',
                'ru' =>
                    array(
                        'name' => 'Латвия',
                        'fullName' => 'Латвийская Республика',
                        'continent' => 'Европа',
                        'location' => 'Северная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Latvia',
                        'fullName' => 'Latvia',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'LY' =>
            array(
                'alpha2' => 'LY',
                'alpha3' => 'LBY',
                'numeric' => '434',
                'isd' => '218',
                'ru' =>
                    array(
                        'name' => 'Ливийская Арабская Джамахирия',
                        'fullName' => 'Социалистическая Народная Ливийская Арабская Джамахирия',
                        'continent' => 'Африка',
                        'location' => 'Северная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Libyan Arab Jamahiriya',
                        'fullName' => 'Libyan Arab Jamahiriya',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'MA' =>
            array(
                'alpha2' => 'MA',
                'alpha3' => 'MAR',
                'numeric' => '504',
                'isd' => '212',
                'ru' =>
                    array(
                        'name' => 'Марокко',
                        'fullName' => 'Королевство Марокко',
                        'continent' => 'Африка',
                        'location' => 'Северная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Morocco',
                        'fullName' => 'Morocco',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'MC' =>
            array(
                'alpha2' => 'MC',
                'alpha3' => 'MCO',
                'numeric' => '492',
                'isd' => '377',
                'ru' =>
                    array(
                        'name' => 'Монако',
                        'fullName' => 'Княжество Монако',
                        'continent' => 'Европа',
                        'location' => 'Западная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Monaco',
                        'fullName' => 'Monaco',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'MD' =>
            array(
                'alpha2' => 'MD',
                'alpha3' => 'MDA',
                'numeric' => '498',
                'isd' => '373',
                'ru' =>
                    array(
                        'name' => 'Молдова',
                        'fullName' => 'Республика Молдова',
                        'continent' => 'Европа',
                        'location' => 'Восточная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Moldova',
                        'fullName' => 'Moldova',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'ME' =>
            array(
                'alpha2' => 'ME',
                'alpha3' => 'MNE',
                'numeric' => '499',
                'isd' => '382',
                'ru' =>
                    array(
                        'name' => 'Черногория',
                        'fullName' => 'Республика Черногория',
                        'continent' => 'Европа',
                        'location' => 'Южная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Montenegro',
                        'fullName' => 'Montenegro',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'MF' =>
            array(
                'alpha2' => 'MF',
                'alpha3' => 'MAF',
                'numeric' => '663',
                'isd' => Null,
                'ru' =>
                    array(
                        'name' => 'Сен-Мартен',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Saint Martin',
                        'fullName' => 'Saint Martin (French Part)',
                        'continent' => Null,
                        'location' => Null,
                    ),
            ),
        'MG' =>
            array(
                'alpha2' => 'MG',
                'alpha3' => 'MDG',
                'numeric' => '450',
                'isd' => '261',
                'ru' =>
                    array(
                        'name' => 'Мадагаскар',
                        'fullName' => 'Республика Мадагаскар',
                        'continent' => 'Африка',
                        'location' => 'Восточная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Madagascar',
                        'fullName' => 'Madagascar',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'MH' =>
            array(
                'alpha2' => 'MH',
                'alpha3' => 'MHL',
                'numeric' => '584',
                'isd' => '692',
                'ru' =>
                    array(
                        'name' => 'Маршалловы острова',
                        'fullName' => 'Республика Маршалловы острова',
                        'continent' => 'Океания',
                        'location' => 'Микронезия',
                    ),
                'en' =>
                    array(
                        'name' => 'Marshall Islands',
                        'fullName' => 'Marshall Islands',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'MK' =>
            array(
                'alpha2' => 'MK',
                'alpha3' => 'MKD',
                'numeric' => '807',
                'isd' => '389',
                'ru' =>
                    array(
                        'name' => 'Македония',
                        'fullName' => 'Республика Македония',
                        'continent' => 'Европа',
                        'location' => 'Южная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Macedonia',
                        'fullName' => 'The Former Yugoslav Republic Of Macedonia',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'ML' =>
            array(
                'alpha2' => 'ML',
                'alpha3' => 'MLI',
                'numeric' => '466',
                'isd' => '223',
                'ru' =>
                    array(
                        'name' => 'Мали',
                        'fullName' => 'Республика Мали',
                        'continent' => 'Африка',
                        'location' => 'Западная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Mali',
                        'fullName' => 'Mali',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'MM' =>
            array(
                'alpha2' => 'MM',
                'alpha3' => 'MMR',
                'numeric' => '104',
                'isd' => '95',
                'ru' =>
                    array(
                        'name' => 'Мьянма',
                        'fullName' => 'Союз Мьянма',
                        'continent' => 'Азия',
                        'location' => 'Юго-Восточная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Burma',
                        'fullName' => 'Burma',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'MN' =>
            array(
                'alpha2' => 'MN',
                'alpha3' => 'MNG',
                'numeric' => '496',
                'isd' => '976',
                'ru' =>
                    array(
                        'name' => 'Монголия',
                        'fullName' => Null,
                        'continent' => 'Азия',
                        'location' => 'Восточная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Mongolia',
                        'fullName' => 'Mongolia',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'MO' =>
            array(
                'alpha2' => 'MO',
                'alpha3' => 'MAC',
                'numeric' => '446',
                'isd' => '853',
                'ru' =>
                    array(
                        'name' => 'Макао',
                        'fullName' => 'Специальный административный регион Китая Макао',
                        'continent' => 'Азия',
                        'location' => 'Восточная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Macao',
                        'fullName' => 'Macao',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'MP' =>
            array(
                'alpha2' => 'MP',
                'alpha3' => 'MNP',
                'numeric' => '580',
                'isd' => '1670',
                'ru' =>
                    array(
                        'name' => 'Северные Марианские острова',
                        'fullName' => 'Содружество Северных Марианских островов',
                        'continent' => 'Океания',
                        'location' => 'Микронезия',
                    ),
                'en' =>
                    array(
                        'name' => 'Northern Mariana Islands',
                        'fullName' => 'Northern Mariana Islands',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'MQ' =>
            array(
                'alpha2' => 'MQ',
                'alpha3' => 'MTQ',
                'numeric' => '474',
                'isd' => '596',
                'ru' =>
                    array(
                        'name' => 'Мартиника',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Martinique',
                        'fullName' => 'Martinique',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'MR' =>
            array(
                'alpha2' => 'MR',
                'alpha3' => 'MRT',
                'numeric' => '478',
                'isd' => '222',
                'ru' =>
                    array(
                        'name' => 'Мавритания',
                        'fullName' => 'Исламская Республика Мавритания',
                        'continent' => 'Африка',
                        'location' => 'Западная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Mauritania',
                        'fullName' => 'Mauritania',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'MS' =>
            array(
                'alpha2' => 'MS',
                'alpha3' => 'MSR',
                'numeric' => '500',
                'isd' => '1664',
                'ru' =>
                    array(
                        'name' => 'Монтсеррат',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Montserrat',
                        'fullName' => 'Montserrat',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'MT' =>
            array(
                'alpha2' => 'MT',
                'alpha3' => 'MLT',
                'numeric' => '470',
                'isd' => '356',
                'ru' =>
                    array(
                        'name' => 'Мальта',
                        'fullName' => 'Республика Мальта',
                        'continent' => 'Европа',
                        'location' => 'Южная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Malta',
                        'fullName' => 'Malta',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'MU' =>
            array(
                'alpha2' => 'MU',
                'alpha3' => 'MUS',
                'numeric' => '480',
                'isd' => '230',
                'ru' =>
                    array(
                        'name' => 'Маврикий',
                        'fullName' => 'Республика Маврикий',
                        'continent' => 'Африка',
                        'location' => 'Восточная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Mauritius',
                        'fullName' => 'Mauritius',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'MV' =>
            array(
                'alpha2' => 'MV',
                'alpha3' => 'MDV',
                'numeric' => '462',
                'isd' => '960',
                'ru' =>
                    array(
                        'name' => 'Мальдивы',
                        'fullName' => 'Мальдивская Республика',
                        'continent' => 'Азия',
                        'location' => 'Южная часть Центральной Азии',
                    ),
                'en' =>
                    array(
                        'name' => 'Maldives',
                        'fullName' => 'Maldives',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'MW' =>
            array(
                'alpha2' => 'MW',
                'alpha3' => 'MWI',
                'numeric' => '454',
                'isd' => '265',
                'ru' =>
                    array(
                        'name' => 'Малави',
                        'fullName' => 'Республика Малави',
                        'continent' => 'Африка',
                        'location' => 'Восточная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Malawi',
                        'fullName' => 'Malawi',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'MX' =>
            array(
                'alpha2' => 'MX',
                'alpha3' => 'MEX',
                'numeric' => '484',
                'isd' => '52',
                'ru' =>
                    array(
                        'name' => 'Мексика',
                        'fullName' => 'Мексиканские Соединенные Штаты',
                        'continent' => 'Северная Америка',
                        'location' => 'Центральная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Mexico',
                        'fullName' => 'Mexico',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'MY' =>
            array(
                'alpha2' => 'MY',
                'alpha3' => 'MYS',
                'numeric' => '458',
                'isd' => '60',
                'ru' =>
                    array(
                        'name' => 'Малайзия',
                        'fullName' => Null,
                        'continent' => 'Азия',
                        'location' => 'Юго-Восточная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Malaysia',
                        'fullName' => 'Malaysia',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'MZ' =>
            array(
                'alpha2' => 'MZ',
                'alpha3' => 'MOZ',
                'numeric' => '508',
                'isd' => '258',
                'ru' =>
                    array(
                        'name' => 'Мозамбик',
                        'fullName' => 'Республика Мозамбик',
                        'continent' => 'Африка',
                        'location' => 'Восточная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Mozambique',
                        'fullName' => 'Mozambique',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'NA' =>
            array(
                'alpha2' => 'NA',
                'alpha3' => 'NAM',
                'numeric' => '516',
                'isd' => '264',
                'ru' =>
                    array(
                        'name' => 'Намибия',
                        'fullName' => 'Республика Намибия',
                        'continent' => 'Африка',
                        'location' => 'Южная часть Африки',
                    ),
                'en' =>
                    array(
                        'name' => 'Namibia',
                        'fullName' => 'Namibia',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'NC' =>
            array(
                'alpha2' => 'NC',
                'alpha3' => 'NCL',
                'numeric' => '540',
                'isd' => '687',
                'ru' =>
                    array(
                        'name' => 'Новая Каледония',
                        'fullName' => Null,
                        'continent' => 'Океания',
                        'location' => 'Меланезия',
                    ),
                'en' =>
                    array(
                        'name' => 'New Caledonia',
                        'fullName' => 'New Caledonia',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'NE' =>
            array(
                'alpha2' => 'NE',
                'alpha3' => 'NER',
                'numeric' => '562',
                'isd' => '227',
                'ru' =>
                    array(
                        'name' => 'Нигер',
                        'fullName' => 'Республика Нигер',
                        'continent' => 'Африка',
                        'location' => 'Западная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Niger',
                        'fullName' => 'Niger',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'NF' =>
            array(
                'alpha2' => 'NF',
                'alpha3' => 'NFK',
                'numeric' => '574',
                'isd' => '672',
                'ru' =>
                    array(
                        'name' => 'Остров Норфолк',
                        'fullName' => Null,
                        'continent' => 'Океания',
                        'location' => 'Австралия и Новая Зеландия',
                    ),
                'en' =>
                    array(
                        'name' => 'Norfolk Island',
                        'fullName' => 'Norfolk Island',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'NG' =>
            array(
                'alpha2' => 'NG',
                'alpha3' => 'NGA',
                'numeric' => '566',
                'isd' => '234',
                'ru' =>
                    array(
                        'name' => 'Нигерия',
                        'fullName' => 'Федеративная Республика Нигерия',
                        'continent' => 'Африка',
                        'location' => 'Западная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Nigeria',
                        'fullName' => 'Nigeria',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'NI' =>
            array(
                'alpha2' => 'NI',
                'alpha3' => 'NIC',
                'numeric' => '558',
                'isd' => '505',
                'ru' =>
                    array(
                        'name' => 'Никарагуа',
                        'fullName' => 'Республика Никарагуа',
                        'continent' => 'Северная Америка',
                        'location' => 'Центральная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Nicaragua',
                        'fullName' => 'Nicaragua',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'NL' =>
            array(
                'alpha2' => 'NL',
                'alpha3' => 'NLD',
                'numeric' => '528',
                'isd' => '31',
                'ru' =>
                    array(
                        'name' => 'Нидерланды',
                        'fullName' => 'Королевство Нидерландов',
                        'continent' => 'Европа',
                        'location' => 'Западная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Netherlands',
                        'fullName' => 'Netherlands',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'NO' =>
            array(
                'alpha2' => 'NO',
                'alpha3' => 'NOR',
                'numeric' => '578',
                'isd' => '47',
                'ru' =>
                    array(
                        'name' => 'Норвегия',
                        'fullName' => 'Королевство Норвегия',
                        'continent' => 'Европа',
                        'location' => 'Северная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Norway',
                        'fullName' => 'Norway',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'NP' =>
            array(
                'alpha2' => 'NP',
                'alpha3' => 'NPL',
                'numeric' => '524',
                'isd' => '977',
                'ru' =>
                    array(
                        'name' => 'Непал',
                        'fullName' => 'Королевство Непал',
                        'continent' => 'Азия',
                        'location' => 'Южная часть Центральной Азии',
                    ),
                'en' =>
                    array(
                        'name' => 'Nepal',
                        'fullName' => 'Nepal',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'NR' =>
            array(
                'alpha2' => 'NR',
                'alpha3' => 'NRU',
                'numeric' => '520',
                'isd' => '674',
                'ru' =>
                    array(
                        'name' => 'Науру',
                        'fullName' => 'Республика Науру',
                        'continent' => 'Океания',
                        'location' => 'Микронезия',
                    ),
                'en' =>
                    array(
                        'name' => 'Nauru',
                        'fullName' => 'Nauru',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'NU' =>
            array(
                'alpha2' => 'NU',
                'alpha3' => 'NIU',
                'numeric' => '570',
                'isd' => '683',
                'ru' =>
                    array(
                        'name' => 'Ниуэ',
                        'fullName' => 'Республика Ниуэ',
                        'continent' => 'Океания',
                        'location' => 'Полинезия',
                    ),
                'en' =>
                    array(
                        'name' => 'Niue',
                        'fullName' => 'Niue',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'NZ' =>
            array(
                'alpha2' => 'NZ',
                'alpha3' => 'NZL',
                'numeric' => '554',
                'isd' => '64',
                'ru' =>
                    array(
                        'name' => 'Новая Зеландия',
                        'fullName' => Null,
                        'continent' => 'Океания',
                        'location' => 'Австралия и Новая Зеландия',
                    ),
                'en' =>
                    array(
                        'name' => 'New Zealand',
                        'fullName' => 'New Zealand',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'OM' =>
            array(
                'alpha2' => 'OM',
                'alpha3' => 'OMN',
                'numeric' => '512',
                'isd' => '968',
                'ru' =>
                    array(
                        'name' => 'Оман',
                        'fullName' => 'Султанат Оман',
                        'continent' => 'Азия',
                        'location' => 'Западная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Oman',
                        'fullName' => 'Oman',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'OS' =>
            array(
                'alpha2' => 'OS',
                'alpha3' => 'OST',
                'numeric' => '896',
                'isd' => Null,
                'ru' =>
                    array(
                        'name' => 'Южная Осетия',
                        'fullName' => 'Республика Южная Осетия',
                        'continent' => 'Азия',
                        'location' => 'Закавказье',
                    ),
                'en' =>
                    array(
                        'name' => 'South Ossetia',
                        'fullName' => 'South Ossetia',
                        'continent' => 'Asia',
                        'location' => Null,
                    ),
            ),
        'PA' =>
            array(
                'alpha2' => 'PA',
                'alpha3' => 'PAN',
                'numeric' => '591',
                'isd' => '507',
                'ru' =>
                    array(
                        'name' => 'Панама',
                        'fullName' => 'Республика Панама',
                        'continent' => 'Северная Америка',
                        'location' => 'Центральная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Panama',
                        'fullName' => 'Panama',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'PE' =>
            array(
                'alpha2' => 'PE',
                'alpha3' => 'PER',
                'numeric' => '604',
                'isd' => '51',
                'ru' =>
                    array(
                        'name' => 'Перу',
                        'fullName' => 'Республика Перу',
                        'continent' => 'Северная Америка',
                        'location' => 'Южная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Peru',
                        'fullName' => 'Peru',
                        'continent' => 'South America',
                        'location' => 'South America',
                    ),
            ),
        'PF' =>
            array(
                'alpha2' => 'PF',
                'alpha3' => 'PYF',
                'numeric' => '258',
                'isd' => '689',
                'ru' =>
                    array(
                        'name' => 'Французская Полинезия',
                        'fullName' => Null,
                        'continent' => 'Океания',
                        'location' => 'Полинезия',
                    ),
                'en' =>
                    array(
                        'name' => 'French Polynesia',
                        'fullName' => 'French Polynesia',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'PG' =>
            array(
                'alpha2' => 'PG',
                'alpha3' => 'PNG',
                'numeric' => '598',
                'isd' => '675',
                'ru' =>
                    array(
                        'name' => 'Папуа-Новая Гвинея',
                        'fullName' => Null,
                        'continent' => 'Океания',
                        'location' => 'Меланезия',
                    ),
                'en' =>
                    array(
                        'name' => 'Papua New Guinea',
                        'fullName' => 'Papua New Guinea',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'PH' =>
            array(
                'alpha2' => 'PH',
                'alpha3' => 'PHL',
                'numeric' => '608',
                'isd' => '63',
                'ru' =>
                    array(
                        'name' => 'Филиппины',
                        'fullName' => 'Республика Филиппины',
                        'continent' => 'Азия',
                        'location' => 'Юго-Восточная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Philippines',
                        'fullName' => 'Philippines',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'PK' =>
            array(
                'alpha2' => 'PK',
                'alpha3' => 'PAK',
                'numeric' => '586',
                'isd' => '92',
                'ru' =>
                    array(
                        'name' => 'Пакистан',
                        'fullName' => 'Исламская Республика Пакистан',
                        'continent' => 'Азия',
                        'location' => 'Южная часть Центральной Азии',
                    ),
                'en' =>
                    array(
                        'name' => 'Pakistan',
                        'fullName' => 'Pakistan',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'PL' =>
            array(
                'alpha2' => 'PL',
                'alpha3' => 'POL',
                'numeric' => '616',
                'isd' => '48',
                'ru' =>
                    array(
                        'name' => 'Польша',
                        'fullName' => 'Республика Польша',
                        'continent' => 'Европа',
                        'location' => 'Восточная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Poland',
                        'fullName' => 'Poland',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'PM' =>
            array(
                'alpha2' => 'PM',
                'alpha3' => 'SPM',
                'numeric' => '666',
                'isd' => '508',
                'ru' =>
                    array(
                        'name' => 'Сент-Пьер и Микелон',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Северная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Saint Pierre and Miquelon',
                        'fullName' => 'Saint Pierre and Miquelon',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'PN' =>
            array(
                'alpha2' => 'PN',
                'alpha3' => 'PCN',
                'numeric' => '612',
                'isd' => '870',
                'ru' =>
                    array(
                        'name' => 'Питкерн',
                        'fullName' => Null,
                        'continent' => 'Океания',
                        'location' => 'Полинезия',
                    ),
                'en' =>
                    array(
                        'name' => 'Pitcairn',
                        'fullName' => 'Pitcairn',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'PR' =>
            array(
                'alpha2' => 'PR',
                'alpha3' => 'PRI',
                'numeric' => '630',
                'isd' => '1',
                'ru' =>
                    array(
                        'name' => 'Пуэрто-Рико',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Puerto Rico',
                        'fullName' => 'Puerto Rico',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'PS' =>
            array(
                'alpha2' => 'PS',
                'alpha3' => 'PSE',
                'numeric' => '275',
                'isd' => '970',
                'ru' =>
                    array(
                        'name' => 'Палестинская территория',
                        'fullName' => 'Оккупированная Палестинская территория',
                        'continent' => 'Азия',
                        'location' => 'Западная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Palestinian Territory',
                        'fullName' => 'Occupied Palestinian Territory',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'PT' =>
            array(
                'alpha2' => 'PT',
                'alpha3' => 'PRT',
                'numeric' => '620',
                'isd' => '351',
                'ru' =>
                    array(
                        'name' => 'Португалия',
                        'fullName' => 'Португальская Республика',
                        'continent' => 'Европа',
                        'location' => 'Южная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Portugal',
                        'fullName' => 'Portugal',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'PW' =>
            array(
                'alpha2' => 'PW',
                'alpha3' => 'PLW',
                'numeric' => '585',
                'isd' => '680',
                'ru' =>
                    array(
                        'name' => 'Палау',
                        'fullName' => 'Республика Палау',
                        'continent' => 'Океания',
                        'location' => 'Микронезия',
                    ),
                'en' =>
                    array(
                        'name' => 'Palau',
                        'fullName' => 'Palau',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'PY' =>
            array(
                'alpha2' => 'PY',
                'alpha3' => 'PRY',
                'numeric' => '600',
                'isd' => '595',
                'ru' =>
                    array(
                        'name' => 'Парагвай',
                        'fullName' => 'Республика Парагвай',
                        'continent' => 'Северная Америка',
                        'location' => 'Южная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Paraguay',
                        'fullName' => 'Paraguay',
                        'continent' => 'South America',
                        'location' => 'South America',
                    ),
            ),
        'QA' =>
            array(
                'alpha2' => 'QA',
                'alpha3' => 'QAT',
                'numeric' => '634',
                'isd' => '974',
                'ru' =>
                    array(
                        'name' => 'Катар',
                        'fullName' => 'Государство Катар',
                        'continent' => 'Азия',
                        'location' => 'Западная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Qatar',
                        'fullName' => 'Qatar',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'RE' =>
            array(
                'alpha2' => 'RE',
                'alpha3' => 'REU',
                'numeric' => '638',
                'isd' => '262',
                'ru' =>
                    array(
                        'name' => 'Реюньон',
                        'fullName' => Null,
                        'continent' => 'Африка',
                        'location' => 'Восточная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Reunion',
                        'fullName' => 'Reunion',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'RO' =>
            array(
                'alpha2' => 'RO',
                'alpha3' => 'ROU',
                'numeric' => '642',
                'isd' => '40',
                'ru' =>
                    array(
                        'name' => 'Румыния',
                        'fullName' => Null,
                        'continent' => 'Европа',
                        'location' => 'Восточная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Romania',
                        'fullName' => 'Romania',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'RS' =>
            array(
                'alpha2' => 'RS',
                'alpha3' => 'SRB',
                'numeric' => '688',
                'isd' => '381',
                'ru' =>
                    array(
                        'name' => 'Сербия',
                        'fullName' => 'Республика Сербия',
                        'continent' => 'Европа',
                        'location' => 'Южная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Serbia',
                        'fullName' => 'Serbia',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'RU' =>
            array(
                'alpha2' => 'RU',
                'alpha3' => 'RUS',
                'numeric' => '643',
                'isd' => '7',
                'ru' =>
                    array(
                        'name' => 'Россия',
                        'fullName' => 'Российская Федерация',
                        'continent' => 'Европа',
                        'location' => 'Восточная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Russia',
                        'fullName' => 'Russian Federation',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'RW' =>
            array(
                'alpha2' => 'RW',
                'alpha3' => 'RWA',
                'numeric' => '646',
                'isd' => '250',
                'ru' =>
                    array(
                        'name' => 'Руанда',
                        'fullName' => 'Руандийская Республика',
                        'continent' => 'Африка',
                        'location' => 'Восточная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Rwanda',
                        'fullName' => 'Rwanda',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'SA' =>
            array(
                'alpha2' => 'SA',
                'alpha3' => 'SAU',
                'numeric' => '682',
                'isd' => '966',
                'ru' =>
                    array(
                        'name' => 'Саудовская Аравия',
                        'fullName' => 'Королевство Саудовская Аравия',
                        'continent' => 'Азия',
                        'location' => 'Западная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Saudi Arabia',
                        'fullName' => 'Saudi Arabia',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'SB' =>
            array(
                'alpha2' => 'SB',
                'alpha3' => 'SLB',
                'numeric' => '090',
                'isd' => '677',
                'ru' =>
                    array(
                        'name' => 'Соломоновы острова',
                        'fullName' => Null,
                        'continent' => 'Океания',
                        'location' => 'Меланезия',
                    ),
                'en' =>
                    array(
                        'name' => 'Solomon Islands',
                        'fullName' => 'Solomon Islands',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'SC' =>
            array(
                'alpha2' => 'SC',
                'alpha3' => 'SYC',
                'numeric' => '690',
                'isd' => '248',
                'ru' =>
                    array(
                        'name' => 'Сейшелы',
                        'fullName' => 'Республика Сейшелы',
                        'continent' => 'Африка',
                        'location' => 'Восточная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Seychelles',
                        'fullName' => 'Seychelles',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'SD' =>
            array(
                'alpha2' => 'SD',
                'alpha3' => 'SDN',
                'numeric' => '736',
                'isd' => '249',
                'ru' =>
                    array(
                        'name' => 'Судан',
                        'fullName' => 'Республика Судан',
                        'continent' => 'Африка',
                        'location' => 'Северная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Sudan',
                        'fullName' => 'Sudan',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'SE' =>
            array(
                'alpha2' => 'SE',
                'alpha3' => 'SWE',
                'numeric' => '752',
                'isd' => '46',
                'ru' =>
                    array(
                        'name' => 'Швеция',
                        'fullName' => 'Королевство Швеция',
                        'continent' => 'Европа',
                        'location' => 'Северная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Sweden',
                        'fullName' => 'Sweden',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'SG' =>
            array(
                'alpha2' => 'SG',
                'alpha3' => 'SGP',
                'numeric' => '702',
                'isd' => '65',
                'ru' =>
                    array(
                        'name' => 'Сингапур',
                        'fullName' => 'Республика Сингапур',
                        'continent' => 'Азия',
                        'location' => 'Юго-Восточная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Singapore',
                        'fullName' => 'Singapore',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'SH' =>
            array(
                'alpha2' => 'SH',
                'alpha3' => 'SHN',
                'numeric' => '654',
                'isd' => '290',
                'ru' =>
                    array(
                        'name' => 'Святая Елена, Остров вознесения, Тристан-да-Кунья',
                        'fullName' => Null,
                        'continent' => 'Африка',
                        'location' => 'Западная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Saint Helena, Ascension And Tristan Da Cunha',
                        'fullName' => 'Saint Helena, Ascension And Tristan Da Cunha',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'SI' =>
            array(
                'alpha2' => 'SI',
                'alpha3' => 'SVN',
                'numeric' => '705',
                'isd' => '386',
                'ru' =>
                    array(
                        'name' => 'Словения',
                        'fullName' => 'Республика Словения',
                        'continent' => 'Европа',
                        'location' => 'Южная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Slovenia',
                        'fullName' => 'Slovenia',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'SJ' =>
            array(
                'alpha2' => 'SJ',
                'alpha3' => 'SJM',
                'numeric' => '744',
                'isd' => '47',
                'ru' =>
                    array(
                        'name' => 'Шпицберген и Ян Майен',
                        'fullName' => Null,
                        'continent' => 'Европа',
                        'location' => 'Северная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Svalbard and Jan Mayen',
                        'fullName' => 'Svalbard and Jan Mayen',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'SK' =>
            array(
                'alpha2' => 'SK',
                'alpha3' => 'SVK',
                'numeric' => '703',
                'isd' => '421',
                'ru' =>
                    array(
                        'name' => 'Словакия',
                        'fullName' => 'Словацкая Республика',
                        'continent' => 'Европа',
                        'location' => 'Восточная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Slovakia',
                        'fullName' => 'Slovakia',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'SL' =>
            array(
                'alpha2' => 'SL',
                'alpha3' => 'SLE',
                'numeric' => '694',
                'isd' => '232',
                'ru' =>
                    array(
                        'name' => 'Сьерра-Леоне',
                        'fullName' => 'Республика Сьерра-Леоне',
                        'continent' => 'Африка',
                        'location' => 'Западная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Sierra Leone',
                        'fullName' => 'Sierra Leone',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'SM' =>
            array(
                'alpha2' => 'SM',
                'alpha3' => 'SMR',
                'numeric' => '674',
                'isd' => '378',
                'ru' =>
                    array(
                        'name' => 'Сан-Марино',
                        'fullName' => 'Республика Сан-Марино',
                        'continent' => 'Европа',
                        'location' => 'Южная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'San Marino',
                        'fullName' => 'San Marino',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'SN' =>
            array(
                'alpha2' => 'SN',
                'alpha3' => 'SEN',
                'numeric' => '686',
                'isd' => '221',
                'ru' =>
                    array(
                        'name' => 'Сенегал',
                        'fullName' => 'Республика Сенегал',
                        'continent' => 'Африка',
                        'location' => 'Западная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Senegal',
                        'fullName' => 'Senegal',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'SO' =>
            array(
                'alpha2' => 'SO',
                'alpha3' => 'SOM',
                'numeric' => '706',
                'isd' => '252',
                'ru' =>
                    array(
                        'name' => 'Сомали',
                        'fullName' => 'Сомалийская Республика',
                        'continent' => 'Африка',
                        'location' => 'Восточная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Somalia',
                        'fullName' => 'Somalia',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'SR' =>
            array(
                'alpha2' => 'SR',
                'alpha3' => 'SUR',
                'numeric' => '740',
                'isd' => '597',
                'ru' =>
                    array(
                        'name' => 'Суринам',
                        'fullName' => 'Республика Суринам',
                        'continent' => 'Северная Америка',
                        'location' => 'Южная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Suriname',
                        'fullName' => 'Suriname',
                        'continent' => 'South America',
                        'location' => 'South America',
                    ),
            ),
        'SS' =>
            array(
                'alpha2' => 'SS',
                'alpha3' => 'SSD',
                'numeric' => '728',
                'isd' => '211',
                'ru' =>
                    array(
                        'name' => 'Южный Судан',
                        'fullName' => Null,
                        'continent' => 'Африка',
                        'location' => 'Северная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'South Sudan',
                        'fullName' => 'South Sudan',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'ST' =>
            array(
                'alpha2' => 'ST',
                'alpha3' => 'STP',
                'numeric' => '678',
                'isd' => '239',
                'ru' =>
                    array(
                        'name' => 'Сан-Томе и Принсипи',
                        'fullName' => 'Демократическая Республика Сан-Томе и Принсипи',
                        'continent' => 'Африка',
                        'location' => 'Центральная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Sao Tome and Principe',
                        'fullName' => 'Sao Tome and Principe',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'SV' =>
            array(
                'alpha2' => 'SV',
                'alpha3' => 'SLV',
                'numeric' => '222',
                'isd' => '503',
                'ru' =>
                    array(
                        'name' => 'Эль-Сальвадор',
                        'fullName' => 'Республика Эль-Сальвадор',
                        'continent' => 'Северная Америка',
                        'location' => 'Центральная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'El Salvador',
                        'fullName' => 'El Salvador',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'SX' =>
            array(
                'alpha2' => 'SX',
                'alpha3' => 'SXM',
                'numeric' => '534',
                'isd' => Null,
                'ru' =>
                    array(
                        'name' => 'Синт-Мартен',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Sint Maarten',
                        'fullName' => 'Sint Maarten',
                        'continent' => Null,
                        'location' => Null,
                    ),
            ),
        'SY' =>
            array(
                'alpha2' => 'SY',
                'alpha3' => 'SYR',
                'numeric' => '760',
                'isd' => '963',
                'ru' =>
                    array(
                        'name' => 'Сирия',
                        'fullName' => 'Сирийская Арабская Республика',
                        'continent' => 'Азия',
                        'location' => 'Западная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Syria',
                        'fullName' => 'Syrian Arab Republic',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'SZ' =>
            array(
                'alpha2' => 'SZ',
                'alpha3' => 'SWZ',
                'numeric' => '748',
                'isd' => '268',
                'ru' =>
                    array(
                        'name' => 'Свазиленд',
                        'fullName' => 'Королевство Свазиленд',
                        'continent' => 'Африка',
                        'location' => 'Южная часть Африки',
                    ),
                'en' =>
                    array(
                        'name' => 'Swaziland',
                        'fullName' => 'Swaziland',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'TC' =>
            array(
                'alpha2' => 'TC',
                'alpha3' => 'TCA',
                'numeric' => '796',
                'isd' => '1649',
                'ru' =>
                    array(
                        'name' => 'Острова Теркс и Кайкос',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Turks and Caicos Islands',
                        'fullName' => 'Turks and Caicos Islands',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'TD' =>
            array(
                'alpha2' => 'TD',
                'alpha3' => 'TCD',
                'numeric' => '148',
                'isd' => '235',
                'ru' =>
                    array(
                        'name' => 'Чад',
                        'fullName' => 'Республика Чад',
                        'continent' => 'Африка',
                        'location' => 'Центральная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Chad',
                        'fullName' => 'Chad',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'TF' =>
            array(
                'alpha2' => 'TF',
                'alpha3' => 'ATF',
                'numeric' => '260',
                'isd' => '262',
                'ru' =>
                    array(
                        'name' => 'Французские Южные территории',
                        'fullName' => Null,
                        'continent' => 'Антарктика',
                        'location' => 'Индийский океан',
                    ),
                'en' =>
                    array(
                        'name' => 'French Southern Territories',
                        'fullName' => 'French Southern Territories',
                        'continent' => 'Antarctica',
                        'location' => 'Antarctica',
                    ),
            ),
        'TG' =>
            array(
                'alpha2' => 'TG',
                'alpha3' => 'TGO',
                'numeric' => '768',
                'isd' => '228',
                'ru' =>
                    array(
                        'name' => 'Того',
                        'fullName' => 'Тоголезская Республика',
                        'continent' => 'Африка',
                        'location' => 'Западная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Togo',
                        'fullName' => 'Togo',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'TH' =>
            array(
                'alpha2' => 'TH',
                'alpha3' => 'THA',
                'numeric' => '764',
                'isd' => '66',
                'ru' =>
                    array(
                        'name' => 'Таиланд',
                        'fullName' => 'Королевство Таиланд',
                        'continent' => 'Азия',
                        'location' => 'Юго-Восточная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Thailand',
                        'fullName' => 'Thailand',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'TJ' =>
            array(
                'alpha2' => 'TJ',
                'alpha3' => 'TJK',
                'numeric' => '762',
                'isd' => '992',
                'ru' =>
                    array(
                        'name' => 'Таджикистан',
                        'fullName' => 'Республика Таджикистан',
                        'continent' => 'Азия',
                        'location' => 'Южная часть Центральной Азии',
                    ),
                'en' =>
                    array(
                        'name' => 'Tajikistan',
                        'fullName' => 'Tajikistan',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'TK' =>
            array(
                'alpha2' => 'TK',
                'alpha3' => 'TKL',
                'numeric' => '772',
                'isd' => '690',
                'ru' =>
                    array(
                        'name' => 'Токелау',
                        'fullName' => Null,
                        'continent' => 'Океания',
                        'location' => 'Полинезия',
                    ),
                'en' =>
                    array(
                        'name' => 'Tokelau',
                        'fullName' => 'Tokelau',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'TL' =>
            array(
                'alpha2' => 'TL',
                'alpha3' => 'TLS',
                'numeric' => '626',
                'isd' => '670',
                'ru' =>
                    array(
                        'name' => 'Тимор-Лесте',
                        'fullName' => 'Демократическая Республика Тимор-Лесте',
                        'continent' => 'Азия',
                        'location' => 'Юго-Восточная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Timor-Leste',
                        'fullName' => 'Timor-Leste',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'TM' =>
            array(
                'alpha2' => 'TM',
                'alpha3' => 'TKM',
                'numeric' => '795',
                'isd' => '993',
                'ru' =>
                    array(
                        'name' => 'Туркмения',
                        'fullName' => 'Туркменистан',
                        'continent' => 'Азия',
                        'location' => 'Южная часть Центральной Азии',
                    ),
                'en' =>
                    array(
                        'name' => 'Turkmenistan',
                        'fullName' => 'Turkmenistan',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'TN' =>
            array(
                'alpha2' => 'TN',
                'alpha3' => 'TUN',
                'numeric' => '788',
                'isd' => '216',
                'ru' =>
                    array(
                        'name' => 'Тунис',
                        'fullName' => 'Тунисская Республика',
                        'continent' => 'Африка',
                        'location' => 'Северная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Tunisia',
                        'fullName' => 'Tunisia',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'TO' =>
            array(
                'alpha2' => 'TO',
                'alpha3' => 'TON',
                'numeric' => '776',
                'isd' => '676',
                'ru' =>
                    array(
                        'name' => 'Тонга',
                        'fullName' => 'Королевство Тонга',
                        'continent' => 'Океания',
                        'location' => 'Полинезия',
                    ),
                'en' =>
                    array(
                        'name' => 'Tonga',
                        'fullName' => 'Tonga',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'TR' =>
            array(
                'alpha2' => 'TR',
                'alpha3' => 'TUR',
                'numeric' => '792',
                'isd' => '90',
                'ru' =>
                    array(
                        'name' => 'Турция',
                        'fullName' => 'Турецкая Республика',
                        'continent' => 'Азия',
                        'location' => 'Западная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Turkey',
                        'fullName' => 'Turkey',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'TT' =>
            array(
                'alpha2' => 'TT',
                'alpha3' => 'TTO',
                'numeric' => '780',
                'isd' => '1868',
                'ru' =>
                    array(
                        'name' => 'Тринидад и Тобаго',
                        'fullName' => 'Республика Тринидад и Тобаго',
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Trinidad and Tobago',
                        'fullName' => 'Trinidad and Tobago',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'TV' =>
            array(
                'alpha2' => 'TV',
                'alpha3' => 'TUV',
                'numeric' => '798',
                'isd' => '688',
                'ru' =>
                    array(
                        'name' => 'Тувалу',
                        'fullName' => Null,
                        'continent' => 'Океания',
                        'location' => 'Полинезия',
                    ),
                'en' =>
                    array(
                        'name' => 'Tuvalu',
                        'fullName' => 'Tuvalu',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'TW' =>
            array(
                'alpha2' => 'TW',
                'alpha3' => 'TWN',
                'numeric' => '158',
                'isd' => '886',
                'ru' =>
                    array(
                        'name' => 'Тайвань',
                        'fullName' => 'Китайская Респу́блика',
                        'continent' => 'Азия',
                        'location' => 'Восточная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Taiwan',
                        'fullName' => 'Republic of China',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'TZ' =>
            array(
                'alpha2' => 'TZ',
                'alpha3' => 'TZA',
                'numeric' => '834',
                'isd' => '255',
                'ru' =>
                    array(
                        'name' => 'Танзания',
                        'fullName' => 'Объединенная Республика Танзания',
                        'continent' => 'Африка',
                        'location' => 'Восточная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Tanzania',
                        'fullName' => 'United Republic Of Tanzania',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'UA' =>
            array(
                'alpha2' => 'UA',
                'alpha3' => 'UKR',
                'numeric' => '804',
                'isd' => '380',
                'ru' =>
                    array(
                        'name' => 'Украина',
                        'fullName' => Null,
                        'continent' => 'Европа',
                        'location' => 'Восточная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Ukraine',
                        'fullName' => 'Ukraine',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'UG' =>
            array(
                'alpha2' => 'UG',
                'alpha3' => 'UGA',
                'numeric' => '800',
                'isd' => '256',
                'ru' =>
                    array(
                        'name' => 'Уганда',
                        'fullName' => 'Республика Уганда',
                        'continent' => 'Африка',
                        'location' => 'Восточная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Uganda',
                        'fullName' => 'Uganda',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'UM' =>
            array(
                'alpha2' => 'UM',
                'alpha3' => 'UMI',
                'numeric' => '581',
                'isd' => '1',
                'ru' =>
                    array(
                        'name' => 'Малые Тихоокеанские отдаленные острова Соединенных Штатов',
                        'fullName' => Null,
                        'continent' => 'Океания',
                        'location' => 'Индийский океан',
                    ),
                'en' =>
                    array(
                        'name' => 'United States Minor Outlying Islands',
                        'fullName' => 'United States Minor Outlying Islands',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'US' =>
            array(
                'alpha2' => 'US',
                'alpha3' => 'USA',
                'numeric' => '840',
                'isd' => '1',
                'ru' =>
                    array(
                        'name' => 'США',
                        'fullName' => 'Соединенные Штаты Америки',
                        'continent' => 'Северная Америка',
                        'location' => 'Северная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'USA',
                        'fullName' => 'United States of America',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'UY' =>
            array(
                'alpha2' => 'UY',
                'alpha3' => 'URY',
                'numeric' => '858',
                'isd' => '598',
                'ru' =>
                    array(
                        'name' => 'Уругвай',
                        'fullName' => 'Восточная Республика Уругвай',
                        'continent' => 'Северная Америка',
                        'location' => 'Южная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Uruguay',
                        'fullName' => 'Uruguay',
                        'continent' => 'South America',
                        'location' => 'South America',
                    ),
            ),
        'UZ' =>
            array(
                'alpha2' => 'UZ',
                'alpha3' => 'UZB',
                'numeric' => '860',
                'isd' => '998',
                'ru' =>
                    array(
                        'name' => 'Узбекистан',
                        'fullName' => 'Республика Узбекистан',
                        'continent' => 'Азия',
                        'location' => 'Южная часть Центральной Азии',
                    ),
                'en' =>
                    array(
                        'name' => 'Uzbekistan',
                        'fullName' => 'Uzbekistan',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'VA' =>
            array(
                'alpha2' => 'VA',
                'alpha3' => 'VAT',
                'numeric' => '336',
                'isd' => '379',
                'ru' =>
                    array(
                        'name' => 'Ватикан',
                        'fullName' => 'Государство-город Ватикан',
                        'continent' => 'Европа',
                        'location' => 'Южная Европа',
                    ),
                'en' =>
                    array(
                        'name' => 'Vatican City',
                        'fullName' => 'Vatican City State',
                        'continent' => 'Europe',
                        'location' => 'Europe',
                    ),
            ),
        'VC' =>
            array(
                'alpha2' => 'VC',
                'alpha3' => 'VCT',
                'numeric' => '670',
                'isd' => '1784',
                'ru' =>
                    array(
                        'name' => 'Сент-Винсент и Гренадины',
                        'fullName' => Null,
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Saint Vincent and the Grenadines',
                        'fullName' => 'Saint Vincent and the Grenadines',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'VE' =>
            array(
                'alpha2' => 'VE',
                'alpha3' => 'VEN',
                'numeric' => '862',
                'isd' => '58',
                'ru' =>
                    array(
                        'name' => 'Венесуэла',
                        'fullName' => 'Боливарийская Республика Венесуэла',
                        'continent' => 'Северная Америка',
                        'location' => 'Южная Америка',
                    ),
                'en' =>
                    array(
                        'name' => 'Venezuela',
                        'fullName' => 'Venezuela',
                        'continent' => 'South America',
                        'location' => 'South America',
                    ),
            ),
        'VG' =>
            array(
                'alpha2' => 'VG',
                'alpha3' => 'VGB',
                'numeric' => '092',
                'isd' => '1284',
                'ru' =>
                    array(
                        'name' => 'Виргинские острова, Британские',
                        'fullName' => 'Британские Виргинские острова',
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Virgin Islands, British',
                        'fullName' => 'Virgin Islands, British',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'VI' =>
            array(
                'alpha2' => 'VI',
                'alpha3' => 'VIR',
                'numeric' => '850',
                'isd' => '1430',
                'ru' =>
                    array(
                        'name' => 'Виргинские острова, США',
                        'fullName' => 'Виргинские острова Соединенных Штатов',
                        'continent' => 'Северная Америка',
                        'location' => 'Карибский бассейн',
                    ),
                'en' =>
                    array(
                        'name' => 'Virgin Islands, U.S.',
                        'fullName' => 'Virgin Islands, U.S.',
                        'continent' => 'North America',
                        'location' => 'North America',
                    ),
            ),
        'VN' =>
            array(
                'alpha2' => 'VN',
                'alpha3' => 'VNM',
                'numeric' => '704',
                'isd' => '84',
                'ru' =>
                    array(
                        'name' => 'Вьетнам',
                        'fullName' => 'Социалистическая Республика Вьетнам',
                        'continent' => 'Азия',
                        'location' => 'Юго-Восточная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Vietnam',
                        'fullName' => 'Vietnam',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'VU' =>
            array(
                'alpha2' => 'VU',
                'alpha3' => 'VUT',
                'numeric' => '548',
                'isd' => '678',
                'ru' =>
                    array(
                        'name' => 'Вануату',
                        'fullName' => 'Республика Вануату',
                        'continent' => 'Океания',
                        'location' => 'Меланезия',
                    ),
                'en' =>
                    array(
                        'name' => 'Vanuatu',
                        'fullName' => 'Vanuatu',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'WF' =>
            array(
                'alpha2' => 'WF',
                'alpha3' => 'WLF',
                'numeric' => '876',
                'isd' => '681',
                'ru' =>
                    array(
                        'name' => 'Уоллис и Футуна',
                        'fullName' => Null,
                        'continent' => 'Океания',
                        'location' => 'Полинезия',
                    ),
                'en' =>
                    array(
                        'name' => 'Wallis and Futuna',
                        'fullName' => 'Wallis and Futuna',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'WS' =>
            array(
                'alpha2' => 'WS',
                'alpha3' => 'WSM',
                'numeric' => '882',
                'isd' => '685',
                'ru' =>
                    array(
                        'name' => 'Самоа',
                        'fullName' => 'Независимое Государство Самоа',
                        'continent' => 'Океания',
                        'location' => 'Полинезия',
                    ),
                'en' =>
                    array(
                        'name' => 'Samoa',
                        'fullName' => 'Samoa',
                        'continent' => 'Oceania',
                        'location' => 'Oceania',
                    ),
            ),
        'YE' =>
            array(
                'alpha2' => 'YE',
                'alpha3' => 'YEM',
                'numeric' => '887',
                'isd' => '967',
                'ru' =>
                    array(
                        'name' => 'Йемен',
                        'fullName' => 'Йеменская Республика',
                        'continent' => 'Азия',
                        'location' => 'Западная Азия',
                    ),
                'en' =>
                    array(
                        'name' => 'Yemen',
                        'fullName' => 'Yemen',
                        'continent' => 'Asia',
                        'location' => 'Asia',
                    ),
            ),
        'YT' =>
            array(
                'alpha2' => 'YT',
                'alpha3' => 'MYT',
                'numeric' => '175',
                'isd' => '262',
                'ru' =>
                    array(
                        'name' => 'Майотта',
                        'fullName' => Null,
                        'continent' => 'Африка',
                        'location' => 'Южная часть Африки',
                    ),
                'en' =>
                    array(
                        'name' => 'Mayotte',
                        'fullName' => 'Mayotte',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'ZA' =>
            array(
                'alpha2' => 'ZA',
                'alpha3' => 'ZAF',
                'numeric' => '710',
                'isd' => '27',
                'ru' =>
                    array(
                        'name' => 'ЮАР',
                        'fullName' => 'Южно-Африканская Республика',
                        'continent' => 'Африка',
                        'location' => 'Южная часть Африки',
                    ),
                'en' =>
                    array(
                        'name' => 'South Africa',
                        'fullName' => 'Republic of South Africa',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'ZM' =>
            array(
                'alpha2' => 'ZM',
                'alpha3' => 'ZMB',
                'numeric' => '894',
                'isd' => '260',
                'ru' =>
                    array(
                        'name' => 'Замбия',
                        'fullName' => 'Республика Замбия',
                        'continent' => 'Африка',
                        'location' => 'Восточная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Zambia',
                        'fullName' => 'Zambia',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
        'ZW' =>
            array(
                'alpha2' => 'ZW',
                'alpha3' => 'ZWE',
                'numeric' => '716',
                'isd' => '263',
                'ru' =>
                    array(
                        'name' => 'Зимбабве',
                        'fullName' => 'Республика Зимбабве',
                        'continent' => 'Африка',
                        'location' => 'Восточная Африка',
                    ),
                'en' =>
                    array(
                        'name' => 'Zimbabwe',
                        'fullName' => 'Zimbabwe',
                        'continent' => 'Africa',
                        'location' => 'Africa',
                    ),
            ),
    );

    /**
     * @var array
     *
     * Language code => [
     *     ISO-3166-1 alpha-2 => [
     *         'alpha2'    => (string),
     *         'alpha3'    => (string),
     *         'numeric'   => (numeric),
     *         'isd'       => (numeric),
     *         'name'      => (string),
     *         'fullName'  => (string),
     *         'continent' => (string),
     *         'location'  => (string)
     *     ],
     *     ...
     * ],
     * ...
     */
    protected static $countriesByLanguage = [];

    /**
     * @return array
     */
    protected static function supportedFields()
    {
        $rtn = [
            'alpha2',
            'alpha3',
            'numeric',
            'isd',
            'name',
            'fullName',
            'continent',
            'location'
        ];

        return $rtn;
    }

    /**
     * @return array
     */
    protected static function supportedContinents()
    {
        $rtn = [
            'Africa',
            'Antarctica',
            'Asia',
            'Europe',
            'North America',
            'Oceania',
            'South America'
        ];

        return $rtn;
    }

    /**
     * @param string $language
     * @return array
     */
    private static function countriesByLanguage($language = '')
    {
        $countriesByLanguage = [];

        if (empty($language) || !is_string($language)) {
            $language = self::$language;
        }

        foreach (self::$countries as $countryKey => $country) {

            foreach ($country as $fieldKey => $field) {

                if (is_array($field) && $fieldKey === $language) {

                    foreach ($field as $key => $value) {
                        $country[$key] = $value;
                    }
                }

                if (is_array($field)) {
                    unset($country[$fieldKey]);
                }
            }

            $countriesByLanguage[$language][$countryKey] = $country;
        }

        self::$countriesByLanguage = $countriesByLanguage;

        return self::$countriesByLanguage;
    }

    /**
     * @param string $keyField field for the array of countries, set it to null if you want array without named indices
     * @param string $requestedField name of the field to be fetched in value part of array
     * @return array contained key => value pairs of the requested key and field
     */
    public static function get($keyField = 'alpha2', $requestedField = 'name')
    {
        $supportedFields = self::supportedFields();
        $countries = empty(self::$countriesByLanguage[self::$language])
            ? self::countriesByLanguage()
            : self::$countriesByLanguage[self::$language];

        if (!in_array($keyField, $supportedFields)) {
            $keyField = Null;
        }

        if (!in_array($requestedField, $supportedFields)) {
            $requestedField = 'name';
        }

        $result = [];

        foreach ($countries as $countryKey => $country) {

            if ($keyField) {
                $result[$country[$keyField]] = $country[$requestedField];
            } else {
                $result[] = $country[$requestedField];
            }
        }

        return $result;
    }


    /**
     * @param string $keyField field for the array of countries, set it to null if you want array without named indices
     * @param array $requestedFields array of name of the fields to be fetched in value part of array
     * @return array contained key => value pairs of the requested key and field
     */
    public static function get2($keyField = 'alpha2', $requestedFields = [])
    {
        $supportedFields = self::supportedFields();
        $countries = empty(self::$countriesByLanguage[self::$language])
            ? self::countriesByLanguage()
            : self::$countriesByLanguage[self::$language];

        if (!in_array($keyField, $supportedFields)) {
            $keyField = Null;
        }

        if (is_array($requestedFields)) {

            foreach ($requestedFields as $index => $field) {

                if (!in_array($field, $supportedFields)) {
                    unset($requestedFields[$index]);
                }
            }
        } else {
            $requestedFields = [];
        }

        $result = [];

        foreach ($countries as $countryKey => $country) {
            $tmp = [];

            foreach ($requestedFields as $field) {
                $tmp[$field] = $country[$field];
            }

            if ($keyField) {
                $result[$country[$keyField]] = $tmp;
            } else {
                $result[] = $tmp;
            }
        }

        return $result;
    }

    /**
     * @param string $keyField field for the array of countries, set it to null if you want array without named indices
     * @param string $requestedField name of the field to be fetched in value part of array
     * @param null $continent name of continent to use as filter
     * @return array contained key=>value pairs of the requested key and field
     * Works exactly as get() above
     * But takes an extra param to enable filtering by continent
     */
    public static function getByContinent($keyField = 'alpha2', $requestedField = 'name', $continent = Null)
    {
        $supportedFields = self::supportedFields();
        $supportedContinents = self::supportedContinents();
        $countries = empty(self::$countriesByLanguage[self::$language])
            ? self::countriesByLanguage()
            : self::$countriesByLanguage[self::$language];

        if (!in_array($keyField, $supportedFields)) {
            $keyField = Null;
        }

        if (!in_array($continent, $supportedContinents)) {
            $continent = Null;
        }

        if (!in_array($requestedField, $supportedFields)) {
            $requestedField = 'name';
        }

        $result = [];

        foreach ($countries as $countryKey => $country) {

            if ($keyField) {

                if ($continent) {

                    if ($country['continent'] == $continent) {
                        $result[$country[$keyField]] = $country[$requestedField];
                    }
                } else {
                    $result[$country[$keyField]] = $country[$requestedField];
                }
            } else {

                if ($continent) {

                    if ($country['continent'] == $continent) {
                        $result[] = $country[$requestedField];
                    }
                } else {
                    $result[] = $country[$requestedField];
                }
            }
        }

        return $result;
    }

}

