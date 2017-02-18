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

//controll@function
Route::get('/', 'BlogController@index');
Route::get('/extend', 'BlogController@extend');

/*Route::get('/', function () {
    return view('welcome');
});*/

//extend layout
/*
Route::get('/', function () {
    return view('site.index');
});

Route::get('/extend', function () {
    return view('extend');
});
//////////
Route::get('/about', function () {
    //Transfer data type 1
    $data['name'] = 'Siam';
    $data['last_name'] = 'Nganphairojsakun';
    $data['people'] = ['si','am','kub'];
    return view('about',$data);
});
*/

//path : '.' equal '/'
/*
 * Route::get('/layout', function () {
    return view('site.layout');
});
 */
//Route::get('/about', function () {
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
    //return view('about')->withName('Siam')->withLastName('Nganphairojsakun');
//});

//Route parameter type 1 (require parameter)
/*Route::get('/plus/{num1?}/{num2?}', function ($num1=0,$num2=0) {
    //echo $num1 . '+' . $num2 . '=' . ($num1+$num2);
    echo $num1 . '&' . $num2;
});*/
//})->where('num1','[0-9ก-ฮ]+')->where('num2','[a-zA-Z]+');
//regular Expression