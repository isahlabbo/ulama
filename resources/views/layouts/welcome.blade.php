<!DOCTYPE html>
<html lang="en">
    @include('includes.pages.header')
    <body class="fixed-left" style="background-color: #d8e3ed">
        <div id="wrapper">
            @include('includes.menus.navbar')
            @auth
                @include('includes.menus.sidebar')
            @endauth            
            <div class="content-page">
                <div class="content">
                    <div class="container">
                        @auth
                            @if(user() && !user()->preacher())
                                @include('users.account.upgrade.create')
                            @else
                                @include('users.channels.create')    
                            @endif
                        @endauth
                        @yield('page-content')
                    </div> 
                </div> 
                <footer class="footer text-right">
                    {{date('Y')}} © isah labbo.
                </footer>
            </div>
        </div>
        @include('includes.pages.footer')
    </body>
</html>