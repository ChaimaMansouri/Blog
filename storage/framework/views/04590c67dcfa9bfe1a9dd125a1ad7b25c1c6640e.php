
			<div id="uploads"></div>
			<!-- <input type="file" name="file"> -->
		
          <div class="imageorvideo" id="dropzone" name="file"> 
          
           <p> Drop image here </p>
         </div>
          
          
<script type="text/javascript">

(function()
{
	var dropzone=document.getElementById('dropzone');
	
		dropzone.ondrop=function(e){
		e.preventDefault();
		this.className='dropzone';
		var file=e.dataTransfer.files[0].name;
}
	dropzone.ondragover=function(){
		this.className='imageorvideo dragover';
		return false;
	};
	dropzone.ondragleave=function(){
		this.className='imageorvideo';
		return false;
	};


	}());
function uploadFile()
{
	console.log(file);
		url="/article";
		$.ajax({
			url:url,
			method:'post',
			data :{
				'file':file,
			},
			success: function(result) {
        console.log(result);
      
      },
      error: function(result) {
        console.log('error');
        console.log(result);

      },
		});	
}
</script>