<?php get_header(); ?>
<?php get_template_part('inc/header');	?>


    <section id="sobre">
       <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
        <div class="somewords">
                <div class="wrap">
                    <div class="hadline"><h1>Fala ai?</h1><span>Fala ai?</span></div>
                    <p>
                        <?php the_content(); ?>
                    </p>
                </div>
        </div>
            <?php endwhile; ?>
<?php endif; ?>

    </section>
<?php get_template_part('inc/footer');	?>
<?php get_footer(); ?>
   <!--  <script>
        $(window).scroll(function() {
            $('#animation-container , #animation-container1').each(function(){
            var imagePos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
                if (imagePos < topOfWindow+900) {
                    $(this).addClass("slideUp");
                }
            });
        });
    </script> -->
