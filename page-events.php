<?php 
get_header();
?>

<div class="row no-gutters">

<!-- left side spacer -->
  <div class="col-sm-1"></div>



  <div class="col-sm-10 textblockcolour extendbottom page-border">
    <div style="margin-left:2%">
  <?php
                $the_slug = 'events';
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

  </div></div>





  <!-- right side spacer -->
  <div class="col-sm-1"></div>
  


</div>

<?php 
get_footer();
?>