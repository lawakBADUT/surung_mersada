<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Surung Mersada',
        ];
        $this->renderView('pages/beranda', $data);
    }
}
