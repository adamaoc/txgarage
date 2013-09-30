<?php /*
Template Name: review api builder
*/ 
?>

<?php get_header(); ?>

<section>
	<h2>Review api builder</h2>

	<?php query_posts('category_name=Car Reviews&posts_per_page=700'); ?>
	<?php 
		$i = 1;
		$list = array();
		$reviews = array();
	?>
	 <?php while (have_posts()) : the_post(); ?>
	    <?php 
	    	$id 		= get_the_ID();
	    	$title 		= get_the_title();
	   		$author  	= get_the_author();
	   		$link 		= get_permalink();
	   		$posted		= get_the_date('l, F j, Y');
	   		$posted_f	= get_the_date('n/j/Y');
	   		$posted_year = get_the_date('Y');
	   		$meta		= get_post_meta( get_the_ID(), 'postdata' );
	   		$meta = $meta[0];
	   		if (empty($meta)) {
	   			$meta = "null";
		   		$veh_year = "null";
		   		$veh_make = "null";
		   		$veh_model = "null";
	   		} else {
	   			$meta = explode("|", $meta);
		   		$veh_year = $meta[0];
		   		$veh_make = $meta[1];
		   		$veh_model = $meta[2];
	   		}

	   		$list['id'] = $id;
	   		$list['year_posted'] = $posted_year;
	   		$list['title'] 	= $title;
	   		$list['link'] 	= $link;
	   		$list['veh_year'] = $veh_year;
	   		$list['veh_make'] = $veh_make;
	   		$list['veh_model'] = $veh_model;
	   		$list['author'] = $author;
	   		$list['posted'] = $posted;
	   		$list['formated_date'] = $posted_f;
	   		// $list['delivered_date'] = 'na';
	   		// $list['one_month'] = 'na';
	   		// $list['two_month'] = 'na';
	   		// $list['three_month'] = 'na';
	   		// $list['six_month'] = 'na';
	   		// $list['full_year'] = 'na';

	   		$reviews_basic['r0'.$i] = $list;
	   		$i++;
	    ?>
	 <?php endwhile;?>
	 <?php 
	 	// echo "<pre>";
	 	// print_r($reviews_basic); 
	 	// echo "</pre>";

	 	foreach ($reviews_basic as $review) {
	 		$id = $review['id'];
	 		// echo "<hr>";
	 		// print_r($review);
	 		// echo "<br>";
	 		// var_dump($id);

	 		if (isset($review['delivered_date'])) {

	 		} else {
	 			$list['delivered_date'] = 'na';

	 			$reviews_appended[$id] = $list;
	 		}
	 	}

	 	echo "<pre>";
	 	print_r($reviews_appended); 
	 	echo "</pre>";

	 	$file = json_encode($reviews_basic);
	 	//print_r($file);
	 	$path = dirname(__FILE__);
	 	$path = explode('/', $path);
	 	// echo "<br>";
	 	// print_r($path);
	 	// echo "<br>";
	 	$buildPath = $path[0]."/".$path[1]."/".$path[2]."/".$path[3]."/".$path[4]."/".$path[5]."/".$path[6]."/".$path[7]."/".$path[8]."/data/api/";
	 	//echo $buildPath;
	 	$filePath = $buildPath."vehicle-data.json";
	 	file_put_contents($filePath, $file);
	 ?>

</section>

<?php get_footer(); ?>
