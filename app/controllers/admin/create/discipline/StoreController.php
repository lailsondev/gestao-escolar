<?php

use App\Models\admin\discipline\Discipline;

$filtedInput = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

$clearedString = clearString($filtedInput);

if (!empty($filtedInput)) {
    $discipline = new Discipline;
    $data = [
        'name' => $filtedInput,
        'slug' => clearString($filtedInput)
    ];

    $result = $discipline->find('name', $filtedInput);

    if (count((array)$result) > 1)
        return header('Location: /cadastrar/disciplina');

    $discipline->save($data);
}

header('Location: /cadastrar/disciplina');