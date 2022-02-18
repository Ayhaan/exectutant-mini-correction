@extends('layouts.index')

@section('content')
    <h1 class="text-center">Bienvenu sur l'espace catégories</h1>
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
  </div>

  <table class="min-w-max table-auto mx-10">
    <thead class="justify-between">
      <tr class="bg-indigo-600">
        <th class="px-16 py-2">
          <span class="text-gray-300"></span>
        </th>
        <th class="px-16 py-2">
          <span class="text-indigo-50">Img</span>
        </th>
        <th class="px-16 py-2">
          <span class="text-indigo-50">Name</span>
        </th>
        <th class="px-16 py-2">
          <span class="text-indigo-50">Barcode</span>
        </th>

        <th class="px-16 py-2">
          <span class="text-indigo-50">Price</span>
        </th>
        <th class="px-16 py-2">
          <span class="text-indigo-50">Status</span>
        </th>
      </tr>
    </thead>
    <tbody class="bg-gray-200">
      <tr class="bg-white border-4 border-gray-200 text-center">
        <td class="px-16 py-2 flex flex-row items-center">
          <img class="h-8 w-8 object-cover" src="https://randomuser.me/api/portraits/men/30.jpg" alt="" />
        </td>
        <td>
          <span class="text-center ml-2 font-semibold">Dean Lynch</span>
        </td>
        <td class="px-16 py-2">samsung</td>
        <td class="px-16 py-2">
          <span>05/06/2020</span>
        </td>
        <td class="px-16 py-2">
          <span>10:00</span>
        </td>

        <td class="px-16 py-2">
          <span class="text-green-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" />
              <path d="M5 12l5 5l10 -10" />
            </svg>
          </span>
        </td>
      </tr>
      <tr class="bg-white border-4 border-gray-200 text-center">
        <td class="px-16 py-2 flex flex-row items-center">
          <img class="h-8 w-8 object-cover" src="https://randomuser.me/api/portraits/men/76.jpg" alt="" />
        </td>
        <td>
          <span class="text-center ml-2 font-semibold">Ralph Barnes</span>
        </td>
        <td class="px-16 py-2">Iphone 13</td>
        <td class="px-16 py-2">
          <span>05/06/2020</span>
        </td>
        <td class="px-16 py-2">
          <span>12:15</span>
        </td>

        <td class="px-16 py-2">
          <span class="text-yellow-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" />
              <circle cx="12" cy="12" r="9" />
              <polyline points="12 7 12 12 15 15" />
            </svg>
          </span>
        </td>
      </tr>
      <tr class="bg-white border-4 border-gray-200 text-center">
        <td class="px-16 py-2 flex flex-row items-center">
          <img class="h-8 w-8 object-cover" src="https://randomuser.me/api/portraits/men/38.jpg" alt="" />
        </td>
        <td>
          <span class="text-center ml-2 font-semibold">Brett Castillo</span>
        </td>
        <td class="px-16 py-2">Oppo mini</td>
        <td class="px-16 py-2">
          <span>05/06/2020</span>
        </td>
        <td class="px-16 py-2">
          <span>08:35</span>
        </td>

        <td class="px-16 py-2">
          <span class="text-yellow-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" />
              <line x1="18" y1="6" x2="6" y2="18" />
              <line x1="6" y1="6" x2="18" y2="18" />
            </svg>
          </span>
        </td>
      </tr>
    </tbody>
  </table>
@endsection