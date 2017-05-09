<?php get_header(); ?>
<?php get_template_part('inc/header');	?>
    <div class="preloader sobreloader">
        <!-- <h1 class="load">FR</h1> -->
    </div>

    <section id="welcome">
        <div class="background-45 slideRight"></div>

        <section class="welcomeWrapper slideRight">
            <figure class="wrap">
                <figcaption>
                    <div class="border-float"></div>
                    <h2>
                        <span><?php the_field('titulo_hero', 'option'); ?></span>
                    </h2>
                    <h3><?php the_field('sub-titulo_hero', 'option'); ?></h3>
                </figcaption>
            </figure>
        </section>

        <div class="instagram">
            <div class="mask"></div>
            <script src="//assets.juicer.io/embed.js" type="text/javascript"></script>
            <link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
            <ul class="juicer-feed" data-feed-id="filiperitto"><h1 class="referral" style="display:none;"><a href="https://www.juicer.io">Powered by Juicer</a></h1></ul>
        </div>
    </section>

	   <section id="header-projects">
			<h1>Ultimos Projetos</h1>
			<span class="seta-baixo"></span>
	   </section>
    <section id="blog-projects">


            <div class="background-50 right">
            <div class="container-projects">

            <?php
            $new_args = array(
                'post_type' => array('projetos'),
                'posts_per_page' => '8',
                'paged' => $paged,
                'post__not_in' => $do_not_duplicate
            );
            $new_query_blog = new WP_Query($new_args);
            ?>
            <?php if ($new_query_blog->have_posts()) : ?>
                <?php while ($new_query_blog->have_posts()) : $new_query_blog->the_post(); ?>
                    <?php if ($post->ID == $do_not_duplicate) continue; ?>


                        <a href="<?php the_permalink(); ?>" class="container-box col-1-4 no-pad">

                            <div class="mockup-img">
                               <div class="border"></div>
                                <?php echo the_post_thumbnail('home-thumbnails')?>
                            </div>
                            <div class="container">
                                <div class="outer-box">
                                    <div class="inner-container">
                                        <h3><?php the_title() ?></h3>
                                        <div class="tags">
                                            <?php
                                            $posttags = get_the_tags();
                                            if ($posttags) {
                                              foreach($posttags as $tag) {
                                                echo '<span>#' .$tag->name. '</span> <span> - </span>';
                                              }
                                            }
                                            ?>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            <?php endif; ?>


            </div>
        </div>


    </section>

    <section id="strava">
    	<a href="https://www.strava.com/athletes/11822086"><img src="<?php echo PW_THEME_URL; ?>assets/img/logo-strava.png"></a>
    	<div class="video-strava">
    	<div class="mask"></div>
    		<video autoplay loop muted class="mobile-hidden">
            <source src="<?php echo PW_THEME_URL; ?>assets/videos/668259559.mp4" type="video/mp4">
        </video>
    	</div>
    </section>

    <section id="blog-posts">

       <span class="float-letter">Artigos</span>
        <div class="wrap">

            <div class="container-box-post">

                <div class="border-container">
                    <!-- <div class="border-float"></div> -->
                    <h2>
                      <span>Meus</span><br>Artigos
                    </h2>
                </div>

                <div class="container-post">



             <?php
            $new_args2 = array(
                'post_type' => array('post'),
                'posts_per_page' => '4',
                'paged' => $paged,
                'post__not_in' => $do_not_duplicate
            );
            $query_blog = new WP_Query($new_args2);
            ?>
            <?php if ($query_blog->have_posts()) : ?>
                <?php while ($query_blog->have_posts()) : $query_blog->the_post(); ?>
                    <?php if ($post->ID == $do_not_duplicate) continue; ?>
                       <a href="<?php the_permalink(); ?>" class="link-posts">
                        <div class="content">
                           <div class="content-wrap">
                                <div class="date">
                                    <span> <?php the_time('j F Y'); ?></span>
                                </div>
                                <div class="title">
                                    <span> <?php the_title() ?> </span><span>→</span>
                                </div>
                                <div class="coments">
                                    <span> <?php comments_popup_link('Nenhum comentários »', '1 Comentário', '% Comentários'); ?></span>
                                </div>
                            </div>

                            <div class="bg_overlay">
                        <div class="mask"></div>
                                <?php echo the_post_thumbnail('post-thumbnails')?>
                            </div>
                        </div>
                    </a>
                    <?php endwhile; ?>
            <?php endif; ?>

                    <!-- <div class="content">
                           <div class="content-wrap">
                        <div class="date">
                            <span> 07 Fev 2016</span>
                        </div>
                        <div class="title">
                            <span> Testezin</span><span>→</span>
                        </div>
                        <div class="coments">
                            <span> 2 Comentários</span>
                        </div>
                            </div>
                        <div class="bg_overlay">
                        <div class="mask"></div>
                       <?php echo the_post_thumbnail('post-thumbnails')?></div>
                    </div> -->
                </div>

            </div>

        </div>

    </section>

    <?php get_template_part('inc/footer');	?>
    <?php get_footer(); ?>
