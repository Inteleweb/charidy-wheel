<?php

class FundraiserController {
    private $fundraiserRepository;

    public function __construct() {
        $this->fundraiserRepository = new FundraiserRepository();
    }

    public function create() {
        // Handle the creation of a new fundraiser.
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $goal = $_POST['goal'];

            $fundraiser = new Fundraiser(null, $name, $goal, 0);
            $this->fundraiserRepository->save($fundraiser);

            header('Location: /fundraiser/' . $fundraiser->getId());
            exit();
        }
    }

    public function update() {
        // Handle updating the fundraising progress of a fundraiser.
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $amountRaised = $_POST['amountRaised'];

            $fundraiser = $this->fundraiserRepository->getById($id);
            if ($fundraiser) {
                $fundraiser->setAmountRaised($amountRaised);
                $this->fundraiserRepository->update($fundraiser);

                header('Location: /fundraiser/' . $fundraiser->getId());
                exit();
            }
        }
    }

    public function show() {
        // Handle displaying a fundraiser's details.
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $fundraiser = $this->fundraiserRepository->getById($id);

        if ($fundraiser) {
            $templateRenderer = new TemplateRenderer();
            $templateRenderer->render('fundraiser-details.php', ['fundraiser' => $fundraiser]);
        } else {
            header('HTTP/1.0 404 Not Found');
            die('404 - Fundraiser not found');
        }
    }
}
