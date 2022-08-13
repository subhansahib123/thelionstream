@include('admin.include.head');
@include('admin.include.header')
    <div class="content-wrapper">
        <!-- SIDEBAR -->
   @include('admin.include.sidebar')
        <!-- /.site-sidebar -->
    @yield('content')
        <!-- /.main-wrappper -->
        <!-- RIGHT SIDEBAR -->

        <!-- /.chat-panel -->
    </div>
    <!-- /.content-wrapper -->
    <!-- FOOTER -->
    @include('Frontend.includes.footer')
    @include('admin.include.foot')
