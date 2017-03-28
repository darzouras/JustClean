<?php $file = "services.php";
$modify_time = filemtime($file);
header("Last-Modified: " . gmdate("D, d M Y H:i:s", $modify_time) . " GMT");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="alternate" href="http://www.justcleanwindowcleaning.com/services.php" hreflang="en-us" />
  <script type="application/ld+json">
  {
      "@context": "http://schema.org",
      "@type": "Service",
      "provider": [{
        "@type": "Organization",
        "url": "http://justcleanwindowcleaning.com/services.php",
        "name": "Just Clean Window Cleaning - About Us",
        "telephone": "+1-618-806-7476",
        "image": "http://www.justcleanwindowcleaning.com/images/logo.png",
        "description": "Home and commercial window washing, hard water stains, indoor and outdoor windows, and window screen washing",
        "areaServed": "Metro East IL, St. Louis, Madison County, St. Clair County, Clinton County",
        "address": [{
            "streetAddress": "1007 Matthew Dr. O'Fallon IL",
            "addressLocality": "O'Fallon",
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
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Home and commercial window cleaning for Metro East - Services">
  <meta name="author" content="Just Clean Window Cleaning">
  <title>Just Clean Window Cleaning - Services</title>
  <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
  <?php include "header.html" ?>

  <?php include "services.html" ?>

  <?php include "footer.html" ?>

  <script src="js/jquery.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Scrolling Nav JavaScript -->
  <script src="js/jquery.easing.min.js"></script>
  <!-- Scrolling Nav JavaScript -->
  <script src="js/scrolling-nav.js"></script>

  </script>
</body>
</html>
