<?php

use Illuminate\Support\Facades\Route;

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

Route::get('return', function(){
    return view("items.return");
});

Route::get('booking', function(){
    return view("items.booking");
});


Route::get('client', function(){
    $sql = "select * from client";
    $client = DB::select($sql);
    return view("items.client") ->with ('clients', $client);
});

Route::get('/', function (){
    $sql = "select * from item";
    $items = DB::select($sql);
    return view ('layouts.home') ->with ('items', $items); 
});

Route::get('item_detail/{id}', function($id){
    $item = get_item($id);
    return view ('items.item_detail') ->with ('item', $item); 
});

Route::get('add_item', function(){
    return view("items.add_item");
});

Route::post('add_item_action', function(){
    $names = request('names');
    $age = request('age');
    $phone = request('phone');
    $license = request('license');
    $licenseType = request('licenseType');


    if ((int)$age<=17 or (int)$age>99){
        $errors = "Age must be greater than 17 and less than 99";
        return redirect('add_item') ->withErrors($errors);
    }elseif(strlen($phone) != 10){
        $errors = "Phone number must be 10 digits";
        return redirect('add_item') ->withErrors($errors);
    }else{
        $id = add_item($names, $age, $phone, $license, $licenseType);
        if ($id){
            return redirect (url("client"));
        } else {
            die("Error while adding item.");
        }
    }
});

Route::get('update_item/{id}', function($id){
    $clients = get_client($id);
    return view("items.update_item")->with('client', $clients);
});

Route::post('update_item_action/{id}', function($id){
    $names = request('names');
    $age = request('age');
    $phone = request('phone');
    $license = request('license');
    $licenseType = request('licenseType');
    $id = update_client($id, $names, $age, $phone, $license, $licenseType);
    if($id){
        return redirect(url("client"));
    }else{
        die("Error while updating client.");
    }
});

Route::get('delete_item/{id}', function($id){
    DB::delete("delete from client where id = ?", [$id]);
    return redirect(url("client"));
});

function add_item($names, $age, $phone, $license, $licenseType){
    $sql = "insert into client (names, age, phone, license, licenseType) values (?, ?, ?, ?, ?)";
    DB::insert($sql, array($names, $age, $phone, $license, $licenseType));
    $id = DB::getPdo() -> lastInsertId();
    return($id);
}

function get_item($id){
    $sql = "select * from item where id=?";
    $item = DB::select($sql, array($id))[0];
    return $item;
}

function get_client($id){
    $sql = "select * from client where id=?";
    $item = DB::select($sql, array($id))[0];
    return $item;
}

function update_client($id, $names, $age, $phone, $license, $licenseType){
    $client = DB::table('client')->where('id', $id)->update(array(
        'names'=>$names,
        'age'=>$age,
        'phone'=>$phone,
        'license'=>$license,
        'licenseType'=>$licenseType
    ));
    return $client;
}