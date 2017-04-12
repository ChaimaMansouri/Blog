
  <?php echo $__env->make('deleteComment', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $com): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
  <div class=" upbody<?php echo e($com->id); ?>">
        <div class="form-control">
        <strong><?php echo e($com->user->login); ?>:</strong>
       
     <?php if($com->user->id==auth()->id()): ?>
   <div class="list-group" style="float:right;width:145px;height: 25px;">
 <a class="list-group-item delcom" attribute="<?php echo e($com->id); ?>"><small>delete comment</small></a>
  <a class="list-group-item upcom" attribute="<?php echo e($com->id); ?>"><small>update Comment</small></a>
  </div>

       <?php endif; ?>
       <br>
      <br>
        <span><?php echo e($com->body); ?></span> 
          <br>
        <div class="container" align="right">
        <small class="text-muted">
         <b> <?php echo e($com->created_at->diffForHumans()); ?></b>
          </small>
        </div>
        </div> 
          <br>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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