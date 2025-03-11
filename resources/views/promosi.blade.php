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
    <div class="relative z-0 min-w-screen flex flex-col h-screen background">
        @include('navbar')
        <h1 class="p-5 font-bold text-8xl text-white text-center">Check out our best seller!</h1>
        <div class="swiper mySwiper w-1/2 h-1/2 pt-5">
            <div class="swiper-wrapper">
                <div class="swiper-slide block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init
                        data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/ayam goreng.jpg') }}" alt="" />
                        <a href="#!">
                            <div
                                class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                            </div>
                        </a>
                    </div>
                    <div class="p-6 text-surface">
                        <h5 class="mb-2 text-xl font-medium leading-tight">Card title</h5>
                        <p class="mb-4 text-base">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <button type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2"
                            data-twe-ripple-init data-twe-ripple-color="light">
                            Button
                        </button>
                    </div>
                </div>
                <div class="swiper-slide block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init
                        data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/bakso.jpg') }}" alt="" />
                        <a href="#!">
                            <div
                                class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                            </div>
                        </a>
                    </div>
                    <div class="p-6 text-surface">
                        <h5 class="mb-2 text-xl font-medium leading-tight">Card title</h5>
                        <p class="mb-4 text-base">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <button type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2"
                            data-twe-ripple-init data-twe-ripple-color="light">
                            Button
                        </button>
                    </div>
                </div>
                <div class="swiper-slide block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init
                        data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/mie goreng.jpg') }}" alt="" />
                        <a href="#!">
                            <div
                                class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                            </div>
                        </a>
                    </div>
                    <div class="p-6 text-surface">
                        <h5 class="mb-2 text-xl font-medium leading-tight">Card title</h5>
                        <p class="mb-4 text-base">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <button type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2"
                            data-twe-ripple-init data-twe-ripple-color="light">
                            Button
                        </button>
                    </div>
                </div>
                <div class="swiper-slide block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init
                        data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/nasgor.jpg') }}" alt="" />
                        <a href="#!">
                            <div
                                class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                            </div>
                        </a>
                    </div>
                    <div class="p-6 text-surface">
                        <h5 class="mb-2 text-xl font-medium leading-tight">Card title</h5>
                        <p class="mb-4 text-base">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <button type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2"
                            data-twe-ripple-init data-twe-ripple-color="light">
                            Button
                        </button>
                    </div>
                </div>
                <div class="swiper-slide block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init
                        data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/rawon.jpg') }}" alt="" />
                        <a href="#!">
                            <div
                                class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                            </div>
                        </a>
                    </div>
                    <div class="p-6 text-surface">
                        <h5 class="mb-2 text-xl font-medium leading-tight">Card title</h5>
                        <p class="mb-4 text-base">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <button type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2"
                            data-twe-ripple-init data-twe-ripple-color="light">
                            Button
                        </button>
                    </div>
                </div>
                <div class="swiper-slide block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init
                        data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/rendang.jpg') }}" alt="" />
                        <a href="#!">
                            <div
                                class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                            </div>
                        </a>
                    </div>
                    <div class="p-6 text-surface">
                        <h5 class="mb-2 text-xl font-medium leading-tight">Card title</h5>
                        <p class="mb-4 text-base">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <button type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2"
                            data-twe-ripple-init data-twe-ripple-color="light">
                            Button
                        </button>
                    </div>
                </div>
                <div class="swiper-slide block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init
                        data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/sate.jpg') }}" alt="" />
                        <a href="#!">
                            <div
                                class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                            </div>
                        </a>
                    </div>
                    <div class="p-6 text-surface">
                        <h5 class="mb-2 text-xl font-medium leading-tight">Card title</h5>
                        <p class="mb-4 text-base">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <button type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2"
                            data-twe-ripple-init data-twe-ripple-color="light">
                            Button
                        </button>
                    </div>
                </div>
                <div class="swiper-slide block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init
                        data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/gado gado.jpg') }}" alt="" />
                        <a href="#!">
                            <div
                                class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                            </div>
                        </a>
                    </div>
                    <div class="p-6 text-surface">
                        <h5 class="mb-2 text-xl font-medium leading-tight">Card title</h5>
                        <p class="mb-4 text-base">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <button type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2"
                            data-twe-ripple-init data-twe-ripple-color="light">
                            Button
                        </button>
                    </div>
                </div>
                <div class="swiper-slide block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init
                        data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/soto.jpg') }}" alt="" />
                        <a href="#!">
                            <div
                                class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                            </div>
                        </a>
                    </div>
                    <div class="p-6 text-surface">
                        <h5 class="mb-2 text-xl font-medium leading-tight">Card title</h5>
                        <p class="mb-4 text-base">
                            Some quick example text to build on the card title and make up the
                            bulk of the card's content.
                        </p>
                        <button type="button"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2"
                            data-twe-ripple-init data-twe-ripple-color="light">
                            Button
                        </button>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @endsection

    @section('script')
        <script>
            var swiper = new Swiper(".mySwiper", {
                loop: true,
                slidesPerView: 3,
                spaceBetween: 30,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                autoplay: {
                    delay: 1500, // 2 seconds
                    disableOnInteraction: false, // Keeps autoplay running even when user interacts
                },
            });
        </script>
    @endsection
