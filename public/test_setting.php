<?php

require_once __DIR__ . '/../vendor/autoload.php';

echo "<pre>";

var_dump(file_exists(__DIR__ . '/../App/Models/Setting.php'));
var_dump(class_exists('App\Models\Setting'));