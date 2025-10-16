<div class="hidden md:block border-b fixed top-0 z-50 w-full border-gray-200 bg-white">
    <div class="self-center flex justify-between text-gray-900 py-3  px-3  max-w-5xl mx-auto">
        <div class="self-center">
            <a title=" {{__('menu.home')}}" href="/" class="font-extrabold text-lg text-blue-700">
               <div class="h-14">
                   <img src="{{asset('images/top-energy-logo.png')}}" alt="logo" class="rounded-sm h-full">
               </div>
            </a>
        </div>
        <div class="self-center">
            <ul class="flex gap-5 text-base font-medium">
                <li>
                    <a href="/" title=" {{__('menu.home')}}"
                       class="btn-link hover:bg-top-500/10 hover:text-top-500 {{ request()->is('/') ? 'text-top-500 bg-top-500/10' : '' }}"

                    >
                          {{__('menu.home')}}
                    </a>
                </li>
                <li>
                    <a href="{{route('about')}}" title="{{__('menu.about')}}"
                       class="btn-link hover:bg-top-500/10 hover:text-top-500 {{ Route::is('about') ? 'text-top-500 bg-top-500/10' : '' }}"
                    >
                       {{__('menu.about')}}
                    </a>
                </li>
                <li>
                    <a href="{{route('products')}}" title="{{__('menu.products')}}"
                       class="btn-link hover:bg-top-500/10 hover:text-top-500 {{  Route::is('products') ? 'text-top-500 bg-top-500/10' : '' }}"
                    >
                       {{__('menu.products')}}
                    </a>
                </li>
                <li>
                    <a href="{{route('contact-us.index')}}" title="{{__('menu.contact_us')}}"
                       class="btn-link hover:bg-top-500/10 hover:text-top-500 {{  Route::is('contact-us.index') ? 'text-top-500 bg-top-500/10' : '' }}"
                    >
                       {{__('menu.contact_us')}}
                    </a>
                </li>

                <li>
                    <a href="{{route('orders.index')}}" title="{{__('menu.order_now')}}"
                       class="btn-secondary"
                    >
                       {{__('menu.order_now')}}
                    </a>
                </li>
                <li>

                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"  type="button"
                            class="flex gap-0.5 items-center text-sm"
                    >
                        <span class="uppercase">{{ App::getLocale() }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5" viewBox="0 0 24 24">
                            <path fill="currentColor" d="m12 13.171l4.95-4.95l1.414 1.415L12 16L5.636 9.636L7.05 8.222z"/>
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-sm shadow-sm w-28">

                        <ul class="p-2 text-xs space-y-2 divide-y" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="{{route('lang','en')}}">{{__('menu.en')}}</a>
                            </li>
                            <li>
                                <a href="{{route('lang','fr')}}">{{__('menu.fr')}}</a>
                            </li>
                            <li>
                                <a href="{{route('lang','sw')}}">{{__('menu.sw')}}</a>
                            </li>
                            <li>
                                <a href="{{route('lang','zh')}}">{{__('menu.zh')}}</a>
                            </li>

                        </ul>
                    </div>


                </li>

            </ul>
        </div>

    </div>

</div>

<div class="grid md:hidden  w-screen bg-slate-50 fixed border-b z-50 top-0">
    <div class="self-center flex justify-between text-gray-900 py-2 px-3 items-center">
        <div>
            <a title="Top Energy home" href="/">
                <div class="h-14">
                    <img src="{{asset('images/top-energy-logo.png')}}" alt="logo" class="rounded-sm h-full">
                </div>
            </a>
        </div>

        <div>
            <ul class="flex gap-5 items-center px-3">
                <li class="self-center flex">
                    <button id="dropdownDefaultButton2" data-dropdown-toggle="dropdown"  type="button"
                            class="flex gap-0.5 items-center text-sm"
                    >
                        <span class="uppercase">{{ App::getLocale() }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5" viewBox="0 0 24 24">
                            <path fill="currentColor" d="m12 13.171l4.95-4.95l1.414 1.415L12 16L5.636 9.636L7.05 8.222z"/>
                        </svg>
                    </button>


                    <!-- Dropdown menu -->
                    <div id="dropdown2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-sm shadow-sm w-32">

                        <ul class="p-2 text-sm space-y-2 divide-y" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="{{route('lang','en')}}">{{__('menu.en')}}</a>
                            </li>
                            <li>
                                <a href="{{route('lang','fr')}}">{{__('menu.fr')}}</a>
                            </li>
                            <li>
                                <a href="{{route('lang','sw')}}">{{__('menu.sw')}}</a>
                            </li>
                            <li>
                                <a href="{{route('lang','zh')}}">{{__('menu.zh')}}</a>
                            </li>

                        </ul>
                    </div>


                </li>
                <li class="self-center flex items-center">

                    <button type="button" class="p-0 m-0 text-top-500" data-drawer-target="drawer-menu" data-drawer-show="drawer-menu" aria-controls="drawer-menu">
                        <svg class="h-6 fill-top-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
                    </button>
                </li>
            </ul>
        </div>


    </div>
</div>

<div id="drawer-menu"
     class="fixed top-0 left-0 z-50 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80"
     tabindex="-1" aria-labelledby="drawer-label">
    <h5 id="drawer-label" class=" text-lg font-bold">
        MENU
    </h5>
    <button type="button" data-drawer-hide="drawer-menu" aria-controls="drawer-menu"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-9 h-9 absolute top-2.5 end-2.5 flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
        </svg>
        <span class="sr-only">Close menu</span>
    </button>

    <div class="grid my-3 space-y-5">
        <ul class="space-y-4  font-medium">
            <li>
                <a href="/" title="{{__('menu.home')}}">
                    {{__('menu.home')}}
                </a>
            </li>
            <li>
                <a href="{{route('about')}}" title="{{__('menu.about')}}">
                    {{__('menu.about')}}
                </a>
            </li>
            <li>
                <a href="{{route('products')}}" title="{{__('menu.products')}}">
                    {{__('menu.products')}}
                </a>
            </li>
            <li>
                <a href="{{route('contact-us.index')}}" title=" {{__('menu.contact_us')}}">
                    {{__('menu.contact_us')}}
                </a>
            </li>
        </ul>

    </div>
</div>
