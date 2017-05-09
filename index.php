<?php get_header(); ?>
<?php get_template_part('inc/header');	?>
  <div class="preloader sobreloader">
        <!-- <h1 class="load">FR</h1> -->
    </div>

   <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>


    <section id="frame-box" style="display: none; display: <?php the_field('cta-iframe2'); ?>;">
					<?php echo the_post_thumbnail('post-thumbnails')?>
   		<IFRAME name="Criar" Sites src="<?php the_field('iframe'); ?>" frameBorder=0 width=400 height=150 scrolling=auto></IFRAME>
    </section>

    <div class="cta-iframe" style="display: none; display: <?php the_field('cta-iframe'); ?>;">
		<section id="hero-project" class="blog-default">

			<div class="background-hero" style="background:url(<?php the_field('imagem'); ?>);"></div>
			<div class="background-50"></div>

			<div class="mask"></div>

					<?php echo the_post_thumbnail('post-thumbnails')?>

		</section>

		<section id="content-post">

			<div class="post-body">

				<div class="h3-container">
					<h3><?php the_title() ?></h3>
					<div class="border-bottom"></div>
				</div>

					<div class="mockup-img">
					   <div class="border"></div>
			   <div class="wrap">
				<?php the_content(); ?>
				</div>
				</div>
			</div>


		</section>
		<section id="comment_post">
			<?php if (comments_open()); comments_template(); ?>
		</section>
	</div>
    <?php endwhile; ?>
<?php endif; ?>

    <section id="next-prev"  >

              <?php
                                    $prev = get_adjacent_post(false, '', true);
                                    $next = get_adjacent_post(false, '', false);

                                    //use an if to check if anything was returned and if it has, display a link
                                    if ($next) {
                                    $url = get_permalink($next->ID);
                                    echo '<a href="' . $url . '" class="next">

                                       <div class="container">
                                          <div class="inner-container">
                                               <span>Proximo Post</span>

                                               <h3> ' . $next->post_title . '</h3>
                                               <div class="border-bottom"></div>
                                           </div>
                                       </div>

                                        <img src="' . $next->the_post_thumbnail . '">

                                    </a>';
                                    }




                                    if ($prev) {
                                        $url = get_permalink($prev->ID);
                                        echo '<a href="' . $url . '" class="prev">

                                       <div class="container">
                                          <div class="inner-container">
                                               <span>Post anterior</span>

                                               <h3> ' . $prev->post_title . '</h3>
                                               <div class="border-bottom"></div>
                                           </div>
                                       </div>

                                        <img src="' . $prev->the_post_thumbnail . '">

                                    </a>';

                                    }
                                    ?>

    </section>





    <?php get_template_part('inc/footer');	?>
    <?php get_footer(); ?>
