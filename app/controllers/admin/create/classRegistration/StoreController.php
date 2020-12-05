<?php

use App\Models\admin\classRegistration\Room;
use App\Models\admin\classRegistration\Serie;

$arrayPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if ($arrayPost) {
    $roomName = array('name' => $arrayPost['input-room']);
    $serieName = array('name' => $arrayPost['input-grade']);

    $serie = new Serie;
    $room = new Room;

    if (!in_array('', $serieName)) {
        $serie->save($serieName);
    }

    if (!in_array('', $roomName)) {
        $room->save($roomName);
    }
}

return header('Location: /cadastrar/turma');