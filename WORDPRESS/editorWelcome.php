<?php
// add this to your functions.php file for your wordpress them. Strip the php tags if needed or you get errors 
add_filter( 'default_content', 'writingEncouragement' );
function writingEncouragement( $content ) {
			global $post_type;
			if($post_type == "post"){
			$encArray = array( "Welcome! Please write a nice and informative page or post!", 
									"Now I know this will be some great piece you're going to write!",
									"<h1>Don't procrastinate!</h1>",
									"Finally started, huh? Okay then!",
									"Blah blah blah. Why don't you write something good this time?",
									"You were just SO GOOD last time, I hope you measure up now too ;)",
									"Error 404.... Just kidding",
									"If you have an SEO plugin, don't forget to add the meta title and meta description infomration",
									"Thank our <a href=\"http://antjanus.com\">Overlord Ant Janus</a> for this messsage",
									"You are now participating on what is called \"on-site SEO \" where you create useful content, put keywords into the URL and optimize your meta information",
									"This little piece of code can be used to create a wordpress signature or to automatically populate advertisement code"
									);
			$content = $encArray[array_rand($encArray)];
	return $content;
			}
}

?>