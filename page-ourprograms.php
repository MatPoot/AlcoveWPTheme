<?php 
get_header();
?>

<div class="row">

<!-- left side spacer -->
  <div class="col-sm-1"></div>



  <div class="col-sm-10">
<div class="row textblockcolour">
  <div class="textboxposition1">
<?php
                $the_slug = 'community-impact';
                $args = array(
                'name'        => $the_slug,
                'post_type'   => 'post',
                'post_status' => 'publish',
                'numberposts' => 1
                );
                $my_posts = get_posts($args);
                if( $my_posts ) :
                    echo "<h4>";
                echo $my_posts[0]->post_title;
                echo "</h4>";
              echo "";
                echo $my_posts[0]->post_content;
                echo "";
                endif;
                ?>
</div></div>
<div class="row textblockcolouralt">
  <div class="textboxposition1">
<?php
                $the_slug = 'programs-offered';
                $args = array(
                'name'        => $the_slug,
                'post_type'   => 'post',
                'post_status' => 'publish',
                'numberposts' => 1
                );
                $my_posts = get_posts($args);
                if( $my_posts ) :
                    echo "<h4>";
                echo $my_posts[0]->post_title;
                echo "</h4>";
              echo "";
                echo $my_posts[0]->post_content;
                echo "";
                endif;
                ?>
</div></div>


<div class="row row-eq-height">

<div class="col-sm-8">
<div class="row textblockcolour">
  <div class="textboxposition1">

<?php
                $the_slug = 'individual-program';
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
<div class="row textblockcolouralt">
  <div class="textboxposition1">
<?php
                $the_slug = 'mothers-and-children-program';
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
                ?></div>
</div></div>
<div class="col-sm-4">
<div class="row">
  <div class="textboxposition1">
<?php
                $the_slug = 'quote';
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
                ?></div></div>
<div class="row aboutusimageblock"><img src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/04/womanchild3.jpg" alt="womanchild3" class="img-fluid"></div>
</div>

</div>

  </div>
  




  <!-- right side spacer -->
  <div class="col-sm-1"></div>
  


</div>

<?php 
get_footer();
?>