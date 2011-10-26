<?php
/*
AUTHOR: Antonin Januska
DESCRIPTION: These two filters will create a "welcome" placeholder text for a new post. The first function will add random body text form the array.
The second function will do the same except for a title instead of body.
Enjoy!



*/
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


function title_text_input( $title ){
    	$title = array( "Enter a GOOD, CREATIVE Title!",
									"404 Post Not Found, I guess you can just rewrite it",
									"Title rich in KEYWORDS goes here",
									"Enter Title",
									"Enter Writing Mode",
									"How To: Write a GOOD post",
									"Top 10 whatever"
									);
			$title = $title[array_rand($title)];
	return $title;
}
add_filter( 'enter_title_here', 'title_text_input' );

?>