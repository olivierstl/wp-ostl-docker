<?php get_header(); ?>

      <section class="home-about" id="about">
        <h1 class="animate animated"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <p class="animate animated anim-tiny-delay">
          Bonjour et bienvenue sur mon site ! Je suis Olivier STELL, webdesigner et infographiste indépendant vivant et travaillant à Strasbourg. Mon ambition est de simplifier la vie des utilisateurs en concevant des interfaces web intuitives et agréables. <a href="#contact" class="text-link">Contactez moi</a> et travaillons ensemble !
        </p>
      </section>
      
      <section class="home-portfolio" id="realisations">
        <header class="showOnScroll animate">
          <h1>Réalisations</h1>
          <p>Voici une petite sélection de mes derniers projets.</p>
        </header>
        
        <div class="list-real mbl">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?> 
              <figure class="real-bloc post showOnScroll animate" id="post-<?php the_ID(); ?>">
                <div class="img-container">
                  <?php the_post_thumbnail('full'); ?>
                </div>
                <figcaption>
                  <?php $title = isset( $post->post_title ) ? $post->post_title : ''; ?>
                  <h2><?php the_title(); ?></h2>
                  <p class="tags">
                  <?php
                    $posttags = get_the_tags();
                    if ($posttags) {
                      foreach($posttags as $tag) {
                        echo '<b>#' .$tag->name. '</b> '; 
                      }
                    }
                  ?>
                  </p>
                  <a href="<?php the_permalink(); ?>" class="more text-link" title="<?php echo wp_strip_all_tags( $title ); ?>">Voir en détails &#8594;</a>
                </figcaption>
              </figure>
            <?php endwhile; ?>
            <?php else : ?> 
            <h2>Oooopppsss...</h2> 
            <p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p>
          <?php endif; ?>
        </div>

      </section>
      
      <?php get_footer(); ?>

  </body>
</html>