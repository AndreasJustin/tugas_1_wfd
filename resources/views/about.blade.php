@extends('layout')
@section('head')
    <style>
        .background {
            background-image: url('../asset/image/restoran indo.jpeg');
            background-size: cover;
            background-position: center;
        }
    </style>
<div class="min-w-screen flex flex-col justify-center items-center h-screen background">
    @include('navbar')
    <div class="w-9/12 gap-y-4 justify-center items-center flex flex-col">
        <h1 class="font-bold text-4xl 2xl:text-8xl text-white text-center cinzel-regular">About <span class="text-red">FoodNesia</span></h1>
        <p class="text-lg 2xl:text-2xl text-white text-center p-4 lora-regular">
            At FoodNesia, we are passionate about bringing authentic Indonesian flavors to your table.
            Our chefs use traditional recipes and the freshest ingredients to create dishes that celebrate 
            Indonesia’s rich culinary heritage. Whether you’re looking for a nostalgic taste of home or an 
            exciting new experience, FoodNesia is here to serve you with love.
        </p>
        <div class="w-full flex flex-row gap-x-3 justify-center items-center">
            <a href="https://instagram.com">
                <img class="w-[40px]" src="{{asset('asset/image/instagram.svg')}}" alt="">
            </a>
            <a href="https://tiktok.com">
                <img class="w-[40px]" src="{{asset('asset/image/tiktok.svg')}}" alt="">
            </a>
        </div>
    </div>
</div>