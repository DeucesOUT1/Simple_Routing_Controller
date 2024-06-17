<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function aboutMeFunc()
    {
        $aboutMeData = array(
            'name' => 'Andre Joss Timmango',
            'gender' => 'non-binary',
            'birthdate' => 'April 08',
            'address' => 'Camp  7 , Baguio City',
            'email' => 'timmangoandre@gmail.com',
        );
        return view("about_me", $aboutMeData);
    }
}
