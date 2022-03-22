@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Add Scope| ICCIE Admin')

@section('admin_index_page')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                    <div class="card-body wizard-content">
                        
                        <h6 class="card-subtitle"></h6>
                    <form id="example-form" action="{{URL::to('/admin/add_camera_submission')}}" method="post" class="m-t-40">
                         {{ csrf_field() }}
                            <div>
                                <h3>Add Camera Submission Instruction</h3>
                                <hr>
                                <section>
                                    <label for="instruction">Insert Submission Information:</label>
                                    <textarea required id="instruction" name="instruction" type="text" class="required form-control" row="10">
                                    </textarea>
                                    <br>
                                    <label for="link">Enter Submission Link  *</label>
                                    <input id="link" name="link" placeholder="www.example.com/submit" type="text" required class=" form-control">
                                    <br>
                                    <label for="instruction_file">Instruction File (Optional)</label>
                                    <input id="instruction_file" name="instruction_file" placeholder="Item name" type="file"  class=" form-control">
                                    <br>
                                    <input type="submit" value="Add Submission Instruction" class="form-control btn btn-primary" >
                                </section>
                            </div>
                        </form>
                    </div>
                    @if(!empty($msg))
                    <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Success!</strong> Your date has been added to home page
                          </div>
                    @endif
              
            </div>
        </div>

            <div class="col-md-6">
                <div class="card" style="height:600px;overflow:scroll;">
                        <div class="card-body wizard-content">
                                <h4 class="card-title text-center">Last Instruction</h4>
                                <br>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>serial</th>
                                                    <th>Link</th>
                                                    <th>Inserted Date</th>
                                                    <th>Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <p style="display:none;">{{$i=1}}</p>
                                            @foreach ($all_instruction as $instruction)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$instruction->link}}</td>
                                                    <td>{{$instruction->created_at}}</td>
                                                    <td><a href="{{URL::to('/admin/delete_camera_submission/'.$instruction->id)}}" style="color:orange">Delete</a></td>
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

@section('custome_js_file')
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
        CKEDITOR.replace( 'instruction' );
</script>
@endsection