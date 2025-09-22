@extends('layouts.main')
@section('title', 'Order Details')
@section('content')
    <section class="bg-linear-to-r/srgb from-energy-800  via-top-500 to-energy-700">
        <div class="py-20 max-w-5xl mx-auto flex justify-center">
            <div class="flex justify-center w-full md:w-1/2">
                <div class="text-center text-white space-y-3">
                    <h1 class="text-5xl font-bold">Thank you!</h1>
                    <p class="text-lg">We have received your. We will act on it and get back to you</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-slate-100">
        <div class="max-w-5xl mx-auto py-10 ">
            <div class="flex justify-center ">
                <div class="bg-white rounded-lg shadow-xl shadow-top-500/20 w-full md:w-2/3 p-8">
                    @if($order)
                        <div class="space-y-5">
                            <div>
                                <h2 class="text-xl font-bold text-top-500">Order details</h2>
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm"><span class="font-semibold">Product:</span> {{ $order->product->name }} {{$order->product->uom}}</p>
                                <p class="text-sm"><span class="font-semibold">Name:</span> {{$order->customer_name }}</p>
                                <p class="text-sm"><span class="font-semibold">Email:</span> {{ $order->email }}</p>
                                <p class="text-sm"><span class="font-semibold">Phone:</span> {{ $order->phone_number }}</p>
                                <p class="text-sm"><span class="font-semibold">Street Address:</span> {{ $order->street }}</p>
                                <p class="text-sm"><span class="font-semibold">City:</span> {{ $order->city }}</p>
                                <p class="text-sm"><span class="font-semibold">Country:</span>{{ $order->country }}</p>

                            </div>



                        </div>
                    @else
                        <div>
                            <p class="text-lg ">Order not found!</p>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>

@endsection
