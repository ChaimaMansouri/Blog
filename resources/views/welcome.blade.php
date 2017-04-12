@extends('layouts.master')
@section('head')
<title>Home</title>


@endsection
@section('content')

<div class="container">
<br><br>
<div class="row">
  
   <div class="col-sm-9">
 <br><br>
<br>
   <div class="card" >
  
   <h3 class="card-header" >Last Articals</h3>
  <br>
  
  
  
  @foreach($a as $artical)
@include('layouts.modal_comment')

  <div class="card-block">

    <h4 class="card-subtitle mb-2 text-muted">{{$artical->title}}</h4>
    <br>
    @if($artical->file_name)
   

  <img style="width:50%;height:50%;" src="/storage/image/{{$artical->file_name}}">
 <br>
@endif
<br><br>
    <p class="card-text">{{$artical->body}}</p>

    <div class="container card-subtitle mb-2 text-muted" align="right">
    Added by 
  <a href="/user/{{$artical->user->id}}">{{$artical->user->login}}</a> at 
  {{$artical->created_at->toFormattedDateString()}}

</div>
  </div>


  <div class="card-block" id="{{$artical->id}}">
  @if(auth()->id()==null)
  
  <?php $user = 0; ?>
  @else
  <?php $user=auth()->id(); ?>

  @endif
    @if ($artical->approves->count()==0)
    <button type="button" class=" tooltip show btn btn-outline-secondary btn-sm btn-success btn-md" onclick="return addapp({{$artical->id}},{{$user}});">  
    0  Approve
     <span class="tooltiptext" style="width:200px" > 
    No Approves
      </span>
    </button>
    @elseif ($artical->approves->count()==1)
     <button type="button" class="tooltip show btn btn-outline-secondary btn-sm btn-success btn-md"  onclick="return addapp({{$artical->id}},{{$user}});">
    1 Approve
    <span class="tooltiptext" style="width:200px" > 
    @foreach($artical->approves as $app)
     {{$app->user->firstName}} {{$app->user->lastName}}
     @endforeach
      </span>
      </button>
    
    @else
    <button type="button" class="tooltip show btn btn-outline-secondary btn-sm btn-success btn-md" onclick="return addapp({{$artical->id}},{{$user}});">
    {{$artical->approves->count()}} Approves
    <span class="tooltiptext" style="width:200px"> 
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
