<?php
return array(
    'statuslib' => array(
        'array_mapper_path' => 'data/statuslib.php',
    ),
    'zf-mvc-auth' => array(
        'authentication' => array(
            'adapters' => array(
                'status' => array(
                    'adapter' => 'ZF\\MvcAuth\\Authentication\\HttpAdapter',
                    'options' => array(
                        'accept_schemes' => array(
                            0 => 'basic',
                        ),
                        'realm' => 'api',
                        'htpasswd' => 'data/htpasswd',
                    ),
                ),
            ),
        ),
    ),
);
