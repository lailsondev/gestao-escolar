<?php

use App\Models\admin\student\Student;

$postArray = filter_input_array(INPUT_POST, FILTER_SANITIZE_NUMBER_INT);

if ($postArray) {
    $student = new Student;
    $studentFound = (!empty($postArray['rg'])) ?
                    $student->find('rg', $postArray['rg']) :
                    $student->find('id', $postArray['id']);

    return header("Location: /cadastrar/frequencia?id={$studentFound->id}");
}

return header('Location: /consultar/aluno');
