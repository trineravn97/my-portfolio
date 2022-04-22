<?php get_header(); ?>

<main>

    <?php while(have_posts()) : the_post() ?>

            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
                <div class="logo-kontakt"></div>

                <div class="visitkort">
                    <div class="forside"></div>
                    <div class="bagside"></div>
                </div>

            <a href="<?php the_field("facebook_link")?>" target="_blank"><img src="<?php get_template_directory_uri()?>/image/facebook.png" alt=""></a>
            <a href="<?php the_field("linkedin_link")?>" target="_blank"><img src="<?php get_template_directory_uri()?>/image/linkdin.png" alt=""></a>

    <?php endwhile; ?>
</main>


<?php get_footer(); ?>