# CountryCodes PHP Class
CountryCodes PHP Class to get array of countries with ISO 3166-1 alpha-2, ISO 3166-1 alpha-3, ISO 3166-1 numeric and ISD codes it can provide following information related to country

1. __alpha2__ ISO-3166-1 alpha-2 
https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
2. __alpha3__ ISO-3166-1 alpha-3 
https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3
3. __numeric__ ISO-3166-1 numeric 
https://en.wikipedia.org/wiki/ISO_3166-1_numeric
4. __isd__ Internatiguonal Subscriber Dialing code 
https://en.wikipedia.org/wiki/List_of_country_calling_codes
5. __continentCode__ Continent Code
6. __continent__ Continent Name
7. __country__ Country Name
8. __countryFull__ Country Full Name

## Installation

Install via Composer
```
composer require thalidzhokov/country-codes
```

OR include _CountryCodes.php_ in your PHP code
```
include_once PATH_TO_CLASS . 'CountryCodes.php';
```

## Usage

#### Change default language
```
\CountryCodes::$language = 'ru';
```

#### Method __get()__
Get array __key => value__
```
\CountryCodes::get('alpha2', 'country');
```

Return 
```
array (
  'AB' => 'Abkhazia',
  'AD' => 'Andorra',
  ...,
  'AI' => 'Anguilla',
  'AL' => 'Albania',
  'AM' => 'Armenia',
  ...,
  'US' => 'USA',
  ...
)
```

#### Method __get2()__
Get array with multiple values __key => \[value1, value2, ...]__ 
```
\CountryCodes::get2('alpha3', ['alpha2', 'continentCode']);
```

Return
```
array (
  'ABH' => 
  array (
    'alpha2' => 'AB',
    'continentCode' => 'AS',
  ),
  'AND' => 
  array (
    'alpha2' => 'AD',
    'continentCode' => 'EU',
  ),
  'ARE' => 
  array (
    'alpha2' => 'AE',
    'continentCode' => 'AS',
  ),
  ...
)
```

#### Method __getByContinent()__
Get array __key => value__ by continent
```
\CountryCodes::getByContinent('alpha3', 'countryFull', 'EU');
```

Return
```
array (
  ...,
  'BEL' => 'Belgium',
  'BGR' => 'Bulgaria',
  'BLR' => 'Belarus',
  'CHE' => 'Swiss Confederation',
  'CZE' => 'Czech Republic',
  'DEU' => 'Germany',
  ...
)
```