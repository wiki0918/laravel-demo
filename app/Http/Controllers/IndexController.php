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
        $cars = $carInfoMgr->getCarList();
        $carList = $cars->toArray();
        $carFormatList = $this->format($carList);
        return view('carList', ['carList' => $carFormatList]);
    }
    
    /**
     * Format carList
     * 
     * @param  $carList
     * @return $carFormatList
     */
    protected function format($carList)
    {
        $carInfoList = [];
        if ($carList == ''){
            return $carInfoList;
        }
        foreach ($carList as $car) {
            if(mb_strlen($car['description'],'utf-8') >= 60)
            {
                $car['description'] = mb_substr($car['description'],0,58,'utf-8')."...";
            }
            $carFormatList[] = $car;
        }
        return $carFormatList;
    }
}

