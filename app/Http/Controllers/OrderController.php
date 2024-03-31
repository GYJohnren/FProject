<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;



class OrderController extends Controller
{
    public function store(Request $request)
{
    // Ensure that user_id is provided in the request
    if (!$request->has('user_id')) {
        return response()->json(['error' => 'User ID is required'], 422);
    }

    // Create a new order instance
    $order = new Order;

    // Associate the order with the product if the product_id exists in the request
    if ($request->has('product_id')) {
        $order->product_id = $request->product_id;
    } else {
        // If product_id is not provided, return a validation error
        return response()->json(['error' => 'Product ID is required'], 422);
    }

    // Fill in other order details
    $order->quantity = $request->quantity;
    $order->message = $request->message;
    $order->totalprice = $request->totalprice;

    // Assign the user_id from the request
    $order->user_id = $request->user_id;

    // Save the order
    $order->save();

    // Return a JSON response indicating success
    return response()->json(['message' => 'Order placed successfully'], 201);
}

public function index(Request $request)
    {
        // Validate the request to ensure 'user_id' is provided
        $request->validate([
            'user_id' => 'required|integer',
        ]);

        // Retrieve orders associated with the provided user_id
        $orders = Order::where('user_id', $request->user_id)->get();

        // Return JSON response with the orders data
        return response()->json(['orders' => $orders]);
    }


}
