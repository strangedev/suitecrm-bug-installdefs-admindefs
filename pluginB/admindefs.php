<?php

$admin_option_defs = array();
$admin_option_defs['Administration']['pluginB'] = array(
    'Administration',
    'LBL_ADMIN_B',
    'LBL_ADMIN_DESCRIPTION_B',
    './index.php?module=Leads&action=ListView'
);

$admin_group_header[] = array(
    'LBL_SECTION_HEADER_B',
    '',
    false,
    $admin_option_defs,
    'LBL_SECTION_DESCRIPTION_B'
);