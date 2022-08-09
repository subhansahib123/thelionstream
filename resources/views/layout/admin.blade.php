@include('admin.include.head')
<div id="wrapper" class="wrapper">
@include('admin.include.header')

<div class="content-wrapper">
@include('admin.include.sidebar')

@yield('content')


</div>
@include('admin.include.footer')
</div>
@include('admin.include.foot')
