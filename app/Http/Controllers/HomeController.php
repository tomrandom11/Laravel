<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function HelloMorning($ID){
    return '<h1>Good MORNING '.$ID.'</h1>';
    }
}
