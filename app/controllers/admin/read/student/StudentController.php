<?php

use App\Models\admin\student\Student;

$students = (new Student)->all();

$layout->add('admin.student.read');
