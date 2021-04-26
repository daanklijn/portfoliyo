<div class="p-14">
    <h1 class="text-4xl font-semibold mb-5 logo-shadow">Portfoliyo.</h1>
    <h2 class="text-xl text-gray-600 mb-10">A minimal, Laravel and Tailwind-based portfolio for all your photos.</h2>
    <div class="text-lg font-semibold text-gray-700 leading-9">
        <ul class="mb-5">
            <li><a href="/" class="hover:text-blue-500 transition-colors duration-300">About</a></li>
            <li><a href="/" class="hover:text-blue-500 transition-colors duration-300">Contact</a></li>
        </ul>
        <ul>
            @foreach ($collections as $collection)
            <li><a href="/" class="hover:text-blue-500 transition-colors duration-300">{{ $collection->title }}</a></li>
            <!--            @foreach ($collection->photos as $photo)-->
            <!--                <div>{{$photo->title}}</div>-->
            <!--                <img src="{{$photo['path']}}">-->
            <!---->
            <!--            @endforeach-->
            @endforeach
        </ul>
    </div>
</div>
