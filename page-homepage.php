<?php
get_header();

?>

<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <div class="row">

            <div class="col-sm-12"><img class="mainimage"
                    src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/03/main.jpg" alt="main"></div>


        </div>

        <div class="row centertext textblockcolour greyborderrounded no-gutters">

            <div class="col-sm-12" style="margin-top:1.5%;margin-bottom:1.5%;">
                <h3>Admission/Program Enquiries: 403-984-2707</h3>
            </div>


        </div>




        <div class="row no-gutters">
            <div class="col-sm-4 centertext " style="margin-top:2%" >

            <a href="http://alcove-b.web.dmitcapstone.ca/?page_id=161" style="text-decoration:none;">
                <div class="card" style="width:100%;">
                    <img class="card-img-top"
                        src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/04/womanchildBW.jpg"
                        alt="Card image cap">
                    <div class="card-body borderroundboxes textblockcolour">
                        <h3>Donate</h3>
                    </div>
                </div></a>
            </div>
            <div class="col-sm-4"> <img src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/04/Alcove_Logo_web_heart_main.jpg" class="img-fluid dil" style="margin-top:22%;" alt="heart"></div>
            <div class="col-sm-4 centertext" style="margin-top:2%">
               
            <a href="http://alcove-b.web.dmitcapstone.ca/?page_id=77" style="text-decoration:none;">
                <div class="card" style="width:100%;">
                    <img class="card-img-top"
                        src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/04/BWwoman.jpg"
                        alt="Card image cap">
                    <div class="card-body borderroundboxes textblockcolour">
                    <h3>Admission</h3>
                    </div>
                </div></a>
            </div>
        </div>

        <div class="row centertext altcolour no-gutters" style="margin-top:2%; margin-bottom:2%;">

            <div class="col-sm-12 textblockcolour" style="padding-top:1%;padding-bottom:1%;">

                <?php
$the_slug = 'ourmission';
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


            </div>


        </div>

        <div class="row centertext no-gutters eq-height textblockcolour">
            <div class="col-sm-4 align-self-center" style="">

                <?php
$the_slug = 'resources';
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

                <button  class="btn btn-default bigbutton" onclick="location.href='http://alcove-b.web.dmitcapstone.ca/?page_id=196';">Read More</button>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width:100%;">
                    <img class="card-img-top"
                        src=" http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/03/handHolding.jpg"
                        alt="Card image cap">

                </div>


            </div>
            <div class="col-sm-4 align-self-center">


                <?php
$the_slug = 'contribute';
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
  <button  class="btn btn-default bigbutton" onclick="location.href='http://alcove-b.web.dmitcapstone.ca/?page_id=88';">Read More</button>

            </div>
        </div>

    </div>
    <div class="col-sm-1">

    </div>



</div>

<?php
get_footer();

?>