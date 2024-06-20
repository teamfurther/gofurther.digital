<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'A(z) :attribute el kell legyen fogadva!',
    'active_url' => 'A(z) :attribute nem érvényes url!',
    'after' => 'A(z) :attribute :date utáni dátum kell, hogy legyen!',
    'after_or_equal' => 'A(z) :attribute nem lehet korábbi dátum, mint :date!',
    'alpha' => 'A(z) :attribute kizárólag betűket tartalmazhat!',
    'alpha_dash' => 'A(z) :attribute kizárólag betűket, számokat és kötőjeleket tartalmazhat!',
    'alpha_num' => 'A(z) :attribute kizárólag betűket és számokat tartalmazhat!',
    'array' => 'A(z) :attribute egy tömb kell, hogy legyen!',
    'ascii' => 'A(z) :attribute csak egy bites alfanumerikus karaktereket és szimbólumokat tartalmazhat.',
    'before' => 'A(z) :attribute :date előtti dátum kell, hogy legyen!',
    'before_or_equal' => 'A(z) :attribute nem lehet későbbi dátum, mint :date!',
    'between' => [
        'array' => 'A(z) :attribute :min - :max közötti elemet kell, hogy tartalmazzon!',
        'numeric' => 'A(z) :attribute :min és :max közötti szám kell, hogy legyen!',
        'file' => 'A(z) :attribute mérete :min és :max kilobájt között kell, hogy legyen!',
        'string' => 'A(z) :attribute hossza :min és :max karakter között kell, hogy legyen!',
    ],
    'boolean' => 'A(z) :attribute mező csak true vagy false értéket kaphat!',
    'confirmed' => 'A(z) :attribute nem egyezik a megerősítéssel.',
    'date' => 'A(z) :attribute nem érvényes dátum.',
    'date_equals' => 'A(z) :attribute egyenlő kell legyen a(z) :date. értékkel',
    'date_format' => 'A(z) :attribute nem egyezik az alábbi dátum formátummal :format!',
    'decimal' => 'A(z) :attribute pontosan :decimal tizedest kell tartalmazzon.',
    'different' => 'A(z) :attribute és :other értékei különbözőek kell, hogy legyenek!',
    'digits' => 'A(z) :attribute :digits számjegyű kell, hogy legyen!',
    'digits_between' => 'A(z) :attribute értéke :min és :max közötti számjegy lehet!',
    'dimensions' => 'A(z) :attribute felbontása nem megfelelő.',
    'distinct' => 'A(z) :attribute értékének egyedinek kell lennie!',
    'doesnt_end_with' => 'A(z) :attribute nem végződhet a következőkkel: :values.',
    'doesnt_start_with' => 'A(z) :attribute nem kezdődhet a következőkkel: :values.',
    'email' => 'A(z) :attribute nem érvényes email formátum.',
    'ends_with' => 'A(z) :attribute :values értékkel kell végződjön.',
    'exists' => 'A(z) :attribute már létezik.',
    'file' => 'A(z) :attribute fájl kell, hogy legyen!',
    'filled' => 'A(z) :attribute megadása kötelező!',
    'gt' => [
        'array' => 'A(z) :attribute több, mint :value elemet kell, hogy tartalmazzon.',
        'numeric' => 'A(z) :attribute nagyobb kell, hogy legyen, mint :value!',
        'file' => 'A(z) :attribute mérete nagyobb kell, hogy legyen, mint :value kilobájt.',
        'string' => 'A(z) :attribute hosszabb kell, hogy legyen, mint :value karakter.',
    ],
    'gte' => [
        'array' => 'A(z) :attribute legalább :value elemet kell, hogy tartalmazzon.',
        'numeric' => 'A(z) :attribute nagyobb vagy egyenlő kell, hogy legyen, mint :value!',
        'file' => 'A(z) :attribute mérete nem lehet kevesebb, mint :value kilobájt.',
        'string' => 'A(z) :attribute hossza nem lehet kevesebb, mint :value karakter.',
    ],
    'image' => 'A(z) :attribute képfájl kell, hogy legyen!',
    'in' => 'A kiválasztott :attribute érvénytelen.',
    'in_array' => 'A(z) :attribute értéke nem található a(z) :other értékek között.',
    'integer' => 'A(z) :attribute értéke szám kell, hogy legyen!',
    'ip' => 'A(z) :attribute érvényes IP cím kell, hogy legyen!',
    'ipv4' => 'A(z) :attribute érvényes IPv4 cím kell, hogy legyen!',
    'ipv6' => 'A(z) :attribute érvényes IPv6 cím kell, hogy legyen!',
    'json' => 'A(z) :attribute érvényes JSON szöveg kell, hogy legyen!',
    'lowercase' => 'A(z) :attribute kisbetűkből kell álljon.',
    'lt' => [
        'array' => 'A(z) :attribute kevesebb, mint :value elemet kell, hogy tartalmazzon.',
        'numeric' => 'A(z) :attribute kisebb kell, hogy legyen, mint :value!',
        'file' => 'A(z) :attribute mérete kisebb kell, hogy legyen, mint :value kilobájt.',
        'string' => 'A(z) :attribute rövidebb kell, hogy legyen, mint :value karakter.',
    ],
    'lte' => [
        'array' => 'A(z) :attribute legfeljebb :value elemet kell, hogy tartalmazzon.',
        'numeric' => 'A(z) :attribute kisebb vagy egyenlő kell, hogy legyen, mint :value!',
        'file' => 'A(z) :attribute mérete nem lehet több, mint :value kilobájt.',
        'string' => 'A(z) :attribute hossza nem lehet több, mint :value karakter.',
    ],
    'max' => [
        'array' => 'A(z) :attribute legfeljebb :max elemet kell, hogy tartalmazzon.',
        'numeric' => 'A(z) :attribute értéke nem lehet nagyobb, mint :max!',
        'file' => 'A(z) :attribute mérete nem lehet több, mint :max kilobájt.',
        'string' => 'A(z) :attribute hossza nem lehet több, mint :max karakter.',
    ],
    'max_digits' => 'A(z) :attribute legtöbb :max számjegyű lehet.',
    'mimes' => 'A(z) :attribute kizárólag az alábbi fájlformátumok egyike lehet: :values.',
    'mimetypes' => 'A(z) :attribute kizárólag az alábbi fájlformátumok egyike lehet: :values.',
    'min' => [
        'array' => 'A(z) :attribute legalább :min elemet kell, hogy tartalmazzon.',
        'numeric' => 'A(z) :attribute értéke nem lehet kisebb, mint :min!',
        'file' => 'A(z) :attribute mérete nem lehet kevesebb, mint :min kilobájt.',
        'string' => 'A(z) :attribute hossza nem lehet kevesebb, mint :min karakter.',
    ],
    'min_digits' => 'A(z) :attribute legkevesebb :min számjegyű lehet.',
    'missing' => 'A(z) :attribute nem szerepelhet.',
    'missing_if' => 'A(z) :attribute nem szerepelhet ha :other értéke :value.',
    'missing_unless' => 'A(z) :attribute nem szerepelhet, kivéve ha :other értéke :value.',
    'missing_with' => 'A(z) :attribute nem szerepelhet ha :values érték szerepel.',
    'missing_with_all' => 'A(z) :attribute nem szerepelhet ha :values értékek szerepelnek.',
    'not_in' => 'A(z) :attribute értéke érvénytelen.',
    'not_regex' => 'A(z) :attribute format is invalid.',
    'numeric' => 'A(z) :attribute szám kell, hogy legyen!',
    'password' => [
        'letters' => 'A(z) :attribute legalább egy nagybetűt kell tartalmazzon.',
        'mixed' => 'A(z) :attribute legalább egy kis- és egy nagybetűt kell tartalmazzon.',
        'numbers' => 'A(z) :attribute legalább egy számot kell tartalmazzon.',
        'symbols' => 'A(z) :attribute legalább egy szimbólumot kell tartalmazzon.',
        'uncompromised' => 'A megadott :attribute egy adatszivárgásban szerepel. Válasszon egy másik értéket.',
    ],
    'present' => 'A(z) :attribute mező nem található!',
    'regex' => 'A(z) :attribute formátuma érvénytelen.',
    'required' => 'A(z) :attribute megadása kötelező!',
    'required_if' => 'A(z) :attribute megadása kötelező, ha a(z) :other értéke :value!',
    'required_if_accepted' => 'A(z) :attribute megadása kötelező, ha a(z) :other el lett fogadva.',
    'required_unless' => 'A(z) :attribute megadása kötelező, ha a(z) :other értéke nem :values!',
    'required_with' => 'A(z) :attribute megadása kötelező, ha a(z) :values érték létezik.',
    'required_with_all' => 'A(z) :attribute megadása kötelező, ha a(z) :values értékek léteznek.',
    'required_without' => 'A(z) :attribute megadása kötelező, ha a(z) :values érték nem létezik.',
    'required_without_all' => 'A(z) :attribute megadása kötelező, ha egyik :values érték sem létezik.',
    'same' => 'A(z) :attribute és :other mezőknek egyezniük kell!',
    'size' => [
        'array' => 'A(z) :attribute :size elemet kell tartalmazzon!',
        'numeric' => 'A(z) :attribute értéke :size kell, hogy legyen!',
        'file' => 'A(z) :attribute mérete :size kilobájt kell, hogy legyen!',
        'string' => 'A(z) :attribute hossza :size karakter kell, hogy legyen!',
    ],
    'starts_with' => 'A(z) :attribute :values értékkel kell kezdődjön.',
    'string' => 'A(z) :attribute szövegnek kell legyen.',
    'timezone' => 'A(z) :attribute nem létező időzona.',
    'unique' => 'A(z) :attribute már foglalt.',
    'uploaded' => 'A(z) :attribute feltöltése sikertelen.',
    'uppercase' => 'A(z) :attribute nagybetűkből kell álljon.',
    'url' => 'A(z) :attribute érvénytelen link.',
    'ulid' => 'A(z) :attribute egy ULID érték kell legyen.',
    'uuid' => 'A(z) :attribute egy UUID érték kell legyen.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name' => 'név',
        'password' => 'jelszó',
    ],

];
