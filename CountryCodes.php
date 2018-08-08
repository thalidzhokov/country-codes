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
     *
     * ISO-3166-1 alpha-2 (string, 2 character) => [
     *     'alpha2'  => ISO-3166-1 alpha-2  (string, 2 characters),    https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
     *     'alpha3'  => ISO-3166-1 alpha-3  (string, 3 characters),    https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3
     *     'numeric' => ISO-3166-1 numeric  (numeric, 3 digits),       https://en.wikipedia.org/wiki/ISO_3166-1_numeric
     *     'isd' => Internatiguonal Subscriber Dialing code (numeric), https://en.wikipedia.org/wiki/List_of_country_calling_codes
     *     Language code (string, 2 characters) => [
     *             'country'      => (string),
     *             'countryFull'  => (string)
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
                'isd' => '7840',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Абхазия',
                        'countryFull' => 'Республика Абхазия',
                    ),
                'en' =>
                    array(
                        'country' => 'Abkhazia',
                        'countryFull' => 'Abkhazia',
                    ),
            ),
        'AD' =>
            array(
                'alpha2' => 'AD',
                'alpha3' => 'AND',
                'numeric' => '020',
                'isd' => '376',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Андорра',
                        'countryFull' => 'Княжество Андорра',
                    ),
                'en' =>
                    array(
                        'country' => 'Andorra',
                        'countryFull' => 'Andorra',
                    ),
            ),
        'AE' =>
            array(
                'alpha2' => 'AE',
                'alpha3' => 'ARE',
                'numeric' => '784',
                'isd' => '971',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'ОАЭ',
                        'countryFull' => 'Объединенные Арабские Эмираты',
                    ),
                'en' =>
                    array(
                        'country' => 'UAE',
                        'countryFull' => 'United Arab Emirates',
                    ),
            ),
        'AF' =>
            array(
                'alpha2' => 'AF',
                'alpha3' => 'AFG',
                'numeric' => '004',
                'isd' => '93',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Афганистан',
                        'countryFull' => 'Переходное Исламское Государство Афганистан',
                    ),
                'en' =>
                    array(
                        'country' => 'Afghanistan',
                        'countryFull' => 'Afghanistan',
                    ),
            ),
        'AG' =>
            array(
                'alpha2' => 'AG',
                'alpha3' => 'ATG',
                'numeric' => '028',
                'isd' => '1268',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Антигуа и Барбуда',
                        'countryFull' => 'Антигуа и Барбуда',
                    ),
                'en' =>
                    array(
                        'country' => 'Antigua and Barbuda',
                        'countryFull' => 'Antigua and Barbuda',
                    ),
            ),
        'AI' =>
            array(
                'alpha2' => 'AI',
                'alpha3' => 'AIA',
                'numeric' => '660',
                'isd' => '1264',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Ангилья',
                        'countryFull' => 'Ангилья',
                    ),
                'en' =>
                    array(
                        'country' => 'Anguilla',
                        'countryFull' => 'Anguilla',
                    ),
            ),
        'AL' =>
            array(
                'alpha2' => 'AL',
                'alpha3' => 'ALB',
                'numeric' => '008',
                'isd' => '355',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Албания',
                        'countryFull' => 'Республика Албания',
                    ),
                'en' =>
                    array(
                        'country' => 'Albania',
                        'countryFull' => 'Albania',
                    ),
            ),
        'AM' =>
            array(
                'alpha2' => 'AM',
                'alpha3' => 'ARM',
                'numeric' => '051',
                'isd' => '374',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Армения',
                        'countryFull' => 'Республика Армения',
                    ),
                'en' =>
                    array(
                        'country' => 'Armenia',
                        'countryFull' => 'Armenia',
                    ),
            ),
        'AO' =>
            array(
                'alpha2' => 'AO',
                'alpha3' => 'AGO',
                'numeric' => '024',
                'isd' => '244',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Ангола',
                        'countryFull' => 'Республика Ангола',
                    ),
                'en' =>
                    array(
                        'country' => 'Angola',
                        'countryFull' => 'Angola',
                    ),
            ),
        'AQ' =>
            array(
                'alpha2' => 'AQ',
                'alpha3' => 'ATA',
                'numeric' => '010',
                'isd' => '672',
                'continentCode' => 'AN',
                'ru' =>
                    array(
                        'country' => 'Антарктида',
                        'countryFull' => 'Антарктида',
                    ),
                'en' =>
                    array(
                        'country' => 'Antarctica',
                        'countryFull' => 'Antarctica',
                    ),
            ),
        'AR' =>
            array(
                'alpha2' => 'AR',
                'alpha3' => 'ARG',
                'numeric' => '032',
                'isd' => '54',
                'continentCode' => 'SA',
                'ru' =>
                    array(
                        'country' => 'Аргентина',
                        'countryFull' => 'Аргентинская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Argentina',
                        'countryFull' => 'Argentina',
                    ),
            ),
        'AS' =>
            array(
                'alpha2' => 'AS',
                'alpha3' => 'ASM',
                'numeric' => '016',
                'isd' => '1684',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Американское Самоа',
                        'countryFull' => 'Американское Самоа',
                    ),
                'en' =>
                    array(
                        'country' => 'American Samoa',
                        'countryFull' => 'American Samoa',
                    ),
            ),
        'AT' =>
            array(
                'alpha2' => 'AT',
                'alpha3' => 'AUT',
                'numeric' => '040',
                'isd' => '43',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Австрия',
                        'countryFull' => 'Австрийская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Austria',
                        'countryFull' => 'Austria',
                    ),
            ),
        'AU' =>
            array(
                'alpha2' => 'AU',
                'alpha3' => 'AUS',
                'numeric' => '036',
                'isd' => '61',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Австралия',
                        'countryFull' => 'Австралия',
                    ),
                'en' =>
                    array(
                        'country' => 'Australia',
                        'countryFull' => 'Australia',
                    ),
            ),
        'AW' =>
            array(
                'alpha2' => 'AW',
                'alpha3' => 'ABW',
                'numeric' => '533',
                'isd' => '297',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Аруба',
                        'countryFull' => 'Аруба',
                    ),
                'en' =>
                    array(
                        'country' => 'Aruba',
                        'countryFull' => 'Aruba',
                    ),
            ),
        'AX' =>
            array(
                'alpha2' => 'AX',
                'alpha3' => 'ALA',
                'numeric' => '248',
                'isd' => '358',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Эландские острова',
                        'countryFull' => 'Эландские острова',
                    ),
                'en' =>
                    array(
                        'country' => 'Åland Islands',
                        'countryFull' => 'Åland Islands',
                    ),
            ),
        'AZ' =>
            array(
                'alpha2' => 'AZ',
                'alpha3' => 'AZE',
                'numeric' => '031',
                'isd' => '994',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Азербайджан',
                        'countryFull' => 'Республика Азербайджан',
                    ),
                'en' =>
                    array(
                        'country' => 'Azerbaijan',
                        'countryFull' => 'Azerbaijan',
                    ),
            ),
        'BA' =>
            array(
                'alpha2' => 'BA',
                'alpha3' => 'BIH',
                'numeric' => '070',
                'isd' => '387',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Босния и Герцеговина',
                        'countryFull' => 'Босния и Герцеговина',
                    ),
                'en' =>
                    array(
                        'country' => 'Bosnia and Herzegovina',
                        'countryFull' => 'Bosnia and Herzegovina',
                    ),
            ),
        'BB' =>
            array(
                'alpha2' => 'BB',
                'alpha3' => 'BRB',
                'numeric' => '052',
                'isd' => '1246',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Барбадос',
                        'countryFull' => 'Барбадос',
                    ),
                'en' =>
                    array(
                        'country' => 'Barbados',
                        'countryFull' => 'Barbados',
                    ),
            ),
        'BD' =>
            array(
                'alpha2' => 'BD',
                'alpha3' => 'BGD',
                'numeric' => '050',
                'isd' => '880',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Бангладеш',
                        'countryFull' => 'Народная Республика Бангладеш',
                    ),
                'en' =>
                    array(
                        'country' => 'Bangladesh',
                        'countryFull' => 'Bangladesh',
                    ),
            ),
        'BE' =>
            array(
                'alpha2' => 'BE',
                'alpha3' => 'BEL',
                'numeric' => '056',
                'isd' => '32',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Бельгия',
                        'countryFull' => 'Королевство Бельгии',
                    ),
                'en' =>
                    array(
                        'country' => 'Belgium',
                        'countryFull' => 'Belgium',
                    ),
            ),
        'BF' =>
            array(
                'alpha2' => 'BF',
                'alpha3' => 'BFA',
                'numeric' => '854',
                'isd' => '226',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Буркина-Фасо',
                        'countryFull' => 'Буркина-Фасо',
                    ),
                'en' =>
                    array(
                        'country' => 'Burkina Faso',
                        'countryFull' => 'Burkina Faso',
                    ),
            ),
        'BG' =>
            array(
                'alpha2' => 'BG',
                'alpha3' => 'BGR',
                'numeric' => '100',
                'isd' => '359',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Болгария',
                        'countryFull' => 'Республика Болгария',
                    ),
                'en' =>
                    array(
                        'country' => 'Bulgaria',
                        'countryFull' => 'Bulgaria',
                    ),
            ),
        'BH' =>
            array(
                'alpha2' => 'BH',
                'alpha3' => 'BHR',
                'numeric' => '048',
                'isd' => '973',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Бахрейн',
                        'countryFull' => 'Королевство Бахрейн',
                    ),
                'en' =>
                    array(
                        'country' => 'Bahrain',
                        'countryFull' => 'Bahrain',
                    ),
            ),
        'BI' =>
            array(
                'alpha2' => 'BI',
                'alpha3' => 'BDI',
                'numeric' => '108',
                'isd' => '257',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Бурунди',
                        'countryFull' => 'Республика Бурунди',
                    ),
                'en' =>
                    array(
                        'country' => 'Burundi',
                        'countryFull' => 'Burundi',
                    ),
            ),
        'BJ' =>
            array(
                'alpha2' => 'BJ',
                'alpha3' => 'BEN',
                'numeric' => '204',
                'isd' => '229',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Бенин',
                        'countryFull' => 'Республика Бенин',
                    ),
                'en' =>
                    array(
                        'country' => 'Benin',
                        'countryFull' => 'Benin',
                    ),
            ),
        'BL' =>
            array(
                'alpha2' => 'BL',
                'alpha3' => 'BLM',
                'numeric' => '652',
                'isd' => '590',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Сен-Бартельми',
                        'countryFull' => 'Сен-Бартельми',
                    ),
                'en' =>
                    array(
                        'country' => 'Saint Barthélemy',
                        'countryFull' => 'Saint Barthélemy',
                    ),
            ),
        'BM' =>
            array(
                'alpha2' => 'BM',
                'alpha3' => 'BMU',
                'numeric' => '060',
                'isd' => '1441',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Бермуды',
                        'countryFull' => 'Бермуды',
                    ),
                'en' =>
                    array(
                        'country' => 'Bermuda',
                        'countryFull' => 'Bermuda',
                    ),
            ),
        'BN' =>
            array(
                'alpha2' => 'BN',
                'alpha3' => 'BRN',
                'numeric' => '096',
                'isd' => '672',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Бруней-Даруссалам',
                        'countryFull' => 'Бруней-Даруссалам',
                    ),
                'en' =>
                    array(
                        'country' => 'Brunei Darussalam',
                        'countryFull' => 'Brunei Darussalam',
                    ),
            ),
        'BO' =>
            array(
                'alpha2' => 'BO',
                'alpha3' => 'BOL',
                'numeric' => '068',
                'isd' => '591',
                'continentCode' => 'SA',
                'ru' =>
                    array(
                        'country' => 'Боливия',
                        'countryFull' => 'Многонациональное Государство Боливия',
                    ),
                'en' =>
                    array(
                        'country' => 'Bolivia',
                        'countryFull' => 'Plurinational State of Bolivia',
                    ),
            ),
        'BQ' =>
            array(
                'alpha2' => 'BQ',
                'alpha3' => 'BES',
                'numeric' => '535',
                'isd' => Null,
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Бонайре, Саба и Синт-Эстатиус',
                        'countryFull' => 'Бонайре, Саба и Синт-Эстатиус',
                    ),
                'en' =>
                    array(
                        'country' => 'Bonaire, Sint Eustatius and Saba',
                        'countryFull' => 'Bonaire, Sint Eustatius and Saba',
                    ),
            ),
        'BR' =>
            array(
                'alpha2' => 'BR',
                'alpha3' => 'BRA',
                'numeric' => '076',
                'isd' => '55',
                'continentCode' => 'SA',
                'ru' =>
                    array(
                        'country' => 'Бразилия',
                        'countryFull' => 'Федеративная Республика Бразилия',
                    ),
                'en' =>
                    array(
                        'country' => 'Brazil',
                        'countryFull' => 'Brazil',
                    ),
            ),
        'BS' =>
            array(
                'alpha2' => 'BS',
                'alpha3' => 'BHS',
                'numeric' => '044',
                'isd' => '1242',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Багамы',
                        'countryFull' => 'Содружество Багамы',
                    ),
                'en' =>
                    array(
                        'country' => 'Bahamas',
                        'countryFull' => 'Bahamas',
                    ),
            ),
        'BT' =>
            array(
                'alpha2' => 'BT',
                'alpha3' => 'BTN',
                'numeric' => '064',
                'isd' => '975',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Бутан',
                        'countryFull' => 'Королевство Бутан',
                    ),
                'en' =>
                    array(
                        'country' => 'Bhutan',
                        'countryFull' => 'Bhutan',
                    ),
            ),
        'BV' =>
            array(
                'alpha2' => 'BV',
                'alpha3' => 'BVT',
                'numeric' => '074',
                'isd' => '61',
                'continentCode' => 'AN',
                'ru' =>
                    array(
                        'country' => 'Остров Буве',
                        'countryFull' => 'Остров Буве',
                    ),
                'en' =>
                    array(
                        'country' => 'Bouvet Island',
                        'countryFull' => 'Bouvet Island',
                    ),
            ),
        'BW' =>
            array(
                'alpha2' => 'BW',
                'alpha3' => 'BWA',
                'numeric' => '072',
                'isd' => '267',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Ботсвана',
                        'countryFull' => 'Республика Ботсвана',
                    ),
                'en' =>
                    array(
                        'country' => 'Botswana',
                        'countryFull' => 'Botswana',
                    ),
            ),
        'BY' =>
            array(
                'alpha2' => 'BY',
                'alpha3' => 'BLR',
                'numeric' => '112',
                'isd' => '375',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Беларусь',
                        'countryFull' => 'Республика Беларусь',
                    ),
                'en' =>
                    array(
                        'country' => 'Belarus',
                        'countryFull' => 'Belarus',
                    ),
            ),
        'BZ' =>
            array(
                'alpha2' => 'BZ',
                'alpha3' => 'BLZ',
                'numeric' => '084',
                'isd' => '501',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Белиз',
                        'countryFull' => 'Белиз',
                    ),
                'en' =>
                    array(
                        'country' => 'Belize',
                        'countryFull' => 'Belize',
                    ),
            ),
        'CA' =>
            array(
                'alpha2' => 'CA',
                'alpha3' => 'CAN',
                'numeric' => '124',
                'isd' => '1',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Канада',
                        'countryFull' => 'Канада',
                    ),
                'en' =>
                    array(
                        'country' => 'Canada',
                        'countryFull' => 'Canada',
                    ),
            ),
        'CC' =>
            array(
                'alpha2' => 'CC',
                'alpha3' => 'CCK',
                'numeric' => '166',
                'isd' => '891',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Кокосовые острова',
                        'countryFull' => 'Кокосовые (Килинг) острова',
                    ),
                'en' =>
                    array(
                        'country' => 'Cocos Islands',
                        'countryFull' => 'Cocos (Keeling) Islands',
                    ),
            ),
        'CD' =>
            array(
                'alpha2' => 'CD',
                'alpha3' => 'COD',
                'numeric' => '180',
                'isd' => '243',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Демократическая Республика Конго',
                        'countryFull' => 'Демократическая Республика Конго',
                    ),
                'en' =>
                    array(
                        'country' => 'Democratic Republic of the Congo',
                        'countryFull' => 'Democratic Republic of the Congo',
                    ),
            ),
        'CF' =>
            array(
                'alpha2' => 'CF',
                'alpha3' => 'CAF',
                'numeric' => '140',
                'isd' => '236',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'ЦАР',
                        'countryFull' => 'Центральноафриканская Респу́блика',
                    ),
                'en' =>
                    array(
                        'country' => 'CAR',
                        'countryFull' => 'Central African Republic',
                    ),
            ),
        'CG' =>
            array(
                'alpha2' => 'CG',
                'alpha3' => 'COG',
                'numeric' => '178',
                'isd' => '242',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Конго',
                        'countryFull' => 'Республика Конго',
                    ),
                'en' =>
                    array(
                        'country' => 'Congo',
                        'countryFull' => 'Republic of the Congo',
                    ),
            ),
        'CH' =>
            array(
                'alpha2' => 'CH',
                'alpha3' => 'CHE',
                'numeric' => '756',
                'isd' => '41',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Швейцария',
                        'countryFull' => 'Швейцарская Конфедерация',
                    ),
                'en' =>
                    array(
                        'country' => 'Switzerland',
                        'countryFull' => 'Swiss Confederation',
                    ),
            ),
        'CI' =>
            array(
                'alpha2' => 'CI',
                'alpha3' => 'CIV',
                'numeric' => '384',
                'isd' => '225',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Кот д\'Ивуар',
                        'countryFull' => 'Республика Кот д\'Ивуар',
                    ),
                'en' =>
                    array(
                        'country' => 'Cote d\'Ivoire',
                        'countryFull' => 'Cote d\'Ivoire',
                    ),
            ),
        'CK' =>
            array(
                'alpha2' => 'CK',
                'alpha3' => 'COK',
                'numeric' => '184',
                'isd' => '682',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Острова Кука',
                        'countryFull' => 'Острова Кука',
                    ),
                'en' =>
                    array(
                        'country' => 'Cook Islands',
                        'countryFull' => 'Cook Islands',
                    ),
            ),
        'CL' =>
            array(
                'alpha2' => 'CL',
                'alpha3' => 'CHL',
                'numeric' => '152',
                'isd' => '56',
                'continentCode' => 'SA',
                'ru' =>
                    array(
                        'country' => 'Чили',
                        'countryFull' => 'Республика Чили',
                    ),
                'en' =>
                    array(
                        'country' => 'Chile',
                        'countryFull' => 'Chile',
                    ),
            ),
        'CM' =>
            array(
                'alpha2' => 'CM',
                'alpha3' => 'CMR',
                'numeric' => '120',
                'isd' => '231',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Камерун',
                        'countryFull' => 'Республика Камерун',
                    ),
                'en' =>
                    array(
                        'country' => 'Cameroon',
                        'countryFull' => 'Cameroon',
                    ),
            ),
        'CN' =>
            array(
                'alpha2' => 'CN',
                'alpha3' => 'CHN',
                'numeric' => '156',
                'isd' => '86',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Китай',
                        'countryFull' => 'Китайская Народная Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'China',
                        'countryFull' => 'China',
                    ),
            ),
        'CO' =>
            array(
                'alpha2' => 'CO',
                'alpha3' => 'COL',
                'numeric' => '170',
                'isd' => '57',
                'continentCode' => 'SA',
                'ru' =>
                    array(
                        'country' => 'Колумбия',
                        'countryFull' => 'Республика Колумбия',
                    ),
                'en' =>
                    array(
                        'country' => 'Colombia',
                        'countryFull' => 'Colombia',
                    ),
            ),
        'CR' =>
            array(
                'alpha2' => 'CR',
                'alpha3' => 'CRI',
                'numeric' => '188',
                'isd' => '506',
                'continentCode' => 'SA',
                'ru' =>
                    array(
                        'country' => 'Коста-Рика',
                        'countryFull' => 'Республика Коста-Рика',
                    ),
                'en' =>
                    array(
                        'country' => 'Costa Rica',
                        'countryFull' => 'Costa Rica',
                    ),
            ),
        'CU' =>
            array(
                'alpha2' => 'CU',
                'alpha3' => 'CUB',
                'numeric' => '192',
                'isd' => '53',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Куба',
                        'countryFull' => 'Республика Куба',
                    ),
                'en' =>
                    array(
                        'country' => 'Cuba',
                        'countryFull' => 'Cuba',
                    ),
            ),
        'CV' =>
            array(
                'alpha2' => 'CV',
                'alpha3' => 'CPV',
                'numeric' => '132',
                'isd' => '238',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Кабо-Верде',
                        'countryFull' => 'Республика Кабо-Верде',
                    ),
                'en' =>
                    array(
                        'country' => 'Cape Verde',
                        'countryFull' => 'Cape Verde',
                    ),
            ),
        'CW' =>
            array(
                'alpha2' => 'CW',
                'alpha3' => 'CUW',
                'numeric' => '531',
                'isd' => '599',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Кюрасао',
                        'countryFull' => 'Кюрасао',
                    ),
                'en' =>
                    array(
                        'country' => 'Curaçao',
                        'countryFull' => 'Curaçao',
                    ),
            ),
        'CX' =>
            array(
                'alpha2' => 'CX',
                'alpha3' => 'CXR',
                'numeric' => '162',
                'isd' => '61',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Остров Рождества',
                        'countryFull' => 'Остров Рождества',
                    ),
                'en' =>
                    array(
                        'country' => 'Christmas Island',
                        'countryFull' => 'Christmas Island',
                    ),
            ),
        'CY' =>
            array(
                'alpha2' => 'CY',
                'alpha3' => 'CYP',
                'numeric' => '196',
                'isd' => '357',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Кипр',
                        'countryFull' => 'Республика Кипр',
                    ),
                'en' =>
                    array(
                        'country' => 'Cyprus',
                        'countryFull' => 'Cyprus',
                    ),
            ),
        'CZ' =>
            array(
                'alpha2' => 'CZ',
                'alpha3' => 'CZE',
                'numeric' => '203',
                'isd' => '420',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Чехия',
                        'countryFull' => 'Чешская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Czech Republic',
                        'countryFull' => 'Czech Republic',
                    ),
            ),
        'DE' =>
            array(
                'alpha2' => 'DE',
                'alpha3' => 'DEU',
                'numeric' => '276',
                'isd' => '49',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Германия',
                        'countryFull' => 'Федеративная Республика Германия',
                    ),
                'en' =>
                    array(
                        'country' => 'Germany',
                        'countryFull' => 'Germany',
                    ),
            ),
        'DJ' =>
            array(
                'alpha2' => 'DJ',
                'alpha3' => 'DJI',
                'numeric' => '262',
                'isd' => '253',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Джибути',
                        'countryFull' => 'Республика Джибути',
                    ),
                'en' =>
                    array(
                        'country' => 'Djibouti',
                        'countryFull' => 'Djibouti',
                    ),
            ),
        'DK' =>
            array(
                'alpha2' => 'DK',
                'alpha3' => 'DNK',
                'numeric' => '208',
                'isd' => '45',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Дания',
                        'countryFull' => 'Королевство Дания',
                    ),
                'en' =>
                    array(
                        'country' => 'Denmark',
                        'countryFull' => 'Denmark',
                    ),
            ),
        'DM' =>
            array(
                'alpha2' => 'DM',
                'alpha3' => 'DMA',
                'numeric' => '212',
                'isd' => '1767',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Доминика',
                        'countryFull' => 'Содружество Доминики',
                    ),
                'en' =>
                    array(
                        'country' => 'Dominica',
                        'countryFull' => 'Dominica',
                    ),
            ),
        'DO' =>
            array(
                'alpha2' => 'DO',
                'alpha3' => 'DOM',
                'numeric' => '214',
                'isd' => '1809',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Доминиканская Республика',
                        'countryFull' => 'Доминиканская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Dominican Republic',
                        'countryFull' => 'Dominican Republic',
                    ),
            ),
        'DZ' =>
            array(
                'alpha2' => 'DZ',
                'alpha3' => 'DZA',
                'numeric' => '012',
                'isd' => '213',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Алжир',
                        'countryFull' => 'Алжирская Народная Демократическая Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Algeria',
                        'countryFull' => 'Algeria',
                    ),
            ),
        'EC' =>
            array(
                'alpha2' => 'EC',
                'alpha3' => 'ECU',
                'numeric' => '218',
                'isd' => '593',
                'continentCode' => 'SA',
                'ru' =>
                    array(
                        'country' => 'Эквадор',
                        'countryFull' => 'Республика Эквадор',
                    ),
                'en' =>
                    array(
                        'country' => 'Ecuador',
                        'countryFull' => 'Ecuador',
                    ),
            ),
        'EE' =>
            array(
                'alpha2' => 'EE',
                'alpha3' => 'EST',
                'numeric' => '233',
                'isd' => '372',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Эстония',
                        'countryFull' => 'Эстонская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Estonia',
                        'countryFull' => 'Estonia',
                    ),
            ),
        'EG' =>
            array(
                'alpha2' => 'EG',
                'alpha3' => 'EGY',
                'numeric' => '818',
                'isd' => '20',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Египет',
                        'countryFull' => 'Арабская Республика Египет',
                    ),
                'en' =>
                    array(
                        'country' => 'Egypt',
                        'countryFull' => 'Egypt',
                    ),
            ),
        'EH' =>
            array(
                'alpha2' => 'EH',
                'alpha3' => 'ESH',
                'numeric' => '732',
                'isd' => '212',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Западная Сахара',
                        'countryFull' => 'Западная Сахара',
                    ),
                'en' =>
                    array(
                        'country' => 'Western Sahara',
                        'countryFull' => 'Western Sahara',
                    ),
            ),
        'ER' =>
            array(
                'alpha2' => 'ER',
                'alpha3' => 'ERI',
                'numeric' => '232',
                'isd' => '291',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Эритрея',
                        'countryFull' => 'Эритрея',
                    ),
                'en' =>
                    array(
                        'country' => 'Eritrea',
                        'countryFull' => 'Eritrea',
                    ),
            ),
        'ES' =>
            array(
                'alpha2' => 'ES',
                'alpha3' => 'ESP',
                'numeric' => '724',
                'isd' => '34',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Испания',
                        'countryFull' => 'Королевство Испания',
                    ),
                'en' =>
                    array(
                        'country' => 'Spain',
                        'countryFull' => 'Spain',
                    ),
            ),
        'ET' =>
            array(
                'alpha2' => 'ET',
                'alpha3' => 'ETH',
                'numeric' => '231',
                'isd' => '251',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Эфиопия',
                        'countryFull' => 'Федеративная Демократическая Республика Эфиопия',
                    ),
                'en' =>
                    array(
                        'country' => 'Ethiopia',
                        'countryFull' => 'Ethiopia',
                    ),
            ),
        'FI' =>
            array(
                'alpha2' => 'FI',
                'alpha3' => 'FIN',
                'numeric' => '246',
                'isd' => '238',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Финляндия',
                        'countryFull' => 'Финляндская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Finland',
                        'countryFull' => 'Finland',
                    ),
            ),
        'FJ' =>
            array(
                'alpha2' => 'FJ',
                'alpha3' => 'FJI',
                'numeric' => '242',
                'isd' => '679',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Фиджи',
                        'countryFull' => 'Республика островов Фиджи',
                    ),
                'en' =>
                    array(
                        'country' => 'Fiji',
                        'countryFull' => 'Fiji',
                    ),
            ),
        'FK' =>
            array(
                'alpha2' => 'FK',
                'alpha3' => 'FLK',
                'numeric' => '238',
                'isd' => '500',
                'continentCode' => 'SA',
                'ru' =>
                    array(
                        'country' => 'Фолклендские острова',
                        'countryFull' => 'Фолклендские острова (Мальвинские)',
                    ),
                'en' =>
                    array(
                        'country' => 'Falkland Islands',
                        'countryFull' => 'Falkland Islands (Malvinas)',
                    ),
            ),
        'FM' =>
            array(
                'alpha2' => 'FM',
                'alpha3' => 'FSM',
                'numeric' => '583',
                'isd' => '691',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Микронезия, Федеративные Штаты',
                        'countryFull' => 'Федеративные штаты Микронезии',
                    ),
                'en' =>
                    array(
                        'country' => 'Micronesia, Federated States of',
                        'countryFull' => 'Micronesia, Federated States of',
                    ),
            ),
        'FO' =>
            array(
                'alpha2' => 'FO',
                'alpha3' => 'FRO',
                'numeric' => '234',
                'isd' => '298',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Фарерские острова',
                        'countryFull' => 'Фарерские острова',
                    ),
                'en' =>
                    array(
                        'country' => 'Faroe Islands',
                        'countryFull' => 'Faroe Islands',
                    ),
            ),
        'FR' =>
            array(
                'alpha2' => 'FR',
                'alpha3' => 'FRA',
                'numeric' => '250',
                'isd' => '33',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Франция',
                        'countryFull' => 'Французская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'France',
                        'countryFull' => 'France',
                    ),
            ),
        'GA' =>
            array(
                'alpha2' => 'GA',
                'alpha3' => 'GAB',
                'numeric' => '266',
                'isd' => '241',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Габон',
                        'countryFull' => 'Габонская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Gabon',
                        'countryFull' => 'Gabon',
                    ),
            ),
        'GB' =>
            array(
                'alpha2' => 'GB',
                'alpha3' => 'GBR',
                'numeric' => '826',
                'isd' => '44',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Соединенное Королевство',
                        'countryFull' => 'Соединенное Королевство Великобритании и Северной Ирландии',
                    ),
                'en' =>
                    array(
                        'country' => 'United Kingdom',
                        'countryFull' => 'United Kingdom',
                    ),
            ),
        'GD' =>
            array(
                'alpha2' => 'GD',
                'alpha3' => 'GRD',
                'numeric' => '308',
                'isd' => '1473',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Гренада',
                        'countryFull' => 'Гренада',
                    ),
                'en' =>
                    array(
                        'country' => 'Grenada',
                        'countryFull' => 'Grenada',
                    ),
            ),
        'GE' =>
            array(
                'alpha2' => 'GE',
                'alpha3' => 'GEO',
                'numeric' => '268',
                'isd' => '995',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Грузия',
                        'countryFull' => 'Грузия',
                    ),
                'en' =>
                    array(
                        'country' => 'Georgia',
                        'countryFull' => 'Georgia',
                    ),
            ),
        'GF' =>
            array(
                'alpha2' => 'GF',
                'alpha3' => 'GUF',
                'numeric' => '254',
                'isd' => '594',
                'continentCode' => 'SA',
                'ru' =>
                    array(
                        'country' => 'Французская Гвиана',
                        'countryFull' => 'Французская Гвиана',
                    ),
                'en' =>
                    array(
                        'country' => 'French Guiana',
                        'countryFull' => 'French Guiana',
                    ),
            ),
        'GG' =>
            array(
                'alpha2' => 'GG',
                'alpha3' => 'GGY',
                'numeric' => '831',
                'isd' => '44',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Гернси',
                        'countryFull' => 'Гернси',
                    ),
                'en' =>
                    array(
                        'country' => 'Guernsey',
                        'countryFull' => 'Guernsey',
                    ),
            ),
        'GH' =>
            array(
                'alpha2' => 'GH',
                'alpha3' => 'GHA',
                'numeric' => '288',
                'isd' => '233',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Гана',
                        'countryFull' => 'Республика Гана',
                    ),
                'en' =>
                    array(
                        'country' => 'Ghana',
                        'countryFull' => 'Ghana',
                    ),
            ),
        'GI' =>
            array(
                'alpha2' => 'GI',
                'alpha3' => 'GIB',
                'numeric' => '292',
                'isd' => '350',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Гибралтар',
                        'countryFull' => 'Гибралтар',
                    ),
                'en' =>
                    array(
                        'country' => 'Gibraltar',
                        'countryFull' => 'Gibraltar',
                    ),
            ),
        'GL' =>
            array(
                'alpha2' => 'GL',
                'alpha3' => 'GRL',
                'numeric' => '304',
                'isd' => '299',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Гренландия',
                        'countryFull' => 'Гренландия',
                    ),
                'en' =>
                    array(
                        'country' => 'Greenland',
                        'countryFull' => 'Greenland',
                    ),
            ),
        'GM' =>
            array(
                'alpha2' => 'GM',
                'alpha3' => 'GMB',
                'numeric' => '270',
                'isd' => '220',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Гамбия',
                        'countryFull' => 'Республика Гамбия',
                    ),
                'en' =>
                    array(
                        'country' => 'Gambia',
                        'countryFull' => 'Gambia',
                    ),
            ),
        'GN' =>
            array(
                'alpha2' => 'GN',
                'alpha3' => 'GIN',
                'numeric' => '324',
                'isd' => '224',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Гвинея',
                        'countryFull' => 'Гвинейская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Guinea',
                        'countryFull' => 'Guinea',
                    ),
            ),
        'GP' =>
            array(
                'alpha2' => 'GP',
                'alpha3' => 'GLP',
                'numeric' => '312',
                'isd' => '590',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Гваделупа',
                        'countryFull' => 'Гваделупа',
                    ),
                'en' =>
                    array(
                        'country' => 'Guadeloupe',
                        'countryFull' => 'Guadeloupe',
                    ),
            ),
        'GQ' =>
            array(
                'alpha2' => 'GQ',
                'alpha3' => 'GNQ',
                'numeric' => '226',
                'isd' => '240',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Экваториальная Гвинея',
                        'countryFull' => 'Республика Экваториальная Гвинея',
                    ),
                'en' =>
                    array(
                        'country' => 'Equatorial Guinea',
                        'countryFull' => 'Equatorial Guinea',
                    ),
            ),
        'GR' =>
            array(
                'alpha2' => 'GR',
                'alpha3' => 'GRC',
                'numeric' => '300',
                'isd' => '30',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Греция',
                        'countryFull' => 'Греческая Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Greece',
                        'countryFull' => 'Greece',
                    ),
            ),
        'GS' =>
            array(
                'alpha2' => 'GS',
                'alpha3' => 'SGS',
                'numeric' => '239',
                'isd' => '500',
                'continentCode' => 'AN',
                'ru' =>
                    array(
                        'country' => 'Южная Джорджия и Южные Сандвичевы острова',
                        'countryFull' => 'Южная Джорджия и Южные Сандвичевы острова',
                    ),
                'en' =>
                    array(
                        'country' => 'South Georgia and the South Sandwich Islands',
                        'countryFull' => 'South Georgia and the South Sandwich Islands',
                    ),
            ),
        'GT' =>
            array(
                'alpha2' => 'GT',
                'alpha3' => 'GTM',
                'numeric' => '320',
                'isd' => '502',
                'continentCode' => 'SA',
                'ru' =>
                    array(
                        'country' => 'Гватемала',
                        'countryFull' => 'Республика Гватемала',
                    ),
                'en' =>
                    array(
                        'country' => 'Guatemala',
                        'countryFull' => 'Guatemala',
                    ),
            ),
        'GU' =>
            array(
                'alpha2' => 'GU',
                'alpha3' => 'GUM',
                'numeric' => '316',
                'isd' => '1871',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Гуам',
                        'countryFull' => 'Гуам',
                    ),
                'en' =>
                    array(
                        'country' => 'Guam',
                        'countryFull' => 'Guam',
                    ),
            ),
        'GW' =>
            array(
                'alpha2' => 'GW',
                'alpha3' => 'GNB',
                'numeric' => '624',
                'isd' => '245',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Гвинея-Бисау',
                        'countryFull' => 'Республика Гвинея-Бисау',
                    ),
                'en' =>
                    array(
                        'country' => 'Guinea-Bissau',
                        'countryFull' => 'Guinea-Bissau',
                    ),
            ),
        'GY' =>
            array(
                'alpha2' => 'GY',
                'alpha3' => 'GUY',
                'numeric' => '328',
                'isd' => '592',
                'continentCode' => 'SA',
                'ru' =>
                    array(
                        'country' => 'Гайана',
                        'countryFull' => 'Республика Гайана',
                    ),
                'en' =>
                    array(
                        'country' => 'Guyana',
                        'countryFull' => 'Guyana',
                    ),
            ),
        'HK' =>
            array(
                'alpha2' => 'HK',
                'alpha3' => 'HKG',
                'numeric' => '344',
                'isd' => '852',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Гонконг',
                        'countryFull' => 'Специальный административный регион Китая Гонконг',
                    ),
                'en' =>
                    array(
                        'country' => 'Hong Kong',
                        'countryFull' => 'Hong Kong',
                    ),
            ),
        'HM' =>
            array(
                'alpha2' => 'HM',
                'alpha3' => 'HMD',
                'numeric' => '334',
                'isd' => '672',
                'continentCode' => 'AN',
                'ru' =>
                    array(
                        'country' => 'Остров Херд и острова Макдональд',
                        'countryFull' => 'Остров Херд и острова Макдональд',
                    ),
                'en' =>
                    array(
                        'country' => 'Heard Island and McDonald Islands',
                        'countryFull' => 'Heard Island and McDonald Islands',
                    ),
            ),
        'HN' =>
            array(
                'alpha2' => 'HN',
                'alpha3' => 'HND',
                'numeric' => '340',
                'isd' => '504',
                'continentCode' => 'SA',
                'ru' =>
                    array(
                        'country' => 'Гондурас',
                        'countryFull' => 'Республика Гондурас',
                    ),
                'en' =>
                    array(
                        'country' => 'Honduras',
                        'countryFull' => 'Honduras',
                    ),
            ),
        'HR' =>
            array(
                'alpha2' => 'HR',
                'alpha3' => 'HRV',
                'numeric' => '191',
                'isd' => '385',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Хорватия',
                        'countryFull' => 'Республика Хорватия',
                    ),
                'en' =>
                    array(
                        'country' => 'Croatia',
                        'countryFull' => 'Croatia',
                    ),
            ),
        'HT' =>
            array(
                'alpha2' => 'HT',
                'alpha3' => 'HTI',
                'numeric' => '332',
                'isd' => '509',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Гаити',
                        'countryFull' => 'Республика Гаити',
                    ),
                'en' =>
                    array(
                        'country' => 'Haiti',
                        'countryFull' => 'Haiti',
                    ),
            ),
        'HU' =>
            array(
                'alpha2' => 'HU',
                'alpha3' => 'HUN',
                'numeric' => '348',
                'isd' => '36',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Венгрия',
                        'countryFull' => 'Венгерская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Hungary',
                        'countryFull' => 'Hungary',
                    ),
            ),
        'ID' =>
            array(
                'alpha2' => 'ID',
                'alpha3' => 'IDN',
                'numeric' => '360',
                'isd' => '62',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Индонезия',
                        'countryFull' => 'Республика Индонезия',
                    ),
                'en' =>
                    array(
                        'country' => 'Indonesia',
                        'countryFull' => 'Indonesia',
                    ),
            ),
        'IE' =>
            array(
                'alpha2' => 'IE',
                'alpha3' => 'IRL',
                'numeric' => '372',
                'isd' => '353',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Ирландия',
                        'countryFull' => 'Ирландия',
                    ),
                'en' =>
                    array(
                        'country' => 'Ireland',
                        'countryFull' => 'Ireland',
                    ),
            ),
        'IL' =>
            array(
                'alpha2' => 'IL',
                'alpha3' => 'ISR',
                'numeric' => '376',
                'isd' => '972',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Израиль',
                        'countryFull' => 'Государство Израиль',
                    ),
                'en' =>
                    array(
                        'country' => 'Israel',
                        'countryFull' => 'Israel',
                    ),
            ),
        'IM' =>
            array(
                'alpha2' => 'IM',
                'alpha3' => 'IMN',
                'numeric' => '833',
                'isd' => '44',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Остров Мэн',
                        'countryFull' => 'Остров Мэн',
                    ),
                'en' =>
                    array(
                        'country' => 'Isle of Man',
                        'countryFull' => 'Isle of Man',
                    ),
            ),
        'IN' =>
            array(
                'alpha2' => 'IN',
                'alpha3' => 'IND',
                'numeric' => '356',
                'isd' => '91',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Индия',
                        'countryFull' => 'Республика Индия',
                    ),
                'en' =>
                    array(
                        'country' => 'India',
                        'countryFull' => 'India',
                    ),
            ),
        'IO' =>
            array(
                'alpha2' => 'IO',
                'alpha3' => 'IOT',
                'numeric' => '086',
                'isd' => '246',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Британская территория в Индийском океане',
                        'countryFull' => 'Британская территория в Индийском океане',
                    ),
                'en' =>
                    array(
                        'country' => 'British Indian Ocean Territory',
                        'countryFull' => 'British Indian Ocean Territory',
                    ),
            ),
        'IQ' =>
            array(
                'alpha2' => 'IQ',
                'alpha3' => 'IRQ',
                'numeric' => '368',
                'isd' => '964',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Ирак',
                        'countryFull' => 'Республика Ирак',
                    ),
                'en' =>
                    array(
                        'country' => 'Iraq',
                        'countryFull' => 'Iraq',
                    ),
            ),
        'IR' =>
            array(
                'alpha2' => 'IR',
                'alpha3' => 'IRN',
                'numeric' => '364',
                'isd' => '98',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Иран',
                        'countryFull' => 'Исламская Республика Иран',
                    ),
                'en' =>
                    array(
                        'country' => 'Iran',
                        'countryFull' => 'Islamic Republic of Iran',
                    ),
            ),
        'IS' =>
            array(
                'alpha2' => 'IS',
                'alpha3' => 'ISL',
                'numeric' => '352',
                'isd' => '354',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Исландия',
                        'countryFull' => 'Республика Исландия',
                    ),
                'en' =>
                    array(
                        'country' => 'Iceland',
                        'countryFull' => 'Iceland',
                    ),
            ),
        'IT' =>
            array(
                'alpha2' => 'IT',
                'alpha3' => 'ITA',
                'numeric' => '380',
                'isd' => '39',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Италия',
                        'countryFull' => 'Итальянская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Italy',
                        'countryFull' => 'Italy',
                    ),
            ),
        'JE' =>
            array(
                'alpha2' => 'JE',
                'alpha3' => 'JEY',
                'numeric' => '832',
                'isd' => '44',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Джерси',
                        'countryFull' => 'Джерси',
                    ),
                'en' =>
                    array(
                        'country' => 'Jersey',
                        'countryFull' => 'Jersey',
                    ),
            ),
        'JM' =>
            array(
                'alpha2' => 'JM',
                'alpha3' => 'JAM',
                'numeric' => '388',
                'isd' => '1876',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Ямайка',
                        'countryFull' => 'Ямайка',
                    ),
                'en' =>
                    array(
                        'country' => 'Jamaica',
                        'countryFull' => 'Jamaica',
                    ),
            ),
        'JO' =>
            array(
                'alpha2' => 'JO',
                'alpha3' => 'JOR',
                'numeric' => '400',
                'isd' => '962',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Иордания',
                        'countryFull' => 'Иорданское Хашимитское Королевство',
                    ),
                'en' =>
                    array(
                        'country' => 'Jordan',
                        'countryFull' => 'Jordan',
                    ),
            ),
        'JP' =>
            array(
                'alpha2' => 'JP',
                'alpha3' => 'JPN',
                'numeric' => '392',
                'isd' => '81',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Япония',
                        'countryFull' => 'Япония',
                    ),
                'en' =>
                    array(
                        'country' => 'Japan',
                        'countryFull' => 'Japan',
                    ),
            ),
        'KE' =>
            array(
                'alpha2' => 'KE',
                'alpha3' => 'KEN',
                'numeric' => '404',
                'isd' => '254',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Кения',
                        'countryFull' => 'Республика Кения',
                    ),
                'en' =>
                    array(
                        'country' => 'Kenya',
                        'countryFull' => 'Kenya',
                    ),
            ),
        'KG' =>
            array(
                'alpha2' => 'KG',
                'alpha3' => 'KGZ',
                'numeric' => '417',
                'isd' => '996',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Киргизия',
                        'countryFull' => 'Киргизская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Kyrgyzstan',
                        'countryFull' => 'Kyrgyzstan',
                    ),
            ),
        'KH' =>
            array(
                'alpha2' => 'KH',
                'alpha3' => 'KHM',
                'numeric' => '116',
                'isd' => '855',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Камбоджа',
                        'countryFull' => 'Королевство Камбоджа',
                    ),
                'en' =>
                    array(
                        'country' => 'Cambodia',
                        'countryFull' => 'Cambodia',
                    ),
            ),
        'KI' =>
            array(
                'alpha2' => 'KI',
                'alpha3' => 'KIR',
                'numeric' => '296',
                'isd' => '686',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Кирибати',
                        'countryFull' => 'Республика Кирибати',
                    ),
                'en' =>
                    array(
                        'country' => 'Kiribati',
                        'countryFull' => 'Kiribati',
                    ),
            ),
        'KM' =>
            array(
                'alpha2' => 'KM',
                'alpha3' => 'COM',
                'numeric' => '174',
                'isd' => '269',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Коморы',
                        'countryFull' => 'Союз Коморы',
                    ),
                'en' =>
                    array(
                        'country' => 'Comoros',
                        'countryFull' => 'Comoros',
                    ),
            ),
        'KN' =>
            array(
                'alpha2' => 'KN',
                'alpha3' => 'KNA',
                'numeric' => '659',
                'isd' => '1869',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Сент-Китс и Невис',
                        'countryFull' => 'Сент-Китс и Невис',
                    ),
                'en' =>
                    array(
                        'country' => 'Saint Kitts and Nevis',
                        'countryFull' => 'Saint Kitts and Nevis',
                    ),
            ),
        'KP' =>
            array(
                'alpha2' => 'KP',
                'alpha3' => 'PRK',
                'numeric' => '408',
                'isd' => '850',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Северная Корея',
                        'countryFull' => 'Корейская Народно-Демократическая Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'North Korea',
                        'countryFull' => 'Democratic People\'s Republic of Korea',
                    ),
            ),
        'KR' =>
            array(
                'alpha2' => 'KR',
                'alpha3' => 'KOR',
                'numeric' => '410',
                'isd' => '82',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Корея',
                        'countryFull' => 'Республика Корея',
                    ),
                'en' =>
                    array(
                        'country' => 'Korea',
                        'countryFull' => 'Republic of Korea',
                    ),
            ),
        'KW' =>
            array(
                'alpha2' => 'KW',
                'alpha3' => 'KWT',
                'numeric' => '414',
                'isd' => '965',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Кувейт',
                        'countryFull' => 'Государство Кувейт',
                    ),
                'en' =>
                    array(
                        'country' => 'Kuwait',
                        'countryFull' => 'Kuwait',
                    ),
            ),
        'KY' =>
            array(
                'alpha2' => 'KY',
                'alpha3' => 'CYM',
                'numeric' => '136',
                'isd' => '1345',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Острова Кайман',
                        'countryFull' => 'Острова Кайман',
                    ),
                'en' =>
                    array(
                        'country' => 'Cayman Islands',
                        'countryFull' => 'Cayman Islands',
                    ),
            ),
        'KZ' =>
            array(
                'alpha2' => 'KZ',
                'alpha3' => 'KAZ',
                'numeric' => '398',
                'isd' => '7',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Казахстан',
                        'countryFull' => 'Республика Казахстан',
                    ),
                'en' =>
                    array(
                        'country' => 'Kazakhstan',
                        'countryFull' => 'Kazakhstan',
                    ),
            ),
        'LA' =>
            array(
                'alpha2' => 'LA',
                'alpha3' => 'LAO',
                'numeric' => '418',
                'isd' => '856',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Лаос',
                        'countryFull' => 'Лаосская Народно-Демократическая Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Laos',
                        'countryFull' => 'Lao People\'s Democratic Republic',
                    ),
            ),
        'LB' =>
            array(
                'alpha2' => 'LB',
                'alpha3' => 'LBN',
                'numeric' => '422',
                'isd' => '961',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Ливан',
                        'countryFull' => 'Ливанская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Lebanon',
                        'countryFull' => 'Lebanon',
                    ),
            ),
        'LC' =>
            array(
                'alpha2' => 'LC',
                'alpha3' => 'LCA',
                'numeric' => '662',
                'isd' => '1758',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Сент-Люсия',
                        'countryFull' => 'Сент-Люсия',
                    ),
                'en' =>
                    array(
                        'country' => 'Saint Lucia',
                        'countryFull' => 'Saint Lucia',
                    ),
            ),
        'LI' =>
            array(
                'alpha2' => 'LI',
                'alpha3' => 'LIE',
                'numeric' => '438',
                'isd' => '423',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Лихтенштейн',
                        'countryFull' => 'Княжество Лихтенштейн',
                    ),
                'en' =>
                    array(
                        'country' => 'Liechtenstein',
                        'countryFull' => 'Liechtenstein',
                    ),
            ),
        'LK' =>
            array(
                'alpha2' => 'LK',
                'alpha3' => 'LKA',
                'numeric' => '144',
                'isd' => '94',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Шри-Ланка',
                        'countryFull' => 'Демократическая Социалистическая Республика Шри-Ланка',
                    ),
                'en' =>
                    array(
                        'country' => 'Sri Lanka',
                        'countryFull' => 'Sri Lanka',
                    ),
            ),
        'LR' =>
            array(
                'alpha2' => 'LR',
                'alpha3' => 'LBR',
                'numeric' => '430',
                'isd' => '231',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Либерия',
                        'countryFull' => 'Республика Либерия',
                    ),
                'en' =>
                    array(
                        'country' => 'Liberia',
                        'countryFull' => 'Liberia',
                    ),
            ),
        'LS' =>
            array(
                'alpha2' => 'LS',
                'alpha3' => 'LSO',
                'numeric' => '426',
                'isd' => '266',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Лесото',
                        'countryFull' => 'Королевство Лесото',
                    ),
                'en' =>
                    array(
                        'country' => 'Lesotho',
                        'countryFull' => 'Lesotho',
                    ),
            ),
        'LT' =>
            array(
                'alpha2' => 'LT',
                'alpha3' => 'LTU',
                'numeric' => '440',
                'isd' => '370',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Литва',
                        'countryFull' => 'Литовская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Lithuania',
                        'countryFull' => 'Lithuania',
                    ),
            ),
        'LU' =>
            array(
                'alpha2' => 'LU',
                'alpha3' => 'LUX',
                'numeric' => '442',
                'isd' => '352',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Люксембург',
                        'countryFull' => 'Великое Герцогство Люксембург',
                    ),
                'en' =>
                    array(
                        'country' => 'Luxembourg',
                        'countryFull' => 'Luxembourg',
                    ),
            ),
        'LV' =>
            array(
                'alpha2' => 'LV',
                'alpha3' => 'LVA',
                'numeric' => '428',
                'isd' => '371',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Латвия',
                        'countryFull' => 'Латвийская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Latvia',
                        'countryFull' => 'Latvia',
                    ),
            ),
        'LY' =>
            array(
                'alpha2' => 'LY',
                'alpha3' => 'LBY',
                'numeric' => '434',
                'isd' => '218',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Ливийская Арабская Джамахирия',
                        'countryFull' => 'Социалистическая Народная Ливийская Арабская Джамахирия',
                    ),
                'en' =>
                    array(
                        'country' => 'Libyan Arab Jamahiriya',
                        'countryFull' => 'Libyan Arab Jamahiriya',
                    ),
            ),
        'MA' =>
            array(
                'alpha2' => 'MA',
                'alpha3' => 'MAR',
                'numeric' => '504',
                'isd' => '212',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Марокко',
                        'countryFull' => 'Королевство Марокко',
                    ),
                'en' =>
                    array(
                        'country' => 'Morocco',
                        'countryFull' => 'Morocco',
                    ),
            ),
        'MC' =>
            array(
                'alpha2' => 'MC',
                'alpha3' => 'MCO',
                'numeric' => '492',
                'isd' => '377',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Монако',
                        'countryFull' => 'Княжество Монако',
                    ),
                'en' =>
                    array(
                        'country' => 'Monaco',
                        'countryFull' => 'Monaco',
                    ),
            ),
        'MD' =>
            array(
                'alpha2' => 'MD',
                'alpha3' => 'MDA',
                'numeric' => '498',
                'isd' => '373',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Молдова',
                        'countryFull' => 'Республика Молдова',
                    ),
                'en' =>
                    array(
                        'country' => 'Moldova',
                        'countryFull' => 'Moldova',
                    ),
            ),
        'ME' =>
            array(
                'alpha2' => 'ME',
                'alpha3' => 'MNE',
                'numeric' => '499',
                'isd' => '382',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Черногория',
                        'countryFull' => 'Республика Черногория',
                    ),
                'en' =>
                    array(
                        'country' => 'Montenegro',
                        'countryFull' => 'Montenegro',
                    ),
            ),
        'MF' =>
            array(
                'alpha2' => 'MF',
                'alpha3' => 'MAF',
                'numeric' => '663',
                'isd' => '590',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Сен-Мартен',
                        'countryFull' => 'Сен-Мартен',
                    ),
                'en' =>
                    array(
                        'country' => 'Saint Martin',
                        'countryFull' => 'Saint Martin (French Part)',
                    ),
            ),
        'MG' =>
            array(
                'alpha2' => 'MG',
                'alpha3' => 'MDG',
                'numeric' => '450',
                'isd' => '261',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Мадагаскар',
                        'countryFull' => 'Республика Мадагаскар',
                    ),
                'en' =>
                    array(
                        'country' => 'Madagascar',
                        'countryFull' => 'Madagascar',
                    ),
            ),
        'MH' =>
            array(
                'alpha2' => 'MH',
                'alpha3' => 'MHL',
                'numeric' => '584',
                'isd' => '692',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Маршалловы острова',
                        'countryFull' => 'Республика Маршалловы острова',
                    ),
                'en' =>
                    array(
                        'country' => 'Marshall Islands',
                        'countryFull' => 'Marshall Islands',
                    ),
            ),
        'MK' =>
            array(
                'alpha2' => 'MK',
                'alpha3' => 'MKD',
                'numeric' => '807',
                'isd' => '389',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Македония',
                        'countryFull' => 'Республика Македония',
                    ),
                'en' =>
                    array(
                        'country' => 'Macedonia',
                        'countryFull' => 'The Former Yugoslav Republic Of Macedonia',
                    ),
            ),
        'ML' =>
            array(
                'alpha2' => 'ML',
                'alpha3' => 'MLI',
                'numeric' => '466',
                'isd' => '223',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Мали',
                        'countryFull' => 'Республика Мали',
                    ),
                'en' =>
                    array(
                        'country' => 'Mali',
                        'countryFull' => 'Mali',
                    ),
            ),
        'MM' =>
            array(
                'alpha2' => 'MM',
                'alpha3' => 'MMR',
                'numeric' => '104',
                'isd' => '95',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Мьянма',
                        'countryFull' => 'Союз Мьянма',
                    ),
                'en' =>
                    array(
                        'country' => 'Burma',
                        'countryFull' => 'Burma',
                    ),
            ),
        'MN' =>
            array(
                'alpha2' => 'MN',
                'alpha3' => 'MNG',
                'numeric' => '496',
                'isd' => '976',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Монголия',
                        'countryFull' => 'Монголия',
                    ),
                'en' =>
                    array(
                        'country' => 'Mongolia',
                        'countryFull' => 'Mongolia',
                    ),
            ),
        'MO' =>
            array(
                'alpha2' => 'MO',
                'alpha3' => 'MAC',
                'numeric' => '446',
                'isd' => '853',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Макао',
                        'countryFull' => 'Специальный административный регион Китая Макао',
                    ),
                'en' =>
                    array(
                        'country' => 'Macao',
                        'countryFull' => 'Macao',
                    ),
            ),
        'MP' =>
            array(
                'alpha2' => 'MP',
                'alpha3' => 'MNP',
                'numeric' => '580',
                'isd' => '1670',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Северные Марианские острова',
                        'countryFull' => 'Содружество Северных Марианских островов',
                    ),
                'en' =>
                    array(
                        'country' => 'Northern Mariana Islands',
                        'countryFull' => 'Northern Mariana Islands',
                    ),
            ),
        'MQ' =>
            array(
                'alpha2' => 'MQ',
                'alpha3' => 'MTQ',
                'numeric' => '474',
                'isd' => '596',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Мартиника',
                        'countryFull' => 'Мартиника',
                    ),
                'en' =>
                    array(
                        'country' => 'Martinique',
                        'countryFull' => 'Martinique',
                    ),
            ),
        'MR' =>
            array(
                'alpha2' => 'MR',
                'alpha3' => 'MRT',
                'numeric' => '478',
                'isd' => '222',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Мавритания',
                        'countryFull' => 'Исламская Республика Мавритания',
                    ),
                'en' =>
                    array(
                        'country' => 'Mauritania',
                        'countryFull' => 'Mauritania',
                    ),
            ),
        'MS' =>
            array(
                'alpha2' => 'MS',
                'alpha3' => 'MSR',
                'numeric' => '500',
                'isd' => '1664',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Монтсеррат',
                        'countryFull' => 'Монтсеррат',
                    ),
                'en' =>
                    array(
                        'country' => 'Montserrat',
                        'countryFull' => 'Montserrat',
                    ),
            ),
        'MT' =>
            array(
                'alpha2' => 'MT',
                'alpha3' => 'MLT',
                'numeric' => '470',
                'isd' => '356',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Мальта',
                        'countryFull' => 'Республика Мальта',
                    ),
                'en' =>
                    array(
                        'country' => 'Malta',
                        'countryFull' => 'Malta',
                    ),
            ),
        'MU' =>
            array(
                'alpha2' => 'MU',
                'alpha3' => 'MUS',
                'numeric' => '480',
                'isd' => '230',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Маврикий',
                        'countryFull' => 'Республика Маврикий',
                    ),
                'en' =>
                    array(
                        'country' => 'Mauritius',
                        'countryFull' => 'Mauritius',
                    ),
            ),
        'MV' =>
            array(
                'alpha2' => 'MV',
                'alpha3' => 'MDV',
                'numeric' => '462',
                'isd' => '960',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Мальдивы',
                        'countryFull' => 'Мальдивская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Maldives',
                        'countryFull' => 'Maldives',
                    ),
            ),
        'MW' =>
            array(
                'alpha2' => 'MW',
                'alpha3' => 'MWI',
                'numeric' => '454',
                'isd' => '265',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Малави',
                        'countryFull' => 'Республика Малави',
                    ),
                'en' =>
                    array(
                        'country' => 'Malawi',
                        'countryFull' => 'Malawi',
                    ),
            ),
        'MX' =>
            array(
                'alpha2' => 'MX',
                'alpha3' => 'MEX',
                'numeric' => '484',
                'isd' => '52',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Мексика',
                        'countryFull' => 'Мексиканские Соединенные Штаты',
                    ),
                'en' =>
                    array(
                        'country' => 'Mexico',
                        'countryFull' => 'Mexico',
                    ),
            ),
        'MY' =>
            array(
                'alpha2' => 'MY',
                'alpha3' => 'MYS',
                'numeric' => '458',
                'isd' => '60',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Малайзия',
                        'countryFull' => 'Малайзия',
                    ),
                'en' =>
                    array(
                        'country' => 'Malaysia',
                        'countryFull' => 'Malaysia',
                    ),
            ),
        'MZ' =>
            array(
                'alpha2' => 'MZ',
                'alpha3' => 'MOZ',
                'numeric' => '508',
                'isd' => '258',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Мозамбик',
                        'countryFull' => 'Республика Мозамбик',
                    ),
                'en' =>
                    array(
                        'country' => 'Mozambique',
                        'countryFull' => 'Mozambique',
                    ),
            ),
        'NA' =>
            array(
                'alpha2' => 'NA',
                'alpha3' => 'NAM',
                'numeric' => '516',
                'isd' => '264',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Намибия',
                        'countryFull' => 'Республика Намибия',
                    ),
                'en' =>
                    array(
                        'country' => 'Namibia',
                        'countryFull' => 'Namibia',
                    ),
            ),
        'NC' =>
            array(
                'alpha2' => 'NC',
                'alpha3' => 'NCL',
                'numeric' => '540',
                'isd' => '687',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Новая Каледония',
                        'countryFull' => 'Новая Каледония',
                    ),
                'en' =>
                    array(
                        'country' => 'New Caledonia',
                        'countryFull' => 'New Caledonia',
                    ),
            ),
        'NE' =>
            array(
                'alpha2' => 'NE',
                'alpha3' => 'NER',
                'numeric' => '562',
                'isd' => '227',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Нигер',
                        'countryFull' => 'Республика Нигер',
                    ),
                'en' =>
                    array(
                        'country' => 'Niger',
                        'countryFull' => 'Niger',
                    ),
            ),
        'NF' =>
            array(
                'alpha2' => 'NF',
                'alpha3' => 'NFK',
                'numeric' => '574',
                'isd' => '672',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Остров Норфолк',
                        'countryFull' => 'Остров Норфолк',
                    ),
                'en' =>
                    array(
                        'country' => 'Norfolk Island',
                        'countryFull' => 'Norfolk Island',
                    ),
            ),
        'NG' =>
            array(
                'alpha2' => 'NG',
                'alpha3' => 'NGA',
                'numeric' => '566',
                'isd' => '234',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Нигерия',
                        'countryFull' => 'Федеративная Республика Нигерия',
                    ),
                'en' =>
                    array(
                        'country' => 'Nigeria',
                        'countryFull' => 'Nigeria',
                    ),
            ),
        'NI' =>
            array(
                'alpha2' => 'NI',
                'alpha3' => 'NIC',
                'numeric' => '558',
                'isd' => '505',
                'continentCode' => 'SA',
                'ru' =>
                    array(
                        'country' => 'Никарагуа',
                        'countryFull' => 'Республика Никарагуа',
                    ),
                'en' =>
                    array(
                        'country' => 'Nicaragua',
                        'countryFull' => 'Nicaragua',
                    ),
            ),
        'NL' =>
            array(
                'alpha2' => 'NL',
                'alpha3' => 'NLD',
                'numeric' => '528',
                'isd' => '31',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Нидерланды',
                        'countryFull' => 'Королевство Нидерландов',
                    ),
                'en' =>
                    array(
                        'country' => 'Netherlands',
                        'countryFull' => 'Netherlands',
                    ),
            ),
        'NO' =>
            array(
                'alpha2' => 'NO',
                'alpha3' => 'NOR',
                'numeric' => '578',
                'isd' => '47',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Норвегия',
                        'countryFull' => 'Королевство Норвегия',
                    ),
                'en' =>
                    array(
                        'country' => 'Norway',
                        'countryFull' => 'Norway',
                    ),
            ),
        'NP' =>
            array(
                'alpha2' => 'NP',
                'alpha3' => 'NPL',
                'numeric' => '524',
                'isd' => '977',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Непал',
                        'countryFull' => 'Королевство Непал',
                    ),
                'en' =>
                    array(
                        'country' => 'Nepal',
                        'countryFull' => 'Nepal',
                    ),
            ),
        'NR' =>
            array(
                'alpha2' => 'NR',
                'alpha3' => 'NRU',
                'numeric' => '520',
                'isd' => '674',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Науру',
                        'countryFull' => 'Республика Науру',
                    ),
                'en' =>
                    array(
                        'country' => 'Nauru',
                        'countryFull' => 'Nauru',
                    ),
            ),
        'NU' =>
            array(
                'alpha2' => 'NU',
                'alpha3' => 'NIU',
                'numeric' => '570',
                'isd' => '683',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Ниуэ',
                        'countryFull' => 'Республика Ниуэ',
                    ),
                'en' =>
                    array(
                        'country' => 'Niue',
                        'countryFull' => 'Niue',
                    ),
            ),
        'NZ' =>
            array(
                'alpha2' => 'NZ',
                'alpha3' => 'NZL',
                'numeric' => '554',
                'isd' => '64',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Новая Зеландия',
                        'countryFull' => 'Новая Зеландия',
                    ),
                'en' =>
                    array(
                        'country' => 'New Zealand',
                        'countryFull' => 'New Zealand',
                    ),
            ),
        'OM' =>
            array(
                'alpha2' => 'OM',
                'alpha3' => 'OMN',
                'numeric' => '512',
                'isd' => '968',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Оман',
                        'countryFull' => 'Султанат Оман',
                    ),
                'en' =>
                    array(
                        'country' => 'Oman',
                        'countryFull' => 'Oman',
                    ),
            ),
        'OS' =>
            array(
                'alpha2' => 'OS',
                'alpha3' => 'OST',
                'numeric' => '896',
                'isd' => Null,
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Южная Осетия',
                        'countryFull' => 'Республика Южная Осетия',
                    ),
                'en' =>
                    array(
                        'country' => 'South Ossetia',
                        'countryFull' => 'South Ossetia',
                    ),
            ),
        'PA' =>
            array(
                'alpha2' => 'PA',
                'alpha3' => 'PAN',
                'numeric' => '591',
                'isd' => '507',
                'continentCode' => 'SA',
                'ru' =>
                    array(
                        'country' => 'Панама',
                        'countryFull' => 'Республика Панама',
                    ),
                'en' =>
                    array(
                        'country' => 'Panama',
                        'countryFull' => 'Panama',
                    ),
            ),
        'PE' =>
            array(
                'alpha2' => 'PE',
                'alpha3' => 'PER',
                'numeric' => '604',
                'isd' => '51',
                'continentCode' => 'SA',
                'ru' =>
                    array(
                        'country' => 'Перу',
                        'countryFull' => 'Республика Перу',
                    ),
                'en' =>
                    array(
                        'country' => 'Peru',
                        'countryFull' => 'Peru',
                    ),
            ),
        'PF' =>
            array(
                'alpha2' => 'PF',
                'alpha3' => 'PYF',
                'numeric' => '258',
                'isd' => '689',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Французская Полинезия',
                        'countryFull' => 'Французская Полинезия',
                    ),
                'en' =>
                    array(
                        'country' => 'French Polynesia',
                        'countryFull' => 'French Polynesia',
                    ),
            ),
        'PG' =>
            array(
                'alpha2' => 'PG',
                'alpha3' => 'PNG',
                'numeric' => '598',
                'isd' => '675',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Папуа-Новая Гвинея',
                        'countryFull' => 'Папуа-Новая Гвинея',
                    ),
                'en' =>
                    array(
                        'country' => 'Papua New Guinea',
                        'countryFull' => 'Papua New Guinea',
                    ),
            ),
        'PH' =>
            array(
                'alpha2' => 'PH',
                'alpha3' => 'PHL',
                'numeric' => '608',
                'isd' => '63',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Филиппины',
                        'countryFull' => 'Республика Филиппины',
                    ),
                'en' =>
                    array(
                        'country' => 'Philippines',
                        'countryFull' => 'Philippines',
                    ),
            ),
        'PK' =>
            array(
                'alpha2' => 'PK',
                'alpha3' => 'PAK',
                'numeric' => '586',
                'isd' => '92',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Пакистан',
                        'countryFull' => 'Исламская Республика Пакистан',
                    ),
                'en' =>
                    array(
                        'country' => 'Pakistan',
                        'countryFull' => 'Pakistan',
                    ),
            ),
        'PL' =>
            array(
                'alpha2' => 'PL',
                'alpha3' => 'POL',
                'numeric' => '616',
                'isd' => '48',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Польша',
                        'countryFull' => 'Республика Польша',
                    ),
                'en' =>
                    array(
                        'country' => 'Poland',
                        'countryFull' => 'Poland',
                    ),
            ),
        'PM' =>
            array(
                'alpha2' => 'PM',
                'alpha3' => 'SPM',
                'numeric' => '666',
                'isd' => '508',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Сент-Пьер и Микелон',
                        'countryFull' => 'Сент-Пьер и Микелон',
                    ),
                'en' =>
                    array(
                        'country' => 'Saint Pierre and Miquelon',
                        'countryFull' => 'Saint Pierre and Miquelon',
                    ),
            ),
        'PN' =>
            array(
                'alpha2' => 'PN',
                'alpha3' => 'PCN',
                'numeric' => '612',
                'isd' => '870',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Питкерн',
                        'countryFull' => 'Питкерн',
                    ),
                'en' =>
                    array(
                        'country' => 'Pitcairn',
                        'countryFull' => 'Pitcairn',
                    ),
            ),
        'PR' =>
            array(
                'alpha2' => 'PR',
                'alpha3' => 'PRI',
                'numeric' => '630',
                'isd' => '1',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Пуэрто-Рико',
                        'countryFull' => 'Пуэрто-Рико',
                    ),
                'en' =>
                    array(
                        'country' => 'Puerto Rico',
                        'countryFull' => 'Puerto Rico',
                    ),
            ),
        'PS' =>
            array(
                'alpha2' => 'PS',
                'alpha3' => 'PSE',
                'numeric' => '275',
                'isd' => '970',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Палестинская территория',
                        'countryFull' => 'Оккупированная Палестинская территория',
                    ),
                'en' =>
                    array(
                        'country' => 'Palestinian Territory',
                        'countryFull' => 'Occupied Palestinian Territory',
                    ),
            ),
        'PT' =>
            array(
                'alpha2' => 'PT',
                'alpha3' => 'PRT',
                'numeric' => '620',
                'isd' => '351',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Португалия',
                        'countryFull' => 'Португальская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Portugal',
                        'countryFull' => 'Portugal',
                    ),
            ),
        'PW' =>
            array(
                'alpha2' => 'PW',
                'alpha3' => 'PLW',
                'numeric' => '585',
                'isd' => '680',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Палау',
                        'countryFull' => 'Республика Палау',
                    ),
                'en' =>
                    array(
                        'country' => 'Palau',
                        'countryFull' => 'Palau',
                    ),
            ),
        'PY' =>
            array(
                'alpha2' => 'PY',
                'alpha3' => 'PRY',
                'numeric' => '600',
                'isd' => '595',
                'continentCode' => 'SA',
                'ru' =>
                    array(
                        'country' => 'Парагвай',
                        'countryFull' => 'Республика Парагвай',
                    ),
                'en' =>
                    array(
                        'country' => 'Paraguay',
                        'countryFull' => 'Paraguay',
                    ),
            ),
        'QA' =>
            array(
                'alpha2' => 'QA',
                'alpha3' => 'QAT',
                'numeric' => '634',
                'isd' => '974',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Катар',
                        'countryFull' => 'Государство Катар',
                    ),
                'en' =>
                    array(
                        'country' => 'Qatar',
                        'countryFull' => 'Qatar',
                    ),
            ),
        'RE' =>
            array(
                'alpha2' => 'RE',
                'alpha3' => 'REU',
                'numeric' => '638',
                'isd' => '262',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Реюньон',
                        'countryFull' => 'Реюньон',
                    ),
                'en' =>
                    array(
                        'country' => 'Reunion',
                        'countryFull' => 'Reunion',
                    ),
            ),
        'RO' =>
            array(
                'alpha2' => 'RO',
                'alpha3' => 'ROU',
                'numeric' => '642',
                'isd' => '40',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Румыния',
                        'countryFull' => 'Румыния',
                    ),
                'en' =>
                    array(
                        'country' => 'Romania',
                        'countryFull' => 'Romania',
                    ),
            ),
        'RS' =>
            array(
                'alpha2' => 'RS',
                'alpha3' => 'SRB',
                'numeric' => '688',
                'isd' => '381',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Сербия',
                        'countryFull' => 'Республика Сербия',
                    ),
                'en' =>
                    array(
                        'country' => 'Serbia',
                        'countryFull' => 'Serbia',
                    ),
            ),
        'RU' =>
            array(
                'alpha2' => 'RU',
                'alpha3' => 'RUS',
                'numeric' => '643',
                'isd' => '7',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Россия',
                        'countryFull' => 'Российская Федерация',
                    ),
                'en' =>
                    array(
                        'country' => 'Russia',
                        'countryFull' => 'Russian Federation',
                    ),
            ),
        'RW' =>
            array(
                'alpha2' => 'RW',
                'alpha3' => 'RWA',
                'numeric' => '646',
                'isd' => '250',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Руанда',
                        'countryFull' => 'Руандийская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Rwanda',
                        'countryFull' => 'Rwanda',
                    ),
            ),
        'SA' =>
            array(
                'alpha2' => 'SA',
                'alpha3' => 'SAU',
                'numeric' => '682',
                'isd' => '966',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Саудовская Аравия',
                        'countryFull' => 'Королевство Саудовская Аравия',
                    ),
                'en' =>
                    array(
                        'country' => 'Saudi Arabia',
                        'countryFull' => 'Saudi Arabia',
                    ),
            ),
        'SB' =>
            array(
                'alpha2' => 'SB',
                'alpha3' => 'SLB',
                'numeric' => '090',
                'isd' => '677',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Соломоновы острова',
                        'countryFull' => 'Соломоновы острова',
                    ),
                'en' =>
                    array(
                        'country' => 'Solomon Islands',
                        'countryFull' => 'Solomon Islands',
                    ),
            ),
        'SC' =>
            array(
                'alpha2' => 'SC',
                'alpha3' => 'SYC',
                'numeric' => '690',
                'isd' => '248',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Сейшелы',
                        'countryFull' => 'Республика Сейшелы',
                    ),
                'en' =>
                    array(
                        'country' => 'Seychelles',
                        'countryFull' => 'Seychelles',
                    ),
            ),
        'SD' =>
            array(
                'alpha2' => 'SD',
                'alpha3' => 'SDN',
                'numeric' => '736',
                'isd' => '249',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Судан',
                        'countryFull' => 'Республика Судан',
                    ),
                'en' =>
                    array(
                        'country' => 'Sudan',
                        'countryFull' => 'Sudan',
                    ),
            ),
        'SE' =>
            array(
                'alpha2' => 'SE',
                'alpha3' => 'SWE',
                'numeric' => '752',
                'isd' => '46',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Швеция',
                        'countryFull' => 'Королевство Швеция',
                    ),
                'en' =>
                    array(
                        'country' => 'Sweden',
                        'countryFull' => 'Sweden',
                    ),
            ),
        'SG' =>
            array(
                'alpha2' => 'SG',
                'alpha3' => 'SGP',
                'numeric' => '702',
                'isd' => '65',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Сингапур',
                        'countryFull' => 'Республика Сингапур',
                    ),
                'en' =>
                    array(
                        'country' => 'Singapore',
                        'countryFull' => 'Singapore',
                    ),
            ),
        'SH' =>
            array(
                'alpha2' => 'SH',
                'alpha3' => 'SHN',
                'numeric' => '654',
                'isd' => '290',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Святая Елена, Остров вознесения, Тристан-да-Кунья',
                        'countryFull' => 'Святая Елена, Остров вознесения, Тристан-да-Кунья',
                    ),
                'en' =>
                    array(
                        'country' => 'Saint Helena, Ascension And Tristan Da Cunha',
                        'countryFull' => 'Saint Helena, Ascension And Tristan Da Cunha',
                    ),
            ),
        'SI' =>
            array(
                'alpha2' => 'SI',
                'alpha3' => 'SVN',
                'numeric' => '705',
                'isd' => '386',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Словения',
                        'countryFull' => 'Республика Словения',
                    ),
                'en' =>
                    array(
                        'country' => 'Slovenia',
                        'countryFull' => 'Slovenia',
                    ),
            ),
        'SJ' =>
            array(
                'alpha2' => 'SJ',
                'alpha3' => 'SJM',
                'numeric' => '744',
                'isd' => '47',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Шпицберген и Ян Майен',
                        'countryFull' => 'Шпицберген и Ян Майен',
                    ),
                'en' =>
                    array(
                        'country' => 'Svalbard and Jan Mayen',
                        'countryFull' => 'Svalbard and Jan Mayen',
                    ),
            ),
        'SK' =>
            array(
                'alpha2' => 'SK',
                'alpha3' => 'SVK',
                'numeric' => '703',
                'isd' => '421',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Словакия',
                        'countryFull' => 'Словацкая Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Slovakia',
                        'countryFull' => 'Slovakia',
                    ),
            ),
        'SL' =>
            array(
                'alpha2' => 'SL',
                'alpha3' => 'SLE',
                'numeric' => '694',
                'isd' => '232',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Сьерра-Леоне',
                        'countryFull' => 'Республика Сьерра-Леоне',
                    ),
                'en' =>
                    array(
                        'country' => 'Sierra Leone',
                        'countryFull' => 'Sierra Leone',
                    ),
            ),
        'SM' =>
            array(
                'alpha2' => 'SM',
                'alpha3' => 'SMR',
                'numeric' => '674',
                'isd' => '378',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Сан-Марино',
                        'countryFull' => 'Республика Сан-Марино',
                    ),
                'en' =>
                    array(
                        'country' => 'San Marino',
                        'countryFull' => 'San Marino',
                    ),
            ),
        'SN' =>
            array(
                'alpha2' => 'SN',
                'alpha3' => 'SEN',
                'numeric' => '686',
                'isd' => '221',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Сенегал',
                        'countryFull' => 'Республика Сенегал',
                    ),
                'en' =>
                    array(
                        'country' => 'Senegal',
                        'countryFull' => 'Senegal',
                    ),
            ),
        'SO' =>
            array(
                'alpha2' => 'SO',
                'alpha3' => 'SOM',
                'numeric' => '706',
                'isd' => '252',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Сомали',
                        'countryFull' => 'Сомалийская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Somalia',
                        'countryFull' => 'Somalia',
                    ),
            ),
        'SR' =>
            array(
                'alpha2' => 'SR',
                'alpha3' => 'SUR',
                'numeric' => '740',
                'isd' => '597',
                'continentCode' => 'SA',
                'ru' =>
                    array(
                        'country' => 'Суринам',
                        'countryFull' => 'Республика Суринам',
                    ),
                'en' =>
                    array(
                        'country' => 'Suriname',
                        'countryFull' => 'Suriname',
                    ),
            ),
        'SS' =>
            array(
                'alpha2' => 'SS',
                'alpha3' => 'SSD',
                'numeric' => '728',
                'isd' => '211',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Южный Судан',
                        'countryFull' => 'Южный Судан',
                    ),
                'en' =>
                    array(
                        'country' => 'South Sudan',
                        'countryFull' => 'South Sudan',
                    ),
            ),
        'ST' =>
            array(
                'alpha2' => 'ST',
                'alpha3' => 'STP',
                'numeric' => '678',
                'isd' => '239',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Сан-Томе и Принсипи',
                        'countryFull' => 'Демократическая Республика Сан-Томе и Принсипи',
                    ),
                'en' =>
                    array(
                        'country' => 'Sao Tome and Principe',
                        'countryFull' => 'Sao Tome and Principe',
                    ),
            ),
        'SV' =>
            array(
                'alpha2' => 'SV',
                'alpha3' => 'SLV',
                'numeric' => '222',
                'isd' => '503',
                'continentCode' => 'SA',
                'ru' =>
                    array(
                        'country' => 'Эль-Сальвадор',
                        'countryFull' => 'Республика Эль-Сальвадор',
                    ),
                'en' =>
                    array(
                        'country' => 'El Salvador',
                        'countryFull' => 'El Salvador',
                    ),
            ),
        'SX' =>
            array(
                'alpha2' => 'SX',
                'alpha3' => 'SXM',
                'numeric' => '534',
                'isd' => '1721',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Синт-Мартен',
                        'countryFull' => 'Синт-Мартен',
                    ),
                'en' =>
                    array(
                        'country' => 'Sint Maarten',
                        'countryFull' => 'Sint Maarten',
                    ),
            ),
        'SY' =>
            array(
                'alpha2' => 'SY',
                'alpha3' => 'SYR',
                'numeric' => '760',
                'isd' => '963',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Сирия',
                        'countryFull' => 'Сирийская Арабская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Syria',
                        'countryFull' => 'Syrian Arab Republic',
                    ),
            ),
        'SZ' =>
            array(
                'alpha2' => 'SZ',
                'alpha3' => 'SWZ',
                'numeric' => '748',
                'isd' => '268',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Свазиленд',
                        'countryFull' => 'Королевство Свазиленд',
                    ),
                'en' =>
                    array(
                        'country' => 'Swaziland',
                        'countryFull' => 'Swaziland',
                    ),
            ),
        'TC' =>
            array(
                'alpha2' => 'TC',
                'alpha3' => 'TCA',
                'numeric' => '796',
                'isd' => '1649',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Острова Теркс и Кайкос',
                        'countryFull' => 'Острова Теркс и Кайкос',
                    ),
                'en' =>
                    array(
                        'country' => 'Turks and Caicos Islands',
                        'countryFull' => 'Turks and Caicos Islands',
                    ),
            ),
        'TD' =>
            array(
                'alpha2' => 'TD',
                'alpha3' => 'TCD',
                'numeric' => '148',
                'isd' => '235',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Чад',
                        'countryFull' => 'Республика Чад',
                    ),
                'en' =>
                    array(
                        'country' => 'Chad',
                        'countryFull' => 'Chad',
                    ),
            ),
        'TF' =>
            array(
                'alpha2' => 'TF',
                'alpha3' => 'ATF',
                'numeric' => '260',
                'isd' => '262',
                'continentCode' => 'AN',
                'ru' =>
                    array(
                        'country' => 'Французские Южные территории',
                        'countryFull' => 'Французские Южные территории',
                    ),
                'en' =>
                    array(
                        'country' => 'French Southern Territories',
                        'countryFull' => 'French Southern Territories',
                    ),
            ),
        'TG' =>
            array(
                'alpha2' => 'TG',
                'alpha3' => 'TGO',
                'numeric' => '768',
                'isd' => '228',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Того',
                        'countryFull' => 'Тоголезская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Togo',
                        'countryFull' => 'Togo',
                    ),
            ),
        'TH' =>
            array(
                'alpha2' => 'TH',
                'alpha3' => 'THA',
                'numeric' => '764',
                'isd' => '66',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Таиланд',
                        'countryFull' => 'Королевство Таиланд',
                    ),
                'en' =>
                    array(
                        'country' => 'Thailand',
                        'countryFull' => 'Thailand',
                    ),
            ),
        'TJ' =>
            array(
                'alpha2' => 'TJ',
                'alpha3' => 'TJK',
                'numeric' => '762',
                'isd' => '992',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Таджикистан',
                        'countryFull' => 'Республика Таджикистан',
                    ),
                'en' =>
                    array(
                        'country' => 'Tajikistan',
                        'countryFull' => 'Tajikistan',
                    ),
            ),
        'TK' =>
            array(
                'alpha2' => 'TK',
                'alpha3' => 'TKL',
                'numeric' => '772',
                'isd' => '690',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Токелау',
                        'countryFull' => 'Токелау',
                    ),
                'en' =>
                    array(
                        'country' => 'Tokelau',
                        'countryFull' => 'Tokelau',
                    ),
            ),
        'TL' =>
            array(
                'alpha2' => 'TL',
                'alpha3' => 'TLS',
                'numeric' => '626',
                'isd' => '670',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Тимор-Лесте',
                        'countryFull' => 'Демократическая Республика Тимор-Лесте',
                    ),
                'en' =>
                    array(
                        'country' => 'Timor-Leste',
                        'countryFull' => 'Timor-Leste',
                    ),
            ),
        'TM' =>
            array(
                'alpha2' => 'TM',
                'alpha3' => 'TKM',
                'numeric' => '795',
                'isd' => '993',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Туркмения',
                        'countryFull' => 'Туркменистан',
                    ),
                'en' =>
                    array(
                        'country' => 'Turkmenistan',
                        'countryFull' => 'Turkmenistan',
                    ),
            ),
        'TN' =>
            array(
                'alpha2' => 'TN',
                'alpha3' => 'TUN',
                'numeric' => '788',
                'isd' => '216',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Тунис',
                        'countryFull' => 'Тунисская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Tunisia',
                        'countryFull' => 'Tunisia',
                    ),
            ),
        'TO' =>
            array(
                'alpha2' => 'TO',
                'alpha3' => 'TON',
                'numeric' => '776',
                'isd' => '676',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Тонга',
                        'countryFull' => 'Королевство Тонга',
                    ),
                'en' =>
                    array(
                        'country' => 'Tonga',
                        'countryFull' => 'Tonga',
                    ),
            ),
        'TR' =>
            array(
                'alpha2' => 'TR',
                'alpha3' => 'TUR',
                'numeric' => '792',
                'isd' => '90',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Турция',
                        'countryFull' => 'Турецкая Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Turkey',
                        'countryFull' => 'Turkey',
                    ),
            ),
        'TT' =>
            array(
                'alpha2' => 'TT',
                'alpha3' => 'TTO',
                'numeric' => '780',
                'isd' => '1868',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Тринидад и Тобаго',
                        'countryFull' => 'Республика Тринидад и Тобаго',
                    ),
                'en' =>
                    array(
                        'country' => 'Trinidad and Tobago',
                        'countryFull' => 'Trinidad and Tobago',
                    ),
            ),
        'TV' =>
            array(
                'alpha2' => 'TV',
                'alpha3' => 'TUV',
                'numeric' => '798',
                'isd' => '688',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Тувалу',
                        'countryFull' => 'Тувалу',
                    ),
                'en' =>
                    array(
                        'country' => 'Tuvalu',
                        'countryFull' => 'Tuvalu',
                    ),
            ),
        'TW' =>
            array(
                'alpha2' => 'TW',
                'alpha3' => 'TWN',
                'numeric' => '158',
                'isd' => '886',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Тайвань',
                        'countryFull' => 'Китайская Респу́блика',
                    ),
                'en' =>
                    array(
                        'country' => 'Taiwan',
                        'countryFull' => 'Republic of China',
                    ),
            ),
        'TZ' =>
            array(
                'alpha2' => 'TZ',
                'alpha3' => 'TZA',
                'numeric' => '834',
                'isd' => '255',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Танзания',
                        'countryFull' => 'Объединенная Республика Танзания',
                    ),
                'en' =>
                    array(
                        'country' => 'Tanzania',
                        'countryFull' => 'United Republic Of Tanzania',
                    ),
            ),
        'UA' =>
            array(
                'alpha2' => 'UA',
                'alpha3' => 'UKR',
                'numeric' => '804',
                'isd' => '380',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Украина',
                        'countryFull' => 'Украина',
                    ),
                'en' =>
                    array(
                        'country' => 'Ukraine',
                        'countryFull' => 'Ukraine',
                    ),
            ),
        'UG' =>
            array(
                'alpha2' => 'UG',
                'alpha3' => 'UGA',
                'numeric' => '800',
                'isd' => '256',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Уганда',
                        'countryFull' => 'Республика Уганда',
                    ),
                'en' =>
                    array(
                        'country' => 'Uganda',
                        'countryFull' => 'Uganda',
                    ),
            ),
        'UM' =>
            array(
                'alpha2' => 'UM',
                'alpha3' => 'UMI',
                'numeric' => '581',
                'isd' => '1',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Малые Тихоокеанские отдаленные острова Соединенных Штатов',
                        'countryFull' => 'Малые Тихоокеанские отдаленные острова Соединенных Штатов',
                    ),
                'en' =>
                    array(
                        'country' => 'United States Minor Outlying Islands',
                        'countryFull' => 'United States Minor Outlying Islands',
                    ),
            ),
        'US' =>
            array(
                'alpha2' => 'US',
                'alpha3' => 'USA',
                'numeric' => '840',
                'isd' => '1',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'США',
                        'countryFull' => 'Соединенные Штаты Америки',
                    ),
                'en' =>
                    array(
                        'country' => 'USA',
                        'countryFull' => 'United States of America',
                    ),
            ),
        'UY' =>
            array(
                'alpha2' => 'UY',
                'alpha3' => 'URY',
                'numeric' => '858',
                'isd' => '598',
                'continentCode' => 'SA',
                'ru' =>
                    array(
                        'country' => 'Уругвай',
                        'countryFull' => 'Восточная Республика Уругвай',
                    ),
                'en' =>
                    array(
                        'country' => 'Uruguay',
                        'countryFull' => 'Uruguay',
                    ),
            ),
        'UZ' =>
            array(
                'alpha2' => 'UZ',
                'alpha3' => 'UZB',
                'numeric' => '860',
                'isd' => '998',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Узбекистан',
                        'countryFull' => 'Республика Узбекистан',
                    ),
                'en' =>
                    array(
                        'country' => 'Uzbekistan',
                        'countryFull' => 'Uzbekistan',
                    ),
            ),
        'VA' =>
            array(
                'alpha2' => 'VA',
                'alpha3' => 'VAT',
                'numeric' => '336',
                'isd' => '379',
                'continentCode' => 'EU',
                'ru' =>
                    array(
                        'country' => 'Ватикан',
                        'countryFull' => 'Государство-город Ватикан',
                    ),
                'en' =>
                    array(
                        'country' => 'Vatican City',
                        'countryFull' => 'Vatican City State',
                    ),
            ),
        'VC' =>
            array(
                'alpha2' => 'VC',
                'alpha3' => 'VCT',
                'numeric' => '670',
                'isd' => '1784',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Сент-Винсент и Гренадины',
                        'countryFull' => 'Сент-Винсент и Гренадины',
                    ),
                'en' =>
                    array(
                        'country' => 'Saint Vincent and the Grenadines',
                        'countryFull' => 'Saint Vincent and the Grenadines',
                    ),
            ),
        'VE' =>
            array(
                'alpha2' => 'VE',
                'alpha3' => 'VEN',
                'numeric' => '862',
                'isd' => '58',
                'continentCode' => 'SA',
                'ru' =>
                    array(
                        'country' => 'Венесуэла',
                        'countryFull' => 'Боливарийская Республика Венесуэла',
                    ),
                'en' =>
                    array(
                        'country' => 'Venezuela',
                        'countryFull' => 'Venezuela',
                    ),
            ),
        'VG' =>
            array(
                'alpha2' => 'VG',
                'alpha3' => 'VGB',
                'numeric' => '092',
                'isd' => '1284',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Виргинские острова, Британские',
                        'countryFull' => 'Британские Виргинские острова',
                    ),
                'en' =>
                    array(
                        'country' => 'Virgin Islands, British',
                        'countryFull' => 'Virgin Islands, British',
                    ),
            ),
        'VI' =>
            array(
                'alpha2' => 'VI',
                'alpha3' => 'VIR',
                'numeric' => '850',
                'isd' => '1430',
                'continentCode' => 'NA',
                'ru' =>
                    array(
                        'country' => 'Виргинские острова, США',
                        'countryFull' => 'Виргинские острова Соединенных Штатов',
                    ),
                'en' =>
                    array(
                        'country' => 'Virgin Islands, U.S.',
                        'countryFull' => 'Virgin Islands, U.S.',
                    ),
            ),
        'VN' =>
            array(
                'alpha2' => 'VN',
                'alpha3' => 'VNM',
                'numeric' => '704',
                'isd' => '84',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Вьетнам',
                        'countryFull' => 'Социалистическая Республика Вьетнам',
                    ),
                'en' =>
                    array(
                        'country' => 'Vietnam',
                        'countryFull' => 'Vietnam',
                    ),
            ),
        'VU' =>
            array(
                'alpha2' => 'VU',
                'alpha3' => 'VUT',
                'numeric' => '548',
                'isd' => '678',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Вануату',
                        'countryFull' => 'Республика Вануату',
                    ),
                'en' =>
                    array(
                        'country' => 'Vanuatu',
                        'countryFull' => 'Vanuatu',
                    ),
            ),
        'WF' =>
            array(
                'alpha2' => 'WF',
                'alpha3' => 'WLF',
                'numeric' => '876',
                'isd' => '681',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Уоллис и Футуна',
                        'countryFull' => 'Уоллис и Футуна',
                    ),
                'en' =>
                    array(
                        'country' => 'Wallis and Futuna',
                        'countryFull' => 'Wallis and Futuna',
                    ),
            ),
        'WS' =>
            array(
                'alpha2' => 'WS',
                'alpha3' => 'WSM',
                'numeric' => '882',
                'isd' => '685',
                'continentCode' => 'OC',
                'ru' =>
                    array(
                        'country' => 'Самоа',
                        'countryFull' => 'Независимое Государство Самоа',
                    ),
                'en' =>
                    array(
                        'country' => 'Samoa',
                        'countryFull' => 'Samoa',
                    ),
            ),
        'YE' =>
            array(
                'alpha2' => 'YE',
                'alpha3' => 'YEM',
                'numeric' => '887',
                'isd' => '967',
                'continentCode' => 'AS',
                'ru' =>
                    array(
                        'country' => 'Йемен',
                        'countryFull' => 'Йеменская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'Yemen',
                        'countryFull' => 'Yemen',
                    ),
            ),
        'YT' =>
            array(
                'alpha2' => 'YT',
                'alpha3' => 'MYT',
                'numeric' => '175',
                'isd' => '262',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Майотта',
                        'countryFull' => 'Майотта',
                    ),
                'en' =>
                    array(
                        'country' => 'Mayotte',
                        'countryFull' => 'Mayotte',
                    ),
            ),
        'ZA' =>
            array(
                'alpha2' => 'ZA',
                'alpha3' => 'ZAF',
                'numeric' => '710',
                'isd' => '27',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'ЮАР',
                        'countryFull' => 'Южно-Африканская Республика',
                    ),
                'en' =>
                    array(
                        'country' => 'South Africa',
                        'countryFull' => 'Republic of South Africa',
                    ),
            ),
        'ZM' =>
            array(
                'alpha2' => 'ZM',
                'alpha3' => 'ZMB',
                'numeric' => '894',
                'isd' => '260',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Замбия',
                        'countryFull' => 'Республика Замбия',
                    ),
                'en' =>
                    array(
                        'country' => 'Zambia',
                        'countryFull' => 'Zambia',
                    ),
            ),
        'ZW' =>
            array(
                'alpha2' => 'ZW',
                'alpha3' => 'ZWE',
                'numeric' => '716',
                'isd' => '263',
                'continentCode' => 'AF',
                'ru' =>
                    array(
                        'country' => 'Зимбабве',
                        'countryFull' => 'Республика Зимбабве',
                    ),
                'en' =>
                    array(
                        'country' => 'Zimbabwe',
                        'countryFull' => 'Zimbabwe',
                    ),
            ),
    );

    /**
     * @var array
     *
     * Language code => [
     *     ISO-3166-1 alpha-2 => [
     *         'alpha2'        => (string),
     *         'alpha3'        => (string),
     *         'numeric'       => (numeric),
     *         'isd'           => (numeric),
     *         'continentCode' => (string),
     *         'continent'     => (string),
     *         'country'       => (string),
     *         'countryFull'   => (string)
     *     ],
     *     ...
     * ],
     * ...
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
            'code' => 'SA',
            'ru' => array('continent' => 'Южная Америка'),
            'en' => array('continent' => 'South America'),
        ),
    );

    /**
     * @var array
     */
    public static $emojiMapping = [
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
    ];

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

        self::$_continentsByLanguages = $continentsByLanguage;

        return self::$_continentsByLanguages[$language];
    }

    /**
     * @param string $language
     * @return array
     */
    static function _countriesByLanguage($language = '')
    {
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

        self::$_countriesByLanguages = $countriesByLanguage;

        return self::$_countriesByLanguages[$language];
    }

    /**
     * @param string $alpha2
     * @return string
     */
    public static function getEmojiByAlpha2($alpha2 = '')
    {
        $rtn = '';
        $excludedAlpha2 = [
            'AB',
            'OS'
        ];

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
    public static function get2($keyField = 'alpha2', $requestedFields = ['alpha3', 'country'])
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
            $requestedFields = ['alpha3', 'country'];
        }

        $result = array();

        foreach ($countries as $countryKey => $country) {
            $tmp = array();

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
     * @param string $continentCode code of continent to use as filter
     * @return array contained key => value pairs of the requested key and field
     * Works exactly as get() above
     * But takes an extra param to enable filtering by continent
     */
    public static function getByContinent($keyField = 'alpha2', $requestedField = 'country', $continentCode = '')
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

        $result = [];

        foreach ($countries as $countryKey => $country) {

            if ($keyField) {

                if ($continentCode) {

                    if ($country['continentCode'] === $continentCode) {
                        $result[$country[$keyField]] = $country[$requestedField];
                    }
                } else {
                    $result[$country[$keyField]] = $country[$requestedField];
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
}
