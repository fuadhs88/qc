<?php

namespace Dcat\Admin\Extension\Qc;

use Dcat\Admin\Extension;

class Qc extends Extension
{
    const NAME = 'qc';

    protected $serviceProvider = QcServiceProvider::class;

    protected $composer = __DIR__.'/../composer.json';

    protected $assets = __DIR__.'/../resources/assets';

    protected $views = __DIR__.'/../resources/views';

//    protected $lang = __DIR__.'/../resources/lang';

    protected $menu = [
        'title' => 'Analisa QC',
        'path'  => 'qc',
        'icon'  => 'fa-cogs',
    ];
}
