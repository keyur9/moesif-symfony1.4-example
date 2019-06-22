<?php

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'prod', false);

$context = sfContext::createInstance($configuration);

$response = new sfWebResponse(sfContext::getInstance()->getEventDispatcher());

sfContext::getInstance()->setResponse($response);

$response->setStatusCode(201);
// $response->setHttpHeader('Content-Type', 'application/json');

// $response->clearHttpHeaders();

// $response->setHttpHeader('X-Moesif', 'XXXX');

// $response->getHttpHeaders();

// header("X-Moesif-Transaction-Id: XXXXXX");

$response->sendHttpHeaders();

$response->setContent(json_encode([
    'data' => 123,
]));

$response->sendContent();

$context->dispatch();
