<?php

use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->delete();

        DB::table('currencies')->insert(array(
            0 =>
                array(
                    'country' => 'Albania',
                    'currency' => 'Leke',
                    'code' => 'ALL',
                    'symbol' => 'Lek',
                ),
            1 =>
                array(
                    'country' => 'America',
                    'currency' => 'Dollars',
                    'code' => 'USD',
                    'symbol' => '$',
                ),
            2 =>
                array(
                    'country' => 'Afghanistan',
                    'currency' => 'Afghanis',
                    'code' => 'AFN',
                    'symbol' => '؋',
                ),
            3 =>
                array(
                    'country' => 'Argentina',
                    'currency' => 'Pesos',
                    'code' => 'ARS',
                    'symbol' => '$',
                ),
            4 =>
                array(
                    'country' => 'Aruba',
                    'currency' => 'Guilders',
                    'code' => 'AWG',
                    'symbol' => 'ƒ',
                ),
            5 =>
                array(
                    'country' => 'Australia',
                    'currency' => 'Dollars',
                    'code' => 'AUD',
                    'symbol' => '$',
                ),
            6 =>
                array(
                    'country' => 'Azerbaijan',
                    'currency' => 'New Manats',
                    'code' => 'AZN',
                    'symbol' => 'ман',
                ),
            7 =>
                array(
                    'country' => 'Bahamas',
                    'currency' => 'Dollars',
                    'code' => 'BSD',
                    'symbol' => '$',
                ),
            8 =>
                array(
                    'country' => 'Barbados',
                    'currency' => 'Dollars',
                    'code' => 'BBD',
                    'symbol' => '$',
                ),
            9 =>
                array(
                    'country' => 'Belarus',
                    'currency' => 'Rubles',
                    'code' => 'BYR',
                    'symbol' => 'p.',
                ),
            10 =>
                array(
                    'country' => 'Belgium',
                    'currency' => 'Euro',
                    'code' => 'EUR',
                    'symbol' => '€',
                ),
            11 =>
                array(
                    'country' => 'Beliz',
                    'currency' => 'Dollars',
                    'code' => 'BZD',
                    'symbol' => 'BZ$',
                ),
            12 =>
                array(
                    'country' => 'Bermuda',
                    'currency' => 'Dollars',
                    'code' => 'BMD',
                    'symbol' => '$',
                ),
            13 =>
                array(
                    'country' => 'Bolivia',
                    'currency' => 'Bolivianos',
                    'code' => 'BOB',
                    'symbol' => '$b',
                ),
            14 =>
                array(
                    'country' => 'Bosnia and Herzegovina',
                    'currency' => 'Convertible Marka',
                    'code' => 'BAM',
                    'symbol' => 'KM',
                ),
            15 =>
                array(
                    'country' => 'Botswana',
                    'currency' => 'Pula',
                    'code' => 'BWP',
                    'symbol' => 'P',
                ),
            16 =>
                array(
                    'country' => 'Bulgaria',
                    'currency' => 'Leva',
                    'code' => 'BGN',
                    'symbol' => 'лв',
                ),
            17 =>
                array(
                    'country' => 'Brazil',
                    'currency' => 'Reais',
                    'code' => 'BRL',
                    'symbol' => 'R$',
                ),
            18 =>
                array(
                    'country' => 'Britain (United Kingdom)',
                    'currency' => 'Pounds',
                    'code' => 'GBP',
                    'symbol' => '£',
                ),
            19 =>
                array(
                    'country' => 'Brunei Darussalam',
                    'currency' => 'Dollars',
                    'code' => 'BND',
                    'symbol' => '$',
                ),
            20 =>
                array(
                    'country' => 'Cambodia',
                    'currency' => 'Riels',
                    'code' => 'KHR',
                    'symbol' => '៛',
                ),
            21 =>
                array(
                    'country' => 'Canada',
                    'currency' => 'Dollars',
                    'code' => 'CAD',
                    'symbol' => '$',
                ),
            22 =>
                array(
                    'country' => 'Cayman Islands',
                    'currency' => 'Dollars',
                    'code' => 'KYD',
                    'symbol' => '$',
                ),
            23 =>
                array(
                    'country' => 'Chile',
                    'currency' => 'Pesos',
                    'code' => 'CLP',
                    'symbol' => '$',
                ),
            24 =>
                array(
                    'country' => 'China',
                    'currency' => 'Yuan Renminbi',
                    'code' => 'CNY',
                    'symbol' => '¥',
                ),
            25 =>
                array(
                    'country' => 'Colombia',
                    'currency' => 'Pesos',
                    'code' => 'COP',
                    'symbol' => '$',
                ),
            26 =>
                array(
                    'country' => 'Costa Rica',
                    'currency' => 'Colón',
                    'code' => 'CRC',
                    'symbol' => '₡',
                ),
            27 =>
                array(
                    'country' => 'Croatia',
                    'currency' => 'Kuna',
                    'code' => 'HRK',
                    'symbol' => 'kn',
                ),
            28 =>
                array(
                    'country' => 'Cuba',
                    'currency' => 'Pesos',
                    'code' => 'CUP',
                    'symbol' => '₱',
                ),
            29 =>
                array(
                    'country' => 'Cyprus',
                    'currency' => 'Euro',
                    'code' => 'EUR',
                    'symbol' => '€',
                ),
            30 =>
                array(
                    'country' => 'Czech Republic',
                    'currency' => 'Koruny',
                    'code' => 'CZK',
                    'symbol' => 'Kč',
                ),
            31 =>
                array(
                    'country' => 'Denmark',
                    'currency' => 'Kroner',
                    'code' => 'DKK',
                    'symbol' => 'kr',
                ),
            32 =>
                array(
                    'country' => 'Dominican Republic',
                    'currency' => 'Pesos',
                    'code' => 'DOP',
                    'symbol' => 'RD$',
                ),
            33 =>
                array(
                    'country' => 'East Caribbean',
                    'currency' => 'Dollars',
                    'code' => 'XCD',
                    'symbol' => '$',
                ),
            34 =>
                array(
                    'country' => 'Egypt',
                    'currency' => 'Pounds',
                    'code' => 'EGP',
                    'symbol' => '£',
                ),
            35 =>
                array(
                    'country' => 'El Salvador',
                    'currency' => 'Colones',
                    'code' => 'SVC',
                    'symbol' => '$',
                ),
            36 =>
                array(
                    'country' => 'England (United Kingdom)',
                    'currency' => 'Pounds',
                    'code' => 'GBP',
                    'symbol' => '£',
                ),
            37 =>
                array(
                    'country' => 'Euro',
                    'currency' => 'Euro',
                    'code' => 'EUR',
                    'symbol' => '€',
                ),
            38 =>
                array(
                    'country' => 'Falkland Islands',
                    'currency' => 'Pounds',
                    'code' => 'FKP',
                    'symbol' => '£',
                ),
            39 =>
                array(
                    'country' => 'Fiji',
                    'currency' => 'Dollars',
                    'code' => 'FJD',
                    'symbol' => '$',
                ),
            40 =>
                array(
                    'country' => 'France',
                    'currency' => 'Euro',
                    'code' => 'EUR',
                    'symbol' => '€',
                ),
            41 =>
                array(
                    'country' => 'Ghana',
                    'currency' => 'Cedis',
                    'code' => 'GHC',
                    'symbol' => '¢',
                ),
            42 =>
                array(
                    'country' => 'Gibraltar',
                    'currency' => 'Pounds',
                    'code' => 'GIP',
                    'symbol' => '£',
                ),
            43 =>
                array(
                    'country' => 'Greece',
                    'currency' => 'Euro',
                    'code' => 'EUR',
                    'symbol' => '€',
                ),
            44 =>
                array(
                    'country' => 'Guatemala',
                    'currency' => 'Quetzales',
                    'code' => 'GTQ',
                    'symbol' => 'Q',
                ),
            45 =>
                array(
                    'country' => 'Guernsey',
                    'currency' => 'Pounds',
                    'code' => 'GGP',
                    'symbol' => '£',
                ),
            46 =>
                array(
                    'country' => 'Guyana',
                    'currency' => 'Dollars',
                    'code' => 'GYD',
                    'symbol' => '$',
                ),
            47 =>
                array(
                    'country' => 'Holland (Netherlands)',
                    'currency' => 'Euro',
                    'code' => 'EUR',
                    'symbol' => '€',
                ),
            48 =>
                array(
                    'country' => 'Honduras',
                    'currency' => 'Lempiras',
                    'code' => 'HNL',
                    'symbol' => 'L',
                ),
            49 =>
                array(
                    'country' => 'Hong Kong',
                    'currency' => 'Dollars',
                    'code' => 'HKD',
                    'symbol' => '$',
                ),
            50 =>
                array(
                    'country' => 'Hungary',
                    'currency' => 'Forint',
                    'code' => 'HUF',
                    'symbol' => 'Ft',
                ),
            51 =>
                array(
                    'country' => 'Iceland',
                    'currency' => 'Kronur',
                    'code' => 'ISK',
                    'symbol' => 'kr',
                ),
            52 =>
                array(
                    'country' => 'India',
                    'currency' => 'Rupees',
                    'code' => 'INR',
                    'symbol' => 'Rp',
                ),
            53 =>
                array(
                    'country' => 'Indonesia',
                    'currency' => 'Rupiahs',
                    'code' => 'IDR',
                    'symbol' => 'Rp',
                ),
            54 =>
                array(
                    'country' => 'Iran',
                    'currency' => 'Rials',
                    'code' => 'IRR',
                    'symbol' => '﷼',
                ),
            55 =>
                array(
                    'country' => 'Ireland',
                    'currency' => 'Euro',
                    'code' => 'EUR',
                    'symbol' => '€',
                ),
            56 =>
                array(
                    'country' => 'Isle of Man',
                    'currency' => 'Pounds',
                    'code' => 'IMP',
                    'symbol' => '£',
                ),
            57 =>
                array(
                    'country' => 'Israel',
                    'currency' => 'New Shekels',
                    'code' => 'ILS',
                    'symbol' => '₪',
                ),
            58 =>
                array(
                    'country' => 'Italy',
                    'currency' => 'Euro',
                    'code' => 'EUR',
                    'symbol' => '€',
                ),
            59 =>
                array(
                    'country' => 'Jamaica',
                    'currency' => 'Dollars',
                    'code' => 'JMD',
                    'symbol' => 'J$',
                ),
            60 =>
                array(
                    'country' => 'Japan',
                    'currency' => 'Yen',
                    'code' => 'JPY',
                    'symbol' => '¥',
                ),
            61 =>
                array(
                    'country' => 'Jersey',
                    'currency' => 'Pounds',
                    'code' => 'JEP',
                    'symbol' => '£',
                ),
            62 =>
                array(
                    'country' => 'Kazakhstan',
                    'currency' => 'Tenge',
                    'code' => 'KZT',
                    'symbol' => 'лв',
                ),
            63 =>
                array(
                    'country' => 'Korea (North)',
                    'currency' => 'Won',
                    'code' => 'KPW',
                    'symbol' => '₩',
                ),
            64 =>
                array(
                    'country' => 'Korea (South)',
                    'currency' => 'Won',
                    'code' => 'KRW',
                    'symbol' => '₩',
                ),
            65 =>
                array(
                    'country' => 'Kyrgyzstan',
                    'currency' => 'Soms',
                    'code' => 'KGS',
                    'symbol' => 'лв',
                ),
            66 =>
                array(
                    'country' => 'Laos',
                    'currency' => 'Kips',
                    'code' => 'LAK',
                    'symbol' => '₭',
                ),
            67 =>
                array(
                    'country' => 'Latvia',
                    'currency' => 'Lati',
                    'code' => 'LVL',
                    'symbol' => 'Ls',
                ),
            68 =>
                array(
                    'country' => 'Lebanon',
                    'currency' => 'Pounds',
                    'code' => 'LBP',
                    'symbol' => '£',
                ),
            69 =>
                array(
                    'country' => 'Liberia',
                    'currency' => 'Dollars',
                    'code' => 'LRD',
                    'symbol' => '$',
                ),
            70 =>
                array(
                    'country' => 'Liechtenstein',
                    'currency' => 'Switzerland Francs',
                    'code' => 'CHF',
                    'symbol' => 'CHF',
                ),
            71 =>
                array(
                    'country' => 'Lithuania',
                    'currency' => 'Litai',
                    'code' => 'LTL',
                    'symbol' => 'Lt',
                ),
            72 =>
                array(
                    'country' => 'Luxembourg',
                    'currency' => 'Euro',
                    'code' => 'EUR',
                    'symbol' => '€',
                ),
            73 =>
                array(
                    'country' => 'Macedonia',
                    'currency' => 'Denars',
                    'code' => 'MKD',
                    'symbol' => 'ден',
                ),
            74 =>
                array(
                    'country' => 'Malaysia',
                    'currency' => 'Ringgits',
                    'code' => 'MYR',
                    'symbol' => 'RM',
                ),
            75 =>
                array(
                    'country' => 'Malta',
                    'currency' => 'Euro',
                    'code' => 'EUR',
                    'symbol' => '€',
                ),
            76 =>
                array(
                    'country' => 'Mauritius',
                    'currency' => 'Rupees',
                    'code' => 'MUR',
                    'symbol' => '₨',
                ),
            77 =>
                array(
                    'country' => 'Mexico',
                    'currency' => 'Pesos',
                    'code' => 'MXN',
                    'symbol' => '$',
                ),
            78 =>
                array(
                    'country' => 'Mongolia',
                    'currency' => 'Tugriks',
                    'code' => 'MNT',
                    'symbol' => '₮',
                ),
            79 =>
                array(
                    'country' => 'Mozambique',
                    'currency' => 'Meticais',
                    'code' => 'MZN',
                    'symbol' => 'MT',
                ),
            80 =>
                array(
                    'country' => 'Namibia',
                    'currency' => 'Dollars',
                    'code' => 'NAD',
                    'symbol' => '$',
                ),
            81 =>
                array(
                    'country' => 'Nepal',
                    'currency' => 'Rupees',
                    'code' => 'NPR',
                    'symbol' => '₨',
                ),
            82 =>
                array(
                    'country' => 'Netherlands Antilles',
                    'currency' => 'Guilders',
                    'code' => 'ANG',
                    'symbol' => 'ƒ',
                ),
            83 =>
                array(
                    'country' => 'Netherlands',
                    'currency' => 'Euro',
                    'code' => 'EUR',
                    'symbol' => '€',
                ),
            84 =>
                array(
                    'country' => 'New Zealand',
                    'currency' => 'Dollars',
                    'code' => 'NZD',
                    'symbol' => '$',
                ),
            85 =>
                array(
                    'country' => 'Nicaragua',
                    'currency' => 'Cordobas',
                    'code' => 'NIO',
                    'symbol' => 'C$',
                ),
            86 =>
                array(
                    'country' => 'Nigeria',
                    'currency' => 'Nairas',
                    'code' => 'NGN',
                    'symbol' => '₦',
                ),
            87 =>
                array(
                    'country' => 'North Korea',
                    'currency' => 'Won',
                    'code' => 'KPW',
                    'symbol' => '₩',
                ),
            88 =>
                array(
                    'country' => 'Norway',
                    'currency' => 'Krone',
                    'code' => 'NOK',
                    'symbol' => 'kr',
                ),
            89 =>
                array(
                    'country' => 'Oman',
                    'currency' => 'Rials',
                    'code' => 'OMR',
                    'symbol' => '﷼',
                ),
            90 =>
                array(
                    'country' => 'Pakistan',
                    'currency' => 'Rupees',
                    'code' => 'PKR',
                    'symbol' => '₨',
                ),
            91 =>
                array(
                    'country' => 'Panama',
                    'currency' => 'Balboa',
                    'code' => 'PAB',
                    'symbol' => 'B/.',
                ),
            92 =>
                array(
                    'country' => 'Paraguay',
                    'currency' => 'Guarani',
                    'code' => 'PYG',
                    'symbol' => 'Gs',
                ),
            93 =>
                array(
                    'country' => 'Peru',
                    'currency' => 'Nuevos Soles',
                    'code' => 'PEN',
                    'symbol' => 'S/.',
                ),
            94 =>
                array(
                    'country' => 'Philippines',
                    'currency' => 'Pesos',
                    'code' => 'PHP',
                    'symbol' => 'Php',
                ),
            95 =>
                array(
                    'country' => 'Poland',
                    'currency' => 'Zlotych',
                    'code' => 'PLN',
                    'symbol' => 'zł',
                ),
            96 =>
                array(
                    'country' => 'Qatar',
                    'currency' => 'Rials',
                    'code' => 'QAR',
                    'symbol' => '﷼',
                ),
            97 =>
                array(
                    'country' => 'Romania',
                    'currency' => 'New Lei',
                    'code' => 'RON',
                    'symbol' => 'lei',
                ),
            98 =>
                array(
                    'country' => 'Russia',
                    'currency' => 'Rubles',
                    'code' => 'RUB',
                    'symbol' => 'руб',
                ),
            99 =>
                array(
                    'country' => 'Saint Helena',
                    'currency' => 'Pounds',
                    'code' => 'SHP',
                    'symbol' => '£',
                ),
            100 =>
                array(
                    'country' => 'Saudi Arabia',
                    'currency' => 'Riyals',
                    'code' => 'SAR',
                    'symbol' => '﷼',
                ),
            101 =>
                array(
                    'country' => 'Serbia',
                    'currency' => 'Dinars',
                    'code' => 'RSD',
                    'symbol' => 'Дин.',
                ),
            102 =>
                array(
                    'country' => 'Seychelles',
                    'currency' => 'Rupees',
                    'code' => 'SCR',
                    'symbol' => '₨',
                ),
            103 =>
                array(
                    'country' => 'Singapore',
                    'currency' => 'Dollars',
                    'code' => 'SGD',
                    'symbol' => '$',
                ),
            104 =>
                array(
                    'country' => 'Slovenia',
                    'currency' => 'Euro',
                    'code' => 'EUR',
                    'symbol' => '€',
                ),
            105 =>
                array(
                    'country' => 'Solomon Islands',
                    'currency' => 'Dollars',
                    'code' => 'SBD',
                    'symbol' => '$',
                ),
            106 =>
                array(
                    'country' => 'Somalia',
                    'currency' => 'Shillings',
                    'code' => 'SOS',
                    'symbol' => 'S',
                ),
            107 =>
                array(
                    'country' => 'South Africa',
                    'currency' => 'Rand',
                    'code' => 'ZAR',
                    'symbol' => 'R',
                ),
            108 =>
                array(
                    'country' => 'South Korea',
                    'currency' => 'Won',
                    'code' => 'KRW',
                    'symbol' => '₩',
                ),
            109 =>
                array(
                    'country' => 'Spain',
                    'currency' => 'Euro',
                    'code' => 'EUR',
                    'symbol' => '€',
                ),
            110 =>
                array(
                    'country' => 'Sri Lanka',
                    'currency' => 'Rupees',
                    'code' => 'LKR',
                    'symbol' => '₨',
                ),
            111 =>
                array(
                    'country' => 'Sweden',
                    'currency' => 'Kronor',
                    'code' => 'SEK',
                    'symbol' => 'kr',
                ),
            112 =>
                array(
                    'country' => 'Switzerland',
                    'currency' => 'Francs',
                    'code' => 'CHF',
                    'symbol' => 'CHF',
                ),
            113 =>
                array(
                    'country' => 'Suriname',
                    'currency' => 'Dollars',
                    'code' => 'SRD',
                    'symbol' => '$',
                ),
            114 =>
                array(
                    'country' => 'Syria',
                    'currency' => 'Pounds',
                    'code' => 'SYP',
                    'symbol' => '£',
                ),
            115 =>
                array(
                    'country' => 'Taiwan',
                    'currency' => 'New Dollars',
                    'code' => 'TWD',
                    'symbol' => 'NT$',
                ),
            116 =>
                array(
                    'country' => 'Thailand',
                    'currency' => 'Baht',
                    'code' => 'THB',
                    'symbol' => '฿',
                ),
            117 =>
                array(
                    'country' => 'Trinidad and Tobago',
                    'currency' => 'Dollars',
                    'code' => 'TTD',
                    'symbol' => 'TT$',
                ),
            118 =>
                array(
                    'country' => 'Turkey',
                    'currency' => 'Lira',
                    'code' => 'TRY',
                    'symbol' => 'TL',
                ),
            119 =>
                array(
                    'country' => 'Turkey',
                    'currency' => 'Liras',
                    'code' => 'TRL',
                    'symbol' => '£',
                ),
            120 =>
                array(
                    'country' => 'Tuvalu',
                    'currency' => 'Dollars',
                    'code' => 'TVD',
                    'symbol' => '$',
                ),
            121 =>
                array(
                    'country' => 'Ukraine',
                    'currency' => 'Hryvnia',
                    'code' => 'UAH',
                    'symbol' => '₴',
                ),
            122 =>
                array(
                    'country' => 'United Kingdom',
                    'currency' => 'Pounds',
                    'code' => 'GBP',
                    'symbol' => '£',
                ),
            123 =>
                array(
                    'country' => 'United States of America',
                    'currency' => 'Dollars',
                    'code' => 'USD',
                    'symbol' => '$',
                ),
            124 =>
                array(
                    'country' => 'Uruguay',
                    'currency' => 'Pesos',
                    'code' => 'UYU',
                    'symbol' => '$U',
                ),
            125 =>
                array(
                    'country' => 'Uzbekistan',
                    'currency' => 'Sums',
                    'code' => 'UZS',
                    'symbol' => 'лв',
                ),
            126 =>
                array(
                    'country' => 'Vatican City',
                    'currency' => 'Euro',
                    'code' => 'EUR',
                    'symbol' => '€',
                ),
            127 =>
                array(
                    'country' => 'Venezuela',
                    'currency' => 'Bolivares Fuertes',
                    'code' => 'VEF',
                    'symbol' => 'Bs',
                ),
            128 =>
                array(
                    'country' => 'Vietnam',
                    'currency' => 'Dong',
                    'code' => 'VND',
                    'symbol' => '₫',
                ),
            129 =>
                array(
                    'country' => 'Yemen',
                    'currency' => 'Rials',
                    'code' => 'YER',
                    'symbol' => '﷼',
                ),
            130 =>
                array(
                    'country' => 'Zimbabwe',
                    'currency' => 'Zimbabwe Dollars',
                    'code' => 'ZWD',
                    'symbol' => 'Z$',
                ),
            131 =>
                array(
                    'country' => 'India',
                    'currency' => 'Rupees',
                    'code' => 'INR',
                    'symbol' => '₹',
                ),
        ));
    }
}
