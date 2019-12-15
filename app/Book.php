<?php

namespace App;

use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Book extends BaseModel implements HasMedia
{
    use HasMediaTrait;

    public function userChannel()
    {
    	return $this->belongsTo(UserChannel::class);
    }

    public function bookDownloads()
    {
    	return $this->hasMany(BookDownload::class);
    }

    public function bookViews()
    {
    	return $this->hasMany(BookView::class);
    }

    public function registerMediaCollections()
    {
        $this
        ->addMediaCollection('books')
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
