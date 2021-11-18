<?php

use App\Controller\ReportController;
route()->get('/api/reports/lookup', [ReportController::class, 'lookup']);