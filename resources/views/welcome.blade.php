@extends('layouts.welcome')

@section('title')
    ulama welcome page title
@endsection

@section('page-content')
<br>
<div class="row">
  @foreach($userChannels as $userChannel)
    @foreach($userChannel->videos as $video)
      @if($loop->index <=1)
        <div class="col-lg-4 col-md-6">
          <div class="card-box widget-box-three">
            
            <div class="bg-icon pull-left">
              <i class="fa fa-user"></i>
            </div>
            <div class="bg-icon pull-left">
              34 <i class="fa fa-download"></i>
            </div>
            <div class="bg-icon pull-left">
              34 <i class="fa fa-eye"></i>
            </div>
          </div>
        </div>
      @endif
    @endforeach
    @foreach($userChannel->audios as $audio)
      @if($loop->index <=1)
        <div class="col-lg-4 col-md-6">
          <div class="card-box widget-box-three">
            
            <div class="bg-icon pull-left">
              <i class="fa fa-user"></i>
            </div>
            <div class="bg-icon pull-left">
              34 <i class="fa fa-download"></i>
            </div>
            <div class="bg-icon pull-left">
              34 <i class="fa fa-eye"></i>
            </div>
          </div>
        </div>
      @endif
    @endforeach
    @foreach($userChannel->books as $book)
      @if($loop->index <=1)
        <div class="col-lg-4 col-md-6">
          <div class="card-box widget-box-three">
            @foreach($book->getMedia('books') as $bookMedia)

            <a href="{{$bookMedia->getFullUrl()}}">
                <img src="{{$bookMedia->getFullUrl()}}" class="img img-thumbnail">
            </a>
            @endforeach
            <table>
                <tr>
                    <td>Title</td>
                    <td class="text-primary">{{$book->title}}</td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td class="text-primary">{{$book->description}}</td>
                </tr>
                <tr>
                
                </tr>
            </table>
            <div class="bg-icon pull-left">
              <i class="fa fa-user"></i>
            </div>
            <div class="bg-icon pull-left">
              34 <i class="fa fa-download"></i>
            </div>
            <div class="bg-icon pull-left">
              34 <i class="fa fa-eye"></i>
            </div>
          </div>
        </div>
      @endif
    @endforeach
  @endforeach
</div>
@endsection