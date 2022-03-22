@extends('layout.master')
@section('page_title',' Committee Member - ICECTE 2019')


@section('scope_page')
<div id="content" class="fluid" style="height:100%; width:120%;margin-top:50px">
    <!--Accordion wrapper-->
<div class="accordion md-accordion accordion-1" id="accordionEx23" role="tablist">
         <!--************************************PATRON COMMITTEE START ******************************-->
        <div class="card" >
          <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading96" style="height:50px;"> 
            <h5 class="text-uppercase mb-0 py-1">
              <a class="white-text font-weight-bold" data-toggle="collapse" href="#collapse96" aria-expanded="true"
                aria-controls="collapse96">
                <p class="committee">PATRON </p>
              </a>
            </h5>
          </div>
          <div id="collapse96" class="collapse show" role="tabpanel" aria-labelledby="heading96" data-parent="#accordionEx23">
            <div class="card-body">
              <div class="row my-4">
                <div class="col-md-8">
                     <!--************************************PATRON******************************-->
                    @if($chief)
                    <div id="content">
                    <hr>
                    <h3 style="color:black;font-size:24px">Chief Patron</h3> 
                          <div class="fluid" id=person>
                                <div class="content_image">
                                    <img height="80" width="80
                                    " src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$chief->member_image)}}" alt="" class="img-fluid">
                                </div>
                                 <div id="person_data">
                                 <p> 
                                  {{$chief->member_name}}
                                 <!-- Professor<br/>  -->
                                 <br/>{{$chief->member_university}}
                                 <br/>{{$chief->member_department}}  
                                 </p>
                               </div>
                         </div>
                    </div>
                    @else
                        <h3 style="font-size:18px">UPDATE COMING SOON</h3>
                    @endif
                    @if(!$technical_patron->isEmpty())
                    <div id="content">
                    <hr>
                          <h3 style="color:black;font-size:22px">Technical Patron</h3> 
                          @foreach ($technical_patron as $person)
                          <div class="fluid" class="person" style=" height:100px; width:100%;margin:20px;padding:20px; clear: left">
                                 @if($person->member_image)
                                    <div class="content_image" class="fluid">
                                         <img height="80" width="80" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$person->member_image)}}" alt="" class="img-fluid"> 
                                    </div>
                                    @else
                                    <div class="content_image" class="fluid">
                                        <img height="80" width="80" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/profile_pic.png')}}" alt="" class="img-fluid">
                                    </div>
                                 @endif
                                 <div id="person_data">
                                 <p> 
                                  {{$person->member_name}}
                                 <!-- Professor<br/>  -->
                                 <br/>{{$person->member_university}}
                                 <br/>{{$person->member_department}}  
                                 </p>
                               </div>
                         </div>
                         @endforeach
                    </div>
                    @endif

                </div>
              </div>
            </div>
          </div>
        </div>
        <!--************************************TECHNICAL COMMITTEE START ******************************-->
        <div class="card">
          <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading97" style="height:50px;">
            <h5 class="text-uppercase mb-0 py-1">
              <a class="collapsed font-weight-bold white-text" data-toggle="collapse" href="#collapse97"
                aria-expanded="false" aria-controls="collapse97">
                <p class="committee">TECHNICAL COMMITTEE</p>
              </a>
            </h5>
          </div>
          <!--************************************TECHNICAL COMMITTEE******************************-->
          @if(!$technical_committee->isEmpty())
          <div id="collapse97" class="collapse" role="tabpanel" aria-labelledby="heading97" data-parent="#accordionEx23">
            <div class="card-body">
                
                <div class="row my-4">
                    <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:red;font-size:20px; margin-right:5px;" class="fa fa-caret-right"></i> Technical Chair </h3>
                    <br>
                    <hr style="width:70%;">
                    @if($technical_chair)
                    <div class="col-md-12">    
                        <div id="content">
                          @foreach ($technical_chair as $person)
                                    
                                    <div class="fluid" style=" height:100px; width:100%;margin:20px;padding:20px; clear: left">
                                        @if($person->member_image)
                                        <div class="content_image">
                                            <img height="80" width="80" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$person->member_image)}}" alt="" class="img-fluid">
                                        </div>
                                        @endif
                                        <div id="person_data">
                                            <p>{{$person->member_name}}
                                            <br/>{{$person->member_university}}
                                            <br/>{{$person->member_department}}  
                                             </p>
                                        </div>
                                    </div>
                          @endforeach
                    </div>
                    @else
                    <h3 style="font-size:18px">UPDATE COMING SOON</h3>
                    @endif        
                  </div>
                </div>
                
                <div class="row my-4">
                @if(!$technical_co_chair->isEmpty())
                  <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:red;font-size:20px; margin-right:5px;" class="fa fa-caret-right"></i> Technical Co-Chair </h3>
                  <br>
                  <hr style="width:70%;">
                <div class="col-md-12">
                        <div id="content">
                          @foreach ($technical_co_chair as $person)
                                    <div class="fluid" class="person" style=" height:100px; width:100%;margin:20px;padding:20px; clear: left">
                                        @if($person->member_image)
                                        <div class="content_image">
                                            <img height="80" width="80" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$person->member_image)}}" alt="" class="img-fluid">
                                        </div>
                                        @endif
                                        <div id="person_data">
                                            <p>{{$person->member_name}}
                                            <br/>{{$person->member_university}}
                                            <br/>{{$person->member_department}}  
                                             </p>
                                        </div>
                                    </div>
                          @endforeach
                    </div>
                </div>
                @else
                    <h3 style="font-size:18px">UPDATE COMING SOON</h3>
                @endif
              </div>

              <div class="row my-4">
              @if(!$technical_secretary->isEmpty())
                  <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:red;font-size:20px; margin-right:5px;" class="fa fa-caret-right"></i> Technical Secretary </h3>
                  <br>
                  <hr style="width:70%;">
                <div class="col-md-12">
                        <div id="content">
                          @foreach ($technical_secretary as $person)
                                    <div class="fluid" class="person" style=" height:100px; width:100%;margin:20px;padding:20px; clear: left">
                                        @if($person->member_image)
                                        <div class="content_image">
                                            <img height="80" width="80" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$person->member_image)}}" alt="" class="img-fluid">
                                        </div>
                                        @endif
                                        <div id="person_data">
                                            <p>{{$person->member_name}}
                                            <br/>{{$person->member_university}}
                                            <br/>{{$person->member_department}}  
                                             </p>
                                        </div>
                                    </div>
                          @endforeach
                    </div>                  
                </div>
                    @else
                    <h3 style="font-size:18px">UPDATE COMING SOON</h3>
                @endif  
              </div>
              
              <div class="row my-4">
              @if(!$technical_joint_secretary->isEmpty())
                  <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:red;font-size:20px; margin-right:5px;" class="fa fa-caret-right"></i> Technical Joint-Secretary </h3>
                  <br>
                  <hr style="width:70%;">
                <div class="col-md-12">
                        <div id="content">
                          @foreach ($technical_joint_secretary as $person)
                                    <div class="fluid" class="person" style=" height:100px; width:100%;margin:20px;padding:20px; clear: left">
                                        @if($person->member_image)
                                        <div class="content_image">
                                            <img height="80" width="80" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$person->member_image)}}" alt="" class="img-fluid">
                                        </div>
                                        @endif
                                        <div id="person_data">
                                            <p>{{$person->member_name}}
                                            <br/>{{$person->member_university}}
                                            <br/>{{$person->member_department}}  
                                             </p>
                                        </div>
                                    </div>
                          @endforeach
                    </div>                  
                </div>
                @else
                <h3 style="font-size:18px">UPDATE COMING SOON</h3>
                @endif  
              </div>
              
              

              <div class="row my-4">
              @if(!$technical_member->isEmpty())
                  <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:red;font-size:20px; margin-right:5px;" class="fa fa-caret-right"></i> Technical Program Member </h3>
                  <br>
                  <hr style="width:70%;">
                <div class="col-md-12">
                        <div id="content">
                          @foreach ($technical_member as $person)
                                     <p style="color:black;margin:0px;font-size:15px;padding:2px;font-weight: lighter;">  <i style="font-size:13px; color:red; margin-right:3px;"  class="fa fa-chevron-circle-right"></i> {{$person->member_name}}, {{$person->member_university}}, {{$person->member_department}}</p>     
                          @endforeach
                    </div>
                </div>
                 @else
                    <h3 style="font-size:18px">UPDATE COMING SOON</h3>
                    @endif  
              </div>
           
           </div>
          </div>
          @else
          <h3 style="padding-left:100px; font-size:18px">UPDATE COMING SOON</h3>
          @endif
        </div>
        
        <!--************************************INTERNATIONAL ADVISORY COMMITTEE START ******************************-->
        <div class="card">
          <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading98" style="height:50px;">
            <h5 class="text-uppercase mb-0 py-1">
              <a class="collapsed font-weight-bold white-text" data-toggle="collapse" href="#collapse98"
                aria-expanded="false" aria-controls="collapse98">
                <p class="committee">INTERNATIONAL ADVISORY COMMITTEE</p>
              </a>
            </h5>
          </div>
          @if(!$advisory_committee->isEmpty())
        <!--************************************ADVISORY COMMITTEE******************************-->
          <div id="collapse98" class="collapse" role="tabpanel" aria-labelledby="heading98" data-parent="#accordionEx23">
              
              <div class="card-body">
                  <div class="row my-4">
                    <div class="col-md-12">
                            <div id="content">
                                @foreach ($advisory_committee as $person)
                                      <p style="color:black;margin:0px;font-size:15px;padding:2px;font-weight: lighter;">  <i style="font-size:13px; color:red; margin-right:3px;"  class="fa fa-chevron-circle-right"></i> {{$person->member_name}}, {{$person->member_university}}, {{$person->member_department}}</p>                                    
                                @endforeach
                            </div>			
                    </div>
                  </div>

            </div>
          </div>
          @else
          <h3 style="padding-left:100px; font-size:18px">UPDATE COMING SOON</h3>
          @endif
        </div>
        <!--************************************INTERNATIONAL ADVISORY COMMITTEE END ******************************-->
        
         <!--************************************LOCAL ADVISORY COMMITTEE START ******************************-->
        <div class="card">
          <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading98" style="height:50px;">
            <h5 class="text-uppercase mb-0 py-1">
              <a class="collapsed font-weight-bold white-text" data-toggle="collapse" href="#collapse9888"
                aria-expanded="false" aria-controls="collapse9888">
                <p class="committee">LOCAL ADVISORY COMMITTEE</p>
              </a>
            </h5>
          </div>
          @if(!$advisory_committee_local->isEmpty())
        <!--************************************ADVISORY COMMITTEE******************************-->
          <div id="collapse9888" class="collapse" role="tabpanel" aria-labelledby="heading98" data-parent="#accordionEx23">
              
              <div class="card-body">
                  <div class="row my-4">
                    <div class="col-md-12">
                            <div id="content">
                                @foreach ($advisory_committee_local as $person)
                                      <p style="color:black;margin:0px;font-size:15px;padding:2px;font-weight: lighter;">  <i style="font-size:13px; color:red; margin-right:3px;"  class="fa fa-chevron-circle-right"></i> {{$person->member_name}}, {{$person->member_university}}, {{$person->member_department}}</p>                                    
                                @endforeach
                            </div>			
                    </div>
                  </div>

            </div>
          </div>
          @else
          <h3 style="padding-left:100px; font-size:18px">UPDATE COMING SOON</h3>
          @endif
        </div>
        <!--************************************LOCAL ADVISORY COMMITTEE END ******************************-->
        
    
        <!--************************************ORGANIZING COMMITTEE START ******************************-->
        <div class="card">
                <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading98" style="height:50px;">
                  <h5 class="text-uppercase mb-0 py-1">
                    <a class="collapsed font-weight-bold white-text" data-toggle="collapse" href="#collapse988"
                      aria-expanded="false" aria-controls="collapse988">
                      <p class="committee">ORGANIZING COMMITTEE</p>
                    </a>
                  </h5>
                </div>
                <!--************************************ORGANIZING COMMITTEE******************************-->
                
                @if(!$organizing_committee->isEmpty())
                <div id="collapse988" class="collapse" role="tabpanel" aria-labelledby="heading98" data-parent="#accordionEx23">
                  <div class="card-body">
            
                <div class="row my-4">
                @if(!$organizing_chair->isEmpty())
                  <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:red;font-size:20px; margin-right:5px;" class="fa fa-caret-right"></i>Chair </h3>
                  <br>
                  <hr style="width:70%;">
                <div class="col-md-12">
                        <div id="content">
                          @foreach ($organizing_chair as $person)
                                    <div class="fluid" class="person" style=" height:100px; width:100%;margin:20px;padding:20px; clear: left">
                                        @if($person->member_image)
                                        <div class="content_image">
                                            <img height="80" width="80" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$person->member_image)}}" alt="" class="img-fluid">
                                        </div>
                                        @endif
                                        <div id="person_data">
                                            <p>{{$person->member_name}}
                                            <br/>{{$person->member_university}}
                                            <br/>{{$person->member_department}}  
                                             </p>
                                        </div>
                                    </div>
                          @endforeach
                    </div>
                </div>
                @else
                    <h3 style="font-size:18px">UPDATE COMING SOON</h3>
                @endif   
              </div>
          
              <div class="row my-4">
                @if(!$organizing_co_chair->isEmpty())
                  <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:red;font-size:20px; margin-right:5px;" class="fa fa-caret-right"></i> Co-Chair </h3>
                  <br>
                  <hr style="width:70%;">
                <div class="col-md-12">
                        <div id="content">
                          @foreach ($organizing_co_chair as $person)
                                    <div class="fluid" class="person" style=" height:100px; width:100%;margin:20px;padding:20px; clear: left">
                                        @if($person->member_image)
                                        <div class="content_image">
                                            <img height="80" width="80" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$person->member_image)}}" alt="" class="img-fluid">
                                        </div>
                                        @endif
                                        <div id="person_data">
                                            <p>{{$person->member_name}}
                                            <br/>{{$person->member_university}}
                                            <br/>{{$person->member_department}}  
                                             </p>
                                        </div>
                                    </div>
                          @endforeach
                    </div>
                </div>
                @else
                    <h3 style="font-size:18px">UPDATE COMING SOON</h3>
                @endif  
              </div>
                      
              <div class="row my-4">
                @if(!$organizing_secretary->isEmpty())
                  <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:red;font-size:20px; margin-right:5px;" class="fa fa-caret-right"></i> Secretary </h3>
                  <br>
                  <hr style="width:70%;">
                <div class="col-md-12">
                        <div id="content">
                          @foreach ($organizing_secretary as $person)
                                    <div class="fluid" class="person" style=" height:100px; width:100%;margin:20px;padding:20px; clear: left">
                                        @if($person->member_image)
                                        <div class="content_image">
                                            <img height="80" width="80" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$person->member_image)}}" alt="" class="img-fluid">
                                        </div>
                                        @endif
                                        <div id="person_data">
                                            <p>{{$person->member_name}}
                                            <br/>{{$person->member_university}}
                                            <br/>{{$person->member_department}}  
                                             </p>
                                        </div>
                                    </div>
                          @endforeach
                    </div>
                </div>
                @else
                    <h3 style="font-size:18px">UPDATE COMING SOON</h3>
                @endif  
              </div>  
              
              <div class="row my-4">
                @if(!$organizing_joint_secretary->isEmpty())
                  <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:red;font-size:20px; margin-right:5px;" class="fa fa-caret-right"></i> Joint Secretary </h3>
                  <br>
                  <hr style="width:70%;">
                <div class="col-md-12">
                        <div id="content">
                          @foreach ($organizing_joint_secretary as $person)
                                    <div class="fluid" class="person" style=" height:100px; width:100%;margin:20px;padding:20px; clear: left">
                                        @if($person->member_image)
                                        <div class="content_image">
                                            <img height="80" width="80" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$person->member_image)}}" alt="" class="img-fluid">
                                        </div>
                                        @endif
                                        <div id="person_data">
                                            <p>{{$person->member_name}}
                                            <br/>{{$person->member_university}}
                                            <br/>{{$person->member_department}}  
                                             </p>
                                        </div>
                                    </div>
                          @endforeach
                    </div>
                </div>
                @else
                    <h3 style="font-size:18px">UPDATE COMING SOON</h3>
                @endif  
              </div>   
        <!--
              <div class="row my-4">
                @if(!empty($organizing_treasurer))
                  <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:red;font-size:20px; margin-right:5px;" class="fa fa-caret-right"></i> Treasurer </h3>
                  <br>
                  <hr style="width:70%;">
                <div class="col-md-12">
                        <div id="content">
                          @foreach ($organizing_treasurer as $person)
                                    <div class="fluid" class="person" style=" height:100px; width:100%;margin:20px;padding:20px; clear: left">
                                        @if($person->member_image)
                                        <div class="content_image">
                                            <img height="80" width="80" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$person->member_image)}}" alt="" class="img-fluid">
                                        </div>
                                        @endif
                                        <div id="person_data">
                                            <p>{{$person->member_name}}
                                            <br/>{{$person->member_university}}
                                            <br/>{{$person->member_department}}  
                                             </p>
                                        </div>
                                    </div>
                          @endforeach
                    </div>
                    @else
                    <h3 style="font-size:18px">UPDATE COMING SOON</h3>
                    @endif           
                </div>
              </div>

              <div class="row my-4">
                @if($organizing_assist_treasurer)
                  <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:red;font-size:20px; margin-right:5px;" class="fa fa-caret-right"></i> Assistant Treasurer </h3>
                  <br>
                  <hr style="width:70%;">
                <div class="col-md-12">
                        <div id="content">
                          @foreach ($organizing_assist_treasurer as $person)
                                    <div class="fluid" class="person" style=" height:100px; width:100%;margin:20px;padding:20px; clear: left">
                                        @if($person->member_image)
                                        <div class="content_image">
                                            <img height="80" width="80" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$person->member_image)}}" alt="" class="img-fluid">
                                        </div>
                                        @endif
                                        <div id="person_data">
                                            <p>{{$person->member_name}}
                                            <br/>{{$person->member_university}}
                                            <br/>{{$person->member_department}}  
                                             </p>
                                        </div>
                                    </div>
                          @endforeach
                    </div>
                    @else
                    <h3 style="font-size:18px">UPDATE COMING SOON</h3>
                    @endif           
                </div>
              </div>  
        -->              
             <!--************************************ORGANIZING SUB COMMITTEE START******************************-->
                @if(!$wm_sub_committee->isEmpty() or !$pub_sub_committee->isEmpty() or !$registration_sub_committee->isEmpty() or !$finance_sub_committee->isEmpty() or !$local_sub_committee->isEmpty()) 
                  <p style="color:red;font-weight:bold;font-size:20px;padding:0;margin:0px;"><i style="color:brown;" class="fas fa-hand-point-right"></i>  Organizig Sub Committee</p>
                    <hr>

                    <div class="row my-4">
                      @if(!$wm_sub_committee->isEmpty())
                      <div class="col-md-12" style="overflow:scroll;">
                          <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:red;font-size:20px; margin-right:5px;" class="fa fa-caret-right"></i>  Web & Media Sub-Committee</h3>
                            <hr style="width:60%;">
                             <div style="margin-left:15px;overflow:scroll;">
                             
                                    <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Chair</p>
                                    @foreach ($wm_sub_committee as $item)
                                        @if($item->member_post=='Chair')
                                            <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                        @endif
                                    @endforeach
                                    <br>
                                    
                                    <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Member</p>
                                    @foreach ($wm_sub_committee as $item)
                                        @if($item->member_post=='Member')
                                            <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                        @endif
                                    @endforeach
                                    <br>
                             </div>
                      </div>
                        @else
                            <h3 style="font-size:18px">UPDATE COMING SOON</h3>
                        @endif  
                    </div>

                    <div class="row my-4">
                        @if(!$pub_sub_committee->isEmpty())
                            <div class="col-md-12" style="overflow:scroll;">
                                <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:red;font-size:20px; margin-right:5px;" class="fa fa-caret-right"></i> Publication Sub-Committee</h3>
                                  <hr style="width:60%;">
                               <div style="margin-left:15px;overflow:scroll;">
                                   
                                          <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Chair</p>
                                          @foreach ($pub_sub_committee as $item)
                                              @if($item->member_post=='Chair')
                                                  <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                              @endif
                                          @endforeach
                                     
                                          <br>
                                          <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Member</p>
                                          @foreach ($pub_sub_committee as $item)
                                              @if($item->member_post=='Member')
                                                  <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                              @endif
                                          @endforeach
                                          <br>
                                      </div> 
                            </div>
                            @else
                            <h3 style="font-size:18px">UPDATE COMING SOON</h3>
                             @endif
                          </div>
                          
                          <div class="row my-4">
                              @if(!$registration_sub_committee->isEmpty())
                                <div class="col-md-12" style="overflow:scroll;">
                                    <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:red;font-size:20px; margin-right:5px;" class="fa fa-caret-right"></i>  Registration Sub-Committee</h3>
                                      <hr style="width:60%;">
                                   <div style="margin-left:15px;overflow:scroll;">
                                       
                                              <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Chair</p>
                                              @foreach ($registration_sub_committee as $item)
                                                  @if($item->member_post=='Chair')
                                                      <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                                  @endif
                                              @endforeach
                                         
                                              <br>
                                              <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Member</p>
                                              @foreach ($registration_sub_committee as $item)
                                                  @if($item->member_post=='Member')
                                                      <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                                  @endif
                                              @endforeach
                                              <br>
                                          </div>
                                </div> 
                                 @else
                                 <h3 style="font-size:18px">UPDATE COMING SOON</h3>
                                 @endif
                              </div>


                                  <div class="row my-4">
                                      @if(!$local_sub_committee->isEmpty())
                                        <div class="col-md-12" style="overflow:scroll;">
                                            <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:red;font-size:20px; margin-right:5px;" class="fa fa-caret-right"></i>  Local Arrangement Sub-Committee</h3>
                                              <hr style="width:60%;">
                                           <div style="margin-left:15px;overflow:scroll;">
                                                      <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Chair</p>
                                                      @foreach ($local_sub_committee as $item)
                                                          @if($item->member_post=='Chair')
                                                              <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                                          @endif
                                                      @endforeach
                                                      <br>
                                                      <p style="color:black;font-size:16px;font-weight:bold;padding:0; margin:0px;">Member</p>
                                                      @foreach ($local_sub_committee as $item)
                                                          @if($item->member_post=='Member')
                                                              <p style="color:black;margin:0px;font-size:15px;padding:0px;font-size:13px">  <i style="font-size:13px; color:red;margin-right:3px;"  class="fas fa-arrow-right"></i> {{$item->member_name}}</p>
                                                          @endif
                                                      @endforeach
                                                      <br>
                                                  </div>       
                                        </div> 
                                        @else
                                        <h3 style="font-size:18px">UPDATE COMING SOON</h3>
                                         @endif
                                      </div>
                    @endif
                    
                 <!--************************************ORGANIZING SUB COMMITTEE END******************************-->
                  </div>
                </div>
                @else
             <h3 style="padding-left:100px; font-size:18px">UPDATE COMING SOON</h3>
            @endif
          </div>
          
          
         <div class="card">
                    <div class="card-header blue lighten-3 z-depth-1" role="tab" id="heading98" style="height:50px;">
                        <h5 class="text-uppercase mb-0 py-1">
                            <a class="collapsed font-weight-bold white-text" data-toggle="collapse" href="#collapse989"aria-expanded="false" aria-controls="collapse989">
                                 <p class="committee">FINANCE COMMITTEE</p>
                            </a>
                        </h5>
                 </div>
                @if(!$organizing_treasurer->isEmpty() or !$organizing_assist_treasurer->isEmpty())
                    <!--************************************FINANCE COMMITTEE ******************************-->
                    <div id="collapse989" class="collapse" role="tabpanel" aria-labelledby="heading98" data-parent="#accordionEx23">
                        <div class="card-body">
                            <div class="row my-4">
                                    @if(!$organizing_treasurer->isEmpty())
                                    <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:red;font-size:20px; margin-right:5px;" class="fa fa-caret-right"></i> Treasurer </h3>
                                    <br>
                                    <hr style="width:70%;">
                                    <div class="col-md-12">
                                            <div id="content">
                                            <!--************************************FINANCE COMMITTEE Section START******************************-->
                                                @foreach ($organizing_treasurer as $person)
                                                     <div class="fluid" class="person" style=" height:100px; width:100%;margin:20px;padding:20px; clear: left">
                                                        @if($person->member_image)
                                                            <div class="content_image">
                                                                 <img height="80" width="80" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$person->member_image)}}" alt="" class="img-fluid">
                                                            </div>
                                                        @endif
                                                            <div id="person_data">
                                                                <p>{{$person->member_name}}
                                                                <br/>{{$person->member_university}}
                                                                <br/>{{$person->member_department}}  
                                                                </p>
                                                            </div>
                                                    </div>
                                                @endforeach
                                             <!--************************************FINANCE COMMITTEE Section END******************************-->
                                            </div>
                                    @else
                                    <h3 style="font-size:18px">UPDATE COMING SOON</h3>
                                    @endif         
                                    </div>
                            </div>
                            
                            <div class="row my-4">
                                @if(!$organizing_assist_treasurer->isEmpty())
                                <h3 style="color:black;text-weight:bold;font-size:18px;"><i style="color:red;font-size:20px; margin-right:5px;" class="fa fa-caret-right"></i>Assistant Treasurer </h3>
                                <br>
                                <hr style="width:70%;">
                                <div class="col-md-12">
                                    <div id="content">
                                     <!--************************************FINANCE COMMITTEE Section START******************************-->
                                     @foreach ($organizing_assist_treasurer as $person)
                                         <div class="fluid" class="person" style=" height:100px; width:100%;margin:20px;padding:20px; clear: left">
                                         @if($person->member_image)
                                            <div class="content_image">
                                                <img height="80" width="80" src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$person->member_image)}}" alt="" class="img-fluid">
                                            </div>
                                         @endif
                                            <div id="person_data">
                                                <p>{{$person->member_name}}
                                                <br/>{{$person->member_university}}
                                                <br/>{{$person->member_department}}  
                                                </p>
                                            </div>
                                        </div>
                                      @endforeach
                                      <!--************************************FINANCE COMMITTEE Section END******************************-->
                                    </div>	
                                 @else
                                 <h3 style="font-size:18px">UPDATE COMING SOON</h3>
                                 @endif 
                                </div>
                            </div>
                            
                        
                    </div>
                </div>
          @else
          <h3 style="padding-left:100px; font-size:18px">UPDATE COMING SOON</h3>
          @endif
            </div>      
               <!--************************************FINANCE COMMITTEE END******************************-->   
      </div>
      <!--Accordion wrapper-->
       
      
</div>
<br>


<script>
    document.documentElement.scrollTop = document.body.scrollTop = 450;
</script>
      






    
@endsection
