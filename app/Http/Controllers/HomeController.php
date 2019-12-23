<?php

namespace App\Http\Controllers;

use App\Cars;
use App\Equipments;
use App\Locations;
use App\Reservation;
use App\Reservations;
use App\Services;
use App\Workshops;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function show_reserve(){

        $reserve = DB::table('reservations')
            ->join('workshops', 'workshops.workshop_id', '=', 'reservations.workshop_id')
            ->where('reservations.id_car_owner', Auth::user()->id )
            ->get();

        return view('Back.Pages.reservation.reservationView' , ['reserves' => $reserve]);
    }



    public function search_workshop(Request $request)
    {


        if($request->isMethod('post')){
            $this->validate($request,[
                'location_id' => 'required',
                'place_id' => 'required',
                'car_id' => 'required',
                'workshop_type_id' => 'required',
                'full_type_id' => 'required',
                'service_id' => 'required',
            ],[
                'location_id.required' => ' The City field is required.',
                'place_id.required' => ' The Place field is required.',
                'car_id.required' => ' The Car type field is required.',
                'workshop_type_id.required' => ' The Workshop type field is required.',
                'full_type_id.required' => ' The Full type field is required.',
                'service_id.required' => ' The Service field is required.',
                'workshop_name.max' => ' The workshop Name may not be greater than 35 characters.',

            ]);

            $workshop_name = $request->input('workshop_name');
            $place_id = $request->input('place_id');
            $car_id = $request->input('car_id');
            $workshop_type_id = $request->input('workshop_type_id');
            $full_type_id = $request->input('full_type_id');
            $service_id = $request->input('service_id');


            if(!$workshop_name) {

                $results = DB::table('workshops')
                    ->select('workshops.workshop_id' , 'workshops.workshop_name', 'workshops.workshop_phone' , 'cars.car_id' , 'services.service_id')
                    ->join('workshop_service', 'workshops.workshop_id', '=', 'workshop_service.id_workshop')
                    ->join('workshop_car', 'workshop_car.id_workshop', '=', 'workshops.workshop_id')
                    ->join('cars', 'cars.car_id', '=', 'workshop_car.id_car')
                    ->join('services', 'services.service_id', '=', 'workshop_service.id_service')
                    ->where(['workshops.request' => 1  , 'workshop_service.id_service' => $service_id ,
                        'workshop_car.id_car' => $car_id , 'workshops.workshop_type' => $workshop_type_id ,
                         'workshops.id_location' => $place_id])
                    ->get();
            }
            else{
                $results = DB::table('workshops')
                    ->select('workshops.workshop_name', 'workshops.workshop_phone')
                    ->join('workshop_service', 'workshops.workshop_id', '=', 'workshop_service.id_workshop')
                    ->join('workshop_car', 'workshop_car.id_workshop', '=', 'workshops.workshop_id')
                    ->join('cars', 'cars.car_id', '=', 'workshop_car.id_car')
                    ->where(['workshops.request' => 1  , 'workshop_service.id_service' => $service_id ,
                        'workshop_car.id_car' => $car_id ,  'workshops.id_location' => $place_id , 'workshops.workshop_name' => $workshop_name])
                    ->get();
            }
            return view('Back.Pages.user.Search.search-result' , ['results' => $results] );

        }else{
            $locations = Locations::all();
            $cars = Cars::all();
            $workshops = Workshops::all();
            $services = Services::all();
            return view('Back.Pages.user.Search.dashboard',[ 'locations' => $locations, 'cars'=>$cars ,'workshops' =>$workshops ,'services' => $services]);
        }
    }





}
