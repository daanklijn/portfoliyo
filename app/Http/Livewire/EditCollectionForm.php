<?php

namespace App\Http\Livewire;

use App\Models\Collection;
use App\Models\Photo;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditCollectionForm extends Component
{
    use WithFileUploads;

    public $collection;
    public $title;
    public $subtitle;
    public $description;

    public $photos;
    public $selected;

    public function mount($id)
    {
        $this->collection = Collection::find($id);
        $this->title = $this->collection->title;
        $this->subtitle = $this->collection->subtitle;
        $this->description = $this->collection->description;
    }

    public function render()
    {
        return view('livewire.edit-collection-form');
    }

    public function save()
    {
        $this->collection->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'description' => $this->description,
        ]);
        return redirect()->to(route('collection.edit', $this->collection));
    }

    public function remove($photo)
    {
        // TODO: Also remove the corresponding file from storage.
        Photo::destroy($photo);
        $this->collection->refresh();
    }

    public function up($photo)
    {
        $this->move($photo, true);
    }

    public function down($photo)
    {
        $this->move($photo, false);
    }

    public function move($photo, $up)
    {
        $direction = $up ? '>' : '<';
        $thisPhoto = Photo::find($photo['id']);
        $thisOrder = $thisPhoto->order;

        $nextPhoto = $this->collection->photos->firstWhere('order', $direction, $thisOrder);
        if ($nextPhoto) {
            $nextOrder = $nextPhoto->order;
            $nextPhoto->update(['order' => $thisOrder]);
            $thisPhoto->update(['order' => $nextOrder]);
            $this->collection->refresh();
        }
    }

    public function updatedPhotos()
    {
        $this->validate([
            'photos' => 'required', // 2MB Max
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        foreach ($this->photos as $photo) {
            $path = $photo->storePublicly('public');
            $path = Str::of($path)->replace('public', 'storage');
            $this->collection->photos()->create([
                'path' => '/' . $path,
                'title' => '',
                'order' => Photo::all()->max('order') + 1
            ]);
        }

        $this->collection->refresh();
    }

    public function select($photo)
    {
        $this->selected = $photo['id'];
    }
}
