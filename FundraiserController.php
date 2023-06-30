<?php

class FundraiserController {
    private $fundraiserRepository;

    public function __construct() {
        $this->fundraiserRepository = new FundraiserRepository();
    }

    public function create() {
        // Handle the creation of a new fundraiser.
        // Retrieve data from the HTTP request (e.g., fundraiser name and goal).
        // Create a new Fundraiser object with the provided data.
        // Save the fundraiser using the FundraiserRepository.
        // Redirect to the newly created fundraiser's sub-page.
    }

    public function update() {
        // Handle updating the fundraising progress of a fundraiser.
        // Retrieve data from the HTTP request (e.g., fundraiser ID and new amount raised).
        // Retrieve the fundraiser from the FundraiserRepository using the ID.
        // Update the fundraiser's amount raised.
        // Save the updated fundraiser using the FundraiserRepository.
        // Redirect to the fundraiser's sub-page.
    }

    public function show() {
        // Handle displaying a fundraiser's details.
        // Retrieve data from the HTTP request (e.g., fundraiser ID).
        // Retrieve the fundraiser from the FundraiserRepository using the ID.
        // Render the fundraiser's details using the TemplateRenderer.
    }
}
