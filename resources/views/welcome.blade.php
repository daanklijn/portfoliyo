@extends ('layouts.app')

@section('content')
<div class="masonry">
    @foreach($collections as $collection)
    <div class="mb-6 relative cursor-pointer">
        <img class=""
             src="{{$collection->photos->first()['path']}}">
        <!--Overlay-->
        <div class="bg-blue-500 bg-opacity-50 absolute opacity-0 hover:opacity-100
            top-0 right-0 bottom-0 left-0 transition-opacity duration-500">
            <div class="absolute text-white font-bold left-0 right-0 top-1/3 text-center">
                <div class="text-2xl font-bold">{{$collection->title}}</div>
                <div class="text-medium font-medium">{{$collection->description}}</div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
