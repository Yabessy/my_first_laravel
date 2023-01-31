@props(['tagss'])
@php
    $tags = explode(',', $tagss);
@endphp
<ul class="flex gap-2 my-1.5">
    @foreach ($tags as $tag)
        <li class="flex justify-center items-center rounded-full w-auto p-2 h-6 bg-black text-white text-xs">{{ $tag }}
        </li>
    @endforeach
</ul>
