<?php

use App\Models\site\User;

$postArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$data = [
    'mail' => $postArray['input-mail'],
    'password' => $postArray['input-password']
];

$user = new User;
if ($user->hasUser($data))
    return header('location: /dashboard');

return header('location: /');