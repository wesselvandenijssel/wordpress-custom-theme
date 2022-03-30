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
                    <div class="small_card">
                        <div class="background_picture">
                            <div class="background_text">
                                <p>12-6-2019</p>
                                <p>Tech</p>
                            </div>
                        </div>
                        <div class="card_text">
                            <h2 class="heading">Heading</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo quas illo quibusdam
                                deleniti
                                porro
                                hic animi numquam minus quis corporis excepturi.</p>
                        </div>
                    </div>
					<div class="small_card">
                        <div class="background_picture">
                            <div class="background_text">
                                <p>12-6-2019</p>
                                <p>Tech</p>
                            </div>
                        </div>
                        <div class="card_text">
                            <h2 class="heading">Heading</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo quas illo quibusdam
                                deleniti
                                porro
                                hic animi numquam minus quis corporis excepturi.</p>
                        </div>
                    </div> <div class="small_card">
                        <div class="background_picture">
                            <div class="background_text">
                                <p>12-6-2019</p>
                                <p>Tech</p>
                            </div>
                        </div>
                        <div class="card_text">
                            <h2 class="heading">Heading</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo quas illo quibusdam
                                deleniti
                                porro
                                hic animi numquam minus quis corporis excepturi.</p>
                        </div>
                    </div> <div class="small_card">
                        <div class="background_picture">
                            <div class="background_text">
                                <p>12-6-2019</p>
                                <p>Tech</p>
                            </div>
                        </div>
                        <div class="card_text">
                            <h2 class="heading">Heading</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo quas illo quibusdam
                                deleniti
                                porro
                                hic animi numquam minus quis corporis excepturi.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-auto d-flex justify-content-center button_card">
                    <a href="" class="center" id="load">Meer laden</a>
                </div>
            </div>

        </section>



    </div>
</div>


<?php get_footer();?>