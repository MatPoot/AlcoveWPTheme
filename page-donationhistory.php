<?php
get_header();
?>

<div class="row flex-grow-1">

    <!-- left side spacer -->
    <div class="col-sm-1"></div>



    <div class="col-sm-10 textblockcolour fulllength" style="height:100%;">
        <?php
while (have_posts()): the_post();?>
        <div class="entry-content-page">
            <?php the_content();?>
        </div>



        <?php
endwhile;
wp_reset_query();
?>
    </div>





    <!-- right side spacer -->
    <div class="col-sm-1"></div>



</div>

<?php
get_footer();
?>