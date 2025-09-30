@extends('layouts.main')
@section('title', __('about.about_us'))
@section('content')
    <section style="background-image: url('{{ asset('images/about-banner.jpg') }}'); background-size: cover; background-position: center;">
        <div class="h-[40vh] bg-gradient-to-r from-energy-800 to-top-500/30">
           <div class="flex h-full place-content-center max-w-4xl mx-auto" data-aos="zoom-in">
               <div class="space-y-4 text-white text-center p-5 self-center">
                   <h1 class="text-4xl font-bold">{{ __('about.company_name') }}</h1>
                   <p>{{ __('about.company_intro') }}</p>
               </div>
           </div>
        </div>
    </section>

    <section>
        <div class="max-w-5xl mx-auto py-10 px-3 ">
            <div class="text-center space-y-5">
                <div class="space-y-4">
                    <h2 class="text-2xl font-bold text-top-500">{{ __('about.mission_title') }}</h2>
                    <p>{{ __('about.mission_desc') }}</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-5xl mx-auto py-10 space-y-8 px-3">
            <div class="space-y-4 text-center">
                <h2 class="text-2xl font-bold text-top-500">{{ __('about.values_title') }}</h2>
                <p>{{ __('about.values_desc') }}</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-5 container">
                <div class="bg-slate-100 p-3 space-y-2 hover:scale-105 transition-all duration-300 hover:shadow-xl hover:shadow-top-500/30 rounded-lg" data-aos="fade-right">
                    <div class="flex justify-center">
                        <div class="h-12 w-12 rounded-full flex place-content-center bg-linear-to-r/srgb from-energy-800 to-top-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 text-white self-center" viewBox="0 0 24 24">
                               <path fill="currentColor" d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10m0-2a8 8 0 1 0 0-16a8 8 0 0 0 0 16m1-8h4v2h-6V7h2z"/>
                            </svg>
                        </div>
                    </div>
                   <div class="text-center space-y-2">
                       <h3 class="text-xl font-bold text-top-500">{{ __('about.reliability') }}</h3>
                       <p>{{ __('about.reliability_desc') }}</p>
                   </div>
                </div>
                <div class="bg-slate-100 p-3 space-y-2 hover:scale-105 transition-all duration-300 hover:shadow-xl hover:shadow-top-500/30 rounded-lg" data-aos="zoom-in">
                    <div class="flex justify-center">
                        <div class="h-12 w-12 rounded-full flex place-content-center bg-linear-to-r/srgb from-energy-800 to-top-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 text-white self-center" viewBox="0 0 24 24">
                               <path fill="currentColor" d="M3.783 2.826L12 1l8.217 1.826a1 1 0 0 1 .783.976v9.987a6 6 0 0 1-2.672 4.992L12 23l-6.328-4.219A6 6 0 0 1 3 13.79V3.802a1 1 0 0 1 .783-.976M5 4.604v9.185a4 4 0 0 0 1.781 3.328L12 20.597l5.219-3.48A4 4 0 0 0 19 13.79V4.604L12 3.05z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="text-xl font-bold text-top-500">{{ __('about.safety') }}</h3>
                        <p>{{ __('about.safety_desc') }}</p>
                    </div>
                </div>
                <div class="bg-slate-100 p-3 space-y-2 hover:scale-105 transition-all duration-300 hover:shadow-xl hover:shadow-top-500/30 rounded-lg" data-aos="zoom-in">
                    <div class="flex justify-center">
                        <div class="h-12 w-12 rounded-full flex place-content-center bg-linear-to-r/srgb from-energy-800 to-top-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 text-white self-center" viewBox="0 0 24 24">
                               <path fill="currentColor" d="M2 22a8 8 0 1 1 16 0h-2a6 6 0 0 0-12 0zm8-9c-3.315 0-6-2.685-6-6s2.685-6 6-6s6 2.685 6 6s-2.685 6-6 6m0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4s-4 1.79-4 4s1.79 4 4 4m8.284 3.703A8 8 0 0 1 23 22h-2a6 6 0 0 0-3.537-5.473zm-.688-11.29A5.5 5.5 0 0 1 21 8.5a5.5 5.5 0 0 1-5 5.478v-2.013a3.5 3.5 0 0 0 1.041-6.609z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="text-xl font-bold text-top-500">{{ __('about.customer_focus') }}</h3>
                        <p>{{ __('about.customer_focus_desc') }}</p>
                    </div>
                </div>
                <div class="bg-slate-100 p-3 space-y-2 hover:scale-105 transition-all duration-300 hover:shadow-xl hover:shadow-top-500/30 rounded-lg" data-aos="fade-left">
                    <div class="flex justify-center">
                        <div class="h-12 w-12 rounded-full flex place-content-center bg-linear-to-r/srgb from-energy-800 to-top-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 text-white self-center" viewBox="0 0 24 24">
                               <path fill="currentColor" d="M13 9h8L11 24v-9H4l9-15zm-2 2V7.22L7.532 13H13v4.394L17.263 11z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="text-xl font-bold text-top-500">{{ __('about.innovation') }}</h3>
                        <p>{{ __('about.innovation_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-slate-100">
        <div class="max-w-5xl mx-auto py-10 space-y-8 px-3">
           <div class="text-center">
               <h1 class="text-2xl font-bold text-top-500">{{ __('about.what_we_do_title') }}</h1>
               <p>{{ __('about.what_we_do_desc') }}</p>
           </div>
            <div class="grid md:grid-cols-2 gap-5" data-aos="zoom-in">
                <div class="flex gap-2 bg-slate-50 p-5 rounded-lg hover:scale-105 transition-all duration-300 hover:shadow-xl hover:shadow-top-500/30">
                    <div>
                        <div class="h-12 w-12 rounded-full flex place-content-center bg-linear-to-r/srgb from-energy-800 to-top-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 text-white self-center" viewBox="0 0 24 24">
                               <path fill="currentColor" d="M8.965 18a3.5 3.5 0 0 1-6.93 0H1V6a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2h3l3 4.056V18h-2.035a3.501 3.501 0 0 1-6.93 0zM15 7H3v8.05a3.5 3.5 0 0 1 5.663.95h5.674c.168-.353.393-.674.663-.95zm2 6h4v-.285L18.992 10H17zm.5 6a1.5 1.5 0 1 0 0-3.001a1.5 1.5 0 0 0 0 3.001M7 17.5a1.5 1.5 0 1 0-3 0a1.5 1.5 0 0 0 3 0"/>
                            </svg>
                        </div>
                    </div>
                    <div class="space-y-1">
                        <h6 class="text-top-500 text-lg font-bold">{{ __('about.bulk_fuel_title') }}</h6>
                        <p>{{ __('about.bulk_fuel_desc') }}</p>
                    </div>
                </div>
                <div class="flex gap-2 bg-slate-50 p-5 rounded-lg hover:scale-105 transition-all duration-300 hover:shadow-xl hover:shadow-top-500/30">
                    <div>
                        <div class="h-12 w-12 rounded-full flex place-content-center bg-linear-to-r/srgb from-energy-800 to-top-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 text-white self-center" viewBox="0 0 24 24">
                               <path fill="currentColor" d="M5 12.5c0 .313.461.858 1.53 1.393C7.914 14.585 9.877 15 12 15s4.086-.415 5.47-1.107c1.069-.535 1.53-1.08 1.53-1.393v-2.171C17.35 11.349 14.827 12 12 12s-5.35-.652-7-1.671zm14 2.829C17.35 16.349 14.827 17 12 17s-5.35-.652-7-1.671V17.5c0 .313.461.858 1.53 1.393C7.914 19.585 9.877 20 12 20s4.086-.415 5.47-1.107c1.069-.535 1.53-1.08 1.53-1.393zM3 17.5v-10C3 5.015 7.03 3 12 3s9 2.015 9 4.5v10c0 2.485-4.03 4.5-9 4.5s-9-2.015-9-4.5m9-7.5c2.123 0 4.086-.415 5.47-1.107C18.539 8.358 19 7.813 19 7.5s-.461-.858-1.53-1.393C16.086 5.415 14.123 5 12 5s-4.086.415-5.47 1.107C5.461 6.642 5 7.187 5 7.5s.461.858 1.53 1.393C7.914 9.585 9.877 10 12 10"/>
                            </svg>
                        </div>
                    </div>
                    <div class="space-y-1">
                        <h6 class="text-top-500 text-lg font-bold">{{ __('about.depot_inventory_title') }}</h6>
                        <p>{{ __('about.depot_inventory_desc') }}</p>
                    </div>
                </div>
                <div class="flex gap-2 bg-slate-50 p-5 rounded-lg hover:scale-105 transition-all duration-300 hover:shadow-xl hover:shadow-top-500/30">
                    <div>
                        <div class="h-12 w-12 rounded-full flex place-content-center bg-linear-to-r/srgb from-energy-800 to-top-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 text-white self-center" viewBox="0 0 24 24">
                                <path fill="currentColor" d="m12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0zm4.95-7.778a7 7 0 1 0-9.9 0L12 20.9zM12 13a2 2 0 1 1 0-4a2 2 0 0 1 0 4"/>
                            </svg>
                        </div>
                    </div>
                    <div class="space-y-1">
                        <h6 class="text-top-500 text-lg font-bold">{{ __('about.safe_delivery_title') }}</h6>
                        <p>{{ __('about.safe_delivery_desc') }}</p>
                    </div>
                </div>
                <div class="flex gap-2 bg-slate-50 p-5 rounded-lg hover:scale-105 transition-all duration-300 hover:shadow-xl hover:shadow-top-500/30">
                    <div>
                        <div class="h-12 w-12 rounded-full flex place-content-center bg-linear-to-r/srgb from-energy-800 to-top-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 text-white self-center" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M20 22H4a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1m-1-2V4H5v16zM8 7h8v2H8zm0 4h8v2H8zm0 4h5v2H8z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="space-y-1">
                        <h6 class="text-top-500 text-lg font-bold">{{ __('about.transparent_comm_title') }}</h6>
                        <p>{{ __('about.transparent_comm_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
