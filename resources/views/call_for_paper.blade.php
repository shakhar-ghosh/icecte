@extends('layout.master')
@section('page_title','Call For Paper - ICECTE 2019')

@section('call_for_paper')
<div>
        <div id="content">
            <div class="content_item">
                <h1>Call for Paper</h1> 
                <hr>
                @if(!$call_for_paper->isEmpty())
             <!--   <p style="margin-right:10px;">Please Download From the Link Below</p>    
                <ul>
                    @foreach($call_for_paper as $paper)
                        <li><a href="{{URL::asset('iccie_all_web_file/call_for_paper/'.$paper->paper_name)}}">{{$paper->paper_name}}</a></li>
                    @endforeach
                </ul>
             -->	
             <a href="{{URL::asset('iccie_all_web_file/call_for_paper/'.$paper->paper_name)}}">
                <img src="{{URL::asset('iccie_all_web_file/call_for_paper/'.$paper->paper_name)}}" alt="Poster" style="width:100%; height:100%"> 
             </a>
                @else
                <h3 style="font-size:18px">UPDATE COMING SOON</h3> 
                @endif    
            </div>
        </div>
</div>
<br>

<script>
        document.documentElement.scrollTop = document.body.scrollTop = 450;
</script>
@endsection
