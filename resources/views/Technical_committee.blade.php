@extends('layout.master')
@section('page_title',' Committee Member - ICECTE 2019')
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
@section('committee')
<div name="committee_view" style="overflow:scroll;height:850px;width:700px;margin-left:5px;padding-right:20px;display: inline-block;">
                 <div class="content_imagetext">
                 @if(!$technical_chair->isEmpty())
                 <h2>TECHNICAL COMMITTEE</h2>
                                    
                                     @foreach ($technical_chair as $person)
                                     <div class="content_imagetext_sub">
                                     @if($person->member_image)
                                     <div class="content_image">
                                     <img src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$person->member_image)}}" alt="chief patron" class="img-fluid">
                                     </div>
                                     @endif
                                     <p>
                                     <b>{{$person->member_post}}  </b>
                                     <br/>{{$person->member_name}}  
                                     <br/>{{$person->member_university}}
                                     <br/>{{$person->member_department}}
                                     </p>
                                     </div>
                                    @endforeach
                                   
                                    @foreach ($technical_co_chair as $person)
                                     <div class="content_imagetext_sub">
                                     @if($person->member_image)
                                     <div class="content_image">
                                     <img src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$person->member_image)}}" alt="chief patron" class="img-fluid">
                                     </div>
                                     @endif
                                     <p>
                                     <b>{{$person->member_post}}  </b>
                                     <br/>{{$person->member_name}}  
                                     <br/>{{$person->member_university}}
                                     <br/>{{$person->member_department}}
                                     </p>
                                     </div>
                                    @endforeach
                                   
                                    @foreach ($technical_secretary as $person)
                                     <div class="content_imagetext_sub">
                                     @if($person->member_image)
                                     <div class="content_image">
                                     <img src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$person->member_image)}}" alt="chief patron" class="img-fluid">
                                     </div>
                                     @endif
                                     <p>
                                     <b>{{$person->member_post}}  </b>
                                     <br/>{{$person->member_name}}  
                                     <br/>{{$person->member_university}}
                                     <br/>{{$person->member_department}}
                                     </p>
                                     </div>
                                    @endforeach
                                   
                                    @foreach ($technical_joint_secretary as $person)
                                     <div class="content_imagetext_sub">
                                     @if($person->member_image)
                                     <div class="content_image">
                                     <img src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/member_image/'.$person->member_image)}}" alt="chief patron" class="img-fluid">
                                     </div>
                                     @endif
                                     <p>
                                     <b>{{$person->member_post}}  </b>
                                     <br/>{{$person->member_name}}  
                                     <br/>{{$person->member_university}}
                                     <br/>{{$person->member_department}}
                                     </p>
                                     </div>
                                    @endforeach
                    @else
                    <h1>*****WILL BE UPDATED *****</h1>
                    @endif
                    </div>
</div> 
@endsection

<script>
        document.documentElement.scrollTop = document.body.scrollTop = 450;
</script>