<?php

namespace App\Http\Controllers;

use App\Managers\CarInfoMgr;
use App\Http\Controllers\Controller;
use App\Http\Requests\AnnouncePost;

class AdminController extends Controller
{

    /**
     * Announce
     *
     */
    public function announce()
    {        
        return view('carAnnounce');
    }
    
    /**
     * Save AnnouncePost
     *
     */
    public function save(AnnouncePost $request)
    {   
        $carData = $_POST;
        $carInfoMgr = new CarInfoMgr();
        $carInfoMgr->saveCarInfo($carData);
        return redirect('/');
    }
   
}

