      <?php get_template_part( 'contact' ); ?>
       
      <footer>
        <p>© <?php echo date("Y"); ?> <?php bloginfo('name'); ?>, tous droits réservés.</p>
      </footer>

    </div>
  <?php wp_footer(); ?>



<script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri() . '/js/script.js?' . time(); ?>"></script>