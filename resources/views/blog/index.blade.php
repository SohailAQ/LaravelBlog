@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b bg-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2015/12/09/15/51/code-1084923_960_720.png" width="700" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
            Learn how to code.
        </h2>
        <span class="text-gray-500">
            Authored by, <span class="font-bold italic text-gray-800">Laravel Blogger</span>, 1 day ago.
        </span>
        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, repudiandae aliquid recusandae modi quam obcaecati quos voluptatem itaque repellendus iusto deserunt atque dignissimos, ratione distinctio beatae fugiat, temporibus ipsum laudantium.
        </p>
        <a href="" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Keep Reading.
        </a>
    </div>
</div>

@endsection