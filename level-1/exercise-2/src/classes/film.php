<?php

require_once 'director.php';
require_once 'actor.php';

class film {
    private $title;
    private $year;
    private $director;
    private $actors = [];

    public function __construct($title, $year, Director $director) {
        $this->title = $title;
        $this->year = $year;
        $this->director = $director;
        echo "Instance of " . __CLASS__ . " created using " . __METHOD__ . " line " . __LINE__ . "\n";
    }

    public function addActor(Actor $actor) {
        $this->actors[] = $actor;
        echo "Added actor with " . __METHOD__ . "\n";
    }

    public function __toString() {
        $actorsText = implode(", ", array_map('strval', $this->actors));
        return $this->title . "' (" . $this->year . "), directed by " . $this->director . 
               "\nStarring: " . $actorsText;
    }
}

?>


