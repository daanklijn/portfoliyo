<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;

class Collection extends Model
{
    use HasFactory;

    public $fillable = ['title', 'subtitle', 'description'];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function isCurrentRoute()
    {
        $isCollectionRoute = Route::currentRouteName() ==  'collection.show';
        $isThisCollection = collect(Route::current()->parameters())->get('id') == $this->id;
        return $isCollectionRoute && $isThisCollection;
    }

}
