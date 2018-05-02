<?php

namespace App\Managers;

use App\Models\Account;

class AdminMgr
{
    /**
     * get user
     *
     * @param var $user
     * @param var $password
     * @return $User
     */
    public function getUser($user,$password)
    {
        $User = $results = \DB::select('select * from account where user = :user and  password = :password', ['user' => $user,'password' => $password]);
        return $User;
    }



}