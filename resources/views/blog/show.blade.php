@extends('layouts.app')
@section('content')

{{session()->get('message')}}
<div class="container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-bold"> {{$post->title}}</h1>
    <div class="mt-2">
        <span>BY: <span class="text-gray-500 italic">{{$post->user->name}}</span></span>
        <span>ON <span class="text-gray-500 italic">{{date('d-m-Y', strtotime($post->updated_at))}}</span></span>
    </div>
</div>

<div class="container m-auto pt-15 pb-5">
    <div class="flex h-96">
        <img class="object-cover w-full" src="/images/{{$post->image_path}}" alt="">
    </div>
    <p class="text-l text-gray-700 py-8 leading-6">{{$post->description}}</p>

    @if(Auth::user() && Auth::user()->id == $post->user_id)
    <a class="bg-green-700 text-green-100 py-4 px-5 mt-6 inline-block rounded-lg font-bold uppercase text-l place-self-start" href="/blog/{{$post->slug}}/edit"> Edit post</a>
    @endif
</div>

@endsection