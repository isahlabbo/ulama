@extends('layouts.app')

@section('page-content')
@foreach(user()->userChannels as $userChannel)
<br>
<br>
	<div class="card-box widget-box-three">
		<div class="blog-post m-b-30">                            
	        <div class="post-title">
	            <h3><a href="javascript:void(0);">{{$userChannel->channel->title}}</a></h3>
	        </div>
	        <div>
	            <p style="color: black">{{$userChannel->channel->description}}</p>
	        </div>
	        <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card-box widget-box-three">
                        <div class="bg-icon pull-left">
							<i class="ti-image"></i>
						</div>
                        <div class="text-right">
                            <p class="text-muted m-t-5 text-uppercase font-600 font-secondary">Total Videos</p>
                            <h2 class="m-b-10"><a href="{{route('user.channel.resources.videos',[$userChannel->id])}}"><span data-plugin="counterup">{{count($userChannel->videos)}}</span></a></h2>
                        </div>
                        <div class="text-right">
	                        <button class="btn ulama-success-btn"  data-toggle="modal" data-target="#{{$userChannel->id}}_channel_video">
	                        	<i class="fa fa-upload"></i>
	                        </button>
	                        @include('users.channels.resources.author.video.create')
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card-box widget-box-three">
                        <div class="bg-icon pull-left">
							<i class="ti-agenda"></i>
						</div>
                        <div class="text-right">
                            <p class="text-muted m-t-5 text-uppercase font-600 font-secondary">Total Audios</p>
                            <h2 class="m-b-10"><a href="{{route('user.channel.resources.audios',[$userChannel->id])}}"><span data-plugin="counterup">{{count($userChannel->audios)}}</span></a></h2>
                        </div>
                        <div class="text-right">
	                        <button class="btn ulama-success-btn"  data-toggle="modal" data-target="#{{$userChannel->id}}_channel_audio">
	                        	<i class="fa fa-upload"></i>
	                        </button>
	                        @include('users.channels.resources.author.audio.create')
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card-box widget-box-three">
                        <div class="bg-icon pull-left">
							<i class="fa fa-book"></i>
						</div>
                        <div class="text-right">
                            <p class="text-muted m-t-5 text-uppercase font-600 font-secondary">Total Books</p>
                            <h2 class="m-b-10"><a href="{{route('user.channel.resources.books',[$userChannel->id])}}"><span data-plugin="counterup">{{count($userChannel->books)}}</span></a></h2>
                        </div>
                        <div class="text-right">
	                        <button class="btn ulama-success-btn" data-toggle="modal" data-target="#{{$userChannel->id}}_channel_book">
	                        	<i class="fa fa-upload"></i>
	                        </button>
	                        @include('users.channels.resources.author.book.create')
                        </div>
                    </div>
                </div>
            </div>
	    </div>
	</div>
@endforeach
@endsection