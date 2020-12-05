<?php

use App\Models\admin\classRegistration\Room;
use App\Models\admin\classRegistration\Serie;

$series = (new Serie)->all();
$rooms = (new Room)->all();

$layout->add('admin.student.create');
