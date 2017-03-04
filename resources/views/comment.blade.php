 @foreach($comment as $com)
        <div class="form-control">
       <strong>{{$com->user->login}}:</strong>
          {{$com->body}}
          <br>
        <div class="container" align="right">
        <small class="text-muted">
         <b> {{$com->created_at->diffForHumans()}}</b>
          </small>
        </div>
          </div> 
          <br>
          @endforeach
       