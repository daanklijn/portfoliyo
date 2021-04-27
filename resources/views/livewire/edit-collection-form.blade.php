<div>
    <div class="text-4xl my-4">Edit Collection</div>
    <ul class="flex justify-between mt-8">
        <li class="mr-3">
            <div class="text-xl text-gray-700 py-2">Information</div>
        </li>
        <li class="mr-3">
            <label wire:click="save"
                   class="inline-block border border-blue-200 rounded py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white cursor-pointer">
                Save
            </label>
        </li>
    </ul>
    <div class="text-xl text-gray-700 my-4 mb-2 border-gray-200 border-t-2 pt-4"></div>
    <div class="w-80">
        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
        <input wire:model="title" type="text" name="title" id="title"
               class="mt-1 p-2 focus:ring-2 text-gray-700 focus:ring-blue-400 focus:border-blue-200 block w-full
           shadow-sm sm:text-sm border-gray-300 rounded-md">
    </div>
    <div class="w-80 mt-5">
        <label for="subtitle" class="block text-sm font-medium text-gray-700">Subtitle</label>
        <input wire:model="subtitle" type="text" name="subtitle" id="title"
               class="mt-1 p-2 focus:ring-2 text-gray-700 focus:ring-blue-400 focus:border-blue-200 block w-full
           shadow-sm sm:text-sm border-gray-300 rounded-md">
    </div>
    <div class="w-80 mt-5">
        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
        <textarea wire:model="description" type="text" name="description" id="description"
                  class="mt-1 p-2 text-gray-700 focus:ring-2 focus:ring-blue-400 focus:border-blue-200 block w-full
           shadow-sm sm:text-sm border-gray-300 rounded-md h-32">
    </textarea>
    </div>

<!--    <div class="text-xl text-gray-700 mt-8">Photos</div>-->
    <ul class="flex justify-between mt-12">
        <li class="mr-3">
            <div class="text-xl text-gray-700 py-2">Photos</div>
        </li>
        <li class="mr-3">
            <input type="file" wire:model="photo" id="photo"  accept="image/*" class="hidden">
            <label for="photo"
                class="inline-block border border-blue-200 rounded py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white cursor-pointer">
                Add photo
            </label>
        </li>
    </ul>
    <div class="text-xl text-gray-700 my-4 border-gray-200 border-t-2 pt-4"></div>

    <div class="masonry-3">
        @foreach($collection->photos->sortBy('order')->reverse() as $photo)
        <div class="mb-6 relative min-h-100">
            <img class=""
                 src="{{$photo['path']}}">

            <!--Overlay-->
            <div class="lg:bg-blue-500 lg:bg-opacity-50 absolute lg:opacity-0 hover:opacity-100
            top-0 right-0 bottom-0 left-0 transition-opacity duration-500">
                <div class="absolute text-white font-bold left-0 right-0 top-1/4 text-center">
                    <div wire:click="up({{ $photo }})" class="sm:text-xl lg:text-2xl font-bold m-2 cursor-pointer">{{$photo->order}}</div>
                    <div wire:click="up({{ $photo }})" class="sm:text-xl lg:text-2xl font-bold m-2 cursor-pointer">Up</div>
                    <div wire:click="remove({{ $photo }})" class="sm:text-xl lg:text-2xl font-bold m-2 cursor-pointer">Remove</div>
                    <div wire:click="down({{ $photo }})" class="sm:text-xl lg:text-2xl font-bold m-2 cursor-pointer">Down</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
