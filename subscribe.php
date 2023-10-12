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
      <li><a href="subscribe.php" class="current">Subscribe</a></li>
      <li><a href="view.php">View</a></li>
      
    </ul>
  </nav>
  <main class="hero">
    <section>
      <h2>Our subscription offer:</h2>
      <p>We offer information about new arrivals, discounts, workshops and fairs. <br>
         If you are not happy with your product, you can unsubscribe at any time. <br>
        Subscribing to our gardening community offers a wealth of benefits for green-thumbed enthusiasts. <br>
         You'll gain access to a diverse range of seeds and saplings, expert tips on nurturing your plants,<br>
          and a supportive community eager to share their knowledge and experiences, fostering a thriving<br>
           environment for your gardening journey. <br /><br />
        For any questions please call 1-777-777-7777 or fill in an Subscription form below:
      </p>
    </section>
    <figure><img src="img/flower.jpg" alt="flowers" width="400">
    </figure>
  </main>
  <section class="flexItem" id="application">
    <h2>Subscription Form</h2>
    <form name="subscribe_form" action="view.php" method="post" enctype="multipart/form-data">
      <label for="first_name">First Name: </label>
      <input type="text" id="first_name" name="first_name" required>
      <label for="last_name">Last Name: </label>
      <input type="text" id="last_name" name="last_name" required>
      <label id="emailLabel" for="email">Email: </label>
      <input type="email" id="email" name="email" required>
      <label for="phone">Phone number:</label>
      <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required placeholder="333-333-3333">
      <span id="contact">Subscribe me:</span>
      <div class="gridWidth">
        <input type="checkbox" id="novelty" name="novelty">
        <label for="novelty">Novelty</label>
        <input type="checkbox" id="discounts" name="discounts">
        <label for="discounts">Discounts</label>
        <input type="checkbox" id="workshops" name="workshops">
        <label for="workshops">Workshops</label>
        <input type="checkbox" id="fairs" name="fairs">
        <label for="fairs">Fairs</label>
      </div>
      <div class="gridFullWidth">
        <input type="checkbox" id="agreement" name="agreement" required>
        <label for="agreement">I agree to the Terms and Conditions</label>
      </div>
      <div class="gridFullWidth">
        <input class="formButton" type="submit" value="Submit">
        <input class="formButton" type="reset" id="reset">
      </div>
    </form>
  </section>
  </div>
</body>
<footer>
  <p>Willowdale Gardening All Rights Reserved &copy; </p>
  <p>2023</p>
</footer>

</html>