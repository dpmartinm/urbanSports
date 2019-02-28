<?php
require_once __DIR__ . '/../vendor/autoload.php';

use UrbanSports\GraphicEditor;

$graphicEditor = new GraphicEditor();

$cmd = trim(strtolower( readline("\n> Shapes Array: ") ));
readline_add_history($cmd);
var_dump($cmd);
$array = json_decode($cmd, true);
$shapes = $graphicEditor->drawGeometricShape($array['shapes']);

print $shapes;
