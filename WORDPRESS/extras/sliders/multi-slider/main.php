	<?php 
	$awesomeLoop = Array('slider1', 'slider2','slider3');
	foreach($awesomeLoop as $galName){
	?>
	<div class="port-group" id="<?php echo $galName;?>-pop">
		<div class="port-top">
			<div class="port-name"> <?php echo ucwords($galName); ?> </div>
		</div>
		<div class="port-green"></div>
		<div class="port-slideshow">
			<div class="port-nav" id="<?php echo $galName; ?>-nav"> <a href="#" id="<?php echo $galName;?>-slider-prev">PREV</a> | <a href="#" id="<?php echo $galName;?>-slider-next">NEXT</a> </div>
			<div class="port-slider" id="<?php echo $galName;?>-slider"> <?php the_field($galName);?> </div>
			<div class="port-side">
				<ul>
				<?php foreach($awesomeLoop as $nav){
					if($nav == $galName){
						if($nav == "except"){
								echo '<li><a href="#">Exception!</a>';
						}
						else {
					echo '<li><a href="#" class="active">'.$nav.'</a>';	
						}
					}
					else{
						if($nav == "except"){
					echo '<li><a href="#">Exception!</a>';
					}
					else{
					echo '<li><a href="#">'.$nav.'</a>';
					}
					}
				}?>
				</ul>
				<div class="cta">Place Your Call To Action Here</div>
			</div>
		</div>
		<div class="port-green2"></div>
		<div class="port-footer"><span>© 2012, Antonin Januska</span><br>
			This is an awesome footer for the slider</div>
	</div>
	
	<?php
	}
	?>