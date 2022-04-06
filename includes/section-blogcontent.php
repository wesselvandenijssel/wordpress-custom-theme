<?php if( have_posts() ): while( have_posts() ): the_post();?>
<h2 class="heading"><?php the_title();?></h2>

	<p><?php echo get_the_date('l j F Y');?></p>
	<hr>

	<?php the_content();?>

	<?php 
	$fname = get_the_author_meta('first_name');
	$lname = get_the_author_meta('last_name');
	?>

	<?php if ($fname){?>
		<p>Posted by <?php echo $fname;?> <?php echo $lname;?></p>
		<?php
		}?>
	<?php
	$tags = get_the_tags();
	if($tags):
	foreach($tags as $tag):?>

			<a href="<?php echo get_tag_link($tag->term_id);?>" class="badge badge-success">
				<?php echo $tag->name;?>
			</a>
	<?php endforeach; endif;?>
	<?php 
	$categories = get_the_category();
	foreach($categories as $cat):?>
		
			<!-- <a href="<?php echo get_category_link($cat->term_id);?>"> -->
				<?php echo "Categorie: " .$cat->name;?>
			<!-- </a> -->
	<?php endforeach;?>
<?php endwhile; else: endif;?>