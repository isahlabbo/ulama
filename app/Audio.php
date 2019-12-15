<?php

namespace App;

use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Audio extends BaseModel implements HasMedia
{
    use HasMediaTrait;

    public function userChannel()
    {
    	return $this->belongsTo(UserChannel::class);
    }

    public function audioDownloads()
    {
    	return $this->hasMany(AudioDownload::class);
    }

    public function audioViews()
    {
    	return $this->hasMany(AudioView::class);
    }

    public function registerMediaCollections()
    {
        $this
        ->addMediaCollection('audios')
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
