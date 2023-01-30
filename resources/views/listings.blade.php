@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')

@unless(count($listing) == 0)
<div class="lg:grid lg:grid-cols-2 gap-4  space-y-4 md:space-y-0 mx-4">
    @foreach ($listing as $list)
        <div class=" bg-gray-100 p-2">
            <a class="underline text-xl font-semibold" href="/{{$list->id}}" >{{$list->title}}</a>
            <h5 class="text-lg mb-2">{{$list->company}}</h5>
            @php
                $tags = explode(',', $list['tags'])     
            @endphp
            <ul class="flex gap-2 my-1.5">
                @foreach ($tags as $tag)
                    <li class="flex justify-center items-center rounded-full w-auto p-2 h-6 bg-black text-white">{{$tag}}</li>
                @endforeach
            </ul>
            <div>
                <i class="flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                  </svg>
                  {{$list->location}}</i>
            </div>
        </div>
    @endforeach
</div>
@else
    <p>not found</p>
@endunless

@endsection