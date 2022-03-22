@extends('layout.master')
@section('page_title','program_schedule - ICECTE 2019')

@section('program_schedule')

<div class="fluid">
<div id="content" class="fluid">
            <div class="content_item" class="fluid">
                <h1>Program Schedule</h1> 
                <hr>
                @if(!$all_dates->isEmpty())
                    <table style="width:80%;border: 1px solid black;border-collapse: collapse;text-align: center">
                        <tr style="border: 1px solid black;height: 15px;">
                            <th style="border: 1px solid black; width:100px;"height="50">Date</th>  
                            <th>
                                <table style="width:100%;border:none;">         
                                        <tr>
                                        <th style="border: 1px solid black;width:300px;"height="50">Details</th>
                                        <th style="border: 1px solid black;width:180px;"height="50">Time</th>
                                        <th style="border: 1px solid black;width:165px;"height="50">Venue</th>
                                        </tr>        
                                </table>
                            </th>
                            </tr>
                            @foreach ($all_dates as $date)
                            <tr style="border: 1px solid black;height: 15px;">
                            <td style="border: 1px solid black;"height="50">{{$date->date}}</td>  
                            <td>
                                <table style="width:100%;border:none;"> 
                                        @foreach ($all_schedule as $schedule)  
                                            @if($schedule->date == $date->date)
                                            <tr>
                                            <td style="border: 1px solid black;width:300px;"height="50">{{$schedule->details}}</td>
                                            <td style="border: 1px solid black;width:200px;"height="50">{{$schedule->time}}</td>
                                            <td style="border: 1px solid black;width:150px;"height="50">{{$schedule->venue}}</td>
                                            </tr>
                                            @endif
                                        @endforeach
                                </table>
                            </td>
                            </tr>
                            @endforeach   
                </table>
                @else
                <h3 style="font-size:18px">UPDATE COMING SOON</h3>
                @endif
                <hr>
                @if(!$file_link->isEmpty())
                <h3 style="font-size:18px">Download Schedule</h3>
                    @foreach($file_link as $file)
                     <br><a href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->program_schedule)}}">Click to Download</a>
                    @endforeach
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
