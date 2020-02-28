<?php

$admin_option_defs = array();
$admin_option_defs['Administration']['pluginA'] = array(
    'Administration',
    'LBL_ADMIN_A',
    'LBL_ADMIN_DESCRIPTION_A',
    './index.php?module=Leads&action=ListView'
);

$admin_group_header[] = array(
    'LBL_SECTION_HEADER_A',
    '',
    false,
    $admin_option_defs,
    'LBL_SECTION_DESCRIPTION_A'
);