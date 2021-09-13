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

# home page routing
Route::get('/', function (){
    $sql = "select * from item";
    $items = DB::select($sql);
    return view ('layouts.home') ->with ('items', $items); 
});

# item detail routing
Route::get('item_detail/{id},{rego}', function($id, $rego){
    $item = get_item($id);
    $booking = DB::select('select * from booking where rego=?', array($rego));
    if(count($booking)>=1){
        $booking = $booking[0];
    }
    return view ('items.item_detail') ->with ('item', $item) ->with ('booking', $booking); 
});

# client routing
Route::get('client', function(){
    $sql = "select * from client";
    $client = DB::select($sql);
    return view("items.client") ->with ('clients', $client);
});

# item add routing
Route::get('add_item', function(){
    return view("items.add_item");
});

# add client to databse
Route::post('add_item_action', function(){
    $names = request('names');
    $age = request('age');
    $phone = request('phone');
    $license = request('license');
    $licenseType = request('licenseType');

    # set constraints for age and phone
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

# update routing
Route::get('update_item/{id}', function($id){
    $clients = get_client($id);
    return view("items.update_item")->with('client', $clients);
});

# update client to database and return to client page
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

# delete routing
Route::get('delete_item/{id}', function($id){
    DB::delete("delete from client where id = ?", [$id]);
    return redirect(url("client"));
});

# booking routing
Route::get('booking', function(){
    $sql = "select * from client";
    $client = DB::select($sql);
    $sql1 = "select * from item";
    $item = DB::select($sql1);

    $sql2 = "select * from booking";
    $booking = DB::select($sql2);

    return view("items.booking") 
        ->with ('client', $client) 
        ->with('item', $item)
        ->with('booking', $booking);
});

# make a new booking
Route::post('booking', function(){
    $names = request('names');
    $rego = request('rego');
    $license = DB::select("select license from client where names='$names'")[0]->license;
    $starting = request('starting');
    $returning = request('returning');
    $id = add_book($names, $rego, $license, $starting, $returning);

    $cartime = DB::select("select cartimes from item where rego='$rego'")[0]->cartimes+1;
    DB::update("UPDATE item SET cartimes='$cartime' WHERE rego='$rego'");
    return redirect(url("booking"));
});

# return routing
Route::get('return', function(){
    $sql2 = "select * from booking";
    $booking = DB::select($sql2);
    return view("items.return")->with("booking", $booking);
});

# return vehicle and remove from the booking
Route::post("return", function(){
        $booking = explode('-', $_POST['booking']);
        $rego = $booking[1];
        $bookingId = $booking[0];
        $kmDriven = $_POST['odo'];
        if ($kmDriven == "") $kmDriven = "100";
        # update odometer 
        $sql = "UPDATE item SET odometer='$kmDriven' WHERE rego='$rego'";
        DB::update($sql);
        # remove booking
        $sql2 = "DELETE FROM booking WHERE id='$bookingId'";
        DB::delete($sql2);
        return redirect(url("booking"));
});

# ranking routing
Route::get('ranking', function(){
    $sql = "select * from item order by cartimes desc";
    $item = DB::select($sql);
    return view("items.ranking") ->with('items', $item);
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

function add_book($names, $rego, $license, $starting, $returning){
    $sql = "insert into booking (names, rego, license, starting, returning) values (?, ?, ?, ?, ?)";
    DB::insert($sql, array($names, $rego, $license, $starting, $returning));
    $id = DB::getPdo() -> lastInsertId();
    return($id);
}
