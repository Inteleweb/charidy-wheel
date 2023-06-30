// FundraiserRepository.php

<?php

class FundraiserRepository {
    private $filename = 'data/fundraisers.txt';

    public function save(Fundraiser $fundraiser) {
        // Save the fundraiser data to the file
    }

    public function getById($id) {
        // Retrieve a fundraiser by ID from the file
    }

    public function update(Fundraiser $fundraiser) {
        // Update the fundraiser data in the file
    }
}
