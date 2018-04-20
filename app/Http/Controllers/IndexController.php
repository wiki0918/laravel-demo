<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    /**
     * Show Index
     *
     * @param  
     * @return
     */
    public function show()
    {
        return view('carlist', ['name' => 'James']);
    }
}

