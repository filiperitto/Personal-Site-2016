<?php get_header(); ?>
<?php get_template_part('inc/header');	?>

  <div class="preloader sobreloader">
        <!-- <h1 class="load">FR</h1> -->
    </div>

   <?php if (have_posts()) : ?>
    <section id="hero-project">
        <div class="background-hero" style="background:url(<?php the_field('imagem'); ?>) top center; display:<?php the_field('ativar_imagem'); ?>;"></div>
        <div class="background-50"></div>

        <div class="mask"></div>

        <video autoplay loop muted id="video-welcome" class="mobile-hidden" poster="<?php echo PW_THEME_URL; ?>assets/videos/tinta-rosa.jpg" style="display:<?php the_field('ativar_video'); ?>;">
            <source src="<?php the_field('video'); ?>" type="video/mp4">
        </video>


        <div class="table">

            <h1><?php the_field('letra_inicial'); ?></h1>

        </div>

        <div class="h3-container">
            <h3><?php the_title() ?></h3>
            <div class="border-bottom"></div>
        </div>

        <div class="container-arrow ancor">
            <a href="#ancora-project"><img src="<?php echo PW_THEME_URL; ?>assets/img/arrow-down-proj.png"></a>
        </div>

        <div id="ancora-project"></div>


    </section>

    <section id="colors-project">

        <h2>Cores</h2>

       <div class="wrap">
        <?php if(get_field('cores')): ?>
            <?php while(has_sub_field('cores')): ?>
            <div class="mockup-img">
                <div class="block-color" style="background: <?php the_sub_field('cor_inicial'); ?>;">

                    <div class="border"></div>

                   <!-- Mockup de cores https://color.adobe.com/pt/library/5a24ddb9-a107-4db4-a0d8-73ce32cb4ebb/theme/eba0ce66-a986-4249-a5d2-2173433f4ddf/edit/ -->
                    <span style="color: <?php the_sub_field('cor_inicial'); ?>;"><?php the_sub_field('cor_inicial'); ?></span>

                    <div class="box-variants">
                        <div class="box col-1-3" style="background: <?php the_sub_field('variante_1'); ?>;"></div>
                        <div class="box col-1-3" style="background: <?php the_sub_field('variante_2'); ?>;"></div>
                        <div class="box col-1-3" style="background: <?php the_sub_field('variante_3'); ?>;"></div>
                        <div class="gradient col-1-1" style="
                        background: <?php the_sub_field('variante_1'); ?>; /* Old browsers */
                        background: -moz-linear-gradient(left,  <?php the_sub_field('variante_1'); ?> 0%, <?php the_sub_field('variante_2'); ?> 50%, <?php the_sub_field('variante_3'); ?> 100%); /* FF3.6-15 */
                        background: -webkit-linear-gradient(left,  <?php the_sub_field('variante_1'); ?> 0%,<?php the_sub_field('variante_2'); ?> 50%,<?php the_sub_field('variante_3'); ?> 100%); /* Chrome10-25,Safari5.1-6 */
                        background: linear-gradient(to right,  <?php the_sub_field('variante_1'); ?> 0%,<?php the_sub_field('variante_2'); ?> 50%,<?php the_sub_field('variante_3'); ?> 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php the_sub_field('variante_1'); ?>', endColorstr='<?php the_sub_field('variante_3'); ?>',GradientType=1 ); /* IE6-9 */
                        "></div>
                    </div>
                </div>

            </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>

    </section>

    <section id="fonts-project" style="display: <?php the_field('ativar_font'); ?>;">
        <div class="wrap">

           <?php if(get_field('font')): ?>
            <?php while(has_sub_field('font')): ?>
            <div class="block-font">
               <h4>
                   <?php the_sub_field('titulo'); ?>
               </h4>
                <div class="mockup-img">
                   <div class="border"></div>
                    <img src="<?php the_sub_field('font'); ?>">
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>

        </div>
    </section>

    <section id="description-project" style="display: <?php the_field('ativar_description'); ?>;">

       <div class="mockup-screen">
           <div class="display">
                <figure class="screen">
                    <div class="img-mockup" style="max-width: 1680px;">
                       <div class="mask"></div>
                        <img src="<?php the_field('photo_viewport'); ?>">
                    </div>
                </figure>
           </div>
       <div class="body"></div>
       </div>
       <div class="content-description">
           <div class="border"></div>
           <div class="box">
               <?php the_field('descrição'); ?>
           </div>
       </div>

       <div class="links" style="display: <?php the_field('ativar_links'); ?>;">


           <?php if(get_field('links')): ?>
            <?php while(has_sub_field('links')): ?>
                <a href="<?php the_sub_field('url'); ?>" target="_blank"><i class="fa <?php the_sub_field('icone'); ?>" aria-hidden="true"></i> <span><?php the_sub_field('titulo'); ?></span></a>
            <?php endwhile; ?>
        <?php endif; ?>
       </div>

    </section>

    <!--<section id="mobile-project" style="display: <?php the_field('ativar_mobile'); ?>;">

       <div class="mockup-screen">
           <div class="display">
                <figure class="screen">
                    <div class="img-mockup" style="max-width: 1680px;">
                       <iframe src="<?php the_field('link_para_projeto'); ?>"></iframe>
                    </div>
                </figure>
           </div>
       </div>

    </section>-->

    <section id="screens-project" style="display: <?php the_field('ativar_screens'); ?>;">


           <?php if(get_field('telas')): ?>
            <?php while(has_sub_field('telas')): ?>
                <div class="mockup-img">
                   <div class="border"></div>
                    <img src="<?php the_sub_field('imagem'); ?>">
                </div>
            <?php endwhile; ?>
        <?php endif; ?>


    </section>

    <section id="next-prev">

        <!-- <a href="#" class="prev">

           <div class="container">
              <div class="inner-container">
                   <span>Projeto anterior</span>

                   <h3> Zooey Deschanel</h3>
                   <div class="border-bottom"></div>
               </div>
           </div>

            <img src="<?php the_field('photo_viewport'); ?>">

        </a>

        <a href="#" class="next">

           <div class="container">
              <div class="inner-container">
                   <span>Projeto anterior</span>

                   <h3> Zooey Deschanel</h3>
                   <div class="border-bottom"></div>
               </div>
           </div>

        </a> -->
              <?php
                                    $prev = get_adjacent_post(false, '', true);
                                    $next = get_adjacent_post(false, '', false);

                                    //use an if to check if anything was returned and if it has, display a link
                                    if ($next) {
                                    $url = get_permalink($next->ID);
                                    echo '<a href="' . $url . '" class="prev">

                                       <div class="container">
                                          <div class="inner-container">
                                               <span>Projeto anterior</span>

                                               <h3> ' . $next->post_title . '</h3>
                                               <div class="border-bottom"></div>
                                           </div>
                                       </div>

                                        <img src="' . $next->the_post_thumbnail . '">

                                    </a>';
                                    }




                                    if ($prev) {
                                        $url = get_permalink($prev->ID);
                                        echo '<a href="' . $url . '" class="next">

                                       <div class="container">
                                          <div class="inner-container">
                                               <span>Proximo Projeto</span>

                                               <h3> ' . $prev->post_title . '</h3>
                                               <div class="border-bottom"></div>
                                           </div>
                                       </div>

                                        <img src="' . $prev->the_post_thumbnail . '">

                                    </a>';
                                    }
                                    ?>

    </section>



    <?php endif; ?>




    <?php get_template_part('inc/footer');	?>
    <?php get_footer(); ?>
