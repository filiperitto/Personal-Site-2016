<?php get_header(); ?>
<?php get_template_part('inc/header');	?>
  <div class="preloader sobreloader">
        <!-- <h1 class="load">FR</h1> -->
    </div>

    <section id="contato">
        <div id="parallax-mouse">
        </div>

        <div class="background-45 left">
            <div class="container-text-left">
                <p><?php the_field('texto_contato', 'option'); ?></p>
            </div>
        </div>
        <div class="background-45 right">

            <div class="container-info">
                <h2><a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></h2>
                <h3><?php the_field('telefone', 'option'); ?></h3>
                <a href="#contato-modal" class="button modal-trigger">Me contrata ai!</a>
            </div>

        </div>
        <div id="contato-modal" class="modal">

            <div class="contato-modal">
                <h1>Mande<br>um pedido</h1>

                <!-- <div class="input-field col-1-1">
                    <select>
                        <option value="" disabled selected>Interessado em que?</option>
                        <option value="1">Interessado em website</option>
                        <option value="2">Só Design</option>
                        <option value="3">Só Desenvolvimento</option>
                    </select>
                </div>

                <div class="input-field col-1-2">
                    <input placeholder="Nome" id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col-1-2">
                  <input placeholder="Email" id="email" type="email" class="validate">
                  <label for="email" data-error="wrong" data-success="right">Email</label>
                </div>

                <div class="input-field col-1-1">
                    <textarea id="textarea1" class="materialize-textarea" placeholder="Detalhes do projeto (Opcional)"></textarea>
                    <label for="textarea1">Textarea</label>
                </div>

                <button class="button" type="submit" name="action">Enviar Pedido
                </button> -->
                <?php echo do_shortcode('[contact-form-7 id="5" title="Contato"]'); ?>


            </div>
        </div>


    </section>
    <?php get_template_part('inc/footer');	?>
    <?php get_footer(); ?>
