(function($){
	
	// this is the debug version
	/*
	* @page index Awesome Slide
	* @tag home
	* ### Awesome Slider
	* 
	* Awesome slider creates a slider that has several moving parts (an image and a caption) both of which are separately animated
	* @param (String) container
	*/
	$.fn.awesomeSlide = function(){
		var containerHolder = $(this);
		console.log("Container Holder: " + containerHolder);
		var objectsContained = $('> div', this).length;
		console.log(" Objects Contained: " + objectsContained);
		
		// set parent's height and width
		var sliderWidth = $("div:first-child", this).outerWidth();
		var sliderHeight = $("div:first-child", this).height();
		containerHolder.css('overflow', 'hidden');
		var widthOffset = -sliderWidth;
		console.log(" Width Offset: " + widthOffset);
		$(this).width(sliderWidth);
		$(this).height(sliderHeight);
		$(this).css('position', 'relative');
		
		if (containerHolder <= 1) {
		throw new Error("not enough slides");
		}
		
		var currentSlide = 1;
		var previousSlide;
		
		// let's set some properties for the child elements (ie hide them)
		containerHolder.children().each(function(){
	
			var positionTest = $(this).index() + 1;
			if(positionTest == 1){
				
			}
			else{
			$(this).css('display', 'none');
			}
			$(this).css('position', 'absolute');
			$(this).css('z-index', '600');
			$(".caption", this).css('position', 'absolute');
			$(".caption", this).css('margin-left', widthOffset);
			$(".caption", this).css('top', '0');
			$(".caption", this).css('display', 'block');
			
		}); 
		
		// end of basic settings
		/*
		 * Let's discuss the slideshow structure
		 * We need an image "background" (<img>)
		 * and a .caption <div> for secondary animation
		*/
		
		
		console.log("Step 1 done");
		
		setInterval(function(){
			
	
			
			previousSlide = currentSlide - 1;
			
			if(currentSlide > objectsContained || currentSlide == 1){
			currentSlide = 1;	
			previousSlide = objectsContained;
			}
			
			
			
			$('div:nth-child(' + currentSlide + ')', containerHolder).css('z-index', '900');
			console.log("Current Slide: " + currentSlide);
			console.log("Previous Slide: " + previousSlide);
			
			console.log("Step 2 done");
			
			
			$('div:nth-child(' + currentSlide + ')', containerHolder).fadeIn(3000, function(){
			$('.caption', this).animate({
				marginLeft: 0
			},2000);
			
			});
			console.log("Step 3 done");
			
			$('div:nth-child(' + previousSlide + ')', containerHolder).fadeOut();
			$('div:nth-child(' + previousSlide + ') .caption', containerHolder).css('margin-left', widthOffset);
			$('div:nth-child(' + currentSlide + ')', containerHolder).css('z-index', '600');
			currentSlide++;
			
			
			console.log("Step 4 done");
		}, 7000);
	
	
	
	
	}	
})(jQuery);