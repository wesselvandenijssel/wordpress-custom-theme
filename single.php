<?php get_header();?>
<div class="container">



    <section class="row">


        <div class="card">
            <section class="section">
            <?php if(has_post_thumbnail()):?><img src="<?php the_post_thumbnail_url('blog-large');?>" alt="<?php the_title();?>"
                    class="img-fluid mb-3 img-thumbnail"> <?php endif;?>
                
					<?php get_template_part('includes/section','blogcontent');?>
            </section>
        </div>
    </section>

    <section class="row">
        <div class="card">
            <div class="card_heading">
			<?php get_template_part('includes/section','page');?>
            </div>
            <div class="mt-auto d-flex justify-content-center button_card">
                <a href="blog" class="center" id="load">Meer laden</a>
            </div>
        </div>
    </section>
</div>
</div>
<?php
?>
<?php wp_link_pages();?>

<?php get_footer();?>