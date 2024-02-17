<?php get_header(); ?>

      <header class="real-head"> 
        <a href="<?php echo esc_url(home_url()); ?>" title="Accueil" class="icon-ostell home-top-logo"></a>
      </header>
      
      <section class="real-presentation">
       
        <nav class="real-nav ">
         
          <?php
          $next_post = get_next_post();
          if (!empty( $next_post )): ?>
            <?php $nexttitle = isset( $next_post->post_title ) ? $next_post->post_title : ''; ?>
            <a href="<?php echo get_permalink($next_post->ID); ?>" class="prev" title="<?php echo wp_strip_all_tags( $nexttitle ); ?>">
              <span class="real-nav-icon icon-left"></span>
              <div>
                <h3><?php echo $next_post->post_title ?></h3>
              </div>
            </a>
          <?php endif ?>
          
            <a href="<?php echo esc_url(home_url()); ?>" class="back" title="Retour à la liste des réalisations">
              <span class="real-nav-icon icon-back"></span>
              <div>
                <h3>Accueil</h3>
              </div>
            </a>
            
          <?php
          $prev_post = get_previous_post();
          if (!empty( $prev_post )): ?>
            <?php $prevtitle = isset( $prev_post->post_title ) ? $prev_post->post_title : ''; ?>
            <a href="<?php echo get_permalink($prev_post->ID); ?>" class="next" title="<?php echo wp_strip_all_tags( $prevtitle ); ?>">
              <span class="real-nav-icon icon-right-a"></span>
              <div>
                <h3><?php echo $prev_post->post_title ?></h3>
              </div>
            </a>
          <?php endif ?>
          
        </nav>
        
        
        <div class="real-infos">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?> 
              <header class="animate animated">
                <h1><?php the_title(); ?></h1>
                <p><?php edit_post_link("Éditer l'article", "","", "", "text-link"); ?></p>
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
            <?php else : ?> 
            <h1>Flûte !</h1>
            <p>Désolé, aucun article ne correspond à vos critères.</p>
          <?php endif; ?>

      </section>
      
      <?php get_footer(); ?>

  </body>
</html>