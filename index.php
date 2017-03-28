<?php $file = "index.php";
$modify_time = filemtime($file);
header("Last-Modified: " . gmdate("D, d M Y H:i:s", $modify_time) . " GMT");
?>

<!DOCTYPE html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["place"])) {
            // collect the value
            $title = $_REQUEST["place"];
        }
    }
?>

<html lang="en">

<head>

    <link href=”http://www.justcleanwindowcleaning.com” rel=”canonical” />
    <link rel="alternate" href="http://www.justcleanwindowcleaning.com" hreflang="en-us" />
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Service",
        "provider": [{
          "@type": "Organization",
          "url": "http://justcleanwindowcleaning.com/",
          "name": "Just Clean Window Cleaning",
          "telephone": "+1-618-806-7476",
          "image": "http://www.justcleanwindowcleaning.com/images/logo.png",
          "description": "Home and commercial window washing, hard water stains, indoor and outdoor windows, and window screen washing",
          "areaServed": "Metro East IL, St. Louis, Madison County, St. Clair County, Clinton County",
          "address": [{
              "streetAddress": "1007 Matthew Dr. O'Fallon IL",
              "addressLocality": "<?php if (!empty($title)) { echo $title; } else { echo "O'fallon";} ?>",
              "addressRegion": "IL"
          }],
          "email": "justcleanwindowcleaning@gmail.com"
       	}],
        "serviceType": "interior window cleaning, exterior window cleaning, window screen cleaning, hard water stain removal",
        "isSimilarTo": "house washing, roof washing, pressure cleaning, window replacement",
        "description": "Home window cleaning, commercial window cleaning, Window cleaner, window cleaning, window washer, window cleaning service, window washing service, home window cleaner, residential window cleaning service, residential window washing, residential window washers, residential window cleaning, professional window cleaner, home window washing, outdoor window cleaner, professional commercial window cleaning, exterior window cleaner, commercial window cleaners, exterior window cleaning services, professional window washers, window cleaning business, commercial window washers, home window cleaning, residential window cleaners, all clean windows"
    }
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Home and commercial window cleaning for <?php if (!empty($title)) { echo $title." and surrounding "; } ?>Metro East">
    <meta name="author" content="Just Clean Window Cleaning">

    <title>Just Clean Window Cleaning<?php if (!empty($title)) { echo " - ".$title; } ?></title>
    <!-- Bootstrap and Navigation CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<?php include "header.html" ?>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="images/logo.png" alt="Just Clean Window Cleaning is a professional window cleaning service serving St. Clair County, Madison County, and Clinton County"><br /><br />
                    <h1><b>(618) 806-7476</b></h1>
                    <?php if (!empty($title)) {
                            echo "<p>Proudly serving ".$title." and surrounding Metro East</p>";
                        }
                      else {
                            echo "<p>Proudly serving the Metro East in St. Clair, Madison, and Clinton Counties</p>";
                      }
                    ?>
                    <h2>Amazing Spring Special 2017!!!</h2>
                    <h3><b>Just $159 for up to 20 exterior windows</b></h3>
                    <p>
                    Let us help you get a jump on your spring cleaning!
                    (Storm windows not included. Standard 2 pane windows only.)<br />
                    Schedule before May 31st to take advantage of this offer!</p><br />
                    <p>Clean, streak-free windows help define the curb appeal of a home.<br />
                    It is recommended to have your residential windows washed at least twice a year, but ideally they are cleaned the beginning of each season.</p>
                    <p><a class="btn btn-social btn-facebook" href="https://www.facebook.com/justcleanwindowcleaning/"><span class="fa fa-facebook"></span><strong>Like us on Facebook!</strong></a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About</h1>
                    <h3>Cleaning with Pure Water</h3>
                    <div class="row"> <!-- FIRST ROW -->
                      <div class="col-sm-6">
                        <p align="justify">Just Clean Window Cleaning uses one key ingredient: pure water! Purified water is delivered through a purification system that hooks up straight from your home’s water spigots. This means that your windows are cleaned without chemical additives. There is no residue or buildup on the surface and it leaves windows spot free after drying!</p>
                      </div>
                      <div class="col-sm-6">
                        <p align="justify">Besides spot and streak free windows, this all-in-one system has other benefits! With a specialized pole we can clean the outsides of most homes or businesses from the ground, which means there is less risk of accidents and saves time. It also means that there is no risk of damage to property. There are no ladders or scaffolding that mark walls and windowsills.</p>

                      </div>
                    </div><br />

                    <div class="row"> <!-- SECOND ROW -->
                      <div class="col-sm-4">
                        <i><b>What happens to my appointment in case of rain?</i></b>
                        <p align="justify">It is our policy to hold our work appointments even in the case of rain. Light rain will not affect the cleaning. In the event of heavy rain we will return within one or two days to complete any outside windows that couldn’t be cleaned during the original appointment. Interiors of windows will be completed as scheduled to prevent disruptions to your schedule.</p>
                      </div>
                      <div class="col-sm-4">
                        <i><b>Does rain make my windows dirty?</i></b>
                        <p align="justify">Dirt is what makes your windows dirty, not rain! It is the dust from things like landscapers, tree pollen, car exhaust. Raindrops move the dirt on your windows, and their drying makes it appears as though the rain drops are what is causing your windows to become dirty. Clean windows remain clean after the rain because once the water has dried there will be no dirt left to obscure the view through your windows!</p>
                      </div>
                      <div class="col-sm-4">
                        <i><b>Can windows be cleaned in the winter?</i></b>
                        <p align="justify">Yes! Window cleaning may be even more important during the winter season. Road salt becomes an airborne powder after it has been driven on. It settles on your window just as any other dust would. We follow proper safety guidelines so that your winter servicing is completed safely and to your satisfaction.</p>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Services Offered</h1>
                    <!-- FIXME this section should include
                    all of the TOWNS SERVICED,
                    as well as the cleaning services available. -->
                    <table border="0" align="center">
                      <tr>
                        <th class="header"></th>
                        <th class="header">Basic</th>
                        <th class="header">Deluxe</th>
                        <th class="header">Premium</th>
                      </tr>
                      <tr>
                        <th>Exterior Windows Only</th>
                        <td>x</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th>Interior & Exterior Windows</th>
                        <td></td>
                        <td>x</td>
                        <td>x</td>
                      </tr>
                      <tr>
                        <th>Window Screens Brushed</th>
                        <td></td>
                        <td></td>
                        <td>x</td>
                      </tr>
                      <tr>
                        <th>Window Screens Scrubbed with Soap & Water</th>
                        <td></td>
                        <td></td>
                        <td>x</td>
                      </tr>
                      <tr>
                        <th>Window Frames Wiped Down</th>
                        <td></td>
                        <td>x</td>
                        <td>x</td>
                      </tr>
                      <tr>
                        <th>Window Tracks Wiped Out</th>
                        <td></td>
                        <td></td>
                        <td>x</td>
                      </tr>
                      <tr>
                        <th>Tracks Vacuumed & Wiped Out</th>
                        <td></td>
                        <td></td>
                        <td>x</td>
                      </tr>
                      <tr>
                        <th>24 Hour Rain Guarantee*</th>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                      </tr>
                      <tr>
                        <th>100% Satisfaction Guarantee**</th>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                      </tr>
                    </table>
                    <br />
                    <div class="row">
                      <div class="col-sm-2">
                          <img src="images/guarantee_opt.png" alt="We guarantee your windows to be spot and streak free!">
                      </div>
                      <div class="col-sm-5">
                        <p style="text-align:left;">* It doesn’t matter what the weatherman says. <strong>If it rains within 24 hours after your windows are cleaned and you call the next business day, you will get a free touch-up on the affected windows.</strong> We want your windows to look great rain or shine!</p>
                      </div>
                      <div class="col-sm-5">
                        <p style="text-align:left;">** We guarantee our window cleaning. If you’re not 100% satisfied, we’ll come back and make it right. No questions asked.</p>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Ask us about hard water stain removal!</h3>
                            <p>Hard water stain removal and sealing are not included in our regular service prices. However, the additional cost is quite reasonable and can be added to your regular cleaning on a per-pane basis.</p>
                        </div>
                        <div class="col-sm-6">
                            <img src="images/hardwater1.jpeg" alt="Hard water stain removal is not included in regular service prices, but can be added to a regular cleaning on a per-pane basis.">
                        </div>
                    </div>
                    <br /><br />

                    <h1>Areas Serviced</h1>
                    <p><a href="?place=St.+Clair+County">St. Clair County</a> &bull; <a href="?place=Madison+County">Madison County</a> &bull; <a href="?place=Clinton+County">Clinton County</a> &bull; <a href="?place=Washington+County">Washington County</a> &bull; <a href="?place=Monroe+County">Monroe County</a> &bull; <a href="?place=Randolph+County">Randolph County</a></p>
                    <p><a href="?place=Belleville">Belleville</a> &bull; <a href="?place=Cahokia">Cahokia</a> &bull; <a href="?place=Caseyville">Caseyville</a> &bull; <a href="?place=Collinsville">Collinsville</a> &bull; <a href="?place=Fairview+Heights">Fairview Heights</a> &bull;
                    <a href="?place=Fayetteville">Fayetteville</a> &bull; <a href="?place=Freeburg">Freeburg</a> &bull; <a href="?place=Lebanon">Lebanon</a> &bull; <a href="?place=Lenzburg">Lenzburg</a> &bull;<a href="?place=Marissa">Marissa</a> &bull;
                    <a href="?place=Mascoutah">Mascoutah</a> &bull; <a href="?place=Millstadt">Millstadt</a> &bull; <a href="?place=New+Athens">New Athens</a> &bull; <a href="?place=O'Fallon">O'Fallon</a> &bull; <a href="?place=Scott+Airforce+Base">Scott AFB</a> &bull;
                    <a href="?place=Shiloh">Shiloh</a> &bull; <a href="?place=Smithton">Smithton</a> &bull; <a href="?place=St.+Libory">St. Libory</a> &bull; <a href="?place=Summerfield">Summerfield</a> &bull; <a href="?place=Swansea">Swansea</a> &bull;
                    <a href="?place=Alton">Alton</a> &bull; <a href="?place=Edwardsville">Edwardsville</a> &bull; <a href="?place=Granite+City">Granite City</a> &bull; <a href="?place=Highland">Highland</a> &bull; <a href="?place=Troy">Troy</a> &bull;
                    <a href="?place=Wood+River">Wood River</a> &bull; <a href="?place=Alhambra">Alhambra</a> &bull; <a href="?place=Bethalto">Bethalto</a> &bull; <a href="?place=East+Alton">East Alton</a> &bull; <a href="?place=Glen+Carbon">Glen Carbon</a> &bull;
                    <a href="?place=Godfrey">Godfrey</a> &bull; <a href="?place=Grantfork">Grantfork</a> &bull; <a href="?place=Hamel">Hamel</a> &bull; <a href="?place=Marine">Marine</a> &bull; <a href="?place=Maryville">Maryville</a> &bull;
                    <a href="?place=New+Douglas">New Douglas</a> &bull; <a href="?place=Pontoon+Beach">Pontoon Beach</a> &bull; <a href="?place=Roxana">Roxana</a> &bull; <a href="?place=South+Roxana">South Roxana</a> &bull; <a href="?place=St.+Jacob">St. Jacob</a> &bull;
                    <a href="?place=Breese">Breese</a> &bull; <a href="?place=Carlyle">Carlyle</a> &bull; <a href="?place=Trenton">Trenton</a> &bull; <a href="?place=Albers">Albers</a> &bull; <a href="?place=Aviston">Aviston</a> &bull;
                    <a href="?place=Bartelso">Bartelso</a> &bull; <a href="?place=Beckemeyer">Beckemeyer</a> &bull; <a href="?place=Damiansville">Damiansville</a> &bull; <a href="?place=Germantown">Germantown</a> &bull; <a href="?place=Hoffman">Hoffman</a> &bull;
                    <a href="?place=Keyesport+(Southwestern+Half)">Keyesport (Southwestern half)</a> &bull; <a href="?place=Huey">Huey</a> &bull; <a href="?place=New+Baden">New Baden</a> &bull; <a href="?place=Addieville">Addieville</a> &bull; <a href="?place=Ashely">Ashley</a> &bull;
                    <a href="?place=Du+Bois">Du Bois</a> &bull; <a href="?place=Hoyleton">Hoyleton</a> &bull; <a href="?place=Irvington">Irvington</a> &bull; <a href="?place=Nashville">Nashville</a> &bull; <a href="?place=New+Minden">New Minden</a> &bull;
                    <a href="?place=Oakdale">Oakdale</a> &bull; <a href="?place=Okawville">Okawville</a> &bull; <a href="?place=Radom">Radom</a> &bull; <a href="?place=Richview">Richview</a> &bull; <a href="?place=Venedy">Venedy</a> &bull;
                    <a href="?place=Wamac">Wamac</a> &bull; <a href="?place=Columbia">Columbia</a> &bull; <a href="?place=Waterloo">Waterloo</a> &bull; <a href="?place=Hecker">Hecker</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact us for More Information</h1>
                    <p>Before calling, take count of the windows of your home that need cleaning- this is how we count them here at Just Clean Window Cleaning:<br />
                      <img src="images/windowCount.jpg" alt="In order to give an accurate estimate for your future service, use this guide to count the windows on your home" alt="We guarantee that your windows will be spot and streak free!"></p>
                    <h3>Call us at 618-806-7476</h3>
                    <p>Or, use the link below to send us an email about what kinds of services you are seeking- </p><br />
                    <!-- <link rel="stylesheet" href="http://www.thecustomerfactor.com/css/tiny.css" /> --><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script><script type="text/javascript" src="http://www.thecustomerfactor.com/js/tinybox.js"></script><div id="thanks_div" class="grayBox"><div class="thanks">Thanks for your interest. We will get back to you as soon as we can!</div></div><a href="javascript:void(0)" onClick="TINY.box.show({iframe:'http://www.thecustomerfactor.com/bid.php?id=anVzdGNsZWFu&c=VVM=',boxid:'frameless',width:860,height:550,fixed:false,maskid:'bluemask',maskopacity:40})"> <img src="http://www.thecustomerfactor.com/images/script/checkestimate_blue.png" height="50" width="260" alt="Click here to message us"> </a>
                    <br /><br />
                    <font size="-5">Home window cleaning, commercial window cleaning, Window cleaner, window cleaning, window washer, window cleaning service, window washing service, home window cleaner, residential window cleaning service, residential window washing, residential window washers, residential window cleaning, professional window cleaner, home window washing, outdoor window cleaner, professional commercial window cleaning, exterior window cleaner, commercial window cleaners, exterior window cleaning services, professional window washers, window cleaning business, commercial window washers, home window cleaning, residential window cleaners, all clean windows</font>
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.html" ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- Scrolling Nav JavaScript -->
    <script src="js/scrolling-nav.js"></script>

    <!-- Google analytics -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-93150283-1', 'auto');
    ga('send', 'pageview');

    </script>
</body>

</html>
