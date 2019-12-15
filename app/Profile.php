<?php

namespace App;

use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Profile extends BaseModel implements HasMedia
{
	use HasMediaTrait;

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function registerMediaCollections()
	{
	    $this
	    ->addMediaCollection('image')
	    ->singleFile(); 
	}

	public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumbnail')
            ->width(368)
            ->height(232)
            ->sharpen(10);
    }
}
