<?php
$title = 'Info';

$nav_home_class = '';
$nav_event_class = '';
$nav_dine_class = '';
$nav_shop_class = '';
$nav_info_class = 'active_page';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Info @ Apple Festival
        </title>
        <link rel="stylesheet" type="text/css" href="/public/styles/site.css">
    </head>

    <body>


    <?php include 'includes/header.php'; ?>
    <div class="middle3">




        <h1>More Information</h1>
        <h2>FAQ</h2>

        <div class="pairs">


            <button class= "accordion" id="accordion1">How much money should I bring?</button>





            <div id="panel1">
                <p>
                    Entry to the event is completely free! The amount of money you should bring is dependent on what, if anything, you wish to purchase at the festival. If you are driving, there is a $5 charge to park at the parking garage (You can find more parking information here ). If you plan to eat at the festival, you may also wish to bring at least $10. Prices of the various baked goods, produce, and crafts vary by vendor. Many of our vendors and their items can be found here.
                    <!--Instructor Provided-->
                </p>
            </div>

        </div>


        <div class="pairs">


            <button class= "accordion" id="accordion2">Can I pay with a credit card?</button>


            <div id="panel2">
                <p>
                    Most of our vendors accept credit cards, however, you should bring some cash in case a shop you are interested in does not accept them.
                    <!--Instructor Provided-->
                </p>
            </div>
        </div>



        <div class="pairs">


            <button class= "accordion" id="accordion3">Can I bring my dog?</button>


            <div id="panel3">

                <p>
                    Bringing a dog is strongly discouraged due to pets not being allowed on the Commons. Additionally, the event will be crowded and may be overwhelming for your furry friend, or it may be difficult to move through the crowds. Registered service animals are permitted.
                    <!--Instructor Provided-->
                </p>
            </div>
        </div>


        <div class="pairs">

            <button class= "accordion" id="accordion4">What should I wear?</button>


            <div id="panel4">
                <p>
                    If you are not familiar with the Ithaca area, it can get quite cold in the fall! Check the weather and bring layers.
                    <!--Instructor Provided-->
                </p>
            </div>
        </div>


        <div class="pairs">

            <button class= "accordion" id="accordion5">When is the best time to attend?</button>



            <div id="panel5">
                <p>
                    If you are looking to avoid the crowds, attending midday Friday is a good idea. However, many attendees find that the crowds on the weekend add to the energy and fun of the festival.
                    <!--Instructor Provided-->
                </p>
            </div>
        </div>



        <div class="pairs">

            <button class= "accordion" id="accordion6"> Will there be alcohol?</button>


            <div id="panel6">


                <p>
                    Some vendors do sell alcohol (such as hard cider), so be sure to bring your ID if you are over 21. Many of these vendors also offer tastings.
                    <!--Instructor Provided-->
                </p>
            </div>
        </div>
    </div>



    <div class="parking">

        <h2> Directions and Parking</h2>
        <p>Tompkins Consolidated Area Transit (TCAT) offers public bus transportation from all over the county. One-way fares are <strong>$1.50 per adult</strong>. Cornell University students can ride without a fare on weekends and after 6pm with their student ID card. Learn more about fares at <a href="https://tcatbus.com/fare-pass-options">TCATBUS</a></p>
        <!--Instructor Provided-->

        <p>
            Residents and visitors can park in the <strong>Seneca, and Cayuga Street garages</strong> and walk to anywhere in Downtown Ithaca. Please note the Green Garage is closed for construction.
            <!--Instructor Provided-->
        </p>
        <p>
            Garage parking is <strong>$1.00 per hour</strong> in the garages. On-street parking is $1.50 per hour during the week until 6pm.
            <!--Instructor Provided-->
        </p>
        <p>
            For additional downtown parking, visit <a href="https://www.cityofithaca.org/243/Parking">Parking</a>
            <!--Instructor Provided-->
        </p>


    </div>

    <hr class="white_hr">

    <form id=request-form name="Apple Festival Survey" method="post" action="/info/confirmation" novalidate>
        <h2> Tell us what you would like to see next year! </h2>

        <div>
            <label for="request-name">Name: </label>
            <input type="text" name="Name" id="request-name" />
        </div>

        <div >
          <label for="request-email">Email: </label>
          <input type="email" name="email" id="request-email" />
        </div>

        <div>
            <label for="request-rating">From a scale from 1-5, how was the Apple Festival?:</label>
            <select id="request-rating" name="request-rating">
                <option value="n/a" label="select"></option>
                <option value="1" label="1"></option>
                <option value="2" label="2"></option>
                <option value="3" label="3"></option>
                <option value="4" label="4"></option>
                <option value="5" label="5"></option>
            </select>
        </div>

        <div>
            <label for="request-description-like">What is something you liked about Apple Festival? </label>
            <textarea id="request-description-like" rows = "1" cols = "80" name = "description">
            </textarea>
        </div>

        <div>
            <label for="request-description-dislike">What is something you didn't liked about Apple Festival? </label>
            <textarea id="request-description-dislike" rows = "1" cols = "80" name = "description2">
            </textarea>
        </div>

        <div>
            <div id="group_head">Join Apple Festival Mailing List?:</div>

            <div>
                <input type="radio" id="radio_Yes" name="YesorNo" value="Yes " />
                <label for="radio_Yes">Yes</label>
            </div>

            <div>
                <input type="radio" id="radio_No" name="YesorNo" value="No" />
                <label for="radio_No">No</label>
            </div>
        </div>

        <div>
        <input id="request-submit" type="submit" value="Submit" />
        </div>



    </form>




    <?php include 'includes/footer.php'; ?>

    <script src="/public/scripts/jquery-3.6.1.js"></script>

    <script src="/public/scripts/accordion.js"></script>


    </body>




</html>
