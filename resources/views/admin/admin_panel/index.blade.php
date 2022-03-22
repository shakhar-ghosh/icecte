@extends('/admin/admin_panel/admin_master')

@section('page_title', 'Admin Home | ICECTE Admin')

@section('admin_index_page')
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="{{URL::to('/admin/home')}}">
                            <div class="card card-hover">
                                <div class="box bg-cyan text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                    <h6 class="text-white">Dashboard</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="{{URL::to('/admin/home/add_scope')}}">
                            <div class="card card-hover">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                                    <h6 class="text-white">Add Scope</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                     <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="{{URL::to('/admin/call_for_paper_get')}}">
                                <div class="card card-hover">
                                    <div class="box bg-danger text-center">
                                        <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                        <h6 class="text-white">Add call for paper</h6>
                                    </div>
                                </div>
                        </a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                            <a href="{{URL::to('/admin/add_important_date')}}">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="far fa-calendar-alt"></i></h1>
                                <h6 class="text-white">Add Dates</h6>
                            </div>
                        </div>
                            </a>
                    </div>

                    <div class="col-md-6 col-lg-2 col-xlg-3">
                            <a href="{{URL::to('/admin/add_registration')}}">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="far fa-calendar-alt"></i></h1>
                                <h6 class="text-white">Add Registration Cost</h6>
                            </div>
                        </div>
                            </a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                            <a href="{{URL::to('/admin/add_reg_instruction')}}">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="far fa-calendar-alt"></i></h1>
                                <h6 class="text-white">Add Registration Instruction</h6>
                            </div>
                        </div>
                            </a>
                    </div>

                    <!-- Column -->
                    <div class="col-md-6 col-lg-4 col-xlg-3">
                        <a href="{{URL::to('/admin/add_banner')}}">
                            <div class="card card-hover">
                                <div class="box bg-danger text-center">
                                    <h1 class="font-light text-white"><i class="fas fa-align-justify"></i></h1>
                                    <h6 class="text-white">Add Tittle Banner and Home Banner</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="{{URL::to('/admin/home_page_article')}}">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="far fa-edit"></i></h1>
                                <h6 class="text-white">Home page article</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                     <!-- Column -->
                
                    
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="{{URL::to('/admin/home/add_committee')}}">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="fas fa-users"></i></h1>
                                <h6 class="text-white">Add Committee Member</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="{{URL::to('/admin/add_speaker')}}">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="fas fa-users"></i></h1>
                                <h6 class="text-white">Add Speakers</h6>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="{{URL::to('/admin/add_schedule')}}">
                                <div class="card card-hover">
                                    <div class="box bg-danger text-center">
                                        <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                        <h6 class="text-white">Add Program Schedule</h6>
                                    </div>
                                </div>
                        </a>
                    </div>
                    
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="{{URL::to('/admin/add_valid_papers')}}">
                                <div class="card card-hover">
                                    <div class="box bg-danger text-center">
                                        <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                        <h6 class="text-white">Add Accepted Paper's Information</h6>
                                    </div>
                                </div>
                        </a>
                    </div>
                    
                     <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="{{URL::to('/admin/verify_paper_payment')}}">
                                <div class="card card-hover">
                                    <div class="box bg-danger text-center">
                                        <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                        <h6 class="text-white">Verify Paper's Payment</h6>
                                    </div>
                                </div>
                        </a>
                    </div>
                    
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="{{URL::to('/admin/add_camera_submission')}}">
                                <div class="card card-hover">
                                    <div class="box bg-danger text-center">
                                        <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                                        <h6 class="text-white">Add Camera Paper Submission Instruction</h6>
                                    </div>
                                </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="{{URL::to('/admin/add_contact')}}">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="far fa-edit"></i></h1>
                                <h6 class="text-white">Add Contact Information</h6>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <a href="{{URL::to('/admin/add_accessory_pdf_logo')}}">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="far fa-edit"></i></h1>
                                <h6 class="text-white">Add Accessory - Pdf and Footer logo</h6>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-lg-2 col-xlg-3">
                      <form id="example-form" action="{{URL::to('/admin/admin_logout')}}" method="post" class="m-t-40">
                            <div>
                                    <input type="submit" value="Log Out" class="form-control btn btn-primary" >
                                </section>
                            </div>
                        </form>
                    </div>

                    <!-- Column -->
                    
                    <!-- Column -->
                </div>
                

                <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-md-flex align-items-center">
                                        <div>
                                            <h4 class="card-title">Site Analysis</h4>
                                            <h5 class="card-subtitle">Overview of Latest Month</h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- column -->
                                        <div class="col-lg-12">
                                            <div class="flot-chart">
                                                <div class="flot-chart-content" id="flot-line-chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             

                <div class="row">
                    <!-- column -->
                    <div class="col-lg-6">
                    </div>
                      
                     

                    <div class="col-lg-6">
                        <!-- Card -->
                        
                        
                      
                        <!-- Tabs -->
               
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>



@endsection
