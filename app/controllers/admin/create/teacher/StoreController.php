<?php

use App\Models\admin\teacher\Teacher;

$postArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (! in_array('', $postArray)) {
    $teacher = new Teacher;

    $data = [
        'full_name' => $postArray['name'],
        'discipline' => $postArray['discipline']
    ];

    if ($teacher->isGreaterThanOne($postArray))
        $data['discipline'] = $teacher->iteratorData($postArray);

    $teacher->save($data);
}

return header('Location: /cadastrar/professor');
