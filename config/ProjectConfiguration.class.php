<?php

require_once '/Users/keyurdoshi/lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
// require_once dirname(__FILE__) . '/../../../symfony-1.4.20/lib/autoload/sfCoreAutoload.class.php';

// In this file register the autoloader of composer using the following line:
require_once __DIR__.'/../vendor/autoload.php';

// use Moesif\MoesifFilter;
// sfCoreAutoload::autoload("Moesif\Sender");
// use Moesif\MoesifFilter;
// use Moesif\Sender\MoesifApi;
// sfCoreAutoload::autoload("Moesif\Sender\MoesifApi");
// require_once __DIR__.'/../vendor/moesif/moesif-symfony1.4/src/Moesif/Sender/MoesifFilter.php';

sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
  }
}
