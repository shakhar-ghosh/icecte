@extends('layout.master')
@section('page_title','registration - ICECTE 2019')
@section('registration')
<div>
        <div id="content" class="fluid">
            <div class="content_item" class="fluid">
                <h1>Registration Fees</h1> 
                <hr>
                @if(!$all_dates->isEmpty())
                    <table style="width:80%;border: 1px solid black;border-collapse: collapse;text-align: center; font-family: Arial, Helvetica, sans-serif;font-weight:40">
                        <tr style="border: 1px solid black;">
                            <th style="border: 1px solid black; font-size:1.35vw; font-weight: bold; color:	#191970;">Category</th>
                            @foreach ($all_dates as $date)
                            <th style="border: 1px solid black; font-size:1.35vw; font-weight: bold; color:	#191970;">On or Before {{$date->date}}</th> 
                            <th style="border: 1px solid black; font-size:1.35vw; font-weight: bold; color:	#191970;">After {{$date->date}}</th> 
                            @endforeach
                        </tr>
                            @foreach ($cost_data as $cost)
                        <tr style="border: 1px solid black;height: 15px;">
                             <td style="border: 1px solid black;"height="50">{{$cost->registration_type}}</td>
                             <td style="border: 1px solid black;"height="50">{{$cost->before_cost}}</td>
                             <td style="border: 1px solid black;"height="50">{{$cost->after_cost}}</td>
                        </tr>
                            @endforeach
                </table>
                <p>Each conference registration includes a conference kit with conference proceedings, admission to all technical sessions, refereshments during sessions, lunches and conference dinner and a $15 USD Charge for inclusion in IEEE Xplore Digital Library.</p>
                <p>A Paper will appear in the proceedings if at least one of the authors registers and present the paper in the conference.</p>
                
            <p style="color:blue">A person, who has no paper but wants to participate in the conference, needs to pay the full registration fee of his / her category and email his / her payment slip or money receipt to  <a href="mailto:icecte.ruet@gmail.com">icecte.ruet@gmail.com</a> </p>
                @else
                <h3 style="font-size:18px">UPDATE COMING SOON</h3>
                @endif
                <hr>
               
                @if(!$instruction->isEmpty())
                    <h1>Registration Instruction</h1> 
                    @foreach($instruction as $instruct)
                    <div id="reg_instruction" class="fluid" style="width:90%">
                     <span style="text-align:justify;">
                     {!! $instruct->instruction !!}
                     
                    </span>

                    @if($instruct->file_name)
                        <li><a href="{{URL::asset('iccie_all_web_file/registration_instruction/'.$instruct->file_name)}}">Click Here to Download the Registration Instruction</a></li>
                    @endif
                        
                    
                     <form id="example-form" action="{{URL::to('/registration')}}" method="post" class="m-t-40" enctype="multipart/form-data">
                         {{ csrf_field() }}
                            <div>
                                <hr>
                                <h1>Fill up the Information to Complete Your Registration</h1>
                                
                                <section>
                                    <label for="author_category">Author's Category **</label>
                                    <select onchange="rest_hide_show()" required class="form-control"  name="author_category" id="author_category" >
                                        <option value="">---Select Category---</option>
                                        <option value="foreign">Foreign Authors / Participant</option>
                                        <option value="foreign_ieee">Foreign Authors / Participants (IEEE Members)</option>
                                        <option value="local ">Local Authors / Participants</option>
                                        <option value="local_ieee">Local Authors / Participants (IEEE Member)</option>
                                        <option value="student">Student Authors / Participants</option>
                                        <option value="student_ieee">Student Authors / Participants (IEEE Member)</option>
                                    </select>
                                <br>
                                <label for="author_name">Enter Author's Name**</label>
                                    <input id="author_name" name="author_name" placeholder="Author's Name" type="text"  required class=" form-control">
                                <br>
                                <label for="paper_id">Paper ID** (Use the paper ID given in the accepted paper list)</label>
                                    <input  id="paper_id" name="paper_id" placeholder="e.g. 12345" type="text" required class=" form-control">
                                <br>
                                <span id="error_msg"> </span>

                                <label for="email">Enter Email Address**</label>
                                    <input id="email" name="email" placeholder="e.g. abc@abc.com" type="text" required class=" form-control">
                                <br>
                                <label for="payment_doc">Upload Payment Document  </label>
                                    <input id="payment_doc" name="payment_doc" placeholder="Payment Document" type="file" required class=" form-control">
                                <br>
                                <label for="ieee_doc">Upload IEEE Membership Documents </label><label style="color:red"> (*** Only Mandatory for IEEE members ***)</label>
                                    <input id="ieee_doc" name="ieee_doc" placeholder="IEEE Membership Verification Document" type="file"  class=" form-control">
                                <br>
                               
                                <label for="author_doc">Upload Student Verification Documents</label> <label style="color:red">(***Only Mandatory for Student Authors***)</label>
                                    <input id="author_doc" name="author_doc" placeholder="Student Verification Document" type="file"  class=" form-control">
                                 <br>
                                 
                                <input name="submit" id="submit" type="submit" value="Submit" class="form-control btn btn-primary" >
                               
                                </section>
                            </div>
                           
                        </form>
                        <br>
                        @if($flag=='true' AND $msg != '')
                            <span style="color:green;">{{$msg}}</span>
                        @endif
                        @if($flag=='false' AND $msg != '')
                            <span style="color:red;">{{$msg}}</span>
                        @endif
                        <hr>
                         
                    </div>           
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
