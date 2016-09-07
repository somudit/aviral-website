<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/SHAW-IN-057/aviral-ceevee-website/user/config/system.yaml',
    'modified' => 1473044792,
    'data' => [
        'home' => [
            'alias' => '/home'
        ],
        'pages' => [
            'theme' => 'ceevee',
            'process' => [
                'markdown' => true,
                'twig' => false
            ],
            'markdown' => [
                'extra' => true
            ]
        ],
        'cache' => [
            'enabled' => false,
            'check' => [
                'method' => 'file'
            ],
            'driver' => 'auto',
            'prefix' => 'g'
        ],
        'twig' => [
            'cache' => true,
            'debug' => true,
            'auto_reload' => true,
            'autoescape' => false
        ],
        'assets' => [
            'css_pipeline' => false,
            'css_minify' => true,
            'css_rewrite' => true,
            'js_pipeline' => false,
            'js_minify' => true
        ],
        'debugger' => [
            'enabled' => false,
            'twig' => true,
            'shutdown' => [
                'close_connection' => true
            ]
        ]
    ]
];