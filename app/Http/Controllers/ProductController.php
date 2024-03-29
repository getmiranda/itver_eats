<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use App\Product;
use App\Slider;
use App\Category;

class ProductController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'details' => 'required',
            'price' => 'required|numeric',
            'name_vendedor' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/product'))
            {
                mkdir('uploads/product',0777,true);
            }
            $image->move('uploads/product',$imagename);
        }else{
            $imagename = "default.png";
        }


        $product = new Product();
        //$user = Auth::user();
        $product->category_id = $request->category;
        //$product->user_id = $user->id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->details = $request->details;
        $product->price = $request->price;
        $product->vendedor = $request->name_vendedor;
        $product->phone = $request->phone;
        $product->email = $request->email;
        $product->other_category = $request->category_optional;
        $product->availability = true;
        $product->check = false;
        $product->image = $imagename;
        $product->save();
        Toastr::success('El producto ha sido enviado correctamente.', 'Éxito');
        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $sliders = Slider::all();
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('product_detail', compact('sliders', 'categories', 'product'));
    }


}
