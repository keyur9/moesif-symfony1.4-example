<?php

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'prod', false);

$context = sfContext::createInstance($configuration);

$response = new sfWebResponse(sfContext::getInstance()->getEventDispatcher());
sfContext::getInstance()->setResponse($response);

$response->setStatusCode(200);

$response->sendHttpHeaders();

$context->dispatch();