<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\API\Country;
use Illuminate\Validation\Validator;

class CountryController extends Controller
{
    public function country()
    {
        return response()->json(Country::get(), 200);
    }

    public function countryById($id)
    {
        $country = Country::find($id);
        if(is_null($country)){
            return response()->json(["message" => "Record not found!"], 404);
        }
        return response()->json(Country::find($id), 200);
    }

    public function countrySave(Request $request)
    {
        $rules = [
            'name'  => 'required|min:3',
            'iso'   => 'required|min:2|max:2|unique:_z_country'
        ];
        $validator = \Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }
        $country = Country::create($request->all());
        return response()->json($country, 201);
    }

    public function countryUpdate(Request $request, $id)
    {
        $country = Country::find($id);
        if(is_null($country)){
            return response()->json(["message" => "Record not found!"], 404);
        }
        $country->update($request->all());
        return response()->json($country, 200);
    }

    public function countryDelete(Request $request, $id)
    {
        $country = Country::find($id);
        if(is_null($country)){
            return response()->json(["message" => "Record not found!"], 404);
        }
        $country->delete();
        return response()->json(null, 204);
    }
}
