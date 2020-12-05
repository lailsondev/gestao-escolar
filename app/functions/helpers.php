<?php

function dd($dump): void
{
    echo '<pre>';
    var_dump($dump);
    die();
}

function clearString(string $oldString): string
{
    $newString = preg_replace('/[^a-zA-Z\s]+/', null,
                                iconv('UTF-8', 'ASCII//TRANSLIT', $oldString));
    return str_replace(' ', '-', strtolower($newString));
}
