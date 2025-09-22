<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Hashids\Hashids;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::where('status',1)->get();
        return view('orders.index', compact('products'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated=$request->validate([
            'product_id'=>'required|exists:products,id',
            'customer_name'=>'required|string|max:100',
            'company_name'=>'nullable|string|max:100',
            'email'=>'nullable|email|max:100',
            'phone_number'=>'required|string|max:100',
            'street'=>'required|string|max:100',
            'city'=>'required|string|max:100',
            'country'=>'required|string|max:100',
            'quantity'=>'required|integer|min:1',
        ]);
        $product=Product::findOrFail($validated['product_id']);
        $validated['uom']=$product->uom;
        $order=Order::create($validated);
        $hashids = new Hashids();
       return redirect()->route('orders.show', $hashids->encode($order->id));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hashids = new Hashids();
        $orderId = $hashids->decode($id)[0] ?? null;
        $order = Order::findOrFail($orderId);
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
