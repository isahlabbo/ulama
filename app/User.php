<?php

namespace App;

use App\Services\Access\HasAccess;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasAccess;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userChannels()
    {
        return $this->hasMany(UserChannel::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function userRoles()
    {
        return $this->hasMany(UserRole::class);
    }

    public function videoDownloads()
    {
        return $this->hasMany(VideoDownload::class);
    }

    public function audioDownloads()
    {
        return $this->hasMany(AudioDownload::class);
    }

    public function documentDownloads()
    {
        return $this->hasMany(DocumentDownload::class);
    }

    public function videoViews()
    {
        return $this->hasMany(VideoView::class);
    }

    public function audioViews()
    {
        return $this->hasMany(AudioView::class);
    }

    public function documentViews()
    {
        return $this->hasMany(DocumentView::class);
    }

    public function genders()
    {
        return Gender::all();
    }

    public function states()
    {
        return State::all();
    }

    public function lgas()
    {
        return Lga::all();
    }

    public function plans()
    {
        return Plan::all();
    }

    public function name()
    {
        return strtolower($this->first_name.'-'.$this->last_name);
    }
}
