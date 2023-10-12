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

<body>
    <header>
        <h1>Willowdale Gardening. Call us now! <a href="tel:1-777-777-7777">1-777-777-7777</a></h1>
    </header>
    <nav id="nav_menu">
        <img src="img/logo.png" alt="Logo" width="100" height="100">
        <ul>
            <li><a href="index.php" class="current">Home</a></li>
            <li><a href="subscribe.php">Subscribe</a></li>
            <li><a href="view.php">View</a></li>
        </ul>
    </nav>
    <main class="hero">
        <section>
            <h2>A new decorative bushes has arrived!</h2>
            <p>Join our community of passionate gardening enthusiasts!<br>
                We deliver seeds and plant seedlings. Moreover we provide consultations<br>
                 and useful information on caring for your garden.
            <p><a class="button" href="#features">Click for more information</a></p>
        </section>
        <figure><img src="img/garden.jpg" alt="Garden" width="400">
        </figure>
    </main>

    <div id="features" class="box">
        <?php
        $itemArray = array(array("https://en.wikipedia.org/wiki/Gardening", "gardening", "Gardening secrets", "We will share our many years of experience in successfully growing
                 ornamental and exotic plants in the difficult climate conditions of Canada."),array("https://en.wikipedia.org/wiki/Cottage_garden", "plant", "Discount on seedlings", "We provide our subscribers with a discount on seeds and seedlings of rare plants."),array("https://en.wikipedia.org/wiki/Ornamental_plant", "plant-delivery", "Delivery to your home", "We will deliver your chosen plants and seeds straight to your doorstep."),array("https://en.wikipedia.org/wiki/History_of_gardening", "watering", "Tips for growing", "We will provide detailed growing instructions for each plant you choose,
                     ensuring you get consistently excellent results."));
        for ($i = 0; $i < sizeof($itemArray); $i++) {
            echo '<div class="item item'.$i . '">';
            echo '<a href="'.$itemArray[$i][0].'">';
            echo '<img class=utility_pic src="img/'.$itemArray[$i][1].'.png" alt="plant pot" width="100">';
            echo '<h3>'.$itemArray[$i][2].'</h3><p>'.$itemArray[$i][3].'</p>';
            echo '</a></div>';
        }
        ?>
    </div>
</body>
<footer>
    <p>Willowdale Gardening All Rights Reserved &copy; </p>
    <p>2023</p>
</footer>

</html>