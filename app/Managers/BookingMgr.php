<?php

namespace App\Managers;

use App\Models\Booking;

class BookingMgr
{

    protected $offset = 5;

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

    /**
     * get booking list
     *
     * @return $bookingPagination
     */
    public function getBookingPagination()
    {
        $bookingPagination = \DB::table('booking')
                ->leftJoin('car', 'booking.car_id', '=', 'car.id')
                ->paginate($this->offset);

        return $bookingPagination;
    }

}
