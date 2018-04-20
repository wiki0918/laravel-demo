<?php

namespace App\Http\Controllers;

use App\Managers\CarInfoMgr;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    /**
     * Index
     *
     */
    public function show()
    {
        $carInfoMgr = new CarInfoMgr();
        $carList = $carInfoMgr->getCarList();
        
        return view('carList', ['carList' => $carList->toArray()]);
    }
}

