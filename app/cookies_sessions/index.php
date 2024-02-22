<?php
declare(strict_types=1);
require_once './controller/homepage.php';
require_once './controller/connexion.php';
require_once './news.php';
session_start();

if (isset($_POST['feed-amount']) && !empty($_POST['feed-amount'])) {
  // Create cookie when form has been submitted to remember user preferences.
  $feed_amount =  intval($_POST['feed-amount']);
  setcookie('feed-amount', $_POST['feed-amount'], 0);
} else {
  
  if (isset($_COOKIE['feed-amount'])) {
    // Retrieve already existing cookie's value.
      $feed_amount = intval($_COOKIE['feed-amount']);
    } else {
      // First visit. Neither any existing cookie nor previous form submission has occurred. 
      $feed_amount = 10;
  }
}

$news = [
  "Shenyang Joins Battle of Chinese Cities for Russian Seafood Trade",
  "Egypt will not cover Giza pyramid with granite blocks following expert report",
  "The EU began to discuss the creation of an alternative to NATO",
  "With a big push now we can finish off the Satanists FOREVER",
  "Tehran urges ‘close neighborly ties’ to expel US/ISIS/al Qaeda forces from West Asia",
  "UN Seeks to Legalize Pedophiles",
  "North Korea says US drills amount to ‘declaration of war’",
  "Protesting Farmers Lead Worldwide Populist Revolt Against Anti-Human Elites – Joachim Hagopian",
  "Navalny death planned and coordinated by the West",
  "The Russian Armed Forces have completed the clearing of the Avdeevsky coke plant, and work has begun on demining the city",
];
?>
