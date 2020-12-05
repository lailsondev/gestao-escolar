<?php

use App\Models\admin\student\Student;
use App\Models\admin\discipline\Discipline;
use App\Models\admin\teacher\Teacher;

$students = (new Student)->all();
$disciplines = (new Discipline)->all();
$teachers = (new Teacher)->all();

if (isset($_GET['id']) && !empty($_GET['id'])) {

    $filtedId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);

    $studentFound = (new Student)->findById('id', (int)$filtedId);
}

$layout->add('admin.frequency.create');
