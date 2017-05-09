<?php get_header(); ?>
<?php get_template_part('inc/header');	?>
  <div class="preloader sobreloader">
        <!-- <h1 class="load">FR</h1> -->
    </div>

    <section id="blog-projects" class="projetos">

          <span class="float-letter">Trabalhos</span>

            <div class="wrap">




            <div class="border-container">
                <div class="border-float"></div>
                <h1>
                  <span>Meus</span><br>Projetos
                </h1>
            </div>

            <div class="box-projects">

               <ul id="filters">
                  <li><span href="#" class="filter active" data-filter=".todos">Todos</span></li>
                   <?php
                    $posttags = get_tags();
                    if ($posttags) {
                      foreach($posttags as $tag) {
                        echo '<li><span class="filter" data-filter=".' .$tag->name.'">' .$tag->name. '</span></li>';
                      }
                    }
                    ?>
               </ul>

                <div id="portfoliolist" class="container-projects">

            <?php
            $new_args = array(
                'post_type' => array('projetos'),
                'paged' => $paged,
                'post__not_in' => $do_not_duplicate
            );
            $new_query_blog = new WP_Query($new_args);
            ?>
            <?php if ($new_query_blog->have_posts()) : ?>
                <?php while ($new_query_blog->have_posts()) : $new_query_blog->the_post(); ?>
                    <?php if ($post->ID == $do_not_duplicate) continue; ?>


                        <a href="<?php the_permalink(); ?>" class="container-box col-1-3 no-pad portfolio todos<?php
                    $posttags = get_the_tags();
                    if ($posttags) {
                      foreach($posttags as $tag) {
                        echo ' ' .$tag->name. ' ';
                      }
                    }
                    ?>" data-cat=".todos <?php
                    $posttags = get_the_tags();
                    if ($posttags) {
                      foreach($posttags as $tag) {
                        echo '.' .$tag->name. ' ';
                      }
                    }
                    ?>">

                            <div class="mockup-img">
                               <div class="border"></div>
                                <?php echo the_post_thumbnail('home-thumbnails')?>
                            </div>
                            <div class="container">
                                <div class="outer-box">
                                    <div class="inner-container">
                                        <h3><?php the_title() ?></h3>
                                    </div>
                                </div>
                            </div>
                        </a>

                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            <?php endif; ?>


            </div>
            </div>
        </div>

    </section>

    <?php get_template_part('inc/footer');	?>
    <?php get_footer(); ?>


    <script type="text/javascript">
	$(function () {

		var filterList = {

			init: function () {

				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixItUp({
  				selectors: {
    			  target: '.portfolio',
    			  filter: '.filter'
    		  },
    		  load: {
      		  filter: '.todos'
      		}
				});

			}

		};

		// Run the show!
		filterList.init();


	});
	</script>
