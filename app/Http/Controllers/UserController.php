<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller {

    public function index($user = "", $id = "") {
        return view('user', compact('user', 'id'));
    }
}