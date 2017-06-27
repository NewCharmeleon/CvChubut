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

    'accepted'             => 'El :attribute debe ser aceptado.',
    'active_url'           => 'El :attribute no es una URL valida.',
    'after'                => 'El :attribute debe ser una fecha antes de :date.',
    'after_or_equal'       => 'El :attribute debe ser una fecha antes o igual a :date.',
    'alpha'                => 'El :attribute solo puede contener letras.',
    'alpha_dash'           => 'El :attribute solo puede contener letras, numeros o guiones.',
    'alpha_num'            => 'El :attribute solo puede contener letras y numeros.',
    'array'                => 'El :attribute debe ser un array.',
    'before'               => 'El :attribute debe ser una fecha mayor a :date.',
    'before_or_equal'      => 'El :attribute debe ser una fecha mayor o igual a :date.',
    'between'              => [
        'numeric' => 'El :attribute debe ser un numero entre :min y :max.',
        'file'    => 'El :attribute debe pesar entre :min y :max kilobytes.',
        'string'  => 'El :attribute debe tener entre :min y :max caracteres.',
        'array'   => 'El :attribute debe tener entre :min y :max items.',
    ],
    'boolean'              => 'El :attribute en el campo debe ser Verdadero o Falso.',
    'confirmed'            => 'La :attribute confirmacion no coincide.',
    'date'                 => 'La fecha :attribute no es una fecha valida.',
    'date_format'          => 'La fecha :attribute no posee el formato correcto :format.',
    'different'            => 'El :attribute y :other deben ser diferentes.',
    'digits'               => 'El :attribute debe ser de :digits digitos.',
    'digits_between'       => 'El :attribute debe tener entre :min y :max digitos.',
    'dimensions'           => 'El :attribute tiene una dimension de imagenes invalida.',
    'distinct'             => 'El :attribute del campo no debe ser duplicado',
    'email'                => 'El :attribute debe ser una direccion valida de E-Mail.',
    'exists'               => 'El valor del campo seleccionado :attribute es invalido.',
    'file'                 => 'El :attribute debe ser un archivo.',
    'filled'               => 'El campo :attribute es requerido.',
    'image'                => 'El :attribute debe ser una imagen.',
    'in'                   => 'El atributo seleccionado :attribute es invalido.',
    'in_array'             => 'El campo :attribute no existe en :other.',
    'integer'              => 'El :attribute debe ser un numero entero.',
    'ip'                   => 'El :attribute debe ser una direccion IP valida.',
    'json'                 => 'El :attribute debe ser una cadena valida de JSON.',
    'max'                  => [
        'numeric' => 'El :attribute no debe ser mayor que :max.',
        'file'    => 'El :attribute no debe ser mayor que :max kilobytes.',
        'string'  => 'El :attribute no debe ser mayor que :max caracteres.',
        'array'   => 'El :attribute no debe tener mas de :max items.',
    ],
    'mimes'                => 'El :attribute debe ser un archivo de tipo: :values.',
    'mimetypes'            => 'El :attribute debe ser una archivo de tipo: :values.',
    'min'                  => [
        'numeric' => 'El :attribute debe tener al menos un minimo de :min.',
        'file'    => 'El :attribute debe tener al menos :min kilobytes.',
        'string'  => 'El :attribute debe tener al menos :min caracteres.',
        'array'   => 'El :attribute debe tener al menos :min items.',
    ],
    'not_in'               => 'La seleccion :attribute es invalido.',
    'numeric'              => 'El atributo :attribute debe ser un numero.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El valor tiene :attribute formato invalido.',
    'required'             => 'El campo :attribute es requerido.',
    'required_if'          => 'El campo :attribute es requerido cuando :other es :value.',
    'required_unless'      => 'El campo :attribute es requerido a menos que :other este en :values.',
    'required_with'        => 'El campo :attribute es requerido cuando el valor :values esta presente.',
    'required_with_all'    => 'El campo :attribute es requerido cuando el valor :values esta presente.',
    'required_without'     => 'El campo :attribute es requerido cuando el valor :values no esta presente.',
    'required_without_all' => 'El campo :attribute es requerido cuando ninguno de los valores :values esta presente.',
    'same'                 => 'El atributo :attribute y el otro atributo :other no coinciden.',
    'size'                 => [
        'numeric' => 'El atributo :attribute debe ser de :size.',
        'file'    => 'El atributo :attribute debe ser de :size kilobytes.',
        'string'  => 'El atributo :attribute debe tener :size caracteres.',
        'array'   => 'El atributo :attribute debe contener :size items.',
    ],
    'string'               => 'El atributo :attribute debe ser un string.',
    'timezone'             => 'El atributo :attribute debe tener un time zone valido.',
    'unique'               => 'El atributo :attribute ha sido tomado.',
    'uploaded'             => 'El atributo :attribute fallo en la subida.',
    'url'                  => 'El atributo :attribute tiene un formato invalido.',

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

    'attributes' => [],

];
