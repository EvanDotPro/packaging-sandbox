<?php
return array(
    'modules' => array(
        'Package',
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            '.',
        ),
    ),
);
