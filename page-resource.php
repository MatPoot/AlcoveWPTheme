<?php
get_header();
?>

<div class="row">

    <!-- left side spacer -->
    <div class="col-sm-1"></div>



    <div class="col-sm-10 page-border">
        <div class="row textblockcolour">
            <div class="col-sm-8">

                <?php
$the_slug = 'the-office';
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
            <div class="col-sm-4">

                <div class="row aboutusimageblock"><img
                        src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/04/Gabor_Mate.jpeg"
                        alt="Gabor_Maté" class="img-fluid" ></div>

            </div>
        </div>


        <div class="row textblockcolour">
            <div class="col-sm-8 video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ziqGP0gJ6Ys" 
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="col-sm-4">
                <h5 class="centertext">List of Books</h5>
                <h5 class="centertext">by <span>Gabor Maté</span></h5>
                <div class="row">
                    <div class="col-sm-6"><img
                            src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/02/realm-hungry-ghosts-cover-aug2018.jpg"
                            class="img-fluid"  alt="book2"></div>
                    <div class="col-sm-6"><img
                            src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/02/hold-on-kids-cover-aug2018.jpg"
                            class="img-fluid"  alt="book3"></div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h6>In the Realm of Hungry Ghosts</h6>
                    </div>
                    <div class="col-sm-6">
                        <h6>Hold On to Your Kids</h6>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-sm-6"><img
                            src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/02/body-says-no-cover-aug2018.jpg"
                            class="img-fluid"  alt="book4"></div>
                    <div class="col-sm-6"><img
                            src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/02/41jeG3iEmrL._AC_UL320_SR208,320_%20-%20Copy.jpg"
                            class="img-fluid"  alt="book5"></div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h6>When the Body Says No</h6>
                    </div>
                    <div class="col-sm-6">
                        <h6>Hidden Lives</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="row textblockcolour">
            <div class="col-sm-8">
                <?php
$the_slug = 'addiction-helpline';
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
    </div>





    <div class="col-sm-1"></div>
</div>




<!-- right side spacer -->





<?php
get_footer();
?>