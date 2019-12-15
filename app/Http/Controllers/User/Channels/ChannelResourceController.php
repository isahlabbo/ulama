<?php

namespace App\Http\Controllers\User\Channels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChannelResourceController extends Controller
{
    public function newVideo(Request $request)
    {
    	dd($request->all());
    }

    public function newBook(Request $request)
    {
    	dd($request->all());
    }

    public function newAudio(Request $request)
    {
    	dd($request->all());
    }
}
