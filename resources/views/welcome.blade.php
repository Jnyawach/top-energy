@extends('layouts.main')
@section('title', 'Welcome to Top Energy')
@section('content')
    <section style="background-image: url('{{ asset('images/fuel-depo.jpg') }}'); background-size: cover; background-position: center;">
      <div class="h-[75vh] bg-gradient-to-r from-energy-800/80 to-top-500/50">
          <div class="flex h-full justify-center items-center place-content-center">
                 <div class="text-white text-center space-y-5">
                     <h1 class="text-6xl font-bold text-top-500">Powering Your  <span class="text-energy-800">Energy Future</span></h1>
                     <p class="text-xl">We deliver petroleum products reliably, safely, and efficiently to customers</p>
                     <div class="flex justify-center">
                         <a href="{{route('orders.index')}}">
                             <button class="btn-secondary flex gap-2 items-center">
                                 <span>Order now</span>
                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-4" viewBox="0 0 24 24">
                                     <path fill="currentColor" d="M2 13v-2h16.172l-3.95-3.95l1.414-1.414L22 12l-6.364 6.364l-1.414-1.414l3.95-3.95z"/>
                                 </svg>
                             </button>
                         </a>
                     </div>
                 </div>
          </div>

      </div>
    </section>
    <section>
        <div class="max-w-5xl mx-auto py-14 space-y-5">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-top-500">Our Energy Solutions</h2>
                <p>Comprehensive fuel and energy services designed to meet your specific needs</p>
            </div>

            <div class="grid md:grid-cols-3 gap-5">
                <div class="bg-slate-100 p-5 space-y-2 hover:scale-105 transition-all
                duration-300 hover:shadow-xl hover:shadow-top-500/30 rounded-lg">
                    <div class="flex justify-center">
                        <div class="h-12 w-12 rounded-full flex place-content-center
                    bg-linear-to-r/srgb from-energy-800 to-top-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 text-white self-center"  viewBox="0 0 24 24">
                               <path fill="currentColor" d="M4 10.4V4a1 1 0 0 1 1-1h5V1h4v2h5a1 1 0 0 1 1 1v6.4l1.086.326a1 1 0 0 1 .683 1.2l-1.517 6.068a5 5 0 0 1-1.902-.273l1.25-5.351L12 10l-7.6 2.37l1.25 5.351a5 5 0 0 1-1.902.273l-1.516-6.068a1 1 0 0 1 .682-1.2zm2-.6L12 8l6 1.8V5H6zM4 20a5.98 5.98 0 0 0 4-1.528A5.98 5.98 0 0 0 12 20a5.98 5.98 0 0 0 4-1.528A5.98 5.98 0 0 0 20 20h2v2h-2a7.96 7.96 0 0 1-4-1.07A7.96 7.96 0 0 1 12 22a7.96 7.96 0 0 1-4-1.07A7.96 7.96 0 0 1 4 22H2v-2z"/>
                            </svg>
                        </div>

                    </div>
                    <div class="text-center">
                        <h3 class="text-xl font-bold text-top-500">Import</h3>
                        <p>
                            We import high quality petroleum products in partnership
                            with reputable upstream international logistics and supply firms
                        </p>
                    </div>
                </div>

                <div class="bg-slate-100 p-5 space-y-2 hover:scale-105 transition-all
                duration-300 hover:shadow-xl hover:shadow-top-500/30 rounded-lg">
                    <div class="flex justify-center">
                        <div class="h-12 w-12 rounded-full flex place-content-center
                    bg-linear-to-r/srgb from-energy-800 to-top-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 text-white self-center" viewBox="0 0 24 24">
                               <path fill="currentColor" d="M9 2.458v2.124A8.003 8.003 0 0 0 12 20a8 8 0 0 0 7.419-5h2.123c-1.274 4.057-5.064 7-9.542 7c-5.523 0-10-4.477-10-10c0-4.478 2.943-8.268 7-9.542M12 2c5.523 0 10 4.477 10 10q0 .507-.05 1H11V2.05Q11.493 2 12 2m1 2.062V11h6.938A8.004 8.004 0 0 0 13 4.062"/>
                            </svg>
                        </div>

                    </div>
                    <div class="text-center">
                        <h3 class="text-xl font-bold text-top-500">Sales & Marketing</h3>
                        <p>
                            We market PMS & AGO to local wholesale, retails and mining firms
                        </p>
                    </div>
                </div>

                <div class="bg-slate-100 p-5 space-y-2 hover:scale-105 transition-all
                duration-300 hover:shadow-xl hover:shadow-top-500/30 rounded-lg">
                    <div class="flex justify-center">
                        <div class="h-12 w-12 rounded-full flex place-content-center
                    bg-linear-to-r/srgb from-energy-800 to-top-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 text-white self-center" viewBox="0 0 24 24">
                               <path fill="currentColor" d="M8.965 18a3.5 3.5 0 0 1-6.93 0H1V6a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2h3l3 4.056V18h-2.035a3.501 3.501 0 0 1-6.93 0zM15 7H3v8.05a3.5 3.5 0 0 1 5.663.95h5.674c.168-.353.393-.674.663-.95zm2 6h4v-.285L18.992 10H17zm.5 6a1.5 1.5 0 1 0 0-3.001a1.5 1.5 0 0 0 0 3.001M7 17.5a1.5 1.5 0 1 0-3 0a1.5 1.5 0 0 0 3 0"/>
                            </svg>
                        </div>

                    </div>
                    <div class="text-center">
                        <h3 class="text-xl font-bold text-top-500">Distribution</h3>
                        <p>
                            We have a robust logistics network that is able to deliver petroleum products to
                            your business location
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-slate-100">
        <div class="max-w-5xl mx-auto py-14">
            <div class="text-center space-y-3">
                <h2 class="text-3xl font-bold text-top-500">Ready to Get Started?</h2>
                <p>Contact us today for a customized energy solution that fits your needs</p>
                <div class="flex justify-center">
                    <a href="{{route('orders.index')}}">
                        <button class="btn-primary flex gap-2 items-center">
                            <span>Order now</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4" viewBox="0 0 24 24">
                               <path fill="currentColor" d="M2 13v-2h16.172l-3.95-3.95l1.414-1.414L22 12l-6.364 6.364l-1.414-1.414l3.95-3.95z"/>
                            </svg>
                        </button>
                    </a>

                </div>
            </div>

        </div>

    </section>
@endsection
