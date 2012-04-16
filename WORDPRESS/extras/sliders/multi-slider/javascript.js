jQuery(document).ready(function($){

	//slider behavior
	var currentGroup;
	$(".port-slider").each(function(){
		var $this = $(this);
		var currentID = $this.attr('id');
		console.log('id: '+currentID);
		var prevButton = "#" + currentID + "-prev";
		console.log('prev: '+ prevButton);
		var nextButton = "#" + currentID + "-next";
		console.log('next: '+ nextButton);
		$("#"+currentID).cycle({
		prev: prevButton,
		next: nextButton
			
		});
		$("#"+currentID).cycle('pause');
		
	});
	
	//popup behavior
	$("#portfolio .square").click(function(){
		var squareID = $(this).attr('id');
		if(squareID == undefined || squareID == '' ){
		}
		else{
		console.log("Defined or not: " + squareID);
		$("#portfolio-popup").fadeIn();	
		$("#port-inner").fadeIn();
		$("#port-exit").fadeIn();
		currentGroup = "#" + squareID + "-pop";
		$("#" + squareID + "-pop").siblings().hide();
		$("#" + squareID + "-pop").show();
		$("#"+ squareID + "-pop .port-slider").cycle('resume');
		}
		
	});
	
	//exit popup
	$("#portfolio-popup").click(function(){
		$(this).hide();
		$(".port-group").hide();
		$("#port-inner").hide();
		$("#port-exit").hide();
		$(".port-slider", currentGroup).cycle('pause');

		
	});
	
	$("#port-exit").click(function(){
		$(this).hide();
		$(".port-group").hide();
		$("#port-inner").hide();
		$("#portfolio-popup").hide();
		$(".port-slider", currentGroup).cycle('pause');
	});
	
	
	//switch sliders behavior
	$(".port-side").each(function(){
		$("ul li a", this).click(function(){
			var idtouse = $(this).text();
			if(idtouse === "Exception!"){
			var idtouse = "except";
			}
			var slideToGo = "#" + idtouse + "-pop"; 
			$(".port-slider", currentGroup).cycle('pause');
			$(slideToGo).siblings().hide();
				$(slideToGo).fadeIn();	
			$(".port-slider", slideToGo).cycle('resume');
			currentGroup = slideToGo;
			
		});
	});
});