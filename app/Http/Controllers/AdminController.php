<?php

namespace App\Http\Controllers;

use App\Managers\CarMgr;
use App\Managers\AdminMgr;
use App\Http\Controllers\Controller;
use App\Http\Requests\AnnouncePost;
use App\Http\Requests\LoginPost;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    /**
     * Login
     *
     */
    public function login()
    {
        $user = session('user');
        if ($user) {
            return redirect('/');
        }
        return view('admin/login');
    }

    /**
     * Login
     *
     */
    public function logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect('/');
    }

    /**
     * Signup
     *
     */
    public function signup(LoginPost $request)
    {
        $postData = $request->input();
        $user = $postData['user'];
        $password = $postData['password'];

        $adminMgr = new AdminMgr();
        $result = $adminMgr->getUser($user, $password);
        if ($result) {
            session(['user' => $user]);
            return redirect('/');
        } else {
            return redirect('/admin/login');
        }
    }

    /**
     * Announce
     *
     */
    public function announce()
    {
        return view('carAnnounce');
    }

    /**
     * Save AnnouncePost
     *
     */
    public function save(AnnouncePost $request)
    {
        $postData = $request->input();
        $carInfoMgr = new CarMgr();
        $carInfoMgr->saveCarInfo($postData);
        return redirect('/');
    }

}
