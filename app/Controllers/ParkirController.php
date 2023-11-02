<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Parkir;

class ParkirController extends BaseController
{
    public function index()
    {
        $parkir = new Parkir();
        $data = $parkir->findAll();
        return view('index', compact('data'));
    }
}
