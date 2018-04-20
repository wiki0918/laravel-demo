<?php

namespace App\Managers;

use App\Models\Car;

class CarInfoMgr
{
    /**
     * get car list
     *
     * @param  
     * @return $CarsList
     */
    public function getCarList()
    {
        $CarList = Car::all();
        return $CarList;
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

        return $Car->save();;
    }
}
