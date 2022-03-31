<?php if( have_posts() ): while( have_posts() ): the_post();?>
<div class="small_card">
    <div class="background_picture"
        <?php if(has_post_thumbnail()):?>style="background-image: url(<?php the_post_thumbnail_url('blog-small'); endif;?>);">
        <div class="background_text">
            <p><?php the_time('d-m-Y');?></p>
            <?php the_category();?>
        </div>
    </div>
    <div class="card_text">
        <h2 class="heading"><?php the_title();?></h2>
        <?php the_excerpt();?>
    </div>
</div>


<?php endwhile; else: endif;?>