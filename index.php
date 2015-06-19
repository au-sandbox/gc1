<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<title>GC1</title>
    <meta name="description" content="TODO">
    <meta name="author" content="mfs">
    <link rel="icon" href="assets/img/dist/ico/favicon.ico">

    <!-- Bootstrap core CSS -->
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- TODO > Remove -->
	<link href='http://fonts.googleapis.com/css?family=Days+One' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="assets/css/ezbootstrapsandbox.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <?php

  /**
   * Class mystdClass
   *
   * ref: https://www.drupal.org/node/215375
   */
  class mystdClass
  {
      public static function __set_state(array $a) {
          $v = var_export($a, TRUE);
          return $v;
      }
  }

  $arr_faux_data = array (
      'theme_options' => mystdClass::__set_state(array(
              'phone' => '800.822.5950 | 530.541.6655',
              'address' => 'One Lake Parkway South Lake Tahoe, California 96150',
              'booking_link' => 'https://booking.ihotelier.com/istay/istay.jsp?hotelid=4506',
              'specials_link' => 'http://fsr.gcomwebdev.com/south-lake-tahoe-hotel-deals-packages',
              'mobile_location_link' => '/location',
              'email_form' => '1',
              'facebook_url' => 'https://www.facebook.com/ForestSuitesResort',
              'twitter_url' => 'https://twitter.com/ForestSuites',
              'trip_advisor' => 'http://www.tripadvisor.com/Hotel_Review-g1798615-d218938-Reviews-or270-Forest_Suites_Resort_at_Heavenly_Village-South_Lake_Tahoe_Lake_Tahoe_California_.html',
              'accommodations_image' => 'http://fsr.gcomwebdev.com/wp-content/uploads/2014/07/accom-green-image.jpg',
              'accommodations_link' => 'http://fsr.gcomwebdev.com/south-lake-tahoe-accommodations/',
              'accommodations_title' => 'Accommodations',
              'accommodations_content_title' => 'Experience Everything Lake Tahoe has to offer, from one location.',
              'accommodations_content' => '<p>Nestled in an intimate alpine environment located less than 100 yards away from Heavenly Ski Gondola and Heavenly Village. All of our oversized South Lake Tahoe resort suites sleep 4 to 6 adults. We are a few minute walk to the casinos, and a few blocks to the crystal clear waters of Lake Tahoe.</p>
<p>Our Resort Hotel in South Lake Tahoe has been family owned and professionally run for over 40 years. We take pride in treating our guests as family. From our resort, Heavenly Village, the beaches of Lake Tahoe, and South Lake Tahoe casinos are all within walking distance.</p>',
              'logo_title' => 'One Location for all your Tahoe Activities',
              'logo_content' => '<p>Experience adventure, events, or the many attractions that make Forest Suites Resort the only location for your South Lake Tahoe Stay.<p>',
              'logo_link_text' => 'View Events',
              'logo_link' => 'http://fsr.gcomwebdev.com/events/',
              'pop_up_image' => '',
              'pop_up_link' => '',
              'pop_up_status' => '',
              'events_header_image' => 'http://fsr.gcomwebdev.com/wp-content/uploads/2014/07/hero-events1.jpg',
          )),
      'pop_up' =>
          array (
              'use_pop_up' => false,
          ),
      'post_meta' =>
          array (
              '_yoast_wpseo_linkdex' => '0',
              '_edit_last' => '1',
              '_edit_lock' => '1412953168:1',
              '_wp_page_template' => 'templates/specials.php',
              'cobalt_theme_textdomain_content_top_title' => 'Forest Suites Packages and Deals',
              'cobalt_theme_textdomain_content_gallery' => 'a:1:{i:0;s:70:"http://fsr.gcomwebdev.com/wp-content/uploads/2014/07/hero-summer22.jpg";}',
              '_yoast_wpseo_focuskw' => '',
              '_yoast_wpseo_title' => 'South Lake Tahoe Hotel Deals at Forest Suites Resort',
              '_yoast_wpseo_metadesc' => 'Official site of the Forest Suites Resort. Our South Lake Tahoe hotel is nestled in intimate alpine settings steps from year-round South Shore activities.',
              '_yoast_wpseo_meta-robots-noindex' => '0',
              '_yoast_wpseo_meta-robots-nofollow' => '0',
              '_yoast_wpseo_meta-robots-adv' => 'none',
              '_yoast_wpseo_canonical' => '',
              '_yoast_wpseo_redirect' => '',
          ),
      'post_id' => 380,
      'top_title' => 'Forest Suites Packages and Deals',
      'content' => '<p>When you stay at Forest Suites Resort and book direct you get our best available summer season specials and discounts. Whether you are looking for a family getaway or a serious Lake Tahoe adventure, these exclusive packages were built for you!</p>
',
      'header_slider' =>
          array (
              0 =>
                  array (
                      'image' => 'http://fsr.gcomwebdev.com/wp-content/uploads/2014/07/hero-summer22.jpg',
                      'title' => 'hero-summer2-',
                      'excerpt' => '',
                      'alt' => NULL,
                  ),
          ),
      'specials' =>
          array (
              0 =>
                  array (
                      'title' => 'Family Fun Package',
                      'price' => '$223',
                      'booking_link' => 'https://bookings.ihotelier.com/bookings.jsp?HotelID=4506&ProdID=556691&killcookie=1&LanguageID=1',
                      'content' => '<p>Forest Suites Resort knows how important family is and what a relief for parents when you can book a hotel and not worry about setting up some activities before you arrive. When you book a 2 bedroom suite for 4 consecutive nights you will receive the following:</p>
<ul>
<li>Mini-golf in Heavenly Village for 4</li>
<li>One Large Pizza of your choice and 4 sodas delivered to your room 1 night</li>
<li>One brand new board game delivered to your room</li>
<li>A pony ride at Forest Suites for 2 children</li>
<li>Pool Noodles for the pool</li>
</ul>
<p>Pricing starts at $223/night. Package 1st stay date is May 30th and expires September 12th, 2014</p>
',
                      'anchor' => 'family-fun-package',
                      'gallery_small' =>
                          array (
                              0 =>
                                  array (
                                      'image' => 'http://fsr.gcomwebdev.com/wp-content/uploads/2014/07/family_photo-2.jpg',
                                      'title' => 'family_photo--2',
                                      'excerpt' => '',
                                      'alt' => NULL,
                                  ),
                          ),
                      'gallery_large' =>
                          array (
                              0 =>
                                  array (
                                      'image' => 'http://fsr.gcomwebdev.com/wp-content/uploads/2014/07/family_photo-2.jpg',
                                      'title' => 'family_photo--2',
                                      'excerpt' => '',
                                      'alt' => NULL,
                                  ),
                          ),
                  ),
              1 =>
                  array (
                      'title' => 'Ski for Free Package',
                      'price' => '',
                      'booking_link' => '',
                      'content' => '<p>Sorry, No Description Given</p>',
                      'anchor' => 'ski-for-free-package',
                      'gallery_small' => false,
                      'gallery_large' => false,
                  ),
              2 =>
                  array (
                      'title' => 'Family Lake Adventure',
                      'price' => '$159',
                      'booking_link' => 'https://bookings.ihotelier.com/Forest-Suites-Resort/bookings.jsp?LanguageID=1&HotelID=4506&killcookie=1&ProdID=555927',
                      'content' => '<p>Stay with us 4 consecutive nights this summer and experience Lake Tahoe&#8217;s wide variety of activities.You can tour on a bike around South Lake as you explore our beautiful area. You will also have 4 passes to mini-golf, &amp; a choice of kayaking or paddleboarding for 1 hour for up to 4 people. Must stay in a 1 or 2 bedroom suite.</p>
<ul>
<li>1/2 day bike rental for up to 4</li>
<li>1 round of mini-golf for up to 4 in Heavenly Village</li>
<li>Choose 1 of 2 options: (1 hour kayaking or 1 hour paddleboarding for up to 4)</li>
</ul>
<p>Pricing starts at $159/night. Package 1st date is May 30th and expires September 12th, 2014</p>
',
                      'anchor' => 'family-lake-adventure',
                      'gallery_small' =>
                          array (
                              0 =>
                                  array (
                                      'image' => 'http://fsr.gcomwebdev.com/wp-content/uploads/2014/07/Kayak1-455x331.jpg',
                                      'title' => 'Kayak-',
                                      'excerpt' => '',
                                      'alt' => NULL,
                                  ),
                          ),
                      'gallery_large' =>
                          array (
                              0 =>
                                  array (
                                      'image' => 'http://fsr.gcomwebdev.com/wp-content/uploads/2014/07/Kayak1.jpg',
                                      'title' => 'Kayak-',
                                      'excerpt' => '',
                                      'alt' => NULL,
                                  ),
                          ),
                  ),
              3 =>
                  array (
                      'title' => 'Summer Family Stay Package',
                      'price' => '$127',
                      'booking_link' => 'https://bookings.ihotelier.com/bookings.jsp?HotelID=4506&ProdID=555926&killcookie=1&LanguageID=1',
                      'content' => '<p>Forest Suites Resort is giving back to our family and friends this year with 1 FREE additional night when you stay for 4 consecutive nights. We know you drove many miles or even flew across country to get here and many times you lose an entire day of traveling so 1 night is on us. Forest Suites Resort wants to pay you for that travel time. Must stay in a 1 or 2 bedroom suite.</p>
<p>Pricing starts at $127/night.</p>
',
                      'anchor' => 'spring-and-summer-family-stay-package',
                      'gallery_small' =>
                          array (
                              0 =>
                                  array (
                                      'image' => 'http://fsr.gcomwebdev.com/wp-content/uploads/2014/07/family-daughter-2.jpg',
                                      'title' => 'family-daught-er-2',
                                      'excerpt' => '',
                                      'alt' => NULL,
                                  ),
                          ),
                      'gallery_large' =>
                          array (
                              0 =>
                                  array (
                                      'image' => 'http://fsr.gcomwebdev.com/wp-content/uploads/2014/07/family-daughter-2.jpg',
                                      'title' => 'family-daught-er-2',
                                      'excerpt' => '',
                                      'alt' => NULL,
                                  ),
                          ),
                  ),
              4 =>
                  array (
                      'title' => '"Sierra-at-Tahoe" Package',
                      'price' => '',
                      'booking_link' => 'https://bookings.ihotelier.com/bookings.jsp?HotelID=4506&ProdID=562068&killcookie=1&LanguageID=1',
                      'content' => '<div>Stay with us 4<strong> </strong><strong>consecutive nights</strong><strong> </strong>&amp; receive 2 resort lift tickets to Sierra-at-Tahoe. This incredible offer is available from 12/19/14 to 4/15/15. Relax in one of our 1 or 2 bedroom suites after a long day on the slopes.</div>
<ul>
<li><strong><em><strong>2</strong><strong> </strong><strong>Free </strong>&#8220;Sierra-at-Tahoe&#8221; lift tickets</em></strong><strong> </strong>valid any day</li>
</ul>
',
                      'anchor' => 'sierra-at-tahoe-package',
                      'gallery_small' =>
                          array (
                              0 =>
                                  array (
                                      'image' => 'http://fsr.gcomwebdev.com/wp-content/uploads/2014/07/7005F-455x336.jpg',
                                      'title' => '7005F-',
                                      'excerpt' => '',
                                      'alt' => NULL,
                                  ),
                          ),
                      'gallery_large' =>
                          array (
                              0 =>
                                  array (
                                      'image' => 'http://fsr.gcomwebdev.com/wp-content/uploads/2014/07/7005F.jpg',
                                      'title' => '7005F-',
                                      'excerpt' => '',
                                      'alt' => NULL,
                                  ),
                          ),
                  ),
              5 =>
                  array (
                      'title' => 'Family Stay-a-while Package',
                      'price' => '',
                      'booking_link' => 'https://bookings.ihotelier.com/bookings.jsp?HotelID=4506&ProdID=563966&killcookie=1&LanguageID=1',
                      'content' => '<p>Stay at the Forest Suites Resort this ski season and receive <strong><em>1 FREE night on us</em></strong>! We know some of you are traveling across the world, some are flying from across the country and some are driving from local areas but our way to give back to you and your family is rewarding you a FREE night for your travel time. We appreciate you and your family spending your ski vacation with us. Relax in a 2 bedroom suite after a long day on the slopes and playing in the snow. Valid from 12/19/14 to 4/15/15</p>
',
                      'anchor' => 'family-stay-a-while-package',
                      'gallery_small' =>
                          array (
                              0 =>
                                  array (
                                      'image' => 'http://fsr.gcomwebdev.com/wp-content/uploads/2014/07/7013-455x336.jpg',
                                      'title' => '7013-',
                                      'excerpt' => '',
                                      'alt' => NULL,
                                  ),
                          ),
                      'gallery_large' =>
                          array (
                              0 =>
                                  array (
                                      'image' => 'http://fsr.gcomwebdev.com/wp-content/uploads/2014/07/7013.jpg',
                                      'title' => '7013-',
                                      'excerpt' => '',
                                      'alt' => NULL,
                                  ),
                          ),
                  ),
              6 =>
                  array (
                      'title' => 'Heavenly\'s EPIC Package',
                      'price' => '??',
                      'booking_link' => 'https://bookings.ihotelier.com/bookings.jsp?HotelID=4506&ProdID=562067&killcookie=1&LanguageID=1',
                      'content' => '<p>Stay with us 5 consecutive nights &#038; receive 2 FREE Heavenly Resort lift tickets with your reservation. This incredible offer is available from 12/19/14 to 4/15/15.  Relax in our 1 or 2 bedroom suites after a long day on the slopes. </p>
<ul>
<li>2 FREE &#8220;Heavenly&#8221; or &#8220;Northstar&#8221; lift tickets valid any day of the ski season</li>
</ul>
',
                      'anchor' => 'heavenlys-epic-package',
                      'gallery_small' =>
                          array (
                              0 =>
                                  array (
                                      'image' => 'http://fsr.gcomwebdev.com/wp-content/uploads/2014/07/6042F-455x336.jpg',
                                      'title' => '6042F-',
                                      'excerpt' => '',
                                      'alt' => NULL,
                                  ),
                          ),
                      'gallery_large' =>
                          array (
                              0 =>
                                  array (
                                      'image' => 'http://fsr.gcomwebdev.com/wp-content/uploads/2014/07/6042F.jpg',
                                      'title' => '6042F-',
                                      'excerpt' => '',
                                      'alt' => NULL,
                                  ),
                          ),
                  ),
              7 =>
                  array (
                      'title' => 'Sightseeing in Lake Tahoe',
                      'price' => '',
                      'booking_link' => 'https://bookings.ihotelier.com/bookings.jsp?HotelID=4506&ProdID=556692&killcookie=1&LanguageID=1',
                      'content' => '<p>Forest Suites Resort has developed a Lake Tahoe sightseeing package when you stay at least 3 nights in a 1 or 2 bedroom suite. Included are tickets to some of the major attractions of Lake Tahoe. You will receive 2 tickets on the delightful 2 1/2hr sightseeing cruise where the famous paddlewheelers cruise over to Emerald Bay and back. Also, you will receive 2 gondola tickets where you will leave Heavenly Village at 6000 feet and arrive at the observation deck at the top of Heavenly which is over 9000 feet. Truly a sight to see! Must stay in a 1 or 2 bedroom suite.</p>
<ul>
<li>Sightseeing for 2 1/2 hr. Cruise Tickets on board the Tahoe Queen on Lake Tahoe</li>
<li>Sightseeing Gondola Tickets to the top of Heavenly Observation Deck at (9000 feet) for 2</li>
</ul>
<p><strong>Package 1st stay date is June 13th and expires September 1st, 2014</strong> </p>
',
                      'anchor' => 'sightseeing-in-lake-tahoe',
                      'gallery_small' =>
                          array (
                              0 =>
                                  array (
                                      'image' => 'http://fsr.gcomwebdev.com/wp-content/uploads/2014/07/sightseeing-450-331.jpg',
                                      'title' => 'sightseeing-4-50-331',
                                      'excerpt' => '',
                                      'alt' => NULL,
                                  ),
                          ),
                      'gallery_large' =>
                          array (
                              0 =>
                                  array (
                                      'image' => 'http://fsr.gcomwebdev.com/wp-content/uploads/2014/07/sightseeing-450-331.jpg',
                                      'title' => 'sightseeing-4-50-331',
                                      'excerpt' => '',
                                      'alt' => NULL,
                                  ),
                          ),
                  ),
          ),
  );


  echo '<div class="container">';

  echo '<div class="intro">';
  echo '<h1>CG1</h1>';
  echo '</div>';

  echo '<div class="row">';
  echo '<h3>Total # of Specials: ' . count($arr_faux_data['specials']) . '</h3>';
  echo '<div>';
  echo '<div class="row">';


  echo '<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">';
    echo '<div class="panel-wrap col-md-3">';

         foreach ($arr_faux_data['specials'] as $int_index => $arr_special){
             ?>

          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading-<?php echo $int_index ?>">
              <h4 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $int_index ?>" aria-expanded="true" aria-controls="collapseOne">
                      <?php

                      echo $arr_special['title'];
                      ?>
                  </a>
              </h4>
          </div>
          </div>

          <?php
          }
                echo '</div>';
                echo '<div class="col-md-9">';

  echo '<div id="collapseZero" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingZero">';
  echo '<div class="panel-body">';
  echo 'TODO - Something else from data file perhaps?';
  echo '</div>';
  echo '</div>';

        foreach ($arr_faux_data['specials'] as $int_index => $arr_special) {
            ?>
            <div id="collapse-<?php echo $int_index ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $int_index ?>">
                <div class="panel-body">
                   <div class="cg1-content"><?php echo $arr_special['content']; ?></div>
                    <?php if ( ! empty($arr_special['price']) ) { ?>
                    <div class="cg1-price">Price: <?php echo $arr_special['price']; ?></div>
                    <?php } ?>
                        <div class="cg1-bookline-link"><a href="<?php echo $arr_special['booking_link']; ?>">Book Now</a></div>
                </div>
            </div>

        <?php
        }
  ?>

      </div>
  </div>
  <?php
  echo '</div>';

  echo '</div>';

    echo '</div><!-- /.container -->';
?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

  <script>
      $('#accordion').on('show.bs.collapse', function () {
          $('.panel-collapse.collapse.in').removeClass('in');
      });

      $('#accordion').on('hidden.bs.collapse', function () {
        //  alert($('.panel-collapse.collapse.in').length);
          $('#collapseZero').addClass('in');
          // do something…
      })

      $('.panel-wrap a').on('click', function(e){
          $('.active').removeClass('active');
          $(this).parents('.panel-heading').addClass('active');
      });
  </script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
