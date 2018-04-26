<?php

namespace App\Http\Controllers;

use App\Managers\BookingMgr;
use App\Managers\CarMgr;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{

    /**
     * reserve
     * @param int $carId
     */
    public function reserve($carId)
    {

        $carInfoMgr = new CarMgr();
        $car = $carInfoMgr->getCarInfo($carId);
        if ($car == Null) {
            return redirect('/');
        }
        $carData = $car->toArray();
        $dateList = $this->generateDate();
        
        return view('booking/reserve', [
            'carData' => $carData,
            'dateList'=>$dateList,
        ]);
    }

    /**
     * save reserve
     * @param $_POST
     */
    public function save()
    {
        $bookingData = $_POST;
        $bookingMgr = new BookingMgr();
        $bookingMgr->saveBooking($bookingData);
        return redirect('/');
    }

    /**
     * generate date
     * @return Array $dateLiat
     */
    protected function generateDate()
    {
        $dateList = [];
        for ($day = 1; $day <= 7; $day++) {
            $dateList[] = date('Y-m-d', strtotime("+$day day"));
        }
        return $dateList;
    }

}
