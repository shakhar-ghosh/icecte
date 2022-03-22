@extends('layout.master')
@section('page_title',' Scope - ICECTE 2019')

@section('scope_page')

        <div class="fluid" id="scope">
            <div class="content_item">
                <h1 >Scope</h1> 
                <hr>
                <p style="margin-right:10px;font-family: Arial, Helvetica, sans-serif;">ICECTE 2019 invites papers from all areas of Electrical, Computer and Telecommunication Engineering. Topics of interest include, but are not limited to:</p>   				  
            
                <ul style="font-family: Arial, Helvetica, sans-serif;">
                    @foreach($all_scope as $scope)
                        <li>{{$scope->scope_name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>

<br>
<script>
        document.documentElement.scrollTop = document.body.scrollTop = 450;
</script>
      

@endsection
