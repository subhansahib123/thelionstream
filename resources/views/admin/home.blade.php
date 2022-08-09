@extends('layout.admin')
@section('content')

<main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">Dashboard</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics, charts and events</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Home</li>
                    </ol>
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="widget-list row">
                <div class="widget-holder widget-sm col-md-3 widget-full-height">
                    <div class="widget-bg">
                        <div class="widget-body">
                            <div class="counter-w-info media">
                                <div class="media-body">
                                    <p class="text-muted mr-b-5">Members Online</p><span class="counter-title color-primary"><span class="counter">2860</span> </span>
                                    <!-- /.counter-title --> <span class="counter-difference text-success"><i class="feather feather-arrow-up"></i> 23%</span>
                                    <div class="mr-t-20"><span data-toggle="sparklines" data-height="15" data-width="70" data-line-color="#1976d2" data-line-width="3" data-spot-radius="1" data-fill-color="rgba(0,0,0,0)" data-spot-color="undefined" data-min-spot-color="undefined"
                                        data-max-spot-color="undefined" data-highlight-line-color="undefined"><!-- 10,5,7,8,3,0,4,12,10,8,12 --></span>
                                    </div>
                                </div>
                                <!-- /.media-body -->
                                <div class="pull-right align-self-center"><i class="list-icon feather feather-user-plus bg-primary"></i>
                                </div>
                            </div>
                            <!-- /.counter-w-info -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <div class="widget-holder widget-sm col-md-3 widget-full-height">
                    <div class="widget-bg">
                        <div class="widget-body">
                            <div class="counter-w-info media">
                                <div class="media-body">
                                    <p class="text-muted mr-b-5">Monthly Hoal</p><span class="counter-title color-info"><span class="counter">58</span>%</span>
                                    <!-- /.counter-title --> <span class="counter-difference text-danger"><i class="feather feather-arrow-down"></i> 8%</span>
                                    <div class="progress" style="width: 70%; position: relative; top: 25px">
                                        <div class="progress-bar bg-info" style="width: 66%" role="progressbar"><span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.media-body -->
                                <div class="pull-right align-self-center"><i class="list-icon feather feather-award bg-info"></i>
                                </div>
                            </div>
                            <!-- /.counter-w-info -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <div class="widget-holder widget-sm col-md-3 widget-full-height">
                    <div class="widget-bg">
                        <div class="widget-body">
                            <div class="counter-w-info media">
                                <div class="media-body">
                                    <p class="text-muted mr-b-5">Monthly Revenue</p><span class="counter-title color-pink">&dollar;<span class="counter">8470</span> </span>
                                    <!-- /.counter-title -->
                                    <div style="margin-top: 15px"><span data-toggle="sparklines" data-height="15" data-bar-width="3" data-type="bar" data-chart-range-min="0" data-bar-spacing="3" data-bar-color="#ff6b88"><!-- 2,4,5,3,2,3,5,3,2,3,5,4,2 --></span>
                                    </div>
                                </div>
                                <!-- /.media-body -->
                                <div class="pull-right align-self-center"><i class="list-icon feather feather-briefcase bg-pink"></i>
                                </div>
                            </div>
                            <!-- /.counter-w-info -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <div class="widget-holder widget-sm col-md-3 widget-full-height">
                    <div class="widget-bg">
                        <div class="widget-body">
                            <div class="counter-w-info media">
                                <div class="media-body">
                                    <p class="text-muted mr-b-5">Hours Worked</p><span class="counter-title"><span class="counter">376</span> </span>
                                    <!-- /.counter-title -->
                                    <div class="progress" style="width: 70%; position: relative; top: 25px">
                                        <div class="progress-bar bg-warning" style="width: 66%" role="progressbar"><span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.media-body -->
                                <div class="pull-right align-self-center"><i class="list-icon feather feather-clock bg-warning"></i>
                                </div>
                            </div>
                            <!-- /.counter-w-info -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <div class="widget-holder widget-full-height widget-flex col-lg-6">
                    <div class="widget-bg">
                        <div class="widget-heading">
                            <h5 class="widget-title">New Users</h5>
                            <div class="widget-graph-info">
                                <div class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle text-muted fs-16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a>  <a class="dropdown-item" href="#">Another action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.widget-graph-info -->
                        </div>
                        <!-- /.widget-heading -->
                        <div class="widget-body">
                            <div class="mr-t-10 flex-1">
                                <div style="max-height: 270px; height: 270px">
                                    <canvas id="chartJsNewUsers" style="height:100%"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <div class="widget-holder widget-full-content widget-full-height col-lg-6">
                    <div class="widget-bg">
                        <div class="widget-heading">
                            <h5 class="widget-title">All Time Conversions</h5>
                            <div class="widget-graph-info">
                                <div class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle text-muted fs-16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a>  <a class="dropdown-item" href="#">Another action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.widget-graph-info -->
                        </div>
                        <!-- .widget-heading -->
                        <div class="widget-body">
                            <div class="container-fluid pd-20">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="pos-relative" style="height: 200px">
                                            <canvas id="chartJsDoughnutLegend"></canvas><span class="h6 fw-600 text-muted fs-13 text-uppercase m-0 absolute-center">Referral</span>
                                        </div>
                                        <!-- /.something -->
                                        <div class="counter-info heading-font-family text-center mt-3 mb-3 fs-13"><span class="color-success"><i class="fa fa-arrow-circle-o-up"></i> <strong>34%</strong> </span>more than last week</div>
                                        <!-- /.counter-info -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                    <div class="col-sm-6">
                                        <h5 class="h2 fw-semibold mt-0">58.3%</h5>
                                        <div class="progress w-50 mb-3">
                                            <div class="progress-bar bg-info" style="background: linear-gradient(to right, #17bff0, #8be0f9); width: 58.3%" role="progressbar"><span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                        <!-- /.progress -->
                                        <p class="heading-font-family fs-13">of the people who viewed the
                                            <br>labels converted into clients.</p>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color: #4671bd"></i> Google</p>
                                                <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color: #199bfc"></i> Facebook</p>
                                            </div>
                                            <!-- /.col-6 -->
                                            <div class="col-6">
                                                <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color: #54c273"></i> Youtube</p>
                                                <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color: #25d7fb"></i> Twitter</p>
                                            </div>
                                            <!-- /.col-6 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
            </div>
            <!-- /.widget-list -->
            <hr>
            <div class="widget-list row">
                <div class="widget-holder widget-full-height widget-no-padding widget-flex col-md-6 col-lg-3">
                    <div class="widget-bg bg-facebook color-white radius-5">
                        <div class="widget-body">
                            <div class="facebook-widget flex-1" data-plugin-options='{"user": "envato", "limit": 3}'></div>
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <div class="widget-holder widget-full-height widget-no-padding widget-flex col-md-6 col-lg-3">
                    <div class="widget-bg bg-twitter color-white radius-5">
                        <div class="widget-body">
                            <div class="twitter-widget flex-1" data-plugin-options='{"screen_name": "elonmusk", "count": 3}'></div>
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <div class="widget-holder widget-full-height widget-no-padding widget-flex col-lg-6 radius-5">
                    <div class="widget-bg">
                        <div class="widget-body">
                            <div class="row flex-1">
                                <div class="col-sm-9 pd-30">
                                    <h6 class="mt-0 mb-4 text-uppercase fs-14 fw-bold">Total Visitors</h6>
                                    <div class="" style="height: 200px">
                                        <canvas id="chartJsBarDashboard"></canvas>
                                    </div>
                                </div>
                                <!-- /.col-sm-9 -->
                                <div class="col-sm-3 p-0 text-inverse d-flex flex-column align-items-stretch" style="background: linear-gradient(#63a3e2,#1975d1)">
                                    <div class="text-center pd-30 flex-1 d-flex flex-column justify-content-center">
                                        <h3 class="mt-0 mb-1"><span class="counter">830</span></h3>
                                        <h6 class="text-muted headings-font-family my-0 text-uppercase fs-11 fw-bold lh-16 d-block">Visitors Today</h6>
                                    </div>
                                    <!-- /.d-flex -->
                                    <hr class="light my-0 w-100">
                                    <div class="text-center pd-30 flex-1 d-flex flex-column justify-content-center">
                                        <h3 class="mt-0 mb-1"><span class="counter">9750</span></h3>
                                        <h6 class="text-muted headings-font-family my-0 text-uppercase fs-11 fw-bold lh-16 d-block">Visitors This Week</h6>
                                    </div>
                                    <!-- /.d-flex -->
                                </div>
                                <!-- /.col-sm-3 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
            </div>
            <!-- /.widget-list -->
            <hr>
            <div class="widget-list row">
                <div class="widget-holder widget-outside-header col-lg-6 mb-4 mb-lg-0">
                    <div class="widget-heading">
                        <h5 class="widget-title"><i class="material-icons mr-2">error_outline</i> Activity</h5>
                        <div class="widget-actions">
                            <div class="predefinedRanges badge badge-pill bg-success px-3 cursor-pointer heading-font-family" data-plugin-options='{

	                 "locale": {

		                 "format": "MMM YYYY"

	                 }

                 }'><span></span>  <i class="feather feather-chevron-down ml-1"></i>
                            </div>
                        </div>
                        <!-- /.widget-actions -->
                    </div>
                    <!-- /.widget-heading -->
                    <div class="widget-bg">
                        <div class="widget-body pb-0"><a class="btn btn-block color-primary fw-bold fs-12 lh-39 py-0">See all activities ...</a>
                            <hr class="widget-seperator m-0">
                            <div class="widget-user-activities-2 fs-13">
                                <div class="single"><a href="#" class="btn btn-xs btn-rounded btn-pink text-uppercase fw-bold fs-11 px-3 mx-2">Invitation</a>
                                    <h5 class="single-title mx-2"><a href="#" class="headings-color">You've been invited to <strong>30s Hikers Meetup</strong></a></h5><small class="headings-font-family text-muted mx-2">today</small>
                                </div>
                                <!-- /.single -->
                                <div class="single"><a href="#" class="btn btn-xs btn-rounded btn-pink text-uppercase fw-bold fs-11 px-3 mx-2">Message</a>
                                    <figure class="thumb-xxs mr-b-0 mx-2">
                                        <a href="#">
                                            <img src="assets/demo/users/user2.jpg" class="rounded-circle" alt="User 1">
                                        </a>
                                    </figure>
                                    <h5 class="single-title mx-2"><a href="#" class="headings-color"><strong>Steve Smith</strong> sent a message</a></h5><small class="headings-font-family text-muted mx-2">2 days ago</small>
                                </div>
                                <!-- /.single -->
                                <div class="single"><a href="#" class="btn btn-xs btn-rounded btn-teal text-uppercase fw-bold fs-11 px-3 mx-2">To Do</a>
                                    <h5 class="single-title mx-2"><a href="#" class="headings-color">Meeting with Nathan on Thursday</a></h5><small class="headings-font-family text-muted mx-2">3 days ago</small>
                                </div>
                                <!-- /.single -->
                                <div class="single"><a href="#" class="btn btn-xs btn-rounded btn-info text-uppercase fw-bold fs-11 px-3 mx-2">Reminder</a>
                                    <div class="user-avatar-list">
                                        <a href="#" class="thumb-xxs">
                                            <img src="assets/demo/users/user4.jpg" class="rounded-circle" alt="User 4">
                                        </a>
                                        <a href="#" class="thumb-xxs">
                                            <img src="assets/demo/users/user3.jpg" class="rounded-circle" alt="User 3">
                                        </a>
                                        <a href="#" class="thumb-xxs">
                                            <img src="assets/demo/users/user2.jpg" class="rounded-circle" alt="User 2">
                                        </a>
                                    </div>
                                    <h5 class="single-title mx-2"><a href="#" class="headings-color"><strong>WordCamp</strong> Meeting, Illinois</a></h5><small class="headings-font-family text-muted mx-2">4 days ago</small>
                                </div>
                                <!-- /.single -->
                                <div class="single"><a href="#" class="btn btn-xs btn-rounded btn-pink text-uppercase fw-bold fs-11 px-3 mx-2">Message</a>
                                    <figure class="thumb-xxs mr-b-0 mx-2">
                                        <a href="#">
                                            <img src="assets/demo/users/user6.jpg" class="rounded-circle" alt="User 1">
                                        </a>
                                    </figure>
                                    <h5 class="single-title mx-2"><a href="#" class="headings-color"><strong>Marsha Hoffman</strong> sent a message</a></h5><small class="headings-font-family text-muted mx-2">5 days ago</small>
                                </div>
                                <!-- /.single -->
                                <div class="single"><a href="#" class="btn btn-xs btn-rounded btn-success text-uppercase fw-bold fs-11 px-3 mx-2">Files</a>
                                    <h5 class="single-title flex-none mx-2">File Uploaded:</h5>
                                    <figure class="thumb-xxs mr-b-0 mx-2">
                                        <a href="#">
                                            <img src="assets/demo/blog-post-1-thumb.jpg" class="rounded-circle" alt="User 1">
                                        </a>
                                    </figure>
                                    <h5 class="single-title mx-2"><a href="#" class="headings-color"><strong>force.gif</strong> <span class="mx-1 text-muted">(128KB)</span></a></h5><small class="headings-font-family text-muted mx-2">5 days ago</small>
                                </div>
                                <!-- /.single -->
                            </div>
                            <!-- /.widget-user-activities -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <div class="widget-holder widget-outside-header col-lg-6">
                    <div class="widget-heading">
                        <h5 class="widget-title"><i class="material-icons mr-2">error_outline</i> Invoices</h5>
                        <div class="widget-actions">
                            <div class="predefinedRanges badge badge-pill bg-success px-3 cursor-pointer heading-font-family" data-plugin-options='{

	                 "locale": {

		                 "format": "MMM YYYY"

	                 }

                 }'><span></span>  <i class="feather feather-chevron-down ml-1"></i>
                            </div>
                        </div>
                        <!-- /.widget-actions -->
                    </div>
                    <!-- /.widget-heading -->
                    <div class="widget-bg">
                        <div class="widget-body pb-0">
                            <table class="widget-invoice-table table mb-0 headings-font-family fs-13" valign="center">
                                <thead class="lh-43 fs-12">
                                    <tr>
                                        <th># Invoice</th>
                                        <th class="w-30">Client</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="headings-color"># 250,875</span>
                                        </td>
                                        <td class="w-25"><span class="headings-color fw-bold">Gene Newman</span>
                                        </td>
                                        <td><span class="text-muted">15/04/2018</span>
                                        </td>
                                        <td>
                                            <div class="d-flex"><a href="#" class="btn btn-xs px-3 mr-3 fw-900 fs-9 text-uppercase btn-outline-success flex-1 justify-content-center">Paid</a>  <a href="#" class="btn btn-xs px-0 content-color flex-2"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                            <!-- /.d-flex -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="headings-color"># 875,250</span>
                                        </td>
                                        <td class="w-25"><span class="headings-color fw-bold">Billy Black</span>
                                        </td>
                                        <td><span class="text-muted">14/04/2018</span>
                                        </td>
                                        <td>
                                            <div class="d-flex"><a href="#" class="btn btn-xs px-3 mr-3 fw-900 fs-9 text-uppercase btn-outline-success flex-1 justify-content-center">Paid</a>  <a href="#" class="btn btn-xs px-0 content-color flex-2"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                            <!-- /.d-flex -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="headings-color"># 520,758</span>
                                        </td>
                                        <td class="w-25"><span class="headings-color fw-bold">Herbert Diaz</span>
                                        </td>
                                        <td><span class="text-muted">13/04/2018</span>
                                        </td>
                                        <td>
                                            <div class="d-flex"><a href="#" class="btn btn-xs px-3 mr-3 fw-900 fs-9 text-uppercase btn-outline-danger justify-content-center flex-1">Overdue</a>  <a href="#" class="btn btn-xs px-0 content-color flex-2"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                            <!-- /.d-flex -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="headings-color"># 758,520</span>
                                        </td>
                                        <td class="w-25"><span class="headings-color fw-bold">Sylvia Harvey</span>
                                        </td>
                                        <td><span class="text-muted">12/04/2018</span>
                                        </td>
                                        <td>
                                            <div class="d-flex"><a href="#" class="btn btn-xs px-3 mr-3 fw-900 fs-9 text-uppercase btn-outline-success justify-content-center flex-1">Paid</a>  <a href="#" class="btn btn-xs px-0 content-color flex-2"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                            <!-- /.d-flex -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="headings-color"># 250,875</span>
                                        </td>
                                        <td class="w-25"><span class="headings-color fw-bold">Marsha Hoffman</span>
                                        </td>
                                        <td><span class="text-muted">11/04/2018</span>
                                        </td>
                                        <td>
                                            <div class="d-flex"><a href="#" class="btn btn-xs px-3 mr-3 fw-900 fs-9 text-uppercase btn-outline-info justify-content-center flex-1">On Hold</a>  <a href="#" class="btn btn-xs px-0 content-color flex-2"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                            <!-- /.d-flex -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="headings-color"># 875,250</span>
                                        </td>
                                        <td class="w-25"><span class="headings-color fw-bold">Mason Grant</span>
                                        </td>
                                        <td><span class="text-muted">10/04/2018</span>
                                        </td>
                                        <td>
                                            <div class="d-flex"><a href="#" class="btn btn-xs px-3 mr-3 fw-900 fs-9 text-uppercase btn-outline-info justify-content-center flex-1">On Hold</a>  <a href="#" class="btn btn-xs px-0 content-color flex-2"><i class="fa fa-chevron-right"></i></a>
                                            </div>
                                            <!-- /.d-flex -->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
            </div>
            <!-- /.widget-list -->
            <hr>
            <div class="widget-list row">
                <div class="widget-holder widget-full-height widget-flex col-lg-6">
                    <div class="widget-bg">
                        <div class="widget-heading widget-heading-empty-border">
                            <h5 class="widget-title">Latest Posts</h5>
                        </div>
                        <!-- /.widget-heading -->
                        <div class="widget-body">
                            <div class="widget-latest-posts-2">
                                <article class="post post-gallery">
                                    <div class="gallery lightbox-gallery row" data-toggle="lightbox-gallery" data-type="image">
                                        <div class="col-6">
                                            <a href="assets/demo/carousel/carousel-1.jpg" class="post-img lightbox d-block mr-b-5">
                                                <img src="assets/demo/carousel/carousel-1-thumb.jpg" alt="A book is a dream that you hold in your hands">
                                            </a>
                                        </div>
                                        <!-- /.col-6 -->
                                        <div class="col-6">
                                            <a href="assets/demo/carousel/carousel-2.jpg" class="post-img lightbox d-block mr-b-5">
                                                <img src="assets/demo/carousel/carousel-2-thumb.jpg" alt="A book is a dream that you hold in your hands">
                                            </a>
                                            <a href="assets/demo/carousel/carousel-3.jpg" class="post-img lightbox d-block mr-b-5">
                                                <img src="assets/demo/carousel/carousel-3-thumb.jpg" alt="A book is a dream that you hold in your hands">
                                            </a>
                                        </div>
                                        <!-- /.col-6 -->
                                    </div>
                                    <!-- /.gallery -->
                                    <div class="post-details">
                                        <h4 class="post-title"><a href="">5 Amazing places to visit before you die</a></h4>
                                        <p class="headings-font-family">Research shows that there is only half as much variation in student achievement between schools there is among classrooms...</p>
                                        <div class="post-links">
                                            <figure>
                                                <a href="#">
                                                    <img class="rounded-circle" src="assets/demo/users/user1.jpg" alt="User 1">
                                                </a>
                                            </figure>
                                            <ul>
                                                <li><a href="#"><i class="feather feather-eye"></i> 684</a>
                                                </li>
                                                <li><a href="#"><i class="feather feather-thumbs-up"></i> 53</a>
                                                </li>
                                                <li><a href="#"><i class="feather feather-eye"></i> 21</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.post-links -->
                                    </div>
                                    <!-- /.post-details -->
                                </article>
                            </div>
                            <!-- /.widget-latest-posts -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <div class="widget-holder widget-full-height widget-flex col-lg-6">
                    <div class="widget-bg">
                        <div class="widget-heading widget-heading-border">
                            <h5 class="widget-title">To-Do Widget</h5>
                            <div class="widget-actions"><a href="#" class="btn btn-xs btn-success btn-rounded fw-bold px-3 cursor-pointer heading-font-family text-uppercase">View Calendar</a>
                            </div>
                            <!-- /.widget-actions -->
                        </div>
                        <!-- /.widget-heading -->
                        <div class="widget-body">
                            <div class="widget-todo">
                                <div class="single media"><i class="single-icon feather feather-circle color-color-scheme"></i>
                                    <div class="media-body">
                                        <div class="text-muted heading-font-family fw-500">09:30 - 10:30</div>
                                        <h6 class="single-title">Make an appointment with Doctor</h6>
                                        <p class="fw-400 fs-13 mb-0 text-muted"><i class="feather feather-map-pin mr-2"></i> Dr. Schoeb's Spine Center</p>
                                    </div>
                                    <!-- /.media-body -->
                                    <div class="dropdown align-self-center"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="feather feather-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="list-icon feather feather-check"></i> Done</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="list-icon feather feather-delete"></i> Delete</a>
                                        </div>
                                        <!-- /.dropdown-menu -->
                                    </div>
                                    <!-- /.dropdown -->
                                </div>
                                <!-- /.single -->
                                <div class="single media"><i class="single-icon feather feather-circle color-info"></i>
                                    <div class="media-body">
                                        <div class="text-muted heading-font-family fw-500">16:00 - 20:00</div>
                                        <h6 class="single-title">Visit WordCamp 2017 Ontario</h6>
                                        <p class="fw-400 fs-13 mb-0 text-muted"><i class="feather feather-map-pin mr-2"></i> Carleton University, Ontario</p>
                                    </div>
                                    <!-- /.media-body -->
                                    <div class="user-avatar-list align-self-center mr-3 mr-0-rtl ml-3-rtl"><a href="#" class="btn btn-circle btn-sm btn-white fw-bold more-link">+</a> 
                                        <a href="#" class="thumb-xxs">
                                            <img src="assets/demo/users/user2.jpg" class="rounded-circle" alt="User 2">
                                        </a>
                                        <a href="#" class="thumb-xxs">
                                            <img src="assets/demo/users/user3.jpg" class="rounded-circle" alt="User 3">
                                        </a>
                                        <a href="#" class="thumb-xxs">
                                            <img src="assets/demo/users/user4.jpg" class="rounded-circle" alt="User 4">
                                        </a>
                                        <a href="#" class="thumb-xxs">
                                            <img src="assets/demo/users/user5.jpg" class="rounded-circle" alt="User 5">
                                        </a>
                                    </div>
                                    <!-- /.user-avatar-list -->
                                    <div class="dropdown align-self-center"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="feather feather-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="list-icon feather feather-check"></i> Done</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="list-icon feather feather-delete"></i> Delete</a>
                                        </div>
                                        <!-- /.dropdown-menu -->
                                    </div>
                                    <!-- /.dropdown -->
                                </div>
                                <!-- /.single -->
                                <div class="single media"><i class="single-icon feather feather-circle color-success"></i>
                                    <div class="media-body">
                                        <div class="text-muted heading-font-family fw-500">16:00 - 20:00</div>
                                        <h6 class="single-title">Skype call to Herbert Diaz</h6>
                                        <ul class="single-tags list-unstyled list-inline">
                                            <li><a href="#">skype</a>
                                            </li>
                                            <li><a href="#">business</a>
                                            </li>
                                            <li><a href="#">call</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /.media-body -->
                                    <div class="user-avatar-list align-self-center mr-3 mr-0-rtl ml-3-rtl">
                                        <a href="#" class="thumb-xxs">
                                            <img src="assets/demo/users/user5.jpg" class="rounded-circle" alt="User 2">
                                        </a>
                                    </div>
                                    <!-- /.user-avatar-list -->
                                    <div class="dropdown align-self-center"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="feather feather-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="list-icon feather feather-check"></i> Done</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="list-icon feather feather-delete"></i> Delete</a>
                                        </div>
                                        <!-- /.dropdown-menu -->
                                    </div>
                                    <!-- /.dropdown -->
                                </div>
                                <!-- /.single -->
                                <div class="single media done"><i class="single-icon feather feather-check-circle color-warning"></i>
                                    <div class="media-body">
                                        <div class="text-muted heading-font-family fw-500">1 day ago</div>
                                        <h6 class="single-title">Visit our boys in Battle Exhibition</h6>
                                        <p class="fw-400 fs-13 mb-0 text-muted"><i class="feather feather-map-pin mr-2"></i> St. Mary's Museum, Ontario</p>
                                    </div>
                                    <!-- /.media-body -->
                                    <div class="dropdown align-self-center"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="feather feather-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="list-icon feather feather-check"></i> Done</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="list-icon feather feather-delete"></i> Delete</a>
                                        </div>
                                        <!-- /.dropdown-menu -->
                                    </div>
                                    <!-- /.dropdown -->
                                </div>
                                <!-- /.single -->
                                <div class="single media done"><i class="single-icon feather feather-check-circle color-color-scheme"></i>
                                    <div class="media-body">
                                        <div class="text-muted heading-font-family fw-500">2 day ago</div>
                                        <h6 class="single-title">Meeting with WordCamp Speakers</h6>
                                        <p class="fw-400 fs-13 mb-0 text-muted"><i class="feather feather-map-pin mr-2"></i> Carleton University, Ontario</p>
                                    </div>
                                    <!-- /.media-body -->
                                    <div class="dropdown align-self-center"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="feather feather-more-vertical"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="list-icon feather feather-check"></i> Done</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="list-icon feather feather-delete"></i> Delete</a>
                                        </div>
                                        <!-- /.dropdown-menu -->
                                    </div>
                                    <!-- /.dropdown -->
                                </div>
                                <!-- /.single --> <a href="#" class="add-btn btn btn-circle btn-md fs-20 btn-primary"><i class="feather feather-plus"></i></a>
                            </div>
                            <!-- /.widget-todo -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
            </div>
            <!-- /.widget-list -->
        </main>


@end