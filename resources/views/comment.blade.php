
  @include('deleteComment')
 @foreach($comment as $com)
      
  <div class=" upbody{{$com->id}}">
        <div class="form-control">
        <strong>{{$com->user->login}}:</strong>
       
     @if($com->user->id==auth()->id())
   <div class="list-group" style="float:right;width:145px;height: 25px;">
 <a class="list-group-item delcom" attribute="{{$com->id}}"><small>delete comment</small></a>
  <a class="list-group-item upcom" attribute="{{$com->id}}"><small>update Comment</small></a>
  </div>

       @endif
       <br>
      <br>
        <span>{{$com->body}}</span> 
          <br>
        <div class="container" align="right">
        <small class="text-muted">
         <b> {{$com->created_at->diffForHumans()}}</b>
          </small>
        </div>
        </div> 
          <br>
          </div>
          @endforeach

      <script type="text/javascript">

      $(document).ready(function(){
         $('.upcom').click(function(){
          id=$(this).attr('attribute');
          body=$(".upbody"+id+" span").text()
 afterClick(id,body);
});
        
         });
      function afterClick(id,body){
        ad='<textarea class="form-control" id="comment_content_update" name="body" placeholder="Comment.." rows="4" cols="100" align="center">'+body+'</textarea>';
           $('.upbody'+id).children().remove();
           $('.upbody'+id).append(ad);
           
           $('#comment_content_update').keypress(function(e){
            key=e.which;
            if (key==13) {
       b=$('#comment_content_update').val();
       console.log(b);
              if (b) {
       
              $.ajax({
                   url:'/updateCom',
                  method:'post',
                  data:{
                    'id':id,
                 'body':b
                   },
        success:function(res){
       console.log(res);
        $("#modal_comm").load("/comment/"+$('.formClassComm').attr('id'));
               },
        error:function(res){
          console.log('error');
          console.log(res); }
       });

              }
            }
   });
      }
   
        
      </script>