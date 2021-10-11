<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Follow;
use App\Models\Review;
use App\Models\Product;
use App\Models\Vote;
use Auth;

class FollowController extends Controller
{
    function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_review = Review::all();
        $all_follow = Follow::all();
        return view('products.follow')->with('reviews', $all_review)->with('follows', $all_follow);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $follow_user = $request->follow_user;
        $follower = $request->follower;
        $check_follow_count = Follow::where('follow_user','=',$follow_user)->where('follower','=',$follower)->get()->count();
        
        if($check_follow_count==0){
            $follow = new Follow();
            $follow->follow_user = $request->follow_user;
            $follow->follower = $request->follower;
            $follow->save();
        }
        return redirect("follow");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = Review::where('user_name','=',$id)->get();
        $all_product = Product::all();
        return view('products.follow_review')->with('reviews',$review)->with('products',$all_product)->with('review_user',$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $follow = Follow::where('follow_user','=',$id)->where('follower','=',Auth::user()->name);
        $follow->delete();
        return redirect("follow");
    }
}
