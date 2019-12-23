<?php

namespace App\Http\Controllers;

use App\Equipments;
use App\Reservations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function reserve(Request $request){
        if($request->isMethod('post')) {
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

            Reservations::create([
                'id_user'         => Auth::user()->id,
                'notes'           => $request->input('notes'),
                'cancelled'            => $request->input('cancelled'),
                'id_car'           => $request->input('id_car'),
                'id_workshop'        => $request->input('id_workshop') ,
                'id_service'  => $request->input('id_service'),
            ]);
            return redirect()->back();
        }
        else {
            $car = DB::table('cars')->where('car_id', $request->input('car_id'))->first();
            $workshop = DB::table('workshops')->where('workshop_id', $request->input('workshop_id'))->first();
            $service = DB::table('services')->where('service_id', $request->input('service_id'))->first();

            return view('Back.Pages.reservation.test', ['workshop' => $workshop, 'car' => $car, 'service' => $service]);
        }
    }

    public function done_reserve(Request $request){
        $workshop = $request->input('workshop');

        if($request->isMethod('post')){

            Reservation::create([

                'id_car_owner'         => Auth::user()->id,
                'appointment'       => $request->input('appointment'),
                'time'              => $request->input('time'),
                'phone'             => $request->input('phone'),
                'gas_type'          => $request->input('gas_type') ,
                'chassis_number'    => $request->input('chassis_number'),
                'transmission'      => $request->input('transmission'),
                'distance'          => $request->input('distance'),
                'year'              => $request->input('year'),
                'id_workshop'       => $workshop,
                'id_model'          =>$request->input('model'),
            ]);

            return redirect()->back();

        }else{
//            $models = Equipments::all();
            return view('Back.Pages.user.Reservation.reserve');
        }
    }


    public function reserve_service(Request $request){
        if(Auth::check()){
           return 'esraaaaaaaaa';
        }
        else{
            return 'moooooooooooo';
        }
    }

}
