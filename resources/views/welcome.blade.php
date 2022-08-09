@extends('layout.index')

@section('content')
    <h1>Welcome Subheading</h1>

    <div class="flex items-center py-4 px-2 overflow-y-auto whitespace-nowrap bg-gray-200">
        <a href="#" class="text-blue-500 dark:text-blue-500">Home</a>

        <span class="mx-5 text-gray-500 dark:text-gray-300">
            /
        </span>

        <a href="#" class="text-gray-600 dark:text-gray-200 hover:underline">
            Welcome
        </a>
    </div>
    <div>
        <p>{{ url('welcome', []) }}</p>
    </div>
    <div class="text-center py-20 px-10 bg-gray-200">
        <span>Hello CodingSchool</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, magnam?</p>
        <hr>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, eum.</p>

        <button
            class="px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
            About
        </button>
    </div>
@endsection
