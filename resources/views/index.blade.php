@include('layout.header')

@include('layout.sidenav')
@include('layout.topnav')

@yield('content')

              
   @include('layout.footer')
   @yield('js')