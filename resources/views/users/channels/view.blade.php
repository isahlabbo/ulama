
@extends('layouts.app')

@section('title')
    ulama welcome page title
@endsection

@section('page-content')
<br>
  <div class="row">
    @foreach($user->userChannels as $userChannel)
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <img src="{{$userChannel->user->profile->getMedia('image')[0]->getUrl('thumbnail')}}" width="350" height="200">
              </div>
              <p class="h5">{{$userChannel->channel->name}}</p>
              <p class="h5">{{count($userChannel->subscriptions)}} Subscribers</p>
              <a href=""><p class="h5">{{count($userChannel->videos)}} Video Preaches</p></a>
              <a href=""><p class="h5">{{count($userChannel->audios)}} Audio Recorded Preaches</p></a>
              <a href=""><p class="h5">{{count($userChannel->books)}} Books Uploaded</p></a>
              <p class="h5"><a href="{{route('user.channel.subscribe',[$userChannel->id])}}"><button class="btn  btn-block ulama-success-btn">
              	@if(user()->hasSubscription($userChannel))
                    UnSubscribe
              	@else
                    Subscribe
              	@endif
              </button></a></p>
            </div>
          </div>
        </a> 
    @endforeach
  </div>
@endsection