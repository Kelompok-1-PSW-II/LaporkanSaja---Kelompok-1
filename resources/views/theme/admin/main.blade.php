<!DOCTYPE html>
<html lang="en">
@include('theme.admin.head')
<body>
    @include('theme.admin.header')
    {{ $slot }}
    @include('theme.admin.footer')
    @include('theme.admin.js')
</body>
</html>