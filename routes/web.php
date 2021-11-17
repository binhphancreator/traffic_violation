<?php

use App\Controller\DocumentController;
use App\Controller\HomeController;
use App\Controller\LoginController;
use App\Controller\ReportController;

route()->get('/', [HomeController::class, 'index']);
route()->get('/document', [DocumentController::class, 'index']);
route()->get('/login', [LoginController::class, 'index']);
route()->post('/login', [LoginController::class, 'login']);
route()->get('/logout', [LoginController::class, 'logout']);
route()->get('/reports/add', [ReportController::class, 'showCreateForm']);
route()->post('/reports/add', [ReportController::class, 'create']);
route()->get('/reports/lookup', [ReportController::class, 'showLookupForm']);