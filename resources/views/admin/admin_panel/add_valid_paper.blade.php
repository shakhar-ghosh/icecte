                        

@extends('/admin/admin_panel/admin_master')
@section('page_title', 'Add Call for paper | ICECTE Admin')

@section('registration_instruction')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                    <div class="card-body wizard-content">
                        <h6 class="card-subtitle"></h6>
                    <form id="example-form" action="{{URL::to('/admin/add_valid_papers')}}" method="post" class="m-t-40" enctype="multipart/form-data">
                         {{ csrf_field() }}
                            <div>
                            {{ csrf_field() }}
                            {{-- which generate a html lin --}}
                                <h3>Add Accepted Paper's Informations</h3>
                                <hr>
                                <section>
                                <section>
                                    <label for="paper_id">Enter Paper ID</label>
                                    <input id="paper_id" name="paper_id" type="text" class=" required form-control">
                                    <br>
                                    <label for="paper_title">Enter Paper Title</label>
                                    <input id="paper_title" name="paper_title" type="text" class="form-control">
                                    <br>
                                    
                                    <input type="submit" value="submit" class="form-control btn btn-primary" >
                                </section>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        <div class="col-md-6">
                <div class="card" style="height:600px;overflow:scroll;">
                        <div class="card-body wizard-content">
                                <h4 class="card-title text-center">All Accepted Papers (sorted by last update) </h4>
                                <br>
                                <h6 class="card-subtitle"></h6>
        
                                <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Paper ID</th>
                                                    <th>Paper's Name</th>
                                                    <th>Added By</th>
                                                    <th>Remove</th>
                                                </tr>
                                            </thead> 
                                            <tbody>
                                            <p style="display:none;">{{$i=1}}</p>
                                            @foreach ($paper_list as $paper)
                                            <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$paper->paper_id}}</td>
                                                    <td>{{$paper->paper_title}}</td>
                        
                                                    <td>{{$paper->admin_name}}</td>
                                                    <td><a href="{{URL::to('/admin/delete_valid_paper/'.$paper->id)}}" style="color:red;">Remove</a></td>
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
        CKEDITOR.replace( 'paper_abstract' );
</script>
@endsection