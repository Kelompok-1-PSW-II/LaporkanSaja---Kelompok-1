<!DOCTYPE html>
<html lang="en">
@include('theme.web.head')
<body>
    @include('theme.web.header')
    {{ $slot }}
    @include('theme.web.footer')
    @include('theme.web.js')
</body>
</html>