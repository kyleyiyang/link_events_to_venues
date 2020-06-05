Link Events to Places (venues)
In theme editor, single-place-events.php (template/single-place-events.php):
//adding to fix event link to venue
	$place_link = get_permalink($post->ID);
	$place_link_2 = parse_url($place_link);
	$pos = strpos($place_link_2["path"], '-usa');
	$place_comp = substr($place_link_2["path"], 0, $pos);
	$place_comp_1 = explode("/",$place_comp);
	//end adding
//$events = new WP_Query(array('post_type' => 'event', 'post_status' => 'publish', 'post_parent' => $post->ID));   ('post_parent' => $post->ID did not work!!!!!!!!!!!)
	   $events = new WP_Query(array('post_type' => 'event', 'post_status' => 'publish', 'posts_per_page' => -1));
//adding to fix event link to venue
			$event_link = get_permalink();
			$event_link_2 = parse_url($event_link);
			if ( stripos($event_link_2["path"], $place_comp_1[2]) !== false ) {
			//end adding
Also make sure the event permalink matches that of place.
