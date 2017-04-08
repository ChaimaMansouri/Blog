@extends('layouts.master')
@section('content')
<br><br>
<div class="row">
<div class="col-2">
  
</div>
<div class="col-8">
<div class="container">
 <div class="card" >
  
   <h3 class="card-header" >My Articles</h3>
  <br>
  
  
  
  
  @foreach($ar as $artical)
@include('layouts.modal_comment')

  <div class="card-block">

    <h4 class="card-subtitle mb-2 text-muted">{{$artical->title}}</h4>
    <br>
    @if($artical->file_name)
   

  <img style="width:50%;height:50%;" src="storage/image/{{$artical->file_name}}">
 <br>
@endif
<br><br>
    <p class="card-text">{{$artical->body}}</p>

    <div class="container card-subtitle mb-2 text-muted" align="right">
    Added at 
  {{$artical->created_at->toFormattedDateString()}}

</div>
  </div>


  <div class="card-block" id="{{$artical->id}}">
    @if ($artical->approves->count()==0)
    <button type="button" class="btn btn-outline-secondary btn-sm btn-success btn-md" onclick="return addapp({{$artical->id}},{{auth()->id()}});">
  
   
    0  Approve
    </button>
    @elseif ($artical->approves->count()==1)
     <button type="button" class="tooltip show btn btn-outline-secondary btn-sm btn-success btn-md"  onclick="return addapp({{$artical->id}},{{auth()->id()}});">
    1 Approve
    <span class="tooltiptext "> 
    @foreach($artical->approves as $app)
     {{$app->user->firstName}} {{$app->user->lastName}}
     @endforeach
      </span>
      </button>
    
    @else
    <button type="button" class="tooltip show btn btn-outline-secondary btn-sm btn-success btn-md" onclick="return addapp({{$artical->id}},{{auth()->id()}});">
    {{$artical->approves->count()}} Approves
    <span class="tooltiptext"> 
    @foreach($artical->approves as $app)
     {{$app->user->firstName}} {{$app->user->lastName}}
     <br>
     @endforeach
      </span>
   </button>
    @endif
      
    <button type="button" class="btn btn-outline-secondary btn-sm btn-success btn-md myCom ">Comment</button>

  </div>

@endforeach


</div>
</div>
<br><br><br>

</div>
<div class="col-2">
  
</div>
</div>

@endsection