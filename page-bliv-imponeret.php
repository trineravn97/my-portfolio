<?php get_header(); ?>

<main class="bliv-imponeret">

    <?php while(have_posts()) : the_post() ?>

            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            <div class="hej">
                <div class="coverart">
                    <h5>Cover Art</h5>
                    <div class="boks1"></div>
                    <div class="boks2"></div>
                    <div class="boks3"></div>
                </div>
                <div class="logoer">
                    <h5>Logoer</h5>
                    <div class="boks4"></div>
                    <div class="boks5"></div>
                </div>
                <div class="plakater">
                    <h6>Plakater</h6>
                    <div class="boks6"></div>
                    <div class="boks8"></div>
                </div>
                
            </div>

               
              
                

           
            <a href="<?php the_field("facebook_link")?>" target="_blank"><img src="<?php get_template_directory_uri()?>/image/facebook.png" alt=""></a>
            <a href="<?php the_field("linkedin_link")?>" target="_blank"><img src="<?php get_template_directory_uri()?>/image/linkdin.png" alt=""></a>

    <?php endwhile; ?>
</main>


<?php get_footer(); ?>