<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function hobbiesFunc()
    {
        $hobbiesData = array(
            'baking' => 'Cookies, Bars, Cakes etc..',
            'reading' => 'fiction, fantasy, comming of age',
        );
        return view("hobbies", $hobbiesData);
    }
}
