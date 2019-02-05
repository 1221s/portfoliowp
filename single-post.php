<?php  get_header();

/* Here starts posts */
      while ( have_posts() ) : the_post(); ?>

      <div class="postWrapper">
        <h2 class="post-title"> <?php the_title(); ?> </h2>
          <div class="contentWrapper"><?php the_content();?></div>

          <article class="author">This post was written by
            <?php the_author(); ?> on <?php the_date(); ?> </article>

      </div>

      <?php endwhile;

      get_footer();  ?>
