<?php

namespace App;

use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Video extends BaseModel implements HasMedia
{
    use HasMediaTrait;
    
    public function userChannel()
    {
    	return $this->belongsTo(UserChannel::class);
    }

    public function videoDownloads()
    {
    	return $this->hasMany(VideoDownload::class);
    }

    public function videoViews()
    {
    	return $this->hasMany(VideoView::class);
    }

    public function registerMediaCollections()
    {
        $this
        ->addMediaCollection('videos')
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
