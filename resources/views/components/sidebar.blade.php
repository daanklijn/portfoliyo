<div class="p-14">
    <h1 class="text-4xl font-semibold mb-5 logo-shadow"><a href="/">{{ env('APP_TITLE') }}</a></h1>
    <h2 class="text-xl text-gray-600 mb-10">{{ env('APP_SUBTITLE') }}</h2>
    <div class="text-lg font-semibold text-gray-700 leading-9">
        <ul class="mb-5">
            <li>
                <a href="{{ route('about') }}"
                   class="hover:text-blue-500 transition-colors duration-500
                    {{ Route::currentRouteName() ==  'about' ? 'text-blue-500' : ''}}">
                    About
                </a>
            </li>
            <li>
                <a href="{{ route('welcome') }}"
                   class="hover:text-blue-500 transition-colors duration-500
                    {{ Route::currentRouteName() ==  'welcome' ? 'text-blue-500' : ''}}">
                    Collections
                </a>
            </li>
        </ul>
        <ul>
            @foreach ($collections as $collection)
            <li><a href="{{ route('collection.show', $collection) }}"
                   class="hover:text-blue-500 transition-colors duration-300
                    {{ $collection->isCurrentRoute()  ? 'text-blue-500' : ''}}">
                    {{ $collection->title }}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="text-gray-700 flex space-x-3 mt-8">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-tumblr"></i></a>
        <a href="#"><i class="fab fa-flickr"></i></a>
        <a href="{{ route('collection.index') }}"><i class="fa fa-cogs"></i></a>
    </div>
</div>
