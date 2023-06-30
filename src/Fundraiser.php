// Fundraiser.php

<?php

class Fundraiser {
    private $id;
    private $name;
    private $goal;
    private $amountRaised;

    public function __construct($id, $name, $goal, $amountRaised) {
        $this->id = $id;
        $this->name = $name;
        $this->goal = $goal;
        $this->amountRaised = $amountRaised;
    }

    // Getters and setters for the properties
}
