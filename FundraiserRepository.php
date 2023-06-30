<?php

class FundraiserRepository {
    private $dataFile = 'fundraisers.txt';

    public function save(Fundraiser $fundraiser) {
        // Load all fundraisers from the data file (if it exists).
        // Add the new fundraiser to the collection.
        // Save the updated collection back to the data file.
    }

    public function update(Fundraiser $fundraiser) {
        // Load all fundraisers from the data file.
        // Find the fundraiser with the same ID as the provided fundraiser.
        // Update the fundraiser's data.
        // Save the updated collection back to the data file.
    }

    public function getById($id) {
        // Load all fundraisers from the data file.
        // Find the fundraiser with the provided ID.
        // Return the fundraiser object.
    }
}
