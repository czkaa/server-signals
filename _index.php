
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title></title>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="snippets/menu.css">
  <link rel="stylesheet" href="snippets/compass.css">
  <link rel="stylesheet" href="snippets/speed.css">
  <link rel="stylesheet" href="snippets/restart.css">
  <link rel="stylesheet" href="snippets/power.css">
  <link rel="stylesheet" href="snippets/self.css">
  <link rel="stylesheet" href="snippets/traceroute.css">
  <link rel="stylesheet" href="snippets/connection.css">
  <link rel="stylesheet" href="snippets/distance.css">


  <!-- <link rel="stylesheet" href="glossary.css">
  <link rel="stylesheet" href="map.css">
  <link rel="stylesheet" href="links.css"> -->

</head>
<body>

    <?php include 'snippets/menu.php';?>

    <main class="main">  
      <div class="main__hero">
        <div class="main__hero-inner">
          
        </div>
      </div>
      <div class="main__links">
        <div class="main__links-inner"></div>
      </div>
      <!-- <aside class="main__aside main__aside-left">
        <ul class="overview">
            <li><span>(1) </span> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </li>
            <li><span>(2)</span>  Lorem ipsum dolor sit amet</li>
            <li><span>(3)</span>  Lorem ipsum dolor sit amet</li>
            <li><span>(4)</span>  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </li>
            <li><span>(5)</span>  Lorem ipsum dolor sit amet</li>
            <li><span>(6)</span>  Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</li>
            <li><span>(7)</span>  Lorem ipsum dolor sit amet</li>
          </ul>      
      </aside> -->


        <?php include 'snippets/restart.php';?>

        <?php include 'snippets/self.php';?>
        <?php include 'snippets/distance.php';?>
        <?php include 'snippets/compass.php';?>

        <?php include 'snippets/speed.php';?>
        <?php include 'snippets/power.php';?>

        <?php include 'snippets/traceroute.php';?>
        <?php include 'snippets/connection.php';?>
      
    </main>

</html>
