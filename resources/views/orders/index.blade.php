@extends('layouts.main')
@section('title', 'Orders')
@section('content')
    <section class="bg-linear-to-r/srgb from-energy-800  via-top-500 to-energy-700">
        <div class="py-20 max-w-5xl mx-auto flex justify-center">
            <div class="flex justify-center w-full md:w-1/2">
                <div class="text-center text-white space-y-3">
                    <h1 class="text-5xl font-bold">Order Fuel</h1>
                    <p class="text-lg">Fast, reliable fuel delivery for your business or home.
                        Get a quote in minutes and schedule delivery at your convenience.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-slate-100">
        <div class="max-w-5xl mx-auto py-10 ">
            <div class="flex justify-center ">
                <div class="bg-white rounded-lg shadow-xl shadow-top-500/20 w-full md:w-2/3 p-8">
                    <div class="space-y-5">
                        <div class="text-center ">
                            <h2 class="text-xl font-bold text-top-500">Place Your Order</h2>
                            <p>Fill out the details below and we'll provide a quote within 2 hours</p>
                        </div>
                        <form action="{{route('orders.store')}}" method="POST">
                            @csrf
                            @honeypot
                        <div class="space-y-3">
                            <div>
                              <h6 class="text-base font-bold">Customer details</h6>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <input type="text" name="customer_name" class="creative-input " required
                                           placeholder="Enter Your Name" value="{{old('customer_name')}}">
                                    @error('customer_name')
                                    <div  class="creative-error">
                                        <span>{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>

                                <div>
                                    <input type="text" name="phone_number" class="creative-input " required
                                           placeholder="Enter Your Phone Number" value="{{old('phone_number')}}">
                                    @error('phone_number')
                                    <div  class="creative-error">
                                        <span>{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>

                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <input type="email" name="email" class="creative-input " required
                                           placeholder="Enter Your Email (optional)" value="{{old('email')}}">
                                    @error('email')
                                    <div  class="creative-error">
                                        <span>{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>

                                <div>
                                    <input type="text" name="company_name" class="creative-input " required
                                           placeholder="Enter Your Company (optional)" value="{{old('company_name')}}">
                                    @error('company_name')
                                    <div  class="creative-error">
                                        <span>{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>

                            </div>

                            <div>
                                <h6 class="text-base font-bold">Product details</h6>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="md:col-span-2">
                                    <select class="creative-input" name="product_id">
                                        <option selected>Select product</option>
                                        @foreach($products as $product)
                                            <option value="{{$product->id}}"
                                                   @if(old('product_id') == $product->id || request('product') == $product->id)
                                                       selected
                                                @endif
                                            >
                                                {{$product->name}} ({{$product->uom}})
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('email')
                                    <div  class="creative-error">
                                        <span>{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>

                                <div class="md:col-span-1">
                                    <input type="number" name="quantity" class="creative-input" required
                                           placeholder="Enter Your Quantity" value="{{old('quantity')}}">
                                    @error('quantity')
                                    <div  class="creative-error">
                                        <span>{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <h6 class="text-base font-bold">Delivery details</h6>
                            </div>

                            <div>
                                <input type="text" name="street" class="creative-input" required
                                       placeholder="Enter Street address" value="{{old('street')??'DRC'}}">
                                @error('street')
                                <div  class="creative-error">
                                    <span>{{ $message }}</span>
                                </div>
                                @enderror
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <input type="text" name="country" class="creative-input" required
                                           placeholder="Enter Country" value="{{old('country')}}">
                                    @error('country')
                                    <div  class="creative-error">
                                        <span>{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>
                                <div>
                                    <input type="text" name="city" class="creative-input" required
                                           placeholder="Enter City" value="{{old('city')}}">
                                    @error('city')
                                    <div  class="creative-error">
                                        <span>{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <input type="date" name="preferred_delivery_date" class="creative-input"
                                       placeholder="Enter Preferred delivery Date (optional)"
                                       value="{{old('preferred_delivery_date')}}"
                                >
                                @error('city')
                                <div  class="creative-error">
                                    <span>{{ $message }}</span>
                                </div>
                                @enderror
                            </div>

                            <div class="mt-5 flex sm:justify-end">
                                <button type="submit" class="btn-primary sm:btn-small flex gap-3" >
                                    Place Order

                                </button>
                            </div>
                            @if(session('status'))
                                <div class="mt-3 text-center">
                                    <p class="text-energy-700">{{session('status')}}</p>
                                </div>
                            @endif

                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
