@extends('layout.master')
@section('page_title','Camera Submission - ICECTE 2019')

@section('paper_submission_guideline')
<div class="fluid">
        <div id="content">
            <div class="content_item">
                <h1>Paper Submission Guideline</h1>
                <hr>
                <div id="reg_instruction" class="fluid" style="width:90%; font-family: Arial, Helvetica, sans-serif;font-weight:400">
                    <p>
                       Prospective authors are invited to submit their original unpublished research papers and recent developments in the topics related to theoretical or practical significance of Electrical, Computer, and Telecommunication areas. ICECTE will maintain the following guidelines:
                       <ol>
                           <li>All submission papers must follow the IEEE Conference format (double column, maximum 4 pages including title, abstract, keywords, contents, and references). For submission, please use the following templates; <b><a href="{{URL::asset('/iccie_all_web_file/pdf/IEEE_Conf_Template_MS Word.doc')}}">Microsoft Word</a></b> or <b><a href="{{URL::asset('/iccie_all_web_file/pdf/IEEE_Conf_Template_LaTeX.rar')}}">LaTex.</a></b> </li>
                           <li>Initial submission must not include author's name and affiliation information.</li>
                           <li>The paper should be uploaded in a single PDF format.</li>
                           <li> Authors are suggested to upload full papers through <b><a href="https://cmt3.research.microsoft.com/ICECTE2019/Submission/Index">CMT</a></b> conference management system. Please create a <b><a href="https://cmt3.research.microsoft.com/ICECTE2019/Submission/Index">CMT</a> </b>account as an author first if you do not have an account.</li>
                       </ol>      
                       <h5 align="center" style="text-decoration:underline">IEEE Policy</h5>
                       <ol type="A">
                           <li><b>PLAGIARISM</b></li>
                           <p>Plagiarism: All conference papers submitted to ICECTE 2019 for publication must record original work which has not been published previously. Any alleged cases of plagiarism will be dealt with according to the ICECTE and IEEE Policy in relation to Plagiarism, Infringement of Copyright and Infringement of Moral Rights and Submission to Multiple Publications outlets. The IEEE policy on Plagiarism is available at <b> <a href="https://www.ieee.org/publications/rights/plagiarism/plagiarism-faq.html">IEEE policy on Plagiarism.</a> </b>
                           </p>
                           <li><b>MULTIPLE SUBMISION</b></li>
                           <p>Multiple submissions: ICECTE and IEEE do not permit manuscripts included in its conference proceedings to be simultaneously under review for another conference, journal, or other forms of publication. Once a case of multiple submissions has been established, the paper(s) in question will be immediately declined for publication by the ICECTE and IEEE followed by appropriate disciplinary action. The IEEE policy on multiple submissions is available at <b><a href="http://www.ieee.org/publications_standards/publications/rights/Multi_Sub_Guidelines_Intro.html">IEEE Policy on Multiple Submission.</a> </b>
                           </p>
                           <li><b>COPYRIGHT</b></li>
                           <p>ICECTE 2019 is technically co-sponsored by IEEE Bangladesh section and IEEE Bangladesh Section Computer Society. Accepted and presented papers will be published on IEEE Xplore® (IEEE Digital Library) and IEEE will own the copyright to the conference publication. IEEE copyright form will be filled out for each paper separately (One copyright form is required for one paper). Download Copyright form: <b><a href="http://www.cuet.ac.bd/ecce/images/IEEE-copyright-form.docx">IEEE Copyright form.</a></b>
                           </p>
                       </ol>
                    </p>
                </div> 
                <!--
                @if(!$instruction->isEmpty())
                    @foreach($instruction as $instruct)
                    <div id="reg_instruction" class="fluid" style="width:90%">
                     <span style="text-align:justify;">
                     {!! $instruct->instruction !!}
                    </span>
                             @if($instruct->link)
                            <li><a href="{{$instruct->link}}">{{$instruct->link}}</a></li>
                            @endif
                            @if($instruct->file_name)
                            Download and follow the instruction given in the following file
                            <li><a href="{{URL::asset('/iccie_all_web_file/pdf/'.$instruct->file_name)}}">{{$instruct->file_name}}</a></li>
                            @endif
                    </div>        
                    @endforeach
                    @else
                <h3 style="font-size:18px">UPDATE COMING SOON</h3>
                @endif	 
                -->
            </div>
        </div>
</div>

<br>

<script>
        document.documentElement.scrollTop = document.body.scrollTop = 450;
</script>
@endsection
