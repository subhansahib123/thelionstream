
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="admin-assets/demo/favicon.png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Join Now</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet" type="text/css">
    <link href="admin-assets/vendors/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="admin-assets/vendors/mono-social-icons/monosocialiconsfont.css" rel="stylesheet" type="text/css">
    <link href="admin-assets/vendors/feather-icons/feather.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.css" rel="stylesheet" type="text/css">
    <link href="admin-assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body class="body-bg-full profile-page" style="background-image: url(admin-assets/img/site-bg.jpg)">
    <div id="wrapper" class="row wrapper multi-step-signup">
        <!-- 3 Step Navigation -->
        <div class="steps-tab clearfix" data-target="#multi-step-signup">
            <ul class="list-unstyled list-inline text-center mt-4">
                <li class="list-inline-item active"><a href="#"><span class="step">1</span> Sponsor Infromation</a>
                </li>
                <li class="list-inline-item"><a href="#"><span class="step">2</span> Account Infromation</a>
                </li>
                <li class="list-inline-item"><a href="#"><span class="step">3</span> Personal Information</a>
                </li>
            </ul>
        </div>
        <!-- /.step-tabs -->
        <!-- Register Form -->
        <div class="col-12 col-sm-6 col-md-4 ml-md-auto login-center mx-auto">
            <form id="multi-step-signup" class="multi-step-form overflow-hidden" action="javascript:void(0);"  method="post">
                <fieldset id="signup-step-1" class="form-material active animated fadeInRight">
                    <h6 class="text-uppercase">Join Now</h6>
                    <p class="text-muted">Who is Your Sponsor?</p>
                    <div class="form-group">

                    <input name="sponsor" class="form-control" placeholder="Sponsored By" title="sponsor" type="text" id="sponsor" readonly value="<?php echo isset($_SESSION['ref'])?$_SESSION['ref']:""; ?>" />
                    <label>Sponsor</label>
                    </div>
                    <div class="form-group">
                    <input class="form-control" placeholder="Sponsored Full Name" title="sponsor name" type="text" id="sponsor_name" readonly value="<?php echo isset($_SESSION['ref'])?$name :""?>" />
                    <label>Sponsor Name</label>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block ripple next-btn">Next</button>
                    </div>
                </fieldset>
                <fieldset id="signup-step-2" class="form-material animated fadeInRight">
                    <h6 class="text-uppercase">Join Now</h6>
                    <p class="text-muted">Your Account Information?</p>
                    <font size="3" color="#0aca75">(If You are a member of Crowd Visions Make sure Your user name is the same)</font>
                    <div class="form-group no-gutters">
                        <input name="username" class="form-control" placeholder="Username.." title="username" type="text" id="username" required="" />
                        <label>Username <span class="required">*</span></label>
                    </div>
                    <div class="form-group no-gutters">
                       <input name="email" class="form-control" placeholder="Your E-mail Address.." title="Your e-mail" type="email" id="email" />
                        <label>Email</label>
                    </div>
                    <div class="form-group no-gutters">
                          <input name="password" class="form-control" placeholder="Password *"  title="Password" type="password" id="password" />
                        <label>Password</label>
                    </div>
                    <div class="form-group no-gutters">
                          <input name="c_pass" class="form-control" placeholder="Confirm Password *"  title="Password" type="password" id="c_pass" />
                        <label>Confirm Password</label>
                    </div>
                    <div class="form-group row text-center">
                        <div class="col-6">
                            <button class="btn btn-primary btn-block ripple prev-btn">Previous</button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-primary btn-block ripple next-btn">Next</button>
                        </div>
                    </div>
                </fieldset>
                <fieldset id="signup-step-3" class="form-material animated fadeInRight">
                    <h6 class="text-uppercase">Join Now</h6>
                    <p class="text-muted">Your Personal Details? Dont worry We dont sell.</p>
                    <div class="form-group no-gutters">
                        <input name="name" class="form-control" placeholder="Your Full Name" title="Your name" type="text" id="name" required="" />
                        <label>Full Name*</label>
                    </div>
                    <div class="form-group no-gutters">
                          <input name="phone" class="form-control" placeholder="Contact Number " title="Contact Phone" type="text" id="phone" required="" />
                        <label>Contact</label>
                    </div>
                    <div class="form-group no-gutters">
                        <textarea class="form-control" placeholder="Address" name="address" id="address" required=""></textarea>
                        <label>Address</label>
                    </div>
                    <div class="form-group no-gutters">
                        <select class="form-control" name="country" id="country" required>
                            <option value="" >Select Your Country</option>

                         </select>
                        <label>Country</label>
                    </div>
                    <div class="form-group mb-3">
                        <div class="checkbox checkbox-primary">
                            <label>
                                <input type="checkbox"  id="agree" > <span class="label-text">I agree to all <a href="#">Terms &amp; Conditions</a></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group row text-center">
                        <div class="col-6">
                            <button class="btn btn-primary btn-block ripple prev-btn">Previous</button>
                        </div>
                        <div class="col-6">
                            <input type="submit" name="submit" value="Submit" onclick="return submit_form()"  class="btn btn-success btn-block" >
                            <!-- <button  type="submit" onclick="return ">Submit</button> -->
                        </div>
                    </div>
                </fieldset>
            </form>
            <div class="modal fade" id="spinModal" role="dialog" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" style="position: fixed; top: 40%; left: 30%;">

      <!-- Modal content-->
      <div class="modal-content" style="background-color: transparent; border: 0; box-shadow: none;">

        <div class="modal-body text-center">
         <!-- <span class="fa fa-5x fa-spinner fa-pulse" style="color: #F4CA49;"></span> -->
         <i class="fa fa-5x fa-spinner fa-spin fa-3x fa-fw" style="color: #F4CA49;"></i>
         <span class="sr-only" style="color: #F4CA49;">Loading...</span>
        </div>

      </div>

    </div>
  </div>
            <footer class="col-sm-12 text-center">
                    <!-- <hr> -->
                    <p>Already Have An Account?<a href="login.php" class="text-primary m-l-5">&nbsp;<b>Click Here</b></a>
                    </p>
            </footer>

        </div>
        <!-- /.login-center -->
    </div>
    <!-- /.body-container -->
    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.1/jquery.toast.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.min.js"></script>
    <script src="admin-assets/js/material-design.js"></script>
    


</body>

</html>
