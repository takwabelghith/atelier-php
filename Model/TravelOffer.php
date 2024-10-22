<?php
class TravelOffer {
    private $id;
    private $titre;
    private $destination;
    private $date_depart;
    private $date_retour;
    private $prix;
    private $disponible;
    private $categorie;

    public function __construct($id, $titre, $destination, $date_depart, $date_retour, $prix, $disponible, $categorie) {
        $this->id = $id;
        $this->titre = $titre;
        $this->destination = $destination;
        $this->date_depart = $date_depart;
        $this->date_retour = $date_retour;
        $this->prix = $prix;
        $this->disponible = $disponible;
        $this->categorie = $categorie;
    }
    public function getId() {
        return $this->id;
    }
    public function getTitre() {
        return $this->titre;
    }
    public function getDestination() {
        return $this->destination;
    }
    public function getDateDepart() {
        return $this->date_depart;
    }
    public function getDateRetour() {
        return $this->date_retour;
    }
    public function getPrix() {
        return $this->prix;
    }
    public function getDisponible() {
        return $this->disponible;
    }
    public function getCategorie() {
        return $this->categorie;
    }
    public function setTitre($titre) {
        $this->titre = $titre;
    }
    public function setDestination($destination) {
        $this->destination = $destination;
    }
    public function setDateDepart($date_depart) {
        $this->date_depart = $date_depart;
    }
    public function setDateRetour($date_retour) {
        $this->date_retour = $date_retour;
    }
    public function setPrix($prix) {
        $this->prix = $prix;
    }
    public function setDisponible($disponible) {
        $this->disponible = $disponible;
    }
    public function setCategorie($categorie) {
        $this->categorie = $categorie;
    }
    public function show() {
        echo "<table border='1'>";
        echo "<tr><th>Title</th><th>Destination</th><th>Departure Date</th><th>Return Date</th><th>Price</th><th>Disponibility</th><th>Category</th></tr>";
        echo "<tr>";
        echo "<td>" . $this->getTitre() . "</td>";
        echo "<td>" . $this->getDestination() . "</td>";
        echo "<td>" . $this->getDateDepart() . "</td>";
        echo "<td>" . $this->getDateRetour() . "</td>";
        echo "<td>" . $this->getPrix() . "</td>";
        echo "<td>" . ($this->getDisponible() ? 'Available' : 'Not Available') . "</td>";
        echo "<td>" . $this->getCategorie() . "</td>";
        echo "</tr>";
        echo "</table>";
    }
}
?>
