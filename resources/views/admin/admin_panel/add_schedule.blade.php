@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Add Registration Cost| ICECTE Admin')

@section('admin_index_page')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                    <div class="card-body wizard-content">
                        <h6 class="card-subtitle"></h6>
                    <form id="example-form" action="{{URL::to('/admin/add_schedule')}}" method="post" class="m-t-40">
                         {{ csrf_field() }}
                            <div>
                                <h3>Add Schedule Informations</h3>
                                <hr>
                                <section>
                                    <label for="date">Date *</label>
                                    <input id="date" name="date" placeholder="Date" type="text" required class=" form-control">
                                    <br>
                                    <label for="schedule_details">Schedule Details *</label>
                                    <input id="schedule_details" name="schedule_details" placeholder="Opening Ceremony" type="text" required class=" form-control">
                                    <br>
                                    <label for="time">Enter Registration Cost Before the Mentioned Date*</label>
                                    <input id="time" name="time" placeholder="10 AM to 11 AM" type="text" required class=" form-control">
                                    <br>
                                    <label for="venu">Venu*</label>
                                    <input id="venu" name="venu" placeholder="RUET Auditorium" type="text" required class=" form-control">
                                    <input type="submit" value="submit" class="form-control btn btn-primary" >
                                </section>
                            </div>
                        </form>
                    </div>
                    @if(!empty($msg))
                    <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Success!</strong> Your Data has been added to home page
                          </div>
                    @endif
            </div>
        </div>

            <div class="col-md-6">
                <div class="card" style="height:600px;overflow:scroll;">
                        <div class="card-body wizard-content">
                                <h4 class="card-title text-center">Registration Cost List</h4>
                                <br>
                                <h6 class="card-subtitle"></h6>
        
                                <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>serial</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Details</th>
                                                    <th>Venu</th>
                                                    <th>Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <p style="display:none;">{{$i=1}}</p>
        
                                                @foreach ($all_schedule as $schedule)
                                                    <tr>
                                                    <td>{{$schedule->id}}</td>
                                                    <td>{{$schedule->date}}</td>
                                                    <td>{{$schedule->details}}</td>
                                                    <td>{{$schedule->time}}</td>
                                                    <td>{{$schedule->venue}}</td>
                                                    <td><a href="{{URL::to('/admin/delete_schedule/'.$schedule->id)}}" style="color:orange">Delete</a></td>
                                                 </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                </div>
                                
                        </div>

                </div>
        </div>
       
                   
    </div>
</div>

    
@endsection
