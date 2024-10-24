
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
  <link rel="stylesheet" href="snippets/location.css">


  <!-- <link rel="stylesheet" href="glossary.css">
  <link rel="stylesheet" href="map.css">
  <link rel="stylesheet" href="links.css"> -->

</head>
<body>

    <?php $active='home'; include 'snippets/menu.php';?>

    <main class="main"> 
      <div class="main-inner">
        <div class="main__hero">
          <div class="hero__row">
            <?php include 'snippets/location.php';?>
            <?php include 'snippets/distance.php';?>
            <?php include 'snippets/power.php';?>
          </div>

          <?php include 'snippets/self.php';?>

          <div class="hero__row">
            <?php include 'snippets/speed.php';?>
            <?php include 'snippets/connection.php';?>
          </div>       
        </div>
      </div> 
    </main>
</html>
