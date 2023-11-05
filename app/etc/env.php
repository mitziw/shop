<?php
return [
    'backend' => [
        'frontName' => 'admin123'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'DgxEqfoFKrrhXkkPmpiV6DZHpNS8u86B'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => '6da_'
            ],
            'page_cache' => [
                'id_prefix' => '6da_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'ehtn9drk5vfzr0mca5zxfjwhi4o2eyzy'
    ],
    'db' => [
        'table_prefix' => 'mgpa_',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'thundfv7_mage305',
                'username' => 'thundfv7_mage305',
                'password' => '-6p.S.6)e5EH]3bd',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'db'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 0,
        'layout' => 0,
        'block_html' => 0,
        'collections' => 0,
        'reflection' => 0,
        'db_ddl' => 0,
        'compiled_config' => 1,
        'eav' => 0,
        'customer_notification' => 0,
        'config_integration' => 0,
        'config_integration_api' => 0,
        'full_page' => 0,
        'config_webservice' => 0,
        'translate' => 0
    ],
    'downloadable_domains' => [
        'shop.thunderboltchallenge.com'
    ],
    'install' => [
        'date' => 'Tue, 17 Oct 2023 09:59:31 -0400'
    ]
];
