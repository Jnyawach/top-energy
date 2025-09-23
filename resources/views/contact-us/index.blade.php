@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')
    <section class="bg-linear-to-r/srgb from-energy-800 via-energy-700 to-top-500">
        <div class="py-20 max-w-5xl mx-auto flex justify-center">
           <div class="flex justify-center w-full md:w-1/2" data-aos="zoom-in">
              <div class="text-center text-white space-y-3">
                  <h1 class="text-5xl font-bold">Contact Us</h1>
                  <p class="text-lg">Get in touch with our team for quotes, questions, or emergency service.
                      We're here to help with all your energy needs.</p>
              </div>
           </div>
        </div>
    </section>
    <section class="max-w-5xl mx-auto py-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-5 container">
            <div data-aos="fade-left">
                <div class="flex justify-center">
                    <div class="h-12 w-12 rounded-full flex place-content-center
                    bg-linear-to-r/srgb from-energy-800 to-top-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 text-white self-center" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M9.366 10.682a10.56 10.56 0 0 0 3.952 3.952l.884-1.238a1 1 0 0 1 1.294-.296a11.4 11.4 0 0 0 4.583 1.364a1 1 0 0 1 .921.997v4.462a1 1 0 0 1-.898.995Q19.307 21 18.5 21C9.94 21 3 14.06 3 5.5q0-.807.082-1.602A1 1 0 0 1 4.077 3h4.462a1 1 0 0 1 .997.921A11.4 11.4 0 0 0 10.9 8.504a1 1 0 0 1-.296 1.294zm-2.522-.657l1.9-1.357A13.4 13.4 0 0 1 7.647 5H5.01Q5 5.25 5 5.5C5 12.956 11.044 19 18.5 19q.25 0 .5-.01v-2.637a13.4 13.4 0 0 1-3.668-1.097l-1.357 1.9a12.5 12.5 0 0 1-1.588-.75l-.058-.033a12.56 12.56 0 0 1-4.702-4.702l-.033-.058a12.4 12.4 0 0 1-.75-1.588"/>
                        </svg>
                    </div>

                </div>
               <div class="text-center space-y-1">
                   <h6 class="text-lg text-top-500 font-medium">Phone</h6>
                   <p>+243-XXX-XXX-XXX</p>
               </div>
            </div>

            <div data-aos="zoom-in">
                <div class="flex justify-center">
                    <div class="h-12 w-12 rounded-full flex place-content-center
                    bg-linear-to-r/srgb from-energy-800 to-top-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 text-white self-center" viewBox="0 0 24 24">
                           <path fill="currentColor" d="M21 3a1 1 0 0 1 1 1v16.007a1 1 0 0 1-.992.993H2.992A.993.993 0 0 1 2 20.007V19h18V7.3l-8 7.2l-10-9V4a1 1 0 0 1 1-1zM8 15v2H0v-2zm-3-5v2H0v-2zm14.566-5H4.434L12 11.81z"/>
                        </svg>
                    </div>

                </div>
                <div class="text-center space-y-1">
                    <h6 class="text-lg text-top-500 font-medium">Email</h6>
                    <p>info@topenergy.com</p>
                </div>
            </div>

            <div data-aos="zoom-in">
                <div class="flex justify-center">
                    <div class="h-12 w-12 rounded-full flex place-content-center
                    bg-linear-to-r/srgb from-energy-800 to-top-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 text-white self-center" viewBox="0 0 24 24">
                            <path fill="currentColor" d="m12 18.485l4.243-4.242a6 6 0 1 0-8.486 0zm5.657-2.828L12 21.314l-5.657-5.657a8 8 0 1 1 11.314 0M5 22h14v2H5z"/>
                        </svg>
                    </div>

                </div>
                <div class="text-center space-y-1">
                    <h6 class="text-lg text-top-500 font-medium">Address</h6>
                    <p>Lubumbashi, DRC</p>
                </div>
            </div>

            <div data-aos="fade-right">
                <div class="flex justify-center">
                    <div class="h-12 w-12 rounded-full flex place-content-center
                    bg-linear-to-r/srgb from-energy-800 to-top-500">
                        <svg xmlns="http://www.w3.org/2000/svg"  class="h-6 text-white self-center" viewBox="0 0 24 24">
                           <path fill="currentColor" d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10s-4.477 10-10 10m0-2a8 8 0 1 0 0-16a8 8 0 0 0 0 16m1-8h4v2h-6V7h2z"/>
                        </svg>
                    </div>

                </div>
                <div class="text-center space-y-1">
                    <h6 class="text-lg text-top-500 font-medium">Hours</h6>
                    <p>Monday-Friday, 8:00AM - 5:00PM</p>
                </div>
            </div>

        </div>
    </section>

    <section class="bg-slate-100">
        <div class="max-w-5xl mx-auto p-3 md:p-10">
            <div class="flex justify-center ">
                <div class="md:w-1/2 lg:w-3/5 space-y-3" data-aos="zoom-in">
                    <div class="text-center space-y-2">
                        <h2 class="text-xl font-bold text-top-500">Send Us a Message</h2>
                        <p class="text-sm">Fill out the form below and we'll respond within 48 hours</p>
                    </div>
                    <form action="{{route('contact-us.store')}}" method="POST">
                        @csrf
                        @honeypot
                        <input type="hidden" name="last_name" >
                        <div class="space-y-4">
                            <div>
                                <input type="text" name="name" class="creative-input " required placeholder="Enter Your Name">
                                @error('name')
                                <div  class="creative-error">
                                    <span>{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                            <div class="grid md:grid-cols-2 gap-1">
                                <div>
                                    <input type="text" name="phone" value="{{old('phone')}}" class="creative-input " required placeholder="Phone">
                                    @error('phone')
                                    <div  class="creative-error">
                                        <span>{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>
                                <div>
                                    <input type="email" name="email" value="{{old('email')}}" class="creative-input " required placeholder="Enter Your Email">
                                    @error('email')
                                    <div  class="creative-error">
                                        <span>{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid">
                                <div>
                                    <input type="text" name="subject" value="{{old('subject')}}" class="creative-input " required placeholder="Subject">
                                    @error('subject')
                                    <div  class="creative-error">
                                        <span>{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="grid">
                                <textarea required placeholder="Write your message" class="creative-text-input " rows="4" name="message">{{old('message')}}</textarea>
                                @error('message')
                                <div  class="creative-error">
                                    <span>{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-5 flex sm:justify-end">
                            <button type="submit" class="btn-primary sm:btn-small flex gap-3" >
                                Send Message

                            </button>
                        </div>
                        @if(session('status'))
                            <div class="mt-3 text-center">
                                <p class="text-energy-700">{{session('status')}}</p>
                            </div>
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
