<?php 
$videoURL="https://www.youtube.com/embed/15tcsh4vgik";
$convertedURL = str_replace("watch?v=", "embed/", $videoURL);
?>


<?php get_header(); ?>

<main>

    <?php while(have_posts()) : the_post() ?>

            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
                <div class="hej">
                    <div class="om-mig">
                        <div class="boks7"></div>
                        <h4>Jeg er en passioneret grafisk designer, med erfaring fra både studierelevante jobs og arbejde med freelance arbejde. Jeg nyder at tænkte ud af boksen og udfordre den typiske tankegange, hvor jeg samtidigt udfører arbejde af højeste kvalitet, gennem en holistisk og kreativ tilgang til alle tænkelige projekter. Derudover er jeg god til at finde løsninger på alle udfordringer, jeg møder, og nyder både at sparer med andre dygtige fagfolk, men også at tage selvstændige beslutninger.  </h4>
                    </div>
            <p><?php the_field("cv-link"); ?></p>
                    <div class="video"> 
                        <iframe width="560" height="315" src="<?php echo $convertedURL; ?>" frameborder="0" allow="acceleromter; autoplay; 
                        clipbord-write; encrypted; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    </div>
           
            <a href="<?php the_field("facebook_link")?>" target="_blank"><img src="<?php get_template_directory_uri()?>/image/facebook.png" alt=""></a>
            <a href="<?php the_field("linkedin_link")?>" target="_blank"><img src="<?php get_template_directory_uri()?>/image/linkdin.png" alt=""></a>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>