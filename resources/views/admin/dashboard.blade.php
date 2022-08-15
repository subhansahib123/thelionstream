@extends('layout.admin')
@section('content')


<?php

// $q = mysql_query("SELECT COUNT(*) as total_users ,SUM(balance) as total_earnings, (SELECT COUNT(*) from users where status2=0 ) as free_users , (SELECT COUNT(*) from users where status2 = 1 ) as p_users, (SELECT SUM(amount) from withdraw ) as withdraw,(SELECT SUM(ledger.out) FROM `ledger` WHERE detail LIKE '%Admin Fee%') as admin_e from users") or die(mysql_error());

// $query = mysql_fetch_assoc($q);


$query=DB::select("SELECT COUNT(*) as total_users ,SUM(balance) as total_earnings, (SELECT COUNT(*) from users where status2=0 ) as free_users , (SELECT COUNT(*) from users where status2 = 1 ) as p_users, (SELECT SUM(amount) from withdraw ) as withdraw,(SELECT SUM(ledger.out) FROM `ledger` WHERE detail LIKE '%Admin Fee%') as admin_e from users");
$query=json_decode(json_encode($query), true);
$query=$query[0];

 ?>
        <!-- /.site-sidebar -->
        <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">Dashboard</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block">statistics</p>
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
                                    <p class="text-muted mr-b-5">Total Users</p><span class="counter-title color-primary"><span class="counter"><?php echo $query['total_users'] ?></span> </span>
                                    <!-- /.counter-title --> <!-- <span class="counter-difference text-success"><i class="feather feather-arrow-up"></i> 23%</span> -->
                                    <div class="mr-t-20"><span data-toggle="sparklines" data-height="15" data-width="70" data-line-color="#1976d2" data-line-width="3" data-spot-radius="1" data-fill-color="rgba(0,0,0,0)" data-spot-color="undefined" data-min-spot-color="undefined"
                                        data-max-spot-color="undefined" data-highlight-line-color="undefined"><!-- 10,5,7,8,3,0,4,12,10,8,12 --></span>
                                    </div>
                                </div>
                                <!-- /.media-body -->
                                <div class="pull-right align-self-center"><i class="list-icon feather feather-award bg-primary"></i>
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
                                    <p class="text-muted mr-b-5">Inactive Users</p><span class="counter-title color-info"><span class="counter"><?php echo $query['free_users'] ?></span></span>
                                    <!-- /.counter-title --> <!-- <span class="counter-difference text-danger"><i class="feather feather-arrow-down"></i> 8%</span> -->
                                    <div class="progress" style="width: 70%; position: relative; top: 25px">
                                        <div class="progress-bar bg-info" style="width: 100%" role="progressbar"><span class="sr-only">1% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.media-body -->
                                <div class="pull-right align-self-center"><i class="list-icon feather feather-user-plus bg-info"></i>
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
                                    <p class="text-muted mr-b-5">Active Users</p><span class="counter-title"><span class="counter"><?php echo $query['p_users'] ?></span> </span>
                                    <!-- /.counter-title -->
                                    <div class="progress" style="width: 70%; position: relative; top: 25px">
                                        <div class="progress-bar bg-success" style="width: 100%" role="progressbar"><span class="sr-only">100% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.media-body -->
                                <div class="pull-right align-self-center"><i class="list-icon fa fa-group bg-success"></i>
                                </div>
                            </div>
                            <!-- /.counter-w-info -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <div class="widget-holder widget-sm col-md-3 widget-full-height">
                    <div class="widget-bg">
                        <div class="widget-body">
                            <div class="counter-w-info media">
                                <div class="media-body">
                                    <p class="text-muted mr-b-5">Total Earnings</p><span class="counter-title color-pink">&dollar;<span class="counter"><?php echo ($query['p_users'] * 11) ?></span> </span>
                                    <!-- /.counter-title -->
                                    <div style="margin-top: 15px"><span data-toggle="sparklines" data-height="15" data-bar-width="3" data-type="bar" data-chart-range-min="0" data-bar-spacing="3" data-bar-color="#ff6b88"><!-- 2,4,5,3,2,3,5,3,2,3,5,4,2 --></span>
                                    </div>
                                </div>
                                <!-- /.media-body -->
                                <div class="pull-right align-self-center"><i class="list-icon fa fa-money bg-pink"></i>
                                </div>
                            </div>
                            <!-- /.counter-w-info -->
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
            </div>
            <!-- /.widget-list -->
            <div class="widget-list row">
                                <div class="widget-holder widget-full-height widget-flex col-lg-6">
                    <div class="widget-bg">
                        <div class="widget-heading">
                            <h5 class="widget-title">New Users</h5>
                            <!-- <div class="widget-graph-info">
                                <div class="dropdown"><a href="javascript:void(0)" class="dropdown-toggle text-muted fs-16" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a>  <a class="dropdown-item" href="#">Another action</a>  <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div> -->
                            <!-- /.widget-graph-info -->
                        </div>
                        <!-- /.widget-heading -->
                        <div class="widget-body">
                            <div class="mr-t-10 flex-1">
                                <div style="max-height: 270px; height: 270px">
                                    <canvas id="newUsersChart" style="height:100%"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                <!-- /.widget-holder -->
                <?php
                $currDateTime = date('Y-m-d H:i:s');
    $currYear = date('Y', strtotime($currDateTime));
    $currMonth = date('m', strtotime($currDateTime));
    $query =DB::select("SELECT count(*) as yusers from users where status2=1 and YEAR(joining_date)='{$currYear}' ");
    $query=json_decode(json_encode($query), true);
    $query=$query[0];
    if($query && count($query)>0)
    {
        // $result = mysql_fetch_assoc($query);
        $yusers = $query['yusers'];
    }


                ?>
                <div class="widget-holder widget-full-content widget-full-height col-lg-6">
                    <div class="widget-bg">
                        <div class="widget-heading">
                            <h5 class="widget-title">Monthly Earings In This Year</h5>
                        </div>
                        <!-- .widget-heading -->
                        <div class="widget-body">
                            <script type="text/javascript">var months=[];
                            var months_data=[];
                            var colos=[];
                        </script>
                            <?php
     $m_users_c=array(1=>"#800000",2=>"#FFFF00",3=>"#00FF00",4=>"#00FFFF",5=>"#008080",6=>"#FF00FF",7=>"#808080",8=>"#800080",9=>"#0000FF",10=>"#008000",11=>"#808000",12=>"#FF0000");
    for ($i=1; $i <= 12; $i++) {
        $query = DB::select("SELECT count(id) as m_users from users  where  status2=1 and YEAR(joining_date)='{$currYear}' and MONTH(joining_date)='{$i}' ");
        $query=json_decode(json_encode($query), true);
    $query=$query[0];
    if($query && count($query)>0)
    {
        $m_users = $query['m_users'];

    }

    ?>
 <script type="text/javascript">
    months[<?php echo $i-1 ; ?>]="<?php echo DateTime::createFromFormat('!m', $i)->format('F'); ?>";
    months_data[<?php echo $i-1 ; ?>]=<?php echo $m_users; ?>;
    colos[<?php echo $i-1 ; ?>]="<?php echo $m_users_c[$i]; ?>";
 </script>
   <?php }



                            ?>


                            <div class="container-fluid pd-20">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="pos-relative" style="height: 200px">
                                            <canvas id="monthlyEarningChart"></canvas><span class="h6 fw-600 text-muted fs-13 text-uppercase m-0 absolute-center">Earnings</span>
                                        </div>
                                        <!-- /.something -->
                                        <div class="counter-info heading-font-family text-center mt-3 mb-3 fs-13"><span class="color-success"><!-- <i class="fa fa-arrow-circle-o-up"></i> <strong>34%</strong> </span>more than last week --></div>
                                        <!-- /.counter-info -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                    <div class="col-sm-6">
                                        <h5 class="h2 fw-semibold mt-0">$<?php echo number_format(($yusers*11),2); ?></h5>
                                        <div class="progress w-50 mb-3">
                                            <div class="progress-bar bg-info" style="background: linear-gradient(to right, #17bff0, #8be0f9); width: 58.3%" role="progressbar"><span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                        <!-- /.progress -->
                                        <p class="heading-font-family fs-13">$11 Per User.
                                            <br></p>
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color: <?php echo $m_users_c[1]; ?>"></i><?php  echo DateTime::createFromFormat('!m', 1)->format('F');?></p>
                                                <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color: <?php echo $m_users_c[2]; ?>"></i> <?php  echo DateTime::createFromFormat('!m', 2)->format('F');?></p>
                                            </div>
                                            <!-- /.col-6 -->
                                            <div class="col-6">
                                                <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color:<?php echo $m_users_c[3]; ?>"></i> <?php  echo DateTime::createFromFormat('!m', 3)->format('F');?></p>
                                                <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color: <?php echo $m_users_c[4]; ?>"></i> <?php  echo DateTime::createFromFormat('!m', 4)->format('F');?></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color: <?php echo $m_users_c[5]; ?>"></i><?php  echo DateTime::createFromFormat('!m', 5)->format('F');?></p>
                                                <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color:<?php echo $m_users_c[6]; ?>"></i> <?php  echo DateTime::createFromFormat('!m', 6)->format('F');?></p>
                                            </div>
                                            <!-- /.col-6 -->
                                            <div class="col-6">
                                                <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color: <?php echo $m_users_c[7]; ?>"></i> <?php  echo DateTime::createFromFormat('!m', 7)->format('F');?></p>
                                                <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color: <?php echo $m_users_c[8]; ?>"></i> <?php  echo DateTime::createFromFormat('!m', 8)->format('F');?></p>
                                            </div>
                                            <div class="col-6">
                                                <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color: <?php echo $m_users_c[9]; ?>"></i><?php  echo DateTime::createFromFormat('!m', 9)->format('F');?></p>
                                                <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color: <?php echo $m_users_c[10]; ?>"></i> <?php  echo DateTime::createFromFormat('!m', 10)->format('F');?></p>
                                            </div>
                                            <!-- /.col-6 -->
                                            <div class="col-6">
                                                <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color: <?php echo $m_users_c[11]; ?>"></i> <?php  echo DateTime::createFromFormat('!m', 11)->format('F');?></p>
                                                <p class="heading-font-family fs-13 mb-3"><i class="fa fa-square mr-2 mr-0-rtl ml-2-rtl" style="color: <?php echo $m_users_c[12]; ?>"></i> <?php  echo DateTime::createFromFormat('!m', 12)->format('F');?></p>
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
            </div>
            <!-- /.widget-list -->
            <hr>
            <div class="widget-list row">
                <!-- /.widget-holder -->
                <div class="widget-holder widget-outside-header col-lg-7">
                    <div class="widget-heading">
                        <h5 class="widget-title"><i class="material-icons mr-2"></i> Lastest Users</h5>
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
                                        <th>#</th>
                  <th>Login Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Earning</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $q = DB::select("select * from users order by id desc limit 12");
                                    $query=json_decode(json_encode($q), true);

              for($i=0;count($query)>$i;$i++) {
                  ?>
                  <tr>
                  <td><?php echo $query[$i]['id'] ?></td>
                  <td><?php echo $query[$i]['login_id'] ?></td>
                  <td><?php echo $query[$i]['name'] ?></td>
                  <td><?php echo $query[$i]['email'] ?></td>
                  <td><?php echo $query[$i]['phone'] ?></td>
                  <td><?php echo number_format($query[$i]['earning'],2) ?></td></tr>
                  <?php
                  } ;

              ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.widget-body -->
                    </div>
                    <!-- /.widget-bg -->
                </div>
                 <div class="widget-holder widget-outside-header col-lg-5">
                    <div class="widget-heading">
                        <h5 class="widget-title"><i class="material-icons mr-2"></i> Latest Admin Earning</h5>
                        <!-- /.widget-actions -->
                    </div>
                    <!-- /.widget-heading -->
                    <div class="widget-bg">
                        <div class="widget-body pb-0">
                            <table class="widget-invoice-table table mb-0 headings-font-family fs-13" valign="center">
                                <thead class="lh-43 fs-12">
                                    <tr>
                  <th>Login Id</th>
                  <th>Earning</th>

                                    </tr>
                                </thead>
                                <tbody style="overflow: visible;">
                                    <?php
                                    $q = DB::select("SELECT * from users where status2=1 order by id desc limit 12");
                                    $query=json_decode(json_encode($q), true);

for($i=0;count($query)>$i;$i++) {
                  ?>
                  <tr>
                  <td><?php echo $query[$i]['login_id'] ?></td>
                  <td>$11</td>
                  </tr>
                  <?php
                  } ;
              ?>
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
            <!--  -->
            <!-- /.widget-list -->
            <script type="text/javascript">
                var userData=[];
            </script>
            <?php for ($i=6,$j=0; $i >= 0 ; $i--,$j++) {
        $date=date("Y-m-d", strtotime("$i days ago"));
        $query=DB::select("SELECT COUNT(*) as duser from users where DATE(joining_date) = '{$date}' ");
        $query=json_decode(json_encode($query), true);

        $users = $query[0]['duser'];

        // echo $users."-".$date."<br>";
         ?>
        <script type="text/javascript">
                userData[<?php echo $j; ?>]=<?php echo $users; ?>;
        </script>
   <?php }; ?>
        </main>

    <script type="text/javascript">
        newUserChartJs();
        doughnutLegendChartJs()
    function newUserChartJs() {
      var ctx = document.getElementById("newUsersChart");
      if ( ctx === null ) return;
      ctx = ctx.getContext('2d');

      var gradient = ctx.createLinearGradient(0,20,20,270);
      gradient.addColorStop(0,'rgba(25,118,210,0.6)');
      gradient.addColorStop(1,'rgba(25,118,210,0)');

      var data = {
        labels: [
          moment().subtract(6,'days').format("D MMM"),
          moment().subtract(5,'days').format("D MMM"),
          moment().subtract(4,'days').format("D MMM"),
          moment().subtract(3,'days').format("D MMM"),
          moment().subtract(2,'days').format("D MMM"),
          moment().subtract(1,'days').format("D MMM"),
          moment().format("D MMM"),
        ],
        datasets: [
          {
            label: 'New Users',
            lineTension: 0,
            // data: [100,32, 51, 98, 87, 125, 140, 173],
            data:userData,
            backgroundColor: gradient,
            hoverBackgroundColor: gradient,
            borderColor: '#1976d2',
            borderWidth: 2,
            pointRadius: 4,
            pointHoverRadius: 4,
            pointBackgroundColor: 'rgba(255,255,255,1)'
          }
        ]
      };

      var chart = new Chart(ctx, {
        type: 'line',
        data: data,
        responsive: true,
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false,
          },
          scales: {
            xAxes: [{
              gridLines: {
                display: false,
                drawBorder: false,
                tickMarkLength: 20,
              },
              ticks: {
                fontColor: "#bbb",
                padding: 10,
                fontFamily: 'Roboto',
              },
            }],
            yAxes: [{
              gridLines: {
                color: 'rgba(100,100,100,0.15)',
                drawBorder: false,
                zeroLineColor: 'rgba(100,100,100,0.15)',
              },
              ticks: {
                fontColor: "#bbb",
                stepSize: 5,
                padding: 20,
                fontFamily: 'Roboto',
              }
            }],

          },
        },
      });

      $(document).on('SIDEBAR_CHANGED_WIDTH', function() {
        chart.resize();
      });

      $(window).on('resize', function() {
        chart.resize();
      });
    }
    function doughnutLegendChartJs() {
        var ctx = document.getElementById("monthlyEarningChart");
        if ( ctx === null ) return;

        var ctx4 = document.getElementById("monthlyEarningChart").getContext("2d");
        var data4 = {
          labels: months,
          datasets: [
            {
              data: months_data,
              backgroundColor: colos,
              hoverBackgroundColor: colos
            }
          ]
        };
          var chartJsDoughnut = new Chart(ctx4, {
            type: "doughnut",
            data: data4,
            options: {
              maintainAspectRatio: false,
              responsive: true,
              cutoutPercentage: 75,
              elements: {
                arc: {
                  borderWidth: 0
                },
              },
              legend: {
                display: false,
                position: 'right',
                labels: {
                  usePointStyle: true,
                  padding: 40,
                }
              },
              tooltips: {
                mode: 'index',
                intersect: false,
                titleFontColor: "#000",
                titleMarginBottom: 10,
                backgroundColor: "rgba(255,255,255,.9)",
                bodyFontColor: "#000",
                borderColor: "#e9e9e9",
                bodySpacing: 10,
                borderWidth: 2,
                xPadding: 10,
                yPadding: 10,
              },
            }
          }
        );
    }
    </script>

@endsection
