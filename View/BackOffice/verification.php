<?php
$title = $_POST['title'];
$destination = $_POST['destination'];
$departure_date = $_POST['departure_date'];
$return_date = $_POST['return_date'];
$price = $_POST['price'];
$availability = isset($_POST['customCheck']) ? true : false;  
$category = $_POST['category'];

class TravelOffer {
    private $title;
    private $destination;
    private $departure_date;
    private $return_date;
    private $price;
    private $availability;
    private $category;

    public function __construct($title, $destination, $departure_date, $return_date, $price, $availability, $category) {
        $this->title = $title;
        $this->destination = $destination;
        $this->departure_date = $departure_date;
        $this->return_date = $return_date;
        $this->price = $price;
        $this->availability = $availability;
        $this->category = $category;
    }

    public function showTravelOffer() {
        echo "<h2>Détails de l'offre de voyage</h2>";
        echo "<p><strong>Titre :</strong> {$this->title}</p>";
        echo "<p><strong>Destination :</strong> {$this->destination}</p>";
        echo "<p><strong>Date de départ :</strong> {$this->departure_date}</p>";
        echo "<p><strong>Date de retour :</strong> {$this->return_date}</p>";
        echo "<p><strong>Prix :</strong> {$this->price} €</p>";
        echo "<p><strong>Disponibilité :</strong> " . ($this->availability ? 'Disponible' : 'Non disponible') . "</p>";
        echo "<p><strong>Catégorie :</strong> {$this->category}</p>";
    }
}
$offre1 = new TravelOffer($title, $destination, $departure_date, $return_date, $price, $availability, $category);
echo "<pre>";
var_dump($offre1);
echo "</pre>";
$offre1->showTravelOffer();
?>
