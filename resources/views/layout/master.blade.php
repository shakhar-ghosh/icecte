<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from cse-events.ruet.ac.bd/iccie/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2017 06:47:32 GMT -->
<!-- Added by HTTrack --><!-- /Added by HTTrack -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>@yield('page_title')</title>

<link rel="shortcut icon" href="{{URL::asset('iccie_all_web_file/images/ICECTE.jpg')}}" type="image/x-icon">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<meta content='Adil Reza ;adilreza043@gmail.com' name='author'/>
<meta content='Md. Asifur Rahman ;asifurrahman1@gmail.com' name='author'/>

<meta name="description" content="ICECTE 2019 (International Conference on Electrical, Computer & Telecommunication Engineering), Venue:RUET, Rajshahi, Bangladesh" />
<meta name="keywords" content="ICECTE,ICECTE 2019, Electrical, EEE, Computer, CSE, Telecommunication, ETE, Engineering,  Science,  RUET, Conference, International, Rajshahi,University" />


<link rel="stylesheet" type="text/css" href="{{URL::asset('iccie_all_web_file/css/style.css')}}" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('iccie_all_web_file/css/csshake-slow.css')}}" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('iccie_all_web_file/css/csshake-horizontal.css')}}" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('iccie_all_web_file/css/csshake-rotate.css')}}" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('iccie_all_web_file/css/boilerplate.css')}}" />

<link href="{{URL::asset('iccie_all_web_file/css/boilerplate.css')}}" rel="stylesheet" type="text/css">




<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">


<!-- modernizr enables HTML5 elements and feature detects -->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">

<script type="text/javascript" src="{{URL::asset('iccie_all_web_file/js/modernizr-1.5.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('iccie_all_web_file/js/respond.min.js')}}"></script>
</head>
<body>
<div class="gridContainer clearfix">
      <div id="main" class="fluid">
                <header id="header" class="fluid">
                        <div id="banner" class="fluid">
                                	<div id="wtext" class="fluid">
                                    <img height="100" src="{{URL::asset('banner_all/'.session('banner_title'))}}" alt="banner Title" />
                                    </div>
                                    <div id="slideshow" class="fluid">
                                    <img height="300" src="{{URL::asset('banner_all/'.session('banner_home'))}}" alt="ICECTE 2019"  />
                                    </div>
                        			</br>
                      <!-- ################## MARQUE TAG SECTION################### -->
    								<p><marquee behavior="scroll" direction="left" scrolldelay="90" onmouseover="this.stop();" onmouseout="this.start();">
                     
                      <p style="display:none;">{{ $files = session('file_link') }}</p>
                      
            <!--@foreach($files as $file) -->
              <!--  &nbsp&nbsp&nbsp&nbsp ACCEPTED PAPER LIST (<a href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->accepted_paper)}}">Download</a>). 
                &nbsp&nbsp&nbsp&nbsp VALID REGISTRATION LIST (<a href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->valid_registration_list)}}">Download</a>).
                &nbsp&nbsp&nbsp&nbsp PROGRAM SCHEDULE (<a href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->program_schedule)}}">Download</a>).
                -->
                
                &nbsp&nbsp&nbsp&nbsp <a class="newsfeed4" href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->program_schedule)}}" >****Program Schedule****</a>
                &nbsp&nbsp&nbsp&nbsp <a class="newsfeed2" href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->valid_registration_list)}}" >****Registered Paper List****</a>
                &nbsp&nbsp&nbsp&nbsp <a class="" href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->accepted_paper)}}">***Accepted Paper List***</a>
                &nbsp&nbsp&nbsp&nbsp <a class="" href="{{URL::to('/registration')}}" >****Registration Portal****</a>
                
                &nbsp&nbsp&nbsp&nbsp <a class="newsfeed4" href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->program_schedule)}}" >****Program Schedule****</a>
                &nbsp&nbsp&nbsp&nbsp <a class="newsfeed2" href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->valid_registration_list)}}" >****Registered Paper List****</a>
                &nbsp&nbsp&nbsp&nbsp <a class="" href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->accepted_paper)}}">***Accepted Paper List***</a>
                &nbsp&nbsp&nbsp&nbsp <a class="" href="{{URL::to('/registration')}}" >****Registration Portal****</a>
                
                &nbsp&nbsp&nbsp&nbsp <a class="newsfeed4" href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->program_schedule)}}" >****Program Schedule****</a>
                &nbsp&nbsp&nbsp&nbsp <a class="newsfeed2" href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->valid_registration_list)}}" >****Registered Paper List****</a>
                &nbsp&nbsp&nbsp&nbsp <a class="" href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->accepted_paper)}}">***Accepted Paper List***</a>
                &nbsp&nbsp&nbsp&nbsp <a class="" href="{{URL::to('/registration')}}" >****Registration Portal****</a>
                
                &nbsp&nbsp&nbsp&nbsp <a class="newsfeed4" href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->program_schedule)}}" >****Program Schedule****</a>
                &nbsp&nbsp&nbsp&nbsp <a class="newsfeed2" href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->valid_registration_list)}}" >****Registered Paper List****</a>
                &nbsp&nbsp&nbsp&nbsp <a class="" href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->accepted_paper)}}">***Accepted Paper List***</a>
                &nbsp&nbsp&nbsp&nbsp <a class="" href="{{URL::to('/registration')}}" >****Registration Portal****</a>
                
                &nbsp&nbsp&nbsp&nbsp <a class="newsfeed4" href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->program_schedule)}}" >****Program Schedule****</a>
                &nbsp&nbsp&nbsp&nbsp <a class="newsfeed2" href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->valid_registration_list)}}" >****Registered Paper List****</a>
                &nbsp&nbsp&nbsp&nbsp <a class="" href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->accepted_paper)}}">***Accepted Paper List***</a>
                &nbsp&nbsp&nbsp&nbsp <a class="" href="{{URL::to('/registration')}}" >****Registration Portal****</a>
            <!-- @endforeach  -->  
                    </marquee></p>
                        </div>
                </header>
                <div id="navigation" class="fluid">
                	<nav id="nav" class="fluid">
                		<ul>
       						 <li ><a style="color:white;text-decoration:none; font-size:16px;"href="{{URL::to('/')}}">Home</a></li>
        					<li ><a style="color:white;text-decoration:none; font-size:16px;"  href="{{URL::to('/scope')}}">Scope</a></li>
        					<li class="parent"><a style="color:white;text-decoration:none; font-size:16px;"  href="{{URL::to('/committee_member')}}">Committee</a>
                          <!-- 
                          <ul class="child">
             									<li ><a style="color:white;text-decoration:none; font-size:16px;"  href="{{URL::to('/committee_member')}}">Patron</a></li>
            									 <li ><a style="color:white;text-decoration:none; font-size:16px;"  href="{{URL::to('/Technical_committee')}}">Technical Patron</a></li>
            									 <li ><a style="color:white;text-decoration:none; font-size:16px;"  href="{{URL::to('/iccie_scope')}}">Organizing Committee</a></li>
           										  <li ><a style="color:white;text-decoration:none; font-size:16px;"  href="{{URL::to('/iccie_scope')}}">Advisory Committee</a></li>
                          </ul>
                          -->
                    </li>
                    <li ><a style="color:white;text-decoration:none; font-size:16px;"  href="{{URL::to('/speakers')}}">Speakers</a></li>
       						 <li ><a style="color:white;text-decoration:none; font-size:16px;"  href="{{URL::to('/call_for_paper')}}">Call For Paper</a></li> 
        					<li class="parent"><a style="color:white;text-decoration:none; font-size:16px;"  href="">Paper Submission</a>
        					            <ul class="child">
             									<li ><a style="color:white;text-decoration:none; font-size:16px;"  href="{{URL::to('/paper_submission')}}">Paper Submission Guideline</a></li>
            									<li ><a style="color:white;text-decoration:none; font-size:16px;"  href="{{URL::to('/camera_paper_submission')}}">Camera Ready Paper Submission Guideline</a></li>
                                        </ul>
        					</li>
        					<li ><a style="color:white;text-decoration:none; font-size:16px;"  href="{{URL::to('/registration')}}">Registration </a></li>
       				    </ul>		
                	</nav> 
                </div>


                <div class="fluid" id="site_content">

                		    <div class="fluid" id="views_content" >
                            <div class="col-md-9" >
                               @yield('home_page')
                               @yield('scope_page')
                               @yield('registration')
                               @yield('committee')
                               @yield('call_for_paper')
                               @yield('camera_paper_submission')
                               @yield('paper_submission_guideline')
                               @yield('proceedings')
                               @yield('accepted_Paper_list')
                               @yield('post_Conference_tour')
                               @yield('accomodation')
                               @yield('program_schedule')
                               @yield('speakers')
                            </div>
                        </div>

                        <div class="fluid" id="sidebar_content">
                              <div class="fluid" class="sidebar_items">
                                    <hr>
                                    <h4  style="font-size:20px">  Technical Co-Sponsor</h4> 
                                    <p style="display:none;">{{ $files = session('file_link') }} </p>
                                    @foreach($files as $file)
                                    <img style="margin-left:-10px;" width="180" height="180" src="{{URL::asset('/iccie_all_web_file/pdf/'.$file->logo3)}}" alt="IEEEBDS" /> 
                                    @endforeach
                                    <hr>
                                    <p style="font-size:16px;margin-bottom:-1px;color:#0043A8"><b>Time Left to Conference</b></p>
                                    <p id="countdowntime" style="margin-top:1px;font-size:16px;"></p>
                                    <hr>
                              </div>
                              <div class="fluid" class="sidebar_items">
                              <h4 style="font-size:20px">Information Desk</h4>
                              
                         <!--     <a href="{{URL::to('/proceedings')}}">Proceedings & Publication</a>   -->
                              <p style="display:none;">{{ $files = session('file_link') }}</p>
                              @foreach($files as $file)
                              <br><a href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->valid_registration_list)}}">Valid Registration List</a>
                              <br><a href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->accepted_paper)}}">Accepted Paper List</a>
                              <br><a href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->tour_info)}}">Post Conference Tour</a>
                              <br><a href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->accomodation)}}">Accomodation</a>
                              <br><a href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->program_schedule)}}">Program Schedule</a>
                              @endforeach
                              <br><a href="http://www.ruet.ac.bd/">About RUET</a>
                              </div>
                              
                              
                              <div class="fluid" class="sidebar_items">
                              <hr>
                               <h4 class="shake-slow shake-constant shake-constant--hover">Important Dates</h4>
                              <hr>
                              @if(!empty(session('all_dates')))
                                   <p style="display:none;">{{$all_date=session('all_dates')}}</p>
                                    @foreach ($all_date as $date)
                                        <p style="font-size:13px;margin-bottom:-1px;"> <b>{{$date->date_title}}</b></p>
                                        <p style="margin-top:1px;font-size:12px" class="date"> {{$date->date}}</p>
                                    @endforeach
                              @endif
                                
                              </div>  
                        </div>
                </div>

      </div>
      <footer id="footer" class="fluid"> 


                    <div class="fluid footer_sub_sections">
                    <p style="display:none;">{{ $files = session('file_link') }}</p>
                     @foreach($files as $file)
                    <img style="display:block; margin:auto;border-radius:10px;margin-top:10px;margin-bottom:0px;" height="100px" width="100px" src="{{URL::asset('/iccie_all_web_file/pdf/'.$file->logo1)}}" alt="" class="img-fluid">
                    <br>
                    <img style="display:block; margin:auto; border-radius:50%;margin-top:10px;margin-bottom:0px;" height="100px" width="100px" src="{{URL::asset('/iccie_all_web_file/pdf/'.$file->logo2)}}" alt="" class="img-fluid ">
                    @endforeach
                    </div>
                   
<!-- ================================================================================================= -->
                     <div class="fluid footer_sub_sections">
                     <hr>
                         <h3 class="footer_head">Navigation</h3>
                     <hr>
                       <a style="font-size: 14px; text-decoration:none; color:white;" href="{{URL::to('/')}}">Home</a>
                       <br><a style="font-size: 14px; text-decoration:none; color:white;" href="{{URL::to('/scope')}}">Scope</a>
                       <br><a style="font-size: 14px; text-decoration:none; color:white;" href="{{URL::to('/speakers')}}">Speakers</a>
                       <br><a style="font-size: 14px; text-decoration:none; color:white;"  href="{{URL::to('/call_for_paper')}}">Call For Paper</a>
                       <br><a style="font-size: 14px; text-decoration:none; color:white;" href="{{URL::to('/committee_member')}}">Committee</a>
                      <!-- <br><a style="font-size: 14px; text-decoration:none; color:white;" href="{{URL::to('/call_for_paper')}}">Call For Paper</a> -->
                       <br><a style="font-size: 14px; text-decoration:none; color:white;" href="{{URL::to('/paper_submission')}}">Paper Submission</a>
                       <br><a style="font-size: 14px; text-decoration:none; color:white;" href="{{URL::to('/registration')}}">Registration </a>
                    </div>

                    <div class="fluid footer_sub_sections">
                    <hr>
                    <h3 class="footer_head ">Information Desk</h3>
                    <hr>
                    @if(!empty(session('file_link')))
                     <p style="display:none;">{{ $files = session('file_link') }}</p>
                       @foreach($files as $file)
                           <a style="font-size: 14px; text-decoration:none; color:white;" href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->valid_registration_list)}}">Valid Registration List</a>
                       <br><a style="font-size: 14px; text-decoration:none; color:white;" href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->accepted_paper)}}">Accepted Paper List</a>
                       <br><a style="font-size: 14px; text-decoration:none; color:white;" href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->tour_info)}}">Post Conference Tour</a>
                       <br><a style="font-size: 14px; text-decoration:none; color:white;" href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->accomodation)}}">Accomodation</a>
                       @endforeach
                       @else
                           <a style="font-size: 14px; text-decoration:none; color:white;" href="#">Valid Registration List</a>
                       <br><a style="font-size: 14px; text-decoration:none; color:white;" href="#">Accepted Paper List</a>
                       <br><a style="font-size: 14px; text-decoration:none; color:white;" href="#">Post Conference Tour</a>
                       <br><a style="font-size: 14px; text-decoration:none; color:white;" href="#">Accomodation</a>
                    @endif
                    <br><a style="font-size: 14px; text-decoration:none; color:white;" href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->program_schedule)}}">Program Schedule</a>
                       <br><a style="font-size: 14px; text-decoration:none; color:white;" href="http://www.ruet.ac.bd/">About RUET</a>
                    </div>

                    <div class="fluid footer_sub_sections">
                      <hr>
                      <h3 class="footer_head" >Contact</h3>
                      <hr>
                        @if(!empty(session('contact_info')))
                         <p style="display:none;">{{$all_contact=session('contact_info')}}</p>
                        @foreach($all_contact as $contact)
                          <a style="font-size: 14px; text-decoration:none; color:white;" href="#footer_sub_sections">{{$contact->faculty}}</a>
                          <br><a style="font-size: 14px; text-decoration:none; color:white;" href="#footer_sub_sections">{{$contact->university}}</a>
                          <br><a style="font-size: 14px; text-decoration:none; color:white;" href="#footer_sub_sections">{{$contact->uni_address}}</a>
                          <br><a style="font-size: 14px; text-decoration:none; color:white;" href="#footer_sub_sections">Mobile: {{$contact->contact_no}}</a>
                          <br><a style="font-size: 14px; text-decoration:none; color:white;" href="mailto:.{{$contact->email}}.">Email: {{$contact->email}}</a>
                          <br><a style="font-size: 14px; text-decoration:none; color:white;" href="{{'https://'.$contact->website.'/'}}">Website: {{$contact->website}}</a>
                        @endforeach
                        @else
                          <a style="font-size: 14px; text-decoration:none; color:white;" href="#footer_sub_sections">&nbsp;</a>
                          <br><a style="font-size: 14px; text-decoration:none; color:white;" href="#footer_sub_sections">&nbsp;</a>
                          <br><a style="font-size: 14px; text-decoration:none; color:white;" href="#footer_sub_sections">&nbsp;</a>
                          <br><a style="font-size: 14px; text-decoration:none; color:white;" href="#footer_sub_sections">&nbsp;</a>
                          <br><a style="font-size: 14px; text-decoration:none; color:white;" href="#">&nbsp;</a>
                          <br><a style="font-size: 14px; text-decoration:none; color:white;" href="#">&nbsp;</a>
                        @endif
                       
                    </div>
<!-- ================================================================================================= -->                    
               <p class="text-center" style="font-size:8px; height:15px;"><b> Copyright &#169 ICECTE2019. All rights reserved by Faculty of Electrical and Computer Engineering, Rajshahi University of Engineering & Technology (RUET), Rajshahi 6204.<br>Developed By - Md. Asifur Rahman, Email: asifurrahman1@gmail.com and Adil Reza, Email:adilreza043@gmail.com</b> 
        </footer>

</div>


  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="{{URL::asset('iccie_all_web_file/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('iccie_all_web_file/js/image_slide.js')}}"></script>
  
  <script>
// Set the date we're counting down to
var countDownDate = new Date("Dec 26, 2019 9:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("countdowntime").innerHTML = "<b style='color:red'>"+days+"d </b><b style='color:blue'>" + hours + "h </b><b style='color:DarkViolet'>"
  + minutes + "m </b><b style='color:MediumVioletRed'>" + seconds + "s </b> ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("countdowntime").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
  
  
  
  
  
</body>
<!-- Mirrored from cse-events.ruet.ac.bd/iccie/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2017 06:50:07 GMT -->
</html>

 


	  
	  
	  
	  
	  
	  
	  	  
	 
