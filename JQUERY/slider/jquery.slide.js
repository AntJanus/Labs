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
		var objectsContained = containerHolder.children().length;
		console.log(" Objects Contained: " + objectsContained);
		
		// set parent's height and width
		var sliderWidth = $(":first-child", this).outerWidth();
		var sliderHeight = $(":first-child", this).outerHeight();
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
			$(this).css('display', 'none');
			$(this).css('position', 'absolute');
			$(this).css('z-index', '-900');
			$(".caption", this).css('position', 'absolute');
			$(".caption", this).css('margin-right', widthOffset);
			$(".caption", this).css('top', '30%');
			$(".caption", this).css('display', 'block');
			
		}); 
		
		// end of basic settings
		/*
		 * Let's discuss the slideshow structure
		 * We need an image "background" (<img>)
		 * and a .caption <div> for secondary animation
		*/
		$(":first-child", this).css('z-index', '900');
		$(":first-child",this).fadeIn(3000, function(){
			$('.caption', this).animate({
				marginRight: 0
			},1000);
			
			currentSlide++;
		});
		
		console.log("Step 1 done");
		
		setInterval(function(){
			previousSlide = currentSlide - 1;
			
			if(currentSlide >= objectsContained){
			currentSlide = 1;	
			previousSlide = objectsContained;
			}
			
			
			
			$(':nth-child(' + currentSlide + ')', this).css('z-index', '900');
			console.log("Current Slide: " + currentSlide);
			console.log("Previous Slide: " + previousSlide);
			
			console.log("Step 2 done");
			
			
			$(':nth-child(' + currentSlide + ')', this).fadeIn('slow', function(){
				
				
			$('.caption', this).animate({
				marginRight: 0
			},1000);
			console.log("Step 3 done");
			$(':nth-child(' + previousSlide + ')', this).css('display', 'none');
			$(':nth-child(' + previousSlide + ') .caption', this).css('margin-right', widthOffset);
			$(':nth-child(' + currentSlide + ')', this).css('z-index', '-900');
			currentSlide++;
			
			
			console.log("Step 4 done");
			});
		}, 2000);
	
	
	
	
	}	
})(jQuery);