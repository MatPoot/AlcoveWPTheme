<?php
get_header();
?>

<div class="row no-gutters">

    <!-- left side spacer -->
    <div class="col-sm-1"></div>



    <div class="col-sm-10 textblockcolour extendbottom support-companies">
        <?php
$the_slug = 'support';
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

        <div class="row companies">
            <div class="col-sm-3 company align-self-center"><img
                    src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/02/AB-Culture-and-Tourism-Logo.png"
                    class="img-fluid" alt="supporterimage"></div>
            <div class="col-sm-3 company align-self-center"><img
                    src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/02/AHS.png" class="img-fluid" alt="supporterimage">
            </div>
            <div class="col-sm-3 company align-self-center"><img
                    src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/02/alberta%20justice.png"
                    class="img-fluid" alt="supporterimage"></div>
        </div>
        <div class="row companies">
            <div class="col-sm-3"><p>Alberta Culture and Tourism</p></div>
            <div class="col-sm-3"><p>Alberta Health Services</p></div>
            <div class="col-sm-3"><p>Alberta Justice and Solicitor General</p></div>
        </div>
        <br />

        <div class="row companies">
            <div class="col-sm-3 company align-self-center"><img
                    src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/02/Burnet,%20Duckworth%20_%20Palmer%20LLP.jpg"
                    class="img-fluid" alt="supporterimage"></div>
            <div class="col-sm-3 company align-self-center"><img
                    src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/02/calgary%20and%20family.png"
                    class="img-fluid" alt="supporterimage"></div>
            <div class="col-sm-3 company align-self-center"><img
                    src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/02/The%20Calgary%20Foundation.jpg"
                    class="img-fluid" alt="supporterimage"></div>
        </div>
        <div class="row companies">
            <div class="col-sm-3"><p>Burnet, Duckworth and Palmer LLP</p></div>
            <div class="col-sm-3"><p>Calgary and Area</p><p> Child and Family Services Authority</p></div>
            <div class="col-sm-3"><p>Calgary Foundation</p></div>
        </div>
        <br />

        <div class="row companies">
            <div class="col-sm-3 company align-self-center"><img
                    src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/02/Calgary_Food_Bank_Logo_30_Years.JPEG.jpg"
                    class="img-fluid" alt="supporterimage"></div>
            <div class="col-sm-3 company align-self-center"><img
                    src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/02/AB%20ministry%20of%20community.png"
                    class="img-fluid" alt="supporterimage"></div>
            <div class="col-sm-3 company align-self-center"><img
                    src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/02/nexen.png" class="img-fluid" alt="supporterimage">
            </div>
        </div>
        <div class="row companies">
            <div class="col-sm-3"><p>Calgary Inter-Faith Food Bank</p></div>
            <div class="col-sm-3"><p>Alberta Ministry of Community and Social Services</p></div>
            <div class="col-sm-3"><p>Nexen</p></div>
        </div>
        <br />

        <div class="row companies">
            <div class="col-sm-3 company align-self-center"><img
                    src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/02/Norrep%20Foundation.jpg"
                    class="img-fluid" alt="supporterimage"></div>
            <div class="col-sm-3 company align-self-center"><img
                    src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/02/peanut%20butter%20society.jpg"
                    class="img-fluid" alt="supporterimage"></div>
            <div class="col-sm-3 company align-self-center"><img
                    src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/02/Radius_Creative.jpg"
                    class="img-fluid" alt="supporterimage"></div>
        </div>
        <div class="row companies">
            <div class="col-sm-3"><p>Norep Foundation</p></div>
            <div class="col-sm-3"><p>Peanut Butter Classic Society</p></div>
            <div class="col-sm-3"><p>Radius Creative</p></div>
        </div>
        <br />

        <div class="row companies">
            <div class="col-sm-3 company align-self-center"><img
                    src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/02/rotary%20club.png"
                    class="img-fluid" alt="supporterimage"></div>
            <div class="col-sm-3 company align-self-center"><img
                    src="http://alcove-b.web.dmitcapstone.ca/wp-content/uploads/2019/02/shane%20homes%20v2.jpg"
                    class="img-fluid" alt="supporterimage"></div>
            <div class="col-sm-3">
                <h5>Other Supporters</h5>
                <p>CIBC</p>
                <p>Community Donors</p>
                <h5>Honorary Patrons</h5>
                <p>Hon. Heather Forsyth</p>
                <p>Mrs. Nomi Whalen</p>
                <p>Tom & Alison Jackson</p>
            </div>
        </div>
        <div class="row companies align-self-center">
            <div class="col-sm-3"><p>The Rotary Club of Calgary Heritage Park<br /> The Rotary Club of Calgary South</p></div>
            <div class="col-sm-3"><p>Shane Homes</p></div>
            <div class="col-sm-3"></div>
        </div>
    </div>





    <!-- right side spacer -->
    <div class="col-sm-1"></div>



</div>

<?php
get_footer();
?>