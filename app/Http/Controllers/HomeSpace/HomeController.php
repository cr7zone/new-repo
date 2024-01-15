<?php

namespace App\Http\Controllers\HomeSpace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Service as ServiceModel;

class HomeController extends Controller
{
    public function index(){
        $service = ServiceModel::get();
        return view('home.home', ['pocong' => $service]);
    }

    public function about(){
        return view('home.about');
    }

    public function contact(){
        return view('home.contact');
    }

    public function pricing(){
        return view('home.pricing');
    }

    public function service(){
        $service = ServiceModel::get();
        return view('panel.service.create', ['service' => $service]);
    }
}
