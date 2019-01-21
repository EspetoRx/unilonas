<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | O following language lines contain O default error messages used by
    | O validator class. Some of Ose rules have multiple versions such
    | as O size rules. Feel free to tweak each of Ose messages here.
    |
    */

    'accepted'             => 'O :attribute deve ser selecionado.',
    'active_url'           => 'O :attribute não é um atributo válido.',
    'after'                => 'O :attribute deve ser um data após a :date.',
    'after_or_equal'       => 'O :attribute deve ser anterior ou igual a :date.',
    'alpha'                => 'O :attribute pode conter apenas letras.',
    'alpha_dash'           => 'O :attribute pode conter apenas letras, números e traços.',
    'alpha_num'            => 'O :attribute pode conter apenas números.',
    'array'                => 'O :attribute deve ser um vetor.',
    'before'               => 'O :attribute deve ser uma data anterior a :date.',
    'before_or_equal'      => 'O :attribute deve ser uma data anterior ou igual a :date.',
    'between'              => [
        'numeric' => 'O :attribute deve estar entre :min e :max.',
        'file'    => 'O :attribute deve estar entre :min e :max kilobytes.',
        'string'  => 'O :attribute deve estar entre :min e :max characteres.',
        'array'   => 'O :attribute deve possuir entre :min e :max itens.',
    ],
    'boolean'              => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed'            => 'A confirmação de :attribute não se associa.',
    'date'                 => 'O :attribute não é uma data válida.',
    'date_format'          => 'O :attribute não é o mesmo do formato :format.',
    'different'            => 'O :attribute e :other devem ser diferentes.',
    'digits'               => 'O :attribute deve conter :digits digitos.',
    'digits_between'       => 'O :attribute deve estar entre :min e :max dígitos.',
    'dimensions'           => 'O :attribute possui dimensões incorretas de imagem.',
    'distinct'             => 'O campo :attribute possui valor duplicado de atributo.',
    'email'                => 'O :attribute deve ser um endereço de e-mail válido.',
    'exists'               => 'O :attribute selecionado é inválido.',
    'file'                 => 'O :attribute deve ser um arquivo.',
    'filled'               => 'O campo :attribute deve possuir um valor.',
    'gt'                   => [
        'numeric' => 'O :attribute deve ser maior que :value.',
        'file'    => 'O :attribute deve ser maior que :value kilobytes.',
        'string'  => 'O :attribute deve ser maior que :value characters.',
        'array'   => 'O :attribute deve possuir mais que :value itens.',
    ],
    'gte'                  => [
        'numeric' => 'O :attribute deve ser maior ou igual a :value.',
        'file'    => 'O :attribute deve ser maior ou igual a :value kilobytes.',
        'string'  => 'O :attribute deve ser maior ou igual a :value characters.',
        'array'   => 'O :attribute deve possuir :value itens ou mais.',
    ],
    'image'                => 'O :attribute deve ser uma imagem.',
    'in'                   => 'O :attribute selecionado é inválido.',
    'in_array'             => 'O campo :attribute não existe em :other.',
    'integer'              => 'O :attribute deve ser um inteiro.',
    'ip'                   => 'O :attribute deve ser um endereço de IP válido.',
    'json'                 => 'O :attribute deve ser um endereço de IPv4 válido..',
    'ipv6'                 => 'O :attribute deve ser um endereço de IPv6 válido..',
    'ipv4'                 => 'O :attribute deve ser um arquivo JSON válido.',
    'lt'                   => [
        'numeric' => 'O :attribute deve ser menor que :value.',
        'file'    => 'O :attribute deve ser menor que :value kilobytes.',
        'string'  => 'O :attribute deve ser menor que :value characteres.',
        'array'   => 'O :attribute deve possuir menos de :value itens.',
    ],
    'lte'                  => [
        'numeric' => 'O :attribute deve ser menor que ou igual a :value.',
        'file'    => 'O :attribute deve ser menor que ou igual a :value kilobytes.',
        'string'  => 'O :attribute deve ser menor que ou igual a :value characteres.',
        'array'   => 'O :attribute não pode possuir mais que :value itens.',
    ],
    'max'                  => [
        'numeric' => 'O :attribute não pode ser maior que :max.',
        'file'    => 'O :attribute não pode ser maior que :max kilobytes.',
        'string'  => 'O :attribute não pode ser maior que :max characteres.',
        'array'   => 'O :attribute não pode exceder :max itens.',
    ],
    'mimes'                => 'O :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes'            => 'O :attribute deve ser um arquivo do tipo: :values.',
    'min'                  => [
        'numeric' => 'O :attribute deve ser no míniomo :min.',
        'file'    => 'O :attribute deve ser no mínimo :min kilobytes.',
        'string'  => 'O :attribute deve ser no mínimo :min characteres.',
        'array'   => 'O :attribute deve possuir no mínimo :min itens.',
    ],
    'not_in'               => 'O :attribute selecionado é inválido.',
    'not_regex'            => 'O :attribute formato é inválido.',
    'numeric'              => 'O :attribute deve ser um número.',
    'present'              => 'O campo :attribute deve estar presente.',
    'regex'                => 'O :attribute formato é inválido.',
    'required'             => 'O campo :attribute é obrigatório.',
    'required_if'          => 'O campo :attribute é obrigatório quando :otherr é :value.',
    'required_unless'      => 'O cammpo :attribute é obrigatório a não ser que :otherr esteja entre :values.',
    'required_with'        => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values não estão presentes.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values estão presentes.',
    'same'                 => 'O :attribute e :other devem ser iguais.',
    'size'                 => [
        'numeric' => 'O :attribute deve ter :size.',
        'file'    => 'O :attribute deve ter :size kilobytes.',
        'string'  => 'O :attribute deve ter :size characters.',
        'array'   => 'O :attribute deve conter :size itens.',
    ],
    'string'               => 'O :attribute deve ser uma string.',
    'timezone'             => 'O :attribute deve ser umaa zona válida.',
    'unique'               => 'O :attribute já existe.',
    'uploaded'             => 'O :attribute falhou ao ser atualizado.',
    'url'                  => 'O :attribute formato é inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using O
    | convention "attribute.rule" to name O lines. This makes it quick to
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
    | O following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'email' => 'e-mail',
        'password' => 'senha'
    ],

];
