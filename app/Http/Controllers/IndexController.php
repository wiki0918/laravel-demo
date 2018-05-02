<?php

namespace App\Http\Controllers;

use App\Managers\CarMgr;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    /**
     * Index
     *
     */
    public function show()
    {   
        $carMgr = new CarMgr();
        $cars = $carMgr->getCarPagination();

        $carsData = [];
        foreach ($cars->items() as $car) {
            $carsData[] = $car->toArray();
        }

        $carFormatList = $this->format($carsData);
        return view('carList', [
            'cars' => $cars,
            'carList' => $carFormatList,
        ]);
    }

    /**
     * Format carList
     * 
     * @param  $carsData
     * @return $carFormatList
     */
    protected function format($carsData)
    {
        $carFormatList = [];
        if ($carsData == '') {
            return $carFormatList;
        }
        foreach ($carsData as $car) {
            if (mb_strlen($car['description'], 'utf-8') >= 60) {
                $car['description'] = mb_substr($car['description'], 0, 58, 'utf-8') . "...";
            }
            $carFormatList[] = $car;
        }
        return $carFormatList;
    }

}
