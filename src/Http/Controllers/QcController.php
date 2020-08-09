<?php

namespace Dcat\Admin\Extension\Qc\Http\Controllers;

use Dcat\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class QcController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Hasil Analisa QC')
            ->description('Stream Hasil Analisa QC')
            ->body(view('qc::index'));
    }
}
