<?php

namespace Autobus\Bundle\BusSampleBundle\Runner;

use Autobus\Bundle\BusBundle\Context;
use Autobus\Bundle\BusBundle\Entity\Job;
use Autobus\Bundle\BusBundle\Entity\Execution;
use Autobus\Bundle\BusBundle\Runner\AbstractRunner;

class HelloWorldRunner extends AbstractRunner
{
    protected function run(Context $context, Job $job, Execution $execution)
    {
        return $context->setMessage('Hello world!');
    }
}
