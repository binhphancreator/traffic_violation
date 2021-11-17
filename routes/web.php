<?php

use App\Controller\DocumentController;
use App\Controller\HomeController;
use App\Controller\LoginController;

route()->get('/', [HomeController::class, 'index']);
route()->get('/document', [DocumentController::class, 'index']);
route()->get('/login', [LoginController::class, 'index']);
route()->post('/login', [LoginController::class, 'login']);
route()->get('/logout', [LoginController::class, 'logout']);