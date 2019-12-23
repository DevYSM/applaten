<?php

namespace App\Http\Controllers\admin;

use App\area;
use App\Cars;
use App\Country;
use App\Equipments;
use App\Http\Controllers\Controller;
use App\Locations;
use App\Service;
use App\Services;
use App\User;
use App\Workshops;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Location;

class WorkshopsController extends Controller {


    public function View_Workshops()
    {
        $workshop = Workshops::where('request',1)->get();
        return view('Back.Pages.admin.workshop',[ 'workshops' => $workshop ]);
    }

    public function View_services()
    {
        $services = Service::all();
        return view('Back.Pages.admin.services',[ 'services' => $services ]);
    }

    public function add_service(Request $request) {

        if ($request->isMethod('post')){
            Service::create([
                'service_name' => $request->input('service_name'),
                'description' => $request->input('description'),
            ]);
            return redirect('admin/services/list');
        }else{
        return view('Back.Pages.admin.add-service');
    }
 }

    public function Requested_workshops() {
        $workshop = Workshops::where('request',0)->get();
        return view('Back.Pages.admin.workshop',[ 'workshops' => $workshop ]);
    }

    public function change_Status(Request $request) {

        if ($request->isMethod('post')){
            $workshop = Workshops::where('workshop_id',$request->get('workshop'))->first();
            if($workshop->request == 0){
                DB::table('workshops')->where('workshop_id', $workshop->workshop_id)->update(['request' => 1]);
                return redirect()->back();
            }else{
                DB::table('workshops')->where('workshop_id', $workshop->workshop_id)->update(['request' => 0]);
                return redirect()->back();
            }
        }
    }

    public function edit_service(Request $request){
        if($request->isMethod('post')){
            $service = DB::table('services')->where('service_id',$request->input('service_id'))->update([
                'service_name' => $request->input('service_name'),
                'description' => $request->input('description')
            ]);
            return redirect('/admin/services/list');

        }else{
            $service = DB::table('services')->where('service_id',$request->input('service_id'))->first();
            return view('Back.Pages.admin.add-service',['service' => $service]);
        }
    }

    public function delete_service(Request $request){

        DB::table('services')->where('service_id',$request->input('service_id'))->delete();
        return redirect()->back();
    }

    public function add_workshop(Request $request) {
        if ($request->isMethod('post')){
            if($request->file('image')){
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename =time().'.'.$extension;
                $file->move('images/workshops/', $filename);}
            else{
                $filename = null;
            }
    //        $country = Country::where('country_id',$request->input('country'))->first();
    //        return $country;
            Workshops::create([
                'workshop_name' => $request->input('workshop_name'),
                'shop_image' => $filename,
                'address' => $request->input('workshop_address'),
                'location' => 'cairo' ,
                'shop_phone' => $request->input('workshop_shop_phone'),
                'employees' => $request->input('workshop_employees'),
                'waiting_spot' => $request->input('waiting_spot'),
                'request' => 0,
                'id_owner' => 1,
                'id_area' => $request->input('area_id'),
    //            'brand_country' => $country->country_id,
            ]);
            return redirect()->back();
        }else {
            $areas = area::all();
            return view('Back.Pages.admin.workshopAdd', ['areas' => $areas]);
        }

    }

    public function edit_workshop(Request $request){
        if($request->isMethod('post')){
            if($request->file('image')){
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename =time().'.'.$extension;
                $file->move('images/workshops/', $filename);}
            else{
                $filename = null;
            }
            $workshop = DB::table('workshops')->where('workshop_id',$request->input('id_workshop'))->update([
                'workshop_name' => $request->input('workshop_name'),
                'shop_image' => $filename,
                'address' => $request->input('workshop_address'),
                'location' => 'cairo',
                'shop_phone' => $request->input('workshop_shop_phone'),
                'employees' => $request->input('workshop_employees'),
                'waiting_spot' => $request->input('waiting_spot'),
                'request' => 1,
                'id_owner' => 1,
                'id_area' => $request->input('area_id'),
            ]);

            return redirect()->back();
        }else{
            $areas = area::all();
            $workshop = DB::table('workshops')->where('workshop_id',$request->input('workshop_id'))->first();
            return view('Back.Pages.admin.workshopAdd',['workshop' => $workshop , 'areas' => $areas]);
        }
    }

    public function delete_workshop(Request $request){
        DB::table('workshops')->where('workshop_id',$request->input('workshop_id'))->delete();
        return redirect()->back();
    }


//    -----------------------------------------Location----------------------------------------------------------------------------

    public function add_location(Request $request){

    }

    public function edit_location(Request $request){

    }

    public function delete_location(Request $request){

    }

//==============================================================================================================
    public function profile_workshop(Request $request){
        $workshop = DB::table('workshops')->where('workshop_id',$request->input('workshop_id'))->first();
        $locations = Locations::select('place','city', 'country')->where('location_id', $workshop->workshop_id)->get();
        $equipments = Equipments::select('equipment_name','description')->where('id_workshop', $workshop->workshop_id)->get();
        $services = Services::select('service_name','service_description')
            ->join('workshop_service','workshop_service.id_service','=','services.service_id')
            ->where('workshop_service.id_workshop', $workshop->workshop_id)
            ->get();

        return view('Back.Pages.Workshop.workshop-profile', ['workshop' => $workshop, 'locations' => $locations ,
            'equipments' => $equipments , 'services' => $services]);
    }


}
