<div class="ancor"><a href="#top" class="btn-up"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>

<div class="footer">

        <div class="bg-hylian">

        </div>
    <p><?php the_field('texto_copyright', 'option'); ?></p>
</div>

<footer>
    <ul class="footer-sociais">
        <?php if(get_field('redes_sociais' ,'option')): ?>
            <?php while(has_sub_field('redes_sociais' ,'option')): ?>
                <li><a href="<?php the_sub_field('facebook'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if(get_field('redes_sociais' ,'option')): ?>
            <?php while(has_sub_field('redes_sociais' ,'option')): ?>
                <li><a href="<?php the_sub_field('twitter'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if(get_field('redes_sociais' ,'option')): ?>
            <?php while(has_sub_field('redes_sociais' ,'option')): ?>
                <li><a href="<?php the_sub_field('instagram'); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php if(get_field('redes_sociais' ,'option')): ?>
            <?php while(has_sub_field('redes_sociais' ,'option')): ?>
                <li><a href="<?php the_sub_field('pinterest'); ?>" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
            <?php endwhile; ?>
        <?php endif; ?>

        <!-- <li><a href="https://www.linkedin.com/in/filipe-ritto-0a570824?trk=hp-identity-name" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>    -->
        <?php if(get_field('redes_sociais' ,'option')): ?>
            <?php while(has_sub_field('redes_sociais' ,'option')): ?>
                <li><a href="<?php the_sub_field('behance'); ?>" target="_blank"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
            <?php endwhile; ?>
        <?php endif; ?>

        <!-- <li><a href="https://plus.google.com/u/0/102549966104973986626/posts" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>  -->
        <?php if(get_field('redes_sociais' ,'option')): ?>
            <?php while(has_sub_field('redes_sociais' ,'option')): ?>
                <li><a href="<?php the_sub_field('tumblr'); ?>" target="_blank"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
            <?php endwhile; ?>
        <?php endif; ?>

        <!-- <li><a href="#" target="_blank"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>     -->
    </ul>
</footer>
