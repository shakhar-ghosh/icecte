<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin login | Frontier Semiconductor</title>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

<link href="{{ URL::asset('fsm_all_web_file/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('fsm_all_web_file/css/style.css') }}" rel="stylesheet">
<link href="{{ URL::asset('fsm_all_web_file/css/one.css') }}" id="style_theme" rel="stylesheet">
<link href="{{ URL::asset('fsm_all_web_file/assets/owl-carousel/css/owl.carousel.min.css')}}" rel ="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('fsm_all_web_file/fsm_image_gallery/logo/fsm_logo_png.png') }}">

</head>
<body>

<!-- Breadcrumb Wrapper End -->
<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper search-results-wrapper" style="height:600px;">
<div class="container">


        <div class="login-box" style="background:#c8d6e5;width:50%;">
                <div class="login-title">
                  <h3>Admin Sign In</h3>
                </div>
            <form action="{{URL::to('/fsm_admin/login_request')}}" method="POST" id="admin_login_form">
                  <div class="single-login-field">
                    <input placeholder="Email Address" id="admin_email" name="email" type="email" required>
                  </div>
                <input type="hidden" id="login_token" name="_token" value="{{csrf_token()}}">
                  <br>
                  <div class="single-login-field">
                    <input placeholder="Password" id="admin_password" name="password" type="password" required>
                  </div>
                  
                    <h6 id="message_status"></h6>
                  <div class="single-login-field">
                    <button class="bttn" type="submit">Sign in</button>
                  </div>
                </form>
            <div class="dont_have"> <a href="{{URL::to('/fsm_admin/admin_report')}}">Face problem? Report the problem</a> </div>
        </div>




 


  
</div>
</div>
<script type="text/javascript">

function pageRedirect() {
    window.location.replace("{{URL::to('/admin/home')}}");
    }   

    $('#admin_login_form').on('submit', function(e){
        e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{{URL::to('/fsm_admin/login_request')}}",
                data: {
                    email: $('#admin_email').val(),
                    password: $('#admin_password').val(),
                    _token: $('#login_token').val()
                },
                success:function(response)
                {
                    if(response=="success")
                    {
                        $("#message_status").text("Ok! Admin Recognized");
                        $("#message_status").css('color','green');
                        //console.log(response);
                        setTimeout("pageRedirect()", 2000);

                    }
                    else if(response=="failed")
                    {
                        $("#message_status").text("Soryy! Admin Not Recognized");
                        $("#message_status").css('color','red');
                        console.log(response);
                        window.location.replace("{{URL::to('/admin/')}}");
                    }
                }
            });
    })

</script>


