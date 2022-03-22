@extends('/admin/admin_panel/admin_master')
@section('page_title', 'Add Call for paper | ICECTE Admin')
@section('admin_index_page')
<div class="container-fluid">
    <div class="row">
        
            <div >
                <div  style="height:600px;overflow:scroll;">
                        <div class="card-body wizard-content">
                                <h4 class="card-title text-center">All Informations (sorted by last updata) </h4>
                                <br>
                                <h6 class="card-subtitle"></h6>
        
                                <div class="fluid" style="width:950px">
                                    <table id="zero_config" class="table table-striped table-bordered" cellspacing="5">
                                            <thead>
                                                <tr>
                                                    <th style="min-width:20px">Paper_id</th>
                                                    <th style="min-width:20px">Paper Name</th>
                                                    <th style="min-width:20px">Author's Name</th>
                                                    <th style="min-width:20px">Category</th>
                                                    <th style="min-width:20px">Payment File</th>
                                                    <th style="min-width:20px">IEEE file</th>
                                                    <th style="min-width:20px">Student's file</th>
                                                    
                                                    <th style="min-width:20px">Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <p style="display:none;">{{$i=1}}</p>
                                            @foreach ($all_data as $data)
                                                <tr>
                                                    <td style="min-width:20px">{{$data->paper_id}}</td>
                                                    <td style="min-width:20px">{{$data->paper_title}}</td>
                                                    <td style="min-width:20px">{{$data->author_name}}</td>
                                                    
                                                    
                                                    <td style="min-width:20px">{{$data->author_category}}</td>
                                                 
                                                    <td style="min-width:20px"><a href="{{URL::asset('iccie_all_web_file/Verification_documents/'.$data->paper_id.'/payment_doc/'.$data->payment_doc)}}">{{$data->payment_doc}}</a></td>
                                                    <td style="min-width:20px"><a href="{{URL::asset('iccie_all_web_file/Verification_documents/'.$data->paper_id.'/ieee/'.$data->ieee_doc)}}">{{$data->ieee_doc}}</a></td>
                                                    <td style="min-width:20px"><a href="{{URL::asset('iccie_all_web_file/Verification_documents/'.$data->paper_id.'/student/'.$data->author_verification_doc)}}">{{$data->author_verification_doc}}</a></td>
                                                    <td style="min-width:20px">{{$data->email}}</td>
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