<?php

class Director {
    private $name;
    private $cityVillage;

    public function __construct($name, $cityVillage) {
        $this->name = $name;
        $this->cityVillage = $cityVillage;
        echo "Creating instance of " . __CLASS__ . " from " . __METHOD__ . "\n";
    }

    public function getName() {
        return $this->name;
    }

    public function getCityVillage() {
        return $this->cityVillage;
    }

    public function __toString() {
        return $this->name . " (" . $this->cityVillage . ")";
    }
}

?>


