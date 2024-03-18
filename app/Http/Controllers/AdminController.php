<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    public function view_product()
    {  
        return view('admin.product');
    }

    public function add_product(Request $request)
    {
        $product=new product;

            $product->title=$request->title;

            $product->description=$request->description;

            $product->price=$request->price;

            $image=$request->image;

            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('product',$imagename);

            $product->image=$imagename;

            $product->save();

            return redirect()->back()->with('message','Product Added Successfully');
    }

    public function show_product()
    {
        $product=product::all();
        return view('admin.show_product',compact('product'));
    }

    public function delete_product($id)
    {
        $product=product::find($id);

        $product->delete();

        return redirect()->back()->with('message','Product Deleted Successfully');
    }

    public function update_product($id)
    {
        $product=product::find($id);


        return view('admin.update_product',compact('product'));
    }

    public function update_product_confirm(Request $request,$id)
    {
        $product=product::find($id);

        $product->title=$request->title;

        $product->description=$request->description;

        $product->price=$request->price;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('product',$imagename);

        $product->image=$imagename;

        $product->save();

        return redirect()->back();

    }

}       