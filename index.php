<?php

require_once 'vendor/autoload.php';
require_once 'src/Router.php';
require_once 'src/FundraiserController.php';
require_once 'src/FundraiserRepository.php';
require_once 'src/Fundraiser.php';
require_once 'src/TemplateRenderer.php';

use App\Router;

$router = new Router();
$router->route();
