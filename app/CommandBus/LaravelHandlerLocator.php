<?php namespace App\CommandBus;

use Tactician\Handler\Locator\HandlerLocator;
use Illuminate\Foundation\Application;

class LaravelHandlerLocator implements HandlerLocator
{
    protected $container;

    public function __construct(Application $container)
    {
        $this->container = $container;
    }

    public function getHandlerForCommand($command)
    {
        $class = get_class($command).'Handler';
        return $this->container->make($class);
    }
}