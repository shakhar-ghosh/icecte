                        

@extends('/admin/admin_panel/admin_master')
@section('page_title', 'Add Call for paper | ICECTE Admin')

@section('registration_instruction')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                    <div class="card-body wizard-content">
                        <h6 class="card-subtitle"></h6>
                    <form id="example-form" action="{{URL::to('/admin/add_speaker')}}" method="post" class="m-t-40" enctype="multipart/form-data">
                         {{ csrf_field() }}
                            <div>
                            {{ csrf_field() }}
                            {{-- which generate a html lin --}}
                                <h3>Add Registraction Instruction</h3>
                                <hr>
                                <section>
                                <section>
                                    <label>Insert Information of Speaker:</label>
                                   <hr>
                                    <label for="speaker_category">Speaker Category</label>
                                    <select onchange="rest_hide_show()" class="form-control"  name="speaker_category" id="speaker_category" required>
                                        <option value=""></option>
                                        <option value="Keynote">Keynote Speaker</option>
                                        <option value="Invited">Invited</option>
                                    </select>

                                    <label for="speaker_name">Name</label>
                                    <input id="speaker_name" name="speaker_name" type="text" class="required form-control">

                                    <label for="speaker_university">University (Optional)</label>
                                    <input id="speaker_university" name="speaker_university" type="text" class="form-control">

                                    <label for="paper_title">Title</label>
                                    <input id="paper_title" name="paper_title" type="text" class="required form-control">
                                    
                                    <label for="paper_abstract">Abstract</label>
                                    <textarea required id="paper_abstract" name="paper_abstract" type="text" class="form-control">
                                    </textarea>
                                    <label for="speaker_img">Select Speaker's Image</label>
                                    <input required onchange="readURL(this);" id="speaker_img"  name="speaker_img" type="file" class="form-control">
                                    <br>
                                    <input type="submit" value="Add speaker" class="form-control btn btn-primary" >
                                </section>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        <div class="col-md-6">
                <div class="card" style="height:600px;overflow:scroll;">
                        <div class="card-body wizard-content">
                                <h4 class="card-title text-center">All Speakers (sorted by last update) </h4>
                                <br>
                                <h6 class="card-subtitle"></h6>
        
                                <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Image</th>
                                                    <th>Speaker's Name</th>
                                                    <th>Category</th>
                                                    <th>Remove</th>
                                                </tr>
                                            </thead> 
                                            <tbody>
                                            <p style="display:none;">{{$i=1}}</p>
                                            @foreach ($speakers_list as $speaker)
                                            <tr>
                                                    <td>{{$i++}}</td>
                                                    <td><img style="height:40px; width:40px;" src="{{URL::asset('/../../public_html/iccie_all_web_file/iccie_image_gallery/speaker_image/'.$speaker->speaker_img)}}"/></td>
                                                    <td>{{$speaker->speaker_name}}</td>
                                                    <td>{{$speaker->speaker_category}}</td>
                                                    <td><a href="{{URL::to('/admin/delete_speaker/'.$speaker->id)}}" style="color:red;">Remove</a></td>
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