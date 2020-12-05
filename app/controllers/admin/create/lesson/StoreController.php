<?php

use App\Models\admin\lesson\Lesson;

$postArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if ($postArray) {
    $lesson = new Lesson;

    $lesson->save($postArray);
}

return header('Location: /cadastrar/aula');
