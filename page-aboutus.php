<?php
get_header();
?>

<div class="row">

    <!-- left side spacer -->
    <div class="col-sm-1"></div>



    <div class="col-sm-5">
        <div class="aboutustextblock textblockcolour row textblocktext">
            <div class="textboxposition">
                <?php
$the_slug = 'our-mission';
$args = array(
    'name' => $the_slug,
    'post_type' => 'post',
    'post_status' => 'publish',
    'numberposts' => 1,
);
$my_posts = get_posts($args);
if ($my_posts):
    echo "<h4>";
    echo $my_posts[0]->post_title;
    echo "</h4>";
    echo "";
    echo $my_posts[0]->post_content;
    echo "";
endif;
?>
            </div>
        </div>
        <div class="aboutustextblock blockcolourtwo row textblocktext">
            <div class="textboxposition">
                <?php
$the_slug = 'mission-statement';
$args = array(
    'name' => $the_slug,
    'post_type' => 'post',
    'post_status' => 'publish',
    'numberposts' => 1,
);
$my_posts = get_posts($args);
if ($my_posts):
    echo "<h4>";
    echo $my_posts[0]->post_title;
    echo "</h4>";
    echo "";
    echo $my_posts[0]->post_content;
    echo "";
endif;
?>
            </div>
        </div>
        <div class="aboutustextblock textblockcolour row textblocktext">
            <div class="textboxposition">
                <?php
$the_slug = 'guiding-principle';
$args = array(
    'name' => $the_slug,
    'post_type' => 'post',
    'post_status' => 'publish',
    'numberposts' => 1,
);
$my_posts = get_posts($args);
if ($my_posts):
    echo "<h4>";
    echo $my_posts[0]->post_title;
    echo "</h4>";
    echo "";
    echo $my_posts[0]->post_content;
    echo "";
endif;
?>
            </div>
        </div>
        <div class="aboutusimageblock row">
            <img src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/04/womanchild2.jpg" alt="womanchild2"
                class="img-fluid">
        </div>
    </div>

    <div class="col-sm-5">
        <div class="aboutusimageblock row">
            <img src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/03/womanChild.jpg" alt="womanchild"
                class="img-fluid">
        </div>
        <div class="aboutustextblock blockcolourtwo row textblocktext">


            <div class="textboxposition">

                <?php
$the_slug = 'vision';
$args = array(
    'name' => $the_slug,
    'post_type' => 'post',
    'post_status' => 'publish',
    'numberposts' => 1,
);
$my_posts = get_posts($args);
if ($my_posts):
    echo "<h4>";
    echo $my_posts[0]->post_title;
    echo "</h4>";
    echo "";
    echo $my_posts[0]->post_content;
    echo "";
endif;
?>

            </div>
        </div>

        <div class="aboutustextblock textblockcolour row textblocktext" style="line-height:1;">
            <div class="textboxposition1">

                <?php
$the_slug = 'core-values';
$args = array(
    'name' => $the_slug,
    'post_type' => 'post',
    'post_status' => 'publish',
    'numberposts' => 1,
);
$my_posts = get_posts($args);
if ($my_posts):
    echo "<h3>";
    echo $my_posts[0]->post_title;
    echo "</h3>";
    echo "";
    echo $my_posts[0]->post_content;
    echo "";
endif;
?>
            </div>
        </div>
    </div>
    <div class="col-sm-1">

    </div>


</div>


<!-- right side spacer -->





<?php
get_footer();
?>