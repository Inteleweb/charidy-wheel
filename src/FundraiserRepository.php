<?php

class FundraiserRepository {
    private $filename = 'data/fundraisers.txt';

    public function save(Fundraiser $fundraiser) {
        $data = $this->readDataFromFile();
        $data[] = $fundraiser;
        $this->writeDataToFile($data);
    }

    public function getById($id) {
        $data = $this->readDataFromFile();
        foreach ($data as $fundraiser) {
            if ($fundraiser->getId() === $id) {
                return $fundraiser;
            }
        }
        return null;
    }

    public function update(Fundraiser $fundraiser) {
        $data = $this->readDataFromFile();
        $updatedData = [];
        foreach ($data as $existingFundraiser) {
            if ($existingFundraiser->getId() === $fundraiser->getId()) {
                $updatedData[] = $fundraiser;
            } else {
                $updatedData[] = $existingFundraiser;
            }
        }
        $this->writeDataToFile($updatedData);
    }

    private function readDataFromFile() {
        if (file_exists($this->filename)) {
            $fileContents = file_get_contents($this->filename);
            $data = unserialize($fileContents);
            return $data ? $data : [];
        }
        return [];
    }

    private function writeDataToFile($data) {
        $fileContents = serialize($data);
        file_put_contents($this->filename, $fileContents);
    }
}
