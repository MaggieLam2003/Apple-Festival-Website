<?php
$title = 'Confirmation';

$nav_home_class = '';
$nav_event_class = '';
$nav_dine_class = '';
$nav_shop_class = '';
$nav_info_class = 'active_page';

$form_Name=$_POST['Name'];
$form_Email=$_POST['email'];
$form_Rating=$_POST['request-rating'];
$form_Like=$_POST['description'];
$form_Dislike=$_POST['description2'];
$form_Mailing=$_POST['YesorNo'];


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



    <div class=align_Center>

    <h3 class="specialheader_design">
        Survey Confirmation
    </h3>

    <p>Thank you for replying to our survey!</p>

    <dl>
      <dt>Name</dt>
      <dd><?php echo htmlspecialchars($form_Name); // untrusted
          ?></dd>

      <dt>Email</dt>
      <dd><?php echo htmlspecialchars($form_Email); // untrusted
          ?></dd>

      <dt>Rating</dt>
      <dd><?php echo htmlspecialchars($form_Rating); // untrusted
          ?></dd>

    <dt>What did you like about Apple festival?</dt>
    <dd><?php echo htmlspecialchars($form_Like); // untrusted
        ?></dd>

    <dt>What did you dislike about Apple festival?</dt>
    <dd><?php echo htmlspecialchars($form_Dislike); // untrusted
        ?></dd>

    <dt>Mailing List</dt>
    <dd><?php echo htmlspecialchars($form_Mailing); // untrusted
        ?></dd>


    </dl>

    </div>

    <?php include 'includes/footer.php'; ?>


    </body>




</html>
