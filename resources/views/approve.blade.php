 @foreach($approve as $app)
        <div class="container">
       <a href="">{{$app->user->firstName}} {{$app->user->lastName}}</a>
          </div> 
          <br>
          @endforeach
       