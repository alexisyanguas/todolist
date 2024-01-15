@extends('components.table')

@section('header')
    <div class="w-full md:w-1/2">
        <form class="flex items-center">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 :text-gray-400" fill="currentColor" viewbox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <input type="text" id="simple-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 :bg-gray-700 :border-gray-600 :placeholder-gray-400 :text-white :focus:ring-primary-500 :focus:border-primary-500"
                    placeholder="Search" required="">
            </div>
        </form>
    </div>
    <div
        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
        <a href="{{ route('users.create') }}"
            class="flex items-center justify-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 :bg-primary-600 :hover:bg-primary-700 focus:outline-none :focus:ring-primary-800">
            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
            </svg>
            Create
        </a>
    </div>
@endsection

@section('head')
    <tr>
        <th scope="col" class="px-4 py-4">Avatar</th>
        <th scope="col" class="px-4 py-4">Name</th>
        <th scope="col" class="px-4 py-4">Email</th>
        <th scope="col" class="px-4 py-4">Actions</th>
    </tr>
@endsection

@section('body')
    @foreach ($users as $user)
        <tr class="border-b :border-gray-700">
            <td class="px-4 py-3" scope="row">
                <div class="flex items-center">
                    <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-full"
                            src="{{ $user?->avatar ?? 'https://ui-avatars.com/api/?name=' . $user?->name }}" alt="">
                    </div>
                </div>
            </td>

            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap :text-white">
                {{ $user?->name }}
            </th>
            <td class="px-4 py-3 text-gray-500 whitespace-nowrap :text-gray-400">
                {{ $user?->email }}
            </td>

            <td class="px-4 py-3 flex items-center justify-end">
                <a href="{{ route('users.edit', $user) }}"
                    class="flex w-full items-center py-2 px-4 hover:bg-gray-100 :hover:bg-gray-600 :hover:text-white text-gray-700 :text-gray-200">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                    </svg>
                    Edit
                </a>
                <form action="{{ route('users.destroy', $user) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button
                        class="flex w-full items-center py-2 px-4 hover:bg-gray-100 :hover:bg-gray-600 text-red-500 :hover:text-red-400">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endsection

@section('count')
    <span class="text-sm font-normal text-gray-500 :text-gray-400">
        Nombre de tâches
        <span
            class="
                    font-medium
                    text-gray-900
                    :text-white

                ">
            {{ $users->count() }}
        </span>
    @endsection
