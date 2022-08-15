@extends('layout.admin')
@section('content')



        <!-- /.site-sidebar -->
        <main class="main-wrapper clearfix">
            <!-- Page Title Area -->
            <div class="row page-title clearfix">
                <div class="page-title-left">
                    <h6 class="page-title-heading mr-0 mr-r-5">Manage Active Users</h6>
                    <p class="page-title-description mr-0 d-none d-md-inline-block"> Active Users</p>
                </div>
                <!-- /.page-title-left -->
                <div class="page-title-right d-none d-sm-inline-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
                <!-- /.page-title-right -->
            </div>
            <!-- /.page-title -->
            <!-- =================================== -->
            <!-- Different data widgets ============ -->
            <!-- =================================== -->
            <div class="widget-list">
                <div class="row">

                     </div>
                <div class="row">
                    <div class="widget-holder col-md-12">
                        <div class="widget-bg">
                            <div class="widget-heading widget-heading-border">
                                <h5 class="widget-title"> Users List</h5>
                                <div class="widget-actions"><a href="#" class="badge bg-info-contrast px-3 cursor-pointer heading-font-family"></a>
                                </div>
                                <!-- /.widget-actions -->
                            </div>
                            <!-- /.widget-heading -->
                            <div class="widget-body">
                                <table class="table table-striped table-hover table-bordered" data-toggle="datatables" data-plugin-options='{"searching": false}' >

                  <thead>
                    <tr>
                  <th>#</th>
                  <th>Login Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Earning</th>
                  <th>Inactivate</th>
                </tr>

                      </thead>
                  <tbody>
                      <?php
            $total = 1;
            $d = DB::select("SELECT * from users where status2=1 and in_active_id = 0");
            $query=json_decode(json_encode($d), true);


            for($i=0;count($query)>$i;$i++) { ?>
              <tr>
                  <td><?php echo $query[$i]['id'] ?></td>
                  <td><?php echo $query[$i]['login_id'] ?></td>
                  <td><?php echo $query[$i]['name'] ?></td>
                  <td><?php echo $query[$i]['email'] ?></td>
                  <td><?php echo $query[$i]['phone'] ?></td>
                  <td><?php echo $query[$i]['earning'] ?></td>
                  <td><i class=" list-icon feather feather-x-circle text-danger" style="cursor: pointer;" onclick="window.open('active_users.php?uid=<?php echo $query[$i]['id'] ?>&s=3','_self');" title="inActivate"></i></td>
                </tr>
            <?php  }
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
                <!-- /.row -->
            </div>
            <!-- /.widget-list -->
        </main>

@endsection
