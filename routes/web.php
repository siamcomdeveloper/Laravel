<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//get = get data to display
//post = from form
//put path = data to update to database
//delete = data to delete to database

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    //Transfer data type 1
    /*
    $data['name'] = 'Siam';
    $data['last_name'] = 'Nganphairojsakun';
    return view('about',$data);
    */
    //Transfer data type 2
    /*
    $name = 'Siam';
    //compact process below
    //compact('name')) -> ['name' => 'Siam'];
    return view('about',compact('name'));
    */
    //Transfer data type 3
    //return view('about')->with('name','Siam')->with('last_name','Nganphairojsakun');
    //
    //Transfer data type 4
    return view('about')->withName('Siam')->withLastName('Nganphairojsakun');
});

//Route parameter type 1 (require parameter)
Route::get('/plus/{num1?}/{num2?}', function ($num1=0,$num2=0) {
    echo $num1 . '+' . $num2 . '=' . ($num1+$num2);
})->where('$num1','[0-9]+');
//regular Expression