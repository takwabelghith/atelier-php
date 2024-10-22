<?php
require_once '../Model/TravelOffer.php';
$offer1 = new TravelOffer(1, "Discover Paris", "Paris/France", "2024-10-15", "2024-10-22", 1200.00, true, "Luxe");
echo "<h2>Détails avec var_dump :</h2>";

var_dump($offer1);
echo "<h2>Affichage avec show() :</h2>";
$offer1->show();
?>


<?php
require_once '../Model/TravelOffer.php';
$offer1 = new TravelOffer(1, "Discover Paris", "Paris/France", "2024-10-15", "2024-10-22", 1200.00, true, "Luxe");
$offer1->show(); 

$offer2 = new TravelOffer(2, "Explore Tokyo", "Tokyo/Japan", "2024-11-01", "2024-11-10", 1500.00, false, "Cultural");
$offer2->show(); 

$offer2->setTitre("Discover Tokyo");  
$offer2->show();  
?>
