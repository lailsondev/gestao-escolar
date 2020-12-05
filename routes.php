<?php

$routes = [
    '/' => 'site/login/ReadController',
    '/login' => 'site/login/AuthController',
    // Rotas - Get - Cadastro
    '/cadastrar/turma' => 'admin/create/classRegistration/ClassController',
    '/cadastrar/professor' => 'admin/create/teacher/TeacherController',
    '/cadastrar/disciplina' => 'admin/create/discipline/DisciplineController',
    '/cadastrar/aula' => 'admin/create/lesson/LessonController',
    '/cadastrar/aluno' => 'admin/create/student/StudentController',
    '/cadastrar/frequencia' => 'admin/create/frequency/FrequencyController',
    // Rotas - Get - Consulta
    '/dashboard' => 'admin/read/HomeController',
    '/consultar/aluno' => 'admin/read/student/StudentController',
    '/consultar/aula' => 'admin/read/lesson/LessonController',
    '/consultar/frequencia' => 'admin/read/frequency/FrequencyController',
    // Rota - Get - Serviços
    '/servicos/informar-pais' => 'admin/services/SendMailController',
    // Rotas - Post - Cadastro
    '/class/store' => 'admin/create/classRegistration/StoreController',
    '/teacher/store' => 'admin/create/teacher/StoreController',
    '/discipline/store' => 'admin/create/discipline/StoreController',
    '/lesson/store' => 'admin/create/lesson/StoreController',
    '/student/store' => 'admin/create/student/StoreController',
    '/frequency/store' => 'admin/create/frequency/StoreController',
    // Rotas - Consulta - Posts
    '/student/find' => 'admin/read/student/FindController'
];