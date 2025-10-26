<?php

class Actor {
    private $name;
    private $cityVillage;

    public function __construct($name, $cityVillage) {
        $this->name = $name;
        $this->cityVillage = $cityVillage;
        echo "Instance of " . __CLASS__ . " created using " . __METHOD__ . "\n";
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




