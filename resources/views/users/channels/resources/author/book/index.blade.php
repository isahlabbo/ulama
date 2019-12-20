@extends('layouts.app')

@section('title')
    available channel books
@endsection

@section('page-content')
    <div class="row">
	    <div class="col-sm-12">
	        <div class="card-box">
	            <h4 class="m-t-0 m-b-30 header-title">{{$userChannel->channel->title}} Channel Uploaded books</h4>
	            <div class="table-responsive">
	                <table class="table table-colored table-centered table-inverse m-0">
	                    <thead>
	                        <tr>
	                            <th>Book</th>
	                            <th>Title</th>
	                            <th>Description</th>
	                            <th>Views</th>
	                            <th>Download</th>
	                            <th></th>
	                            <th></th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	@foreach($userChannel->books as $book)
	                        <tr>
	                            <td>
	                            	@foreach($book->getMedia('books') as $bookMedia)
	                            	<a href="{{$bookMedia->getFullUrl()}}"> <img class="media-object" alt="64x64" src="{{$bookMedia->getUrl('thumbnail')}}" style="width: 100px; height: 66px;"> </a>
	                            	@endforeach
	                            </td>

	                            <td>
	                            	{{$book->title}}
	                            </td>

	                            <td>
	                                {{$book->description}}
	                            </td>

	                            <td>
	                                {{count($book->bookViews)}}
	                            </td>

	                            <td>
	                                {{count($book->bookDownloads)}}
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