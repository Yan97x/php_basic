<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Manufacturer;
use App\Models\Review;
use App\Models\Picture;
use App\Models\Vote;
use Auth;

class ProductController extends Controller
{

    function __construct(){
        $this->middleware('auth', ['except'=>['index','show']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
            return view('products.create_form')->with('manufacturers', Manufacturer::all());
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
            'name' => 'required|max:255',
            'price' => 'required|numeric|min:1',
            'manufacturer' => 'exists:manufacturers,id',
            'describe' => 'required|min:6',
            'link' => 'required|url',
        ]);
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->manufacturer_id = $request->manufacturer;
        $product->describe = $request->describe;
        $product->link = $request->link;
        $product->user = Auth::user()->name;
        $product->save();
        return redirect("product/$product->id");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productId = Product::find($id);
        $eachPageReview = Review::where('product_id','=',$id)->paginate(5);
        $picture = Picture::where('product_id','=',$id)->get();
        $all_vote = Vote::all();
        if(!Auth::guest()){
            $poster = Review::where('product_id','=',$id)->where('name','=',Auth::user()->name)->get()->count();
            return view('products.show')->with('product', $productId)->with('reviews', $eachPageReview)->with('pictures', $picture)->with('votes', $all_vote)->with('poster',$poster);
        }
        return view('products.show')->with('product', $productId)->with('reviews', $eachPageReview)->with('pictures', $picture)->with('votes', $all_vote);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit_form')->with('product', $product)->with('manufacturers', Manufacturer::all());
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
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->manufacturer_id = $request->manufacturer;
        $product->save();
        return redirect("product/$product->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect("product");
    }
}
