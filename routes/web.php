<?php




Route::match(['post','get'],'/', 'HomeController@search_workshop')->name('home');
Route::match(['post','get'],'/profile-workshop', 'admin\WorkshopsController@profile_workshop')->name('profile-workshop');



Route::match(['post','get'],'/reserve-service-workshop', 'ReservationController@reserve');
Route::match(['post','get'],'/edit-reserve-workshop', 'ReservationController@edit_reserve');
Route::get('/show-reserve', 'ReservationController@show_reserve');


Route::group(['prefix'=>'admin','as'=>'admin.'], function(){

    // admin get all users
    Route::get('/users/list','admin\UsersController@ViewUsers');

    // Admin  cars brand controller

//    Route::post('change-brand-status','admin\CarsController@change_Status');
//    Route::get('/cars/brand/show', 'admin\CarsController@show_brand');
//    Route::get('/cars','admin\CarsController@ViewCars')->name('cars');
    Route::match(['get' , 'post'], 'cars/brand/add' , 'admin\CarsController@add_car');
    Route::match(['get' , 'post'],'/edit-car','admin\CarsController@Edit_car')->name('edit-car');
    Route::post('/delete-car', 'admin\CarsController@delete_car');


    // workshops controller for admin
    Route::get('/services/list', 'admin\WorkshopsController@View_services');
    Route::get('/workshops/active', 'admin\WorkshopsController@View_Workshops');
    Route::get('/workshops/request', 'admin\WorkshopsController@Requested_workshops');
    Route::post('change-workshop-status','admin\WorkshopsController@change_Status');
    Route::match(['post','get'],'add-workshop', 'admin\WorkshopsController@add_workshop');
    Route::match(['get','post'],'edit-workshop','admin\WorkshopsController@edit_workshop');
    Route::match(['post','get'],'/service/add', 'admin\WorkshopsController@add_service');
    Route::match(['post','get'],'add/service-edit','admin\WorkshopsController@edit_service');
    Route::post('/delete-service', 'admin\WorkshopsController@delete_service');
    Route::post('/delete-workshop', 'admin\WorkshopsController@delete_workshop');

    //add cars brand Form
//    Route::get('/cars/brand/add', function () {
//        $countries = \App\Country::all();
//        return view('Back.Pages.admin.carsBrandAdd',['countries' => $countries]);
//    });

    //add cars model Form
    Route::get('/cars/model/add/{id}', function ($id){
        return view('Back.Pages.admin.carsModelAdd',['brand' => $id]);
    });

    // admin open dashboard
    Route::get('/', function () {
        return view('Back.Pages.dashboard');
    });

});

Auth::routes();

Route::get('lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
});

