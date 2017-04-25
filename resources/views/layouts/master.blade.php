<!DOCTYPE html>
<html>
<head>
  @yield('head')
   <script type="text/javascript" src="/js/jquery/dist/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="/tether-1.3.3/dist/css/tether.css">
  <script type="text/javascript" src="/tether-1.3.3/dist/js/tether.js"></script>
   
    <link rel="stylesheet" href="/js/jquery/dist/jquery-ui.css">
<script type="text/javascript" src="/js/jquery/dist/jquery-ui.min.js"></script>
   
  <link rel="stylesheet" href="/css/bootstrap.css">
<script type="text/javascript" src="/js/bootstrap.js"></script>
<script type="text/javascript" type="text/javascript" src="/js/dropzone.js"></script>
<link rel="stylesheet" type="text/css" href="/css/dropzone.css">
 
  
</head>
<body>

<header>
@include ('layouts.header')
</header>
<section>
@yield('content')
</section>
<br>
   
<footer>
@include ('layouts.footer')

</footer>
</body>
</html>
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

}
  function addapp(id,user) {
    if (!user) {
     alert('sign in Please !');
    }
    if (user) {
    $.ajax({
      url:"/approve",
      method:"post",
      data:{
      'id':id
      },
      success:function(res){
        
        var bb = JSON.parse(res);
       
        if(bb.length>0)
        {
        var OurUsers ="";
        $(bb).each(function(index,item){
          OurUsers+=this.user.firstName+" "+this.user.lastName+ "<br>";
        });
        
        
        if(bb.length>1)
        {
          var clone = $('#'+id).find(".tooltiptext").html(OurUsers).clone();
           $('#'+id).find(".show").html(bb.length+" Approves").append(clone);
        }
       
        else {
          var clone = $('#'+id).find(".tooltiptext").html(OurUsers).clone();
          $('#'+id).find(".show").html(bb.length+" Approve").append(clone);
        }
        
        }
        else
        { 
           var clone = $('#'+id).find(".tooltiptext").text("No Approves").clone();
          $('#'+id).find(".show").html("0 Approve").append(clone);
        }
      },
      error:function(res){
        console.log('error');
        console.log(res);
      }
    });
  }
  }
$(document).ready(function(){
    $(".delar").click(function(event){
     $("#deletear").modal({show: true});
     $("#idDel").attr("value",$(event.delegateTarget).attr("attribute"))
        });
    $(".upar").click(function(){

    });
    $(".delcom").click(function(event){
     $("#deletecom").modal({show: true});
     $("#idCom").attr("value",$(event.delegateTarget).attr("attribute"))
        });
    $("a").css("cursor","pointer");

    $(".myCom").click(function(){
     var id=$(this).parent().attr('id');
      $(".formClassComm").attr("id",id);
      $("#myModal").modal({keyboard:true,show: true});
    $("#modal_comm").load("/comment/"+$(this).parent().attr('id'));
        });
      });
      
function deletar(id)
{
  
  $.ajax({
    url:"/delartical",
    method:"post",
    data:{
      'id':id
    },
    success:function(res){
      console.log(res);
      location.reload();
    },
      error:function(res){
        console.log('error');
        console.log(res);
      }
    
  });
   }
   function updateArtical(id)
   {
    $.ajax({
      url:"/upardata",
      method:"post",
      data:{
        'id':id
      },
      success:function(res){
    
        var resulat=JSON.parse(res);
        
        $("#articalModalupdate #articleTitleupdate").val(resulat.title);
        $("#articalModalupdate #articleBodyupdate").val(resulat.body);
        
        photo="<div class=\"dz-preview upimage dz-processing dz-image-preview dz-success dz-complete\" attribute=\""+resulat.id+"\" id=\""+resulat.file_name+"\">  <div class=\"dz-image\"><img width=\"100%\" height=\"100%\" data-dz-thumbnail=\"\" alt=\""+resulat.file_name+"\" src=\"/storage/image/"+resulat.file_name+"\"></div>  <div class=\"dz-details\">    <div class=\"dz-size\"><span data-dz-size=\"\"><strong>69.5</strong> KB</span></div>    <div class=\"dz-filename\"><span data-dz-name=\"\">"+resulat.file_name+"</span></div>  </div>  <div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress=\"\" style=\"width: 100%;\"></span></div>  <div class=\"dz-error-message\"><span data-dz-errormessage=\"\"></span></div>  <div class=\"dz-success-mark\">    <svg width=\"54px\" height=\"54px\" viewBox=\"0 0 54 54\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:sketch=\"http://www.bohemiancoding.com/sketch/ns\">      <title>Check</title><defs></defs><g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" sketch:type=\"MSPage\">       </g>    </svg>  </div>  <div class=\"dz-error-mark\">    <svg width=\"54px\" height=\"54px\" viewBox=\"0 0 54 54\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:sketch=\"http://www.bohemiancoding.com/sketch/ns\">      <title>Error</title>      <defs></defs>      <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\" sketch:type=\"MSPage\">        <g id=\"Check-+-Oval-2\" sketch:type=\"MSLayerGroup\" stroke=\"#747474\" stroke-opacity=\"0.198794158\" fill=\"#FFFFFF\" fill-opacity=\"0.816519475\"></g></g>    </svg>  </div><a class=\"dz-remove\" href=\"javascript:undefined;\" data-dz-remove=\"\" onclick=\"suppFile('"+resulat.file_name+"','"+resulat.id+"');\">Remove file</a></div>";
        drop="<form method=\"POST\" action=\"/article\" id=\"dropzoneup\" attribute=\""+resulat.id+"\" class=\"dropzone dropzone-file-area dz-clickable fixedDropZone\" ></form><input class=\"dz-hidden-input\" type=\"file\" name=\"file\" style=\"visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;\">";
        $('#articalModalupdate #photoupdatezone').children().remove();
$('#articalModalupdate #photoupdatezone').append(drop);
         $("articalModalupdate #dropzoneup").dropzone({
          url:"/article",
          maxFiles:"1",
          method : "post"
          });
       $('#articalModalupdate #dropzoneup').append(photo);
        $("#articalModalupdate").modal({
          show:true,
          keyboard:true
        });

      },
      error:function(res){
        console.log('error');
        console.log(res);
      }
    });
    
   }
   function suppFile(idp,id)
   {
     $.ajax({
                    url:"/photo_delete",
                    method:"post",
                    data: {
                        'delPhoto':idp
                    },
                    success:function(res)
                    {
                        
                        $('#articalModalupdate #photoupdatezone').children().remove();

   drop="<form method=\"POST\" action=\"/uploadPhoto\"  class=\"dropzone dz-clickable\" id=\"dropzoneup\" attribute=\""+id+"\"><div class=\"dz-default dz-message\"><span>Drop Photo here to upload</span></div></form><input type=\"file\" name=\"file\" class=\"dz-hidden-input\" style=\"visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;\">";
$('#articalModalupdate #photoupdatezone').append(drop);
 $("#articalModalupdate #dropzoneup").dropzone({
url:"/article",
maxFiles:"1",
method : "post"
});
},
error:function(res){
console.log('error');
console.log(res);
}
});

   }
   function updateFunction(idar)
   {
    photo=$('#articalModalupdate .upimage').attr('id');
    title=$('#articalModalupdate input[name="title"]').val();
    body=$('#articalModalupdate textarea[name="body"]').val();
  console.log(photo+title+body);
    $.ajax({
      url:"/updateartical",
      method:"post",
      data:{
        'id':idar,
        'file_name':photo,
        'title':title,
        'body':body
              },
      success:function(res){
        console.log(res);
        location.reload();
      },
      error:function(res){
        console.log('error');
        console.log(res);
      }
    });
    
   }
 
</script>
