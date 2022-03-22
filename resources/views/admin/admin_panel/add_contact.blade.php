@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Add Registration Cost| ICECTE Admin')

@section('admin_index_page')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                    <div class="card-body wizard-content">
                        <h6 class="card-subtitle"></h6>
                    <form id="example-form" action="{{URL::to('/admin/add_contact')}}" method="post" class="m-t-40">
                         {{ csrf_field() }}
                            <div>
                                <h3>Add Contact Informations</h3>
                                <hr>
                                <section>
                                    <label for="faculty">Faculty Name *</label>
                                    <input id="faculty" name="faculty" placeholder="ECE" type="text" required class=" form-control">
                                    <br>
                                    <label for="university">University Name *</label>
                                    <input id="university" name="university" placeholder="RUET" type="text" required class=" form-control">
                                    <br>
                                    <label for="uni_address">Address*</label>
                                    <input id="uni_address" name="uni_address" placeholder="Rajshahi" type="text" required class=" form-control">
                                    <br>
                                    <label for="contact_no">Contact No (Put all separated by comma if multiple numbers)*</label>
                                    <input id="contact_no" name="contact_no" placeholder="+8801620, +880188" type="text" required class=" form-control">
                                    <br>
                                    <label for="email">Email Address*</label>
                                    <input id="email" name="email" placeholder="abc@gmail.com" type="text" required class=" form-control">
                                    <br>
                                    <label for="website">Website Address*</label>
                                    <input id="website" name="website" placeholder="www.ruet.ac.bd" type="text" required class=" form-control">

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
                                <h4 class="card-title text-center">Contact List</h4>
                                <br>
                                <h6 class="card-subtitle"></h6>
        
                                <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>serial</th>
                                                    <th>Faculty</th>
                                                    <th>University</th>
                                                    <th>Email</th>
                                                    <th>Contact No</th>
                                                    <th>Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <p style="display:none;">{{$i=1}}</p>
        
                                                @foreach ($all_contact as $contact)
                                                    <tr>
                                                    <td>{{$contact->id}}</td>
                                                    <td>{{$contact->faculty}}</td>
                                                    <td>{{$contact->university}}</td>
                                                    <td>{{$contact->contact_no}}</td>
                                                    <td>{{$contact->email}}</td>
                                                    <td><a href="{{URL::to('/admin/delete_contact/'.$contact->id)}}" style="color:orange">Delete</a></td>
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
