@extends('layout')
@section('head')
@endsection
@section('content')
    <div class="min-w-screen min-h-screen flex flex-col bg-brown items-center">
        @include('navbar')
        <div class="w-[90%] sm:w-9/12 gap-y-4 justify-center items-center flex flex-col mt-14 p-6">
            <h1 class="font-bold text-4xl 2xl:text-8xl text-white text-center cinzel-regular">Catalog</h1>
            <div class="flex grid grid-cols-2 xl:grid-cols-3 gap-4">
                <div class="flex flex-col rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat h-[100px] lg:h-[150px] xl:h-[200px]"
                        data-twe-ripple-init data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/ayam goreng.jpg') }}" alt="" />
                    </div>
                    <div class="py-3 px-6 text-surface flex flex-col w-full justify-between items-center">
                        <h5 class="mb-2 text-base sm:text-lg xl:text-xl font-medium nunito-sans-regular">Ayam Goreng</h5>
                        <p class="mb-4 text-xs xl:text-sm 2xl:text-base text-left mulish-regular">
                            Crispy on the outside and tender on the inside, often marinated with rich spices before being
                            deep-fried to perfection.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat h-[100px] lg:h-[150px] xl:h-[200px]"
                        data-twe-ripple-init data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/ayam panggang.jpeg') }}" alt="" />
                    </div>
                    <div class="py-3 px-6 text-surface flex flex-col w-full justify-between items-center">
                        <h5 class="mb-2 text-base sm:text-lg xl:text-xl font-medium nunito-sans-regular">Ayam Goreng</h5>
                        <p class="mb-4 text-xs xl:text-sm 2xl:text-base text-left mulish-regular">
                            Crispy on the outside and tender on the inside, often marinated with rich spices before being
                            deep-fried to perfection.
                        </p>
                    </div>
                </div>
                <div class="block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat h-[100px] lg:h-[150px] xl:h-[200px]"
                        data-twe-ripple-init data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/bakso.jpeg') }}" alt="" />
                    </div>
                    <div class="py-3 px-6 text-surface flex flex-col w-full justify-between items-center">
                        <h5 class="mb-2 text-base sm:text-lg xl:text-xl font-medium nunito-sans-regular">Bakso</h5>
                        <p class="mb-4 text-xs xl:text-sm 2xl:text-base text-left mulish-regular">
                            Crispy on the outside and tender on the inside, often marinated with rich spices before being
                            deep-fried to perfection.
                        </p>
                    </div>
                </div>
                <div class="block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat h-[100px] lg:h-[150px] xl:h-[200px]"
                        data-twe-ripple-init data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/gado gado.jpeg') }}" alt="" />
                    </div>
                    <div class="py-3 px-6 text-surface flex flex-col w-full justify-between items-center">
                        <h5 class="mb-2 text-base sm:text-lg xl:text-xl font-medium nunito-sans-regular">Gado-Gado</h5>
                        <p class="mb-4 text-xs xl:text-sm 2xl:text-base text-left mulish-regular">
                            Crispy on the outside and tender on the inside, often marinated with rich spices before being
                            deep-fried to perfection.
                        </p>
                    </div>
                </div>
                <div class="block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat h-[100px] lg:h-[150px] xl:h-[200px]"
                        data-twe-ripple-init data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/mie goreng.jpg') }}" alt="" />
                    </div>
                    <div class="py-3 px-6 text-surface flex flex-col w-full justify-between items-center">
                        <h5 class="mb-2 text-base sm:text-lg xl:text-xl font-medium nunito-sans-regular">Mie Goreng</h5>
                        <p class="mb-4 text-xs xl:text-sm 2xl:text-base text-left mulish-regular">
                            Crispy on the outside and tender on the inside, often marinated with rich spices before being
                            deep-fried to perfection.
                        </p>
                    </div>
                </div>
                <div class="block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat h-[100px] lg:h-[150px] xl:h-[200px]"
                        data-twe-ripple-init data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/nasgor.jpg') }}" alt="" />
                    </div>
                    <div class="py-3 px-6 text-surface flex flex-col w-full justify-between items-center">
                        <h5 class="mb-2 text-base sm:text-lg xl:text-xl font-medium nunito-sans-regular">Nasi Goreng</h5>
                        <p class="mb-4 text-xs xl:text-sm 2xl:text-base text-left mulish-regular">
                            Crispy on the outside and tender on the inside, often marinated with rich spices before being
                            deep-fried to perfection.
                        </p>
                    </div>
                </div>
                <div class="block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat h-[100px] lg:h-[150px] xl:h-[200px]"
                        data-twe-ripple-init data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/rawon.jpg') }}" alt="" />
                    </div>
                    <div class="py-3 px-6 text-surface flex flex-col w-full justify-between items-center">
                        <h5 class="mb-2 text-base sm:text-lg xl:text-xl font-medium nunito-sans-regular">Rawon</h5>
                        <p class="mb-4 text-xs xl:text-sm 2xl:text-base text-left mulish-regular">
                            Crispy on the outside and tender on the inside, often marinated with rich spices before being
                            deep-fried to perfection.
                        </p>
                    </div>
                </div>
                <div class="block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat h-[100px] lg:h-[150px] xl:h-[200px]"
                        data-twe-ripple-init data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/Rendang.jpg') }}" alt="" />
                    </div>
                    <div class="py-3 px-6 text-surface flex flex-col w-full justify-between items-center">
                        <h5 class="mb-2 text-base sm:text-lg xl:text-xl font-medium nunito-sans-regular">Rendang</h5>
                        <p class="mb-4 text-xs xl:text-sm 2xl:text-base text-left mulish-regular">
                            Crispy on the outside and tender on the inside, often marinated with rich spices before being
                            deep-fried to perfection.
                        </p>
                    </div>
                </div>
                <div class="block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat h-[100px] lg:h-[150px] xl:h-[200px]"
                        data-twe-ripple-init data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/sate.jpg') }}" alt="" />
                    </div>
                    <div class="py-3 px-6 text-surface flex flex-col w-full justify-between items-center">
                        <h5 class="mb-2 text-base sm:text-lg xl:text-xl font-medium nunito-sans-regular">Sate</h5>
                        <p class="mb-4 text-xs xl:text-sm 2xl:text-base text-left mulish-regular">
                            Crispy on the outside and tender on the inside, often marinated with rich spices before being
                            deep-fried to perfection.
                        </p>
                    </div>
                </div>
                <div class="block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat h-[100px] lg:h-[150px] xl:h-[200px]"
                        data-twe-ripple-init data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/es buah.jpeg') }}" alt="" />
                    </div>
                    <div class="py-3 px-6 text-surface flex flex-col w-full justify-between items-center">
                        <h5 class="mb-2 text-base sm:text-lg xl:text-xl font-medium nunito-sans-regular">Es Buah</h5>
                        <p class="mb-4 text-xs xl:text-sm 2xl:text-base text-left mulish-regular">
                            Crispy on the outside and tender on the inside, often marinated with rich spices before being
                            deep-fried to perfection.
                        </p>
                    </div>
                </div>
                <div class="block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat h-[100px] lg:h-[150px] xl:h-[200px]"
                        data-twe-ripple-init data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/geprek.jpeg') }}" alt="" />
                    </div>
                    <div class="py-3 px-6 text-surface flex flex-col w-full justify-between items-center">
                        <h5 class="mb-2 text-base sm:text-lg xl:text-xl font-medium nunito-sans-regular">Ayam Geprek</h5>
                        <p class="mb-4 text-xs xl:text-sm 2xl:text-base text-left mulish-regular">
                            Crispy on the outside and tender on the inside, often marinated with rich spices before being
                            deep-fried to perfection.
                        </p>
                    </div>
                </div>
                <div class="block rounded-lg bg-white shadow-secondary-1">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat h-[100px] lg:h-[150px] xl:h-[200px]"
                        data-twe-ripple-init data-twe-ripple-color="light">
                        <img class="rounded-t-lg" src="{{ asset('asset/image/perkedel.jpeg') }}" alt="" />
                    </div>
                    <div class="py-3 px-6 text-surface flex flex-col w-full justify-between items-center">
                        <h5 class="mb-2 text-base sm:text-lg xl:text-xl font-medium nunito-sans-regular">Perkedel</h5>
                        <p class="mb-4 text-xs xl:text-sm 2xl:text-base text-left mulish-regular">
                            Crispy on the outside and tender on the inside, often marinated with rich spices before being
                            deep-fried to perfection.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
