@extends('layouts.main')
@section('title', __('products.our_products'))
@section('content')
    <section class="bg-linear-to-r/srgb from-energy-800 via-energy-700 to-top-500">
        <div class="py-20 max-w-5xl mx-auto flex justify-center">
            <div class="flex justify-center w-full md:w-2/3" data-aos="zoom-in">
                <div class="text-center text-white space-y-3">
                    <h1 class="text-5xl font-bold">{{ __('products.products') }}</h1>
                    <p class="text-lg">{{ __('products.intro') }}</p>
                </div>
            </div>
        </div>
    </section>


    @if($products->count())
        <section>
            <div class="max-w-5xl mx-auto py-14">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        @foreach($products as $product)
                            <div class="bg-white p-5 space-y-2 hover:scale-105 transition-all
                         duration-300 hover:shadow-xl hover:shadow-top-500/30 rounded-lg">
                                <div>
                                    <h2 class="text-xl font-bold text-top-500">{{$product->name}}</h2>
                                    <p class="font-bold text-base">{{$product->price}} USD {{ __('products.per') }} {{$product->uom}}</p>
                                </div>
                               <div>
                                   <div class="rich-text">
                                       {!! $product->description !!}
                                   </div>
                               </div>
                                <div class="my-3">
                                    <a href="{{route('orders.index',['product'=>$product->id])}}" class="btn-primary">
                                       {{ __('products.order_now') }}
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
            </div>
        </section>
    @else
        <div class="min-h-screen flex justify-center py-10">
            <h1 class="text-xl font-bold">{{ __('products.no_products') }}</h1>
        </div>
    @endif

@endsection
