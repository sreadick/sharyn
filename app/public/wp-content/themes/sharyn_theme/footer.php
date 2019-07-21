    <?php $user_info = get_user_by( 'email', 'dev-email@flywheel.local' ); ?>

    </div>
    <div class='footer'>
      <div class='flex-container'>
        <div>
          <h4>Address</h4>
          <p><?php echo $user_info->street, ', ', $user_info->suite ?></p>
          <p><?php echo $user_info->city, ', ', $user_info->state, ' ' ,$user_info->zip ?></p>
        </div>
        <div>
          <h4>Contact</h4>
          <p>Phone: <?php echo $user_info->ext_phone ?><p>
          <p>Email: <?php echo $user_info->user_email ?></p>
        </div>
      </div>
      <span class='copywrite'>&copy; Copyright 2019. All Rights Reserved.</span>
    </div>
  </body>
</html>
