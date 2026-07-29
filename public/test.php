<?php

require_once '../vendor/autoload.php';

use App\Models\User;

$user = new User();

$result = $user->findByUsername('admin');

echo "<pre>";
print_r($result);
echo "</pre>";