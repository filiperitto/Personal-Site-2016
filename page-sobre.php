<?php get_header(); ?>
<?php get_template_part('inc/header');	?>
  <div class="preloader sobreloader">
        <!-- <h1 class="load">FR</h1> -->
    </div>

    <section id="sobre">

        <div class="capa"></div>

        <div class="description slideUp-sobre">
            <div class="wrap">
                <div class="box-profile">
                    <img src="<?php the_field('imagem', 'option'); ?>">
                </div>
                <h1> <?php the_field('titulo', 'option'); ?><br> <span><?php the_field('sub-titulo', 'option'); ?></span> </h1>
            </div>
        </div>

        <div class="somewords">
                <div class="wrap">
                    <div class="hadline"><h1>Fala ai?</h1><span>Fala ai?</span></div>
                    <p>
                        <?php the_field('algumas_palavras', 'option'); ?>
                    </p>
                </div>
        </div>

        <div class="resume">
                <div class="wrap">
                    <div class="hadline"><h1>Experiência</h1><span>Experiência Profissional</span></div>
                </div>
                <div class="resume_container">
                    <ul class="resume_list">

                        <?php if(get_field('resume', 'option')): ?>
                            <?php while(has_sub_field('resume', 'option')): ?>
                                <li>
                                    <div class="col col-company">
                                        <h2 class="resume_company"><?php the_sub_field('company'); ?></h2>
                                        <div class="resume_date">
                                            <?php while(has_sub_field('date')): ?>
                                                <?php the_sub_field('start'); ?> — <?php the_sub_field('end'); ?>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                                    <div class="col  col-position">
                                        <h2 class="resume_title"><?php the_sub_field('title'); ?></h2>
                                        <a class="resume_link" href="<?php the_sub_field('url'); ?>" target="_blank"><?php the_sub_field('url'); ?></a>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </ul>
                </div>
        </div>

    <div class="gostos">
        <div id="animation-container1" >
            <div class="wrap">
                <div class="hadline"><h1>O que eu gosto?</h1><span>O que eu gosto?</span></div>
                <p><?php the_field('o_que_eu_gosto', 'option'); ?>
                </p>
            </div>
        </div>
    </div>

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
