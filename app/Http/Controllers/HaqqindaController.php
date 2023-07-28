<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaqqindaController extends Controller
{
    public function haqqinda()
    {
        return "About Page";
    }

    public function insan($ad)
    {
        // $ad = "Gurbanff";
        return $ad." haqqinda melumat";
    }
}
