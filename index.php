<?php include("page.conf.php");
      if (isset($_GET["page"])) {
         include($arr[$_GET["page"]]);
      }
      else {
           include("about.php");
      };
 ?>