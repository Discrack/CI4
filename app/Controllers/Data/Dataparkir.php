<?php

namespace App\Controllers\Data;

use App\Controllers\BaseController;
use App\Models\ParkirModels;

class Dataparkir extends BaseController
{
    public function index()
    {
        $parkir = new ParkirModels();
        $data['parkir'] = $parkir->findAll();
        // $data['parkir'] = $P->getData();

        return view ('parkir', $data);
    }
}
