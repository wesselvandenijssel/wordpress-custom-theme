<?php get_header();?>
<div class="container">



    <section class="row">
        <div class="large_card">
            <section class="section">
                <div class="card_heading_large">

                    <?php get_template_part('includes/section','archive');?>

                    <?php posts_nav(); ?>
                </div>

            </section>
        </div>


    </section>
</div>

<?php get_footer();?>