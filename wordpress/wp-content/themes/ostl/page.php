<?php get_header(); ?>

      <section class="home-about">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?> 
              
              <header>
                <h1><?php the_title(); ?></h1>
                <p class="tags man mbl">
                  <?php
                    $posttags = get_the_tags();
                    if ($posttags) {
                      foreach($posttags as $tag) {
                        echo '<b>#' .$tag->name. '</b> '; 
                      }
                    }
                  ?>
                </p>
              </header>
              
              <?php the_content(); ?>
              
            <?php endwhile; ?> 
          <?php endif; ?>
      </section>
      
      
      <?php get_footer(); ?>

  </body>
</html>