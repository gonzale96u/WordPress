$(document).ready(function(){
	
var onclick = 0;
	
	  $("#move").click(function(){		
	  
		if (onclick < 3){
	$("#move").animate({left:"-=30px"},500);
		onclick+=1;
		}
		else{
			$("#move").animate({left:"0px"},500);
			onclick = 0;
		}
	
	});
	
});