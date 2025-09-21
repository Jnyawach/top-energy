<div class="hidden md:block border-b fixed top-0 z-50 w-full border-gray-200 bg-white">
    <div class="self-center flex justify-between text-gray-900 py-3  px-3  max-w-5xl mx-auto">
        <div class="self-center">
            <a title="Top Energy home" href="/" class="font-extrabold text-lg text-blue-700">
               <div class="h-14">
                   <img src="{{asset('images/top-energy-logo.png')}}" alt="logo" class="rounded-sm h-full">
               </div>
            </a>
        </div>
        <div class="self-center">
            <ul class="flex gap-5 text-base font-medium">
                <li>
                    <a href="/" title="Top Energy Home"
                       class="btn-link hover:bg-top-500/10 hover:text-top-500 {{ request()->is('/') ? 'text-top-500 bg-top-500/10' : '' }}"

                    >
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{route('about')}}" title="About Top Energy"
                       class="btn-link hover:bg-top-500/10 hover:text-top-500 {{ Route::is('about') ? 'text-top-500 bg-top-500/10' : '' }}"
                    >
                        About
                    </a>
                </li>
                <li>
                    <a href="{{route('products')}}" title="Products"
                       class="btn-link hover:bg-top-500/10 hover:text-top-500 {{  Route::is('products') ? 'text-top-500 bg-top-500/10' : '' }}"
                    >
                        Products
                    </a>
                </li>
                <li>
                    <a href="{{route('contact-us.index')}}" title="Contact us"
                       class="btn-link hover:bg-top-500/10 hover:text-top-500 {{  Route::is('contact-us.index') ? 'text-top-500 bg-top-500/10' : '' }}"
                    >
                        Contact us
                    </a>
                </li>

                <li>
                    <a href="{{route('orders.index')}}" title="Order now"
                       class="btn-secondary"
                    >
                       Order Now
                    </a>
                </li>
            </ul>
        </div>

    </div>

</div>

<div class="grid md:hidden  w-full bg-slate-50 fixed border-b z-50 top-0">
    <div class="self-center flex justify-between text-gray-900 py-2 px-3 items-center">
        <div>
            <a title="Top Energy home" href="/">
                <div class="h-14">
                    <img src="{{asset('images/top-energy-logo.png')}}" alt="logo" class="rounded-sm h-full">
                </div>
            </a>
        </div>

        <div>
            <ul class="flex gap-5 items-center">
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
                <a href="/" title="Top Energy Home">Home</a>
            </li>
            <li>
                <a href="{{route('about')}}" title="About Top Energy">About</a>
            </li>
            <li>
                <a href="{{route('products')}}" title="Products">Products</a>
            </li>
            <li>
                <a href="{{route('contact-us.index')}}" title="Career insights blog">Contact us</a>
            </li>
        </ul>

    </div>
</div>
