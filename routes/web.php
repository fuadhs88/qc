<?php

use Dcat\Admin\Extension\Qc\Http\Controllers;

Route::get('qc', Controllers\QcController::class.'@index');