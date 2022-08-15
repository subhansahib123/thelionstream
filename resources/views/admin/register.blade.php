
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="admin-asset/demo/favicon.png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Join Now</title>
    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-assets/vendors/material-icons/material-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-assets/vendors/mono-social-icons/monosocialiconsfont.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-assets/vendors/feather-icons/feather.css')}}" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.7.0/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.4/sweetalert2.css" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body class="body-bg-full profile-page" style="background-image: url({{asset('admin-assets/img/site-bg.jpg')}})">
    <div id="wrapper" class="row wrapper multi-step-signup">
        @isset($msg)
        <h1 style="color: red">
            {{$msg}}</h1>
        @endisset

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
                    <input type="hidden" id="sponsur_id" value="{{isset($parent)?$parent->id:""}}" />
                    <input name="sponsor" class="form-control" placeholder="Sponsored By" title="sponsor" type="text" id="sponsor" readonly value="{{isset($parent)?$parent->username:""}}" />
                    <label>Sponsor</label>
                    </div>
                    <div class="form-group">
                    <input class="form-control" placeholder="Sponsored Full Name" title="sponsor name" type="text" id="sponsor_name" readonly value="{{isset($parent)?$parent->name:""}}" />
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
                        <input name="username" class="form-control" placeholder="Username.." title="username" type="text" id="username"/>
                        <label >Username <span class="required">*</span> <span id="username_msg"></span> <span id="username_error"></span></label>
                    </div>
                    <div class="form-group no-gutters">
                       <input name="email" class="form-control" placeholder="Your E-mail Address.." title="Your e-mail" type="email" id="email" />
                        <label>Email <span id="email_msg"></span> <span id="email_error"></span></label>
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
                        <input name="name" class="form-control" placeholder="Your Full Name" title="Your name" type="text" id="name"  />
                        <label>Full Name*</label>
                    </div>
                    <div class="form-group no-gutters">
                          <input name="phone" class="form-control" placeholder="Contact Number " title="Contact Phone" type="text" id="phone" />
                        <label>Contact</label>
                    </div>
                    <div class="form-group no-gutters">
                        <textarea class="form-control" placeholder="Address" name="address" id="address" ></textarea>
                        <label>Address</label>
                    </div>
                    <div class="form-group no-gutters">
                        <select class="form-control" name="country" id="country" >
                            <option value="" >Select Your Country</option>
                            @isset($countries)
                            @foreach ($countries as $country )
                            <option value="{{$country->name}}" >{{$country->name}}</option>

                            @endforeach

                            @endisset

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
                            <input type="submit" name="submit" value="Submit" onclick="return submit_form()"   class="btn btn-success btn-block" >
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
                    <p>Already Have An Account?<a href="/signin" class="text-primary m-l-5">&nbsp;<b>Click Here</b></a>
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

<script src="{{asset('admin-assets/js/material-design.js')}}"></script>
 <!-- <script type="text/javascript" src="js/bootbox.min.js"></script> -->
 <script>
    jQuery(document).ready(function($) {
        $('#email').focusout(function(){
            if(this.value=='')
            return false;
            $.ajax({
            url: '/api/checkEmailUsername',
            type: 'get',
            data: {"email":this.value},
            success: function(data)
            {
                console.log(data);
                if(data.msg){
                    show_alert('Email',data.msg,'success')
                }else {
                    show_alert('Email',data.error,'error')
                }

            },
            error:function(err){
                console.log(err);
            }
        });
        return false;

        });
        $('#username').focusout(function(){
            if(this.value=='')
            return false;
            $.ajax({
            url: '/api/checkEmailUsername',
            type: 'get',
            data: {"username":this.value},
            success: function(data)
            {
                console.log(data);
                if(data.msg){
                    show_alert('Username',data.msg,'success')
                }else {
                    show_alert('Username',data.error,'error')
                }

            },
            error:function(err){
                console.log(err);
            }
            });
            return false;

            });
                var el = $('.multi-step-form');
                el.each(function(){
                    var $this = $(this),
                            $stepsTab = $('.steps-tab[data-target="#' + $this.attr('id') + '"]');
                            $this.find('.next-btn').on( "click", function(){
                        $active =$this.find('fieldset.active');
                        $id = $active.attr('id');
                        // alert($id);
                        if(check_form($id)){
                        $active.removeClass('active').addClass('done').next('fieldset').addClass('active');
                        $stepsTab.find('li.active').removeClass('active').addClass('done').next('li').addClass('active');
                      }
                    });
                    $this.find('.prev-btn').on( "click", function(){
                        $this.find('fieldset.active').removeClass('active').prev('fieldset').addClass('active');
                        $stepsTab.find('li.active').removeClass('active').removeClass('done').prev('li').addClass('active');
                    });
                });
            });
    function show_alert(title,msg,type="error",$link=""){
        var btn='btn btn-'+type;
        swal({
                title: title,
                text: msg,
                type: type,
                confirmButtonClass: btn,
                confirmButtonText: 'Ok'
            }).then(function () {
                if($link!=""){
                    window.location=$link;
               }
           });
    }
    function check_form(id){
        var check=true;
        var message="";
        if(id =="signup-step-1"){
         if($("#sponsor").val()==""){
                message="You Can Not Porcess Without Sponsor!";
                check=false;
            }
        }
        else if(id =="signup-step-2"){
           if($("#username").val()==""){
               message="Username";
               check=false;
            }
            if($("#email").val()==""){
               message +=(message==""?"":", ")+"Email";
               check=false;
            }
            if($("#password").val()==""){
                message +=(message==""?"":", ")+"Password";
                check=false;
            }
            if($("#c_pass").val()==""){
                message +=(message==""?"":", ")+"Confirm ";
                check=false;
            }
            message+=(message==""?"":" Required");
            if($("#password").val()!="" && $("#c_pass").val()!=""){
                if($("#password").val()!==$("#c_pass").val()){
                    message +=(message==""?"":" And ")+"Password and Confirm Password Must Be Same";
                    check=false;
                }
            }
            // if(check){
            //     message=check_user();
            // }
        }
        if(message!=""){
            show_alert("Error!",message);
            check=false;
        }
        return check;
    }

    function submit_form(){

                    var username=$("#username").val();
                    var email=$("#email").val();
                    var password=$("#password").val();
                    var name=$("#name").val();
                    var phone=$("#phone").val();
                    var address=$("#address").val();
                    var country=$("#country").val();
                    var sponsor=$("#sponsur_id").val();
                    $.ajax({
                        url: '/api/signup-store',
                        type: 'post',
                        data: {"username":username,"email":email,"password":password,"name":name,"phone":phone,"address":address,"country":country,"sponsor":sponsor},
                        success: function(data)
                        {

                          if(data.result==true){
                            // setTimeout(, 5000);
                            show_alert("Congratulations!",data.message,"success","/signin");
                        }else{
                            show_alert("Error!",data.message);
                        }
                      },
                      error:function(error){
                        console.log(error);
                        show_alert("Error!","Internal Server Error");
                      }
                    });
        return false;
    }
</script>

</body>

</html>
