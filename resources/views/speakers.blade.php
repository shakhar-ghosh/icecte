@extends('layout.master')
@section('page_title','speakers - ICECTE 2019')

@section('scope_page')
<div class="fluid">
<!--<h1 align="center" >Speakers</h1> -->

        @if(!$speaker->isEmpty())
        <div id="content" class="fluid">
            @if(!$key_note_speaker->isEmpty())
             <hr>
            <h1 align="center" style="font-size:26px;font-weight:bold;">Key Note Speakers</h1> 
             <hr>
                    @foreach($key_note_speaker as $person)
                         <div class="speaker_item flex-container" class="fluid" style=" font-family: Arial, Helvetica, sans-serif;">
                                <div class="content_image">
                                    <img height="100" width="100
                                    " src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/speaker_image/'.$person->speaker_img)}}" alt="" class="img-fluid">
                                </div>
                                <div class="speaker_person_data">
                                 <h3><b>{{$person->speaker_name}}</b></h3>
                                 <h3 style="font-size:20px;color:black;"><b>{{$person->speaker_university}}</b></h3>
                                 <b style="font-size:18px;color:#483D8B;">Title : {{$person->paper_title}}</b>
                                 <br><p style="font-size: 15px;font-family: Arial, Helvetica, sans-serif;font-weight: 600">{!! $person->paper_abstract !!}</p>  
                                 <br>
                                 <hr>
                                </div>
                                  
                         </div>
                    @endforeach
            @endif
            
            @if(!$invited_speaker->isEmpty())
            <div id="content" class="fluid">
            <h1 align="center" style="font-size:26px;font-weight:bold;">Invited Speakers</h1> 
            <hr>
                    @foreach($invited_speaker as $person)
                         <div class="speaker_item flex-container" class="fluid">
                                 <div class="content_image">
                                    <img height="80" width="80
                                    " src="{{URL::asset('/iccie_all_web_file/iccie_image_gallery/speaker_image/'.$person->speaker_img)}}" alt="" class="img-fluid">
                                </div>
                                <div id="person_data">
                                 <h3><b>{{$person->speaker_name}}</b></h3>
                                 <h3 style="font-size:20px;color:black;"><b>{{$person->speaker_university}}</b></h3>
                                 <b style="font-size:18px;color:#483D8B;">Title : {{$person->paper_title}}</b>
                                 <br><p>{!! $person->paper_abstract !!}</p>  
                                 <br>
                                 <hr>
                                </div>
                         </div>
                    @endforeach
            </div>    
            @endif 
        </div>
        @else
        <h3 style="font-size:18px">UPDATE COMING SOON</h3>
        @endif
</div>

<script>
        document.documentElement.scrollTop = document.body.scrollTop = 450;
</script>
@endsection
