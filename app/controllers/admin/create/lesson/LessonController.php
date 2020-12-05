<?php

use App\Models\admin\classRegistration\Room;
use App\Models\admin\classRegistration\Serie;
use App\Models\admin\discipline\Discipline;
use App\Models\admin\teacher\Teacher;

$discipline = new Discipline;
$teacher = new Teacher;
$serie = new Serie;
$room = new Room;

$disciplines = $discipline->all();
$teachers = $teacher->all();
$series = $serie->all();
$rooms = $room->all();

$layout->add('admin.lesson.create');
