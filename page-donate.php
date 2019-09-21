<?php
get_header();
?>

<div class="row no-gutters">

    <!-- left side spacer -->
    <div class="col-sm-1"></div>

    <div class="col-sm-10">
        <div class="container textblockcolour">
            <div class="row">
                <div class="col-sm-6">
                    <?php
$the_slug = 'thank-you-your-generosity-helps-many';
$args = array(
    'name' => $the_slug,
    'post_type' => 'post',
    'post_status' => 'publish',
    'numberposts' => 1,
);
$my_posts = get_posts($args);
if ($my_posts):

    echo "";
    echo $my_posts[0]->post_content;
    echo "";
endif;
?>

                  <button  class="donate-button" onclick="location.href='http://alcove-b.web.dmitcapstone.ca/?give_forms=212';">Donate Now</button>
                </div>
                <div class="col-sm-6">
                    <?php
$the_slug = 'gifts-of-securities';
$args = array(
    'name' => $the_slug,
    'post_type' => 'post',
    'post_status' => 'publish',
    'numberposts' => 1,
);
$my_posts = get_posts($args);
if ($my_posts):

    echo "";
    echo $my_posts[0]->post_content;
    echo "";
endif;
?>
                </div>
            </div>
            <div class="row no-gutters">
  <div class="col-sm-12 textblockcolour">
    <img src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/03/Alcove_Logo_web_heeart.jpg" class="img-fluid dil" alt="heart">
  </div>
</div>
        </div>

    </div>

    <!-- right side spacer -->
    <div class="col-sm-1"></div>



</div>

<?php
get_footer();
?>