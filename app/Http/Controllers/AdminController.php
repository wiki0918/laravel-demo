<?php

namespace App\Http\Controllers;

use App\Managers\CarMgr;
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
        $postData = $request->input();
        $carInfoMgr = new CarMgr();
        $carInfoMgr->saveCarInfo($postData);
        return redirect('/');
    }
   
}

