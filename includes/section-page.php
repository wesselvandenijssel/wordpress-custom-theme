<?php
$the_query = new WP_Query( 'posts_per_page=4' ); ?>
<?php 
// Start our WP Query
while ($the_query -> have_posts()) : $the_query -> the_post(); 
// Display the Post Title with Hyperlink

// echo '<a href='.the_permalink().'>';
?>
<div class="small_card" style="cursor: pointer;" onclick="window.location='<?php the_permalink();?>'">
    <div class="background_picture"
        <?php if(has_post_thumbnail()):?>style="background-image: url(<?php the_post_thumbnail_url('blog-small'); endif;?>);">
        <div class="background_text">
            <p><?php the_time('d-m-Y');?></p>
            <p><?php 
	$categories = get_the_category();
	foreach($categories as $cat):?>

                <!-- <a href="<?php echo get_category_link($cat->term_id);?>"> -->
                <?php echo $cat->name;?>
                <!-- </a> -->


                <?php endforeach;?>
            </p>
        </div>
    </div>
    <div class="card_text">
        <h2 class="heading"><?php the_title();?></h2>
        <?php the_excerpt();?>
    </div>
</div>

<?php 
// Repeat the process and reset once it hits the limit
endwhile;
wp_reset_postdata();
?>