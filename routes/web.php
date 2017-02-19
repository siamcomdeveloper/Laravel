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

Route::get('/forums/{page?}', function ($page=1) {
    
    $objs = loadJSON('authors');
    
    $authors['authors'] = $objs;
        
    $objs = loadJSON('posts');
    
    $posts['posts'] = $objs;
    
    //Algorithm for calculate amount of page
    $total = sizeof($objs);
    $display_page = 8;
    //calculate remain post of last page
    $pluspage = $total%$display_page;
    if ($pluspage > 0) $pluspage = 1;
    else $pluspage = 0;
    $allpage = floor($total/$display_page) + $pluspage;
    /////////////////////////////////////
    
    return view('site.forums.forum',$authors,$posts)->with('page',$page)->with('allpage',$allpage)->with('display_page',$display_page);
});