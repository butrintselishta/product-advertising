<?php

return [

    // Uncomment the languages that your site supports - or add new ones.
    // These are sorted by the native name, which is the order you might show them in a language selector.
    // Regional languages are sorted by their base language, so "British English" sorts as "English, British"
    'supportedLocales' => [
        'en'          => ['name' => 'English',                'script' => 'Latn', 'native' => 'English', 'regional' => 'en_GB'],
        'sq'          => ['name' => 'Albanian',               'script' => 'Latn', 'native' => 'Shqip', 'regional' => 'sq_AL'],
        //'sid'         => ['name' => 'Sidamo',                 'script' => 'Latn', 'native' => 'Sidaamu Afo', 'regional' => 'sid_ET'],
        //'ss'          => ['name' => 'Swati',                  'script' => 'Latn', 'native' => 'Siswati', 'regional' => 'ss_ZA'],
        //'sk'          => ['name' => 'Slovak',                 'script' => 'Latn', 'native' => 'slovenčina', 'regional' => 'sk_SK'],
        //'sl'          => ['name' => 'Slovene',                'script' => 'Latn', 'native' => 'slovenščina', 'regional' => 'sl_SI'],
        //'so'          => ['name' => 'Somali',                 'script' => 'Latn', 'native' => 'Soomaali', 'regional' => 'so_SO'],
        //'sr-Latn'     => ['name' => 'Serbian (Latin)',        'script' => 'Latn', 'native' => 'Srpski', 'regional' => 'sr_RS'],
        //'sh'          => ['name' => 'Serbo-Croatian',         'script' => 'Latn', 'native' => 'srpskohrvatski', 'regional' => ''],
        //'fi'          => ['name' => 'Finnish',                'script' => 'Latn', 'native' => 'suomi', 'regional' => 'fi_FI'],
        //'sv'          => ['name' => 'Swedish',                'script' => 'Latn', 'native' => 'svenska', 'regional' => 'sv_SE'],
        //'sg'          => ['name' => 'Sango',                  'script' => 'Latn', 'native' => 'Sängö', 'regional' => ''],
        //'tl'          => ['name' => 'Tagalog',                'script' => 'Latn', 'native' => 'Tagalog', 'regional' => 'tl_PH'],
        //'tzm-Latn'    => ['name' => 'Central Atlas Tamazight (Latin)', 'script' => 'Latn', 'native' => 'Tamazight', 'regional' => ''],
        //'kab'         => ['name' => 'Kabyle',                 'script' => 'Latn', 'native' => 'Taqbaylit', 'regional' => 'kab_DZ'],
        //'twq'         => ['name' => 'Tasawaq',                'script' => 'Latn', 'native' => 'Tasawaq senni', 'regional' => ''],
        //'shi'         => ['name' => 'Tachelhit (Latin)',      'script' => 'Latn', 'native' => 'Tashelhit', 'regional' => ''],
        //'nus'         => ['name' => 'Nuer',                   'script' => 'Latn', 'native' => 'Thok Nath', 'regional' => ''],
        //'vi'          => ['name' => 'Vietnamese',             'script' => 'Latn', 'native' => 'Tiếng Việt', 'regional' => 'vi_VN'],
        //'tg-Latn'     => ['name' => 'Tajik (Latin)',          'script' => 'Latn', 'native' => 'tojikī', 'regional' => 'tg_TJ'],
        //'lu'          => ['name' => 'Luba-Katanga',           'script' => 'Latn', 'native' => 'Tshiluba', 'regional' => 've_ZA'],
        //'ve'          => ['name' => 'Venda',                  'script' => 'Latn', 'native' => 'Tshivenḓa', 'regional' => ''],
        //'tw'          => ['name' => 'Twi',                    'script' => 'Latn', 'native' => 'Twi', 'regional' => ''],
        //'tr'          => ['name' => 'Turkish',                'script' => 'Latn', 'native' => 'Türkçe', 'regional' => 'tr_TR'],
        //'ale'         => ['name' => 'Aleut',                  'script' => 'Latn', 'native' => 'Unangax tunuu', 'regional' => ''],
        //'ca-valencia' => ['name' => 'Valencian',              'script' => 'Latn', 'native' => 'valencià', 'regional' => ''],
        //'vai-Latn'    => ['name' => 'Vai (Latin)',            'script' => 'Latn', 'native' => 'Viyamíĩ', 'regional' => ''],
        //'vo'          => ['name' => 'Volapük',                'script' => 'Latn', 'native' => 'Volapük', 'regional' => ''],
        //'fj'          => ['name' => 'Fijian',                 'script' => 'Latn', 'native' => 'vosa Vakaviti', 'regional' => ''],
        //'wa'          => ['name' => 'Walloon',                'script' => 'Latn', 'native' => 'Walon', 'regional' => 'wa_BE'],
        //'wae'         => ['name' => 'Walser',                 'script' => 'Latn', 'native' => 'Walser', 'regional' => 'wae_CH'],
        //'wen'         => ['name' => 'Sorbian',                'script' => 'Latn', 'native' => 'Wendic', 'regional' => ''],
        //'wo'          => ['name' => 'Wolof',                  'script' => 'Latn', 'native' => 'Wolof', 'regional' => 'wo_SN'],
        //'ts'          => ['name' => 'Tsonga',                 'script' => 'Latn', 'native' => 'Xitsonga', 'regional' => 'ts_ZA'],
        //'dje'         => ['name' => 'Zarma',                  'script' => 'Latn', 'native' => 'Zarmaciine', 'regional' => ''],
        //'yo'          => ['name' => 'Yoruba',                 'script' => 'Latn', 'native' => 'Èdè Yorùbá', 'regional' => 'yo_NG'],
        // 'de-AT'       => ['name' => 'Austrian German',        'script' => 'Latn', 'native' => 'Österreichisches Deutsch', 'regional' => 'de_AT'],
        //'is'          => ['name' => 'Icelandic',              'script' => 'Latn', 'native' => 'íslenska', 'regional' => 'is_IS'],
        //'cs'          => ['name' => 'Czech',                  'script' => 'Latn', 'native' => 'čeština', 'regional' => 'cs_CZ'],
        //'bas'         => ['name' => 'Basa',                   'script' => 'Latn', 'native' => 'Ɓàsàa', 'regional' => ''],
        //'mas'         => ['name' => 'Masai',                  'script' => 'Latn', 'native' => 'ɔl-Maa', 'regional' => ''],
        //'haw'         => ['name' => 'Hawaiian',               'script' => 'Latn', 'native' => 'ʻŌlelo Hawaiʻi', 'regional' => ''],
        //'el'          => ['name' => 'Greek',                  'script' => 'Grek', 'native' => 'Ελληνικά', 'regional' => 'el_GR'],
        //'uz'          => ['name' => 'Uzbek (Cyrillic)',       'script' => 'Cyrl', 'native' => 'Ўзбек', 'regional' => 'uz_UZ'],
        //'az-Cyrl'     => ['name' => 'Azerbaijani (Cyrillic)', 'script' => 'Cyrl', 'native' => 'Азәрбајҹан', 'regional' => 'uz_UZ'],
        //'ab'          => ['name' => 'Abkhazian',              'script' => 'Cyrl', 'native' => 'Аҧсуа', 'regional' => ''],
        //'os'          => ['name' => 'Ossetic',                'script' => 'Cyrl', 'native' => 'Ирон', 'regional' => 'os_RU'],
        //'ky'          => ['name' => 'Kyrgyz',                 'script' => 'Cyrl', 'native' => 'Кыргыз', 'regional' => 'ky_KG'],
        //'sr'          => ['name' => 'Serbian (Cyrillic)',     'script' => 'Cyrl', 'native' => 'Српски', 'regional' => 'sr_RS'],
        //'av'          => ['name' => 'Avaric',                 'script' => 'Cyrl', 'native' => 'авар мацӀ', 'regional' => ''],
        //'ady'         => ['name' => 'Adyghe',                 'script' => 'Cyrl', 'native' => 'адыгэбзэ', 'regional' => ''],
        //'ba'          => ['name' => 'Bashkir',                'script' => 'Cyrl', 'native' => 'башҡорт теле', 'regional' => ''],
        //'be'          => ['name' => 'Belarusian',             'script' => 'Cyrl', 'native' => 'беларуская', 'regional' => 'be_BY'],
        //'bg'          => ['name' => 'Bulgarian',              'script' => 'Cyrl', 'native' => 'български', 'regional' => 'bg_BG'],
        //'kv'          => ['name' => 'Komi',                   'script' => 'Cyrl', 'native' => 'коми кыв', 'regional' => ''],
        //'mk'          => ['name' => 'Macedonian',             'script' => 'Cyrl', 'native' => 'македонски', 'regional' => 'mk_MK'],
        //'mn'          => ['name' => 'Mongolian (Cyrillic)',   'script' => 'Cyrl', 'native' => 'монгол', 'regional' => 'mn_MN'],
        //'ce'          => ['name' => 'Chechen',                'script' => 'Cyrl', 'native' => 'нохчийн мотт', 'regional' => 'ce_RU'],
        //'ru'          => ['name' => 'Russian',                'script' => 'Cyrl', 'native' => 'русский', 'regional' => 'ru_RU'],
        //'sah'         => ['name' => 'Yakut',                  'script' => 'Cyrl', 'native' => 'саха тыла', 'regional' => ''],
        //'tt'          => ['name' => 'Tatar',                  'script' => 'Cyrl', 'native' => 'татар теле', 'regional' => 'tt_RU'],
        //'tg'          => ['name' => 'Tajik (Cyrillic)',       'script' => 'Cyrl', 'native' => 'тоҷикӣ', 'regional' => 'tg_TJ'],
        //'tk'          => ['name' => 'Turkmen',                'script' => 'Cyrl', 'native' => 'түркменче', 'regional' => 'tk_TM'],
        //'uk'          => ['name' => 'Ukrainian',              'script' => 'Cyrl', 'native' => 'українська', 'regional' => 'uk_UA'],
        //'cv'          => ['name' => 'Chuvash',                'script' => 'Cyrl', 'native' => 'чӑваш чӗлхи', 'regional' => 'cv_RU'],
        //'cu'          => ['name' => 'Church Slavic',          'script' => 'Cyrl', 'native' => 'ѩзыкъ словѣньскъ', 'regional' => ''],
        //'kk'          => ['name' => 'Kazakh',                 'script' => 'Cyrl', 'native' => 'қазақ тілі', 'regional' => 'kk_KZ'],
        //'hy'          => ['name' => 'Armenian',               'script' => 'Armn', 'native' => 'Հայերեն', 'regional' => 'hy_AM'],
        //'yi'          => ['name' => 'Yiddish',                'script' => 'Hebr', 'native' => 'ייִדיש', 'regional' => 'yi_US'],
        //'he'          => ['name' => 'Hebrew',                 'script' => 'Hebr', 'native' => 'עברית', 'regional' => 'he_IL'],
        //'ug'          => ['name' => 'Uyghur',                 'script' => 'Arab', 'native' => 'ئۇيغۇرچە', 'regional' => 'ug_CN'],
        //'ur'          => ['name' => 'Urdu',                   'script' => 'Arab', 'native' => 'اردو', 'regional' => 'ur_PK'],
        //'ar'          => ['name' => 'Arabic',                 'script' => 'Arab', 'native' => 'العربية', 'regional' => 'ar_AE'],
        //'uz-Arab'     => ['name' => 'Uzbek (Arabic)',         'script' => 'Arab', 'native' => 'اۉزبېک', 'regional' => ''],
        //'tg-Arab'     => ['name' => 'Tajik (Arabic)',         'script' => 'Arab', 'native' => 'تاجیکی', 'regional' => 'tg_TJ'],
        //'sd'          => ['name' => 'Sindhi',                 'script' => 'Arab', 'native' => 'سنڌي', 'regional' => 'sd_IN'],
        //'fa'          => ['name' => 'Persian',                'script' => 'Arab', 'native' => 'فارسی', 'regional' => 'fa_IR'],
        //'pa-Arab'     => ['name' => 'Punjabi (Arabic)',       'script' => 'Arab', 'native' => 'پنجاب', 'regional' => 'pa_IN'],
        //'ps'          => ['name' => 'Pashto',                 'script' => 'Arab', 'native' => 'پښتو', 'regional' => 'ps_AF'],
        //'ks'          => ['name' => 'Kashmiri (Arabic)',      'script' => 'Arab', 'native' => 'کأشُر', 'regional' => 'ks_IN'],
        //'ku'          => ['name' => 'Kurdish',                'script' => 'Arab', 'native' => 'کوردی', 'regional' => 'ku_TR'],
        //'dv'          => ['name' => 'Divehi',                 'script' => 'Thaa', 'native' => 'ދިވެހިބަސް', 'regional' => 'dv_MV'],
        //'ks-Deva'     => ['name' => 'Kashmiri (Devaganari)',  'script' => 'Deva', 'native' => 'कॉशुर', 'regional' => 'ks_IN'],
        //'kok'         => ['name' => 'Konkani',                'script' => 'Deva', 'native' => 'कोंकणी', 'regional' => 'kok_IN'],
        //'doi'         => ['name' => 'Dogri',                  'script' => 'Deva', 'native' => 'डोगरी', 'regional' => 'doi_IN'],
        //'ne'          => ['name' => 'Nepali',                 'script' => 'Deva', 'native' => 'नेपाली', 'regional' => ''],
        //'pra'         => ['name' => 'Prakrit',                'script' => 'Deva', 'native' => 'प्राकृत', 'regional' => ''],
        //'brx'         => ['name' => 'Bodo',                   'script' => 'Deva', 'native' => 'बड़ो', 'regional' => 'brx_IN'],
        //'bra'         => ['name' => 'Braj',                   'script' => 'Deva', 'native' => 'ब्रज भाषा', 'regional' => ''],
        //'mr'          => ['name' => 'Marathi',                'script' => 'Deva', 'native' => 'मराठी', 'regional' => 'mr_IN'],
        //'mai'         => ['name' => 'Maithili',               'script' => 'Tirh', 'native' => 'मैथिली', 'regional' => 'mai_IN'],
        //'raj'         => ['name' => 'Rajasthani',             'script' => 'Deva', 'native' => 'राजस्थानी', 'regional' => ''],
        //'sa'          => ['name' => 'Sanskrit',               'script' => 'Deva', 'native' => 'संस्कृतम्', 'regional' => 'sa_IN'],
        //'hi'          => ['name' => 'Hindi',                  'script' => 'Deva', 'native' => 'हिन्दी', 'regional' => 'hi_IN'],
        //'as'          => ['name' => 'Assamese',               'script' => 'Beng', 'native' => 'অসমীয়া', 'regional' => 'as_IN'],
        //'bn'          => ['name' => 'Bengali',                'script' => 'Beng', 'native' => 'বাংলা', 'regional' => 'bn_BD'],
        //'mni'         => ['name' => 'Manipuri',               'script' => 'Beng', 'native' => 'মৈতৈ', 'regional' => 'mni_IN'],
        //'pa'          => ['name' => 'Punjabi (Gurmukhi)',     'script' => 'Guru', 'native' => 'ਪੰਜਾਬੀ', 'regional' => 'pa_IN'],
        //'gu'          => ['name' => 'Gujarati',               'script' => 'Gujr', 'native' => 'ગુજરાતી', 'regional' => 'gu_IN'],
        //'or'          => ['name' => 'Oriya',                  'script' => 'Orya', 'native' => 'ଓଡ଼ିଆ', 'regional' => 'or_IN'],
        //'ta'          => ['name' => 'Tamil',                  'script' => 'Taml', 'native' => 'தமிழ்', 'regional' => 'ta_IN'],
        //'te'          => ['name' => 'Telugu',                 'script' => 'Telu', 'native' => 'తెలుగు', 'regional' => 'te_IN'],
        //'kn'          => ['name' => 'Kannada',                'script' => 'Knda', 'native' => 'ಕನ್ನಡ', 'regional' => 'kn_IN'],
        //'ml'          => ['name' => 'Malayalam',              'script' => 'Mlym', 'native' => 'മലയാളം', 'regional' => 'ml_IN'],
        //'si'          => ['name' => 'Sinhala',                'script' => 'Sinh', 'native' => 'සිංහල', 'regional' => 'si_LK'],
        //'th'          => ['name' => 'Thai',                   'script' => 'Thai', 'native' => 'ไทย', 'regional' => 'th_TH'],
        //'lo'          => ['name' => 'Lao',                    'script' => 'Laoo', 'native' => 'ລາວ', 'regional' => 'lo_LA'],
        //'bo'          => ['name' => 'Tibetan',                'script' => 'Tibt', 'native' => 'པོད་སྐད་', 'regional' => 'bo_IN'],
        //'dz'          => ['name' => 'Dzongkha',               'script' => 'Tibt', 'native' => 'རྫོང་ཁ', 'regional' => 'dz_BT'],
        //'my'          => ['name' => 'Burmese',                'script' => 'Mymr', 'native' => 'မြန်မာဘာသာ', 'regional' => 'my_MM'],
        //'ka'          => ['name' => 'Georgian',               'script' => 'Geor', 'native' => 'ქართული', 'regional' => 'ka_GE'],
        //'byn'         => ['name' => 'Blin',                   'script' => 'Ethi', 'native' => 'ብሊን', 'regional' => 'byn_ER'],
        //'tig'         => ['name' => 'Tigre',                  'script' => 'Ethi', 'native' => 'ትግረ', 'regional' => 'tig_ER'],
        //'ti'          => ['name' => 'Tigrinya',               'script' => 'Ethi', 'native' => 'ትግርኛ', 'regional' => 'ti_ET'],
        //'am'          => ['name' => 'Amharic',                'script' => 'Ethi', 'native' => 'አማርኛ', 'regional' => 'am_ET'],
        //'wal'         => ['name' => 'Wolaytta',               'script' => 'Ethi', 'native' => 'ወላይታቱ', 'regional' => 'wal_ET'],
        //'chr'         => ['name' => 'Cherokee',               'script' => 'Cher', 'native' => 'ᏣᎳᎩ', 'regional' => ''],
        //'iu'          => ['name' => 'Inuktitut (Canadian Aboriginal Syllabics)', 'script' => 'Cans', 'native' => 'ᐃᓄᒃᑎᑐᑦ', 'regional' => 'iu_CA'],
        //'oj'          => ['name' => 'Ojibwa',                 'script' => 'Cans', 'native' => 'ᐊᓂᔑᓈᐯᒧᐎᓐ', 'regional' => ''],
        //'cr'          => ['name' => 'Cree',                   'script' => 'Cans', 'native' => 'ᓀᐦᐃᔭᐍᐏᐣ', 'regional' => ''],
        //'km'          => ['name' => 'Khmer',                  'script' => 'Khmr', 'native' => 'ភាសាខ្មែរ', 'regional' => 'km_KH'],
        //'mn-Mong'     => ['name' => 'Mongolian (Mongolian)',  'script' => 'Mong', 'native' => 'ᠮᠣᠨᠭᠭᠣᠯ ᠬᠡᠯᠡ', 'regional' => 'mn_MN'],
        //'shi-Tfng'    => ['name' => 'Tachelhit (Tifinagh)',   'script' => 'Tfng', 'native' => 'ⵜⴰⵎⴰⵣⵉⵖⵜ', 'regional' => ''],
        //'tzm'         => ['name' => 'Central Atlas Tamazight (Tifinagh)','script' => 'Tfng', 'native' => 'ⵜⴰⵎⴰⵣⵉⵖⵜ', 'regional' => ''],
        //'yue'         => ['name' => 'Yue',                    'script' => 'Hant', 'native' => '廣州話', 'regional' => 'yue_HK'],
        //'ja'          => ['name' => 'Japanese',               'script' => 'Jpan', 'native' => '日本語', 'regional' => 'ja_JP'],
        //'zh'          => ['name' => 'Chinese (Simplified)',   'script' => 'Hans', 'native' => '简体中文', 'regional' => 'zh_CN'],
        //'zh-Hant'     => ['name' => 'Chinese (Traditional)',  'script' => 'Hant', 'native' => '繁體中文', 'regional' => 'zh_CN'],
        //'ii'          => ['name' => 'Sichuan Yi',             'script' => 'Yiii', 'native' => 'ꆈꌠꉙ', 'regional' => ''],
        //'vai'         => ['name' => 'Vai (Vai)',              'script' => 'Vaii', 'native' => 'ꕙꔤ', 'regional' => ''],
        //'jv-Java'     => ['name' => 'Javanese (Javanese)',    'script' => 'Java', 'native' => 'ꦧꦱꦗꦮ', 'regional' => ''],
        //'ko'          => ['name' => 'Korean',                 'script' => 'Hang', 'native' => '한국어', 'regional' => 'ko_KR'],
    ],

    // Requires middleware `LaravelSessionRedirect.php`.
    //
    // Automatically determine locale from browser (https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Accept-Language)
    // on first call if it's not defined in the URL. Redirect user to computed localized url.
    // For example, if users browser language is `de`, and `de` is active in the array `supportedLocales`,
    // the `/about` would be redirected to `/de/about`.
    //
    // The locale will be stored in session and only be computed from browser
    // again if the session expires.
    //
    // If false, system will take app.php locale attribute
    'useAcceptLanguageHeader' => true,

    // If `hideDefaultLocaleInURL` is true, then a url without locale
    // is identical with the same url with default locale.
    // For example, if `en` is default locale, then `/en/about` and `/about`
    // would be identical.
    //
    // If in addition the middleware `LaravelLocalizationRedirectFilter` is active, then
    // every url with default locale is redirected to url without locale.
    // For example, `/en/about` would be redirected to `/about`.
    // It is recommended to use `hideDefaultLocaleInURL` only in
    // combination with the middleware `LaravelLocalizationRedirectFilter`
    // to avoid duplicate content (SEO).
    //
    // If `useAcceptLanguageHeader` is true, then the first time
    // the locale will be determined from browser and redirect to that language.
    // After that, `hideDefaultLocaleInURL` behaves as usual.
    'hideDefaultLocaleInURL' => false,

    // If you want to display the locales in particular order in the language selector you should write the order here.
    //CAUTION: Please consider using the appropriate locale code otherwise it will not work
    //Example: 'localesOrder' => ['es','en'],
    'localesOrder' => [],

    //  If you want to use custom lang url segments like 'at' instead of 'de-AT', you can use the mapping to tallow the LanguageNegotiator to assign the descired locales based on HTTP Accept Language Header. For example you want ot use 'at', so map HTTP Accept Language Header 'de-AT' to 'at' (['de-AT' => 'at']).
    'localesMapping' => [],

    // Locale suffix for LC_TIME and LC_MONETARY
    // Defaults to most common ".UTF-8". Set to blank on Windows systems, change to ".utf8" on CentOS and similar.
    'utf8suffix' => env('LARAVELLOCALIZATION_UTF8SUFFIX', '.UTF-8'),

    // URLs which should not be processed, e.g. '/nova', '/nova/*', '/nova-api/*' or specific application URLs
    // Defaults to []
    'urlsIgnored' => ['/skipped'],

    'httpMethodsIgnored' => ['POST', 'PUT', 'PATCH', 'DELETE'],
];
