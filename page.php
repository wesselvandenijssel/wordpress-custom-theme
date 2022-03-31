<?php get_header();?>
<div class="container">



    <section class="row">


        <div class="card">
            <section class="section">
                <form action="">
                    <h2 class="head_text">Plaats een blog bericht</h2>
                    <label for="title">Berichtnaam</label><br>
                    <input type="text" placeholder="Geen titel" name="title">
                    <label for="Categorie">Categorie</label>
                    <input type="text" placeholder="Geen Categorie" name="Categorie">
                    <label for="picture_text">Header afbeelding</label><br>
                    <label for="file" class="picture"><i class="las la-camera"></i>
                        <div>
                            <p>Kies bestand</p>
                        </div>
                    </label>
                    <input type="file" accept="image/*" name="file" id="file"><br>
                    <label for="message">Bericht</label><br>
                    <textarea></textarea>
                    <div class="my-5 d-flex justify-content-center">
                        <input type="submit" id="submit" value="Bericht verzenden" class="center">
                    </div>
                </form>
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


<?php get_footer();?>