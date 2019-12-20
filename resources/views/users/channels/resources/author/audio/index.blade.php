@extends('layouts.app')

@section('title')
    available channel recorded audios
@endsection

@section('page-content')
    <div class="row">
	    <div class="col-sm-12">
	        <div class="card-box">
	            <h4 class="m-t-0 m-b-30 header-title">{{$userChannel->channel->title}} Channel Uploaded recorded audios</h4>
	            <div class="table-responsive">
	                <table class="table table-colored table-centered table-inverse m-0">
	                    <thead>
	                        <tr>
	                            <th>Audio Preach</th>
	                            <th>Title</th>
	                            <th>Description</th>
	                            <th>Views</th>
	                            <th>Download</th>
	                            <th></th>
	                            <th></th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	@foreach($userChannel->audios as $audio)
	                        <tr>
	                            <td>
	                            	@foreach($audio->getMedia('audios') as $audioMedia)
	                            	<audio controls>
						                <source src="{{$audioMedia->getUrl('thumbnail')}}" type="audio/ogg">
						                <source src="{{$audioMedia->getFullUrl()}}" type="audio/mpeg">
						            </audio>
	                            	@endforeach
	                            </td>

	                            <td>
	                            	{{$audio->title}}
	                            </td>

	                            <td>
	                                {{$audio->description}}
	                            </td>

	                            <td>
	                                {{count($audio->audioViews)}}
	                            </td>

	                            <td>
	                                {{count($audio->audioDownloads)}}
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