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
 
</script>
