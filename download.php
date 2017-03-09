<?php

// Bootstrap
if(
    ( isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && ($_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') )
    || isset($_SERVER['HTTPS'])
) {
    $scheme = 'https';
} else {
    $scheme = 'http';
}

@include_once('info.php');

$download_count++;
@file_put_contents('count.txt', $download_count);

// Download
if (isset($_GET['file'])) {
    $file = $_GET['file'];
} else {
    $os = isset($_GET['os']) ? $_GET['os'] : 'windows';
    $version = isset($_GET['v']) ? $_GET['v'] : $current_version;

    if ($os == 'darwin' || $os == 'mac') $ext = 'dmg';
    if ($os == 'win32' || $os == 'windows') {
        $os = 'windows'; $ext = 'exe';
    }
    if ($os == 'linux') {
        $version = '1.0.0'; $ext = 'zip';
    }

    $ext = isset($_GET['ext']) ? $_GET['ext'] : $ext;
    $file = "$version/firebase-admin-$os-$version.$ext";
}

if (!isset($location)) {
    $location = "Location: $scheme://firebaseadmin.com/downloads/$file";
}

header($location);
exit;
