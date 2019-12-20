@extends('layouts.welcome')

@section('title')
    ulama welcome page title
@endsection

@section('page-content')
<br>
  <div class="row">
    @foreach(preachers() as $preacher)
      @if($preacher->profile)
        <a href="">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <img src="{{$preacher->profile->getMedia('image')[0]->getUrl('thumbnail')}}" width="350" height="200">
              </div>
              <p class="h5">{{$preacher->first_name}} {{$preacher->last_name}}</p>
              <p class="h5">{{count($preacher->userChannels)}} Channels</p>
              <p class="h5">{{$preacher->profile->state->name}} State</p>
              <p class="h5">{{$preacher->profile->lga->name}} Local Government</p>
            </div>
          </div>
        </a>
      @endif
    @endforeach
  </div>
@endsection