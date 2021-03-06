<?php

$manifest = array(
    'acceptable_sugar_versions' => array(
        'exact_matches' => array(
            1 => '6.5.15'
        ),
        'regex_matches' => array(
            1 => '6\.4\.\d',
            2 => '6\.[0-9]\.\d',
            3 => '7\.[0-9]\.\d'
        )
    ),
    'acceptable_sugar_flavors' => array(
        'CE',
        'PRO',
        'ENT',
        'CORP'
    ),
    'readme' => '',
    'key' => '',
    'author' => '',
    'description' => 'Example plugin',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'pluginB',
    'published_date' => '2020',
    'type' => 'module',
    'version' => 'v0.0.1',
    'remove_tables' => false
);

$installdefs = array(
    'id' => 'pluginB',
    'administration' => array(
        array(
            'from' => '<basepath>/admindefs.php'
        )
    )
);

$upgrade_manifest = array();
