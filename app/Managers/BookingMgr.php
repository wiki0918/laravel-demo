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
        $bookingCleanData = array_map('strip_tags',$bookingData);
        
        $Booking = new Booking();
        $Booking->car_id = $bookingCleanData['car_id'];
        $Booking->customer = $bookingCleanData['customer'];
        $Booking->reserve_date = $bookingCleanData['reserve_date'];
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


    /**
     * get booking list
     *
     * @param $date
     * @return $bookingPagination
     */
    public function getBookingPaginationByDate($date)
    {
        $bookingPagination = \DB::table('booking')
                ->where('reserve_date',$date)
                ->leftJoin('car', 'booking.car_id', '=', 'car.id')
                ->paginate();

        return $bookingPagination;
    }    
    
    
}
