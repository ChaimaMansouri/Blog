@extends('layouts.master')
@section('content')

<div class="container">
<br><br>
<div class="row">
  
   <div class="col-sm-9">
   <div class="card" >
  
   <h3 class="card-header" >Last Articles</h3>
  <br>
  
  
  @foreach($a as $artical)
@include('layouts.modal_comment')
@include('layouts.modal_approve')
  <div class="card-block">
    <h4 class="card-subtitle mb-2 text-muted">{{$artical->title}}</h4>

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
   
    <button type="button" class="btn btn-outline-secondary btn-sm btn-success btn-md myCom">Comment</button>

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