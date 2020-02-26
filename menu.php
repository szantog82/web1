<?php

function returnMenu($index){
$items = array("<a href=\"index.php?page=about\">Rólunk</a></li>\n",
"<a href=\"index.php?page=equipments\">Felszerelések</a></li>\n",
"<a href=\"index.php?page=stock\">Jelenlegi készlet</a></li>\n",
"<a href=\"index.php?page=contact\">Kapcsolat</a></li>\n",
"<a href=\"index.php?page=subscription\">Feliratkozás hírlevélre</a></li>\n");
          for ($i=0; $i<5; $i++){
              if ($index == $i){
                 $items[$i]="<li class=\"active\">" . $items[$i];
              } else {
                     $items[$i]="<li>" . $items[$i];
                }
              echo $items[$i];
          }
}

?>

<head>
  <title>Különleges zöldségek termesztése</title>
  <link rel="icon" href="res/kukorica.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<html>
<body>

  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php?page=about">
          <img class="img-responsive" src="res/kukorica.jpg">
        </a>
      </div>
      <ul class="nav navbar-nav">
        <?php
             if (isset($_GET["page"])) {
                switch ($_GET["page"]) {
                 case "about":
                      returnMenu(0);
                      break;
                 case "equipments":
                      returnMenu(1);
                      break;
                 case "stock":
                      returnMenu(2);
                      break;
                 case "contact":
                      returnMenu(3);
                      break;
                 case "subscription":
                      returnMenu(4);
                      break;
                 default:
                      returnMenu(0);
                      break;

                }
             }
             else {
            returnMenu(0);
             }
        ?>
      </ul>
    </div>
  </nav>
  <div class="title-image-container">
    <img src="res/agricult.jpg" alt="mezőgazdaság"
      width="100%" height="200px">

    <div class="text-block">
      <h4>Különleges termények</h4>
    </div>
  </div>