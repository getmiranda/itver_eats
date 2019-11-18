<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create',compact('categories'));
    }

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
            'price' => 'required',
            'availability' => 'required',
            'name_vendedor' => 'required',
            'phone' => 'required',
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
        $user = Auth::user();
        $product->category_id = $request->category;
        $product->user_id = $user->id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->details = $request->details;
        $product->price = $request->price;
        $product->vendedor = $request->name_vendedor;
        $product->phone = $request->phone;
        $product->availability = $request->availability;
        $product->check = true;
        $product->image = $imagename;
        $product->save();
        Toastr::success('El producto ha sido guardado correctamente.', 'Éxito');
        return redirect()->route('product.index');
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
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.product.edit',compact('product','categories'));
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
        $this->validate($request,[
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'details' => 'required',
            'price' => 'required',
            'availability' => 'required',
            'image' => 'mimes:jpeg,jpg,bmp,png',

        ]);
        $product = Product::findOrFail($id);
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
            unlink('uploads/product/'.$product->image);
            $image->move('uploads/product',$imagename);
        }else{
            $imagename = $product->image;
        }
        $product->category_id = $request->category;
        $product->user_id = Auth::user()->id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->details = $request->details;
        $product->price = $request->price;
        $product->availability = $request->availability;
        $product->check = true;
        $product->image = $imagename;
        $product->save();
        Toastr::success('El producto ha sido actualizado correctamente.', 'Éxito');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if (file_exists('uploads/product/'.$product->image))        {
            unlink('uploads/product/'.$product->image);
        }

        $product->delete();
        Toastr::success('El producto ha sido eliminado correctamente.', 'Éxito');
        return redirect()->back();
    }

    public function check($id){
        $product = Product::findOrFail($id);
        $product->check = true;
        $product->save();
        Toastr::success('El producto ha sido confirmado correctamente.', 'Éxito');
        // Notification::route('mail',$product->email )->notify(new ProductConfirmed());
        return redirect()->back();
    }
}
