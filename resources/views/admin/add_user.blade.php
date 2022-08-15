@extends('layout.admin')
@section('content')

    <!-- /.site-sidebar -->
    <main class="main-wrapper clearfix">
        <!-- Page Title Area -->
        <div class="row page-title clearfix">
            <div class="page-title-left">
                <h6 class="page-title-heading mr-0 mr-r-5">Add New User</h6>
                <p class="page-title-description mr-0 d-none d-md-inline-block"></p>
            </div>
            <!-- /.page-title-left -->
            <div class="page-title-right d-none d-sm-inline-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Add New</li>
                </ol>
            </div>
            <!-- /.page-title-right -->
        </div>
        <div class="row ">
            <div class="col-md-12">
                @if ($errors->any())
               @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
                @if (session()->has('message'))
                <div class="alert alert-success">{{session()->get('message')}}</div>
                @endif
                @if (session()->has('error'))
                <div class="alert alert-danger">{{session()->get('error')}}</div>
                @endif


            </div>
        </div>
        <!-- /.page-title -->
        <!-- =================================== -->
        <!-- Different data widgets ============ -->
        <!-- =================================== -->
        <div class="widget-list">
            <div class="row">
                <div class="widget-holder col-md-12">
                    <div class="widget-bg">
                        <div class="widget-heading widget-heading-border">
                            <h5 class="widget-title">User Details</h5>
                            <div class="widget-actions"><a href="#"
                                    class="badge bg-info-contrast px-3 cursor-pointer heading-font-family"></a>
                            </div>
                            <!-- /.widget-actions -->
                        </div>
                        <!-- /.widget-heading -->
                        <div class="widget-body">
                            <form class="form-horizontal" role="form" name="form1" method="post"
                                enctype="multipart/form-data" action="{{ route('admin.store_user') }}">
                                @csrf
                                <!-- <input name="submit" type="submit" class="btn btn-sm btn-primary form-control" value="Add funds" id="submit"> -->
                                <div class="form-group ">
                                    <label for="input01" class="col-sm-4 control-label" style="">Username</label>
                                    <div class="col-sm-8">
                                        <input type="text" style=";" name="username" id="username" max="100"
                                            class="form-control" value="">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="input01" class="col-sm-4 control-label" style="">Sponsor</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="sponsor">
                                            <option value="0">None</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="input02" class="col-sm-4 control-label" style="">Full Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" style=";" name="name" id="name" max="100"
                                            class="form-control" value="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="input03" class="col-sm-4 control-label" style="">Email</label>
                                    <div class="col-sm-8">
                                        <input type="text" style=";" name="email" id="email" max="100"
                                            class="form-control" value="">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="input01" class="col-sm-4 control-label" style="">Phone</label>
                                    <div class="col-sm-8">

                                        <input type="text" style=";" name="phone" id="phone" max="100"
                                            class="form-control" value="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="input02" class="col-sm-4 control-label" style="">Conutry</label>
                                    <div class="col-sm-8">

                                        <select class="form-control" name="country">
                                            <option>Select Country</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="input01" class="col-sm-4 control-label" style="">Address</label>
                                    <div class="col-sm-8">

                                        <textarea type="text" style=";" name="address" id="phone" max="100" class="form-control"
                                            value="">             </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="input02" class="col-sm-4 control-label" style=" ">New
                                        Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" style=";" name="password" id="password"
                                            max="100" class="form-control" placeholder="Enter..." value="">
                                    </div>
                                </div>

                                <div class="form-group form-footer" style=" ">
                                    <div class="col-sm-offset-4 col-sm-8">

                                        <input type="submit" name="submit"
                                            style="background- color: #1b334d !important;" id="submit" value="Submit"
                                            class="btn btn-md btn-primary">
                                        <!--   <button type="reset" class="btn btn-default">Reset</button> -->
                                    </div>
                                </div>

                            </form>
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
        </div>
        <!-- /.widget-list -->
    </main>
    <!-- /.main-wrappper -->
    <!-- RIGHT SIDEBAR -->
    <!-- /.chat-panel -->



    <script type="text/javascript">
        function img_file() {
            file = document.getElementById("image").files[0];
            image = document.getElementById("pic");
            reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function() {
                image.src = reader.result;
            }
        }
    </script>


@endsection
