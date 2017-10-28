<?php

namespace Choredo\Providers;

use Choredo\Actions;
use League\Container\ServiceProvider\AbstractServiceProvider;

class ActionProvider extends AbstractServiceProvider
{

    protected $provides = [
        Actions\Family\GetFamily::class, 
        Actions\Chore\ListChores::class
    ];

    /**
     * Use the register method to register items with the container via the
     * protected $this->container property or the `getContainer` method
     * from the ContainerAwareTrait.
     *
     * @return void
     */
    public function register()
    {
        $this->getContainer()->share(Actions\Chore\ListChores::class);
        $this->container->share(Actions\Family\GetFamily::class);
    }
}
