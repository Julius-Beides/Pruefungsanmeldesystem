<?php
/**
 * Created by PhpStorm.
 * User: julian
 * Date: 25.05.18
 * Time: 15:49
 */

// https://stackoverflow.com/questions/1968106/generate-download-file-link-in-php#1968116

$filename = '../anmeldungen/anmeldungen.csv'; // of course find the exact filename....
header('Pragma: public');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Cache-Control: private', false); // required for certain browsers
header('Content-Type: application/csv');

header('Content-Disposition: attachment; filename="'. basename($filename) . '";');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($filename));

readfile($filename);

exit;