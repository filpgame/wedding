<?php

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults' => [
            'title' => "Lipe & Su", // set false to total remove
            'description' => 'Poderíamos escrever aqui uma linda frase, mas nada disso seria suficiente para descrever esse momento único que viveremos!', // set false to total remove
            'separator' => ' - ',
            'keywords' => ['casamento', 'felipe', 'suellen', 'Suellen & Felipe', 'sítio catavento'],
            'canonical' => null, // Set null for using Url::current(), set false to total remove
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google' => null,
            'bing' => null,
            'alexa' => null,
            'pinterest' => null,
            'yandex' => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title' => 'Lipe & Su', // set false to total remove
            'description' => 'Poderíamos escrever aqui uma linda frase, mas nada disso seria suficiente para descrever esse momento único que viveremos!', // set false to total remove
            'url' => null, // Set null for using Url::current(), set false to total remove
            'type' => false,
            'site_name' => false,
            'images' => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
];
