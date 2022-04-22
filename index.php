<?php get_header(); ?>

<main class="frontpage">

    <?php while(have_posts()) : the_post() ?>

            <div class="forside-billede"></div>
            <p><?php the_field("text_boks")?></p>
            
                
                
            <a href="<?php the_field("facebook_link")?>" target="_blank"><img src="<?php get_template_directory_uri()?>/image/facebook.png" alt=""></a>
            <a href="<?php the_field("linkedin_link")?>" target="_blank"><img src="<?php get_template_directory_uri()?>/image/linkdin.png" alt=""></a>

    <?php endwhile; ?>
</main>


<?php get_footer(); ?>