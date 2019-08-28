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

    public function countryById($id)
    {
        return response()->json(Country::find($id), 200);
    }

    public function countrySave(Request $request)
    {
        $country = Country::create($request->all());
        return response()->json($country, 201);
    }
}
