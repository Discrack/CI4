<?php

namespace App\Controllers\Data;

use App\Controllers\BaseController;
use App\Models\MemberModels;

class Datamember extends BaseController
{
    public function index()
    {
        $member = new MemberModels();
        $data['member'] = $member->findAll();
        // $data['member'] = $member->getData();
        
        return view('member', $data);
    }
}
