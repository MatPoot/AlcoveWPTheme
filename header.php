<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alcove
 */

?>
<!doctype html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script>
    function getAway() {
        // Get away right now
        window.open("http://weather.com", "_newtab");
        // Replace current site with another benign site
        window.location.replace('http://google.com');
    }

    $(function() {

        $("#get-away").on("click", function(e) {
            window.alert(5 + 6);
            getAway();
        });

        $("#get-away a").on("click", function(e) {
            // allow the link to work
            e.stopPropagation();
        });

        $(document).keyup(function(e) {
            if (e.keyCode == 27) { // escape key
                getAway();
            }
        });

    });
   
    </script>

    <?php wp_head();?>
</head>

<body <?php body_class();?>>

<!-- slide out js test -->


    <div id="page" class="site">




        <header id="masthead" class="site-header"></header>

    </div><!-- .site-branding -->





    <nav class="fixed-top" style=" background-color: #eccfc2;">
        <div class="row no-gutters">
            <div class="col-sm-1"></div>
            <div class="col-sm-4">
          
                <!-- <img
                    src="http://aahmad20.dmitstudent.ca/dmit2025/wordpress/wp-content/uploads/2019/03/alcove-logo-web-transparent.png"
                    alt="logo" class="headerimg"> -->
                <div class="headerimg"><?php the_custom_logo();?></div>

            </div>

            <div class="col-sm-6" style="margin-top:auto;">


                <?php
wp_nav_menu(array(
    'theme_location' => 'menu-1',
    'menu_id' => 'primary-menu',
));
?>



            </div>
            <div class="col-sm-1"><button type="button" class="safeexit" onclick="getAway()">Safe Exit</button></div>
        </div>  
    </nav>




    <!-- #masthead -->

    <div id="content" class="site-content">