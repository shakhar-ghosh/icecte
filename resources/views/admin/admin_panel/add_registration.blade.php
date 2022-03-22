@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Add Registration Cost| ICECTE Admin')

@section('admin_index_page')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                    <div class="card-body wizard-content">
                        <h6 class="card-subtitle"></h6>
                    <form id="example-form" action="{{URL::to('/admin/add_registration_cost')}}" method="post" class="m-t-40">
                         {{ csrf_field() }}
                            <div>
                                <h3>Add Registration Cost</h3>
                                <hr>
                                <section>
                                    <label for="Registration_Type">Registration Type *</label>
                                    <input id="Registration_Type" name="Registration_Type" placeholder="Registration Type" type="text" required class=" form-control">
                                    <br>
                                    <label for="date">Enter date *</label>
                                    <input id="date" name="date" placeholder="12 Agust, 2019" type="text" required class=" form-control">
                                    <br>
                                    <label for="before_date_cost">Enter Registration Cost Before the Mentioned Date*</label>
                                    <input id="before_date_cost" name="before_date_cost" placeholder="300 USD" type="text" required class=" form-control">
                                    <label for="after_date_cost">Enter Registration Cost After the Mentioned Date*</label>
                                    <input id="after_date_cost" name="after_date_cost" placeholder="350 USD" type="text" required class=" form-control">
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
                                                    <th>Registration Type</th>
                                                    <th>Date</th>
                                                    <th>Cost Before the Date</th>
                                                    <th>Cost After the Date</th>
                                                    <th>Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <p style="display:none;">{{$i=1}}</p>
        
                                                @foreach ($all_reg_data as $reg_data)
                                                    <tr>
                                                    <td>{{$reg_data->id}}</td>
                                                    <td>{{$reg_data->registration_type}}</td>
                                                    <td>{{$reg_data->date}}</td>
                                                    <td>{{$reg_data->before_cost}}</td>
                                                    <td>{{$reg_data->after_cost}}</td>
                                                   
                                                    <td><a href="{{URL::to('/admin/delete_cost/'.$reg_data->id)}}" style="color:orange">Delete</a></td>
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
