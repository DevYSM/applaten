<?php

namespace App\Http\Controllers\admin;

use App\Cars;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpOption\None;

class CarsController extends Controller
{

    public function add_car(Request $request)
    {

//        $country = Country::where('country_id',$request->input('country'))->first();
//        return $country;
        if($request->isMethod('post')) {
            Cars::create([
                'car_type' => $request->input('car_type'),
//               'id_country' => $country->country_id,
                'car_model' => $request->input('car_model'),
                'car_year' => $request->input('car_year'),
                'car_kilo' => $request->input('car_kilo'),
                'chassis_number' => $request->input('chassis_number'),
                'fuel_type' => $request->input('fuel_type'),
                'transmission' => $request->input('transmission'),
                'id_user' => Auth::user()->user_id,
            ]);
            return redirect()->back();
        }else{
            return view('Back.Pages.admin.add-service');
        }
    }

    public function Edit_car(Request $request){
        if($request->isMethod('post')){
            $brand = DB::table('cars')->where('car_id',$request->input('car_id'))->update([
                'car_type' => $request->input('car_type'),
//               'id_country' => $country->country_id,
                'car_model' => $request->input('car_model'),
                'car_year' => $request->input('car_year'),
                'car_kilo' => $request->input('car_kilo'),
                'chassis_number' => $request->input('chassis_number'),
                'fuel_type' => $request->input('fuel_type'),
                'transmission' => $request->input('transmission'),
//                'id_user' => Auth::user()->id,
                'id_user' => 1,
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

    //    public function show_brand(Request $request){
//
//            $brand = Cars::where('brand_id',$request->input('id_brand'))->first();
//            $models = Equipments::where('id_brand', $request->input('id_brand'))->get();
//        return view('Back.Pages.admin.show-brand',['brand'=>$brand,'models'=>$models]);
//    }
//
//    public function change_Status(Request $request)
//    {
//        if ($request->isMethod('post')){
//            $brand = Cars::where('brand_id',$request->get('brand'))->first();
//            if($brand->status == 0){
//                DB::table('car_brands')->where('brand_id', $brand->brand_id)->update(['status' => 1]);
//                return redirect()->back();
//            }else{
//                DB::table('car_brands')->where('brand_id', $brand->brand_id)->update(['status' => 0]);
//                return redirect()->back();
//            }
//        }
//    }


}
