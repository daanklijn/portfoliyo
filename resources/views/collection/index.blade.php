@extends ('layouts.app')

@section('content')
<div class="text-4xl my-4">Manage Collections</div>
<div class="text-2xl text-gray-700 my-8">Here you can manage your collections.</div>
<div class="bg-white shadow-md rounded m-6">
    <table class="table-auto min-w-full max-w-full">
    <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">Title</th>
            <th class="py-3 px-6 text-left">Subtitle</th>
            <th class="py-3 px-6 text-center">Description</th>
            <th class="py-3 px-6 text-center"># Photos</th>
            <th class="py-3 px-6 text-center">Actions</th>
        </tr>
    </thead>
    <tbody class="text-gray-600 text-sm font-light">
    @foreach($collections as $collection)
    <tr class="border-b border-gray-200 hover:bg-gray-100">
        <td class="py-3 px-6 text-left truncate max-w-xxs truncate">
            <span class="font-semibold">{{ $collection->title }}</span>
        </td>
        <td class="py-3 px-6 text-left max-w-xxs truncate">
            <span class="">{{ $collection->subtitle }}</span>
        </td>
        <td class="py-3 px-6 text-left max-w-xxs truncate">
            <span class="">{{ $collection->description }}</span>
        </td>
        <td class="py-3 px-6 text-center">
            <span class="bg-blue-200 text-blue-600 py-1 px-3 rounded-full text-xs">{{ $collection->photos->count() }}</span>
        </td>
        <td class="py-3 px-6 text-left">
            <div class="flex item-center justify-center space-x-2">
                <a class="hover:text-blue-400" href="{{ route('collection.index') }}"><i class="fa fa-eye"></i></a>
                <a class="hover:text-blue-400" href="{{ route('collection.index') }}"><i class="fa fa-pen"></i></a>
                <a class="hover:text-blue-400" href="{{ route('collection.index') }}"><i class="fa fa-trash"></i></a>
            </div>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
