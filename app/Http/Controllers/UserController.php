<?php

namespace App\Http\Controllers;

class userController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('user');
    }


    public function areaLocatore() {
        return view('areaLocatore');
    }

    public function areaLocatario() {
        return view('areaLocatario');
    }

    public function showAccount() {
        return view('account');
    }

}
