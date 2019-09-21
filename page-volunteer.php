<?php 
get_header();
?>

<div class="row no-gutters">

<!-- left side spacer -->
  <div class="col-sm-1"></div>



  <div class="col-sm-6 textblockcolour">
    <div style="margin-top:2%;margin-left:2%;">
  <?php
                $the_slug = 'volunteer';
                $args = array(
                'name'        => $the_slug,
                'post_type'   => 'post',
                'post_status' => 'publish',
                'numberposts' => 1
                );
                $my_posts = get_posts($args);
                if( $my_posts ) :
                    echo "<h3>";
                echo $my_posts[0]->post_title;
                echo "</h3>";
              echo "";
                echo $my_posts[0]->post_content;
                echo "";
                endif;
                ?>

  </div></div>
  <div class="col-sm-4 textblockcolour aboutusimageblock">
  <img src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/03/woman.jpg" alt="houseperson" class="img-fluid"> 
  </div>




  <!-- right side spacer -->
  <div class="col-sm-1"></div>
  


</div>

<?php 
get_footer();
?>