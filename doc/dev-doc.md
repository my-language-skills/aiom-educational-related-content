### 0.2
## HOW TO ADD SHORTCODES 

Once we have installed the plugin on our site, we can already use the shortcodes. To add them all you have to do is copy the following code as you want it to be displayed in the frontend.

If you want to display the data entered in the fields. Copy the following code wherever you want it to be displayed.

* If you want to show all then the variable type will be all. (Quiet fields left blank will not be displayed)
 	* **Show all**: `[related_content type="all"]`
* If you just want to display a field you have the following options to put inside type: **rc_videos**, **rc_audios**, **rc_biblio**, **rc_exercises**, **rc_activities**.
	* **Only show audios**: `[related_content type="rc_audios"]`


## HOW TO SHOW THE FIELDS IN TEMPLATE FILE

The first thing that you have to do is download the plugin and installed in your wordpress. Then you have to activated it. 

The second thing that you have to do  is copy this code in the part that you want in your theme. Our plugin has 3 shortcodes:

### Shortcode for resources
This shortcode have 1 parameter called type. The types can be: all, rc_videos, rc_audios, rc_biblio, rc_exercises, rc_activities.

`<?php echo do_shortcode('[related_content type="all"]'); ?>`

This shortcode is responsible for displaying the content of the resources fields. According to the value of type all fields are shown or only one of them

### Shortcode for Link based

This shortcode is responsible for displaying a link in the form of link and flag. This link contains the information to the book on which the book in which we are based is based. This shortcode collects information from the languages and link-based fields in book info

`<?php echo do_shortcode('[related_based]'); ?>`

### Shortcode for related books

This shortcode is responsible for relating the books. Shows relationships based on information collected from the metabox called Related Book.

`<?php echo do_shortcode('[related_books]'); ?>`



### 0.1

## HOW TO SHOW FIELDS IN TEMPLATE FILE

The first thing that you have to do is download the plugin and installed in your wordpress. Then you have to activated it. 

The second thing that you have to do  is copy this code in the part that you want in your theme. 

To see the code [click here](https://gist.githubusercontent.com/colomet/7d30eef2f7bd2ad81301b335d6e3c673/raw/c481692d7c013c4aa35602f9313c183a70de453b/PB_RC-show_in_template_files.php)
