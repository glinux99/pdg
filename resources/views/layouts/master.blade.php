<!DOCTYPE html>
<html lang="en">
    @section('header')
        @include('layouts.header')
    @show

<body>
    @section('navbar')
        @include('layouts.navbar')
    @show
	
	@yield('content')
	
    @section('footer')
        @include('layouts.footer')
    @show

    @section('scripts')
        @include('layouts.scripts')
    @show
</body>
</html>
