<?php

namespace App\Http\Controllers;

use App\Cars;
use App\Locations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function add_car(Request $request)
    {
        if($request->isMethod('post')) {
            Locations::create([
                'place' => $request->input('place'),
                'city' => $request->input('city'),
                'country' => $request->input('country'),
                'country_code' => $request->input('country_code'),
            ]);
            return redirect()->back();
        }else{
            return view('Back.Pages.admin.add-service');
        }
    }

    public function Edit_car(Request $request){
        if($request->isMethod('post')){
            $brand = DB::table('cars')->where('car_id',$request->input('car_id'))->update([
                'place' => $request->input('place'),
                'city' => $request->input('city'),
                'country' => $request->input('country'),
                'country_code' => $request->input('country_code'),
            ]);
            return redirect()->back();
        }else{
            return view('Back.Pages.admin.carsBrandAdd');
        }
    }

    public function delete_car(Request $request){
        DB::table('cars')->where('car_id',$request->input('car_id'))->delete();
        return redirect()->back();
    }
}
