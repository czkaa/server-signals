<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title></title>
  <link rel="stylesheet" href="../reset.css">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../snippets/menu.css">
  <link rel="stylesheet" href="about/index.css">
</head>
<body>

    <?php $active='about';include '../snippets/menu.php';?>

    <main class="main"> 
        <div class="main__hero">
        <div class="about">
      <p>While we all are in various dependencies on complex digital infrastructures, this fact remains either unconscious or difficult to understand for most people. This project is an invitation to engage with the fundamental conditions of digital infrastructure. By examining the relationship between a website, the server on which it is hosted, and the surrounding infrastructure, the abstract nature of the supposedly digital world is broken down and its physical realities are illuminated.
    br><br>To this end, a self-sufficient web server has been developed, based on a Raspberry Pi 4 and equipped with a battery hat and an LTE module. This web server, which sometimes moves and sometimes stays still, serves as a host for a digital publication. This publication, in turn, turns the inside of the server outward by providing real-time information about the server.

  Initially, basic parameters such as the type of connection, the type of power supply, the current charge level, and the current location of the server are displayed. This enables direct insight into the operating conditions of the server and makes the normally hidden aspects of digital infrastructure visible. Additionally, three further tools allow the user to experiment.
  <br><br>In <i>Network Tapestry</i> a map tracces and aggregates the route that the data has taken from the server to the user. <i>On / Off</i> allows the server to be restarted directly by the user via the website. This process causes the server to be unreachable for a few seconds for other users as well, makaing the fragility and dependency of digital infrastructure tangible and invites reflection on the stability and availability of online services. Lastly, in <i>Lead Me to Your Heart</i> a compass serves as navigation tool and allows the user to position herself in relation to the server physically.
  <br><br>Another component of the website is a glossary of basic terms tied to digital infrastructure. This glossary is designed to provide access for users with different levels of knowledge and simultaneously offers starting points for further engagement. 
<br><br>
<a href="https://github.com/czkaa/server-signals">Github repository</a>
<br>
Developed by Karen Czock within the framework of the <a href="https://www.udk-berlin.de/universitaet/digitalisierung/labor-fuer-digitale-infrastruktur/" target="_blanl">Laboratory for Digital Infrastructure</a>.</p>
    </div>
      </div> 
    </main>

   
</html>
