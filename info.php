<?php

$current_version = '1.0.1';
$download_count = @file_get_contents('count.txt');
$changes = [
    '1.0.1' => [
        'Windows, Mac Installer',
        'Update checker',
        'Configuration validator',
        'Connection test button',
    ],
    '1.0.0' => [
        'Create new multiple connections',
        'Service Account Json importer',
        'Delete connection',
        'Toggle sidebar',
        'Listing and selecting saved connections',
        'Explorer and Query mode',
        'Tree, Json and Raw output views',
        'Tree view objects in sidebar',
        'Sidebar Filtering',
        'Copy button to copy output to clipboard',
        'Preferences to change themes, Json theme and Fonts',
        'Button to navigate to firebase console',
        'Update checker link',
        'Initial realease',
    ],
];
