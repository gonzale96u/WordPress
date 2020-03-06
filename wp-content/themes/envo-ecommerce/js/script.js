var changepic = function() {
	var nbclick=0;
		jQuery('#button').click(function(){		
				if (nbclick < 3){
					document.getElementById('citation1').style.display="none";
					nbclick+=1;
				}
				else{
					document.getElementById('citation1').style.display="visible";
					nbclick = 0;
				}
			});
}
