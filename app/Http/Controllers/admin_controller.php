<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admin_controller extends Controller
{

    public function serialize_to_array($s_data)
	{
		$make_array = array();

		$len = strlen($s_data);
		$index_string="";
		$data_string ="";
		for($i=0;$i<$len;$i++)
		{
			if($s_data[$i]=="=")
			{

				for($j=$i+1;$j<$len;$j++)
				{
					if($s_data[$j]=="&"){
						break;
					}
					else{
						$data_string=$data_string.$s_data[$j];
					}

				}
				$make_array[$index_string]=$data_string;
				$index_string="";
				$data_string ="";
				$i=$j;
				
			}
			else
			{
				$index_string=$index_string.$s_data[$i];
				
			}
		}

		return $make_array;
    }




    public function admin_login()
    {
        return view('admin.admin_panel.admin_login');
    }

    public function admin_login_request(Request $data)
    {
        $email = $data->userName;
        $password = $data->userPass;
        //$test_data = $email.$password;
        
        $about_admin = DB::table('iccie_admin_infos')->where('admin_name',$email)->where('admin_passward',$password)->first();
        if($about_admin)
        {
            session(['login_status'=>"success"]);
            session(['admin_name'=>$email]);
            session(['admin_login_status'=>'admin_access_granted']);
            return redirect('/admin/home');
        }
        else
        {
            session(['login_status'=>"failed"]);
            return back();
        }

       

    }
    public function admin_logout(Request $data)
    {
        $data->session()->flush();
        Artisan::call('cache:clear');
        return view('index');
    }
   
 

    public function home()
    {
        return view('admin.admin_panel.index');
    }

    public function charts()
    {
        return view('admin.admin_panel.charts');
    }
    public function widgets()
    {
        return view('admin.admin_panel.widgets');
    }
    public function tables()
    {
        return view('admin.admin_panel.tables');
    }
    public function grid_full()
    {
        return view('admin.admin_panel.grid_full');
    }
    public function form_basic()
    {
        return view('admin.admin_panel.form_basic');
    }
    public function form_wizard()
    {
        return view('admin.admin_panel.form_wizard');
    }
    public function home_page_article()
    {
        return view('admin.admin_panel.library_text_editor');
    }


    public function home_page_article_post(request $data)
    {
        $post_title = $data->post_title;
        $main_content = $data->main_content;
        $image_name="";
        if($data->hasfile('display_image'))
        {
            $image_name = $data->file('display_image')->getClientOriginalName();
            $name_upadate = $image_name;
            $data->file('display_image')->move(public_path().'/../../public_html/iccie_all_web_file/iccie_image_gallery/home_image',$image_name);
            //return ("succesfull inserted you ")

        }
        $make_array = array('post_title'=>$post_title, 'display_image'=>$image_name, 'main_content'=>$main_content,'admin_name'=>session('admin_name') );
        DB::table('home_page_articles')->insert($make_array);
        //DB::table('article_tables')->where('id',$article_id)->update(['blasting'=>'already published']);
        return view("admin.admin_panel.library_text_editor")->with('msg_status','success');


    }

    public function add_scope()
    {
        $all_scope = DB::table('scope_lists')->orderBy('id','DESC')->get();

        return view('admin.admin_panel.add_scope')->with(['all_scope'=>$all_scope]);
    }

    public function add_scope_req(request $data)
    {
        
        $scope_name = $data->scope_name;
        $cont = DB::table('scope_lists')->where('scope_name',$scope_name)->count();
        if($cont>0)
        {
            $msg = "Scope Item Already Exist";
        }
        else
        {

        $make_array = array('scope_name'=>$scope_name);

        DB::table('scope_lists')->insert($make_array);
        $msg = "New Scope Item added";
        }
        $all_scope = DB::table('scope_lists')->orderBy('id','DESC')->get();
        return view('admin.admin_panel.add_scope')->with(['msg'=>$msg,'all_scope'=>$all_scope]);
    }

    public function delet_scope($scope_id)
    {
        DB::table('scope_lists')->where('id', $scope_id)->delete();
        return back();
    }

    public function add_committee()
    {
        $all_member = DB::table('all_committee_members')->get();

        return view('admin.admin_panel.add_committee')->with('all_member',$all_member);
    }

    public function add_committee_req(request $data)
    {
        $member_name =$data->member_name;
        $member_university =$data->member_university;
        $member_department =$data->member_department;
        $member_category =$data->member_category;
        $image_name = "";
        if($data->hasfile('member_image'))
        {
            $image_name = $data->file('member_image')->getClientOriginalName();
            $data->file('member_image')->move(public_path().'/../../public_html/iccie_all_web_file/iccie_image_gallery/member_image',$image_name);
        }
        $make_array = array('member_name'=>$member_name,'member_university'=>$member_university,'member_department'=>$member_department,'member_category'=>$member_category,'member_image'=>$image_name);
        DB::table('committee_members')->insert($make_array);
        $all_member = DB::table('committee_members')->get();

        return view('admin.admin_panel.add_committee')->with('all_member',$all_member);
    }

    public function delete_commitee_member($delete_id)
    {
        DB::table('all_committee_members')->where('id',$delete_id)->delete();
        $all_member = DB::table('all_committee_members')->get();
        return back();
    }

    public function call_for_paper_get()
    {
        $call_for_paper = DB::table('call_for_papers')->orderBy('id','DESC')->get();
        return view('admin.admin_panel.call_for_paper_admin')->with('call_for_paper',$call_for_paper);

    }


    public function call_for_paper_post(request $data)
    {
        $paper_name = "";

        
        if($data->hasfile('paper_name'))
        {
            $paper_name = $data->file('paper_name')->getClientOriginalName();
            $data->file('paper_name')->move(public_path().'/../../public_html/iccie_all_web_file/call_for_paper',$paper_name);

        }
        /*      
        $make_array = array('column name'=> value)
        DB::table('TABLE NAME')->insert($make_array)
        return back();
        */
        
        $make_array=array('paper_name'=>$paper_name);
        DB::table('call_for_papers')->insert($make_array);
        return back();

    }

    
    public function delete_call_for_paper($delete_id)
    {
        DB::table('call_for_papers')->where('id',$delete_id)->delete();
        return back();
    }
    public function add_important_date()
    {
        $all_date = DB::table('important_dates')->get();
        return view('admin.admin_panel.add_important_date')->with('all_date',$all_date);
    }
    public function add_important_date_post(request $data)
    {
        $date_title = $data->date_title;
        $date = $data->date;
        $make = array('date_title'=>$date_title,'date'=>$date);
        DB::table('important_dates')->insert($make);
        $all_date = DB::table('important_dates')->get();
        return view('admin.admin_panel.add_important_date')->with(['msg'=>'success','all_date'=>$all_date]);
    }
    public function delete_date($delete_id)
    {
        DB::table('important_dates')->where('id',$delete_id)->delete();
        return back();
    }
    public function add_banner()
    {
        return view('admin.admin_panel.add_banner');
    }
    public function add_banner_title(request $data)
    {
        $banner_name = "";
        $type ="title";
        if($data->hasfile('title_banner'))
        {
            $banner_name = $data->file('title_banner')->getClientOriginalName();
            $data->file('title_banner')->move(public_path().'/../../public_html/banner_all',$banner_name);
            $make_arr = array('type'=>$type, 'banner_name'=>$banner_name);
            DB::table('banner_alls')->insert($make_arr);
            return view('admin.admin_panel.add_banner')->with('success1','ok inserted');
        }
        
        return view('admin.admin_panel.add_banner')->with('failed1','file not uploaded');
        
    }

    public function add_banner_home(request $data)
    {
        $banner_name = "";
        $type ="home";
        if($data->hasfile('home_banner'))
        {
            $banner_name = $data->file('home_banner')->getClientOriginalName();
            $data->file('home_banner')->move(public_path().'/../../public_html/banner_all',$banner_name);
            $make_arr = array('type'=>$type, 'banner_name'=>$banner_name);
            DB::table('banner_alls')->insert($make_arr);
            return view('admin.admin_panel.add_banner')->with('success2','ok inserted');
        }
        
        return view('admin.admin_panel.add_banner')->with('failed2','file not uploaded');
    }


    public function add_committee_final(request $data)
    {
        $member_name = $data->member_name;
        $member_university = $data->member_university;
        $member_department = $data->member_department;
        $member_category = $data->member_category;
        $sub_committee = $data->sub_committee;
        $member_post = $data->member_post;
        if($member_department=="" )
        {
            $member_department=="None";
        }
        if($member_category=="" )
        {
            $member_category=="None";
        }
        if($member_post=="" )
        {
            $member_post=="None";
        }
        if($sub_committee=="" )
        {
            $sub_committee=="None";
        }

        if($data->hasfile('member_image'))
        {
            $member_image = $data->file('member_image')->getClientOriginalName();
            $data->file('member_image')->move(public_path().'/../../public_html/iccie_all_web_file/iccie_image_gallery/member_image',$member_image);
            $make_array = array('member_name'=>$member_name,'member_university'=>$member_university,'member_department'=>$member_department,'member_category'=>$member_category,'member_image'=>$member_image,'sub_committee'=>$sub_committee,'member_post'=>$member_post);
            
            DB::table('all_committee_members')->insert($make_array);
            return back();
        }
        $make_array = array('member_name'=>$member_name,'member_university'=>$member_university,'member_department'=>$member_department,'member_category'=>$member_category,'member_image'=>'none','sub_committee'=>$sub_committee,'member_post'=>$member_post);
        DB::table('all_committee_members')->insert($make_array);
            
        return back();
    }




    public function admin_presentation_upload()
    {
        return view('admin.admin_panel.presentation_upload');
    }
    public function admin_presentation_upload_req(request $data)
    {
        $p_title = $data->p_title;
        $p_description = $data->p_description;
        $file_name="";
        if($data->hasfile('presentation_file'))
        {
            $file_name = $data->file('presentation_file')->getClientOriginalName();
            $data->file('presentation_file')->move(public_path().'/fsm_all_web_file/fsm_presentation',$file_name);
        }

        $make_array = array('p_title'=>$p_title, 'p_description'=>$p_description,'presentation_file'=>$file_name);
        DB::table('presentation_lists')->insert($make_array);
        return view('admin.admin_panel.presentation_upload')->with("p_msg","Ok successfully uploaded your presentation");
        
    }
    public function give_sample_report()
    {
        return view('admin.admin_panel.give_sample_report');
    }
    public function admin_drf_request()
    {
        $user_compnay=array();
        $all_client = DB::table('user_registrations')->get();
        foreach($all_client as $client)
        {
            $user_compnay[$client->user_name]=$client->company;
        }

        $all_unseen_drf=DB::table('drf_tables')->where('drf_user_mark','green')->get();
        return view('admin.admin_panel.index')->with(['all_unseen_drf'=>$all_unseen_drf,'all_client'=>$user_compnay]);

    }

    public function drf_details_request($drf_id)
    {
        $drf_details = DB::table('drf_tables')->where('id',$drf_id)->get();
        foreach($drf_details as $d)
            $final=$d->drf_data;
        $data = $final;
        $data=$data."&";
        DB::table('drf_tables')->where('id',$drf_id)->update(['drf_status'=>"seen"]);
        $drf_detailss =$this->serialize_to_array($data);

        return view('user.user_panel.drf_form')->with(['data'=>$drf_detailss]);
    }
    public function drf_hiding_request($drf_id)
    {
       DB::table('drf_tables')->where('id',$drf_id)->update(['drf_user_mark'=>'red']);

        return back();
    }
    public function send_sample_replay_drf($user_name)
    {
        return view('admin.admin_panel.give_sample_report')->with('user_name', $user_name);
    }
    public function send_sample_report(request $data)
    {
        $sample_report_from ="fsm_admin";
        $sample_report_to = $data->to_sample;
        $sampl_report_file_name ="";
        if($data->hasfile('sample_report_file'))
        {
            $sampl_report_file_name = $data->file('sample_report_file')->getClientOriginalName();
            
            $data->file('sample_report_file')->move(public_path().'/fsm_all_web_file/sample_report',$sampl_report_file_name);

        }
        $make_array =array(['sampl_report_from'=>$sample_report_from,'sampl_report_to'=>$sample_report_to,'sample_report_name'=>$sampl_report_file_name]);
        DB::table('sampl_report_tables')->insert($make_array);
        return view('admin.admin_panel.give_sample_report')->with('success_message','Your sample Report has already sent to the user <span style="color:red">"'.$sample_report_to.'"</span> ');
    }
    public function delete_drf($drf_id)
    {
        DB::table('drf_tables')->where('id', $drf_id)->delete();
        return back();
    }

    
    public function drf_test()
    {
        $data = DB::table('drf_tables')->where('id',8)->get();
        $final="";
        foreach($data as $d)
            $final=$d->drf_data;
        $data = $final;
        $data=$data."&";
        $get_array=$this->serialize_to_array($data);

        return view('user.user_panel.drf_form')->with(['data'=>$get_array]);
    }

    public function rfq_from_client()
    {
        $user_compnay=array();
        $all_client = DB::table('user_registrations')->get();
        foreach($all_client as $client)
        {
            $user_compnay[$client->user_name]=$client->company;
        }

        $all_unseen_rfq=DB::table('rfq_tables')->where('rfq_seen_unseen','unseen')->orderBy('id','DESC')->get();

        return view('admin.admin_panel.rfq_from_client')->with(['all_unseen_rfq'=>$all_unseen_rfq,'all_client'=>$user_compnay]);
    }
    public function rfq_download($rfq_id)
    {
        return back();

    }

    public function rfq_replay_admin($user_name)
    {
        return view('admin.admin_panel.rfq_replay_admin')->with('user_name',$user_name);

    }
    

    public function add_registration_cost_post(request $data){
        $reg_type =$data->Registration_Type;
        $date = $data->date;
        $before_date_cost = $data->before_date_cost;
        $after_date_cost = $data->after_date_cost;
        $make = array('registration_type'=>$reg_type, 'date'=>$date, 'before_cost'=>$before_date_cost, 'after_cost'=>$after_date_cost);
        DB::table('registration_costs')->insert($make);
        $all_reg_cost = DB::table('registration_costs')->get();
        return view('admin.admin_panel.add_registration')->with(['msg'=>'success','all_reg_data'=>$all_reg_cost]);
    }
    public function add_registration_get(){
        //$registration_cost
        //$registration_info
        $all_reg_cost = DB::table('registration_costs')->get();
        return view('admin.admin_panel.add_registration')->with('all_reg_data',$all_reg_cost);
        
    }
    
    public function delete_cost($delete_id){
        DB::table('registration_costs')->where('id',$delete_id)->delete();
        return back();
    }

    public function add_reg_instruction_get()
    {
        $instruction = DB::table('reg_instructions')->orderBy('id','DESC')->get();
        return view('admin.admin_panel.add_registration_instruction')->with('instruction',$instruction);
    }

    public function add_reg_instruction_post(request $data)
    {
        $file_name = "";
        $instruction = $data->instruction;
        if($data->hasfile('instruction_file'))
        {
            $file_name = $data->file('instruction_file')->getClientOriginalName();
            $data->file('instruction_file')->move(public_path().'/../../public_html/iccie_all_web_file/registration_instruction',$file_name);
        }
        $make_array=array('instruction'=>$instruction,'file_name'=>$file_name,'admin_name'=>session('admin_name'));
        DB::table('reg_instructions')->insert($make_array);
        return back();
    }
    
    public function registration_instruction_delete($delete_id)
    {
        DB::table('reg_instructions')->where('id',$delete_id)->delete();
        return back();
    }


    public function add_camera_submission_get(){
        $all_instruction = DB::table('camera_paper_submissions')->orderBy('id','DESC')->get();
        return view('admin.admin_panel.add_camera_submission')->with('all_instruction',$all_instruction);
    }
    public function add_camera_submission_post(request $data){
        $file_name = "";
        $instruction = $data->instruction;
        $link = $data->link;

        if($data->hasfile('instruction_file'))
        {
            $file_name = $data->file('instruction_file')->getClientOriginalName();
            $data->file('instruction_file')->move(public_path().'/../../public_html/iccie_all_web_file/pdf',$file_name);
        }
        $make_array=array('instruction'=>$instruction,'file_name'=>$file_name,'link'=>$link,'admin_name'=>session('admin_name'));
        DB::table('camera_paper_submissions')->insert($make_array);

        $all_instruction = DB::table('camera_paper_submissions')->orderBy('id','DESC')->get();
        return view('admin.admin_panel.add_camera_submission')->with(['msg'=>'success','all_instruction'=>$all_instruction]);
    }

    public function delete_camera_submission($delete_id){
        DB::table('camera_paper_submissions')->where('id',$delete_id)->delete();
        return back();
    }

    public function add_speaker_get()
    {
        $speakers_list = DB::table('speakers')->orderBy('id','DESC')->get();
        return view('admin.admin_panel.add_speaker')->with('speakers_list',$speakers_list);
    }


    public function add_speaker_post(request $data)
    {
        $speaker_name = $data->speaker_name;
        $speaker_university = $data->speaker_university;
        $speaker_category = $data->speaker_category;
        $paper_title = $data->paper_title;
        $paper_abstract = $data->paper_abstract;
        $speaker_img = " ";
        if($data->hasfile('speaker_img'))
        {
            $speaker_img = $data->file('speaker_img')->getClientOriginalName();
            $data->file('speaker_img')->move(public_path().'/../../public_html/iccie_all_web_file/iccie_image_gallery/speaker_image',$speaker_img);
        }
        $make_array=array('speaker_name'=>$speaker_name,
                          'speaker_university'=>$speaker_university,
                          'speaker_category'=>$speaker_category,
                          'paper_title'=>$paper_title,
                          'paper_abstract'=>$paper_abstract,
                          'speaker_img'=>$speaker_img
                         );
        DB::table('speakers')->insert($make_array);
        return back();
    }
    
    public function delete_speaker($delete_id){
        DB::table('speakers')->where('id',$delete_id)->delete();
        return back();
    }

    public function add_schedule_post(request $data){
        $date =$data->date;
        $details = $data->schedule_details;
        $time = $data->time;
        $venue = $data->venu;
        $make = array('date'=>$date, 'details'=>$details, 'time'=>$time, 'venue'=>$venue);

        DB::table('program_schedules')->insert($make);
        $all_schedule = DB::table('program_schedules')->get();
        return view('admin.admin_panel.add_schedule')->with(['msg'=>'success','all_schedule'=>$all_schedule]);
    }
    public function add_schedule(){
        $all_schedule = DB::table('program_schedules')->get();
        return view('admin.admin_panel.add_schedule')->with('all_schedule',$all_schedule);
    }

    public function delete_schedule($delete_id){
        DB::table('program_schedules')->where('id',$delete_id)->delete();
        return back();
    }

    public function add_contact(){
        $all_contact = DB::table('contact_infos')->get();
        return view('admin.admin_panel.add_contact')->with('all_contact',$all_contact);
    }

    public function add_contact_post(request $data){
        $faculty = $data->faculty;
        $university = $data->university;
        $uni_address = $data->uni_address;
        $contact_no = $data->contact_no;
        $email = $data->email;
        $website = $data->website;
        $make = array('faculty'=>$faculty, 'university'=>$university, 'uni_address'=>$uni_address, 'contact_no'=>$contact_no,'email'=>$email,'website'=>$website);
        DB::table('contact_infos')->insert($make);
        $all_contact = DB::table('contact_infos')->get();
        return view('admin.admin_panel.add_contact')->with(['msg'=>'success','all_contact'=>$all_contact]);
        //return view('admin.admin_panel.add_contact')->with('all_contact',$all_contact);
    }
    
    public function delete_contact($delete_id){
        DB::table('contact_infos')->where('id',$delete_id)->delete();
        return back();
    }

    public function add_accessory_pdf_logo(){
        $all_files = DB::table('accessories')->get();
        return view('admin.admin_panel.add_accessory_pdf_logo')->with('all_files',$all_files);
    }
    //==============================================================================================
    public function add_accessory_pdf_logo_post(request $data){
        $logo1_file_name = "";
        $logo2_file_name = "";
        $logo3_file_name = "";
        $accomodation_file_name = "";
        $valid_registration_list = "";
        $program_schedule="";
        $tour_file_name = "";
        $accepted_paper_list ="";
        if($data->hasfile('logo1_file_name'))
        {
            $logo1_file_name = $data->file('logo1_file_name')->getClientOriginalName();
            $data->file('logo1_file_name')->move(public_path().'/../../public_html/iccie_all_web_file/pdf',$logo1_file_name);
        }
        if($data->hasfile('logo2_file_name'))
        {
            $logo2_file_name = $data->file('logo2_file_name')->getClientOriginalName();
            $data->file('logo2_file_name')->move(public_path().'/../../public_html/iccie_all_web_file/pdf',$logo2_file_name);
        }
        if($data->hasfile('logo3_file_name'))
        {
            $logo3_file_name = $data->file('logo3_file_name')->getClientOriginalName();
            $data->file('logo3_file_name')->move(public_path().'/../../public_html/iccie_all_web_file/pdf',$logo3_file_name);
        }
        if($data->hasfile('accomodation_file_name'))
        {
            $accomodation_file_name = $data->file('accomodation_file_name')->getClientOriginalName();
            $data->file('accomodation_file_name')->move(public_path().'/../../public_html/iccie_all_web_file/pdf',$accomodation_file_name);
        }
        if($data->hasfile('tour_file_name'))
        {
            $tour_file_name = $data->file('tour_file_name')->getClientOriginalName();
            $data->file('tour_file_name')->move(public_path().'/../../public_html/iccie_all_web_file/pdf',$tour_file_name);
        }
        if($data->hasfile('valid_registration_list'))
        {
            $valid_registration_list = $data->file('valid_registration_list')->getClientOriginalName();
            $data->file('valid_registration_list')->move(public_path().'/../../public_html/iccie_all_web_file/pdf',$valid_registration_list);
        }
        if($data->hasfile('program_schedule'))
        {
            $program_schedule = $data->file('program_schedule')->getClientOriginalName();
            $data->file('program_schedule')->move(public_path().'/../../public_html/iccie_all_web_file/pdf',$program_schedule);
        }
        if($data->hasfile('accepted_paper_list'))
        {
            $accepted_paper_list = $data->file('accepted_paper_list')->getClientOriginalName();
            $data->file('accepted_paper_list')->move(public_path().'/../../public_html/iccie_all_web_file/pdf',$accepted_paper_list);
        }
        $make_array=array(['logo1'=>$logo1_file_name,
                           'logo2'=>$logo2_file_name,
                           'logo3'=>$logo3_file_name,
                           'tour_info'=>$tour_file_name,
                           'accomodation'=>$accomodation_file_name,
                           'valid_registration_list'=>$valid_registration_list,
                           'program_schedule'=>$program_schedule,
                           'accepted_paper'=>$accepted_paper_list]);
        $files = DB::table('accessories')->insert($make_array);
        $all_files = DB::table('accessories')->get();
        return view('admin.admin_panel.add_accessory_pdf_logo')->with(['msg'=>'success','all_files'=>$all_files]);
    }
    //==============================================================================================

    public function delete_accessory_pdf_logo($delete_id){
        DB::table('accessories')->where('id',$delete_id)->delete();
        return back();
    }
    
    public function add_valid_papers()
    {
        $paper_list = DB::table('valid_paper_lists')->orderBy('id','DESC')->get();
        return view('admin.admin_panel.add_valid_paper')->with('paper_list',$paper_list);
    }


    public function add_valid_papers_post(request $data)
    {
        $paper_id = $data->paper_id;
        $paper_title = $data->paper_title;
        $paper_author = "";
      
        $make_array=array('paper_id'=>$paper_id,
                          'paper_title'=>$paper_title,
                          //'corresponding_author'=>$paper_author,
                          'admin_name'=>session('admin_name')
                         );
        DB::table('valid_paper_lists')->insert($make_array);
        return back();
    }
    
    public function delete_valid_paper($delete_id){
        DB::table('valid_paper_lists')->where('id',$delete_id)->delete();
        return back();
    }

    public function verify_paper_payment(){
       // $all_files = DB::table('accessories')->get();
       $all_data =  DB::table('paper_reg_infos')
            ->select(['valid_paper_lists.paper_id','valid_paper_lists.paper_title','paper_reg_infos.author_name','paper_reg_infos.author_category','paper_reg_infos.email', 'paper_reg_infos.payment_doc','paper_reg_infos.ieee_doc','paper_reg_infos.author_verification_doc'])
            ->join('valid_paper_lists', 'paper_reg_infos.paper_id', '=', 'valid_paper_lists.paper_id')
            ->get();
        return view('admin.admin_panel.verify_payment')->with('all_data',$all_data);
    }



}




//$data->file('member_image')->move(public_path().'/../../public_html/iccie_all_web_file/iccie_image_gallery/member_image',$image_name);