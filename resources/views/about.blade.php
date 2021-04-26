@extends ('layouts.app')

@section('content')
<div class="text-4xl my-4 text-center">About</div>
<div class="text-2xl text-gray-700 my-8 text-center">Hey there, here's some stuff about me!</div>
<div class="bg-white my-12 pb-6 pt-16 w-full justify-center items-center overflow-hidden md:max-w-sm rounded-lg shadow-sm mx-auto">
    <div class="relative shadow mx-auto h-24 w-24 -my-12 border-white rounded-full overflow-hidden border-4">
        <img class="object-cover w-full h-full" src="avatar.jpg">
    </div>
    <div class="mt-16">
        <h1 class="text-lg text-center font-semibold">
            Daan
        </h1>
        <p class="text-sm text-gray-600 text-center">
            Photographer
        </p>
    </div>
    <div class="mt-6 pt-3 flex flex-wrap mx-6 border-t text-gray-800">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
</div>
@endsection
