<?php

namespace App\Managers;

use App\Models\Car;

class CarMgr
{

    protected $offset = 6;


    /**
     * get car list
     *
     * @param int $id
     * @return $CarInfo
     */
    public function getCarInfo($id)
    {
        $CarInfo = Car::where('id', $id)
                ->first();
        return $CarInfo;
    }

    /**
     * get car list
     *
     * @return $CarsList
     */
    public function getCarList()
    {
        $CarList = Car::all();
        return $CarList;
    }


    /**
     * get car Pagination
     *
     * @return $CarsPagination
     */
    public function getCarPagination()
    {
        $CarsPagination = Car::paginate(6);
        return $CarsPagination;
    }    
    
    /**
     * save car info
     *
     * @param  $carData
     * @return Boolean
     */
    public function saveCarInfo($carData)
    {
        $Car = new Car();
        $Car->name = $carData['name'];
        $Car->description = $carData['description'];
        $Car->picture = $carData['picture'];

        return $Car->save();
        ;
    }

}
