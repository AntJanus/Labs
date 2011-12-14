Basic Wordpress components and snippets

Header.php - a classic copy/paste header for creating Wordpress themes. It includes all of the feeds required, pingbacks, viewport spec, correct title tags, favicon shortcuts and more.

It's currently based on the XHTML 1.0 transitional. The HTML5 header is under header5.php

Header5.php - same as Header.php but HTML5, now includes HTML5 Shiv

editorWelcome.php - A quick little content addition snippet to welcome you when writing a new blog post! :) I found it extremely encouraging when writing

Custom-Div-Editor-Style - create basic formatted layout within TinyMCE with this custom div editor style. It includes a sidebar, top image, main content, and clearfix. This requires a TinyMCE editor style filter as well as allowing the "div" tag

UPDATE LOG
editorWelcome.php:
v1.01
Changed the meta around to include correct hcard information (source-org, copyright, etc.). Also, some tags were left open, I closed them up

header5.php:
v1.01
- updated language attributes
- added body tag and body class
- deleted feed item data (use automatic feed links in functions.php, refer to basicFunctions.php file)

microformattedLoop.php
v1.012
- changed minor microformatting issues (added the "single" class for single articles)
- added the "email" tag for Google+ article recognition
- added the author link. Leads to nowhere if you don't have a author.php template page. Remove if necessary

TO DO:
- seamlessly integrate email (it sticks out currently)

v1.01
- added post classes/post ID
- fixed meta information (categories is now the_category(', ') instead of the_category(''))
- added source-org copyright to the bottom of the loop
- changed meta v card to a <p> tag instead of <span>