@extends('layouts.index')

@section('content')
<h1 class="text-3xl text-center my-2">Welcome : {{ Auth::user()->prenom }}</h1>
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
</div>

<!-- This is an example component -->
<div class="flex justify-center max-w-2xl mx-auto justify-center ">

    <div class=" max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col items-center pb-10 w-96">
            <img class="mb-3 w-24 h-24 rounded-full shadow-lg"
                src="{{ asset("img/" . Auth::user()->avatar->url) }}" alt="{{ Auth::user()->avatar->name }}">
            <h3 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ Auth::user()->name }}
                {{ Auth::user()->prenom }}</h3>
                
            <h3 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ Auth::user()->email }}<h3>
            <h3 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Role : {{ Auth::user()->role->name }}<h3>
      
        </div>
    </div>
    <div class="mx-5">

        <form method="POST" action="{{ route('user.update', Auth::user()->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                <input type="name" id="name" name="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Name" required="" value="{{ Auth::user()->name }}">
            </div>
            <div class="mb-6">
                <label for="prenom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prenom</label>
                <input type="prenom" id="prenom" name="prenom"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Prenom" required="" value="{{ Auth::user()->prenom }}">
            </div>
            <div class="mb-6">
                <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">age</label>
                <input type="age" id="age" name="age"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Age" required="" value="{{ Auth::user()->age }}">
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">email</label>
                <input type="email" id="email" name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Email" required="" value="{{ Auth::user()->email }}">
            </div>
            <div class="mb-6">
                    <div class="mb-3 xl:w-96">
                        <label for="">Select avatar</label>
                      <select name="avatar_id" class="form-select appearance-none
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example">
                        @foreach ($avatars as $item)
                              <option {{ $item->id === Auth::user()->avatar->id ? "selected" : "" }} value="{{ $item->id }}">{{ $item->name }}</option>
                          @endforeach
                      </select>
                    </div>
            </div>
    
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

    </div>
</div>



@endsection
