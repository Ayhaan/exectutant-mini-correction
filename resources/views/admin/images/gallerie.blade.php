@extends('layouts.index')

@section('content')
<h1 class="text-center text-3xl my-2">Bienvenu sur l'espace IMAGE (membre)</h1>


<div class="grid grid-cols-4 gap-4">
@foreach ($images as $item)
    <div class="max-w-sm col bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="{{ asset('img/'. $item->url) }}" alt="">
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $item->url }}</h5>
            </a>
            <a href="{{ route('image.download', $item->id) }}" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Download</a>
        </div>
    </div>

    
    @endforeach
</div>

@endsection
