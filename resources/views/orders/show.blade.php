@extends('layouts.main')
@section('title', __('orders.details_title'))
@section('content')
    <section class="bg-linear-to-r/srgb from-energy-800  via-top-500 to-energy-700">
        <div class="py-20 max-w-5xl mx-auto flex justify-center">
            <div class="flex justify-center w-full md:w-1/2">
                <div class="text-center text-white space-y-3">
                    <h1 class="text-5xl font-bold">{{ __('orders.thank_you') }}</h1>
                    <p class="text-lg">{{ __('orders.received_message') }}</p>
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
                                <h2 class="text-xl font-bold text-top-500">{{ __('orders.details_heading') }}</h2>
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm"><span class="font-semibold">{{ __('orders.product') }}:</span> {{ $order->product->name }} {{$order->product->uom}}</p>
                                <p class="text-sm"><span class="font-semibold">{{ __('orders.name') }}:</span> {{$order->customer_name }}</p>
                                <p class="text-sm"><span class="font-semibold">{{ __('orders.email') }}:</span> {{ $order->email }}</p>
                                <p class="text-sm"><span class="font-semibold">{{ __('orders.phone') }}:</span> {{ $order->phone_number }}</p>
                                <p class="text-sm"><span class="font-semibold">{{ __('orders.street_address') }}:</span> {{ $order->street }}</p>
                                <p class="text-sm"><span class="font-semibold">{{ __('orders.city') }}:</span> {{ $order->city }}</p>
                                <p class="text-sm"><span class="font-semibold">{{ __('orders.country') }}:</span> {{ $order->country }}</p>
                            </div>
                        </div>
                    @else
                        <div>
                            <p class="text-lg ">{{ __('orders.not_found') }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
