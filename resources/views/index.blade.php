@extends('layout')
@section('head')
    <style>
        .background {
            background-image: url('../asset/image/restoran.jpeg');
            background-size: cover;
            background-position: center;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endsection
@section('content')
    <div class="min-w-screen flex flex-col justify-center items-center h-screen background">
        @include('navbar')
        <div class="w-9/12 gap-y-4 justify-center items-center flex flex-col">
            <h1 class="font-bold text-4xl 2xl:text-8xl text-white text-center cinzel-regular">Food<span class="text-red">Nesia</span> – Authentic Indonesian Flavors, Served with Love</h1>
            <h1 class="text-lg 2xl:text-4xl text-white text-center p-2 lora-regular">Explore the best of Indonesian cuisine, freshly made just for you.</h1>
            <button type="button"
            class="inline-block rounded border-2 border-warning px-6 py-3 text-xs font-medium uppercase leading-normal text-warning transition duration-150 ease-in-out hover:border-warning-600 hover:bg-warning-50/50 hover:text-warning-600 focus:border-warning-600 focus:bg-warning-50/50 focus:text-warning-600 focus:outline-none focus:ring-0 active:border-warning-700 active:text-warning-700 motion-reduce:transition-none dark:hover:bg-yellow-950 dark:focus:bg-yellow-950"
            data-twe-ripple-init><a href="#best" class="text-lg 2xl:text-xl">Get Started</a></button>
        </div>
    </div>

    
    <div id="best" class="min-w-screen flex flex-col h-screen bg-brown justify-center items-center">
        <h1 class="p-5 font-bold text-4xl 2xl:text-8xl text-white text-center cinzel-regular">Here's our best menu!</h1>
        <div class="swiper mySwiper w-9/12 min-[550px]:w-1/2 h-9/12 pt-5">
            <div class="swiper-wrapper">
                <div class="swiper-slide block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat h-[200px]" data-twe-ripple-init
                        data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/ayam goreng.jpg') }}"
                            alt="" />
                    </div>
                    <div class="py-3 px-6 text-surface flex flex-col w-full justify-between items-center">
                        <h5 class="mb-2 text-base sm:text-lg xl:text-xl font-medium nunito-sans-regular">Ayam Goreng</h5>
                        <p class="mb-4 text-xs xl:text-sm 2xl:text-base text-left mulish-regular">
                            Crispy on the outside and tender on the inside, often marinated with rich spices before being deep-fried to perfection.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat h-[200px]" data-twe-ripple-init
                        data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/bakso.jpg') }}"
                            alt="" />
                    </div>
                    <div class="py-3 px-6 text-surface flex flex-col w-full justify-between items-center">
                        <h5 class="mb-2 text-base sm:text-lg xl:text-xl font-medium nunito-sans-regular">Bakso</h5>
                        <p class="mb-4 text-xs xl:text-sm 2xl:text-base text-left mulish-regular">
                            Indonesian meatballs, typically made from beef or chicken, are served in a savory broth with noodles and vegetables.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat h-[200px]" data-twe-ripple-init
                        data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/mie goreng.jpg') }}"
                            alt="" />
                    </div>
                    <div class="py-3 px-6 text-surface flex flex-col w-full justify-between items-center">
                        <h5 class="mb-2 text-base sm:text-lg xl:text-xl font-medium nunito-sans-regular">Mie Goreng</h5>
                        <p class="mb-4 text-xs xl:text-sm 2xl:text-base text-left mulish-regular">
                            Stir-fried noodles cooked with soy sauce, vegetables, eggs, and sometimes chicken or shrimp, creating a flavorful and savory dish.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat h-[200px]" data-twe-ripple-init
                        data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/nasgor.jpg') }}"
                            alt="" />
                    </div>
                    <div class="py-3 px-6 text-surface flex flex-col w-full justify-between items-center">
                        <h5 class="mb-2 text-base sm:text-lg xl:text-xl font-medium nunito-sans-regular">Nasi Goreng</h5>
                        <p class="mb-4 text-xs xl:text-sm 2xl:text-base text-left mulish-regular">
                            Indonesia’s signature fried rice dish, cooked with soy sauce, garlic, chili, and often served with eggs and shrimp crackers.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat h-[200px]" data-twe-ripple-init
                        data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/rawon.jpg') }}"
                            alt="" />
                    </div>
                    <div class="py-3 px-6 text-surface flex flex-col w-full justify-between items-center">
                        <h5 class="mb-2 text-base sm:text-lg xl:text-xl font-medium nunito-sans-regular">Rawon</h5>
                        <p class="mb-4 text-xs xl:text-sm 2xl:text-base text-left mulish-regular">
                            A traditional Indonesian black beef soup with a rich, earthy flavor from kluwek nuts, served with rice and side dishes.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat h-[200px]" data-twe-ripple-init
                        data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/rendang.jpg') }}"
                            alt="" />
                    </div>
                    <div class="py-3 px-6 text-surface flex flex-col w-full justify-between items-center">
                        <h5 class="mb-2 text-base sm:text-lg xl:text-xl font-medium nunito-sans-regular">Rendang</h5>
                        <p class="mb-4 text-xs xl:text-sm 2xl:text-base text-left mulish-regular">
                            A slow-cooked, caramelized beef stew with coconut milk and a blend of spices, resulting in a tender and intensely flavorful dish.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endsection

@section('script')
    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                1920: { // When screen width is 1920px or less
                    slidesPerView: 3, // Show 3 slides
                },
                1080: { // When screen width is 1080px or less
                    slidesPerView: 2, // Show 2 slides instead of 3
                },
                760: { // When screen width is 768px or less
                    slidesPerView: 1, // Show 1 slide instead of 2
                },
            },
            autoplay: {
                delay: 1250, // 2 seconds
                disableOnInteraction: false, // Keeps autoplay running even when user interacts
            },

        });
    </script>
@endsection
