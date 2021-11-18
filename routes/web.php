<?php

use App\Controller\DocumentController;
use App\Controller\HomeController;
use App\Controller\LoginController;
use App\Controller\NewsController;
use App\Controller\ReportController;

route()->get('/', [HomeController::class, 'index']);
route()->get('/introduction', [HomeController::class, 'introduction']);
route()->get('/terms', [HomeController::class, 'terms']);

route()->get('/document', [DocumentController::class, 'index']);
route()->get('/document/add', [DocumentController::class, 'add']);
route()->post('/document/add', [DocumentController::class, 'create']);
route()->post('/document/delete', [DocumentController::class, 'delete']);
route()->get('/document/update', [DocumentController::class, 'showFormUpdate']);
route()->post('/document/update', [DocumentController::class, 'update']);

route()->get('/login', [LoginController::class, 'index']);
route()->post('/login', [LoginController::class, 'login']);
route()->get('/logout', [LoginController::class, 'logout']);

route()->get('/reports/add', [ReportController::class, 'showCreateForm']);
route()->post('/reports/add', [ReportController::class, 'create']);
route()->get('/reports/lookup', [ReportController::class, 'showLookupForm']);

route()->get('/news', [NewsController::class, 'index']);
route()->get('/news/detail', [NewsController::class, 'show']);