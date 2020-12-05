<?php

use App\Models\admin\discipline\Discipline;

$discipline = new Discipline;
$disciplines = $discipline->all();

$layout->add('admin.teacher.create');
