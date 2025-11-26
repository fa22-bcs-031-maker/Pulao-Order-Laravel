<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PulaoOrder;

class PulaoController extends Controller
{
    // This method shows the home page with the order form
    public function home()
    {
        return view('home');
    }

    // This method shows the about page
    public function about()
    {
        return view('about');
    }

    // This method handles the order submission
    public function placeOrder(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'address' => 'required|string',
            'plate_type' => 'required|in:single,double',
            'quantity' => 'required|integer|min:1'
        ]);

        // Calculate the total price
        $pricePerPlate = $validated['plate_type'] === 'single' ? 150 : 250;
        $totalPrice = $pricePerPlate * $validated['quantity'];

        // Create a new order in the database
        PulaoOrder::create([
            'customer_name' => $validated['customer_name'],
            'address' => $validated['address'],
            'plate_type' => $validated['plate_type'],
            'quantity' => $validated['quantity'],
            'total_price' => $totalPrice
        ]);

        // Redirect back with success message
        return redirect()->route('home')->with('success', 'Order confirmed! We will reach you in 15 minutes.');
    }
}
