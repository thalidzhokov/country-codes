# PHP Class CountryCodes
CountryCodes PHP Class to get array of countries with ISO 3166-1 alpha-2, ISO 3166-1 alpha-3, ISO 3166-1 numeric and ISD codes it can provide following information related to country

1. __alpha2__ ISO-3166-1 alpha-2 
https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
2. __alpha3__ ISO-3166-1 alpha-3 
https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3
3. __numeric__ ISO-3166-1 numeric 
https://en.wikipedia.org/wiki/ISO_3166-1_numeric
4. __isd__ International Subscriber Dialing code 
https://en.wikipedia.org/wiki/List_of_country_calling_codes
5. __continentCode__ Continent Code
6. __continent__ Continent Name
7. __country__ Country Name
8. __countryFull__ Country Full Name
9. __emoji__ Emoji Flag http://unicode.org/emoji/charts/emoji-ordering.html#country-flag

Names are available in English (`en`) and Russian (`ru`).
The data is stored in _CountryCodes.jsonc_.

## Installation

Install via Composer
```bash
composer require thalidzhokov/country-codes
```

OR include _CountryCodes.php_ in your PHP code
```php
require_once('CountryCodes.php');
```

## Usage

#### Change default language
```php
\CountryCodes::$language = 'ru';
```

Methods `get()`, `get2()` and `getByContinent()` also take the language as the last argument.
An unsupported language falls back to `en`.

#### Method __get()__
Get array __key => value__
```php
\CountryCodes::get('alpha2', 'country');
\CountryCodes::get('alpha2', 'country', 'ru');
```

If `$keyField` is `null` or not a supported field, the result is a list without keys.
If `$requestedField` is not supported, `country` is used.

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

#### Repeated keys
If several countries share a key (e.g. `isd`), the value becomes an array of all their values
```php
\CountryCodes::get('isd', 'alpha2');
```

Return
```
array (
  1 => 
  array (
    0 => 'CA',
    1 => 'PR',
    2 => 'UM',
    3 => 'US',
  ),
  ...,
  93 => 'AF',
  ...
)
```

The same applies to `get2()` and `getByContinent()`.

#### Method __get2()__
Get array with multiple values __key => \[value1, value2, ...]__ 
```php
\CountryCodes::get2('alpha3', ['alpha2', 'continentCode', 'emoji']);
```

Return
```
array (
  'ABH' => 
  array (
    'alpha2' => 'AB',
    'continentCode' => 'AS',
    'emoji' => '',
  ),
  'AND' => 
  array (
    'alpha2' => 'AD',
    'continentCode' => 'EU',
    'emoji' => '&#x1F1E6;&#x1F1E9;',
  ),
  'ARE' => 
  array (
    'alpha2' => 'AE',
    'continentCode' => 'AS',
    'emoji' => '&#x1F1E6;&#x1F1EA;',
  ),
  ...
)
```

#### Method __getByContinent()__
Get array __key => value__ by continent
```php
\CountryCodes::getByContinent('alpha3', 'countryFull', 'EU');
```

Continent codes: `AF`, `AN`, `AS`, `EU`, `NA`, `OC`, `SA` (case-insensitive).
An empty code returns all countries, an unknown code returns an empty array.

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

#### Method __getEmojiByAlpha2()__
Get emoji flag code by alpha2 as HTML entities.
Returns an empty string for unknown codes and for `AB`, `OS`, `XK`: Unicode has no flags for them.
```php
\CountryCodes::getEmojiByAlpha2('ZW');
```
Return
```
&#x1F1FF;&#x1F1FC;
```

#### Method __getEmojiByAlpha3()__
Get emoji flag code by alpha3.
Also accepts `ENG`, `WLS` / `WAL`, `SCT` / `SCO` for England, Wales and Scotland flags.
```php
\CountryCodes::getEmojiByAlpha3('ZMB');
```
Return
```
&#x1F1FF;&#x1F1F2;
```

## Tests
```bash
composer test
# or
php tests/functional.php
```
