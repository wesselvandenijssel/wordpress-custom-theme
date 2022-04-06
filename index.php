<!-- Blog page -->
<?php get_header();?>
<div class="container">



    <section class="row">
        <div class="large_card col">
            <section class="section">
                <div class="card_heading_large">
                    <!-- Include includes/section-archive.php -->
                    <?php get_template_part('includes/section','archive');?>
                    <!-- Nav menu | Next/Previous page -->
                    <?php posts_nav(); ?>
                </div>

            </section>
        </div>


    </section>
</div>

<?php get_footer();?>