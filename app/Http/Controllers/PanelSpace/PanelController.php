<?php

namespace App\Http\Controllers\PanelSpace;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function dashboard(){
        return view("panel.dashboard");
    }
}
