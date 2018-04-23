<?php

namespace App\Http\Controllers;

use App\Managers\CarInfoMgr;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{

    /**
     * reserve
     * @param int $carId
     */
    public function reserve($carId)
    {
        $carInfoMgr = new CarInfoMgr();
        $car = $carInfoMgr->getCarInfo($carId);
        if ($car == Null) {
            return redirect('/');
        }
        $carData = $car->toArray();

        return view('booking/reserve', [
            'carData' => $carData,
        ]);
    }

    /**
     * Format carList
     * 
     * @param  $carList
     * @return $carFormatList
     */
//    protected function format($carList)
//    {
//        $carInfoList = [];
//        if ($carList == ''){
//            return $carInfoList;
//        }
//        foreach ($carList as $car) {
//            if(mb_strlen($car['description'],'utf-8') >= 60)
//            {
//                $car['description'] = mb_substr($car['description'],0,58,'utf-8')."...";
//            }
//            $carFormatList[] = $car;
//        }
//        return $carFormatList;
//    }
}
