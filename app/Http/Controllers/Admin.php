<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Admin extends Controller {

    /**
     * Whenever this controller is called, protect all the routes except for those defined below
     * with the admin middleware.
     */
    public function __construct(){
        $this->middleware('admin');
    }
}
