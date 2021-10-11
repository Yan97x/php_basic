<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Review;
use App\Models\Vote;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $review_id = Vote::max('id')+1;
        return view('products.create_review')->with('product_id', $request->product_id)->with('review_id',$review_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_name' => 'required|max:255',
            'product_rating' => 'required|numeric|between:1,5',
            'review_content' => 'required|min:6',
        ]);
        $review = new Review();
        $review->user_name = $request->user_name;
        $review->product_rating = $request->product_rating;
        $review->review_content = $request->review_content;
        $review->product_id = $request->product_id;
        $review->save();
        $allReviews = Review::where('product_id','=',$review->product_id)->count();
        $reviewPage = ceil($allReviews/5);
        return redirect("product/$review->product_id?reviewPage=$reviewPage");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reviewId = Review::find($id);
        return view('products.editReview')->with('review', $reviewId);
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
        $this->validate($request, [
            'user_name' => 'required|max:255',
            'review_content' => 'required',
            'product_rating' => 'required|numeric|between:1,5',
        ]);
        $review = Review::find($id);
        $review->user_name = $request->user_name;
        $review->product_rating = $request->product_rating;
        $review->review_content = $request->review_content;
        $review->product_id = $request->product_id;
        $review->save();
        return redirect("product/$review->product_id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::find($id);
        $review->delete();
        return redirect("product/$review->product_id");
    }
}
