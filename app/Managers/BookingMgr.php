<?php

namespace App\Managers;

use App\Models\Booking;

class BookingMgr
{

    /**
     * save booking
     *
     * @param  $bookingData
     * @return Boolean
     */
    public function saveBooking($bookingData)
    {
        $Booking = new Booking();
        $Booking->car_id = $bookingData['car_id'];
        $Booking->customer = $bookingData['customer'];
        $Booking->reserve_date = $bookingData['reserve_date'];

        return $Booking->save();
        ;
    }

}
