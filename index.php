<?php get_header()?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri().'/img/home-bg.jpg'?>')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1><?php bloginfo('title'); ?></h1>
              <span class="subheading"><?php bloginfo('description'); ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php if(have_posts()): ?>
            <?php while(have_posts()): ?>
              <?php the_post();?>
                
              <div class="post-preview">
                <a href="<?php the_permalink(); ?>">
                  <h2 class="post-title">
                    <?php the_title(); ?>
                  </h2>
                </a>
                <p class="post-meta">Postado por
                    <a href="<?php echo get_author_posts_url(the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                    em <?php echo get_the_date()?>
                </p>
              </div>
              <hr>

            <?php endwhile; ?>
          <?php endif; ?>
          
          <!-- Pager -->
          <div class="clearfix">
            <?php next_posts_link('Próximos Posts &rarr;'); ?>
            <?php previous_posts_link('&larr; Posts Anteriores;'); ?>
          </div>
        </div>
      </div>
    </div>

    <hr>

<?php get_footer()?>
