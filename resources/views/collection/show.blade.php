@extends ('layouts.app')

@section('content')
<div class="text-4xl my-4">{{ $collection->title }}</div>
<div class="text-2xl text-gray-700 my-8">{{ $collection->description }}</div>
<div class="masonry-3">
    @foreach($collection->photos->sortBy('order')->reverse() as $photo)
    <div class="mb-6 relative cursor-pointer">
        <img class=""
             src="{{$photo['path']}}">
    </div>
    @endforeach
</div>
@endsection
