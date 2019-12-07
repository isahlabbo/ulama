@extends('layouts.welcome')

@section('side-bar')
    @if(user()->admin())
       @include('includes.menus.users.adminMenu')
    @elseif(user()->preacher())
        @include('includes.menus.users.preacherMenu')
    @else
        @include('includes.menus.users.userMenu')
    @endif
@endsection