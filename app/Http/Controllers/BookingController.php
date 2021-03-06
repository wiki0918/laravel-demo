<?php

namespace App\Http\Controllers;

use App\Managers\BookingMgr;
use App\Managers\CarMgr;
use App\Models\Booking;
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
     * booking list
     * 
     */
    public function bookingList()
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
     * booking list by date
     * 
     */
    public function bookingListByDate()
    {
        $dateOptipns = [];
        $bookingMgr = new BookingMgr();
        $bookings = $bookingMgr->getBookings();
        foreach ($bookings->toArray() as $booking) {
            $dateOptipns[] = $booking['reserve_date'];
        }
        $dateOptipns = array_unique($dateOptipns);
        $dateOptipns = array_sort($dateOptipns);
        
        return view('booking/date', [
            'dateOptipns' => $dateOptipns,
        ]);
    }

    /**
     * json list by date
     * 
     */
    public function jsonListByDate()
    {
        $date = $_GET['date'];
        $bookingMgr = new BookingMgr();
        $bookings = $bookingMgr->getBookingPaginationByDate($date);
        return $bookings;
    }

    /**
     * save reserve
     * @param $request
     */
    public function save(ReservePost $request)
    {
        $postData = $request->input();
        $bookingMgr = new BookingMgr();
        $bookingMgr->saveBooking($postData);
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
