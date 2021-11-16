<?php

use App\Controller\DocumentController;
use App\Controller\HomeController;

route()->get('/', [HomeController::class, 'index']);
route()->get('/document', [DocumentController::class, 'index']);