@extends('layout.index')

@section('content')
    <h1>About Subheading</h1>

    <div class="flex items-center py-4 px-2 overflow-y-auto whitespace-nowrap bg-gray-200 my-3">
        <a href="#" class="text-blue-500 dark:text-blue-500">Home</a>

        <span class="mx-5 text-gray-500 dark:text-gray-300">
            /
        </span>

        <a href="#" class="text-gray-600 dark:text-gray-200 hover:underline">
            About
        </a>
    </div>
    <div class="grid grid-cols-2 my-5 gap-5">
        <div class="img flex justify-center items-center bg-gray-200">
            <p class="text-gray-500 text-5xl">750 X 450</p>
        </div>
        <div class="text">
            <h2>About Modern School</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi esse hic veniam unde. Eius libero ex quaerat voluptas ad, atque cum explicabo cumque odio quia odit illum vero sunt exercitationem quibusdam est, repellat, consequuntur ducimus modi reiciendis nisi magnam! Facere corrupti minima ullam esse consequuntur similique ab modi eligendi voluptate.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error magni blanditiis id, odit earum tenetur fugiat autem deleniti amet impedit quisquam in illo nemo. Fugit quod similique libero corrupti, saepe officiis iusto vel aliquid labore delectus cupiditate reprehenderit nam animi a quisquam recusandae accusamus facilis aspernatur est officia mollitia exercitationem!</p>
        </div>
    </div>
    @endsection
