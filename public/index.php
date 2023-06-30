// index.php

<?php

require_once 'Router.php';
require_once 'FundraiserController.php';
require_once 'FundraiserRepository.php';
require_once 'Fundraiser.php';
require_once 'TemplateRenderer.php';

$router = new Router();
$router->route();
