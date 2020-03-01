<?php include("menu.php");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
header("Location: index.php");
exit();
}
?>

<div class="container" style="margin-bottom: 50px;">
    <h3>Köszönjük regisztációját!</h3>
    <h4>Az alábbi adatokkal regisztráltuk:</h4>
    <?php
     echo "<p><b>Név</b>: " . htmlspecialchars($_POST["name"]) . "</p><p><b>e-mail cím</b>: "
     . htmlspecialchars($_POST["email"]) . "</p>";
    ?>
    <p><b>Választott opció</b>: <?php echo $_POST["optradio"];?>  </p>

    <br>
    <p>További jó böngészést oldalunkon!</p>
<?php include("footer.php"); ?>
      </body>
</html>
