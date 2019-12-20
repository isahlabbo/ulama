@extends('layouts.app')

@section('title')
    available channel videos
@endsection

@section('page-content')
    <div class="row">
	    <div class="col-sm-12">
	        <div class="card-box">
	            <h4 class="m-t-0 m-b-30 header-title">{{$userChannel->channel->title}} Channel Uploaded videos</h4>
	            <div class="table-responsive">
	                <table class="table table-colored table-centered table-inverse m-0">
	                    <thead>
	                        <tr>
	                            <th>Video Preach</th>
	                            <th>Title</th>
	                            <th>Description</th>
	                            <th>Views</th>
	                            <th>Download</th>
	                            <th></th>
	                            <th></th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	@foreach($userChannel->videos as $video)
	                        <tr>
	                            <td>
	                            	@foreach($video->getMedia('videos') as $videoMedia)
	                            	<video width="300" height="220">
						            
						                <source src="{{$videoMedia->getUrl()}}" type=video/mp4>
						            </video>
	                            	@endforeach
	                            </td>

	                            <td>
	                            	{{$video->title}}
	                            </td>

	                            <td>
	                                {{$video->description}}
	                            </td>

	                            <td>
	                                {{count($video->videoViews)}}
	                            </td>

	                            <td>
	                                {{count($video->videoDownloads)}}
	                            </td>

	                            <td>
	                            	<a href="">Delete</a>
	                            </td>

	                            <td>
	                            	<a href="">Edit</a>
	                            </td>

	                        </tr>
	                        @endforeach
	                    </tbody>
	                </table>
	            </div>
	        </div>
	    </div>
	</div>


@endsection