<?php

use App\Controller\HomeController;

route()->get('/', [HomeController::class, 'index']);