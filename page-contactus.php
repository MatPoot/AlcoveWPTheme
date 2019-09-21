<?php 
get_header();
?>

<div class="row no-gutters">

  <!-- left side spacer -->
  <div class="col-sm-1"></div>

  <div class="col-sm-6 textblockcolour movetextright">
    <?php
      $the_slug = 'Contact';
      $args = array(
        'name'        => $the_slug,
        'post_type'   => 'post',
        'post_status' => 'publish',
        'numberposts' => 1
      );
      $my_posts = get_posts($args);
      if( $my_posts ) :

        echo "";
        echo $my_posts[0]->post_content;
        echo "";
      endif;
      ?>
    <div style="margin-top:2%;margin-left:2%;">
      <?php
      while (have_posts()): the_post();?>
      <div class="entry-content-page">
        <?php the_content();?>
      </div>



      <?php
    endwhile;
    wp_reset_query();
    ?>


  </div></div>
  <div class="col-sm-4 textblockcolour aboutusimageblock">
    <div style="margin-left:2%;">
      <?php
      $the_slug = 'admission-program';
      $args = array(
        'name'        => $the_slug,
        'post_type'   => 'post',
        'post_status' => 'publish',
        'numberposts' => 1
      );
      $my_posts = get_posts($args);
      if( $my_posts ) :

        echo "";
        echo $my_posts[0]->post_content;
        echo "";
      endif;
      ?>
    </div>
  </div>



  <!-- right side spacer -->
  <div class="col-sm-1"></div>
</div>
<div class="row no-gutters">
  <div class="col-sm-1"></div>
  <div class="col-sm-10 textblockcolour">
    <img src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/03/Alcove_Logo_web_heeart.jpg" class="img-fluid dil" alt="heart">
  </div>
  <div class="col-sm-1"></div>
  <br><br><br>
</div>
<div class="row no-gutters" >
  <div class="col-sm-1"></div>
  <div class="col-sm-10 contact-bottom">
    <p>“When I first came to Alcove I was a very broken, shattered and shameful woman. I was terrified, lonely and scared. The staff here were genuine, supportive and compassionate. I felt at home during my first time in the program. Today I am clean and sober, I have my own apartment, and work full time, all thanks to the Alcove program and staff"</p>
    <p>Kim, Former client</p>

  </div>
  <div class="col-sm-1"></div>
</div>

<?php 
get_footer();
?>