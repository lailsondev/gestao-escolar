<?php

use App\Models\admin\student\Student;

$postArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if ($postArray) {
    $student = new Student;
    $student->save($postArray);
}

header('Location: /cadastrar/aluno');
