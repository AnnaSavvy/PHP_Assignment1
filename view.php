<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Willowdale Gardening</title>
    <meta name="description" content="Willowdale Gardening">
    <meta name="author" content="Anna Savitskaia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril%20Fatface">
</head>


  <header>
    <h1>Willowdale Gardening. Call us now! <a href="tel:1-777-777-7777">1-777-777-7777</a></h1>

  </header>
  <nav id="nav_menu">
    <img src="img/logo.png" alt="Logo" width="100" height="100">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="subscribe.php" >Subscribe</a></li>
      <li><a href="view.php"  class="current">View</a></li>
      
    </ul>
  </nav>
  <main class="flexItem">
      <h2>Subscription List</h2>
      <div class="box">
          <?php
          include_once('database.php');
          if (!empty($_POST['agreement'])) {
              $novelty = (isset($_POST['novelty']) && $_POST['novelty'] == 'on') ? 1 : 0;
              $discounts = (isset($_POST['discounts']) && $_POST['discounts'] == 'on') ? 1 : 0;
              $workshops = (isset($_POST['workshops']) && $_POST['workshops'] == 'on') ? 1 : 0;
              $fairs = (isset($_POST['fairs']) && $_POST['fairs'] == 'on') ? 1 : 0;
              $query = "INSERT INTO `assign1` VALUES (NULL, '" . $_POST['first_name'] ."', '" . $_POST['last_name'] ."', '" . $_POST['email'] ."', '" . $_POST['phone'] ."', '" . $novelty ."', '" . $discounts ."', '" . $workshops ."', '" . $fairs ."');";
              $database->execute($query);
          }

          $data = $database->getData("SELECT * FROM assign1");
          for ($i = 0; $i < sizeof($data); $i++) {
              echo '<div class="item item'.$i . '">';
              echo 'First name: '.$data[$i]['fname'].'<br/>';
              echo 'Last name: '.$data[$i]['lname'].'<br/>';
              echo 'Email: '.$data[$i]['email'].'<br/>';
              echo 'Phone number: '.$data[$i]['phone'].'<br/>';
              echo 'Subscriptions: ';
              if($data[$i]['novelty'] == 1) {
                  echo 'novelty; '; }
              if($data[$i]['discounts'] == 1) {
                  echo 'discounts; '; }
              if($data[$i]['workshops'] == 1) {
                  echo 'workshops; '; }
              if($data[$i]['fairs'] == 1) {
                  echo 'fairs; '; }

              echo '</a></div>';
          }
          ?>

      </div>

  </main>


</body>
<footer>
  <p>Willowdale Gardening All Rights Reserved &copy; </p>
  <p>2023</p>
</footer>

</html>