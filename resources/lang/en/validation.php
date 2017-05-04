<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | El campo following language lines contain El campo default error messages used by
    | El campo validator class. Some of El campose rules have multiple versions such
    | as El campo size rules. Feel free to tweak each of El campose messages here.
    |
    */

    'accepted'             => 'El campo :attribute debe ser aceptado.',
    'active_url'           => 'El campo :attribute no es una válida URL.',
    'after'                => 'El campo :attribute debe ser una fecha después de :date.',
    'alpha'                => 'El campo :attribute sólo puede contener letras.',
    'alpha_dash'           => 'El campo :attribute sólo puede contener letras, números, y guiones.',
    'alpha_num'            => 'El campo :attribute sólo puede contener letras y números.',
    'array'                => 'El campo :attribute debe ser una matriz.',
    'before'               => 'El campo :attribute debe ser una fecha antes de :date.',
    'between'              => [
        'numeric' => 'El campo :attribute debe estar entre :min and :max.',
        'file'    => 'El campo :attribute debe estar entre :min and :max kilobytes.',
        'string'  => 'El campo :attribute debe estar entre :min and :max caracteres.',
        'array'   => 'El campo :attribute debe tener entre :min and :max items.',
    ],
    'boolean'              => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed'            => 'La confirmación de la :attribute no coincide.',
    'date'                 => 'El campo :attribute no es un dato valido.',
    'date_format'          => 'El campo :attribute no coincide con el fomato :format.',
    'different'            => 'El campo :attribute y :oEl campor deben ser diferentes.',
    'digits'               => 'El campo :attribute debe tener :digits digitos.',
    'digits_between'       => 'El campo :attribute debe estar entre :min y :max digitos.',
    'distinct'             => 'El campo :attribute tiene un valor duplicado.',
    'email'                => 'El campo :attribute debe ser un email válido.',
    'exists'               => 'El campo seleccionado :attribute es invalido.',
    'filled'               => 'El campo :attribute es requerido completarlo.',
    'image'                => 'El campo :attribute debe ser una imagen.',
    'in'                   => 'El campo seleccionado :attribute es invalido.',
    'in_array'             => 'El campo :attribute no existe en :oEl campor.',
    'integer'              => 'El campo :attribute debe ser un integer.',
    'ip'                   => 'El campo :attribute debe ser una IP address válida.',
    'json'                 => 'El campo :attribute deber ser un VÁLIDO JSON string.',
    'max'                  => [
        'numeric' => 'El campo :attribute no puede ser mayor que:max.',
        'file'    => 'El campo :attribute no puede ser mayor que:max kilobytes.',
        'string'  => 'El campo :attribute no puede ser mayor que:max characters.',
        'array'   => 'El campo :attribute no puede tener mas de :max items.',
    ],
    'mimes'                => 'El campo :attribute debe ser un archivo de tipo :values.',
    'min'                  => [
        'numeric' => 'El campo :attribute al menos debe ser de :min.',
        'file'    => 'El campo :attribute al menos debe ser de :min kilobytes.',
        'string'  => 'El campo :attribute al menos debe ser de :min caracteres.',
        'array'   => 'El campo :attribute al menos debe ser de :min items.',
    ],
    'not_in'               => 'El campo selected :attribute es invalido.',
    'numeric'              => 'El campo :attribute debe ser un numero.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El campo :attribute tiene un formato invalido.',
    'required'             => 'El campo :attribute es requerido.',
    'required_if'          => 'El campo :attribute es necesario cuando :o El campo es :value.',
    'required_unless'      => 'El campo :attribute es obligatorio al menos que :o El campo esta en :values.',
    'required_with'        => 'El campo :attribute es necesario cuando :values esta presente.',
    'required_with_all'    => 'El campo :attribute es necesario cuando :values esta presente.',
    'required_without'     => 'El campo :attribute es necesario cuando :values no esta presente.',
    'required_without_all' => 'El campo :attribute es necesario cuando ningun :values esta presente.',
    'same'                 => 'El campo :attribute y el campo :o deben coincidir.',
    'size'                 => [
        'numeric' => 'El campo :attribute debe ser :size.',
        'file'    => 'El campo :attribute debe ser :size kilobytes.',
        'string'  => 'El campo :attribute debe ser :size characters.',
        'array'   => 'El campo :attribute debe contener :size items.',
    ],
    'string'               => 'El campo :attribute debe ser un string.',
    'timezone'             => 'El campo :attribute debe ser una zona horaria válida.',
    'unique'               => 'El campo :attribute ya ha sido tomado.',
    'url'                  => 'El campo :attribute tiene un formato invalido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using El campo
    | convention "attribute.rule" to name El campo lines. This makes it quick to
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
    | El campo following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
