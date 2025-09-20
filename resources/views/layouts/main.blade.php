<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>@yield('title') | Top Energy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{asset('images/cm-fav.png')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
    <meta name="description" content="@yield('meta_description')">
</head>
<body class="bg-slate-50 font-outfit text-sm">
<header>
    @include('layouts.navbar')
</header>
<main class="pt-16">

    @yield('content')
</main>


<footer class="py-10 px-3  bg-energy-800 text-white ">
    <div class="mx-auto max-w-5xl space-y-5">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-5 md:divide-x divide-energy-700">
            <div class="md: col-span-2">
                <div class="space-y-2">
                    <div class="flex gap-2 items-center w-full">
                       <div>
                           <div class="h-20 w-16 flex-grow bg-white rounded-sm p-2 flex justify-center">
                               <img src="{{asset('images/top-energy-logo.png')}}" alt="logo" class="rounded-sm h-full">
                           </div>
                       </div>
                       <div>
                           <p>
                               Your trusted partner for reliable energy solutions. We provide high-quality
                               fuel and energy services to power your business forward.
                           </p>
                       </div>

                    </div>
                    <div class="flex gap-5 items-center">
                        <p class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M9.366 10.682a10.56 10.56 0 0 0 3.952 3.952l.884-1.238a1 1 0 0 1 1.294-.296a11.4 11.4 0 0 0 4.583 1.364a1 1 0 0 1 .921.997v4.462a1 1 0 0 1-.898.995Q19.307 21 18.5 21C9.94 21 3 14.06 3 5.5q0-.807.082-1.602A1 1 0 0 1 4.077 3h4.462a1 1 0 0 1 .997.921A11.4 11.4 0 0 0 10.9 8.504a1 1 0 0 1-.296 1.294zm-2.522-.657l1.9-1.357A13.4 13.4 0 0 1 7.647 5H5.01Q5 5.25 5 5.5C5 12.956 11.044 19 18.5 19q.25 0 .5-.01v-2.637a13.4 13.4 0 0 1-3.668-1.097l-1.357 1.9a12.5 12.5 0 0 1-1.588-.75l-.058-.033a12.56 12.56 0 0 1-4.702-4.702l-.033-.058a12.4 12.4 0 0 1-.75-1.588"/>
                            </svg>
                            <span>+243-XXX-XXX-XXX</span>
                        </p>
                        <p class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M21 3a1 1 0 0 1 1 1v16.007a1 1 0 0 1-.992.993H2.992A.993.993 0 0 1 2 20.007V19h18V7.3l-8 7.2l-10-9V4a1 1 0 0 1 1-1zM8 15v2H0v-2zm-3-5v2H0v-2zm14.566-5H4.434L12 11.81z"/>
                            </svg>
                            <span>info@topenergy.com</span>
                        </p>
                    </div>
                </div>
            </div>

            <div>
                <h6 class="text-lg font-bold ">Quick Links</h6>
                <ul class="space-y-3 mt-5">
                    <li>
                        <a href="#" class="hover:underline" title="Top Ee">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{route('about')}}" class="hover:underline" title="About Top Energy">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline" title="Products">Products</a>
                    </li>
                    <li>
                        <a href="{{route('contact-us.index')}}" class="hover:underline" title="Contact Us">Contact Us</a>
                    </li>

                </ul>
            </div>
            <div>
                <h6 class="text-lg font-bold ">Office Location & hours</h6>
                <div class="space-y-2">
                    <p><span class="font-bold">Head office:</span> Lubumbashi DRC</p>
                    <p><span class="font-bold">Working hours:</span> Monday-Friday, 8:00AM - 5:00PM </p>
                </div>

            </div>

        </div>

        <div>
            <div>
                <p> &copy; {{date('Y')}}  EnergyFlow. All rights reserved.</p>
            </div>

        </div>
    </div>

</footer>
@yield('scripts')

</body>
</html>
