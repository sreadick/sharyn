<?php
  get_header();

  while(have_posts()) {
    the_post(); ?>

    <?php if ($pagename === '') { ?>
      <div class='section home'>
        <h3 class='title'>Sharyn Leff</h3>
        <div class='flex-container'>
            <img src="<?php echo get_theme_file_uri('/images/freud.jpg'); ?>">
            <div class='text-content'><?php the_content() ?></div>
        </div>
      </div>

      <?php } else if ($pagename === 'areas-of-specialty') { ?>
        <div class='section aos'>
          <h3 class='title'><?php echo the_title(); ?></h3>
          <div class='flex-container'>
            <div class='text-content'><?php the_content() ?></div>
            <img src='<?php echo get_theme_file_uri('/images/RB_book-2_109a.jpg'); ?>'/>
          </div>
        </div>
        
        <?php } else if ($pagename === 'about-me') { ?>
          <div class='section about'>
            <h3 class='title'><?php echo the_title(); ?></h3>
            <div class='flex-container'>
              <img src="<?php echo get_theme_file_uri('/images/sharyn.jpg'); ?>">
              <div class='text-content'><?php the_content() ?></div>
            </div>
          </div>

        <?php } else if ($pagename === 'contact') { 
        $user_info = get_user_by( 'email', 'dev-email@flywheel.local' ); ?>
        <div class='section contact'>
          <h3 class='title'><?php echo the_title(); ?></h3>
          <div class='flex-container'>
            <div class='contact-info'>
              <div>
                <h5>Address</h5>
                <p><?php echo $user_info->street, ', ', $user_info->suite ?></p>
                <p><?php echo $user_info->city, ', ', $user_info->state ?></p>
                <p><?php echo $user_info->zip ?></p>
                <h5>Phone</h5>
                <p><?php echo $user_info->ext_phone ?></p>
                <h5>Email</h5>
                <p><?php echo $user_info->user_email ?></p>
              </div>
              <div>
                <div class='text-content'><?php the_content() ?></div>
              </div>
            </div>
            <div class='image-wrapper'>
              <img src='<?php echo get_theme_file_uri('/images/therapy-office.jpg'); ?>' alt='My Office' />
              <div class='map'>
                <iframe width="100%" height="100%" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=240%20central%20park%20south+(Sharyn%20Leff)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Draw map route</a></iframe>
              </div>
            </div>
          </div>
          <div class='central-park-photo'>
            <img src='<?php echo get_theme_file_uri('/images/central-park.jpg'); ?>' alt='Central Park View' />
          </div>
        </div>

      <?php } else if ($pagename) { ?>
          <div class='section'>
            <h3 class='title'><?php echo the_title(); ?></h3>
            <div class='flex-container'>
              <div class='text-content'><?php the_content() ?></div>
            </div>
          </div>
      <?php }

    }

  get_footer();

?>
