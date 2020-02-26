<?php include("menu.php"); ?>

<div class="container" style="margin-bottom: 50px;">
    <h3 class="center-text">Regisztráció</h3>
    <p>Itt tudsz regisztrálni hírlevélre:</p>
    <form action="submit.php" method="post">
      <div class="form-group">
        <label for="name">Név:</label>
        <input type="text" class="form-control" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">E-mail cím:</label>
        <input type="email" class="form-control" name="email" required>
      </div>
      <p>Honnan hallottál rólunk?</p>
      <div class="radio">
        <label><input type="radio" name="optradio" value="Interneten" checked>Interneten</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="optradio" value="Ismerőstől">Ismerőstől</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="optradio" value="Rádióból">Rádióból</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="optradio" value="Egyéb">Egyéb</label>
      </div>
      <input class="btn btn-primary" type="submit" value="Elküldés">
    </form>
  </div>

  </body>
</html>