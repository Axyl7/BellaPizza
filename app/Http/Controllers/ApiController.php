<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    Public function loadingAction(){
        return view('loading');
    }
    Public function indexAction(){
        return view('start');
    }
    Public function workAction(){
    return view('work');
}
    Public function mapAction(){
        return view('map');
    }
    Public function adminpanelAction(){
        return view('adminpanel', ['basket' => (new BasketController())->show()]);
    }
    public function registration(Request $request){

    }
    public function reg(){
        return view('reg');

    }
}

