@extends('layouts.app')

@section('page-content')
  <br>
  @foreach(userChannels() as $userChannel)
    <div class="row">
    @if(count($userChannel->videos) > 0)
        <p class="ulama-primary-btn btn-block">List of videos preaches</p>
    @endif
    @foreach($userChannel->videos as $video)
      @if($loop->index <=1)
        <div class="col-lg-4 col-md-6">
          <div class="card-box widget-box-three">
            @foreach($video->getMedia('videos') as $videoMedia)
              <video width="300" height="220">
                <source src="{{$videoMedia->getFullUrl()}}" type=video/ogg>
                <source src="{{$videoMedia->getFullUrl()}}" type=video/mp4>
              </video>
              @endforeach
          </div>
        </div>
      @endif
    @endforeach
    </div>
    <div class="row">
    	@if(count($userChannel->audios) > 0)
            <p class="ulama-primary-btn btn-block">List of audio recorded preaches</p>  
        @endif
    @foreach($userChannel->audios as $audio)
      @if($loop->index <=1)
        <div class="col-lg-4 col-md-6">
          <div class="card-box widget-box-three">
            @foreach($audio->getMedia('audios') as $audioMedia)
            <audio controls>
              <source src="{{$audioMedia->getUrl('thumbnail')}}" type="audio/ogg">
              <source src="{{$audioMedia->getFullUrl()}}" type="audio/mpeg">
            </audio>
            @endforeach
          </div>
        </div>
      @endif
    @endforeach
    </div>
    <div class="row">
    	@if(count($userChannel->books) > 0)
            <p class="ulama-primary-btn btn-block">List of books publishes</p> 
        @endif
    @foreach($userChannel->books as $book)
      @if($loop->index <=1)
        <div class="col-lg-3 col-md-6">
          <div class="card-box widget-box-three">
            @foreach($book->getMedia('books') as $bookMedia)
            <a href="{{$bookMedia->getFullUrl()}}">
                <img src="{{$bookMedia->getUrl('thumbnail')}}" class="img img-thumbnail">
            </a>
            @endforeach

            <p>{{$book->title}}</p>
            <p>{{$book->userChannel->channel->title}}</p>
            <p><span>2 Views</span>  <span>3 Downloads</span></p>

          </div>
        </div>
      @endif
    @endforeach
    </div>
  @endforeach
@endsection
