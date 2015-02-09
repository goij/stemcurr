<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 2/8/2015
 * Time: 9:01 PM
 */

namespace app\Http\Controllers;


class UserController {
    /**
     * Display a listing of the resource.
     * GET /user
     *
     * @return Response
     */


    public function getIndex()
    {
        return View::make('guest.home');
    }

    public function getRegister(){
        return View::make('user.register');
    }

    public function getLogin(){
        return View::make('user.login');
    }

    public function getResetPassword(){
        return View::make('user.reset-password');
    }

}