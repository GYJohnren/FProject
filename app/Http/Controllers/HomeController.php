<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;
use App\Models\Order;
class HomeController extends Controller
{
    
    public function index()
    {
        $products=Product::all();
        return view('home.userpage',compact('products'));
    }


    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if ($usertype=='1')
        {
            return view ('admin.home');
        }

        else {
            $products=Product::all();
            return view('home.userpage',compact('products'));
        }

    }

    public function addToCart(Request $request, $productId) {
        // Retrieve the product by its ID
        $product = Product::findOrFail($productId);
    
        // Perform any additional checks if necessary
        // For example, checking if the product exists, if it's available, etc.
        
        // Add logic to add the product to the cart
        // Assuming you have a cart functionality set up, you would typically do something like:
        auth()->user()->cart()->attach($product->id);
    
        return redirect()->back()->with('success', 'Product added to cart successfully.');
    }

    public function showCart()
{
    // Retrieve the current authenticated user
    $user = Auth::user();

    // Retrieve the cart items associated with the user
    $cartItems = $user->cart;

    return view('home.cart', compact('cartItems'));
}
    


public function product_details($id) {
    $data = Product::find($id);
    return view('home.product_details', compact('data'));

}

public function add_order(Request $request, $id){
    // Get the currently authenticated user
    $user = Auth::user();

    // Create a new order instance
    $order = new Order;

    // Associate the order with the product
    $order->product_id = $id;

    // Fill in other order details
    $order->quantity = $request->quantity;
    $order->message = $request->message;
    $order->totalprice = $request->totalprice;

    // Associate the order with the currently authenticated user
    $user->orders()->save($order);

    // Redirect back with success message
    return redirect()->back()->with('message', 'Order placed successfully!');
}



public function order()
{
    // Get the currently authenticated user
    $user = Auth::user();

    // Retrieve the orders associated with the user
    $data = Order::where('user_id', $user->id)->get();

    // Debug: Dump the orders variable

    // Return a view with the orders data
    return view('home.order', compact('data'));

}





}