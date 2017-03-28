<?php $file = "index.php";
$modify_time = filemtime($file);
header("Last-Modified: " . gmdate("D, d M Y H:i:s", $modify_time) . " GMT");
?>

<!DOCTYPE html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["place"])) {]
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
                            echo "<p>Proudly serving ".$title." and surrounding Metro East";
                        }
                      else {
                            echo "<p>Proudly serving the Metro East in St. Clair, Madison, and Clinton Counties";
                      }
                    ?>
                    <br />
                    Just Clean Window Cleaning is a professional window cleaning business that uses <b>pure water</b> to wash windows to a spot and streak free finish. That means that your windows are treated without harsh chemicals that can damage your lawn, siding, and windowsills. Call today to schedule a free at-home estimate at your convenience! Make sure to ask about our seasonal offer:</p>
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
    <?php include "about.html" ?>

    <!-- Services Section -->
    <?php include "service.html" ?>

    <!-- Contact Section -->
    <?php include "contact.html" ?>

    <!-- Footer -->
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
