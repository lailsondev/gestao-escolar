<?php

use App\Models\admin\frequency\Frequency;

$postArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if ($postArray) {

    $frequency = new Frequency;

    $frequency->save($postArray);

}

return header('Location: /cadastrar/frequencia');
