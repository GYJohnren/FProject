<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class FoodController extends Controller
{
    public function show($id) {
        $room = Product::find($id);
    
        if (!$room) {
            return response()->json(['error' => 'Room not found'], 404);
        }
    
        return response()->json(['room' => $room]);
        }
        
        public function getImage($imageName){
            $filePath = public_path('product/' . $imageName);
    
            if (!file_exists($filePath)) {
                return response()->json(['error' => 'Image not found'], 404);
            }
    
            return response()->file($filePath);
        }
    
        public function index() {
            $rooms = Product::all();
            return response()->json(['message' => 'GET request received successfully', 'data' => $rooms]);
        }
        
       
        
        
        public function destroy($id) {
            $room = Product::find($id);
            $room->delete();
            return response()->json(['message' => "Successfully deleted!"]);
        }
}
