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

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getGoal() {
        return $this->goal;
    }

    public function getAmountRaised() {
        return $this->amountRaised;
    }

    public function setAmountRaised($amountRaised) {
        $this->amountRaised = $amountRaised;
    }
}
