<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class iccie_maincontroller extends Controller
{
    public function index()
    {
        $home_article =DB::table('home_page_articles')->orderBy('id', 'DESC')->first();
        $all_date = DB::table('important_dates')->get();
        $home_banner = DB::table('banner_alls')->where('type','home')->orderBy('id','DESC')->first();
        $title_banner = DB::table('banner_alls')->where('type','title')->orderBy('id','DESC')->first();
        $key_note_speaker = DB::table('speakers')->where('speaker_category','Keynote')->orderBy('id','ASC')->get();
        $contact_info = DB::table('contact_infos')->get();
        $file_link = DB::table('accessories')->orderBy('id','DESC')->get();
        session(['banner_home'=>$home_banner->banner_name, 
                'banner_title'=>$title_banner->banner_name, 
                'all_dates'=>$all_date,
                'contact_info'=>$contact_info,
                'file_link'=>$file_link
                ]);
        return view('index')->with(['home_article'=>$home_article,
                                    'key_note_speaker'=>$key_note_speaker
                                    ]);
    }

    public function master()
    {
        return view('layout.master');
    }

    public function icecte_scope()
    {
        $all_scope = DB::table('scope_lists')->get();
        return view('scope')->with('all_scope',$all_scope);
    }

    public function committee_member()
    {
        $chief_member = DB::table('all_committee_members')->where('member_category','CHIEF PATRON')->orderBy('id','DESC')->first();
        $technical_patron = DB::table('all_committee_members')->where('member_category','TECHNICAL PATRON')->orderBy('id','DESC')->get();
        
        $technical_committee = DB::table('all_committee_members')->where('member_category','TECHNICAL COMMITTEE')->orderBy('id','DESC')->get();
        $technical_member = DB::table('all_committee_members')->where('member_category','TECHNICAL COMMITTEE')->orderBy('id','DESC')->where('member_post','Member')->get();
        $technical_chair = DB::table('all_committee_members')->where('member_category','TECHNICAL COMMITTEE')->orderBy('id','DESC')->where('member_post','Chair')->get();
        $technical_co_chair = DB::table('all_committee_members')->where('member_category','TECHNICAL COMMITTEE')->orderBy('id','DESC')->where('member_post','Co-Chair')->get();
        $technical_secretary = DB::table('all_committee_members')->where('member_category','TECHNICAL COMMITTEE')->orderBy('id','DESC')->where('member_post','Secretary')->get();
        $technical_joint_secretary = DB::table('all_committee_members')->where('member_category','TECHNICAL COMMITTEE')->orderBy('id','DESC')->where('member_post','Joint Secretary')->get();
        
       

        $advisory_committee = DB::table('all_committee_members')->where('member_category','ADVISORY COMMITTEE')->orderBy('id','ASC')->get();
        $advisory_committee_local =  DB::table('all_committee_members')->where('member_category','ADVISORY COMMITTEE (Local)')->orderBy('id','ASC')->get();
        $advisory_chair = DB::table('all_committee_members')->where('member_category','ADVISORY COMMITTEE')->orderBy('id','DESC')->where('member_post','Chair')->get();
        $advisory_co_chair = DB::table('all_committee_members')->where('member_category','ADVISORY COMMITTEE')->orderBy('id','DESC')->where('member_post','Co-Chair')->get();
        $advisory_secretary = DB::table('all_committee_members')->where('member_category','ADVISORY COMMITTEE')->orderBy('id','DESC')->where('member_post','Secretary')->get();
        $advisory_joint_secretary = DB::table('all_committee_members')->where('member_category','ADVISORY COMMITTEE')->orderBy('id','DESC')->where('member_post','Joint Secretary')->get();
        $advisory_member = DB::table('all_committee_members')->where('member_category','ADVISORY COMMITTEE')->orderBy('id','DESC')->where('member_post','Member')->get();
        
        $organizing_committee = DB::table('all_committee_members')->where('member_category','ORGANIZING COMMITTEE')->orderBy('id','DESC')->get();
        $organizing_chair = DB::table('all_committee_members')->where('member_category','ORGANIZING COMMITTEE')->orderBy('id','DESC')->where('member_post','Chair')->where('sub_committee','None')->get();
        $organizing_co_chair = DB::table('all_committee_members')->where('member_category','ORGANIZING COMMITTEE')->orderBy('id','DESC')->where('member_post','Co-Chair')->where('sub_committee','None')->get();
        $organizing_secretary = DB::table('all_committee_members')->where('member_category','ORGANIZING COMMITTEE')->orderBy('id','DESC')->where('member_post','Secretary')->where('sub_committee','None')->get();
        $organizing_joint_secretary = DB::table('all_committee_members')->where('member_category','ORGANIZING COMMITTEE')->orderBy('id','DESC')->where('member_post','Joint Secretary')->get();
        $organizing_treasurer = DB::table('all_committee_members')->where('member_category','ORGANIZING COMMITTEE')->orderBy('id','DESC')->where('member_post','Treasurer')->get();
        $organizing_assist_treasurer = DB::table('all_committee_members')->where('member_category','ORGANIZING COMMITTEE')->orderBy('id','DESC')->where('member_post','Assistant Treasurer')->get();


        $wm_sub_committee = DB::table('all_committee_members')->where('sub_committee','Web & Media Sub-Committee')->orderBy('id','DESC')->get();
        $pub_sub_committee = DB::table('all_committee_members')->where('sub_committee','Publication Sub-Committee')->orderBy('id','DESC')->get();
        $registration_sub_committee = DB::table('all_committee_members')->where('sub_committee','Registration Sub-Committee')->orderBy('id','DESC')->get();
        $finance_sub_committee = DB::table('all_committee_members')->where('sub_committee','Finance Sub-Committee')->orderBy('id','DESC')->get();
        $local_sub_committee = DB::table('all_committee_members')->where('sub_committee','Local Arrangement Sub-Committee')->orderBy('id','DESC')->get();


        return view('committee_member')->with([
                                               'chief'=>$chief_member, 
                                               'technical_patron'=>$technical_patron,
                                               
                                               'technical_committee'=>$technical_committee,
                                               'technical_member'=>$technical_member,
                                               'technical_chair'=>$technical_chair,
                                              'technical_co_chair'=>$technical_co_chair,
                                              'technical_secretary'=>$technical_secretary,
                                              'technical_joint_secretary'=>$technical_joint_secretary,
                                              
                                               

                                              'organizing_committee'=>$organizing_committee,
                                               'organizing_chair'=>$organizing_chair,
                                               'organizing_co_chair'=>$organizing_co_chair,
                                               'organizing_secretary'=>$organizing_secretary,
                                               'organizing_joint_secretary'=>$organizing_joint_secretary,
                                               'organizing_treasurer'=>$organizing_treasurer,
                                               'organizing_assist_treasurer'=>$organizing_assist_treasurer,

                                               'advisory_committee'=>$advisory_committee,
                                               'advisory_committee_local' => $advisory_committee_local,
                                               'advisory_chair'=>$advisory_chair,
                                               'advisory_co_chair'=>$advisory_co_chair,
                                               'advisory_secretary'=>$advisory_secretary,
                                               'advisory_joint_secretary'=>$advisory_joint_secretary,
                                               'advisory_member'=>$advisory_member,
                                               

                                               'wm_sub_committee'=>$wm_sub_committee,
                                               'pub_sub_committee'=>$pub_sub_committee,
                                               'registration_sub_committee'=>$registration_sub_committee,
                                               'finance_sub_committee'=>$finance_sub_committee, 
                                               'local_sub_committee'=>$local_sub_committee
                                               ]);
    }

    

    public function call_for_paper()
    {
        $call_for_paper = DB::table('call_for_papers')->orderBy('id','DESC')->get();

        return view('call_for_paper')->with('call_for_paper',$call_for_paper);
    }


    public function paper_submission(){
        $instruction = DB::table('camera_paper_submissions')->orderBy('id','DESC')->get();
        return view('paper_submission')->with(['instruction'=>$instruction]);
    }

    public function camera_paper_submission(){
      return view('camera_paper_submission');
    }
    
    public function speakers(){
        return view('speakers');
    }

    public function registration(){
        $cost_data = DB::table('registration_costs')->get();
        $all_dates = DB::table('registration_costs')->select('date')->groupBy('date')->get();
        $msg = "";
        $flag = "true";
        $instruction = DB::table('reg_instructions')->orderBy('id','DESC')->get();
        return view('registration')->with(['all_dates'=>$all_dates, 'cost_data'=>$cost_data, 'instruction'=>$instruction, 'msg'=>$msg,'flag'=>$flag]);
     }


     public function camera_ready_paper(){
        $call_for_paper = DB::table('call_for_papers')->orderBy('id','DESC')->get();
        return view('camera_submission')->with('call_for_paper',$call_for_paper);
    }

    public function proceedings(){
        return view('proceedings');
    }
    
    public function accepted_Paper_list(){
        return view('accepted_Paper_list');
    }

    public function post_Conference_tour(){
        return view('post_Conference_tour');
    }
    public function accomodation(){
        return view('accomodation');
    }
    public function program_schedule(){
        return view('program_schedule');
    }

    public function speakers_get(){
        $key_note_speaker = DB::table('speakers')->where('speaker_category','Keynote')->orderBy('id','ASC')->get();
        $invited_speaker = DB::table('speakers')->where('speaker_category','Invited')->orderBy('id','ASC')->get();
        $speaker = DB::table('speakers')->orderBy('id','DESC')->get();
        return view('speakers')->with(['speaker'=>$speaker,
                                       'key_note_speaker'=>$key_note_speaker,
                                       'invited_speaker'=>$invited_speaker,
                                     ]);
        
    }

    public function program_schedule_get(){
        $all_schedule = DB::table('program_schedules')->get();
        $all_dates = DB::table('program_schedules')->select('date')->groupBy('date')->get();
        $file_link = DB::table('accessories')->orderBy('id','DESC')->get();
        return view('program_schedule')->with(['all_schedule'=>$all_schedule,
                                                'all_dates'=>$all_dates,
                                                'file_link'=>$file_link
                                                ]);
    }

//===============================================================================
     public function add_registration_infos_post(request $data){
        $tag_name0 = "payment_doc";
        $tag_name1 = "author_doc";
        $tag_name2 = "ieee_doc";

        $rules0 =  [$tag_name0 => "required|mimes:pdf,jpg,jpeg,png"];
        $validator0 = Validator::make($data->all(),$rules0);

        $rules1 =  [$tag_name1 => "required|mimes:pdf,jpg,jpeg,png"];
        $validator1 = Validator::make($data->all(),$rules1);

        $rules2 =  [$tag_name2 => "required|mimes:pdf,jpg,jpeg,png"];
        $validator2 = Validator::make($data->all(),$rules2);

         $author_category = $data->author_category;
         $author_name = $data->author_name;
         $paper_id = (int)$data->paper_id;
         $email = $data->email;
         $payment_doc = "";
         $ieee_doc = "";
         $author_doc = "";
         $msg = "";
         $flag = "false";
         $file_flag = 'false';
         $main_category = 'payment_doc';
         $category = $author_category;
         $sub_category = $author_category;
         $tag_name1 = 'author_doc';
         $tag_name2 = 'ieee_doc';


         if($category=='student' OR $category=='student_ieee'){
            $category = "student";
         }
         if($sub_category =='foreign_ieee' OR $sub_category =='local_ieee' OR $sub_category =='student_ieee'){
            $sub_category = 'ieee';
         }

         if(!$data->hasfile($tag_name0) OR  $validator0->fails()){
            $msg = "Please Upload Payment Document in PDF / JPG/ JPEG/ PNG format";
         }else{
                    //=============================================================
                    if($category=='student'){
                        if(!$data->hasfile($tag_name1) OR  $validator1->fails()){
                            $msg = "Please Upload Student Verification Document in PDF / JPG/ JPEG/ PNG format";
                        }
                        else{
                            if($sub_category == 'ieee'){
                                if(!$data->hasfile($tag_name2) OR  $validator2->fails()){
                                    $msg = "Please Upload IEEE Verification Document in PDF / JPG/ JPEG/ PNG format";
                                }else{
                                     //--------------------------------------
                                        $table_name1 = 'valid_paper_lists';
                                        if($this->check_entry($paper_id,$table_name1)){
                                                $table_name2 = 'paper_reg_infos';
                                                if($this->check_entry($paper_id,$table_name2)){    
                                                $msg = "Paper Already Registered";
                                                $flag = "false";
                                            }
                                            else{
                                                $payment_doc = $this->file_move($data,$tag_name0,$paper_id,$main_category);
                                                $author_doc = $this->file_move($data,$tag_name1,$paper_id,$category);
                                                $ieee_doc = $this->file_move($data,$tag_name2,$paper_id,$sub_category);
                                                $this->reg_data_insertion($author_name,$author_category,$paper_id,$email,$payment_doc,$ieee_doc,$author_doc);
                                                $msg = "Successfully Submitted";
                                                $flag = "true"; 
                                            }  
                                        }
                                        else{
                                            $msg = "Incorrect or Invalid Paper ID";
                                        }
                                    //--------------------------------------
                                }
                            }
                            else{
                                     //--------------------------------------
                                     $table_name1 = 'valid_paper_lists';
                                     if($this->check_entry($paper_id,$table_name1)){
                                         $table_name2 = 'paper_reg_infos';
                                         if($this->check_entry($paper_id,$table_name2)){    
                                            $msg = "Paper Already Registered";
                                            $flag = "false";
                                         }
                                         else{
                                            $payment_doc = $this->file_move($data,$tag_name0,$paper_id,$main_category);
                                            $author_doc = $this->file_move($data,$tag_name1,$paper_id,$category);
                                            $this->reg_data_insertion($author_name,$author_category,$paper_id,$email,$payment_doc,$ieee_doc,$author_doc);
                                            $msg = "Successfully Submitted";
                                            $flag = "true"; 
                                         }  
                                     }
                                     else{
                                         $msg = "Incorrect or Invalid Paper ID";
                                     }
                                 //--------------------------------------
                            }                     
                        }
                    }else{
                        if($sub_category == 'ieee'){
                            if(!$data->hasfile($tag_name2) OR  $validator2->fails()){
                                $msg = "Please Upload IEEE Verification Document in PDF / JPG/ JPEG/ PNG format";
                            }else{
                                 //--------------------------------------
                                    $table_name1 = 'valid_paper_lists';
                                    if($this->check_entry($paper_id,$table_name1)){
                                        $table_name2 = 'paper_reg_infos';
                                        if($this->check_entry($paper_id,$table_name2)){    
                                            $msg = "Paper Already Registered";
                                            $flag = "false";
                                        }
                                        else{
                                            $payment_doc = $this->file_move($data,$tag_name0,$paper_id,$main_category);
                                            $ieee_doc = $this->file_move($data,$tag_name2,$paper_id,$sub_category);
                                            $this->reg_data_insertion($author_name,$author_category,$paper_id,$email,$payment_doc,$ieee_doc,$author_doc);
                                            $msg = "Successfully Submitted";
                                            $flag = "true"; 
                                        }  
                                    }
                                    else{
                                        $msg = "Incorrect or Invalid Paper ID";
                                    }
                                //--------------------------------------
                            }
                        }
                        else{
                                 //--------------------------------------
                                 $table_name1 = 'valid_paper_lists';
                                 if($this->check_entry($paper_id,$table_name1)){
                                     $table_name2 = 'paper_reg_infos';
                                     if($this->check_entry($paper_id,$table_name2)){    
                                         $msg = "Paper Already Registered";
                                         $flag = "false";
                                     }
                                     else{
                                         $payment_doc = $this->file_move($data,$tag_name0,$paper_id,$main_category);
                                         $this->reg_data_insertion($author_name,$author_category,$paper_id,$email,$payment_doc,$ieee_doc,$author_doc);
                                         $msg = "Successfully Submitted";
                                         $flag = "true"; 
                                     }  
                                 }
                                 else{
                                     $msg = "Incorrect or Invalid Paper ID";
                                 }
                             //--------------------------------------
                        }
                    }
                    //=============================================================
         }
         $cost_data = DB::table('registration_costs')->get();
         $all_dates = DB::table('registration_costs')->select('date')->groupBy('date')->get();
         $instruction = DB::table('reg_instructions')->orderBy('id','DESC')->get();
         return view('registration')->with(['all_dates'=>$all_dates, 'cost_data'=>$cost_data, 'instruction'=>$instruction, 'msg'=>$msg,'flag'=>$flag]);
        }

//===============================================================================
       
    

//===============================================================================
    public function file_move($data,$tag_name,$paper_id,$category){
        $doc = $data->file($tag_name)->getClientOriginalName();
        $path = public_path().'/../../public_html/iccie_all_web_file/Verification_documents/'.$paper_id.'/'.$category;
        mkdir($path, 0755, true);
        $data->file($tag_name)->move($path,$doc);
        return $doc;
    }

    public function reg_data_insertion($author_name,$author_category,$paper_id,$email,$payment_doc,$ieee_doc,$author_doc){
        $make = array('author_name'=>$author_name,
                  'author_category'=>$author_category,
                  'paper_id'=>$paper_id, 
                  'email'=>$email,
                  'payment_doc'=>$payment_doc,
                  'ieee_doc'=>$ieee_doc , 
                  'author_verification_doc'=>$author_doc);
        DB::table('paper_reg_infos')->insert($make);
    }
    public function check_entry($paper_id,$table_name){
        $check_paper=DB::table($table_name)->where('paper_id',$paper_id)->get();
                if(count($check_paper)>0){
                    return true;
                }else{
                    return false;
                }
    }
//==============================================================================




}
