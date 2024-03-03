<?php get_header(); ?>

      <section class="home-about" id="about">
        <h1 class="animate animated"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <!-- <p class="animate animated anim-tiny-delay">
          Bonjour et bienvenue sur mon site ! Je suis Olivier STELL, webdesigner et infographiste indépendant vivant et travaillant à Strasbourg. Mon ambition est de simplifier la vie des utilisateurs en concevant des interfaces web intuitives et agréables. <a href="#contact" class="text-link">Contactez moi</a> et travaillons ensemble !
        </p> -->
        <div class="animate animated anim-tiny-delay">
          <p>
            Bonjour, je suis Olivier et ceci est mon portfolio vieillissant.
          </p>
          <p>
            Pendant plus de 10 ans, j'ai eu l'occasion de travailler dans les domaines du design et de la conception, l'intégration, la mise en place de sites WordPress puis en tant que développeur <span lang="EN">front-end</span> pendant plus de 5ans. Désormais acteur de l'accessibilité numérique chez <a href="https://ideance.net/fr/" class="text-link">Ideance</a>, mon bagage me d'être un interlocuteur de choix au sein des projets web auxquels je participe .
          </p>
          <p>
            Passionné des standards <abbr lang="EN" title="HyperText Markup Language">HTML</abbr>, <abbr lang="EN" title="Cascading Style Sheets">CSS</abbr> et <abbr lang="EN" title="JavaScript">JS</abbr>, mais aussi de
            <span lang="EN">Vue.js</span> ou <span lang="EN">TypeScript</span>, vous pouvez suivre certains de mes projets persos sur <a href="https://github.com/olivierstl" class="text-link">mon Github</a>.
          </p>
        </div>
      </section>

      <section class="home-portfolio" id="realisations">
        <header class="showOnScroll animate">
          <h2 class="h1-like">Réalisations</h2>
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
