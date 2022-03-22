                        

@extends('/admin/admin_panel/admin_master')
@section('page_title', 'Add Call for paper | ICECTE Admin')

@section('registration_instruction')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                    <div class="card-body wizard-content">
                        <h6 class="card-subtitle"></h6>
                    <form id="example-form" action="{{URL::to('/admin/add_reg_instruction')}}" method="post" class="m-t-40" enctype="multipart/form-data">
                         {{ csrf_field() }}
                            <div>
                            {{ csrf_field() }}
                            {{-- which generate a html lin --}}
                                <h3>Add Registraction Instruction</h3>
                                <hr>
                                <section>
                                     <label for="instruction">Insert Registration Information:</label>
                                    <textarea required id="instruction" name="instruction" type="text" class="required form-control" row="10">
                                    </textarea>
                                    <label for="instruction_file">Instruction File (Optional)</label>
                                    <input id="instruction_file" name="instruction_file" placeholder="Item name" type="file"  class=" form-control">
                                    <br>
                                    <input type="submit" value="Add instruction" class="form-control btn btn-primary" >
                                </section>
                            </div>
                        </form>
                    </div>
            </div>
        </div>

            <div class="col-md-6">
                <div class="card" style="height:600px;overflow:scroll;">
                        <div class="card-body wizard-content">
                                <h4 class="card-title text-center">Uploaded Instruction </h4>
                                <br>
                                <h6 class="card-subtitle"></h6>
        
                                <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>serial</th>
                                                    <th>file name</th>
                                                    <th>uploaded at</th>
                                                    <th>Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <p style="display:none;">{{$i=1}}</p>
                                            @foreach ($instruction as $instruct)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                <td><a href="{{URL::asset('iccie_all_web_file/registration_instruction/'.$instruct->file_name)}}">{{$instruct->file_name}}</a></td>
                                                    <td>{{$instruct->created_at}}</td>
                                                    <td><a href="{{URL::to('/admin/registration_instruction_delete/'.$instruct->id)}}" style="color:red">Delete</a></td>
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