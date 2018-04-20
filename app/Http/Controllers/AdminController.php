<?php

namespace App\Http\Controllers;

use App\Managers\CarInfoMgr;
use App\Http\Controllers\Controller;

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
     * Save
     *
     */
    public function save()
    {   
        $carData = $_POST;
        $carInfoMgr = new CarInfoMgr();
        $result = $carInfoMgr->saveCarInfo($carData);
        echo "<script>alert('test');</script>";
        return redirect('/');
    }
}

