@extends ('layouts.app')

@section('content')
<div class="masonry-2">
    @foreach($collections as $collection)
    <a href="{{ route('collection.show', $collection) }}">
    @if($collection->photos->isNotEmpty())
    <div class="mb-6 relative cursor-pointer">
        <img src="{{$collection->photos->first()['path']}}">
        <!--Overlay-->
        <div class="lg:bg-blue-500 lg:bg-opacity-50 absolute lg:opacity-0 hover:opacity-100
            top-0 right-0 bottom-0 left-0 transition-opacity duration-500">
            <div class="absolute text-white font-bold left-0 right-0 top-1/3 text-center">
                <div class="sm:text-xl lg:text-2xl font-bold">{{$collection->title}}</div>
                <div class="sm:invisible lg:visible text-medium font-medium mx-2">{{$collection->subtitle}}</div>
            </div>
        </div>
    </div>
    @endif
    </a>
    @endforeach
</div>
@endsection
