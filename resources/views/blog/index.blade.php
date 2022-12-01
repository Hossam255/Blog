@extends('layouts.app')
@section('content')

<div class="container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-bold">جميع الموضوعات</h1>
</div>

@if(Auth::check())
<div class="container sm:grid mx-auto p-5 border-b border-gray-300">
<a class="bg-green-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start" href="/blog/create"> اضف موضوعا جديدا</a>
</div>
@endif

@foreach($posts as $post)
<div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15 border-b border-gray-300">
    <div class="flex">
        <img class="object-cover" src="{{$post->image_path}}" alt="">
    </div>

    <div>
        <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">
            {{$post->title}}
        </h2>
        <div>
            <span>BY: <span class="text-gray-500 italic">{{$post->user->name}}</span></span>
            <span>ON <span class="text-gray-500 italic">{{date('d-m-Y', $post->updated_at)}}</span></span>
            <p class="text-l text-gray-700 py-8 leading-6">{{$post->description}}</p>
            <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start" href="/blog/{{$post->slug}}"> Read More</a>
        </div>
    </div>
</div>
@endforeach




<div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15 border-b border-gray-300">
    <div class="flex">
        <img class="object-cover" src="https://picsum.photos/id/344/960/620" alt="">
    </div>

    <div>
        <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0">
            How to create a blog with laravel
        </h2>
        <div>
            <span>BY: <span class="text-gray-500 italic">Hossam Hassan</span></span>
            <p class="text-l text-gray-700 py-8 leading-6">You may instruct Vapor to automatically configure a firewall that provides basic protection against denial-of-service attacks targeting your environment, as well as protection against pervasive bot traffic that can consume your environment's resources.
            Before getting started, keep in mind that Vapor's managed firewall inspects requests using the IP address from the web request origin. Therefore, this feature should only be used if the requests are not already being reversed proxied through a service such as Cloudflare. If you are already using a reverse proxy, you should not use this feature.</p>

            <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start" href="/"> Read More</a>
        </div>
    </div>
</div>

@endsection