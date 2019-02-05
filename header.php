<html>
<head>

  <!-- general stylesheets -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/single-post-style.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display|Roboto"
      rel="stylesheet">

</head>
<!-- Here starts the header -->
  <header>
    <div class="headerContentWrapper">
        <div class="blogHeader"> <h1> <?php echo get_bloginfo( 'name' ); ?> </h1> </div>
        <h1> <?php echo get_bloginfo( 'description' ); ?>

          <div class="navigationMenu">
            <?php wp_nav_menu( array('theme_location' => 'main_menu' ) ); ?>
          </div>

    </div>

  </header>

  <body>
