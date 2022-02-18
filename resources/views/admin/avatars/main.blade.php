@extends('layouts.index')

@section('content')
<h1 class="text-center text-3xl">Bienvenu sur l'espace AVATARS</h1>
<p class="text-center">USERS COUNT :{{ count($avatars) }} / 5</p>
@if (count($avatars) < 2)
    <div class="flex justify-center">
        <a href="{{ route('avatar.create') }}" class="text-blue-600 dark:text-blue-500 hover:underline">Create</a>

    </div>
@else 
    <p class="text-center">Maximum avatar atteint</p>
@endif

<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-md sm:rounded-lg">
                <table class="min-w-full">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Avatar
                            </th>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Name
                            </th>
                            <th scope="col"
                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                url
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($avatars as $item)
                            
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              <img width="50" src="{{ asset('img/'. $item->url) }}" alt="">
                            </td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              {{ $item->name }}
                            </td>
                            <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                              {{ $item->url }}
                            </td>

                            <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                <a href="{{ route('avatar.edit', $item->id) }}" class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <form action="{{ route('avatar.destroy', $item->id)}}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button class="text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

             
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection