@extends('layouts.master')
@section('head')
<title>Home</title>


@endsection
@section('content')

<div class="container">
<br><br>
<div class="row">
  
   <div class="col-sm-9">
 
   <form>
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn" type="button">Go</button>
      </span>
    </div>
</form>
<br>
   <div class="card" >
  
   <h3 class="card-header" >Last Articles</h3>
  <br>
  
  
  
  @foreach($a as $artical)
@include('layouts.modal_comment')
@include('layouts.modal_approve')
  <div class="card-block">

    <h4 class="card-subtitle mb-2 text-muted">{{$artical->title}}</h4>
    <br>
    @if($artical->file_name)
   

  <img style="width:50%;height:50%;" src="storage/image/{{$artical->file_name}}">
 <br>
@endif
    <p class="card-text">{{$artical->body}}</p>

    <div class="container card-subtitle mb-2 text-muted" align="right">
    Added by 
  <a href="#">{{$artical->user->login}}</a> at 
  {{$artical->created_at->toFormattedDateString()}}

</div>
  </div>


  <div class="card-block" id="{{$artical->id}}">
    
    <button type="button" class="btn btn-outline-secondary btn-sm myApp" > 
    @if ($artical->approves->count()==1 | $artical->approves->count()==0)
    
    {{$artical->approves->count()}} Approve
    
    @else
     
    {{$artical->approves->count()}} Approves
    
    @endif
    </button>
   
    <button type="button" class="btn btn-outline-secondary btn-sm btn-success btn-md myCom ">Comment</button>

  </div>

@endforeach


</div>
</div>
<hr>

<div class="col-sm-3">

  @include('layouts.sidebar')
    
      </div>
  
</div>
</div>

<br>
<br>
<br>

@endsection
<script type="text/javascript">

function submitForm(aid)
{
  url = "/comment/" + aid;
  bodyx = $('#comment_content').val();
  
  $.ajax({
      url: url,
      method: 'post',
      data: {
        'body': bodyx
      },
      success: function(result) {
        $('#comment_content').val("");
        console.log(result);

   
  $("#modal_comm").load("/comment/"+aid);

      
      },
      error: function(result) {
        console.log('error');
        console.log(result);

      },
    });

return false;

}
 
</script>