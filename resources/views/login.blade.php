@extends ('layouts.app')

@section('content')
<form method="POST" action="{{ route('login.post') }}">
    @csrf
    <div class="text-4xl my-4">Admin login</div>
    <div class="text-2xl text-gray-700 my-8">Please login to edit your collections.
    </div>
    <div class="w-80 mt-5">
        <label for="password"
               class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" name="password" id="password"
               class="mt-1 p-2 focus:ring-2 text-gray-700 focus:ring-blue-400 focus:border-blue-200 block w-full
               shadow-sm sm:text-sm border-gray-300 rounded-md">
    </div>
    <button class="inline-block border border-blue-200 rounded mt-4
    py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white cursor-pointer">
        Login
    </button>
</form>
@endsection
