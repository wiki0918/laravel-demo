<?php

namespace App\Http\Controllers;

use App\Managers\BookingMgr;
use App\Managers\CarMgr;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservePost;

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
            'dateList' => $dateList,
        ]);
    }

    /**
     * reserve list
     * 
     */
    public function bookList()
    {

        $bookingMgr = new BookingMgr();
        $bookings = $bookingMgr->getBookingPagination();
        $bookinglist = $bookings->items();
        $bookinglistData = $this->formatBookinglist($bookinglist);

        return view('booking/list', [
            'bookings' => $bookings,
            'bookinglist' => $bookinglistData,
        ]);
    }

    /**
     * save reserve
     * @param $_POST
     */
    public function save(ReservePost $request)
    {
        $bookingData = $_POST;
        $bookingMgr = new BookingMgr();
        $bookingMgr->saveBooking($bookingData);
        return redirect('/booking/list');
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

    /**
     * generate date
     * @return Array $dateLiat
     */
    protected function formatBookinglist($bookinglist)
    {
        $bookinglistData = [];
        foreach ($bookinglist as $booking) {

            $bookinglistData[] = [
                'reserve_date' => $booking->reserve_date,
                'customer' => $booking->customer,
                'car_name' => $booking->name,
            ];
        }
        return $bookinglistData;
    }

}
