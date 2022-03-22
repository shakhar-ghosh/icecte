@extends('layout.master')
@section('page_title','ICECTE 2019')
@section('home_page')
<div class="fluid" id="content">
        <div class="fluid">
            <h1 class="mt-3">{{ $home_article->post_title }}</h1>
            <hr>
            <div class="float-right" style="height:200px; width:280px;margin-left:10px;margin-right:10px;">
                <img style="height:200px;width:340px;margin-left:10px;" src="{{URL::asset('iccie_all_web_file/iccie_image_gallery/home_image/'.$home_article->display_image)}}" alt="ICECTE 2019">
            </div>
            <div class="fluid" style="width:660px;font-size: 15px">
            <span style="text-align:justify; font-family: Arial, Helvetica, sans-serif;">
            {!! $home_article->main_content !!}
            </span>
            </div>
        </div>

    <!--######################-->
    @if(!$key_note_speaker->isEmpty())
    <br>
    <br>
    <h1>Key Note Speakers</h1>
        
        @foreach($key_note_speaker as $speaker)
        <div class="profile_view" class="fluid">
        <!--    <img src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/speaker_image/'.$speaker->speaker_img)}}" alt="John" style="width:60%"> -->
             <!--
            <img src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/speaker_image/'.$speaker->speaker_img)}}" alt="speaker img" style="width:40%">
            <p style="font-size: 14px;text-align:center"><b>{{$speaker->speaker_name }}</b>
            <br>{{$speaker->speaker_university }}
            </p>
            <p style="color: black; font-size: 13px; text-align:justify; padding-left:5px;padding-right:5px"><b>Title:</b>
            {{$speaker->paper_title }}
            </p>
           
             <p><button style="margin-bottom:2px; margin-top:2px" type="button" onclick="window.location='{{URL::to('/speakers')}}'">
                 View
             </button></p>
             -->
             <p><button style="margin-bottom:2px; margin-top:2px" type="button" onclick="window.location='{{URL::to('/speakers')}}'">
                 <img src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/speaker_image/'.$speaker->speaker_img)}}" alt="speaker img" style="width:40%">
                 <p style="font-size: 14px;text-align:center;font-family: Arial, Helvetica, sans-serif;color:#191970"><b>{{$speaker->speaker_name }}</b>
                 <br>{{$speaker->speaker_university }}
                 </p>
                 <p style="font-family: Arial, Helvetica, sans-serif; color: black; font-size: 13px; text-align:justify; padding-left:5px;padding-right:5px"><b>Title:</b>
                 {{$speaker->paper_title }}
                 </p>
             </button></p>
             
        </div>
        @endforeach
    @endif
         <!--######################-->
</div>
@endsection
