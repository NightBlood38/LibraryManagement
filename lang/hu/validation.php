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
    'accepted' => 'A(z) :attribute mezőt el kell fogadni.',
    'accepted_if' => 'A(z) :attribute mezőt akkor kell elfogadni, ha a(z) :other :value.',
    'active_url' => 'A(z) :attribute mezőnek érvényes URL-nek kell lennie.',
    'after' => 'A(z) :attribute mezőnek későbbi dátumnak kell lennie, mint :date.',
    'after_or_equal' => 'A(z) :attribute mezőnek későbbi vagy egyenlő dátumnak kell lennie, mint :date.',
    'alpha' => 'A(z) :attribute mező csak betűket tartalmazhat.',
    'alpha_dash' => 'A(z) :attribute mező csak betűket, számokat, kötőjeleket és aláhúzásokat tartalmazhat.',
    'alpha_num' => 'A(z) :attribute mező csak betűket és számokat tartalmazhat.',
    'array' => 'A(z) :attribute mezőnek tömbnek kell lennie.',
    'ascii' => 'A(z) :attribute mező csak egyszerű alfanumerikus karaktereket és szimbólumokat tartalmazhat.',
    'before' => 'A(z) :attribute mezőnek korábbi dátumnak kell lennie, mint :date.',
    'before_or_equal' => 'A(z) :attribute mezőnek korábbi vagy egyenlő dátumnak kell lennie, mint :date.',
    'between' => [
        'array' => 'A(z) :attribute mezőnek :min és :max közötti elemmel kell rendelkeznie.',
        'file' => 'A(z) :attribute mezőnek :min és :max kilobájt közötti méretűnek kell lennie.',
        'numeric' => 'A(z) :attribute mezőnek :min és :max közötti értékkel kell rendelkeznie.',
        'string' => 'A(z) :attribute mezőnek :min és :max karakter közöttinek kell lennie.',
    ],
    'boolean' => 'A(z) :attribute mezőnek igaznak vagy hamisnak kell lennie.',
    'can' => 'A(z) :attribute mező egy nem engedélyezett értéket tartalmaz.',
    'confirmed' => 'A(z) :attribute mező és megerősítése nem egyeznek.',
    'contains' => 'A(z) :attribute mező hiányzik egy kötelező értékből.',
    'current_password' => 'A jelszó helytelen.',
    'date' => 'A(z) :attribute mezőnek érvényes dátumnak kell lennie.',
    'date_equals' => 'A(z) :attribute mezőnek egyenlő dátumnak kell lennie a következővel: :date.',
    'date_format' => 'A(z) :attribute mezőnek meg kell egyeznie a következő formátummal: :format.',
    'decimal' => 'A(z) :attribute mezőnek :decimal tizedesjeggyel kell rendelkeznie.',
    'declined' => 'A(z) :attribute mezőt el kell utasítani.',
    'declined_if' => 'A(z) :attribute mezőt el kell utasítani, ha a(z) :other :value.',
    'different' => 'A(z) :attribute mezőnek különbözőnek kell lennie a(z) :other-től.',
    'digits' => 'A(z) :attribute mezőnek :digits számjegyből kell állnia.',
    'digits_between' => 'A(z) :attribute mezőnek :min és :max számjegy között kell lennie.',
    'dimensions' => 'A(z) :attribute mezőnek érvénytelen képméretei vannak.',
    'distinct' => 'A(z) :attribute mezőnek ismétlődő értékkel kell rendelkeznie.',
    'doesnt_end_with' => 'A(z) :attribute mező nem végződhet az alábbiakkal: :values.',
    'doesnt_start_with' => 'A(z) :attribute mező nem kezdődhet az alábbiakkal: :values.',
    'email' => 'A(z) :attribute mezőnek érvényes email címnek kell lennie.',
    'ends_with' => 'A(z) :attribute mezőnek az alábbiakkal kell végződnie: :values.',
    'enum' => 'A kiválasztott :attribute érvénytelen.',
    'exists' => 'A kiválasztott :attribute érvénytelen.',
    'extensions' => 'A(z) :attribute mezőnek a következő kiterjesztések egyikével kell rendelkeznie: :values.',
    'file' => 'A(z) :attribute mezőnek fájlnak kell lennie.',
    'filled' => 'A(z) :attribute mezőnek értékkel kell rendelkeznie.',
    'gt' => [
        'array' => 'A(z) :attribute mezőnek több elemmel kell rendelkeznie, mint :value.',
        'file' => 'A(z) :attribute mezőnek nagyobbnak kell lennie, mint :value kilobájt.',
        'numeric' => 'A(z) :attribute mezőnek nagyobbnak kell lennie, mint :value.',
        'string' => 'A(z) :attribute mezőnek nagyobbnak kell lennie, mint :value karakter.',
    ],
    'gte' => [
        'array' => 'A(z) :attribute mezőnek :value elemmel vagy többel kell rendelkeznie.',
        'file' => 'A(z) :attribute mezőnek nagyobbnak vagy egyenlőnek kell lennie, mint :value kilobájt.',
        'numeric' => 'A(z) :attribute mezőnek nagyobbnak vagy egyenlőnek kell lennie, mint :value.',
        'string' => 'A(z) :attribute mezőnek nagyobbnak vagy egyenlőnek kell lennie, mint :value karakter.',
    ],
    'hex_color' => 'A(z) :attribute mezőnek érvényes hexadecimális színnel kell rendelkeznie.',
    'image' => 'A(z) :attribute mezőnek képnek kell lennie.',
    'in' => 'A kiválasztott :attribute érvénytelen.',
    'in_array' => 'A(z) :attribute mezőnek léteznie kell a(z) :other-ban.',
    'integer' => 'A(z) :attribute mezőnek egész számnak kell lennie.',
    'ip' => 'A(z) :attribute mezőnek érvényes IP címnek kell lennie.',
    'ipv4' => 'A(z) :attribute mezőnek érvényes IPv4 címnek kell lennie.',
    'ipv6' => 'A(z) :attribute mezőnek érvényes IPv6 címnek kell lennie.',
    'json' => 'A(z) :attribute mezőnek érvényes JSON szövegnek kell lennie.',
    'list' => 'A(z) :attribute mezőnek listának kell lennie.',
    'lowercase' => 'A(z) :attribute mezőnek kisbetűsnek kell lennie.',
    'lt' => [
        'array' => 'A(z) :attribute mezőnek kevesebb elemmel kell rendelkeznie, mint :value.',
        'file' => 'A(z) :attribute mezőnek kisebbnek kell lennie, mint :value kilobájt.',
        'numeric' => 'A(z) :attribute mezőnek kisebbnek kell lennie, mint :value.',
        'string' => 'A(z) :attribute mezőnek kisebbnek kell lennie, mint :value karakter.',
    ],
    'lte' => [
        'array' => 'A(z) :attribute mezőnek nem lehet több eleme, mint :value.',
        'file' => 'A(z) :attribute mezőnek kisebbnek vagy egyenlőnek kell lennie, mint :value kilobájt.',
        'numeric' => 'A(z) :attribute mezőnek kisebbnek vagy egyenlőnek kell lennie, mint :value.',
        'string' => 'A(z) :attribute mezőnek kisebbnek vagy egyenlőnek kell lennie, mint :value karakter.',
    ],
    'mac_address' => 'A(z) :attribute mezőnek érvényes MAC címnek kell lennie.',
    'max' => [
        'array' => 'A(z) :attribute mező nem tartalmazhat több mint :max elemet.',
        'file' => 'A(z) :attribute mező nem lehet nagyobb, mint :max kilobájt.',
        'numeric' => 'A(z) :attribute mező nem lehet nagyobb, mint :max.',
        'string' => 'A(z) :attribute mező nem lehet nagyobb, mint :max karakter.',
    ],
    'max_digits' => 'A(z) :attribute mező nem tartalmazhat több mint :max számjegyet.',
    'mimes' => 'A(z) :attribute mezőnek a következő típusú fájlnak kell lennie: :values.',
    'mimetypes' => 'A(z) :attribute mezőnek a következő típusú fájlnak kell lennie: :values.',
    'min' => [
        'array' => 'A(z) :attribute mezőnek legalább :min elemmel kell rendelkeznie.',
        'file' => 'A(z) :attribute mezőnek legalább :min kilobájt méretűnek kell lennie.',
        'numeric' => 'A(z) :attribute mezőnek legalább :min értékűnek kell lennie.',
        'string' => 'A(z) :attribute mezőnek legalább :min karakter hosszúnak kell lennie.',
    ],
    'min_digits' => 'A(z) :attribute mezőnek legalább :min számjegyet kell tartalmaznia.',
    'missing' => 'A(z) :attribute mezőnek hiányoznia kell.',
    'missing_if' => 'A(z) :attribute mezőnek hiányoznia kell, ha a(z) :other :value.',
    'missing_unless' => 'A(z) :attribute mezőnek hiányoznia kell, kivéve, ha a(z) :other :value.',
    'missing_with' => 'A(z) :attribute mezőnek hiányoznia kell, ha a(z) :values jelen van.',
    'missing_with_all' => 'A(z) :attribute mezőnek hiányoznia kell, ha a(z) :values jelen van.',
    'multiple_of' => 'A(z) :attribute mezőnek a következő többszörösének kell lennie: :value.',
    'not_in' => 'A kiválasztott :attribute érvénytelen.',
    'not_regex' => 'A(z) :attribute mező formátuma érvénytelen.',
    'numeric' => 'A(z) :attribute mezőnek számnak kell lennie.',
    'password' => [
        'letters' => 'A(z) :attribute mezőnek tartalmaznia kell legalább egy betűt.',
        'mixed' => 'A(z) :attribute mezőnek tartalmaznia kell legalább egy nagybetűt és egy kisbetűt.',
        'numbers' => 'A(z) :attribute mezőnek tartalmaznia kell legalább egy számot.',
        'symbols' => 'A(z) :attribute mezőnek tartalmaznia kell legalább egy szimbólumot.',
        'uncompromised' => 'A megadott :attribute egy adatvédelmi incidens során kiszivárgott. Kérjük, válasszon másik :attribute-t.',
    ],
    'present' => 'A(z) :attribute mezőnek jelen kell lennie.',
    'present_if' => 'A(z) :attribute mezőnek jelen kell lennie, ha a(z) :other :value.',
    'present_unless' => 'A(z) :attribute mezőnek jelen kell lennie, kivéve, ha a(z) :other :value.',
    'present_with' => 'A(z) :attribute mezőnek jelen kell lennie, ha a(z) :values jelen van.',
    'present_with_all' => 'A(z) :attribute mezőnek jelen kell lennie, ha a(z) :values jelen van.',
    'prohibited' => 'A(z) :attribute mező tiltott.',
    'prohibited_if' => 'A(z) :attribute mező tiltott, ha a(z) :other :value.',
    'prohibited_unless' => 'A(z) :attribute mező tiltott, kivéve, ha a(z) :other a következők egyikében van: :values.',
    'prohibits' => 'A(z) :attribute mező tiltja, hogy a(z) :other jelen legyen.',
    'regex' => 'A(z) :attribute mező formátuma érvénytelen.',
    'required' => 'A(z) :attribute mező kötelező.',
    'required_array_keys' => 'A(z) :attribute mezőnek a következő bejegyzéseket kell tartalmaznia: :values.',
    'required_if' => 'A(z) :attribute mező kötelező, ha a(z) :other :value.',
    'required_if_accepted' => 'A(z) :attribute mező kötelező, ha a(z) :other el van fogadva.',
    'required_if_declined' => 'A(z) :attribute mező kötelező, ha a(z) :other el van utasítva.',
    'required_unless' => 'A(z) :attribute mező kötelező, kivéve, ha a(z) :other a következők egyikében van: :values.',
    'required_with' => 'A(z) :attribute mező kötelező, ha a(z) :values jelen van.',
    'required_with_all' => 'A(z) :attribute mező kötelező, ha a(z) :values jelen van.',
    'required_without' => 'A(z) :attribute mező kötelező, ha a(z) :values nincs jelen.',
    'required_without_all' => 'A(z) :attribute mező kötelező, ha egyik :values sincs jelen.',
    'same' => 'A(z) :attribute mezőnek meg kell egyeznie a(z) :other mezővel.',
    'size' => [
        'array' => 'A(z) :attribute mezőnek :size elemet kell tartalmaznia.',
        'file' => 'A(z) :attribute mezőnek :size kilobájtnak kell lennie.',
        'numeric' => 'A(z) :attribute mezőnek :size értékűnek kell lennie.',
        'string' => 'A(z) :attribute mezőnek :size karakter hosszúnak kell lennie.',
    ],
    'starts_with' => 'A(z) :attribute mezőnek az alábbiak egyikével kell kezdődnie: :values.',
    'string' => 'A(z) :attribute mezőnek szövegnek kell lennie.',
    'timezone' => 'A(z) :attribute mezőnek érvényes időzónának kell lennie.',
    'unique' => 'A(z) :attribute már foglalt.',
    'uploaded' => 'A(z) :attribute feltöltése sikertelen.',
    'uppercase' => 'A(z) :attribute mezőnek nagybetűsnek kell lennie.',
    'url' => 'A(z) :attribute mezőnek érvényes URL-nek kell lennie.',
    'ulid' => 'A(z) :attribute mezőnek érvényes ULID-nak kell lennie.',
    'uuid' => 'A(z) :attribute mezőnek érvényes UUID-nak kell lennie.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => include 'fields.php',

];
