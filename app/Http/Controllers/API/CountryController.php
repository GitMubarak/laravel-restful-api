<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\API\Country;

class CountryController extends Controller
{
    public function country()
    {
        return response()->json(Country::get(), 200);
    }
}
