@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Add Committee| ICCIE Admin')

@section('admin_index_page')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                    <div class="card-body wizard-content">
                        
                        <h6 class="card-subtitle"></h6>
                    <form id="example-form" action="{{URL::to('/admin/home/add_committee_final')}}" method="post" class="m-t-40" enctype="multipart/form-data">
                         {{ csrf_field() }}
                            <div>
                                <h3>Add Committee Members</h3>
                                <hr>
                                <section>
                                    <label for="userName">Member Name</label>
                                    <input id="userName" name="member_name" placeholder="pro. Dr. md. Xyz" type="text" required class=" form-control">
                                    <br>
                                    <label for="member_university">Member University</label>
                                    <input id="member_university" name="member_university" placeholder="Hirosima University" type="text" required class=" form-control">
                                    <br>
                                    <label for="member_department">Member Country</label>
                                    <input id="member_department" name="member_department" placeholder="Bangladesh" type="text" required class=" form-control">
                                    <br>
                                    <label for="mc">Member Category</label>
                                    <select onchange="rest_hide_show()" class="form-control" required name="member_category" id="mc">
                                        <option value=""></option>
                                        <option value="CHIEF PATRON">CHIEF PATRON</option>
                                        <option value="TECHNICAL PATRON">TECHNICAL PATRON</option>
                                        <option value="TECHNICAL COMMITTEE">TECHNICAL COMMITTEE</option>
                                        <option value="ADVISORY COMMITTEE">ADVISORY COMMITTEE</option>
                                        <option value="ADVISORY COMMITTEE (Local)">ADVISORY COMMITTEE (Local)</option>
                                        <option value="ORGANIZING COMMITTEE">ORGANIZING COMMITTEE</option>
                                    </select>
                                    <br>
                                    <div id="organizing_subcommittee">
                                    <label for="Sub_committee">Organizing Sub-Committee (Optional)</label>
                                    <select class="form-control"  name="sub_committee" id="Sub_committee">
                                        <option value="None">None</option>
                                        <option value="Web & Media Sub-Committee">Web & Media Sub-Committee</option>
                                        <option value="Publication Sub-Committee">Publication Sub-Committee</option>
                                        <option value="Registration Sub-Committee">Registration Sub-Committee</option>
                                        <option value="Finance Sub-Committee">Finance Sub-Committee</option>
                                        <option value="Local Arrangement Sub-Committee">Local Arrangement Sub-Committee</option>
                                    </select>
                                </div>
                                    <br>
                                    <div id="member_post_d">
                                    <label for="member_post">Member Post</label>
                                    <select class="form-control"  name="member_post" id="member_post">
                                        <option value="None">None</option>
                                        <option value="Chair">Chair</option>
                                        <option value="Co-Chair">Co-chair</option>
                                        <option value="Secretary">Secretary</option>
                                        <option value="Joint Secretary">Joint Secretary</option>
                                        <option value="Treasurer">Treasurer</option>
                                        <option value="Assistant Treasurer">Assistant Treasurer</option>
                                        <option value="Member">Member</option>
                                    </select>
                                </div>
                                    <br>
                                    <label id="member_image2">Member Image</label>
                                    <input type="file"  name="member_image" id="member_image" class="form-control">
                                    <br>
                                    <input type="submit" value="Add Committee Member" class="form-control btn btn-primary" >
                                </section>
                            </div>
                        </form>
                    </div>
            </div>
        </div>

            <div class="col-md-6">
                <div class="card" style="height:600px;overflow:scroll;">
                        <div class="card-body wizard-content">
                                <h4 class="card-title text-center">All Member Name(sorted by last updata) </h4>
                                <br>
                                <h6 class="card-subtitle"></h6>
        
                                <div class="table-responsive">
                                        <table id="zero_config" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>serial</th>
                                                    <th>Image</th>
                                                    <th>Member Name</th>
                                                    <th>Member Category</th>
                                                    <th>University</th>
                                                    <th>Remove</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <p style="display:none;">{{$i=1}}</p>
                                            @foreach ($all_member as $member)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                <td><img style="height:40px; width:40px;" src="{{URL::asset('/../../public_html/iccie_all_web_file/iccie_image_gallery/member_image/'.$member->member_image)}}"/></td>
                                                    <td>{{$member->member_name}}</td>
                                                    <td>{{$member->member_category}}</td>
                                                    <td><p style="font-size:10px;">{{$member->member_university}}</p></td>
                                                    <td><a href="{{URL::to('/admin/delete_commitee_member/'.$member->id)}}" style="color:red;">Remove</a></td>
                                                   
                                                </tr>
        
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                
                            </div>

                </div>
        </div>

    </div>

    {{-- <script>
        document.getElementById("organizing_subcommittee").style.display="none";
        document.getElementById("member_post_d").style.display="none";
        function rest_hide_show()
        {
            var indicator = document.getElementById('mc').value;
            if(indicator==="ORGANIZING COMMITTEE")
            {
            document.getElementById("organizing_subcommittee").style.display="block";
            document.getElementById("member_post_d").style.display="block";
            document.getElementById("member_image").style.display="none";
            document.getElementById("member_image2").style.display="none";
            }
            else
            {
                document.getElementById("organizing_subcommittee").style.display="none";
                document.getElementById("member_post_d").style.display="none";
                document.getElementById("member_image").style.display="block";
                document.getElementById("member_image2").style.display="block";

            }
        }

    </script> --}}

</div>

    
@endsection