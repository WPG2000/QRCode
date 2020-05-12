<meta charset="utf-8">

<!-- ... --> 

<style>
#loading{
	background-color: #1E3954;
	height: 100%;
	width: 100%;
	position: fixed;
	z-index: 999999999;
	margin-top: 0px;
	top: 0px;
	left:0;
}
#loading-center{
	width: 100%;
	height: 100%;
	position: relative;
}
#loading-center-absolute {
	position: absolute;
	left: 50%;
	top: 50%;
	height: 200px;
	width: 200px;
	margin-top: -100px;
	margin-left: -100px;
}
#object{
	width: 80px;
	height: 80px;
	background-color: #FFF;
	-webkit-animation: animate 1s infinite ease-in-out;
	animation: animate 1s infinite ease-in-out;
	margin-right: auto;
	margin-left: auto;
	margin-top: 60px;
}
@-webkit-keyframes animate {
  0% { -webkit-transform: perspective(160px); }
  50% { -webkit-transform: perspective(160px) rotateY(-180deg); }
  100% { -webkit-transform: perspective(160px) rotateY(-180deg) rotateX(-180deg); }
}

@keyframes animate {
  0% { 
    transform: perspective(160px) rotateX(0deg) rotateY(0deg);
    -webkit-transform: perspective(160px) rotateX(0deg) rotateY(0deg); 
  } 50% { 
    transform: perspective(160px) rotateX(-180deg) rotateY(0deg);
    -webkit-transform: perspective(160px) rotateX(-180deg) rotateY(0deg) ;
  } 100% { 
    transform: perspective(160px) rotateX(-180deg) rotateY(-180deg);
    -webkit-transform: perspective(160px) rotateX(-180deg) rotateY(-180deg);
  }
}
</style>

<!-- ........................................ --> 
<div class="pre_load_box">
<div class="plb_body">
<ul>

<!--<li class="img"></li>-->

<div id="loading">
	<div id="loading-center">
		<div id="loading-center-absolute">
		<!--<div class="plb_info">[@nome_tela_session]</div>--><!-- /plb_info-->
			<div id="object"></div>										
		</div>	
	</div> 			
</div><!-- /loading-->

</ul>
</div><!-- /plb_body -->

</div><!-- /pre_load_box-->
<!-- ........................................ --> 

<!-- ... --> 

<script>
$(document).ready(function(){

/* -- */

/* .............................................. */	
//$(".pre_load_box").hide().fadeIn(400);		
/* .............................................. */	

/* -- */		

});//end doc
</script>
