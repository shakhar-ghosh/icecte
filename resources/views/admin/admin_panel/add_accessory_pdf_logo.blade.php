@extends('/admin/admin_panel/admin_master')
@section('page_title', 'Add Call for paper | ICECTE Admin')
@section('admin_index_page')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                    <div class="card-body wizard-content">
                        
                        <h6 class="card-subtitle"></h6>
                    <form id="example-form" action="{{URL::to('/admin/add_accessory_pdf_logo')}}" method="post" class="m-t-40" enctype="multipart/form-data">
                         {{ csrf_field() }}
                            <div>
                                <h3>Add Accesory file and links</h3>
                                <hr>
                                <section>
                                    <label for="logo1_file_name">Footer Logo 1</label>
                                    <input id="logo1_file_name" name="logo1_file_name" placeholder="Logo1.png" type="file"  class=" form-control">
                                    <br>
                                    <label for="logo2_file_name">Footer Logo 2</label>
                                    <input id="logo2_file_name" name="logo2_file_name" placeholder="Logo2.png" type="file"  class=" form-control">
                                    <br>
                                    <label for="logo3_file_name">Technical Co Sponsor Logo 3</label>
                                    <input id="logo3_file_name" name="logo3_file_name" placeholder="Logo3.png" type="file"  class=" form-control">
                                    <br>
                                    <label for="valid_registration_list">Valid Registration List</label>
                                    <input id="valid_registration_list" name="valid_registration_list" placeholder="valid.pdf" type="file"  class=" form-control">
                                    <br>
                                    <label for="program_schedule">Program Schedule</label>
                                    <input id="program_schedule" name="program_schedule" placeholder="schedule.pdf" type="file"  class=" form-control">
                                    <br>
                                    <label for="accomodation_file_name">Accomodation pdf</label>
                                    <input id="accomodation_file_name" name="accomodation_file_name" placeholder="Accomodation.pdf" type="file"  class=" form-control">
                                    <br>
                                    <label for="tour_file_name">Post Conference Tour pdf</label>
                                    <input id="tour_file_name" name="tour_file_name" placeholder="Tour.pdf" type="file"  class=" form-control">
                                    <br>
                                    <label for="accepted_paper_list">Accepted paper list pdf</label>
                                    <input id="accepted_paper_list" name="accepted_paper_list" placeholder="accepted.pdf" type="file"  class=" form-control">
                                    <br>
                                    <input type="submit" value="Add accesories" class="form-control btn btn-primary" >
                                </section>
                            </div>
                        </form>
                    </div>
            </div>
        </div>

            <div class="col-md-6">
                <div class="card" style="height:600px;overflow:scroll;">
                        <div class="card-body wizard-content">
                                <h4 class="card-title text-center">All Scope Name(sorted by last updata) </h4>
                                <br>
                                <h6 class="card-subtitle"></h6>
        
                                <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>serial</th>
                                                    <th>logo1</th>
                                                    <th>logo2</th>
                                                    <th>Create at</th>
                                                    <th>Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <p style="display:none;">{{$i=1}}</p>
        
                                            @foreach ($all_files as $file)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td><a href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->logo1)}}">{{$file->logo1}}</a></td>
                                                    <td><a href="{{URL::asset('/iccie_all_web_file/pdf/'.$file->logo2)}}">{{$file->logo2}}</a></td>
                                                    <td>{{$file->created_at}}</td>
                                                    <td><a href="{{URL::to('/admin/delete_accessory_pdf_logo/'.$file->id)}}" style="color:red">Delete</a></td>
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