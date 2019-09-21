  <?php 
  get_header();
  ?>

  <div class="row flex-grow-1">

    <!-- left side spacer -->
    <div class="col-sm-1"></div>



    <div class="col-sm-10 textblockcolour fulllength" style="min-height:80vh;">
      <div class="row">
        <div class="col-sm-8">
          <?php
          $the_slug = 'process';
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
        <div class="col-sm-2">
          <img src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/03/hearthands.jpg" class="img-fluid" alt="hearthands">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <?php
          $the_slug = 'admissions';
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

       
          <button  class="admission-button" onclick="location.href='https://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/04/Application-for-Admission-Alcove-July-2015.pdf';" style="margin-right:4%;">Admission Form</button>
          
          <button  class="admission-button" onclick="location.href='https://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/04/Medical-Physician-forms-2015.pdf';" style="margin-right:4%;">Medical Form</button>
          </div>
      </div>
    </div>




    <!-- right side spacer -->
    <div class="col-sm-1"></div>
    


  </div>

  <?php 
  get_footer();
  ?>