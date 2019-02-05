<?php  get_header();  ?>


<!-- HERE starts posts -->
      <?php while ( have_posts() ) : the_post(); ?>

      <div class="postWrapper">
        <h2 class="post-title"> <?php the_title(); ?> </h2>
          <div class="contentWrapper"><?php the_content();?></div>
          <p>Author:  <?php the_author(); ?></p>
          <a class="readMore" href="<?php the_permalink() ?>">Read more</a>
      </div>

      <?php endwhile; ?>

<?php  get_footer();  ?>
