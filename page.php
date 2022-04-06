<?php get_header();?>
<div class="container">



    <section class="row">


        <div class="card col">
            <section class="section">
                <!-- Send form -->
                <form action="<?php echo get_stylesheet_directory_uri() ?>/process_upload.php" method="POST"
                    enctype="multipart/form-data">

                    <label for="name">Berichtnaam</label><br>
                    <input type="text" placeholder="Geen titel" name="name" id='name' maxlength="8" required><br>
                    <label for="category">Categorie</label>
                    <!-- Wordpress Dropdown Function For Category Menu -->
                    <p><?php wp_dropdown_categories('show_option_none=Geen categorie', 'id=category')?></p>
                    <label for="picture_text">Header afbeelding</label><br>
                    <label for="file" class="picture"><i class="las la-camera"></i>
                        <div>
                            <p>Kies bestand</p>
                        </div>
                    </label>
                    <input type="file" name="profilepicture" id="file" size="25" required/><br>
                    <label for="textarea">Bericht</label><br>
                    <textarea id='textarea' name="textarea" required></textarea>
                    <div class="d-flex justify-content-center">
                        <input type="submit" id="submit" value="Bericht verzenden" class="center orange_box">
                    </div>
                </form>
            </section>
        </div>
    </section>

    <section class="row">
        <div class="card col">
            <div class="card_heading">
                <!-- Get includes/section-page.php--->
                <?php get_template_part('includes/section','page');?>
            </div>
            <div class="d-flex justify-content-center button_card orange_box">
                <a href="blog" class="center" id="load">Meer laden</a>
            </div>
        </div>

    </section>
</div>
</div>
<?php
?>
<?php get_footer();?>